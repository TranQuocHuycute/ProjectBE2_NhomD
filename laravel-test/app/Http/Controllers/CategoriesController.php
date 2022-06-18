<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function store(Request $request)
    {
        // get data api
        $urlCategories = 'https://api.sofascore.com/api/v1/sport/football/categories';
        $data = file_get_contents($urlCategories);
        $data = json_decode($data);
        
        // for
        foreach ($data->categories as $key => $value) {
            $category = new Categories();
            $category->cid = $value->id;
            $category->name = $value->name;
            $category->slug = $value->slug;
            $category->flag = $value->flag;

            $category->save();
        }
        return response()->json(['message' => 'Categories added seccsessfully'], 200);
    }
}