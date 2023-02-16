<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Users;

class AdminMainController extends Controller
{	
    public function index()
	{
		$sidebar_info = [
			'posts_amount' => count(Posts::all()),
			'users_amount' => count(Users::all()),
		];
        return view('admin.index', ['sidebar_info' => $sidebar_info]);
	}
}
