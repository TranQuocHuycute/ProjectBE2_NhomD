<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Tournaments;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Categories::get();
        $tournaments = Tournaments::get();

        return view('admin.football')->with('categories', [$categories, $tournaments]);
    }

    public function getAllCategory()
    {
        $categories = Categories::get();
        $tournaments = Tournaments::get();

        return view('admin.football')->with('categories', [$categories, $tournaments]);
    }
}
