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
                'name'=>'required|string|max:30|min:3',
                'phone'=>'required',
                'email'=>'required|email',
                'message'=>'required'
            ]
        );

        dd($request->all());
    }
}
