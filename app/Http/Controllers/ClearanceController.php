<?php
  
namespace App\Http\Controllers;
  
use App\Models\Clearance;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class ClearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $clearances = Clearance::latest()->paginate(100);
        
        return view('clearances.index',compact('clearances'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);

    }


    

  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('clearances.create');
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
      
        Clearance::create($input);
       
        return redirect()->route('clearances.index')
                         ->with('success', 'clearance created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Clearance $clearance): View
    {
        return view('clearances.show', compact('clearance'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clearance $clearance): View
    {
        return view('clearances.edit', compact('clearance'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clearance $clearance): RedirectResponse
    {
        $request->validate([
            'tracking' => 'required',
            'name' => 'required',
            'address' => 'required',
            'dateb' => 'required',
            'number' => 'required',
            'date' => 'required',
            'payment' => 'required',
            'ref' => 'required',
            'bio' => 'required',
        ]);
    
        $input = $request->all();

        if ($uploadFile = $request->file('upload_file')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $uploadFile->getClientOriginalExtension();
            $uploadFile->move($destinationPath, $profileImage);
            $input['upload_file'] = "$profileImage";
        } else {
            unset($input['upload_file']);
        }
        
        if ($uploadFileSig = $request->file('upload_file_sig')) {
            $destinationPath = 'images/';
            $profileImageSig = date('YmdHis') . "_sig." . $uploadFileSig->getClientOriginalExtension();
            $uploadFileSig->move($destinationPath, $profileImageSig);
            $input['upload_file_sig'] = "$profileImageSig";
        } else {
            unset($input['upload_file_sig']);
        }
        
            
        $clearance->update($input);
      
        return redirect()->route('clearances.index')
                         ->with('success', 'clearance updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clearance $clearance): RedirectResponse
    {
        $clearance->delete();
         
        return redirect()->route('clearances.index')
                         ->with('success', 'clearance deleted successfully');
    }
}