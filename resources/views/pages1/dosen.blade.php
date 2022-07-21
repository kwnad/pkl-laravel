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
        <legend>Data Mahasiswa</legend>

        @foreach ($dosen as $data)
            Nama Dosen : {{$data['dosen']}} <br>
            Mata Kuliah : {{$data['matkul']}} <br>
            @foreach ($data['mahasiswa'] as $item)
                <li>
                    Nama : {{$item['nama']}} <br>        
                    Nilai : {{$item['nilai']}} <br>
                    Grade : 
                    @if ($item['nilai'] >= 90 && $item['nilai'] <= 100)
                        Grade A
                    @elseif ($item['nilai'] >= 80 && $item['nilai'] <= 89)
                        Grade B
                    @elseif ($item['nilai'] >= 70 && $item['nilai'] <= 79)
                        Grade C
                    @elseif ($item['nilai'] >= 50 && $item['nilai'] <= 69)
                        Grade D
                    @elseif ($item['nilai'] >= 0 && $item['nilai'] <= 49)
                        Grade E
                    @endif

                    <hr>
                </li>
                
            @endforeach
            <hr>
        @endforeach

    </fieldset>
</body>
</html>