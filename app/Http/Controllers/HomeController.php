<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function store(Request $request){
        // Assuming 'my_file' is the name attribute of your file input in the form
        // $final_name = 'new_file.'.$request->file('my_file')->extension();

        // $request->my_file->move(public_path('uploads'), $final_name);

        $new_name = 'new_image.'.$request->my_file->extension();

        echo($new_name);

        $request->my_file->storeAs('uploads', $new_name);

        return redirect()->back();
    }

    public function delete(Request $request) {
        // Storage::delete('uploads/new_image.png');
        // File::delete(storage_path('/app/public/uploads/new_image.png'));
        unlink(storage_path('/app/public/uploads/new_image.png'));

        return redirect()->back();
    }

}
