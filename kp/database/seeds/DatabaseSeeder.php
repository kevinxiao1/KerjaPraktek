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
                'nama_subkategori' => 'Pressure Switch Type System L Air Compressor',
            ],
            [
                'id_subkategori' => 'UVL',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Unloading Valve System L Air Compressor', 
            ],
            [
                'id_subkategori' => 'JSE',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'J Series Air Compressor', 
            ],
            [
                'id_subkategori' => 'POR',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Portable Air Compressor',
            ],
            [
                'id_subkategori' => 'SNW',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Snowash Compressor',
            ],
            [
                'id_subkategori' => 'PRE',
                'id_kategori' => 'DE',
                'nama_subkategori' => 'Premium Diesel',
            ],
            [
                'id_subkategori' => 'AMS',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Auto + Motor SDP Air Compressor',
            ],
            [
                'id_subkategori' => 'AUS',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Unloading SDP Air Compressor',
            ],
            [
                'id_subkategori' => 'JSS',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'J Series SDP Air Compressor',
            ],
            [
                'id_subkategori' => 'POS',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'Portable SDP Air Compressor',
            ],
            [
                'id_subkategori' => 'SDP',
                'id_kategori' => 'AC',
                'nama_subkategori' => 'SDP Air Compressor',
            ],
            // [
            //     'id_subkategori' => 'HPR',
            //     'id_kategori' => 'AC',
            //     'nama_subkategori' => 'High Pressure',
            // ],
            // [
            //     'id_subkategori' => 'BOS',
            //     'id_kategori' => 'AC',
            //     'nama_subkategori' => 'Booster Air Compressor',
            // ],
            // [
            //     'id_subkategori' => 'SCR',
            //     'id_kategori' => 'IC',
            //     'nama_subkategori' => 'Screw Air Compressor',
            // ],
            // [
            //     'id_subkategori' => 'SCO',
            //     'id_kategori' => 'IC',
            //     'nama_subkategori' => 'Screw Open Air Compressor',
            // ],
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
                'id_subkategori' => 'SDGE',
                'id_kategori' => 'GE',
                'nama_subkategori' => 'SDP Gasoline Engine',
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
                'nama_subkategori' => 'Premium Water Pump',
            ],
            [
                'id_subkategori' => 'SDPW',
                'id_kategori' => 'WP',
                'nama_subkategori' => 'SDP Water Pump',
            ],
            [
                'id_subkategori' => 'SGG',
                'id_kategori' => 'GG',
                'nama_subkategori' => 'Standard Gasoline Generator',
            ],
            [
                'id_subkategori' => 'SDGG',
                'id_kategori' => 'GG',
                'nama_subkategori' => 'SDP Gasoline Generator',
            ],
            [
                'id_subkategori' => 'SEL',
                'id_kategori' => 'EL',
                'nama_subkategori' => 'Standard Elektro Motor',
            ],
            [
                'id_subkategori' => 'SDL',
                'id_kategori' => 'EL',
                'nama_subkategori' => 'SDP Elektro Motor',
            ],
            
        ]
    );
      DB::table('barang')->insert(
        [
        [
          'id_barang' => 'AC-PSL-001',
          'nama_barang' => 'LZPM-5114 Kompresor 1/4 hp Auto+Motor',
          'harga_barang' => '2254320',
          'deskripsi_barang' =>'
          <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.25 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  40 litre / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  620</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                </tr>
            </tbody>
        </table>
          ',
          'gambar_barang' => '1.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-0-25hp-e-motor-lvpm-5114'
        ],
        [
          'id_barang' => 'AC-PSL-002',
          'nama_barang' => 'LVPM-5112 Kompresor 1/2 hp Auto+Motor',
          'harga_barang' => '3586763',
          'deskripsi_barang' => 'LVPM-5112 Kompresor 1/2 hp Auto+Motor',
          'gambar_barang' => '2.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-0-5hp-e-motor-lvpm-5512'
        ],
        [
          'id_barang' => 'AC-PSL-003',
          'nama_barang' => 'LVPM-6501 Kompresor 1 hp Auto+Motor',
          'harga_barang' => '5071185',
          'deskripsi_barang' => 'LVPM-6501 Kompresor 1 hp Auto+Motor',
          'gambar_barang' => '3.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-1hp-e-motor-lvpm-6501'
        ],
        [
          'id_barang' => 'AC-PSL-004',
          'nama_barang' => 'LWPM-6502 Kompresor 2 hp Auto+Motor',
          'harga_barang' => '7705845',
          'deskripsi_barang' => 'LWPM-6502 Kompresor 2 hp Auto+Motor',
          'gambar_barang' => '4.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-2hp-e-motor-lwpm-6502'
        ],
        [
          'id_barang' => 'AC-PSL-005',
          'nama_barang' => 'LVPM-8003 Kompresor 3 hp Auto+Motor',
          'harga_barang' => '10492500',
          'deskripsi_barang' => 'LVPM-8003 Kompresor 3 hp Auto+Motor',
          'gambar_barang' => '5.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-3hp-e-motor-lvpm-8003'
        ],
        [
          'id_barang' => 'AC-PSL-006',
          'nama_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'harga_barang' => '13818000',
          'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'gambar_barang' => '6.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-5hp-e-motor-lvpm-8005'
        ],
        [
          'id_barang' => 'AC-PSL-007',
          'nama_barang' => 'LVPM-1075 Kompresor 7,5 hp Auto+Motor',
          'harga_barang' => '22557750',
          'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'gambar_barang' => '7.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-7-5hp-e-motor-lvpm-1075'
        ],
        [
            'id_barang' => 'AC-PSL-008',
            'nama_barang' => 'LWPM-1010 Kompresor 10 hp Auto+Motor',
            'harga_barang' => '26445750',
            'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'PSL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-10hp-e-motor-lwpm-1010'
          ],
          [
            'id_barang' => 'AC-PSL-009',
            'nama_barang' => 'LWPM-1215 Kompresor 15 hp Auto+motor',
            'harga_barang' => '35853000',
            'deskripsi_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
            'gambar_barang' => '9.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'PSL',
            'linktokped' => 'none'
          ],
        [
            'id_barang' => 'AC-UVL-001',
            'nama_barang' => 'LZU-5114 Kompresor 1/4 hp Unloading',
            'harga_barang' => '1215788',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-25hp-lzu-5114'
        ],
        [
            'id_barang' => 'AC-UVL-002',
            'nama_barang' => 'LVU-5112 Kompresor 1/2 hp Unloading',
            'harga_barang' => '2255835',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-5hp-lvu-5112',
        ],
        [
            'id_barang' => 'AC-UVL-003',
            'nama_barang' => 'LVU-6501 Kompresor 1 hp Unloading',
            'harga_barang' => '3056940',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-1hp-lvu-6501',
        ],
        [
            'id_barang' => 'AC-UVL-004',
            'nama_barang' => 'LWU-6502 Kompresor 2 hp Unloading',
            'harga_barang' => '4802670',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-2hp-lwu-6502',
        ],
        [
            'id_barang' => 'AC-UVL-005',
            'nama_barang' => 'LVU-8003 Kompresor 3 hp Unloading',
            'harga_barang' => '7454250',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-3hp-lvu-8003',
        ],
        [
            'id_barang' => 'AC-UVL-006',
            'nama_barang' => 'LWU-8005 Kompresor 5 hp Unloading',
            'harga_barang' => '10082250',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-5hp-lwu-8005',
        ],
        [
            'id_barang' => 'AC-UVL-007',
            'nama_barang' => 'LVU-1075 Kompresor 7,5 hp Unloading',
            'harga_barang' => '16362000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-7-5hp-lvu-1075',
        ],
        [
            'id_barang' => 'AC-UVL-008',
            'nama_barang' => 'LWU-1010 Kompresor 10 hp Unloading',
            'harga_barang' => '19354500',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-10hp-lwu-1010',
        ],
        [
            'id_barang' => 'AC-UVL-009',
            'nama_barang' => 'LWU-1215 Kompresor 15 hp Unloading',
            'harga_barang' => '24504750',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '9.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-15hp-lwu-1215',
        ],
        [
            'id_barang' => 'AC-JSE-001',
            'nama_barang' => 'JZUE-5114 Kompresor 1/4 hp Unloading+Engine',
            'harga_barang' => '2227808',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-25hp-ge-shark-se-162-s-jzue-5114'
        ],
        [
            'id_barang' => 'AC-JSE-002',
            'nama_barang' => 'JVUE-5112 Kompresor 1/2 hp Unloading+Engine',
            'harga_barang' => '3268613',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-5hp-ge-shark-se162s-jvue-5112'
        ],
        [
            'id_barang' => 'AC-JSE-003',
            'nama_barang' => 'JVUE-6501 Kompresor 1 hp Unloading+Engine',
            'harga_barang' => '3954908',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-1hp-ge-shark-se168x-jvue-6501'
        ],
        [
            'id_barang' => 'AC-JSE-004',
            'nama_barang' => 'JWUE-6502 Kompresor 2 hp Unloading+Engine',
            'harga_barang' => '5531265',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-2hp-ge-shark-se168x-jvue-6502'
        ],
        [
            'id_barang' => 'AC-JSE-005',
            'nama_barang' => 'JZUE-5114-65L Kompressor 1/4hp unloading+Engine 65L',
            'harga_barang' => '2361885',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-25hp-65l-ge-shark-se162s-jzue-5114-new'
        ],
        [
            'id_barang' => 'AC-POR-001',
            'nama_barang' => 'MZ-0725 Kompresor 3/4 hp Portable',
            'harga_barang' => '4357898',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'AC-POR-002',
            'nama_barang' => 'WZ-1025 Kompresor 1hp Portable (OIL FREE)',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'AC-POR-003',
            'nama_barang' => 'EZ-1035 Kompresor 1 hp Direct Drive - 35L',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'AC-SNW-001',
            'nama_barang' => 'SSW-12L Snowash 12 Liter',
            'harga_barang' => '3962483',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'SNW',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-snowash-shark-12l-0-25hp',
        ],
        [
            'id_barang' => 'AC-SNW-002',
            'nama_barang' => 'SSW-30L Snowash 30 Liter',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'SNW',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'TO-TOP-001',
            'nama_barang' => 'Tyre Opener Pneumatic',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'TO',
            'id_subkategori' => 'TOP',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'PS-PSP-001',
            'nama_barang' => 'SPS-22 Power Sprayer Auto 22mm',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'PS',
            'id_subkategori' => 'PSP',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'PS-PSP-002',
            'nama_barang' => 'SPS-30 Power Sprayer Auto 30mm',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'PS',
            'id_subkategori' => 'PSP',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-001',
            'nama_barang' => 'DIESEL R 175',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-002',
            'nama_barang' => 'DIESEL R 180',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-003',
            'nama_barang' => 'DIESEL ZS 195',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-004',
            'nama_barang' => 'DIESEL ZS 1100',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-005',
            'nama_barang' => 'DIESEL ZS 1110',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-006',
            'nama_barang' => 'DIESEL ZS 1115',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-007',
            'nama_barang' => 'DIESEL ZS 1125',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-008',
            'nama_barang' => 'DIESEL ZS 1130',
            'harga_barang' => '1000',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-PRE-001',
            'nama_barang' => 'Shark Diesel Engine Premium SP1115-24HP',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'PRE',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-PRE-002',
            'nama_barang' => 'Shark Diesel Engine Premium SP1115-24HP Tanpa Tangki',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'PRE',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'GE-STGE-001',
            'nama_barang' => 'Gasoline Engine SE 162s (5,5 hp)',
            'harga_barang' => '1153521',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'STGE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-engine-shark-se-162-s-se162s',
        ],
        [
            'id_barang' => 'GE-STGE-002',
            'nama_barang' => 'Gasoline Engine SE 168X (6,5 hp)',
            'harga_barang' => '1310475',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'STGE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-engine-shark-se-168-x-se168x',
        ],
        [
            'id_barang' => 'GE-PGE-001',
            'nama_barang' => 'Gasoline Engine Shark Premium 200',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'PGE',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'WP-STW-001',
            'nama_barang' => 'Water Pump SWP 50-30 2 inch',
            'harga_barang' => '1776338',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'STW',
            'linktokped' => 'https://www.tokopedia.com/cvssd/water-pump-shark-swp-50-30-swp50-30-2-inch',
        ],
        [
            'id_barang' => 'WP-STW-002',
            'nama_barang' => 'Water Pump SWP 80-30 3 inch',
            'harga_barang' => '1938443',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'STW',
            'linktokped' => 'https://www.tokopedia.com/cvssd/water-pump-shark-swp-80-30-swp80-30-3-inch',
        ],
        [
            'id_barang' => 'WP-PWP-001',
            'nama_barang' => 'Water Pump SWP 80-30 3 inch PREMIUM',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'Keunggulan',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'PWP',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'WP-PWP-002',
            'nama_barang' => 'Water Pump SWPH 80-30 3 inch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'Powered by Honda GX',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'PWP',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'WP-PWP-003',
            'nama_barang' => 'Water Pump SWPHGP 80-30 3 inch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'Powered by Honda GP',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'PWP',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SGG-001',
            'nama_barang' => 'Gasoline Generator SG 1500X (1000 W)',
            'harga_barang' => '2302800',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-generator-shark-sg-1500-x-sg1500x-1kw'
        ],
        [
            'id_barang' => 'GG-SGG-002',
            'nama_barang' => 'Gasoline Generator SG 3000X (2000 W)',
            'harga_barang' => '3720900',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-generator-shark-sg-3000-x-sg3000x-2kw'
        ],
        [
            'id_barang' => 'GG-SGG-003',
            'nama_barang' => 'Gasoline Generator SG 4000X (2500 W)',
            'harga_barang' => '3880673',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-generator-shark-sg-4000-x-sg4000x-2-5kw'
        ],
        [
            'id_barang' => 'GG-SGG-004',
            'nama_barang' => 'Gasoline Generator SG 7500X (5000 W)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SGG-005',
            'nama_barang' => 'Gasoline Generator SG 10000X (6500 W - 7000 W)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AMS-001',
            'nama_barang' => 'MZPM-5114 Kompresor 1/4 hp Auto+Motor',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AMS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AMS-002',
            'nama_barang' => 'MVPM-5112 Kompresor 1/2 hp Auto+Motor',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AMS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AMS-003',
            'nama_barang' => 'MVPM-5501 Kompresor 1 hp Auto+Motor',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AMS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AMS-004',
            'nama_barang' => 'MVPM-6502 Kompresor 2 hp Auto+Motor',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AMS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AUS-001',
            'nama_barang' => 'MZU-5114 Kompresor 1/4 hp Unloading',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AUS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AUS-002',
            'nama_barang' => 'MVU-5112 Kompresor 1/2 hp Unloading',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AUS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AUS-003',
            'nama_barang' => 'MVU-5501 Kompresor 1 hp Unloading',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AUS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AUS-004',
            'nama_barang' => 'MVU-6502 Kompressor 2 hp Unloading',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AUS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-JSS-001',
            'nama_barang' => 'MZUE-5114 Komp. 1/4 hp Unloading+Engine',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-JSS-002',
            'nama_barang' => 'MVUE-5112 Komp. 1/2 hp Unloading + Engine',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-JSS-003',
            'nama_barang' => 'MVUE-5501 Komp. 1 hp Unloading + Engine',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-JSS-004',
            'nama_barang' => 'MVUE-6502 Komp. 2 hp Unloading + Engine',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-POS-001',
            'nama_barang' => 'SDP 0710 Portable Compressor 3/4HP - 10L',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-POS-002',
            'nama_barang' => 'SDP 0725 Portable Compressor 3/4HP - 25L',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GE-SDGE-001',
            'nama_barang' => 'Gasoline Engine SDP 160 (5,5 hp)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'SDGE',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GE-SDGE-002',
            'nama_barang' => 'Gasoline Engine SDP 200 (6,5 hp)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'SDGE',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'WP-SDPW-001',
            'nama_barang' => 'Water Pump SDP 2 inch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'SDPW',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'WP-SDPW-002',
            'nama_barang' => 'Water Pump SDP 3 inch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'SDPW',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SDGG-001',
            'nama_barang' => 'Gasoline Generator SDP-1400 (1000 W)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SDGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SDGG-002',
            'nama_barang' => 'Gasoline Generator SDP-2400 (2000 W)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SDGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SDGG-003',
            'nama_barang' => 'Gasoline Generator SDP-2500 (2000 W)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SDGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SDGG-004',
            'nama_barang' => 'Gasoline Generator SDP-7000 (5000 W - 5500 W)',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SDGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-001',
            'nama_barang' => 'Elektro Motor 1 Phase 1/4HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-002',
            'nama_barang' => 'Elektro Motor 1 Phase 1/2HP 4P Fetch',
            'harga_barang' => '918848',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/elektromotor-fetch-1-phase-0-5hp-4p',
        ],
        [
            'id_barang' => 'EL-SEL-003',
            'nama_barang' => 'Elektro Motor 1 Phase 1 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-004',
            'nama_barang' => 'Elektro Motor 1 Phase 2 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-005',
            'nama_barang' => 'Elektro Motor 1 Phase 3 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-006',
            'nama_barang' => 'Elektro Motor 1 Phase 5 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-007',
            'nama_barang' => 'Elektro Motor 1 Phase 7.5 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-008',
            'nama_barang' => 'Elektro Motor 1 Phase 10 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-009',
            'nama_barang' => 'Elektro Motor 1 Phase 15 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => 'des',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        ]
    );
    }
}
