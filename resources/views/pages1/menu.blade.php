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
        <legend>
            Menu
        </legend>
        
        <ul>
        @foreach($menu as $data)
                @foreach ($data['pil1'] as $item)
                    <li>
                        {{$item}}
                    </li>
                    @if ($item == "Berita")
                    <ul>
                        @foreach ($data['pil2'] as $item)
                            <li>
                                {{$item}}
                            </li>
                        
                            @if ($item == "Olahraga")
                            <ul>
                                @foreach ($data['pil3'] as $item)
                                    <li>
                                        {{$item}}
                                    </li>
                                @endforeach
                            </ul>
                            @endif
                        @endforeach
                    </ul>
                    @endif
                @endforeach
        </ul>        
        @endforeach
        
        {{-- <ul>
            @foreach ($menu as $data)
                @foreach ($data['menu'] as $item)
                    <li>
                        {{$item}}
                    </li>
                    @foreach ($item['submenu'] as $item2)
                    <li>
                        {{$item2}}
                    </li>
                        @foreach ($item['anakmenu'] as $item3)
                        <li>
                            {{$item3}}
                        </li>
                        @endforeach
                    @endforeach
                @endforeach
            @endforeach
        </ul> --}}
        
    </fieldset>
</body>
</html>