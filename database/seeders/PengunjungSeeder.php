<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung = [
            ['id_pengunjung' => 'ABC123', 'nama_pengunjung' => 'Rizal', 'alamat' => 'Lampung', 'jk' => 'Laki-laki', 'no_tlp' => '081234', 'no_ktp' => 101010 ],
            ['id_pengunjung' => 'BCD234', 'nama_pengunjung' => 'Yuli', 'alamat' => 'Bandung', 'jk' => 'Perempuan', 'no_tlp' => '082345', 'no_ktp' => 202020 ],
            ['id_pengunjung' => 'CDE345', 'nama_pengunjung' => 'Nadia', 'alamat' => 'Cilacap', 'jk' => 'Perempuan', 'no_tlp' => '083456', 'no_ktp' => 303030 ],
            ['id_pengunjung' => 'DEF456', 'nama_pengunjung' => 'Astri', 'alamat' => 'Bandung', 'jk' => 'Perempuan', 'no_tlp' => '084567', 'no_ktp' => 404040 ],
            ['id_pengunjung' => 'EFG567', 'nama_pengunjung' => 'Ilyas', 'alamat' => 'Bandung', 'jk' => 'Laki-laki', 'no_tlp' => '085678', 'no_ktp' => 505050 ],
        ];

        DB::table('pengunjungs')->insert($pengunjung);
    }
}
