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
    <title>Human</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
                <h1>Umani</h1>
                <p class="text-center">Gli umani possiedono un'eccezionale spinta e una grande capacità di resistere ed espandersi, e pertanto sono attualmente la razza dominante nel mondo. I loro imperi e nazioni sono ampi e in espansione e i cittadini di queste società scolpiscono i loro nomi con la forza delle armi e il potere dei loro incantesimi. L'umanità è meglio caratterizzata dalla sua turbolenza e diversità e le culture umano vanno dalle tribù selvagge, dai rigidi codici d'onore, alle famiglie nobili decadenti. La curiosità e l'ambizione umane trionfano spesso sulla predilezione per uno stile di vita sedentario e molti lasciano le loro case per esplorare i numerosi angoli dimenticati del mondo o per condurre potenti eserciti per conquistare i vicini, semplicemente perché possono.
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
                    <th scope="col">Umani</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Caratteristica</th>
                    <td>I personaggi umani ricevono bonus +2 ad un punteggio di caratteristica di loro scelta al momento della creazione del personaggio come prova della loro natura diversa.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Talento Bonus</th>
                    <td> Gli umani scelgono un talento addizionale al 1° livello.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Tipo</th>
                    <td colspan="2">Gli umani sono Umanoidi con il Sottotipo Umano.</td>
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