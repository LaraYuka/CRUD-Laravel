@extends('layouts.app')

@section('content')
<h1>Detalhes do Cliente</h1>

<p><strong>ID:</strong> {{ $cliente->id }}</p>
<p><strong>Nome:</strong> {{ $cliente->nome }}</p>
<p><strong>Data de Nascimento:</strong> {{ $cliente->data_nascimento->format('d/m/Y') }}</p>
<p><strong>CPF:</strong> {{ $cliente->cpf }}</p>

<a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection