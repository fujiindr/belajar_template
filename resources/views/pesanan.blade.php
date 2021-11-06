<html>
<head>
    <title>array</title>
</head>
<body>
<table style="width:100%" border=1>

    <tr>
        <th colspan="5">Tampilkan Data Pesanan</th>
    </tr>

    <tr>
        <th style="width:8%">Id Pesanan</th>
        <th>Nama Pelanggan</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Tanggal Pesan</th>
    </tr>

    @foreach ($query as $data)

    <tr>
        <td style="width:8%">
            <center>{{ $data -> id_pesanan}}</center>
        </td>
        <td>{{ $data -> nama_pelanggan}}</td>
        <td>{{ $data -> nama_barang}}</td>
        <td>{{ $data -> jumlah}}</td>
        <td>{{ $data -> tgl_pesan}}</td>
    </tr>
    @endforeach

</table>
</body>
</html>
