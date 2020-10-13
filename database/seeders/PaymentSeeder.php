<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            [
                'student_id' => 1,
                'amount' => 10000,
                'month' => 1,
                'created_at' => now()->subdays(5),
                'updated_at' => now()->subdays(5)
            ]
        ]);
    }
}
