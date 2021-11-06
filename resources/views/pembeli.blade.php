<html>
<head>
    <title>array</title>
</head>
<body>
<table style="width:100%" border=1>

    <tr>
        <th colspan="7">Tampilkan Data Pembeli</th>
    </tr>

    <tr>
        <th style="width:8%">Id Pembeli</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Kota</th>
        <th>Tanggal Lahir</th>
    </tr>

    @foreach ($query as $data)

    <tr>
        <td style="width:8%">
            <center>{{ $data -> id_pembeli}}</center>
        </td>
        <td>{{ $data -> nama}}</td>
        <td>{{ $data -> jk}}</td>
        <td>{{ $data -> alamat}}</td>
        <td>{{ $data -> kode_pos}}</td>
        <td>{{ $data -> kota}}</td>
        <td>{{ $data -> tgl_lahir}}</td>
    </tr>
    @endforeach

</table>
</body>
</html>
