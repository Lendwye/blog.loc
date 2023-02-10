<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserPageController extends Controller
{
	public function index()
    {
		$user = Users::find($_GET['id']);
        return view('user', ['user' => $user]);
    }
}
