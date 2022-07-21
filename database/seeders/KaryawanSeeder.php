<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
            ['id_karyawan' => '123ABC', 'nama_karyawan' => 'Rifqi', 'jk' => 'Laki-laki'],
            ['id_karyawan' => '234BCD', 'nama_karyawan' => 'Raza', 'jk' => 'Laki-laki'],
            ['id_karyawan' => '345CDE', 'nama_karyawan' => 'Fauzi', 'jk' => 'Laki-laki'],
            ['id_karyawan' => '456DEF', 'nama_karyawan' => 'Fahrizal', 'jk' => 'Laki-laki'],
            ['id_karyawan' => '567EFG', 'nama_karyawan' => 'Fahmi', 'jk' => 'Laki-laki'],
        ];

        DB::table('karyawans')->insert($karyawan);
    }
}
