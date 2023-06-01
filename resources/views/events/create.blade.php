@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="event-create-container" class="col-md-6- offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
     @csrf
    <div class="form-group">
    <label for="image"> Imagem do Evento:  </label>
    <input type="file" id="image" name="image" class="from-control-file">
    </div> 
    
    <div class="form-group">
        <label for="title"> Evento </label>
        <input type="text" class="form-control" id="title" name ="title" placeholder="Nome do Texto">
    </div>
    <div class="form-group">
        <label for="date"> Data do evento </label>
        <input type="date" class="form-control" id="date" name ="date" >
    </div>
    <div class="form-group">
        <label for="title"> Descrição </label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento">        
        </textarea>
    </div>

    <div class="form-group">
        <label for="title"> Cidade </label>
        <input type="text" class="form-control" id="city" name ="city" placeholder="Local do evento">
    </div>
    <div class="form-group">
        <label for="title"> O evento é privado </label>
        <select name="private" id="private" class="form-control">
            <option value="0">NÃO</option>
            <option value="1">SIM</option>
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