<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class MainPageController extends Controller
{
	/*@return void*/
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
		$posts = Posts::all();
        return view('main', ['posts' => $posts]);
    }
}
