<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentsController extends Controller
{
    public function index(){
        return view('residents.index');
    }

    public function create(){
        return view('residents.create');
    }
}
