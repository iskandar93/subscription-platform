<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bills')->insert([
            ['user_id' => 1, 'invoice_no' => 'INV001', 'description' => 'Subscription - 1 Year', 'amount' => 189, 'paid' => 189],
            ['user_id' => 2, 'invoice_no' => 'INV002', 'description' => 'Subscription - 1 Month', 'amount' => 89, 'paid' => 0],
            ['user_id' => 3, 'invoice_no' => 'INV003', 'description' => 'Subscription - 1 Month', 'amount' => 89, 'paid' => 89],
            ['user_id' => 4, 'invoice_no' => 'INV004', 'description' => 'Subscription - 1 Year', 'amount' => 189, 'paid' => 0]
        ]);
    }
}
