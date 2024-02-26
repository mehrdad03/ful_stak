<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseLectureVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_lecture_videos')->delete();
        
        \DB::table('course_lecture_videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'course_section_lecture_id' => 31,
                'path' => 'https://dl.ful-stak.dev/videos/2/ew_1706377560.m3u8',
                'duration' => '320',
                'created_at' => '2024-01-27 17:49:09',
                'updated_at' => '2024-01-27 17:49:09',
            ),
        ));
        
        
    }
}