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
        [
          'id_barang' => 'AC-PSL-001',
          'nama_barang' => 'LZPM-5114 Kompresor 1/4 hp Auto+Motor',
          'harga_barang' => '2254320',
          'deskripsi_barang' => 'LZPM-5114 Kompresor 1/4 hp Auto+Motor',
          'gambar_barang' => '1.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
          'id_barang' => 'AC-PSL-002',
          'nama_barang' => 'LVPM-5112 Kompresor 1/2 hp Auto+Motor',
          'harga_barang' => '3586763',
          'deskripsi_barang' => 'LVPM-5112 Kompresor 1/2 hp Auto+Motor',
          'gambar_barang' => '2.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
          'id_barang' => 'AC-PSL-003',
          'nama_barang' => 'LVPM-6501 Kompresor 1 hp Auto+Motor',
          'harga_barang' => '5071185',
          'deskripsi_barang' => 'LVPM-6501 Kompresor 1 hp Auto+Motor',
          'gambar_barang' => '3.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
          'id_barang' => 'AC-PSL-004',
          'nama_barang' => 'LWPM-6502 Kompresor 2 hp Auto+Motor',
          'harga_barang' => '7705845',
          'deskripsi_barang' => 'LWPM-6502 Kompresor 2 hp Auto+Motor',
          'gambar_barang' => '4.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
          'id_barang' => 'AC-PSL-005',
          'nama_barang' => 'LVPM-8003 Kompresor 3 hp Auto+Motor',
          'harga_barang' => '10492500',
          'deskripsi_barang' => 'LVPM-8003 Kompresor 3 hp Auto+Motor',
          'gambar_barang' => '5.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
          'id_barang' => 'AC-PSL-006',
          'nama_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor          ',
          'harga_barang' => '13818000',
          'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'gambar_barang' => '6.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
          'id_barang' => 'AC-PSL-007',
          'nama_barang' => 'LVPM-1075 Kompresor 7,5 hp Auto+Motor          ',
          'harga_barang' => '22557750',
          'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'gambar_barang' => '7.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
            'id_barang' => 'AC-PSL-008',
            'nama_barang' => 'LWPM-1010 Kompresor 10 hp Auto+Motor            ',
            'harga_barang' => '26445750',
            'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'PSL',
          ],
          [
            'id_barang' => 'AC-PSL-009',
            'nama_barang' => 'LWPM-1215 Kompresor 15 hp Auto+motor            ',
            'harga_barang' => '35853000',
            'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
            'gambar_barang' => '9.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'PSL',
          ],
        [
            'id_barang' => 'AC-UVL-001',
            'nama_barang' => 'LZU-5114 Kompresor 1/4 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-002',
            'nama_barang' => 'LVU-5112 Kompresor 1/2 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-003',
            'nama_barang' => 'LVU-6501 Kompresor 1 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-004',
            'nama_barang' => 'LWU-6502 Kompresor 2 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-005',
            'nama_barang' => 'LVU-8003 Kompresor 3 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-006',
            'nama_barang' => 'LWU-8005 Kompresor 5 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-007',
            'nama_barang' => 'LVU-1075 Kompresor 7,5 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-008',
            'nama_barang' => 'LWU-1010 Kompresor 10 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-009',
            'nama_barang' => 'LWU-1215 Kompresor 15 hp Unloading            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '9.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-JSE-001',
            'nama_barang' => 'JZUE-5114 Kompresor 1/4 hp Unloading+Engine            ',
            'harga_barang' => '2227808',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-JSE-002',
            'nama_barang' => 'JVUE-5112 Kompresor 1/2 hp Unloading+Engine            ',
            'harga_barang' => '3268613',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-JSE-003',
            'nama_barang' => 'JVUE-6501 Kompresor 1 hp Unloading+Engine            ',
            'harga_barang' => '3954908',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-JSE-004',
            'nama_barang' => 'JWUE-6502 Kompresor 2 hp Unloading+Engine            ',
            'harga_barang' => '5531265',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-JSE-005',
            'nama_barang' => 'JZUE-5114-65L Kompressor 1/4hp unloading+Engine 65L            ',
            'harga_barang' => '2361885',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-POR-001',
            'nama_barang' => 'MZ-0725 Kompresor 3/4 hp Portable            ',
            'harga_barang' => '4357898',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
        ],
        [
            'id_barang' => 'AC-POR-002',
            'nama_barang' => 'WZ-1025 Kompresor 1hp Portable (OIL FREE)            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
        ],
        [
            'id_barang' => 'AC-POR-003',
            'nama_barang' => 'EZ-1035 Kompresor 1 hp Direct Drive - 35L            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
        ],
        [
            'id_barang' => 'AC-SNW-001',
            'nama_barang' => 'EZ-1035 Kompresor 1 hp Direct Drive - 35L            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'SNW',
        ],
        [
            'id_barang' => 'AC-SNW-002',
            'nama_barang' => 'EZ-1035 Kompresor 1 hp Direct Drive - 35L            ',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'SNW',
        ],
        ]
    );
    }
}
