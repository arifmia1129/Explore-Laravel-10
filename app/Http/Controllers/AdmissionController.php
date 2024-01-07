<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(){
        return view('admission');
    }

    public function store(Request $request) {
        $data = $request->all();
        return response()->json([
            'success'=> true,
            'message'=>'Successfully stored admission',
            'data'=> $data
        ]);
    }
}
