<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts;

class AdminPostController extends Controller
{
    public function index()
	{
		$posts = Posts::all();
        return view('admin.post.index', ['posts' => $posts]);
	}
}
