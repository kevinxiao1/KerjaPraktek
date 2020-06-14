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
                    <td> :  40 litres / min </td>
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
                    <td> Tank Capacity</td>
                    <td> :  30 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  52 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 74 cm x 32 cm x 58 cm</td>
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
          'deskripsi_barang' => '
          <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  80 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  550</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  58 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  65 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 93 cm x 40 cm x 73 cm</td>
                </tr>
            </tbody>
        </table>
          ',
          'gambar_barang' => '2.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-0-5hp-e-motor-lvpm-5512'
        ],
        [
          'id_barang' => 'AC-PSL-003',
          'nama_barang' => 'LVPM-6501 Kompresor 1 hp Auto+Motor',
          'harga_barang' => '5071185',
          'deskripsi_barang' => '
          <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  1 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  130 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  514</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 50 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  83 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  106 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 99 cm x 40 cm x 83 cm</td>
                </tr>
            </tbody>
        </table>
          ',
          'gambar_barang' => '3.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-1hp-e-motor-lvpm-6501'
        ],
        [
          'id_barang' => 'AC-PSL-004',
          'nama_barang' => 'LWPM-6502 Kompresor 2 hp Auto+Motor',
          'harga_barang' => '7705845',
          'deskripsi_barang' => '
          <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  2 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  210 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  544</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 51 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  100 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  121 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 117 cm x 41 cm x 85 cm</td>
                </tr>
            </tbody>
        </table>
          ',
          'gambar_barang' => '4.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-2hp-e-motor-lwpm-6502'
        ],
        [
          'id_barang' => 'AC-PSL-005',
          'nama_barang' => 'LVPM-8003 Kompresor 3 hp Auto+Motor',
          'harga_barang' => '10492500',
          'deskripsi_barang' => '
          <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  3 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  370 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  819</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  80 mm / 60 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  103 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  151 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 112 cm x 49 cm x 90 cm</td>
                </tr>
            </tbody>
        </table>
          ',
          'gambar_barang' => '5.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-3hp-e-motor-lvpm-8003'
        ],
        [
          'id_barang' => 'AC-PSL-006',
          'nama_barang' => 'LWPM-8005 Kompresor 5 hp Auto+Motor',
          'harga_barang' => '13818000',
          'deskripsi_barang' => '
          <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  445 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  650</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  80 mm / 60 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  158 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  189 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 114 cm x 52.5 cm x 103 cm</td>
                </tr>
            </tbody>
        </table>
          ',
          'gambar_barang' => '6.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-5hp-e-motor-lvpm-8005'
        ],
        [
          'id_barang' => 'AC-PSL-007',
          'nama_barang' => 'LVPM-1075 Kompresor 7,5 hp Auto+Motor',
          'harga_barang' => '22557750',
          'deskripsi_barang' => '
          <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  7.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  720 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  835</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  100 mm / 73 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  275 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  375 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 153 cm x 62 cm x 122 cm</td>
                </tr>
            </tbody>
        </table>
          ',
          'gambar_barang' => '7.jpg',
          'id_kategori' => 'AC',
          'id_subkategori' => 'PSL',
          'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-7-5hp-e-motor-lvpm-1075'
        ],
        [
            'id_barang' => 'AC-PSL-008',
            'nama_barang' => 'LWPM-1010 Kompresor 10 hp Auto+Motor',
            'harga_barang' => '26445750',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  10 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  1046 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  846</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  100 mm / 70 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  275 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  420 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 157 cm x 64 cm x 129 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'PSL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-auto-10hp-e-motor-lwpm-1010'
          ],
          [
            'id_barang' => 'AC-PSL-009',
            'nama_barang' => 'LWPM-1215 Kompresor 15 hp Auto+motor',
            'harga_barang' => '35853000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  15 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  1715 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  843</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  120 mm / 80 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  330 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  582 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 185 cm x 65 cm x 135 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '9.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'PSL',
            'linktokped' => 'none'
          ],

        [
            'id_barang' => 'AC-UVL-001',
            'nama_barang' => 'LZU-5114 Kompresor 1/4 hp Unloading',
            'harga_barang' => '1215788',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.25 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  94 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1500</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  30 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  42 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 74 cm x 32 cm x 58 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-25hp-lzu-5114'
        ],
        [
            'id_barang' => 'AC-UVL-002',
            'nama_barang' => 'LVU-5112 Kompresor 1/2 hp Unloading',
            'harga_barang' => '2255835',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  116 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  820</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  58 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  52 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 93 cm x 40 cm x 73 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-5hp-lvu-5112',
        ],
        [
            'id_barang' => 'AC-UVL-003',
            'nama_barang' => 'LVU-6501 Kompresor 1 hp Unloading',
            'harga_barang' => '3056940',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  317 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1275</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 50 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  83 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  93 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 99 cm x 40 cm x 83 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-1hp-lvu-6501',
        ],
        [
            'id_barang' => 'AC-UVL-004',
            'nama_barang' => 'LWU-6502 Kompresor 2 hp Unloading',
            'harga_barang' => '4802670',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  514 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1352</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 51 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  100 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  98 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 117 cm x 41 cm x 85 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-2hp-lwu-6502',
        ],
        [
            'id_barang' => 'AC-UVL-005',
            'nama_barang' => 'LVU-8003 Kompresor 3 hp Unloading',
            'harga_barang' => '7454250',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  3 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  392 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  867</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  80 mm / 60 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  103 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  117 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 112 cm x 49 cm x 90 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-3hp-lvu-8003',
        ],
        [
            'id_barang' => 'AC-UVL-006',
            'nama_barang' => 'LWU-8005 Kompresor 5 hp Unloading',
            'harga_barang' => '10082250',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  465 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  685</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  80 mm / 60 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  158 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  146 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 114 cm x 52.5 cm x 103 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-5hp-lwu-8005',
        ],
        [
            'id_barang' => 'AC-UVL-007',
            'nama_barang' => 'LVU-1075 Kompresor 7,5 hp Unloading',
            'harga_barang' => '16362000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  16 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  945 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1100</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  100 mm / 73 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  275 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  241 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 153 cm x 62 cm x 122 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-7-5hp-lvu-1075',
        ],
        [
            'id_barang' => 'AC-UVL-008',
            'nama_barang' => 'LWU-1010 Kompresor 10 hp Unloading',
            'harga_barang' => '19354500',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  20 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  1351 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1093</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  100 mm / 70 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  275 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  241 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 157 cm x 64 cm x 129 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-10hp-lwu-1010',
        ],
        [
            'id_barang' => 'AC-UVL-009',
            'nama_barang' => 'LWU-1215 Kompresor 15 hp Unloading',
            'harga_barang' => '24504750',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  24 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  1913 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  940</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  120 mm / 80 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  330 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  256 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 185 cm x 65 cm x 135 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '9.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'UVL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-15hp-lwu-1215',
        ],
        [
            'id_barang' => 'AC-JSE-001',
            'nama_barang' => 'JZUE-5114 Kompresor 1/4 hp Unloading+Engine',
            'harga_barang' => '2227808',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  94 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1268</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  30 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  57 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 76 cm x 38 cm x 78 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-25hp-ge-shark-se-162-s-jzue-5114'
        ],
        [
            'id_barang' => 'AC-JSE-002',
            'nama_barang' => 'JVUE-5112 Kompresor 1/2 hp Unloading+Engine',
            'harga_barang' => '3268613',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  116 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  698</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  58 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  67 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 100 cm x 40 cm x 81 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-5hp-ge-shark-se162s-jvue-5112'
        ],
        [
            'id_barang' => 'AC-JSE-003',
            'nama_barang' => 'JVUE-6501 Kompresor 1 hp Unloading+Engine',
            'harga_barang' => '3954908',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  317 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  686</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 50 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  83 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  108 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 117 cm x 41 cm x 85 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-1hp-ge-shark-se168x-jvue-6501'
        ],
        [
            'id_barang' => 'AC-JSE-004',
            'nama_barang' => 'JWUE-6502 Kompresor 2 hp Unloading+Engine',
            'harga_barang' => '5531265',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  514 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  652</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 51 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  100 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  113 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 113 cm x 49 cm x 90 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-2hp-ge-shark-se168x-jvue-6502'
        ],
        [
            'id_barang' => 'AC-JSE-005',
            'nama_barang' => 'JZUE-5114-65L Kompressor 1/4hp unloading+Engine 65L',
            'harga_barang' => '2361885',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  94 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1500</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  65 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  88 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 76 cm x 38 cm x 78 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-shark-unloading-0-25hp-65l-ge-shark-se162s-jzue-5114-new'
        ],
        [
            'id_barang' => 'AC-POR-001',
            'nama_barang' => 'MZ-0725 Kompresor 3/4 hp Portable',
            'harga_barang' => '1371833',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.75 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  102 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  2800</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  42 mm / 35 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  25 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  21.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 55 cm x 30 cm x 62 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'AC-POR-002',
            'nama_barang' => 'WZ-1025 Kompresor 1hp Portable (OIL FREE)',
            'harga_barang' => '1784670',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.75 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  102 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  2800</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  55 mm / 35 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  25 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  25 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 55 cm x 26.5 cm x 56.5 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'AC-POR-003',
            'nama_barang' => 'EZ-1035 Kompresor 1 hp Direct Drive - 35L',
            'harga_barang' => '1962683',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  1 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  135 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  2800</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  42 mm / 41 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  35 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  39 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 57 cm x 43 cm x 72 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POR',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'AC-SNW-001',
            'nama_barang' => 'SSW-12L Snowash 12 Liter',
            'harga_barang' => '3962483',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  102 litres / min </td>
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
                    <td> Tank Capacity</td>
                    <td> :  12 x 2 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  56.4 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 84 cm x 57 cm x 58.6 cm</td>
                </tr>
            </tbody>
        </table>
        <p>Cocok digunakan untuk usaha cuci motor dan mobil</p>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'SNW',
            'linktokped' => 'https://www.tokopedia.com/cvssd/kompresor-snowash-shark-12l-0-25hp',
        ],
        [
            'id_barang' => 'AC-SNW-002',
            'nama_barang' => 'SSW-30L Snowash 30 Liter',
            'harga_barang' => '5200995',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  102 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  550</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  30 x 2 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  67.2 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 78 cm x 62.5 cm x 70 cm</td>
                </tr>
            </tbody>
        </table>
        <p>Produk cocok digunakan untuk usaha cuci motor dan mobil</p>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'SNW',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'TO-TOP-001',
            'nama_barang' => 'Tyre Opener Pneumatic',
            'harga_barang' => '1767248',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Piston Diameter </td>
                    <td> :  100 mm</td>
                </tr>
                <tr>
                    <td> Step Length </td>
                    <td> :  250 mmm </td>
                </tr>
                <tr>
                    <td> Maximum Pressure </td>
                    <td> :  14 Kg / cm²</td>
                </tr>
                <tr>
                    <td> Maximum Capacity</td>
                    <td> :  175 Kgf</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 40 cm x 42 cm x 114 cm</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  41.2 Kg</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Tiang yang lebih tinggi dapat membuka velg dengan ukuran hingga 16 inch</p>
        <p>- Pengait Ban yang tidak membuat ban robek</p>
        <p>- Permukaan tiang pengait yang nyaman dipegang</p>
        <p>- Tersedia mode pneummatic</p>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'TO',
            'id_subkategori' => 'TOP',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'PS-PSP-001',
            'nama_barang' => 'SPS-22 Power Sprayer Auto 22mm',
            'harga_barang' => '719625',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> RPM </td>
                    <td> :  1000</td>
                </tr>
                <tr>
                    <td> Maximum Pressure </td>
                    <td> :  35 Kg / cm²</td>
                </tr>
                <tr>
                    <td> Oil Capacity </td>
                    <td> :  0.6 litres </td>
                </tr>
                <tr>
                    <td> Suction Capacity</td>
                    <td> :  9.5 - 19 litres / min</td>
                </tr>
                <tr>
                    <td> Kw / HP</td>
                    <td> : 0.57 - 1.1 Kw / 1 - 1.5 HP</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  37.5 cm x 28.5 cm x 34 cm</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> : 12 Kg</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Daya hisap cepat</p>
        <p>- Daya semprot kencang</p>
        <p>- Unload otomatis</p>
        <p>- Cocok digunakan untuk usaha cuci motor dan mobil</p>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'PS',
            'id_subkategori' => 'PSP',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'PS-PSP-002',
            'nama_barang' => 'SPS-30 Power Sprayer Auto 30mm',
            'harga_barang' => '810525',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> RPM </td>
                    <td> :  1100</td>
                </tr>
                <tr>
                    <td> Maximum Pressure </td>
                    <td> :  35 Kg / cm²</td>
                </tr>
                <tr>
                    <td> Oil Capacity </td>
                    <td> :  0.9 litres </td>
                </tr>
                <tr>
                    <td> Suction Capacity</td>
                    <td> :  45 - 50 litres / min</td>
                </tr>
                <tr>
                    <td> Kw / HP</td>
                    <td> : 5.5 HP</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  42 cm x 30.5 cm x 34 cm</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> : 12 Kg</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Daya hisap cepat</p>
        <p>- Daya semprot kencang</p>
        <p>- Unload otomatis</p>
        <p>- Cocok digunakan untuk usaha cuci motor dan mobil</p>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'PS',
            'id_subkategori' => 'PSP',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-001',
            'nama_barang' => 'DIESEL R 175',
            'harga_barang' => '3610000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Indirect Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  75 mm x 80 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  0.353 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 22 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 7 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 6 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 294.2 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 4.31 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  589 mm x 341 mm x 463 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 60 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-002',
            'nama_barang' => 'DIESEL R 180',
            'harga_barang' => '3846000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Indirect Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  80 mm x 80 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  0.402 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 22 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 8 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 7 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 294.7 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 4.31 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  625 mm x 341 mm x 460 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 62 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-003',
            'nama_barang' => 'DIESEL ZS 195',
            'harga_barang' => '6827000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Direct Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  95 mm x 115 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  0.815 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 17 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 13 / 2200 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 12 / 2200 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 271.3 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 4.31 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  814 mm x 480 mm x 618 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 145 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-004',
            'nama_barang' => 'DIESEL ZS 1100',
            'harga_barang' => '7187000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Direct Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  100 mm x 115 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  0.903 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 17 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 16 / 2200 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 15 / 2200 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 269.4 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 2.14 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  854 mm x 490 mm x 669 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 155 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-005',
            'nama_barang' => 'DIESEL ZS 1110',
            'harga_barang' => '7646000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Direct Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  110 mm x 115 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  1.093 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 17 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 20 / 2200 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 18 / 2200 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 257.0 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 2.14 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  858 mm x 450 mm x 699 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 185 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-006',
            'nama_barang' => 'DIESEL ZS 1115',
            'harga_barang' => '7770000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Direct Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  115 mm x 115 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  1.194 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 17 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 24 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 22 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 254.2 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 2.14 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  858 mm x 450 mm x 699 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 185 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-007',
            'nama_barang' => 'DIESEL ZS 1125',
            'harga_barang' => '10387000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Direct Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  125 mm x 120 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  1.470 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 16.5 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 30 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 28 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 257.0 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 2.14 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  900 mm x 440 mm x 760 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 198 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-STD-008',
            'nama_barang' => 'DIESEL ZS 1130',
            'harga_barang' => '10734000',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Direct Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  130 mm x 120 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  1.593 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 16 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 33 / 2200 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 30 / 2200 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 257.2 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 2.14 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  900 mm x 440 mm x 760 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 210 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'STD',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-PRE-001',
            'nama_barang' => 'Shark Diesel Engine Premium SP1115-24HP',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Direct Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  115 mm x 115 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  1.194 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 17 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 24 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 22 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 254.2 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 2.14 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  589 mm x 341 mm x 463 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 185 Kg</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Suara dan geteran lebih halus</p>
        <p>- Tenaga lebih besar</p>
        <p>- Gear dan Bearing kualitas Jepang</p>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'PRE',
            'linktokped' => 'none'
        ],
        [
            'id_barang' => 'DE-PRE-002',
            'nama_barang' => 'Shark Diesel Engine Premium SP1115-24HP Tanpa Tangki',
            'harga_barang' => '7940115',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Combustion System </td>
                    <td> :  Direct Injection</td>
                </tr>
                <tr>
                    <td> Cylinder Count </td>
                    <td> :  1</td>
                </tr>
                <tr>
                    <td> Step Diameter </td>
                    <td> :  115 mm x 115 mm </td>
                </tr>
                <tr>
                    <td> Cylinder Content</td>
                    <td> :  1.194 litres</td>
                </tr>
                <tr>
                    <td> Compress Ratio</td>
                    <td> : 17 : 1</td>
                </tr>
                <tr>
                    <td> Maximum Power</td>
                    <td> : 24 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Average Power</td>
                    <td> : 22 / 2600 HP</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : <= 254.2 g / kW / h</td>
                </tr>
                <tr>
                    <td> Lubricating Oil Consumption</td>
                    <td> : <= 2.14 g / kW / h</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  589 mm x 341 mm x 463 mm</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 185 Kg</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Suara dan geteran lebih halus</p>
        <p>- Tenaga lebih besar</p>
        <p>- Gear dan Bearing kualitas Jepang</p>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'DE',
            'id_subkategori' => 'PRE',
            'linktokped' => 'none'
        ],
        // [
        //     'id_barang' => 'DE-PRE-003',
        //     'nama_barang' => 'Shark Diesel Engine Premium SP 1115 RS-24HP ',
        //     'harga_barang' => '8468850',
        //     'deskripsi_barang' => '
        //     <table  cellpadding = "4">
        //     <tbody>
        //         <tr>
        //             <td> Combustion System </td>
        //             <td> :  Direct Injection</td>
        //         </tr>
        //         <tr>
        //             <td> Cylinder Count </td>
        //             <td> :  1</td>
        //         </tr>
        //         <tr>
        //             <td> Step Diameter </td>
        //             <td> :  115 mm x 115 mm </td>
        //         </tr>
        //         <tr>
        //             <td> Cylinder Content</td>
        //             <td> :  1.194 litres</td>
        //         </tr>
        //         <tr>
        //             <td> Compress Ratio</td>
        //             <td> : 17 : 1</td>
        //         </tr>
        //         <tr>
        //             <td> Maximum Power</td>
        //             <td> : 24 / 2600 HP</td>
        //         </tr>
        //         <tr>
        //             <td> Average Power</td>
        //             <td> : 22 / 2600 HP</td>
        //         </tr>
        //         <tr>
        //             <td> Fuel Consumption</td>
        //             <td> : <= 254.2 g / kW / h</td>
        //         </tr>
        //         <tr>
        //             <td> Lubricating Oil Consumption</td>
        //             <td> : <= 2.14 g / kW / h</td>
        //         </tr>
        //         <tr>
        //             <td> Size (Length x Width x Height)</td>
        //             <td> :  589 mm x 341 mm x 463 mm</td>
        //         </tr>
        //         <tr>
        //             <td> Net Weight</td>
        //             <td> : 210 Kg</td>
        //         </tr>
        //     </tbody>
        // </table>
        // <br>
        // <p>Keunggulan : </p>
        // <p>- Suara dan geteran lebih halus</p>
        // <p>- Tenaga lebih besar</p>
        // <p>- Gear dan Bearing kualitas Jepang</p>
        //     ',
        //     'gambar_barang' => '1.jpg',
        //     'id_kategori' => 'DE',
        //     'id_subkategori' => 'PRE',
        //     'linktokped' => 'none'
        // ],
        [
            'id_barang' => 'GE-STGE-001',
            'nama_barang' => 'Gasoline Engine SE 162s (5,5 hp)',
            'harga_barang' => '1153521',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Maximum Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> Energy </td>
                    <td> :  2.1 kW</td>
                </tr>
                <tr>
                    <td> Piston Diameter x Step Length </td>
                    <td> :  68 mm x 45 mm </td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> :  163 cc</td>
                </tr>
                <tr>
                    <td> Maximum RPM</td>
                    <td> : 3800 RPM</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 3.6 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 0.6 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> : 0.6 litres</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Pull</td>
                </tr>
                <tr>
                    <td> Ignition System</td>
                    <td> : Ignition Coil</td>
                </tr>
                <tr>
                    <td> Total Weight</td>
                    <td> : 15 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  390 mm x 310 mm x 360 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'STGE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-engine-shark-se-162-s-se162s',
        ],
        [
            'id_barang' => 'GE-STGE-002',
            'nama_barang' => 'Gasoline Engine SE 168X (6,5 hp)',
            'harga_barang' => '1310475',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Maximum Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> Energy </td>
                    <td> :  3.2 kW</td>
                </tr>
                <tr>
                    <td> Piston Diameter x Step Length </td>
                    <td> :  68 mm x 45 mm </td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> :  163 cc</td>
                </tr>
                <tr>
                    <td> Maximum RPM</td>
                    <td> : 3800 RPM</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 3.6 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 0.6 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Pull</td>
                </tr>
                <tr>
                    <td> Ignition System</td>
                    <td> : Ignition Coil</td>
                </tr>
                <tr>
                    <td> Total Weight</td>
                    <td> : 15 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  390 mm x 310 mm x 360 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'STGE',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-engine-shark-se-168-x-se168x',
        ],
        [
            'id_barang' => 'GE-PGE-001',
            'nama_barang' => 'Gasoline Engine Shark Premium 200',
            'harga_barang' => '1818758',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Maximum Power </td>
                    <td> :  6.5 HP</td>
                </tr> 
                <tr>
                    <td> Energy </td>
                    <td> :  3.2 kW</td>
                </tr>
                <tr>
                    <td> Piston Diameter x Step Length </td>
                    <td> :  68 mm x 54 mm </td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> :  196 cc</td>
                </tr>
                <tr>
                    <td> Maximum RPM</td>
                    <td> : 3800 RPM</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 4 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 0.6 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Pull</td>
                </tr>
                <tr>
                    <td> Ignition System</td>
                    <td> : Ignition Coil</td>
                </tr>
                <tr>
                    <td> Total Weight</td>
                    <td> : 15.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  390 mm x 310 mm x 360 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'PGE',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'WP-STW-001',
            'nama_barang' => 'Water Pump SWP 50-30 2 inch',
            'harga_barang' => '1776338',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Pipe Diameter </td>
                    <td> :  2 inches</td>
                </tr>
                <tr>
                    <td> Suction Strength </td>
                    <td> :  8 meters</td>
                </tr>
                <tr>
                    <td> Pump strength </td>
                    <td> :  30 meters </td>
                </tr>
                <tr>
                    <td> Hydration Intensity</td>
                    <td> :  575 litres / min</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : 162s</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 3.6 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 1.1 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 25.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  530 mm x 400 mm x 420 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'STW',
            'linktokped' => 'https://www.tokopedia.com/cvssd/water-pump-shark-swp-50-30-swp50-30-2-inch',
        ],
        [
            'id_barang' => 'WP-STW-002',
            'nama_barang' => 'Water Pump SWP 80-30 3 inch',
            'harga_barang' => '1938443',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Pipe Diameter </td>
                    <td> :  3 inches</td>
                </tr>
                <tr>
                    <td> Suction Strength </td>
                    <td> :  8 meters</td>
                </tr>
                <tr>
                    <td> Pump strength </td>
                    <td> :  30 meters </td>
                </tr>
                <tr>
                    <td> Hydration Intensity</td>
                    <td> :  1050 litres / min</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : 168x</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 3.6 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 1.3 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 26.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  555 mm x 441 mm x 455 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'STW',
            'linktokped' => 'https://www.tokopedia.com/cvssd/water-pump-shark-swp-80-30-swp80-30-3-inch',
        ],
        [
            'id_barang' => 'WP-PWP-001',
            'nama_barang' => 'Water Pump SWP 80-30 3 inch PREMIUM',
            'harga_barang' => '2905770',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Pipe Diameter </td>
                    <td> :  3 inches</td>
                </tr>
                <tr>
                    <td> Suction Strength </td>
                    <td> :  8 meters</td>
                </tr>
                <tr>
                    <td> Pump strength </td>
                    <td> :  30 meters </td>
                </tr>
                <tr>
                    <td> Hydration Intensity</td>
                    <td> :  1050 litres / min</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : SP-200</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 4 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 1.3 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 26.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  555 mm x 441 mm x 455 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'PWP',
            'linktokped' => 'none',
        ],
        // [
        //     'id_barang' => 'WP-PWP-002',
        //     'nama_barang' => 'Water Pump SWPH 80-30 3 inch',
        //     'harga_barang' => '8468850',
        //     'deskripsi_barang' => '
        //     <table  cellpadding = "4">
        //     <tbody>
        //         <tr>
        //             <td> Pipe Diameter </td>
        //             <td> :  3 inches</td>
        //         </tr>
        //         <tr>
        //             <td> Suction Strength </td>
        //             <td> :  8 meters</td>
        //         </tr>
        //         <tr>
        //             <td> Pump strength </td>
        //             <td> :  30 meters </td>
        //         </tr>
        //         <tr>
        //             <td> Hydration Intensity</td>
        //             <td> :  1050 litres / min</td>
        //         </tr>
        //         <tr>
        //             <td> Drive Engine</td>
        //             <td> : Honda GX-160</td>
        //         </tr>
        //         <tr>
        //             <td> Fuel Capacity</td>
        //             <td> : 3.6 litres</td>
        //         </tr>
        //         <tr>
        //             <td> Fuel Consumption</td>
        //             <td> : 1.3 litres / hour</td>
        //         </tr>
        //         <tr>
        //             <td> Engine Oil Capacity</td>
        //             <td> :  0.6 litres</td>
        //         </tr>
        //         <tr>
        //             <td> Net Weight</td>
        //             <td> : 26.5 Kg</td>
        //         </tr>
        //         <tr>
        //             <td> Size (Length x Width x Height)</td>
        //             <td> :  555 mm x 441 mm x 455 mm</td>
        //         </tr>
        //     </tbody>
        // </table>
        //     <br>
        //     <p>Powered by Honda GX</p>',
        //     'gambar_barang' => '3.jpg',
        //     'id_kategori' => 'WP',
        //     'id_subkategori' => 'PWP',
        //     'linktokped' => 'none',
        // ],
        // [
        //     'id_barang' => 'WP-PWP-003',
        //     'nama_barang' => 'Water Pump SWPHGP 80-30 3 inch',
        //     'harga_barang' => '8468850',
        //     'deskripsi_barang' => '
        //     <table  cellpadding = "4">
        //     <tbody>
        //         <tr>
        //             <td> Pipe Diameter </td>
        //             <td> :  3 inches</td>
        //         </tr>
        //         <tr>
        //             <td> Suction Strength </td>
        //             <td> :  8 meters</td>
        //         </tr>
        //         <tr>
        //             <td> Pump strength </td>
        //             <td> :  30 meters </td>
        //         </tr>
        //         <tr>
        //             <td> Hydration Intensity</td>
        //             <td> :  1050 litres / min</td>
        //         </tr>
        //         <tr>
        //             <td> Drive Engine</td>
        //             <td> : Honda GP-160H1</td>
        //         </tr>
        //         <tr>
        //             <td> Fuel Capacity</td>
        //             <td> : 3.6 litres</td>
        //         </tr>
        //         <tr>
        //             <td> Fuel Consumption</td>
        //             <td> : 1.4 litres / hour</td>
        //         </tr>
        //         <tr>
        //             <td> Engine Oil Capacity</td>
        //             <td> :  0.6 litres</td>
        //         </tr>
        //         <tr>
        //             <td> Net Weight</td>
        //             <td> : 26.5 Kg</td>
        //         </tr>
        //         <tr>
        //             <td> Size (Length x Width x Height)</td>
        //             <td> :  555 mm x 441 mm x 455 mm</td>
        //         </tr>
        //     </tbody>
        // </table>
        //     <br>
        //     <p>Powered by Honda GP</p>
        //     ',
        //     'gambar_barang' => '4.jpg',
        //     'id_kategori' => 'WP',
        //     'id_subkategori' => 'PWP',
        //     'linktokped' => 'none',
        // ],
        [
            'id_barang' => 'GG-SGG-001',
            'nama_barang' => 'Gasoline Generator SG 1500X (1000 W)',
            'harga_barang' => '2302800',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Average Power </td>
                    <td> :  1.0 kW / 1.1 kW</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Voltage Regulator</td>
                    <td> :  Automatic</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  8.5 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 0.9 litres / hour</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Recoil Starter</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : SE 154s-1</td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> : 87 cc</td>
                </tr>
                <tr>
                <tr>
                    <td> Oil Capacity</td>
                    <td> :  0.4 litres</td>
                </tr>
                <tr>
                    <td> Oil Sensors</td>
                    <td> :  No</td>
                </tr>
                <tr>
                    <td> Wheel Attachments</td>
                    <td> :  Yes </td>
                </tr>
                    <td> Net Weight</td>
                    <td> : 24.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  470 mm x 380 mm x 470 mm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Tenaga lebih besar</p>
        <p>- Irit bahan bakar</p>
        <p>- Suara lebih halus</p>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-generator-shark-sg-1500-x-sg1500x-1kw'
        ],
        [
            'id_barang' => 'GG-SGG-002',
            'nama_barang' => 'Gasoline Generator SG 3000X (2000 W)',
            'harga_barang' => '3726900',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Average Power </td>
                    <td> :  2.0 kW / 2.2 kW</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Voltage Regulator</td>
                    <td> :  Automatic</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  15 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 1.2 litres / hour</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Electric Starter</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : SE 168s-1</td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> : 196 cc</td>
                </tr>
                <tr>
                <tr>
                    <td> Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Oil Sensors</td>
                    <td> :  Yes </td>
                </tr>
                <tr>
                    <td> Wheel Attachments</td>
                    <td> :  Yes </td>
                </tr>
                    <td> Net Weight</td>
                    <td> : 38 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  625 mm x 450 mm x 470 mm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Tenaga lebih besar</p>
        <p>- Irit bahan bakar</p>
        <p>- Suara lebih halus</p>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-generator-shark-sg-3000-x-sg3000x-2kw'
        ],
        [
            'id_barang' => 'GG-SGG-003',
            'nama_barang' => 'Gasoline Generator SG 4000X (2500 W)',
            'harga_barang' => '3880673',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Average Power </td>
                    <td> :  2.5 kW / 2.7 kW</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Voltage Regulator</td>
                    <td> :  Automatic</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  15 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 2.8 litres / hour</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Electric Starter</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : SE 168x</td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> : 196 cc</td>
                </tr>
                <tr>
                <tr>
                    <td> Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Oil Sensors</td>
                    <td> :  Yes </td>
                </tr>
                <tr>
                    <td> Wheel Attachments</td>
                    <td> :  Yes </td>
                </tr>
                    <td> Net Weight</td>
                    <td> : 40 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  715 mm x 530 mm x 585 mm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Tenaga lebih besar</p>
        <p>- Irit bahan bakar</p>
        <p>- Suara lebih halus</p>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'https://www.tokopedia.com/cvssd/gasoline-generator-shark-sg-4000-x-sg4000x-2-5kw'
        ],
        [
            'id_barang' => 'GG-SGG-004',
            'nama_barang' => 'Gasoline Generator SG 7500X (5000 W)',
            'harga_barang' => '7223520',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Average Power </td>
                    <td> :  5.0 kW / 5.5 kW</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Voltage Regulator</td>
                    <td> :  Automatic</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  25 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 2.8 litres / hour</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Electric Starter</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : SE 188s-1</td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> : 390 cc</td>
                </tr>
                <tr>
                <tr>
                    <td> Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Oil Sensors</td>
                    <td> :  Yes </td>
                </tr>
                <tr>
                    <td> Wheel Attachments</td>
                    <td> :  Yes </td>
                </tr>
                    <td> Net Weight</td>
                    <td> : 82 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  695 mm x 525 mm x 545 mm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Tenaga lebih besar</p>
        <p>- Irit bahan bakar</p>
        <p>- Suara lebih halus</p>
            ',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SGG-005',
            'nama_barang' => 'Gasoline Generator SG 10000X (6500 W - 7000 W)',
            'harga_barang' => '7915118',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Average Power </td>
                    <td> :  6.5 kW / 7 kW</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Voltage Regulator</td>
                    <td> :  Automatic</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  25 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 2.8 litres / hour</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Electric Starter</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : SE 192s-1</td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> : 390 cc</td>
                </tr>
                <tr>
                <tr>
                    <td> Oil Capacity</td>
                    <td> :  1.1 litres</td>
                </tr>
                <tr>
                    <td> Oil Sensors</td>
                    <td> :  Yes </td>
                </tr>
                <tr>
                    <td> Wheel Attachments</td>
                    <td> :  Yes </td>
                </tr>
                    <td> Net Weight</td>
                    <td> : 90 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  715 mm x 540 mm x 565 mm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Tenaga lebih besar</p>
        <p>- Irit bahan bakar</p>
        <p>- Suara lebih halus</p>
            ',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AMS-001',
            'nama_barang' => 'MZPM-5114 Kompresor 1/4 hp Auto+Motor',
            'harga_barang' => '1926323',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.25 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  46 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  590</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  38 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  52 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 75 cm x 30 cm x 60 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AMS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AMS-002',
            'nama_barang' => 'MVPM-5112 Kompresor 1/2 hp Auto+Motor',
            'harga_barang' => '3146655',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  1 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  75 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  520</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  46 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  75 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 93 cm x 37 cm x 73 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AMS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AMS-003',
            'nama_barang' => 'MVPM-5501 Kompresor 1 hp Auto+Motor',
            'harga_barang' => '3417083',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  2 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  90 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  550</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  55 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  46 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  92 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 99 cm x 40 cm x 83 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AMS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AMS-004',
            'nama_barang' => 'MVPM-6502 Kompresor 2 hp Auto+Motor',
            'harga_barang' => '4329870',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  3 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  139 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  600</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  46 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  121 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 115 cm x 40 cm x 83 cm</td>
                </tr>
            </tbody>
        </table> 
            ',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AMS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AUS-001',
            'nama_barang' => 'MZU-5114 Kompresor 1/4 hp Unloading',
            'harga_barang' => '898538',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.25 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  75 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1270</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  38 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  151 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 78 cm x 30 cm x 73 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '5.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AUS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AUS-002',
            'nama_barang' => 'MVU-5112 Kompresor 1/2 hp Unloading',
            'harga_barang' => '1719900',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  98 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  700</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  46 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  189 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 93 cm x 37 cm x 73 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '6.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AUS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AUS-003',
            'nama_barang' => 'MVU-5501 Kompresor 1 hp Unloading',
            'harga_barang' => '2210850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  143 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  860</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  55 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  46 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  375 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 109 cm x 78 cm x 56 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '7.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AUS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-AUS-004',
            'nama_barang' => 'MVU-6502 Kompressor 2 hp Unloading',
            'harga_barang' => '2656845',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  206 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  7 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  905</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  46 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  420 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 115 cm x 40 cm x 83 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '8.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'AUS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-JSS-001',
            'nama_barang' => 'MZUE-5114 Komp. 1/4 hp Unloading+Engine',
            'harga_barang' => '2133878',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  98 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1268</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  30 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  52 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 75 cm x 33 cm x 73 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-JSS-002',
            'nama_barang' => 'MVUE-5112 Komp. 1/2 hp Unloading + Engine',
            'harga_barang' => '2917890',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  128 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  1500</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  65 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  80 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 76 cm x 38 cm x 78 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-JSS-003',
            'nama_barang' => 'MVUE-5501 Komp. 1 hp Unloading + Engine',
            'harga_barang' => '3202710',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  131 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  698</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  51 mm / 46 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  58 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  89 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 99 cm x 40 cm x 83 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '3.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-JSS-004',
            'nama_barang' => 'MVUE-6502 Komp. 2 hp Unloading + Engine',
            'harga_barang' => '3734475',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  276 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  686</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  65 mm / 50 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  83 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  108 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 117 cm x 41 cm x 85 cm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'JSS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-POS-001',
            'nama_barang' => 'SDP 0710 Portable Compressor 3/4HP - 10L',
            'harga_barang' => '974903',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.75 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  114 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  2800</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  42 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  25 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  16.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 50.7 cm x 22.7 cm x 49.5 cm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Cocok untuk usaha pengecatan dan perbengkelan</p>
        <p>- Dapat digunakan untuk Pneumatic Tools</p>
        <p>- Ukuran kecil dan sederhana, cocok untuk dipindahkan ataupun dibawa</p>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'AC-POS-002',
            'nama_barang' => 'SDP 0725 Portable Compressor 3/4HP - 25L',
            'harga_barang' => '1060500',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Motor Power </td>
                    <td> :  0.75 HP</td>
                </tr>
                <tr>
                    <td> FAD </td>
                    <td> :  109 litres / min </td>
                </tr>
                <tr>
                    <td> Air Pressure </td>
                    <td> :  8 Kg / cm²</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> :  2800</td>
                </tr>
                <tr>
                    <td> Diameter Piston / Piston Stroke</td>
                    <td> :  45 mm / 38 mm</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  25 litres</td>
                </tr>
                <tr>
                    <td> Weight</td>
                    <td> :  21.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : 55 cm x 30 cm x 62 cm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Cocok untuk usaha pengecatan dan perbengkelan</p>
        <p>- Dapat digunakan untuk Pneumatic Tools</p>
        <p>- Ukuran kecil dan sederhana, cocok untuk dipindahkan ataupun dibawa</p>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'AC',
            'id_subkategori' => 'POS',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GE-SDGE-001',
            'nama_barang' => 'Gasoline Engine SDP 160 (5,5 hp)',
            'harga_barang' => '784770',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Maximum Power </td>
                    <td> :  5.5 HP</td>
                </tr>
                <tr>
                    <td> Energy </td>
                    <td> :  3.2 kW</td>
                </tr>
                <tr>
                    <td> Piston Diameter x Step Length </td>
                    <td> :  68 mm x 54 mm </td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> :  163 cc</td>
                </tr>
                <tr>
                    <td> Maximum RPM</td>
                    <td> : 3600 RPM</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 3.6 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 0.6 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Pull</td>
                </tr>
                <tr>
                    <td> Ignition System</td>
                    <td> : Ignition Coil</td>
                </tr>
                <tr>
                    <td> Total Weight</td>
                    <td> : 15 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  385 mm x 355 mm x 385 mm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Lebih efisien</p>
        <p>- Suara lebih halus</p>
        <p>- Mudah dihidupkan</p>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'SDGE',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GE-SDGE-002',
            'nama_barang' => 'Gasoline Engine SDP 200 (6,5 hp)',
            'harga_barang' => '814313',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Maximum Power </td>
                    <td> :  6.5 HP</td>
                </tr>
                <tr>
                    <td> Energy </td>
                    <td> :  3.2 kW</td>
                </tr>
                <tr>
                    <td> Piston Diameter x Step Length </td>
                    <td> :  68 mm x 54 mm </td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> :  196 cc</td>
                </tr>
                <tr>
                    <td> Maximum RPM</td>
                    <td> : 3600 RPM</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 3.6 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 0.6 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> : 0.6 litres</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Pull</td>
                </tr>
                <tr>
                    <td> Ignition System</td>
                    <td> : Ignition Coil</td>
                </tr>
                <tr>
                    <td> Total Weight</td>
                    <td> : 15 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  390 mm x 355 mm x 385 mm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Lebih efisien</p>
        <p>- Suara lebih halus</p>
        <p>- Mudah dihidupkan</p>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GE',
            'id_subkategori' => 'SDGE',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'WP-SDPW-001',
            'nama_barang' => 'Water Pump SDP 2 inch',
            'harga_barang' => '1248360',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Pipe Diameter </td>
                    <td> :  2  inches</td>
                </tr>
                <tr>
                    <td> Suction Strength </td>
                    <td> :  7 meters</td>
                </tr>
                <tr>
                    <td> Pump strength </td>
                    <td> :  30 meters </td>
                </tr>
                <tr>
                    <td> Hydration Intensity</td>
                    <td> :  575 litres / min</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : SDP-160</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 3.6 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 1.1 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 25.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  530 mm x 400 mm x 420 mm</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Keunggulan : </p>
        <p>- Rangka lebih rapi dan kuat</p>
        <p>- Mudah dihidupkan</p>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'SDPW',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'WP-SDPW-002',
            'nama_barang' => 'Water Pump SDP 3 inch',
            'harga_barang' => '1365773',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Pipe Diameter </td>
                    <td> :  3  inches</td>
                </tr>
                <tr>
                    <td> Suction Strength </td>
                    <td> :  7 meters</td>
                </tr>
                <tr>
                    <td> Pump strength </td>
                    <td> :  30 meters </td>
                </tr>
                <tr>
                    <td> Hydration Intensity</td>
                    <td> :  1050 litres / min</td>
                </tr>
                <tr>
                    <td> Drive Engine</td>
                    <td> : SDP-200</td>
                </tr>
                <tr>
                    <td> Fuel Capacity</td>
                    <td> : 3.6 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 1.3 litres / hour</td>
                </tr>
                <tr>
                    <td> Engine Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Net Weight</td>
                    <td> : 26.5 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  555 mm x 441 mm x 455 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'WP',
            'id_subkategori' => 'SDPW',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SDGG-001',
            'nama_barang' => 'Gasoline Generator SDP-1400 (1000 W)',
            'harga_barang' => '1789215',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Average Power </td>
                    <td> :  1.0 kW / 1.1 kW</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Voltage Regulator</td>
                    <td> :  Automatic</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  5.4 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 0.9 litres / hour</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Recoil Starter</td>
                </tr>
                <tr>
                    <td> Engine Power</td>
                    <td> : 3 HP</td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> : 93 cc</td>
                </tr>
                <tr>
                    <td> Oil Capacity</td>
                    <td> :  0.35 litres</td>
                </tr>
                <tr>
                    <td> Oil Sensors</td>
                    <td> :  Yes </td>
                </tr>
                <tr>
                    <td> Wheel Attachments</td>
                    <td> :  No</td>
                </tr>
                    <td> Net Weight</td>
                    <td> : 23 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  460 mm x 360 mm x 375 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SDGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'GG-SDGG-002',
            'nama_barang' => 'Gasoline Generator SDP-2400 (2000 W)',
            'harga_barang' => '2879258',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Average Power </td>
                    <td> :  2.0 kW / 2.2 kW</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Voltage Regulator</td>
                    <td> :  Automatic</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  13 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 1.2 litres / hour</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Electric Starter</td>
                </tr>
                <tr>
                    <td> Engine Power</td>
                    <td> : 5.5 HP</td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> : 196 cc</td>
                </tr>
                <tr>
                    <td> Oil Capacity</td>
                    <td> :  0.6 litres</td>
                </tr>
                <tr>
                    <td> Oil Sensors</td>
                    <td> :  Yes </td>
                </tr>
                <tr>
                    <td> Wheel Attachments</td>
                    <td> :  Yes </td>
                </tr>
                    <td> Net Weight</td>
                    <td> : 37 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  600 mm x 450 mm x 500 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SDGG',
            'linktokped' => 'none',
        ],
        // [
        //     'id_barang' => 'GG-SDGG-003',
        //     'nama_barang' => 'Gasoline Generator SDP-2500 (2000 W)',
        //     'harga_barang' => '8468850',
        //     'deskripsi_barang' => '
        //     <table  cellpadding = "4">
        //     <tbody>
        //         <tr>
        //             <td> Frequency </td>
        //             <td> :  50 Hz</td>
        //         </tr>
        //         <tr>
        //             <td> Average Power </td>
        //             <td> :  2.5 kW / 2.7 kW</td>
        //         </tr>
        //         <tr>
        //             <td> Voltage </td>
        //             <td> :  220 V </td>
        //         </tr>
        //         <tr>
        //             <td> Voltage Regulator</td>
        //             <td> :  Automatic</td>
        //         </tr>
        //         <tr>
        //             <td> Tank Capacity</td>
        //             <td> :  13 litres</td>
        //         </tr>
        //         <tr>
        //             <td> Fuel Consumption</td>
        //             <td> : 2.8 litres / hour</td>
        //         </tr>
        //         <tr>
        //             <td> Starter System</td>
        //             <td> : Electric Starter</td>
        //         </tr>
        //         <tr>
        //             <td> Engine Power</td>
        //             <td> : 6.5 HP</td>
        //         </tr>
        //         <tr>
        //             <td> Engine Capacity</td>
        //             <td> : 196 cc</td>
        //         </tr>
        //         <tr>
        //             <td> Oil Capacity</td>
        //             <td> :  0.6 litres</td>
        //         </tr>
        //         <tr>
        //             <td> Oil Sensors</td>
        //             <td> :  Yes </td>
        //         </tr>
        //         <tr>
        //             <td> Wheel Attachments</td>
        //             <td> :  Yes </td>
        //         </tr>
        //             <td> Net Weight</td>
        //             <td> : 37 Kg</td>
        //         </tr>
        //         <tr>
        //             <td> Size (Length x Width x Height)</td>
        //             <td> :  600 mm x 450 mm x 500 mm</td>
        //         </tr>
        //     </tbody>
        // </table>
        //     ',
        //     'gambar_barang' => '3.jpg',
        //     'id_kategori' => 'GG',
        //     'id_subkategori' => 'SDGG',
        //     'linktokped' => 'none',
        // ],
        [
            'id_barang' => 'GG-SDGG-004',
            'nama_barang' => 'Gasoline Generator SDP-7000 (5000 W - 5500 W)',
            'harga_barang' => '6194835',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Average Power </td>
                    <td> :  5.0 kW / 5.5 kW</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Voltage Regulator</td>
                    <td> :  Automatic</td>
                </tr>
                <tr>
                    <td> Tank Capacity</td>
                    <td> :  25 litres</td>
                </tr>
                <tr>
                    <td> Fuel Consumption</td>
                    <td> : 2.8 litres / hour</td>
                </tr>
                <tr>
                    <td> Starter System</td>
                    <td> : Electric Starter</td>
                </tr>
                <tr>
                    <td> Engine Power</td>
                    <td> : 13 HP</td>
                </tr>
                <tr>
                    <td> Engine Capacity</td>
                    <td> : 389 cc</td>
                </tr>
                <tr>
                    <td> Oil Capacity</td>
                    <td> :  1.1 litres</td>
                </tr>
                <tr>
                    <td> Oil Sensors</td>
                    <td> :  Yes </td>
                </tr>
                <tr>
                    <td> Wheel Attachments</td>
                    <td> :  Yes </td>
                </tr>
                    <td> Net Weight</td>
                    <td> : 78 Kg</td>
                </tr>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  725 mm x 525 mm x 550 mm</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '4.jpg',
            'id_kategori' => 'GG',
            'id_subkategori' => 'SDGG',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-001',
            'nama_barang' => 'Elektro Motor 1 Phase 1/4HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  0.18 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  80 L</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 2.9</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 1</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  27.5 cm x 25 cm x 22 cm</td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 10 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-002',
            'nama_barang' => 'Elektro Motor 1 Phase 1/2HP 4P Fetch',
            'harga_barang' => '918848',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  0.37 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  80 L</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 4.4</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 1</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  27.5 cm x 25 cm x 22 cm</td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 13 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'https://www.tokopedia.com/cvssd/elektromotor-fetch-1-phase-0-5hp-4p',
        ],
        [
            'id_barang' => 'EL-SEL-003',
            'nama_barang' => 'Elektro Motor 1 Phase 1 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  0.75 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  90 L</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 7</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 1</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  </td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 20 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-004',
            'nama_barang' => 'Elektro Motor 1 Phase 2 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  1.50 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  220 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  90 L</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 10</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 1</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  37.5 cm x 21.5 cm x 27 cm</td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 23 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '1.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-005',
            'nama_barang' => 'Elektro Motor 1 Phase 3 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  2.2 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  380 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  100 L</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 8.7 (Starting) , 5.0 (Running)</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 3</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  41 cm x 29.5 cm x 23.5 cm</td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 34 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-006',
            'nama_barang' => 'Elektro Motor 1 Phase 5 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  3.70 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  380 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  112 M</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 14.5 (Starting) , 8.4 (Running)</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 3</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> :  45 cm x 31.5 cm x 24 cm</td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 43 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-007',
            'nama_barang' => 'Elektro Motor 1 Phase 7.5 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  5.5 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  380 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  132 S</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 11.7 (Starting) , 6.7 (Running)</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 3</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : </td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 60 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-008',
            'nama_barang' => 'Elektro Motor 1 Phase 10 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  7.5 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  380 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  132 M</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 15.5 (Starting) , 8.9 (Running)</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 3</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : </td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 73 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        [
            'id_barang' => 'EL-SEL-009',
            'nama_barang' => 'Elektro Motor 1 Phase 15 HP 4P Fetch',
            'harga_barang' => '8468850',
            'deskripsi_barang' => '
            <table  cellpadding = "4">
            <tbody>
                <tr>
                    <td> KW </td>
                    <td> :  11 kW</td>
                </tr>
                <tr>
                    <td> Frequency </td>
                    <td> :  50 Hz</td>
                </tr>
                <tr>
                    <td> Pole</td>
                    <td> :  4</td>
                </tr>
                <tr>
                    <td> Voltage </td>
                    <td> :  380 V </td>
                </tr>
                <tr>
                    <td> Frame</td>
                    <td> :  160 M</td>
                </tr>
                <tr>
                    <td> Ampere</td>
                    <td> : 21.5 (Starting) , 12.4 (Running)</td>
                </tr>
                <tr>
                    <td> Insulation Class</td>
                    <td> : F</td>
                </tr>
                <tr>
                    <td> RPM</td>
                    <td> : 1500</td>
                </tr>
                <tr>
                    <td> Phase</td>
                    <td> : 3</td>
                <tr>
                    <td> Size (Length x Width x Height)</td>
                    <td> : </td>
                </tr>
                </tr>
                    <td> Net Weight</td>
                    <td> : 117 Kg</td>
                </tr>
            </tbody>
        </table>
            ',
            'gambar_barang' => '2.jpg',
            'id_kategori' => 'EL',
            'id_subkategori' => 'SEL',
            'linktokped' => 'none',
        ],
        ]
    );
    }
}
