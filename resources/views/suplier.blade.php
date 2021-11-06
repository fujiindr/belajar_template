<html>
<head>
    <title>array</title>
</head>
<body>
<table style="width:100%" border=1>

    <tr>
        <th colspan="5">Tampilkan Data Suplier</th>
    </tr>

    <tr>
        <th style="width:8%">Id Suplier</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Kota</th>
    </tr>

    @foreach ($query as $data)

    <tr>
        <td style="width:8%">
            <center>{{ $data -> id_suplier}}</center>
        </td>
        <td>{{ $data -> nama}}</td>
        <td>{{ $data -> alamat}}</td>
        <td>{{ $data -> kode_pos}}</td>
        <td>{{ $data -> kota}}</td>
    </tr>
    @endforeach

</table>
</body>
</html>
