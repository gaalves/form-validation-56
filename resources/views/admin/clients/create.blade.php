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
    <form method="post" action=" {{ route('clients.store') }} ">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter Name">
            <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="document_number">Documento</label>
            <input type="text" class="form-control" name="document_number" id="document_number" aria-describedby="document_numberHelp" placeholder="Enter Documento">
            <small id="document_numberHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Nome</label>
            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="marital_status">Estado Civíl</label>
            <select id="marital_status" name="marital_status" class="form-control">
                <option selected>Choose...</option>
                <option value="1">Solteiro</option>
                <option value="2">Casado</option>
                <option value="3">Divociado</option>
            </select>
            <small id="marital_statusHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="date_birth">Data Nascimento</label>
            <input type="date" class="form-control" name="date_birth" id="date_birth" aria-describedby="Help" placeholder="Enter Marital Status">
            <small id="date_birthHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="sex" value="m" checked>
                        <label class="form-check-label" for="sex">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="sex" value="f">
                        <label class="form-check-label" for="sex">
                            Feminino
                        </label>
                    </div>

                </div>
            </div>
        </fieldset>
        <div class="form-group">
            <label for="physical_disability">Deficiência Física</label>
            <input type="text" class="form-control" name="physical_disability" id="physical_disability" aria-describedby="physical_disabilityHelp" placeholder="Enter Deficiência Física">
            <small id="physical_disabilityHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Situação</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaulter" name="defaulter">
                    <label class="form-check-label" for="defaulter">
                        Inadimplente?
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection