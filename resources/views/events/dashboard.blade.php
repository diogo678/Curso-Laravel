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
            </table>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <th scropt="row">{{$loop->index + 1}}</th>
                    <td><a href="/events/{{$event->id}}">{{ $event->title}}</a></td>
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
            @else
            <p>Você ainda não tem eventos, <a href="/events/create">Criar Evento</a> </p>
            @endif
        </div>
    </div>
@endsection