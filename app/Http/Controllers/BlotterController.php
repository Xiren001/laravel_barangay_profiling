<?php
  
namespace App\Http\Controllers;
  
use App\Models\Blotter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class BlotterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $blotters = Blotter::latest()->paginate(100);
        $statusACounts = Blotter::count(); // Count the total number of records

        $statusCounts = Blotter::select('status')
                        ->get()
                        ->groupBy('status')
                        ->map(function ($status) {
                            return $status->count();
                        });

        return view('blotters.index', compact('blotters', 'statusCounts','statusACounts'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('blotters.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'complainant' => 'required',
            'respondent' => 'required',
            'victim' => 'required',
            'incident' => 'required',
            'incident_date' => 'required|date',
            'status' => 'required',
           
        ]);
    
        Blotter::create($request->all());

        return redirect()->route('blotters.index')
                         ->with('success', 'blotter created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Blotter $blotter): View
    {
        return view('blotters.show', compact('blotter'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blotter $blotter): View
    {
        return view('blotters.edit', compact('blotter'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blotter $blotter): RedirectResponse
    {
        $request->validate([
            'complainant' => 'required',
            'respondent' => 'required',
            'victim' => 'required',
            'incident' => 'required',
            'incident_date' => 'required|date',
            'status' => 'required',
        ]);

        $blotter->update($request->all());
      
        return redirect()->route('blotters.index')
                         ->with('success', 'blotter updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blotter $blotter): RedirectResponse
    {
        $blotter->delete();
         
        return redirect()->route('blotters.index')
                         ->with('success', 'blotter deleted successfully');
    }
}