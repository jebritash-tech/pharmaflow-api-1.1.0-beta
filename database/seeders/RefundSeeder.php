<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RefundSeeder extends Seeder
{
    public function run(): void
    {
        foreach(range(1,50) as $i){

            DB::table('refunds')->insert([

                'sale_id' => rand(1,2500),

                'amount' => rand(100,5000),

                'reason' => 'Expired Item',

                'created_at' => now()
                    ->subDays(rand(1,180)),

                'updated_at' => now()

            ]);

        }
    }
}