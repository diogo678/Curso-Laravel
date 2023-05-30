@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <img src="/img/Eventos-ecommerce-2020.jpg" class="banner" style=""> </img>
        <h1> Algum titulo</h1>
        @if(10 > 5)
        <p>A condição é true</p>
        @endif
            <p>{{$nome}}</p>
                @if($nome == "pedro")
                    <p>O resultado da condição é {{$nome}}</p>
                        @elseif($nome == "Matheus") 
                            <p> a idade de {{$nome}} é {{$idade}}</p>
                @else 
                    <p>O nome dele é Pedro</p>            
                @endif

                @for($i = 0; $i < count($arr); $i++)
                    <p>{{ $arr [$i] }}</p>
                @endfor

                @foreach($nomes as $nome)
                    <p>{{$loop->index}}</p>    
                    <p>{{ $nome }}</p>
                @endforeach
                @endsection