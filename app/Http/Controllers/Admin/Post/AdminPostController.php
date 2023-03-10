<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Users;

class AdminPostController extends Controller
{
    public function index()
	{
		$sidebar_info = [
			'posts_amount' => count(Posts::all()),
			'users_amount' => count(Users::all()),
		];
		$posts = Posts::all();
        return view('admin.post.index', ['posts' => $posts, 'sidebar_info' => $sidebar_info]);
	}
}
