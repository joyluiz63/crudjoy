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
        <form action="{{route('clientes.update', $cliente->id)}}" method="POST" >
            @csrf
            @method('put')

            <div class="row mb-3">
                <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nome" id="nome" value="{{$cliente->nome}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="endereco" id="endereco" value="{{$cliente->endereco}}">
                </div>
            </div>

            </div>
            <div class="ml-96">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>

@endsection