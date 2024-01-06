<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id) {

        $user = [
            'id'=> $id,
            'name'=> 'Md. Arif Mia',
            'email'=>'arif@gmail.com',
            'mobile'=>'01849676331',
            'gender'=>'Male',
            'age'=>'23',
            'education'=>'Diploma In Computer Engineer'
        ];

        return view('user', compact('user'));
    }
}
