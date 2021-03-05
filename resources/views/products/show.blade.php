@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
    <div class="container">
        <div class="container bg-indigo-100">
            <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                  <td class="bg-indigo-100">{{$product->name}}</td>
                </div>
            </div>
            <hr>
            <div class="row">
                <label for="description" class="col-sm-2 col-form-label">Descrição</label>
                <div class="col-sm-10">
                    <td>{{$product->description}}</td>
                </div>
            </div>
            <hr>
            <div class="row">
                <label for="price" class="col-sm-2 col-form-label">Preço</label>
                <div class="col-sm-10">
                    <td>{{$product->price}}</td>
                </div>
            </div>
            <hr>
            <div class="row">
                <label for="created_at" class="col-sm-2 col-form-label">Data Criação</label>
                <div class="col-sm-10">
                    <td>{{$product->created_at}}</td>
                </div>
            </div>
            <hr>
            <div class="row">
                <label for="updated_at" class="col-sm-2 col-form-label">Data Atualização</label>
                <div class="col-sm-10">
                    <td>{{$product->updated_at}}</td>
                </div>
            </div>
            <hr>
            <div class="ml-96">
                <a href="{{route('products.index')}}" type="button" class="mt-2 ml-auto btn btn-primary">Voltar</a>
            </div>

        </div>
    </div>
@endsection