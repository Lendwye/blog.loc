<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class SearchPageController extends Controller
{
    public function index()
    {
		$search = $_GET['search'];
		$answers = Posts::where('description', 'LIKE', "%{$search}%")->orderBy('description')->paginate(10);
        return view('search', ['answers' => $answers]);
    }
}
