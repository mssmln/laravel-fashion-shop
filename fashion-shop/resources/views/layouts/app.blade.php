<?php
/*Creare un database shop con una tabella dresses e mapparla con un model Dress.
Definire una rotta per visualizzare tutti i vestiti presenti nella tabella (non pensate alle relazioni tra tabelle!).N.B. Utilizzate i controller, i model come visti a lezione!Bonus: Fate a piacere altre rotte verso la pagina home, contatti  o altre pagine passando dei semplici dati.Consigli del giorno:

    Leggere passo passo tutti i punti dell'esercizio da svolgere.
    Organizzate i passaggi da fare secondo mappe concettuali o semplici elenchi al fine di poterli utilizzare anche per esercizi futuri. Guardate i file pdf di esempio che vi ho allegato su drive e che vi ho fatto vedere stamattina!*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.header')

    <main>@yield('content')</main>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>