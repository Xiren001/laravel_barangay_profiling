<?php
  
namespace App\Http\Controllers;
  
use App\Models\Id;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class IdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $ids = Id::latest()->paginate(100);
        
        return view('ids.index',compact('ids'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);

    }

    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index2(): View
    {
        $ids = Id::latest()->paginate(100);
        
        return view('ids.index2',compact('ids'))
                    ->with('i', (request()->input('page', 1) - 1) * 100);

    }



    

  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('ids.create');
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
      
        Id::create($input);
       
        return redirect()->route('ids.index')
                         ->with('success', 'id created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Id $id): View
    {
        return view('ids.show', compact('id'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Id $id): View
    {
        return view('ids.edit', compact('id'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Id $id): RedirectResponse
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
        
            
        $id->update($input);
      
        return redirect()->route('ids.index')
                         ->with('success', 'id updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Id $Id): RedirectResponse
    {
        $Id->delete();
         
        return redirect()->route('ids.index')
                         ->with('success', 'Id deleted successfully');
    }
}