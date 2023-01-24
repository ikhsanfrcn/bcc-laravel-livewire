<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = [
            ['user_role'=> 'Administrator'],
            ['user_role'=> 'Subscriber'],
        ];
        DB::table('user_role')->insert($user_role);
    }
}
