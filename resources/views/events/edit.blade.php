@extends('layouts.main')

@section('title', 'Editando: ' .$events->title)

@section('content')

<div id="event-create-container" class="col-md-6- offset-md-3">
    <h1>Editando: {{$events->title}}</h1>
    <form action="/events/update/{{ $events->id }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
    <div class="form-group">
    <label for="image"> Imagem do Evento:  </label>
    <input type="file" id="image" name="image" class="from-control-file">
    <img src="/img/events/{{ $events->image }}" alt="" class="img-preview">
    </div> 
    
    <div class="form-group">
        <label for="title"> Evento </label>
        <input type="text" class="form-control" id="title" name ="title" placeholder="Nome do Evento" value="{{ $events->title }}">
    </div>
    <div class="form-group">
        <label for="date"> Data do evento </label>
        <input type="date" class="form-control" id="date" name ="date" value="{{$events->date->format('Y-m-d')}}">
    </div>
    <div class="form-group">
        <label for="title"> Descrição </label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento" >        
        {{$events->description}}
        </textarea>
    </div>

    <div class="form-group">
        <label for="title"> Cidade </label>
        <input type="text" class="form-control" id="city" name ="city" placeholder="Local do evento" value="{{$events->city}}">
    </div>
    <div class="form-group">
        <label for="title"> O evento é privado </label>
        <select name="private" id="private" class="form-control">
            <option value="0">NÃO</option>
            <option value="1" {{ $events->private == 1 ? "selected='selected'" : ""}}>SIM</option>
        </select>
    </div>
    <div class="form-group">
    <label for="title">Adicione itens de infraestrutura:</label>
    <div class="form-grou">
        <input type="checkbox" name="items[]" value="cardeiras"> Cadeiras
    </div>

    <div class="form-grou">
        <input type="checkbox" name="items" value="palco"> palco
    </div>

    <div class="form-grou">
        <input type="checkbox" name="items" value="cerveja gratis"> cerveja gratis
    </div>
</div>
        <input type="submit" class="btn btn-primary" value="Crie evento">
    </form>
</div>

@endsection