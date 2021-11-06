<html>
<head>
    <title>array</title>
</head>
<body>
<table style="width:100%" border=1>

    <tr>
        <th colspan="5">Tampilkan Data Pembelian</th>
    </tr>

    <tr>
        <th style="width:9%">Id Pembelian</th>
        <th>Nama Barang</th>
        <th>Nama Suplier</th>
        <th>Jumlah</th>
        <th>Tanggal</th>
    </tr>

    @foreach ($query as $data)

    <tr>
        <td style="width:9%">
            <center>{{ $data -> id_pembelian}}</center>
        </td>
        <td>{{ $data ->  nama_barang}}</td>
        <td>{{ $data -> nama_suplier}}</td>
        <td>{{ $data -> jumlah}}</td>
        <td>{{ $data -> tanggal}}</td>
    </tr>
    @endforeach

</table>
</body>
</html>
