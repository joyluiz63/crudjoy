@extends('layouts.template')
@section('title', 'Clientes')
@section('content')
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Alerta!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container bg-indigo-100">
        <form action="{{route('clientes.store')}}" method="POST" >
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nome" id="nome">
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Endereço</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="endereco" id="endereco">
                </div>
            </div>

            <div class="ml-96">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>

        </form>
    </div>
           
@endsection