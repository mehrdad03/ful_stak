<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'مهرداد داداشی',
                'mobile' => '09904421184',
                'email' => 'mehrdad.dadashi@gmail.com',
                'password' => '$2y$12$TYMQwmUqmQkbgxECPrsDMuLGWFjsNcmyWUnKmoOgwwk83oWgdhi4C',
                'block' => 0,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2024-03-03 05:55:21',
            ),
        ));
        
        
    }
}