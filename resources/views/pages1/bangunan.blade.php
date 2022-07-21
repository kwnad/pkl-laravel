<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @if ($material == 'Pasir Urug')
        Material anda : <b>{{ $material }}</b>
        <br> Harga {{ $material }} : Rp. 50000
    @elseif ($material == 'Batako Besar')
        Material anda : <b>{{ $material }}</b>
        <br> Harga {{ $material }} : Rp. 30000
    @elseif ($material == 'Bata Merah')
        Material anda : <b>{{ $material }}</b>
        <br> Harga {{ $material }} : Rp. 40000
    @elseif ($material == 'Batu Apung')
        Material anda : <b>{{ $material }}</b>
        <br> Harga {{ $material }} : Rp. 65000
    @else
        Mohon maaf material anda tidak ada
    @endif

    <hr>

    @if ($material2 == 'Pasir Urug')
        Material anda : <b>{{ $material2 }}</b>
        <br> Harga {{ $material2 }} : Rp. 50000
    @elseif ($material2 == 'Batako Besar')
        Material anda : <b>{{ $material2 }}</b>
        <br> Harga {{ $material2 }} : Rp. 30000
    @elseif ($material2 == 'Bata Merah')
        Material anda : <b>{{ $material2 }}</b>
        <br> Harga {{ $material2 }} : Rp. 40000
    @elseif ($material2 == 'Batu Apung')
        Material anda : <b>{{ $material2 }}</b>
        <br> Harga {{ $material2 }} : Rp. 65000
    @else
        Mohon maaf material anda tidak ada
    @endif
</body>
</html>