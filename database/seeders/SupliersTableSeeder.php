<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SupliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'Ujang',
                'alamat' => 'Dayeuhkolot',
                'kode_pos' => 40238,
                'kota' => 'Bandung',
            ],
            ['nama' => 'Dadang',
                'alamat' => 'Dayeuhkolot',
                'kode_pos' => 40238,
                'kota' => 'Bandung',
            ],
            ['nama' => 'Dudung',
                'alamat' => 'Dayeuhkolot',
                'kode_pos' => 40238,
                'kota' => 'Bandung',
            ],
            ['nama' => 'Entin',
                'alamat' => 'Baleendah',
                'kode_pos' => 40239,
                'kota' => 'Bandung',
            ],
            ['nama' => 'Mia',
                'alamat' => 'Baleendah',
                'kode_pos' => 40239,
                'kota' => 'Bandung',
            ],
        ];

        DB::table('supliers')->insert($suplier);

    }
}
