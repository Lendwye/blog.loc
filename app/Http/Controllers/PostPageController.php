<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostPageController extends Controller
{
	public function index()
    {
		$post = Posts::find($_GET['id']);
        return view('post', ['post' => $post]);
    }
}
