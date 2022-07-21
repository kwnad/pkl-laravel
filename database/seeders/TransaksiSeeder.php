<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            ['no_transaksi' => 1001, 'id_pengunjung' => 'ABC123', 'id_karyawan' => '123ABC', 'jumlah_kamar' => 2, 'tgl_masuk' => '2022-07-18', 'tgl_keluar' => '2022-07-19', 'lama_nginap' => 1, 'total_harga' => 500000],
            ['no_transaksi' => 1002, 'id_pengunjung' => 'BCD234', 'id_karyawan' => '234BCD', 'jumlah_kamar' => 2, 'tgl_masuk' => '2022-07-19', 'tgl_keluar' => '2022-07-20', 'lama_nginap' => 1, 'total_harga' => 800000],
            ['no_transaksi' => 1003, 'id_pengunjung' => 'CDE345', 'id_karyawan' => '345CDE', 'jumlah_kamar' => 1, 'tgl_masuk' => '2022-07-20', 'tgl_keluar' => '2022-07-21', 'lama_nginap' => 2, 'total_harga' => 1000000],
            ['no_transaksi' => 1004, 'id_pengunjung' => 'DEF456', 'id_karyawan' => '456DEF', 'jumlah_kamar' => 2, 'tgl_masuk' => '2022-07-21', 'tgl_keluar' => '2022-07-22', 'lama_nginap' => 2, 'total_harga' => 800000],
            ['no_transaksi' => 1005, 'id_pengunjung' => 'EFG567', 'id_karyawan' => '567EFG', 'jumlah_kamar' => 3, 'tgl_masuk' => '2022-07-22', 'tgl_keluar' => '2022-07-23', 'lama_nginap' => 3, 'total_harga' => 750000],
        ];

        DB::table('transaksis')->insert($transaksi);
    }
}
