<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('hal2', function () {
    return "<h1>Selamat Datang Dihalaman Kedua</h1>";
});
Route::get('biodata', function () {
    $nama = "Fuji Indah Rahayu";
    $jk = "Perempuan";
    $tl = "Bandung";
    $tgl = "23 Mei 2005";
    $alamat = "Kp.Bojong Citepus";
    $agama = "Islam";
    $hobi = "Voli";
    return
        "Nama : " . $nama . "<br>
        Jenis Kelamin : " . $jk . "<br>
        Tempat Lahir : " . $tl . "<br>
        Tanggal Lahir : " . $tgl . "<br>
        Alamat : " . $alamat . "<br>
        Agama : " . $agama . "<br>
        Hobi : " . $hobi;
});
Route::get('biodata2', function () {
    $nama = "Fuji Indah Rahayu";
    $jk = "Perempuan";
    $tl = "Bandung";
    $tgl = "23 Mei 2005";
    $alamat = "Kp.Bojong Citepus";
    $agama = "Islam";
    $hobi = "Voli";

    return view('biodata',
        compact('nama', 'jk', 'tl', 'tgl', 'alamat', 'agama', 'hobi'));
});
Route::get('blog', function () {
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'content ketiga'],
    ];
    // dd($data);
    return view('blog', compact('data'));
});
Route::get('absen', function () {
    $data = [
        ['nis' => 19201753236, 'nama' => 'Cindy', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753237, 'nama' => 'Dinda', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753238, 'nama' => 'Fuji', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753239, 'nama' => 'Indah', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753240, 'nama' => 'Indri', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753241, 'nama' => 'Irfan', 'jk' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753242, 'nama' => 'Kiki', 'jk' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753243, 'nama' => 'Lia', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753244, 'nama' => 'M Resta', 'jk' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753245, 'nama' => 'M Zulfan', 'jk' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
    ];
    // dd($data);
    return view('absen', compact('data'));
});
Route::get('siswa', function () {
    $data = [
        [
            'id' => 1,
            'nama' => 'Aditya',
            'username' => 'aditya',
            'email' => 'aditya@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Jepang',
                'mapel4' => 'Bahasa Belanda',
            ],

        ],
    ];
    // dd($data);
    return view('siswa', compact('data'));
});

//parameter optional
Route::get('/input/{nama?}/{kelas?}', function ($nama = null, $kelas = "12 RPL 3") {
    echo "Nama Saya : " . $nama;
    echo "<br>";
    echo "Kelas     : " . $kelas;
});

Route::get('/lat1/{nama?}/{indo?}/{ing?}/{mtk?}/{pro?}', function ($nama = null, $indo = 95, $ing = 85, $mtk = 90, $pro = 100) {
    echo "Nama : " . $nama . "<br>";
    echo "Nilai Bahasa Indonesia : " . $indo . "<br>";
    echo "Nilai Bahasa Inggris : " . $ing . "<br>";
    echo "Nilai Matematika : " . $mtk . "<br>";
    echo "Nilai Produktif : " . $pro . "<br>";
    $rata = ($indo + $ing + $mtk + $pro) / 4;
    echo "Rata-rata : " . $rata . "<br>";
    echo "Grade : ";
    if ($rata >= 90) {
        echo "A";
    } elseif ($rata >= 80) {
        echo "B";
    } elseif ($rata >= 70) {
        echo "C";
    } else {
        echo "D";
    }
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {
    if ($makanan != null && $minuman == null && $cemilan == null) {
        echo "Anda Memesan ";
        echo "<br>";
        echo "Makanan : " . $makanan;

    } elseif ($makanan != null && $minuman != null && $cemilan == null) {
        echo "Anda Memesan ";
        echo "<br>";
        echo "Makanan : " . $makanan;
        echo "<br>";
        echo "Minuman     : " . $minuman;
    } elseif ($makanan != null && $minuman != null && $cemilan != null) {
        echo "Anda Memesan ";
        echo "<br>";
        echo "Makanan : " . $makanan;
        echo "<br>";
        echo "Minuman     : " . $minuman;
        echo "<br>";
        echo "Cemilan     : " . $cemilan;

    } else {
        echo "Anda Tidak Memesan Silahkan Pulang";

    }
});

Route::get('/testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

Route::get('/test', function () {
    $query = App\Models\Post::all();
    return view('test', compact('query'));
});

// Route::get('/barang', function () {
//     $query = App\Models\Barang::all();
//     return view('barang', compact('query'));
// });

// Route::get('/pembelian', function () {
//     $query = App\Models\Pembelian::all();
//     return view('pembelian', compact('query'));
// });

// Route::get('/pembeli', function () {
//     $query = App\Models\Pembeli::all();
//     return view('pembeli', compact('query'));
// });

// Route::get('/pesanan', function () {
//     $query = App\Models\Pesanan::all();
//     return view('pesanan', compact('query'));
// });

// Route::get('/suplier', function () {
//     $query = App\Models\Suplier::all();
//     return view('suplier', compact('query'));
// });

Route::get('/barang', [BarangController::class, 'tampilkan']);
Route::get('/pembeli', [PembeliController::class, 'pembeli']);
Route::get('/pembelian', [PembelianController::class, 'pembelian']);
Route::get('/pesanan', [PesananController::class, 'pesanan']);
Route::get('/suplier', [SuplierController::class, 'suplier']);
