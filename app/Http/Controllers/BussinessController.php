<?php
  
namespace App\Http\Controllers;
  
use App\Models\Bussiness;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class BussinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $bussinesses = Bussiness::latest()->paginate(100);
        
        return view('bussinesses.index',compact('bussinesses'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);

    }


    

  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('bussinesses.create');
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
      
        Bussiness::create($input);
       
        return redirect()->route('bussinesses.index')
                         ->with('success', 'bussiness created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Bussiness $bussiness): View
    {
        return view('bussinesses.show', compact('bussiness'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bussiness $bussiness): View
    {
        return view('bussinesses.edit', compact('bussiness'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bussiness $bussiness): RedirectResponse
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
        
            
        $bussiness->update($input);
      
        return redirect()->route('bussinesses.index')
                         ->with('success', 'bussiness updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bussiness $bussiness): RedirectResponse
    {
        $bussiness->delete();
         
        return redirect()->route('bussinesses.index')
                         ->with('success', 'bussiness deleted successfully');
    }
}