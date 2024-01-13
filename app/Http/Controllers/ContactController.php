<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

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
                // 'file'=>['required', 'image', 'max:110']
                'password'=>['required', Password::min(8)->mixedCase()->numbers()],
                'confirm_password'=>['required', 'same:password']
            ]
        );

        dd($request->all());
    }
}
