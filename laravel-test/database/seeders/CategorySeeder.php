<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $urlCategories = 'https://api.sofascore.com/api/v1/sport/football/categories';
        $categories = file_get_contents($urlCategories);

        $categories = json_decode($categories);
        foreach ($categories->categories as $index => $category) {
            if(isset($category-> alpha2)){
                FacadesDB::table('categories')->insert([
                    'name' => $category-> name ,
                    'slug' => $category-> slug ,
                    'priority' => $category-> priority ,
                    'flag' => $category-> flag ,
                    'alpha2' => $category-> alpha2 ,
                    'id' => $category-> id,
                ]);
            }
            else{
                FacadesDB::table('categories')->insert([
                    'name' => $category-> name ,
                    'slug' => $category-> slug ,
                    'priority' => $category-> priority ,
                    'flag' => $category-> flag ,
                    'id' => $category-> id,
                ]);
            }
            
        }
    }
}
