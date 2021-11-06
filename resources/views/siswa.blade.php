<html>
<head>
    <title>array</title>
</head>
<body>
    <h2>Menampilkan Data Siswa</h2>
    <ul>
        @foreach ($data as $data2)
        id : {{ $data2['id']}} <br>
        Nama : {{ $data2['nama']}} <br>
        Jenis Kelamin : {{ $data2['username']}} <br>
        Kelas : {{ $data2['alamat']}} <br>
        Mapel :
        @foreach($data2 ['mapel'] as $data3)
            <ul>
                <li>{{ $data3 }}</li
        @endforeach
        @endforeach
    </ul>
</body>
</html>

