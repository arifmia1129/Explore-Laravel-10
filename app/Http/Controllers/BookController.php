<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{

    function __construct () {
        $this->middleware('book');
    }

    public function index () {
        echo 'This is book controller response';
    }

    public function book_details ($id) {
        echo 'Searching book details for ID'.$id;
    }

}
