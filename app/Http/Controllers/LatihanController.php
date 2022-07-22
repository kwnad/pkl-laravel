<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu()
    {
        $a = [
            array('pil1' => ['Beranda', 'Berita', 'Tentang'],
            'pil2' => ['Olahraga', 'Politik', 'Manca Negara'],
            'pil3' => ['Sepak Bola', 'Bulu Tangkis'])
            
            // ['menu' => 'Beranda'],
            // [
            //     'menu' => 'Berita', 
            //     'submenu' => 
            //     [
            //         'Olahraga',
            //         'anakmenu' => 
            //         [
            //             'Sepak Bola', 'Bulu Tangkis'
            //         ],
            //         'Politik', 
            //         'Manca Negara'
            //     ]
            // ],
            // ['menu' => 'Tentang']
            
        ];
        // dd($a);
        return view('/pages1.menu', ['menu' => $a]);
    }

    public function dosen()
    {
        $a = [
            array('dosen' => 'Yusuf Bachtiar', 'matkul' => 'Pemrograman Mobile', 'mahasiswa' => [
                    ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                    ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                    ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                    ['nama' => 'Ubay Holin', 'nilai' => 87],
                    ['nama' => 'Fadillah', 'nilai' => 95]
                ]
            ),

            array('dosen' => 'Yaris Riyadi', 'matkul' => 'Pemrograman Web', 'mahasiswa' => [
                    ['nama' => 'Alfred McTomminay', 'nilai' => 67],
                    ['nama' => 'Bruno Kasmiri', 'nilai' => 90],
                    ['nama' => 'Akid Hendra', 'nilai' => 50],
                    ['nama' => 'Dany Irawan', 'nilai' => 70],
                    ['nama' => 'Chandra Mega Putra', 'nilai' => 60]
                ]
            )
        ];
        // dd($a);
        return view('/pages1.dosen', ['dosen' => $a]);
    }

    public function televisi()
    {
        $a = [
            [
                'channel' => 'NET TV',
                'acara' => 'Shinbi House',
                'jam' => '16.00',
                'tanggal' => '14 Juli 2022'
            ],
            [
                'channel' => 'TVRI',
                'acara' => 'Paula & Friends',
                'jam' => '07.30',
                'tanggal' => '14 Juli 2022'
            ],
            [
                'channel' => 'BEINSPORT',
                'acara' => 'Event Highlights',
                'jam' => '11.35',
                'tanggal' => '14 Juli 2022'
            ],
            [
                'channel' => 'Ochannel',
                'acara' => 'Exploring West Java',
                'jam' => '09.00',
                'tanggal' => '12 Juli 2022'
            ],
            [
                'channel' => 'Indosiar',
                'acara' => 'Twin Dragons',
                'jam' => '21.30',
                'tanggal' => '13 Juli 2022'
            ]
        ];
        return view('/pages1.televisi', ['televisi' => $a]);
    }

    // 
}
