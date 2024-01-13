<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function store(Request $request){
        // Assuming 'my_file' is the name attribute of your file input in the form
        $final_name = 'new_file.'.$request->file('my_file')->extension();

        $request->my_file->move(public_path('uploads'), $final_name);

        return redirect()->back();
    }

}
