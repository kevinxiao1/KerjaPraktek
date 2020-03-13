<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('kategori')->insert(
        [
            [
                'id_kategori' => 'AC',
                'nama_kategori' => 'Air Compressor',
            ],
            [
                'id_kategori' => 'TO',
                'nama_kategori' => 'Tyre Opener'  
            ],
            [
                'id_kategori' => 'PS',
                'nama_kategori' => 'Power Sprayer'
            ],
            [
                'id_kategori' => 'DE',
                'nama_kategori' => 'Diesel Engine'  
            ],
            [
                'id_kategori' => 'GE',
                'nama_kategori' => 'Gasoline Engine' 
            ],
            [
                'id_kategori' => 'GG',
                'nama_kategori' => 'Gasoline Generator' 
            ],
            [
                'id_kategori' => 'WP',
                'nama_kategori' => 'Water Pump'
            ],
        ]
    );
      DB::table('subkategori')->insert(
        [
            [
                'id_subkategori' => 'PSL',
                'nama_subkategori' => 'Pressure Switch Type System L',
            ],
            [
                'id_subkategori' => 'UVL',
                'nama_subkategori' => 'Unloading Valve System L', 
            ],
            [
                'id_subkategori' => 'JSE',
                'nama_subkategori' => 'J Series', 
            ],
            [
                'id_subkategori' => 'POR',
                'nama_subkategori' => 'Portable',
            ],
            [
                'id_subkategori' => 'SNW',
                'nama_subkategori' => 'Snowash',
            ],
            [
                'id_subkategori' => 'PRE',
                'nama_subkategori' => 'Premium',
            ],
            [
                'id_subkategori' => 'AUS',
                'nama_subkategori' => 'Auto + Motor Unloading SDP',
            ],
            [
                'id_subkategori' => 'JSS',
                'nama_subkategori' => 'J Series SDP',
            ],
            [
                'id_subkategori' => 'POS',
                'nama_subkategori' => 'Portable SDP',
            ],
            [
                'id_subkategori' => 'SDP',
                'nama_subkategori' => 'SDP',
            ],
            [
                'id_subkategori' => 'HPR',
                'nama_subkategori' => 'High Pressure',
            ],
            [
                'id_subkategori' => 'BOS',
                'nama_subkategori' => 'Booster',
            ],
            [
                'id_subkategori' => 'SCR',
                'nama_subkategori' => 'Screw',
            ],
            [
                'id_subkategori' => 'SCO',
                'nama_subkategori' => 'Screw Open',
          ],
        ]
    );
      DB::table('barang')->insert(
        [
          'id_barang' => 'LZPM-5114 Kompresor 1/4 hp Auto+Motor',
          'nama_barang' => 'LZPM-5114 Kompresor 1/4 hp Auto+Motor',
          'harga' => 'LZPM-5114 Kompresor 1/4 hp Auto+Motor',
          'deskripso' => 'LZPM-5114 Kompresor 1/4 hp Auto+Motor',
          'id_kategori' => 'AC',
          'id_subkategori' => 'Screw Open',
        ]
    );
    }
}
