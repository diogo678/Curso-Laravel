@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">

    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">

    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos eventos</h2>
    <p>Veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
            <div class="card-date">
                <p>10/09/2022</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="crad-particpants">x participantes</p>
                <a href="/" class="btn btn-primary" id="botao-primary">Saber mais</a>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection