@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
        <div class="com-md-10 offset-md-1 dashboard-events-container">
            @if(count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nome</th>
                        <th scope="col">participantes</th>
                        <th scope="col">ações</th>
                    </tr>
                </thead>
            
            <tbody>
                @foreach($events as $event)
                <tr>
                    <th scropt="row">{{$loop->index + 1}}</th>
                    <td><a href="/events/{{$event->id}}"></a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
            @else
            <p>Você ainda não tem eventos, <a href="/events/create">Criar Evento</a> </p>
        </div>
    </div>
@endsection