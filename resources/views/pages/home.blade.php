@extends('layouts.app')

@section('page_title', ' - Home')

@section('content')

    <br>
    <h1>Filmes alugados</h1>
    <br>
    <br>

    <ul class="list-group">

    @foreach($filmeAlugados as $filmeAlugado)

        @if($filmeAlugado->cliente_id == $id)

            @foreach($filmes as $filme)

                @if($filme->id == $filmeAlugado->filme_id)


                    <li class="list-group-item d-flex justify-content-between align-items-center">

                        Nome: {{ $filme->name }} <br> Valor: {{ $filme->value }} <br> Descrição: {{ $filme->description }}

                    </li>

                @endif
                
            @endforeach

        @endif   

    @endforeach

    </ul>

@endsection
