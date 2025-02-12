<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_statuses')->insert([
            ['status'=>'junior','month'=>1],
            ['status'=>'senior','month'=>4],
            ['status'=>'renentry','month'=>7],
        ]);
    }
}
