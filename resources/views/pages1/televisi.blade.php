<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>STASIUN TV</legend>

        @foreach ($televisi as $data)
            Nama Channel : {{$data['channel']}} <br>
            Acara : {{$data['acara']}} <br>
            Jam Tayang : {{$data['jam']}} <br>
            Tanggal Tayang : {{$data['tanggal']}} <br>
            <hr>
        @endforeach

    </fieldset>
</body>
</html>