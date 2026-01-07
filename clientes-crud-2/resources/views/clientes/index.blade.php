@extends('layouts.app')

@section('content')
<h1>Clientes</h1>

@if(session('success'))
<div class="alert alert-success" id="success-message">
    {{ session('success') }}
</div>

<script>
    setTimeout(function() {
        let message = document.getElementById('success-message');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000);
</script>
@endif

<a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Novo Cliente</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->data_nascimento->format('d/m/Y') }}</td>
            <td>{{ $cliente->cpf }}</td>
            <td>
                <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection