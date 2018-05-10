@extends('layouts.layout')
@section('content')
    <h1>Listagem de Clientes</h1>
    <br><br>
    <a class="btn btn-primary" href="{{ route('clients.create') }}">Adicionar</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data Nasc.</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->document_number }}</td>
                    <td>{{ $client->date_birth }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->sex }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection