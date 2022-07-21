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
        <legend>Data Belanja</legend>

        @foreach ($challenge as $data)
            Nama : {{$data['nama']}} <br>
            @foreach ($data['belanja'] as $item)
                <li>
                    Barang : {{$item['barang']}} <br> 
                    Harga : {{$item['harga']}} <br>
                </li>
                {{-- @php
                    $harga = array_sum($item['harga']);
                @endphp --}}

                {{-- @foreach ($item['harga'] as $value)
                {
                    @php
                        $harga = array_sum($value);
                    @endphp
                }
                @endforeach

                Total Harga : {{$harga}} --}}
            @endforeach
            <hr>
        @endforeach
        {{-- data alfian --}}
        {{-- Nama : {{$challenge['nama']}} <br>
        @foreach ($challenge['belanja'] as $item)
            Baju : {{$item['sepatu']}}
        @endforeach
        @php
            $harga_a = array_sum($challenge['harga']);
        @endphp
        Harga : Rp. {{$harga_a}} <br>

        @if ($harga_a >= 500000)
            @php
                $cashback = $harga_a * 0.1
            @endphp
        @elseif ($harga_a >= 250000)
            @php
                $cashback = $harga_a * 0.05
            @endphp
        @else
            @php
                $cashback = $harga_a * 0
            @endphp
        @endif

        Cashback : {{$cashback}} <br>

        @php
            $total_a = $harga_a - $cashback
        @endphp

        Total Harga : {{$total_a}}

        <hr>
         data dida
        Nama : {{$challenge2['nama']}} <br>
        @php
            $harga_b = array_sum($challenge2['harga']);
        @endphp

        Harga : Rp. {{$harga_b}} <br>

        @if ($harga_b >= 500000)
            @php
                $cashback = $harga_b * 0.1
            @endphp
        @elseif ($harga_b >= 250000)
            @php
                $cashback = $harga_b * 0.05
            @endphp
        @else
            @php
                $cashback = $harga_b * 0
            @endphp
        @endif

        Cashback : {{$cashback}} <br>

        @php
            $total_b = $harga_b - $cashback
        @endphp

        Total Harga : {{$total_b}} --}}
    </fieldset>
</body>
</html>