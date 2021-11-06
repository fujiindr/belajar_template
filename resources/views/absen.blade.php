<html>
<head>
    <title>array</title>
</head>
<body>
    <h2>Menampilkan Data Siswa</h2>
    <ul>
        @foreach ($data as $data2)
        NIS : {{ $data2['nis']}} <br>
        Nama : {{ $data2['nama']}} <br>
        Jenis Kelamin : {{ $data2['jk']}} <br>
        Kelas : {{ $data2['kelas']}} <br>
        Alamat : {{ $data2['alamat']}} <br>
        <hr>
        @endforeach
    </ul>
</body>
</html>

