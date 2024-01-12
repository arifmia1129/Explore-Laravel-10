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
                // 'name'=>'required|string|max:30|min:3',
                // 'dob'=>['required', 'regex:/^\d{4}-\d{2}-\d{2}+$/'],
                // 'phone'=>'required',
                // 'email'=>'required|email',
                // 'message'=>'required',
                'file'=>['required', 'max:110']
            ]
        );

        dd($request->all());
    }
}
