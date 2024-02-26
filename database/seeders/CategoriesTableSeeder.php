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
                'id' => 1,
                'url_slug' => 'road-map',
                'title' => 'نفشه راه برنامه نویسی',
                'category_id' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'url_slug' => 'courses',
                'title' => 'دوره های آموزش',
                'category_id' => NULL,
                'active' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'url_slug' => 'frontend',
                'title' => 'نقشه راه فرانت اند',
                'category_id' => 1,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'url_slug' => 'backend',
                'title' => 'نقشه راه بک اند',
                'category_id' => 1,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'url_slug' => 'fullstack',
                'title' => 'نقشه راه فول استک',
                'category_id' => 1,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'url_slug' => 'software-tutorial',
                'title' => 'آموزش نرم افزار',
                'category_id' => NULL,
                'active' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'url_slug' => 'frontend-courses',
                'title' => 'دوره های آموزش فرانت اند',
                'category_id' => 2,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'url_slug' => 'backend-courses',
                'title' => 'دوره های آموزش بک اند',
                'category_id' => 2,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'url_slug' => 'fullstack-courses',
                'title' => 'دوره های آموزش فول استک',
                'category_id' => 2,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}