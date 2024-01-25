<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'url_slug' => 'frontend-road-map',
                'title' => 'نقشه راه فرانت اند',
                'category_id' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'url_slug' => 'backend-road-map',
                'title' => 'نقشه راه بک اند',
                'category_id' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'url_slug' => 'full-stack-road-map',
                'title' => 'نقشه راه فول استک',
                'category_id' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'url_slug' => 'software-tutorial',
                'title' => 'آموزش نرم افزار',
                'category_id' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}