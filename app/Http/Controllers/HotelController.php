<?php

namespace App\Http\Controllers;
use App\Models\transaksi;
use App\Models\pengunjung;
use App\Models\karyawan;
use App\Models\dt;
use App\Models\kamar;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $transaksi = transaksi::all();
        $pengunjung = pengunjung::all();
        $karyawan = karyawan::all();
        $dt = dt::all();
        $kamar = kamar::all();
        return view('hotel.index', compact('transaksi', 'pengunjung', 'karyawan', 'dt', 'kamar'));
    }
}
