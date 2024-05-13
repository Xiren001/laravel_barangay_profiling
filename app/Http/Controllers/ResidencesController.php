<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Residence;

class ResidencesController extends Controller
{
  public function index(){
    return view('residence.list');
  }

  public function create(){

    return view('residence.create');
  }

  public function store(Request $request){
    $rules = [
        'firstname' => 'required|max:50',
        'middlename' => 'required|max:50',
        'lastname' => 'required|max:50',
        'address' => 'required|max:50',
        'suffix' => 'required|max:20',
        'job_status' => 'required|max:50',
        'block' => 'required|max:20',
        'street' => 'required|max:99',
        'subd_purok' => 'required|max:50',
        'birthplace' => 'required|max:50',
        'birthday' => 'required|date',
        'age' => 'required|integer',
        'gender' => 'required|max:6',
        'civil_status' => 'required|max:20',
        'citizenship' => 'required|max:50',
        'email' => 'required|email',
        'religion' => 'required|max:50',
        'blood_type' => 'required|max:2',
        'voters_id' => 'required|integer',
        'presinct_no' => 'required|integer',
        'contact_number' => 'required|max:15', // Adjust max length as needed
        'household_id' => 'required|integer',
        'occupation' => 'required|max:50',
        'disabilities' => 'required|max:50',
        'emergency_contacts' => 'required|integer',
    ];
    
    $validator = Validator::make($request->all(),$rules);

    if($validator->fails()){
        return redirect()->route('residence.create')->withInput()->withErrors($validator);
    }

    $residence = new Residence();
    $residence->firstname = $request->firstname;
    $residence->middlename = $request->middlename;
    $residence->lastname = $request->lastname;
    $residence->address = $request->address;
    $residence->suffix = $request->suffix;
    $residence->job_status = $request->job_status;
    $residence->block = $request->block;
    $residence->street = $request->street;
    $residence->subd_purok = $request->subd_purok;
    $residence->birthplace = $request->birthplace;
    $residence->birthday = $request->birthday;
    $residence->age = $request->age;
    $residence->gender = $request->gender;
    $residence->civil_status = $request->civil_status;
    $residence->citizenship = $request->citizenship;
    $residence->email = $request->email;
    $residence->religion = $request->religion;
    $residence->blood_type = $request->blood_type;
    $residence->voters_id = $request->voters_id;
    $residence->presinct_no = $request->presinct_no;
    $residence->contact_number = $request->contact_number;
    $residence->household_id = $request->household_id;
    $residence->occupation = $request->occupation;
    $residence->disabilities = $request->disabilities;
    $residence->emergency_contacts = $request->emergency_contacts;

    $residence->save();

    return redirect()->route('residence.index')->with('success','Resident added successfully.');
  }

  public function edit(){

  }

  public function update(){

  }

  public function destroy(){

  }

}
