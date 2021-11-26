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
    <title>Elf</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
                <h1>Elfo</h1>
                <p class="text-center">I longevi Elfi sono i figli del mondo naturale, simili per alcuni versi alle creature fatate, e tuttavia differenti. Mentre i Folletti sono realmente legati alla flora e alla fauna delle loro case, vivendo in qualità di voci e guardiani quasi immortali delle terre selvagge, gli Elfi sono invece mortali in armonia con il mondo naturale che li circonda. Gli Elfi cercano di vivere in equilibrio con la natura e la comprendono meglio della maggior parte degli altri mortali. Parte di tale comprensione è mistica, ma altrettanta deriva dalla lunga durata della vita degli Elfi, che a sua volta dona loro una mentalità lungimirante. Gli Elfi possono aspettarsi di restare attivi nello stesso luogo per secoli. Per necessità, devono imparare a condurre stili di vita sostenibili e questo avviene più facilmente quando lavorano insieme alla natura, piuttosto che tentare di piegarla al loro volere.
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
                    <th scope="col">Elfo</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Caratteristica</th>
                    <td> Destrezza +2, Intelligenza +2, Costituzione -2, gli Elfi sono lesti e svegli, ma piuttosto deboli.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Visione Crepuscolare</th>
                    <td>Gli Elfi vedono due volte più lontano di un Umano in condizioni di luce scarsa.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Immunità degli Elfi</th>
                    <td>Gli Elfi sono immuni agli effetti di sonno Magico e ottengono bonus razziale +2 ai Tiri Salvezza contro Incantesimi ed effetti di Ammaliamento.</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Magia degli Elfi</th>
                    <td>Gli Elfi ottengono Bonus Razziale +2 alle prove di livello dell'incantatore effettuate per superare la Resistenza agli Incantesimi; ottengono Bonus Razziale +2 alle prove di Sapienza Magica effettuate per identificare le proprietà degli Oggetti Magici.</td>
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