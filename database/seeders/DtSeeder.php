<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = [
            ['id_dtl_transaksi' => '12AB', 'no_transaksi' => 102030, 'no_kamar' => '101'],
            ['id_dtl_transaksi' => '23BC', 'no_transaksi' => 203040, 'no_kamar' => '201'],
            ['id_dtl_transaksi' => '34CD', 'no_transaksi' => 304050, 'no_kamar' => '301'],
            ['id_dtl_transaksi' => '45DE', 'no_transaksi' => 405060, 'no_kamar' => '401'],
            ['id_dtl_transaksi' => '56EF', 'no_transaksi' => 506070, 'no_kamar' => '501'],
        ];

        DB::table('dts')->insert($dt);
    }
}
