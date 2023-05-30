@extends('layouts.main')
@section('title', 'produtos')  

@section('content')

<h3>Tela de produtos</h3>

    @if($busca != '')
        <p>O usuário está buscando por: {{ $busca }}</p>
    @endif  

@endsection