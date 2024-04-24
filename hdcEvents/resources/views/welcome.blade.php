@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')



<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" name="search" id="serach" class="form-control" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/event_placeholder.jpg" alt="{{$event->title}}" />
                <div class="card-body">
                    <p class="card-date">
                        10/09/2020
                    </p>
                    <h5 class="card-title">
                        {{$event->title}}
                    </h5>
                    <p class="card-participants">
                        X participants
                    </p>
                    <a href="#" class="btn btn-primary">
                        Saber Mais
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
    




@endsection

{{--
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
--}}