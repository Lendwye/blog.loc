<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersPageController extends Controller
{
	public function index()
    {
		$users = Users::all();;
        return view('users', ['users' => $users]);
    }
}
