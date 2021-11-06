<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => 'Baju',
                'varian' => 'Atasan',
                'harga_beli' => 25000,
                'harga_jual' => 50000,
            ],
            ['nama' => 'Kemeja',
                'varian' => 'Atasan',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            ['nama' => 'Sweater',
                'varian' => 'Atasan',
                'harga_beli' => 75000,
                'harga_jual' => 100000,
            ],
            ['nama' => 'Katun',
                'varian' => 'Bawahan',
                'harga_beli' => 150000,
                'harga_jual' => 175000,
            ],
            ['nama' => 'Kulot',
                'varian' => 'Bawahan',
                'harga_beli' => 50000,
                'harga_jual' => 100000,
            ],
        ];

        DB::table('barangs')->insert($barang);

    }
}
