<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello World</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!--Styles-->
        <link rel="stylesheet" href=/css/styles.css>

        <!--Scripts-->
        <script src="/js/scripts.js"></script>

    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Hello world</h1>
        <img src="/img/banner.jpg" alt="banner">
        
        @if(10 > 15)
            <p>condição true</p>
        @endif

        <p>{{$nome}}</p>

        @if ($nome == 'Matheus')
            <p>o nome é true</p>
            <p>o nome é {{$nome}} e tem {{$idade}} anos e trabalha como {{$profissao}}</p>
        @else 
            <p>o nome é false</p>
        @endif

        @for ($i=0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if ($i == 2)
                <p>o indice aqui é 2</p>
            @endif
        @endfor

        @foreach ($nomes as $nome)
            {{$loop->index}}<p>{{$nome}}</p>
        @endforeach

        @php
            $frase = 'colocando php puro';

            echo $frase;
        @endphp

        {{-- comentario blade--}}
    </body>
</html>
