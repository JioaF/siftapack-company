<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        // change this later
        return redirect('karir');
    }
    public function karir(){
        return view('karir');
    }
}
