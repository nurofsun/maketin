<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Muhammad Fathan',
                'gender' => 'L',
                'level' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('students')->insert($data);
    }
}
