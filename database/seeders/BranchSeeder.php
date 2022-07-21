<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch = [
            ['branchNo' => 'B005', 'bAddress' => '22 Deer Rd, London'],
            ['branchNo' => 'B007', 'bAddress' => '16 Argyll St, Aberdeen'],
            ['branchNo' => 'B003', 'bAddress' => '163 Main St, Glasgow']
        ];

        DB::table('branches')->insert($branch);
    }
}
