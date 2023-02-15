<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorPageController extends Controller
{
    public function index()
    {
        return view('author');
    }
}
