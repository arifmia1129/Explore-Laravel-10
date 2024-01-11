<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store(Request $request) {
        // dd($request->all());

        $request->validate(
            [
                'name'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'message'=>'required'
            ]
        );
    }
}
