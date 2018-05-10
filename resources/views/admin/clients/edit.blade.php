@extends('layouts.layout')
@section('content')
    <a class="btn btn-primary" href="{{ route('clients.index') }}">Todos Clientes</a>
    <br>
    @if($errors->any())
        <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

        </ul>
    @endif
    <br>
    <form method="POST" action=" {{ route('clients.update', $client->id) }} ">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{ $client->name }}">
            <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="document_number">Documento</label>
            <input type="text" class="form-control" name="document_number" id="document_number" aria-describedby="document_numberHelp" value="{{ $client->document_number }}">
            <small id="document_numberHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ $client->email }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Nome</label>
            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" value="{{ $client->phone }}">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="marital_status">Estado Civíl</label>
            <select id="marital_status" name="marital_status" class="form-control" value="{{ $client->marital_status }}">
                <option selected>Choose...</option>
                <option value="1">Solteiro</option>
                <option value="2">Casado</option>
                <option value="3">Divociado</option>
            </select>
            <small id="marital_statusHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="date_birth">Data Nascimento</label>
            <input type="date" class="form-control" name="date_birth" id="date_birth" aria-describedby="Help" value="{{ $client->date_birth }}">
            <small id="date_birthHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="sex" value="m" {{ $client->sex == 'm'? 'checked="checked"': ''  }} checked>
                        <label class="form-check-label" for="sex">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="sex" value="f" {{ $client->sex == 'f'? 'checked="checked"': ''  }}>
                        <label class="form-check-label" for="sex">
                            Feminino
                        </label>
                    </div>

                </div>
            </div>
        </fieldset>
        <div class="form-group">
            <label for="physical_disability">Deficiência Física</label>
            <input type="text" class="form-control" name="physical_disability" id="physical_disability" aria-describedby="physical_disabilityHelp" value="{{ $client->physical_disability }}">
            <small id="physical_disabilityHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Situação</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaulter" name="defaulter" {{ $client->defaulter? 'checked="checked"': ''  }}>
                    <label class="form-check-label" for="defaulter">
                        Inadimplente?
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection