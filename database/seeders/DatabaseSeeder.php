<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);
        $this->call(BarangsTableSeeder::class);
        $this->call(SupliersTableSeeder::class);
        $this->call(PembeliansTableSeeder::class);
        $this->call(PembelisTableSeeder::class);
        $this->call(PesanansTableSeeder::class);

    }
}
