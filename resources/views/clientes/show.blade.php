@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
    <div class="container">
        <div class="container bg-indigo-100">
            <div class="row">
                <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                  <td class="bg-indigo-100">{{$cliente->nome}}</td>
                </div>
            </div>
            <hr>
            <div class="row">
                <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
                <div class="col-sm-10">
                    <td>{{$cliente->endereco}}</td>
                </div>
            </div>
            <hr>
            <div class="row">
                <label for="created_at" class="col-sm-2 col-form-label">Data Criação</label>
                <div class="col-sm-10">
                    <td>{{$cliente->created_at}}</td>
                </div>
            </div>
            <hr>
            <div class="row">
                <label for="updated_at" class="col-sm-2 col-form-label">Data Atualização</label>
                <div class="col-sm-10">
                    <td>{{$cliente->updated_at}}</td>
                </div>
            </div>
            <hr>
            <div class="ml-96">
                <a href="{{route('clientes.index')}}" type="button" class="mt-2 ml-auto btn btn-primary">Voltar</a>
            </div>

        </div>
    </div>
@endsection