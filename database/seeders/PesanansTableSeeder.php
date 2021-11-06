<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'Ujang',
                'nama_barang' => 'Baju',
                'jumlah' => 2,
                'tgl_pesan' => '2021-11-01',
            ],
            ['nama_pelanggan' => 'Dadang',
                'nama_barang' => 'Kemeja',
                'jumlah' => 5,
                'tgl_pesan' => '2021-11-01',
            ],
            ['nama_pelanggan' => 'Dudung',
                'nama_barang' => 'Sweater',
                'jumlah' => 3,
                'tgl_pesan' => '2021-11-01',
            ],
            ['nama_pelanggan' => 'Entin',
                'nama_barang' => 'Katun',
                'jumlah' => 1,
                'tgl_pesan' => '2021-11-01',
            ],
            ['nama_pelanggan' => 'Mia',
                'nama_barang' => 'Kulot',
                'jumlah' => 4,
                'tgl_pesan' => '2021-11-01',
            ],
        ];

        DB::table('pesanans')->insert($pesanan);

    }
}
