<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionPlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscription_plans')->delete();
        
        \DB::table('subscription_plans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'اکانت 1 ماهه',
                'price' => 299000,
                'features' => '',
                'duration' => 1,
                'subscription_plan_category_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'اکانت 3 ماهه',
                'price' => 599000,
                'features' => '',
                'duration' => 3,
                'subscription_plan_category_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'اکانت 6 ماهه',
                'price' => 899000,
                'features' => '',
                'duration' => 6,
                'subscription_plan_category_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'اکانت 1 ماهه',
                'price' => 399000,
                'features' => '',
                'duration' => 1,
                'subscription_plan_category_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'title' => 'اکانت 3 ماهه',
                'price' => 799000,
                'features' => '',
                'duration' => 3,
                'subscription_plan_category_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'title' => 'اکانت 6 ماهه',
                'price' => 999000,
                'features' => '',
                'duration' => 6,
                'subscription_plan_category_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'title' => 'اکانت 6 ماهه',
                'price' => 2500000,
                'features' => 'ارتباط با مدرس در تلگرام',
                'duration' => 6,
                'subscription_plan_category_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'title' => 'اکانت 12 ماهه',
                'price' => 3500000,
                'features' => '',
                'duration' => 12,
                'subscription_plan_category_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}