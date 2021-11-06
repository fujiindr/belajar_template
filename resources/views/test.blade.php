<html>
<head>
    <title>array</title>
</head>
<body>
    <h2>Tampilkan Data Post</h2>

    @foreach ($query as $data)
    <p>Id : {{ $data -> id}}</p> <?php //bisa menggunakan panah, tanpa menggunakan kutip dan kurung siku?>
    <p>Title : {{ $data['title']}}</p>
    <p>Content : {{ $data['content']}} </p>
    <hr>
    @endforeach

</body>
</html>
