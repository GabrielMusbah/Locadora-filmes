@extends('layouts.app')

@section('page_title', ' - Register')

@section('content')
    <form class="form-signin" method="post" action="{{ route('registerFilme.post') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Cadastrar Filme</h1>
        <label for="name" class="sr-only">Nome</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required>


        <label for="email" class="sr-only">Valor</label>
        <input type="text" id="value" name="value" class="form-control" placeholder="Valor" required>


        <label for="password" class="sr-only">Descrição</label>
        <input type="text" id="description" name="description" class="form-control" placeholder="Descrição" required>


        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Cadastrar</button>
    </form>
@endsection
