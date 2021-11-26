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
    <title>Gnome</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
                <h1>Gnomi</h1>
                <p class="text-center">Gli Gnomi sono lontani parenti dei Folletti, e la loro storia racconta di un tempo in cui vivevano nel misterioso reame fatato, un luogo in cui i colori sono più luminosi, le terre incolte più selvagge e le emozioni più primeve. Forze sconosciute molto tempo fa hanno portato via gli Gnomi antichi da quel regno, costringendoli a cercare rifugio in questo mondo; malgrado ciò, gli Gnomi non hanno mai completamente abbandonato le loro radici fatate né si sono adattati alla cultura mortale. Sebbene gli Gnomi non siano più degli autentici Folletti, il loro retaggio fatato emerge nei loro poteri magici innati, nelle loro nature spesso capricciose e nel loro atteggiamento verso la vita e il mondo.
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
                    <th scope="col">Gnomi</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Caratteristica</th>
                    <td> Costituzione +2 , Carisma +2 , Forza –2; gli Gnomi sono fisicamente deboli ma sorprendentemente resistenti, e il loro atteggiamento li rende per natura simpatici.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Visione Crepuscolare</th>
                    <td>Gli Gnomi vedono due volte più lontano di un Umano in condizioni di luce scarsa.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Odio</th>
                    <td>Gli Gnomi ottengono bonus +1 ai Tiri per Colpire contro creature Umanoidi del sottotipo Rettile e Goblinoide grazie allo speciale addestramento contro questi odiati nemici.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Magia Gnomesca</th>
                    <td>Gli Gnomi aggiungono +1 alla CD dei Tiri Salvezza contro gli Incantesimi di Illusione che lanciano. Gli Gnomi con Carisma 11 o superiore guadagnano inoltre le seguenti Capacità Magiche:
                        1/giorno—Luci Danzanti, Parlare con gli Animali, Prestidigitazione e Suono Fantasma. Il livello dell’incantatore per questi effetti è uguale al livello dello Gnomo. La CD per questi Incantesimi è pari a 10 + livello dell’Incantesimo + modificatore di Carisma dello Gnomo.</td>
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