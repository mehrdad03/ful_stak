<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSectionLecturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_section_lectures')->delete();
        
        \DB::table('course_section_lectures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Create & Open HTML Pages',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:04',
                'updated_at' => '2024-01-25 13:23:04',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Doctype & Basic Layout',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:10',
                'updated_at' => '2024-01-25 13:23:10',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Meta Tags & Search Engines',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:18',
                'updated_at' => '2024-01-25 13:23:18',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Headings, Paragraphs & Typography',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:23',
                'updated_at' => '2024-01-25 13:23:23',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Links, Images & Attributes',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:27',
                'updated_at' => '2024-01-25 13:23:27',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => ' Lists & Tables',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:31',
                'updated_at' => '2024-01-25 13:23:31',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Forms & Input',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:35',
                'updated_at' => '2024-01-25 13:23:35',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Block & Inline Level Elements',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:43',
                'updated_at' => '2024-01-25 13:23:43',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Divs & Spans, Classes & Ids',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:50',
                'updated_at' => '2024-01-25 13:23:50',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'HTML Entities',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:23:54',
                'updated_at' => '2024-01-25 13:23:54',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'HTML5 Semantic Tags',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:24:03',
                'updated_at' => '2024-01-25 13:24:03',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'HTML5 Semantics Solution & Wrap Up',
                'course_section_id' => 2,
                'created_at' => '2024-01-25 13:24:56',
                'updated_at' => '2024-01-25 13:24:56',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Implementing CSS',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:03',
                'updated_at' => '2024-01-25 22:00:03',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'Basic CSS Selectors',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:08',
                'updated_at' => '2024-01-25 22:00:08',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'Dev Tools Introduction',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:12',
                'updated_at' => '2024-01-25 22:00:12',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'Fonts In CSS',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:16',
                'updated_at' => '2024-01-25 22:00:16',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'Color Types',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:19',
                'updated_at' => '2024-01-25 22:00:19',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'Backgrounds & Borders',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:22',
                'updated_at' => '2024-01-25 22:00:22',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'Box Model, Margin & Padding',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:27',
                'updated_at' => '2024-01-25 22:00:27',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'Link State & Button Styling',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:33',
                'updated_at' => '2024-01-25 22:00:33',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'Navigation Menu Styling',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:37',
                'updated_at' => '2024-01-25 22:00:37',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'Inline, Block & Inline-Block Display',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:42',
                'updated_at' => '2024-01-25 22:00:42',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'Positioning',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:46',
                'updated_at' => '2024-01-25 22:00:46',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'Form Style Challenge',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:00:51',
                'updated_at' => '2024-01-25 22:00:51',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'Form Style Solution',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:01:00',
                'updated_at' => '2024-01-25 22:01:00',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'Aside: Visibility, Order & Negative Margin',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:01:05',
                'updated_at' => '2024-01-25 22:01:05',
            ),
            26 => 
            array (
                'id' => 27,
                'title' => 'What Is Flexbox?',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:28:58',
                'updated_at' => '2024-01-25 22:28:58',
            ),
            27 => 
            array (
                'id' => 28,
                'title' => 'Flexbox Basics',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:29:05',
                'updated_at' => '2024-01-25 22:29:05',
            ),
            28 => 
            array (
                'id' => 29,
                'title' => 'Flex Properties',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:29:09',
                'updated_at' => '2024-01-25 22:29:09',
            ),
            29 => 
            array (
                'id' => 30,
                'title' => 'Flex Alignment & Justify',
                'course_section_id' => 5,
                'created_at' => '2024-01-25 22:29:15',
                'updated_at' => '2024-01-25 22:29:15',
            ),
            30 => 
            array (
                'id' => 31,
                'title' => 'ew',
                'course_section_id' => 1,
                'created_at' => '2024-01-27 17:45:32',
                'updated_at' => '2024-01-27 17:45:32',
            ),
        ));
        
        
    }
}