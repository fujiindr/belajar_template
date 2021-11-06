<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => 'Ujang',
                'jk' => 'Laki-Laki',
                'alamat' => 'Dayeuhkolot',
                'kode_pos' => 40238,
                'kota' => 'Bandung',
                'tgl_lahir' => '2005-02-04',
            ],
            ['nama' => 'Dadang',
                'jk' => 'Laki-Laki',
                'alamat' => 'Dayeuhkolot',
                'kode_pos' => 40238,
                'kota' => 'Bandung',
                'tgl_lahir' => '2004-02-02',
            ],
            ['nama' => 'Dudung',
                'jk' => 'Laki-Laki',
                'alamat' => 'Dayeuhkolot',
                'kode_pos' => 40238,
                'kota' => 'Bandung',
                'tgl_lahir' => '2005-03-01',
            ],
            ['nama' => 'Entin',
                'jk' => 'Perempuan',
                'alamat' => 'Baleendah',
                'kode_pos' => 40239,
                'kota' => 'Bandung',
                'tgl_lahir' => '2004-05-10',
            ],
            ['nama' => 'Mia',
                'jk' => 'Perempuan',
                'alamat' => 'Baleendah',
                'kode_pos' => 40239,
                'kota' => 'Bandung',
                'tgl_lahir' => '2004-07-07',
            ],
        ];

        DB::table('pembelis')->insert($pembeli);
    }
}
