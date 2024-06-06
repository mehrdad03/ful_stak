<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_statuses')->delete();
        
        \DB::table('course_statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'در حال برگزاری',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'تکمیل شده',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'به زودی',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}