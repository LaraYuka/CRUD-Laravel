@extends('layouts.app')

@section('content')
<h1>Novo Cliente</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" required>
    </div>
    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form-control" value="{{ old('data_nascimento') }}" required>
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection