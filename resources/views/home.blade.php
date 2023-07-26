<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>
    <body>
        <main>
            <div class="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col">Azienda</th>
                            <th class="col">Stazione partenza</th>
                            <th class="col">Stazione arrivo</th>
                            <th class="col">Partenza</th>
                            <th class="col">Arrivo</th>
                            <th class="col">Codice</th>
                            <th class="col">n°carrozze</th>
                            <th class="col">In orario</th>
                            <th class="col">Cancellato</th>
                        </tr>
                    </thead>
                    @foreach($trains as $train)
                    <tbody>
                        <tr>
                            <td>
                                <span>
                                    {{$train->azienda}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->stazione_partenza}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->stazione_arrivo}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{substr($train->orario_partenza,0,5)}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{substr($train->orario_arrivo,0,5)}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->codice_treno}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->numero_carrozze}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->in_orario ? 'si' : 'no'}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->cancellato ? 'si' : 'no'}}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                
            </div>
        </main>
    </body>
</html>