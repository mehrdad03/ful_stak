<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_sections')->delete();
        
        \DB::table('course_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'مقدمه',
                'course_id' => 2,
                'created_at' => '2024-01-25 13:13:18',
                'updated_at' => '2024-01-25 13:13:18',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'مفاهیم پایه و اساسی HTML ',
                'course_id' => 2,
                'created_at' => '2024-01-25 13:14:06',
                'updated_at' => '2024-01-25 15:38:49',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'مقدمه',
                'course_id' => 3,
                'created_at' => '2024-01-25 21:56:53',
                'updated_at' => '2024-01-25 21:56:53',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'مفاهیم پایه و اساسی CSS',
                'course_id' => 3,
                'created_at' => '2024-01-25 21:57:42',
                'updated_at' => '2024-01-25 21:57:42',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'پروژه تسلط بر  CSS',
                'course_id' => 3,
                'created_at' => '2024-01-25 21:58:13',
                'updated_at' => '2024-01-25 21:58:13',
            ),
            5 => 
            array (
                'id' => 12,
                'title' => 'مفاهیم اساسی واکنش گرایی ',
                'course_id' => 4,
                'created_at' => '2024-01-25 22:40:15',
                'updated_at' => '2024-01-25 22:40:15',
            ),
            6 => 
            array (
                'id' => 13,
                'title' => 'پروژه تسلط بر واکنش گرایی وب سایت',
                'course_id' => 4,
                'created_at' => '2024-01-25 22:40:47',
                'updated_at' => '2024-01-25 22:46:21',
            ),
        ));
        
        
    }
}