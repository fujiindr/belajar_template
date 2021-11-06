<html>
<head>
    <title>array</title>
</head>
<body>
<table style="width:100%" border=1>

    <tr>
        <th colspan="5">Tampilkan Data Barang</th>

    </tr>

    <tr>
        <th style="width:8%">Id Barang</th>
        <th>Nama</th>
        <th>Varian</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>

    </tr>

    @foreach ($barang as $data)

    <tr>
        <td style="width:8%">
            <center>{{ $data -> id_barang}}</center>
        </td>
        <td>{{ $data -> nama}}</td>
        <td>{{ $data -> varian}}</td>
        <td>{{ $data -> harga_beli}}</td>
        <td>{{ $data -> harga_jual}}</td>
    </tr>
    @endforeach

</table>
</body>
</html>
