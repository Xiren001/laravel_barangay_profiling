<?php
  
namespace App\Http\Controllers;
  
use App\Models\Resident;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $residents = Resident::latest()->paginate(5);
        
        return view('residents.index',compact('residents'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('residents.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => 'required',
    'middlename' => 'required',
    'lastname' => 'required',
    'address' => 'required',
    'suffix' => 'required',
    'job_status' => 'required',
    'block' => 'required',
    'street' => 'required',
    'subd_purok' => 'required',
    'birthplace' => 'required',
    'birthday' => 'required|date',
    'age' => 'required|integer',
    'gender' => 'required',
    'civil_status' => 'required',
    'citizenship' => 'required',
    'email' => 'required|email',
    'religion' => 'required',
    'blood_type' => 'required',
    'voters_id' => 'required|integer',
    'presinct_no' => 'required|integer',
    'contact_number' => 'required',
    'household_id' => 'required|integer',
    'occupation' => 'required',
    'disabilities' => 'required',
    'emergency_contacts' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
      
        Resident::create($input);
       
        return redirect()->route('residents.index')
                         ->with('success', 'Resident created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Resident $resident): View
    {
        return view('residents.show', compact('resident'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident): View
    {
        return view('residents.edit', compact('resident'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resident $resident): RedirectResponse
    {
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'suffix' => 'required',
            'job_status' => 'required',
            'block' => 'required',
            'street' => 'required',
            'subd_purok' => 'required',
            'birthplace' => 'required',
            'birthday' => 'required|date',
            'age' => 'required|integer',
            'gender' => 'required',
            'civil_status' => 'required',
            'citizenship' => 'required',
            'email' => 'required|email',
            'religion' => 'required',
            'blood_type' => 'required',
            'voters_id' => 'required|integer',
            'presinct_no' => 'required|integer',
            'contact_number' => 'required',
            'household_id' => 'required|integer',
            'occupation' => 'required',
            'disabilities' => 'required',
            'emergency_contacts' => 'required|integer',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
            
        $resident->update($input);
      
        return redirect()->route('residents.index')
                         ->with('success', 'Resident updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident): RedirectResponse
    {
        $resident->delete();
         
        return redirect()->route('residents.index')
                         ->with('success', 'Resident deleted successfully');
    }
}