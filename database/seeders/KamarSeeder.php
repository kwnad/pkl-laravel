<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = [
            ['no_kamar' => 101, 'jenis_kamar' => 'Single Room', 'harga' => 250000],
            ['no_kamar' => 201, 'jenis_kamar' => 'Twin Room', 'harga' => 400000],
            ['no_kamar' => 301, 'jenis_kamar' => 'Deluxe Room', 'harga' => 1000000],
            ['no_kamar' => 401, 'jenis_kamar' => 'Twin Room', 'harga' => 400000],
            ['no_kamar' => 501, 'jenis_kamar' => 'Single Room', 'harga' => 250000],
        ];

        DB::table('kamars')->insert($kamar);
    }
}
