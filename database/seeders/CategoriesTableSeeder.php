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
                'url_slug' => 'client-road-map',
                'title' => 'نفشه راه فرانت اند',
                'category_id' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 4,
                'url_slug' => 'backend-road-map',
                'title' => 'نفشه راه بک اند',
                'category_id' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 5,
                'url_slug' => 'full-stack-road-map',
                'title' => 'نفشه راه فول استک',
                'category_id' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
