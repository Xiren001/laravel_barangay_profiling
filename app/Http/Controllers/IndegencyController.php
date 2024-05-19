<?php
  
namespace App\Http\Controllers;
  
use App\Models\Indegency;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
  
class IndegencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $indegencys = Indegency::latest()->paginate(100);
        
        return view('indegencys.index',compact('indegencys'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);

    }

     /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index2(): View
    {
        $indegencys = Indegency::latest()->paginate(100);
        
        return view('indegencys.index2',compact('indegencys'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);

    }


    

  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('indegencys.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tracking' => 'required|string',
            'name' => 'required|string',
            'address' => 'required|string',
            'dateb' => 'required|date',
            'number' => 'required|string',
            'date' => 'required|date',
            'upload_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'upload_file_sig' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'payment' => 'required|string',
            'ref' => 'required|string',
            'bio' => 'required|string',
        ]);
    
        $input = $request->all();
    
        if ($uploadFile = $request->file('upload_file')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $uploadFile->getClientOriginalExtension();
            $uploadFile->move($destinationPath, $profileImage);
            $input['upload_file'] = "$profileImage";
        }
        
        if ($uploadFileSig = $request->file('upload_file_sig')) {
            $destinationPath = 'images/';
            $profileImageSig = date('YmdHis') . "_sig." . $uploadFileSig->getClientOriginalExtension();
            $uploadFileSig->move($destinationPath, $profileImageSig);
            $input['upload_file_sig'] = "$profileImageSig";
        }
      
        Indegency::create($input);
       
        return redirect()->route('indegencys.index')
                         ->with('success', 'indegency created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Indegency $indegency): View
    {
        return view('indegencys.show', compact('indegency'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indegency $indegency): View
    {
        return view('indegencys.edit', compact('indegency'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Indegency $indegency): JsonResponse
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        // Update the business status
        $indegency->status = $request->status;
        $indegency->save();

        // Return a JSON response
        return response()->json(['success' => true, 'message' => 'indegency status updated successfully']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indegency $indegency): RedirectResponse
    {
        $indegency->delete();
         
        return redirect()->route('indegencys.index')
                         ->with('success', 'indegency deleted successfully');
    }
}