<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 12,
            'title' => 'آموزش_جاوا اسکریپت (JavaScript)_مقدماتی تا پیشرفته',
                'price' => 0,
                'discount' => 0,
                'url_slug' => 'javascript-tutorial',
                'requirements' => 'تسلط بر HTTML_تسلط بر CSS',
                'short_description' => 'تسلط بر HTTML_تسلط بر CSS',
                'what_you_will_learn' => 'تسلط بر HTTML_تسلط بر CSS',
                'long_description' => NULL,
                'teacher_id' => 1,
                'category_id' => 3,
                'active' => 0,
                'deleted_at' => NULL,
                'created_at' => '2024-01-24 18:20:56',
                'updated_at' => '2024-04-10 19:16:28',
            ),
            1 => 
            array (
                'id' => 24,
                'title' => 'آموزش_HTML_مقدماتی تا پیشرفته',
                'price' => 1000,
                'discount' => 0,
                'url_slug' => 'html-tutorial',
                'requirements' => 'آموزش_HTML_مقدماتی تا پیشرفته',
                'short_description' => 'آموزش_HTML_مقدماتی تا پیشرفته',
                'what_you_will_learn' => 'آموزش_HTML_مقدماتی تا پیشرفته',
                'long_description' => NULL,
                'teacher_id' => 1,
                'category_id' => 3,
                'active' => 0,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 08:50:15',
                'updated_at' => '2024-04-10 19:17:03',
            ),
            2 => 
            array (
                'id' => 25,
            'title' => 'آموزش_بوت استرپ (Bootstrap)_مقدماتی تا پیشرفته',
                'price' => 1000,
                'discount' => 0,
                'url_slug' => 'bootstrap-tutorial',
            'requirements' => 'آموزش_بوت استرپ (Bootstrap)_مقدماتی تا پیشرفته',
            'short_description' => 'آموزش_بوت استرپ (Bootstrap)_مقدماتی تا پیشرفته',
            'what_you_will_learn' => 'آموزش_بوت استرپ (Bootstrap)_مقدماتی تا پیشرفته',
                'long_description' => NULL,
                'teacher_id' => 1,
                'category_id' => 3,
                'active' => 0,
                'deleted_at' => NULL,
                'created_at' => '2024-04-09 12:55:07',
                'updated_at' => '2024-04-10 19:16:43',
            ),
            3 => 
            array (
                'id' => 26,
                'title' => 'آموزش_CSS_مقدماتی تا پیشرفته	',
                'price' => 1000,
                'discount' => 0,
                'url_slug' => 'css-tutorial',
                'requirements' => 'آموزش_CSS_مقدماتی تا پیشرفته	',
                'short_description' => 'آموزش_CSS_مقدماتی تا پیشرفته	',
                'what_you_will_learn' => 'آموزش_CSS_مقدماتی تا پیشرفته	',
                'long_description' => NULL,
                'teacher_id' => 1,
                'category_id' => 3,
                'active' => 0,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 08:49:35',
                'updated_at' => '2024-04-10 19:17:12',
            ),
            4 => 
            array (
                'id' => 27,
                'title' => 'آموزش_PHP_مقدماتی تا پیشرفته	',
                'price' => 1000,
                'discount' => 0,
                'url_slug' => 'php-tutorial',
                'requirements' => 'آموزش_PHP_مقدماتی تا پیشرفته	',
                'short_description' => 'آموزش_PHP_مقدماتی تا پیشرفته	',
                'what_you_will_learn' => 'آموزش_PHP_مقدماتی تا پیشرفته	',
                'long_description' => NULL,
                'teacher_id' => 1,
                'category_id' => 4,
                'active' => 0,
                'deleted_at' => NULL,
                'created_at' => '2024-04-10 19:15:58',
                'updated_at' => '2024-04-10 19:15:58',
            ),
            5 => 
            array (
                'id' => 28,
            'title' => 'آموزش_لاراول (Laravel)_مقدماتی تا پیشرفته	',
                'price' => 20,
                'discount' => 0,
                'url_slug' => 'laravel-tutorial',
            'requirements' => 'آموزش_لاراول (Laravel)_مقدماتی تا پیشرفته	',
            'short_description' => 'آموزش_لاراول (Laravel)_مقدماتی تا پیشرفته	',
            'what_you_will_learn' => 'آموزش_لاراول (Laravel)_مقدماتی تا پیشرفته	',
                'long_description' => NULL,
                'teacher_id' => 1,
                'category_id' => 4,
                'active' => 0,
                'deleted_at' => NULL,
                'created_at' => '2024-04-12 09:55:41',
                'updated_at' => '2024-04-12 09:55:41',
            ),
        ));
        
        
    }
}