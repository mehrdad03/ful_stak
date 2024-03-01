<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubscriptionPlanCategoriesTableSeeder::class);
        $this->call(SubscriptionPlansTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CourseSectionsTableSeeder::class);
       // $this->call(CourseSectionLecturesTableSeeder::class);
     //   $this->call(CourseLectureVideosTableSeeder::class);
    }
}
