<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'Baju',
                'nama_suplier' => 'Ujang',
                'jumlah' => 2,
                'tanggal' => '2021-11-01',
            ],
            ['nama_barang' => 'Kemeja',
                'nama_suplier' => 'Dadang',
                'jumlah' => 5,
                'tanggal' => '2021-11-01',
            ],
            ['nama_barang' => 'Sweater',
                'nama_suplier' => 'Dudung',
                'jumlah' => 3,
                'tanggal' => '2021-11-01',
            ],
            ['nama_barang' => 'Katun',
                'nama_suplier' => 'Entin',
                'jumlah' => 1,
                'tanggal' => '2021-11-01',
            ],
            ['nama_barang' => 'Kulot',
                'nama_suplier' => 'Mia',
                'jumlah' => 4,
                'tanggal' => '2021-11-01',
            ],
        ];

        DB::table('pembelians')->insert($pembelian);

    }
}
