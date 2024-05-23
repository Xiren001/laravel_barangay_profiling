<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    public function index()
    {
        $users = User::latest('id')->get();
        $user_type = auth()->user()->usertype; // Get the user type of the logged-in user
        return view('admin.index', compact('users', 'user_type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add New User";
        return view('admin.add_edit_user', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'photo' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );

        $filePath = public_path('uploads');
        $insert = new User();
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->password = bcrypt('password');


        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();

            $file->move($filePath, $file_name);
            $insert->photo = $file_name;
        }

        $result = $insert->save();
        Session::flash('success', 'User registered successfully');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = "Update User";
        $edit = User::findOrFail($id);
        return view('admin.add_edit_user', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $id): JsonResponse
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'required',
                'photo' => 'mimes:png,jpeg,jpg|max:2048',
                'status' => 'required|string',
            ]
        );
        $update = User::findOrFail($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->password = $request->password;
        $update->status = $request->status;

        if ($request->hasfile('photo')) {
            $filePath = public_path('uploads');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            // delete old photo
            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $update->photo = $file_name;
        }

        $update->save();
        Session::flash('success', 'User updated successfully');
        return redirect()->route('user.index');
        return response()->json(['success' => true, 'message' => 'Business status updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $userData = User::findOrFail($request->user_id);
        $userData->delete();
        // delete photo if exists
        if (!is_null($userData->photo)) {
            $photo = public_path('uploads/' . $userData->photo);
            if (File::exists($photo)) {
                unlink($photo);
            }
        }
        Session::flash('success', 'User deleted successfully');
        return redirect()->route('user.index');
    }
}
