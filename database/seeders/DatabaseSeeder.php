<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostTableSeeder::class,
            SbSeeder::class,
            StaffSeeder::class,
            BranchSeeder::class,
            TransaksiSeeder::class,
            PengunjungSeeder::class,
            KaryawanSeeder::class,
            DtSeeder::class,
            KamarSeeder::class,
        ]);
    }
}
