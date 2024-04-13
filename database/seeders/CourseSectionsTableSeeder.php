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
                'id' => 14,
                'title' => 'معرفی و آموزش استفاده از دوره',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:33:25',
                'updated_at' => '2024-04-08 09:39:11',
            ),
            1 => 
            array (
                'id' => 15,
                'title' => 'معرفی محیط برنامه نویسی ',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:40:09',
                'updated_at' => '2024-04-08 09:40:09',
            ),
            2 => 
            array (
                'id' => 16,
                'title' => 'مفاهیم پایه و اساسی',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:40:35',
                'updated_at' => '2024-04-08 09:40:35',
            ),
            3 => 
            array (
                'id' => 17,
                'title' => 'ادامه مفاهیم پایه ',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 15:30:21',
                'updated_at' => '2024-04-08 15:30:21',
            ),
            4 => 
            array (
                'id' => 18,
                'title' => 'بررسی DOM',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:41:18',
                'updated_at' => '2024-04-08 09:41:18',
            ),
            5 => 
            array (
                'id' => 19,
                'title' => 'پروژه ها  پارت 1',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:42:43',
                'updated_at' => '2024-04-08 09:56:37',
            ),
            6 => 
            array (
                'id' => 20,
                'title' => 'دیپلوی کردن پروژها روی Netlify',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:43:46',
                'updated_at' => '2024-04-08 09:43:46',
            ),
            7 => 
            array (
                'id' => 21,
            'title' => 'شی گرایی در جاوااسکریپت - (OOP)',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:45:13',
                'updated_at' => '2024-04-08 10:05:10',
            ),
            8 => 
            array (
                'id' => 22,
            'title' => 'پروژه های - (OOP)',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:48:08',
                'updated_at' => '2024-04-08 10:05:18',
            ),
            9 => 
            array (
                'id' => 23,
                'title' => 'انواع توابع - Functions',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:49:46',
                'updated_at' => '2024-04-08 09:50:05',
            ),
            10 => 
            array (
                'id' => 24,
                'title' => 'جاوا اسکریپت ES6',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:51:39',
                'updated_at' => '2024-04-08 09:51:39',
            ),
            11 => 
            array (
                'id' => 25,
                'title' => 'پروژه ها پارت 2',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:53:04',
                'updated_at' => '2024-04-08 09:56:48',
            ),
            12 => 
            array (
                'id' => 26,
                'title' => 'ماژول ها - Modules',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:53:46',
                'updated_at' => '2024-04-08 09:53:46',
            ),
            13 => 
            array (
                'id' => 27,
                'title' => 'مفهوم Async در جاوااسکریپت ',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:55:23',
                'updated_at' => '2024-04-08 09:55:23',
            ),
            14 => 
            array (
                'id' => 28,
                'title' => 'بررسی AJAX',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:55:39',
                'updated_at' => '2024-04-08 09:55:39',
            ),
            15 => 
            array (
                'id' => 29,
                'title' => 'پروژه ها پارت 3',
                'course_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2024-04-08 09:56:06',
                'updated_at' => '2024-04-08 09:56:57',
            ),
            16 => 
            array (
                'id' => 204,
                'title' => 'معرفی و آموزش استفاده از دوره',
                'course_id' => 24,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 08:52:43',
                'updated_at' => '2024-04-09 08:52:43',
            ),
            17 => 
            array (
                'id' => 205,
                'title' => 'مفاهیم پایه',
                'course_id' => 24,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 08:52:59',
                'updated_at' => '2024-04-09 08:52:59',
            ),
            18 => 
            array (
                'id' => 206,
                'title' => 'معرفی و آموزش استفاده از دوره',
                'course_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 12:56:43',
                'updated_at' => '2024-04-09 12:56:43',
            ),
            19 => 
            array (
                'id' => 207,
                'title' => 'معرفی محیط برنامه نویسی',
                'course_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 12:58:44',
                'updated_at' => '2024-04-09 12:58:44',
            ),
            20 => 
            array (
                'id' => 208,
                'title' => 'Utilities',
                'course_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 13:01:38',
                'updated_at' => '2024-04-09 13:01:38',
            ),
            21 => 
            array (
                'id' => 209,
                'title' => 'Layouts and Responsivenes',
                'course_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 13:09:53',
                'updated_at' => '2024-04-09 13:09:53',
            ),
            22 => 
            array (
                'id' => 210,
                'title' => 'Components',
                'course_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 13:10:32',
                'updated_at' => '2024-04-09 13:10:32',
            ),
            23 => 
            array (
                'id' => 211,
                'title' => 'معرفی و آموزش استفاده از دوره',
                'course_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 08:59:14',
                'updated_at' => '2024-04-10 08:59:14',
            ),
            24 => 
            array (
                'id' => 212,
                'title' => 'معرفی محیط برنامه نویسی',
                'course_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 08:59:42',
                'updated_at' => '2024-04-10 08:59:42',
            ),
            25 => 
            array (
                'id' => 213,
                'title' => 'مفاهیم پایه',
                'course_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 09:00:14',
                'updated_at' => '2024-04-10 09:00:14',
            ),
            26 => 
            array (
                'id' => 214,
                'title' => 'آشنای با FlexBox',
                'course_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 10:06:57',
                'updated_at' => '2024-04-10 10:06:57',
            ),
            27 => 
            array (
                'id' => 215,
            'title' => 'طراحی واکنشگرا (Responsive Design)',
                'course_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 10:24:07',
                'updated_at' => '2024-04-10 10:24:07',
            ),
            28 => 
            array (
                'id' => 216,
                'title' => 'پروژه طراحی قالب سایت Apple Vision',
                'course_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 10:49:49',
                'updated_at' => '2024-04-10 10:49:49',
            ),
            29 => 
            array (
                'id' => 217,
                'title' => 'مباحث پیشرفته CSS',
                'course_id' => 26,
                'deleted_at' => '2024-04-10 16:33:47',
                'created_at' => '2024-04-10 16:09:26',
                'updated_at' => '2024-04-10 16:33:47',
            ),
            30 => 
            array (
                'id' => 218,
                'title' => 'معرفی و آموزش استفاده از دوره',
                'course_id' => 27,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 19:17:43',
                'updated_at' => '2024-04-10 19:17:43',
            ),
            31 => 
            array (
                'id' => 219,
                'title' => 'معرفی محیط برنامه نویسی',
                'course_id' => 27,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 19:17:50',
                'updated_at' => '2024-04-10 19:17:50',
            ),
            32 => 
            array (
                'id' => 220,
                'title' => 'مفاهیم پایه در PHP',
                'course_id' => 27,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 19:23:32',
                'updated_at' => '2024-04-10 19:23:32',
            ),
            33 => 
            array (
                'id' => 221,
                'title' => 'معرفی و آموزش استفاده از دوره',
                'course_id' => 28,
                'deleted_at' => NULL,
                'created_at' => '2024-04-12 09:56:34',
                'updated_at' => '2024-04-12 09:56:34',
            ),
            34 => 
            array (
                'id' => 222,
                'title' => 'مفاهیم پایه',
                'course_id' => 28,
                'deleted_at' => NULL,
                'created_at' => '2024-04-12 09:56:49',
                'updated_at' => '2024-04-12 09:56:49',
            ),
        ));
        
        
    }
}