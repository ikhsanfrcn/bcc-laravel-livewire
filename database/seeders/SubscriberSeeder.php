<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriber = [
            ['name'=>'Matheus Ronan Abel','email'=>'matheusronanabel@gmail.com'],
            ['name'=>'John Doe','email'=>'john.doe@gmail.com']
        ];
        DB::table('subscriber')->insert($subscriber);
    }
}
