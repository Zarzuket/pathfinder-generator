<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Razze</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class=>
                Le razze sono:
            </h1>
            <div class="container">
                <div class="row">
                    <ul>
                        <li>
                            <a href="{{route('human')}}">Umano</a>
                        </li>
                        <li>
                            <a href="{{route('dwarf')}}">Nano</a>
                        </li>
                        <li>
                            <a href="{{route('elf')}}">Elfo</a>
                        </li>
                        <li>
                            <a href="{{route('gnome')}}">Gnomo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>