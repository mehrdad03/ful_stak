<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionPlanCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscription_plan_categories')->delete();
        
        \DB::table('subscription_plan_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'فرانت اند',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'بک اند',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'فول استک',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}