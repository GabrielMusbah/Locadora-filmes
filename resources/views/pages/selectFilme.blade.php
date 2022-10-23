@extends('layouts.app')

@section('page_title', ' - Home')

@section('content')

    <br>
    <h1>Escolha um filme</h1>
    <br>
    <br>

    <ul class="list-group">

        @foreach($itens as $item)
        

        <li class="list-group-item d-flex justify-content-between align-items-center">
            Nome: {{ $item->name }} <br> Valor: {{ $item->value }} <br> Descrição: {{ $item->description }}
            <div>
                <a href="{{ route('remove', $item->id) }}" class="badge badge-danger">Alugar</a>
            </div>
        </li>

        @endforeach

    </ul>

@endsection
