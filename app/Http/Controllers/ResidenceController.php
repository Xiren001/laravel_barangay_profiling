<?php
  
namespace App\Http\Controllers;
  
use App\Models\Residence;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
  
class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $residences = Residence::latest()->paginate(100);
        
        return view('residences.index',compact('residences'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);

    }

    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index2(): View
    {
        $residences = Residence::latest()->paginate(100);
        
        return view('residences.index2',compact('residences'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);

    }


    

  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('residences.create');
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
      
        Residence::create($input);
       
        return redirect()->route('residences.index')
                         ->with('success', 'residence created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Residence $residence): View
    {
        return view('residences.show', compact('residence'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Residence $residence): View
    {
        return view('residences.edit', compact('residence'));
    }
  
     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Residence $residence): JsonResponse
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        // Update the business status
        $residence->status = $request->status;
        $residence->save();

        // Return a JSON response
        return response()->json(['success' => true, 'message' => 'residence status updated successfully']);
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Residence $residence): RedirectResponse
    {
        $residence->delete();
         
        return redirect()->route('residences.index')
                         ->with('success', 'residence deleted successfully');
    }
}