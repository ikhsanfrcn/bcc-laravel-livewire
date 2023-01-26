<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            ['user_id'=>\Ramsey\Uuid\Uuid::uuid4()->toString(),'name'=>'Administrator','email'=>'administrator@mail.com','password'=>Hash::make('Adminsitrator'),'role_id'=>'1'],
            ['user_id'=>\Ramsey\Uuid\Uuid::uuid4()->toString(),'name'=>'Subscriber','email'=>'subscriber@mail.com','password'=>Hash::make('Subscriber'),'role_id'=>'2'],
        ];
        DB::table('users')->insert($user);

    }
}
