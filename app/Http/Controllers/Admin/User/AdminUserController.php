<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Users;

class AdminUserController extends Controller
{
    public function index()
	{
		$sidebar_info = [
			'posts_amount' => count(Posts::all()),
			'users_amount' => count(Users::all()),
		];
		$users = Users::all();
        return view('admin.user.index', ['users' => $users, 'sidebar_info' => $sidebar_info]);
	}
}
