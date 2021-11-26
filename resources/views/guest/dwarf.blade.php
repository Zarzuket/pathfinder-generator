{{-- estendo layout
@extends('layouts.index')
 --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dwarf</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
                <h1>Nani</h1>
                <p class="text-center">I nani sono una razza stoica ma severa, nascosta in città scavate nel cuore delle montagne e determinata ferocemente a respingere le razzie delle creature selvagge come orchi e goblin. Più di qualunque altra razza, i nani hanno acquisito una reputazione come artigiani taciturni e seri. Si può dire che la storia dei nani abbia forgiato l'indole introversa di molti nani, data la loro abitudine a vivere su picchi quasi inaccessibili o in scuri e pericolosi regni sotterranei, costantemente in guerra con giganti, goblin ed altri orrori simili.
                </p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <h2>Tratti Razziali</h2>
            <table class="table">
                <thead>
                  <tr class="text-center">
                    <th scope="col"></th>
                    <th scope="col">Nani</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Caratteristica</th>
                    <td> Costituzione +2, Saggezza +2, Carisma –2; i nani sono sia robusti che saggi, ma un po' burberi.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Scurovisione</th>
                    <td>  I nani possono Vedere al Buio fino a 18 metri.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Odio</th>
                    <td>I nani hanno bonus +1 ai Tiri per Colpire contro creature Umanoidi del Sottotipo Orco e Sottotipo Goblinoide grazie allo speciale addestramento verso questi odiati nemici.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Addestramento difensivo</th>
                    <td> I nani hanno Bonus di Schivare +4 alla CA contro i mostri del Sottotipo Gigante.</td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


{{-- @endsection --}}