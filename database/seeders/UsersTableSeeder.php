<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'مهرداد داداشی',
                'email' => 'mehrdad.dadashi@gmail.com',
                'picture' => 'https://lh3.googleusercontent.com/a/ACg8ocJ-6CNVAJ37h9M5ID8VALHMN-eaoMv39ywpkUq7kU132w=s96-c',
                'mobile' => '09904421184',
                'remember_token' => 'QQaYePMCfTWuZeJQTcffl3Isq6oZoX3hkoppbfy80L8bwXPx4iKDSAUeE1x9',
                'created_at' => '2024-03-03 08:51:34',
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 3,
                'name' => 'mehrdad dadashi',
                'email' => 'mehrdad.dadashi.frontend@gmail.com',
                'picture' => 'https://lh3.googleusercontent.com/a/ACg8ocJ-6CNVAJ37h9M5ID8VALHMN-eaoMv39ywpkUq7kU132w=s96-c',
                'mobile' => NULL,
                'remember_token' => 'pg9mbQRZjYfrtMRTD1SBdQwGc4tjtA1tH7wa4TRgRxjeQ7dF2USnopzhMDCt',
                'created_at' => '2024-02-23 11:28:20',
                'updated_at' => '2024-02-23 11:28:20',
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'alphanewverse properties',
                'email' => 'alphanewverseproperties@gmail.com',
                'picture' => 'https://lh3.googleusercontent.com/a/ACg8ocK02EfTAZ0s0jx-fdKeCdWLVGumaufJA8bR_OiLTIekjQ=s96-c',
                'mobile' => NULL,
                'remember_token' => 'CkaUpYWe1WRBUv0J6aBMWCP1GrjTfl6ijXzySxmYHd73O72YeqIcBfId05DQ',
                'created_at' => '2024-02-23 11:29:01',
                'updated_at' => '2024-02-23 11:29:01',
            ),
            3 =>
            array (
                'id' => 5,
                'name' => 'farnoosh moradi',
                'email' => 'farnooshmoradi987@gmail.com',
                'picture' => 'https://lh3.googleusercontent.com/a/ACg8ocJHER-LDCOzXNrqsKIQxKU2kgpAxhRzXPPgoNA3KbVE=s96-c',
                'mobile' => NULL,
                'remember_token' => 'mHJ67BXwI6ugDEHO2LbqzfkZWWDy3vyiGQ3K4jB3Ft78CNDC0w568UNZGeh3',
                'created_at' => '2024-02-23 12:20:17',
                'updated_at' => '2024-02-23 12:20:17',
            ),
            4 =>
            array (
                'id' => 6,
                'name' => 'Sana hosseini',
                'email' => 'mehrdad.dadashi.yotube.channel@gmail.com',
                'picture' => 'https://lh3.googleusercontent.com/a/ACg8ocL3PGk_drlN0a_D89IE3y723nrPnRD10XdHoVPsauqCbg=s96-c',
                'mobile' => NULL,
                'remember_token' => 'RU7mMW3cdg1by2PReMrflkZtzbbGOXirn9bp1j5NUTvUjbNi0tUKpj4u0UDH',
                'created_at' => '2024-02-23 12:46:19',
                'updated_at' => '2024-02-23 12:46:19',
            ),
        ));


    }
}
