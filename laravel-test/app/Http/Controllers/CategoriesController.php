<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function update()
    {
        // get data api
        $urlCategories = 'https://api.sofascore.com/api/v1/sport/football/categories';
        $data = file_get_contents($urlCategories);
        $data = json_decode($data);

        // delete all value after update
        Categories::truncate();
        
        // update
        foreach ($data->categories as $key => $value) {
            $category = new Categories();
            $category->cid = $value->id;
            $category->name = $value->name;
            $category->slug = $value->slug;
            $category->flag = $value->flag;

            $category->save();
        }

        SendMailController::sendMail('Categories updated seccsessfully !');
        return redirect()->route('admin')->with(['message' => 'Categories updated seccsessfully !']);
    }

    public function deleteAll()
    {
        Categories::truncate();

        return redirect()->route('admin')->with(['message' => 'Categories all deleted seccsessfully !']);
    }
}
