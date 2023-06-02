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
                    <td><a href="/events/{{$event->id}}">{{ $event->title}}</a></td>
                    <td>{{count($event->users)}}</td>
                    <td>0</td>
                    <td><a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn">Editar</a>
                        <form action="/events/{{ $event->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                        </form>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            @else
            <p>Você ainda não tem eventos, <a href="/events/create">Criar Evento</a> </p>
            @endif
        </div>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Eventos que estou participando</h1>
    </div>
        <div class="com-md-10 offset-md-1 dashboard-events-container">
        @if(count($eventsasparticipant) > 0)
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
                @foreach($eventsasparticipant as $event)
                <tr>
                    <th scropt="row">{{$loop->index + 1}}</th>
                    <td><a href="/events/{{$event->id}}">{{ $event->title}}</a></td>
                    <td>{{count($event->users)}}</td>
                    <td>0</td>
                    <td>
                    <form action="/events/leave/{{$event->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">
                             <ion-icon name="trash outline">Sair do evento</ion-icon>
                             </button>
      
                    </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        @else
        <p>Você ainda não está participando de nenhum evento, <a href="/">Veja todos os eventos</a></p>
        @endif    
    </div>
@endsection