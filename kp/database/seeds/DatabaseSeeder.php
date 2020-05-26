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
                'id_kategori' => 'IC',
                'nama_kategori' => 'Indusrial Air Compressor',
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
            [
                'id_kategori' => 'EL',
                'nama_kategori' => 'Elektro Motor'
            ],
        ]
    );
    DB::table('konten')->insert(
        [
            [
                'isi_konten' => 'Air Compressor type L Auto+Motor 1/4HP Beli 15 unit bonus 1 unit'
            ]
        ]
    );
      DB::table('subkategori')->insert(
        [
            [
                'id_subkategori' => 'PSL',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Pressure Switch Type System L',
            ],
            [
                'id_subkategori' => 'UVL',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Unloading Valve System L', 
            ],
            [
                'id_subkategori' => 'JSE',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'J Series', 
            ],
            [
                'id_subkategori' => 'POR',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Portable',
            ],
            [
                'id_subkategori' => 'SNW',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Snowash',
            ],
            [
                'id_subkategori' => 'PRE',
                'id_kategori' => 'DE',
                'nama_subkategori' => 'Premium',
            ],
            [
                'id_subkategori' => 'AUS',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Auto + Motor Unloading SDP',
            ],
            [
                'id_subkategori' => 'JSS',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'J Series SDP',
            ],
            [
                'id_subkategori' => 'POS',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Portable SDP',
            ],
            [
                'id_subkategori' => 'SDP',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'SDP',
            ],
            [
                'id_subkategori' => 'HPR',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'High Pressure',
            ],
            [
                'id_subkategori' => 'BOS',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Booster',
            ],
            [
                'id_subkategori' => 'SCR',
                'id_kategori' => 'IC',
                'nama_subkategori' => 'Screw',
            ],
            [
                'id_subkategori' => 'SCO',
                'id_kategori' => 'IC',
                'nama_subkategori' => 'Screw Open',
            ],
            [
                'id_subkategori' => 'PSP',
                'id_kategori' => 'PS',
                'nama_subkategori' => 'Power Sprayer',
            ],
            [
                'id_subkategori' => 'TOP',
                'id_kategori' => 'TP',
                'nama_subkategori' => 'Tyre Opener',
            ],
            [
                'id_subkategori' => 'STD',
                'id_kategori' => 'DE',
                'nama_subkategori' => 'Standard Diesel',
            ],
            [
                'id_subkategori' => 'STGE',
                'id_kategori' => 'GE',
                'nama_subkategori' => 'Standard Gasoline Engine',
            ],
            [
                'id_subkategori' => 'PGE',
                'id_kategori' => 'GE',
                'nama_subkategori' => 'Premium Gasoline Engine',
            ],
            [
                'id_subkategori' => 'STW',
                'id_kategori' => 'WP',
                'nama_subkategori' => 'Standard Water Pump',
            ],
            [
                'id_subkategori' => 'PWP',
                'id_kategori' => 'WP',
                'nama_subkategori' => 'Premiumm Water Pump',
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
          'nama_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'harga_barang' => '13818000',
          'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'gambar_barang' => '6.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
          'id_barang' => 'AC-PSL-007',
          'nama_barang' => 'LVPM-1075 Kompresor 7,5 hp Auto+Motor',
          'harga_barang' => '22557750',
          'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'gambar_barang' => '7.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
        ],
        [
            'id_barang' => 'AC-PSL-008',
            'nama_barang' => 'LWPM-1010 Kompresor 10 hp Auto+Motor',
            'harga_barang' => '26445750',
            'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'PSL',
          ],
          [
            'id_barang' => 'AC-PSL-009',
            'nama_barang' => 'LWPM-1215 Kompresor 15 hp Auto+motor',
            'harga_barang' => '35853000',
            'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
            'gambar_barang' => '9.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'PSL',
          ],
        [
            'id_barang' => 'AC-UVL-001',
            'nama_barang' => 'LZU-5114 Kompresor 1/4 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            
        ],
        [
            'id_barang' => 'AC-UVL-002',
            'nama_barang' => 'LVU-5112 Kompresor 1/2 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-003',
            'nama_barang' => 'LVU-6501 Kompresor 1 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-004',
            'nama_barang' => 'LWU-6502 Kompresor 2 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-005',
            'nama_barang' => 'LVU-8003 Kompresor 3 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-006',
            'nama_barang' => 'LWU-8005 Kompresor 5 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-007',
            'nama_barang' => 'LVU-1075 Kompresor 7,5 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-008',
            'nama_barang' => 'LWU-1010 Kompresor 10 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-UVL-009',
            'nama_barang' => 'LWU-1215 Kompresor 15 hp Unloading',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '9.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
        ],
        [
            'id_barang' => 'AC-JSE-001',
            'nama_barang' => 'JZUE-5114 Kompresor 1/4 hp Unloading+Engine',
            'harga_barang' => '2227808',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-0-25hp-e-motor-lvpm-5114'
        ],
        [
            'id_barang' => 'AC-JSE-002',
            'nama_barang' => 'JVUE-5112 Kompresor 1/2 hp Unloading+Engine',
            'harga_barang' => '3268613',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-JSE-003',
            'nama_barang' => 'JVUE-6501 Kompresor 1 hp Unloading+Engine',
            'harga_barang' => '3954908',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-JSE-004',
            'nama_barang' => 'JWUE-6502 Kompresor 2 hp Unloading+Engine',
            'harga_barang' => '5531265',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-JSE-005',
            'nama_barang' => 'JZUE-5114-65L Kompressor 1/4hp unloading+Engine 65L',
            'harga_barang' => '2361885',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
        ],
        [
            'id_barang' => 'AC-POR-001',
            'nama_barang' => 'MZ-0725 Kompresor 3/4 hp Portable',
            'harga_barang' => '4357898',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
        ],
        [
            'id_barang' => 'AC-POR-002',
            'nama_barang' => 'WZ-1025 Kompresor 1hp Portable (OIL FREE)',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
        ],
        [
            'id_barang' => 'AC-POR-003',
            'nama_barang' => 'EZ-1035 Kompresor 1 hp Direct Drive - 35L',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
        ],
        [
            'id_barang' => 'AC-SNW-001',
            'nama_barang' => 'SSW-12L Snowash 12 Liter',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'SNW',
        ],
        [
            'id_barang' => 'AC-SNW-002',
            'nama_barang' => 'SSW-30L Snowash 30 Liter',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'SNW',
        ],
        [
            'id_barang' => 'TO-TOP-001',
            'nama_barang' => 'Tyre Opener Pneumatic',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'TO',
            'id_subkategori' => 'TOP',
        ],
        [
            'id_barang' => 'PS-PSP-001',
            'nama_barang' => 'SPS-22 Power Sprayer Auto 22mm',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'PS',
            'id_subkategori' => 'PSP',
        ],
        [
            'id_barang' => 'PS-PSP-002',
            'nama_barang' => 'SPS-30 Power Sprayer Auto 30mm',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'PS',
            'id_subkategori' => 'PSP',
        ],
        [
            'id_barang' => 'DE-STD-001',
            'nama_barang' => 'DIESEL R 175',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
        ],
        [
            'id_barang' => 'DE-STD-002',
            'nama_barang' => 'DIESEL R 180',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
        ],
        [
            'id_barang' => 'DE-STD-003',
            'nama_barang' => 'DIESEL ZS 195',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
        ],
        [
            'id_barang' => 'DE-STD-004',
            'nama_barang' => 'DIESEL ZS 1100',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
        ],
        [
            'id_barang' => 'DE-STD-005',
            'nama_barang' => 'DIESEL ZS 1110',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
        ],
        [
            'id_barang' => 'DE-STD-006',
            'nama_barang' => 'DIESEL ZS 1115',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
        ],
        [
            'id_barang' => 'DE-STD-007',
            'nama_barang' => 'DIESEL ZS 1125',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
        ],
        [
            'id_barang' => 'DE-STD-008',
            'nama_barang' => 'DIESEL ZS 1130',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
        ],
        [
            'id_barang' => 'DE-PRE-001',
            'nama_barang' => 'Shark Diesel Engine Premium SP1115-24HP',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'PRE',
        ],
        [
            'id_barang' => 'DE-PRE-002',
            'nama_barang' => 'Shark Diesel Engine Premium SP1115-24HP Tanpa Tangki',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'PRE',
        ],
        [
            'id_barang' => 'GE-STGE-001',
            'nama_barang' => 'Gasoline Engine SE 162s (5,5 hp)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'STGE',
        ],
        [
            'id_barang' => 'GE-STGE-002',
            'nama_barang' => 'Gasoline Engine SE 168X (6,5 hp)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'STGE',
        ],
        [
            'id_barang' => 'GE-STGE-002',
            'nama_barang' => 'Gasoline Engine SE 168X (6,5 hp)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'STGE',
        ],
        [
            'id_barang' => 'GE-PGE-001',
            'nama_barang' => 'Gasoline Engine Shark Premium 200',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'PGE',
        ],
        [
            'id_barang' => 'WP-STW-001',
            'nama_barang' => 'Water Pump SWP 50-30 2 inch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'STW',
        ],
        [
            'id_barang' => 'WP-STW-002',
            'nama_barang' => 'Water Pump SWP 80-30 3 inch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'STW',
        ],
        [
            'id_barang' => 'WP-PWP-001',
            'nama_barang' => 'Water Pump SWP 80-30 3 inch PREMIUM',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'Keunggulan',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'PWP',
        ],
        [
            'id_barang' => 'WP-PWP-002',
            'nama_barang' => 'Water Pump SWPH 80-30 3 inch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'Powered by Honda GX',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'PWP',
        ],
        [
            'id_barang' => 'WP-PWP-003',
            'nama_barang' => 'Water Pump SWPHGP 80-30 3 inch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'Powered by Honda GP',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'PWP',
        ],
        ]
    );
    }
}
