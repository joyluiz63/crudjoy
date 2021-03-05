@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
    
    <div class="container">
        <a href="{{route('products.index')}}" type="button" class="mt-4 mb-4 btn btn-primary">Voltar</a>
    </div>


    <div class="container">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                  <td class="bg-indigo-100">{{$product->name}}</td>
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Descrição</label>
                <div class="col-sm-10">
                    <td>{{$product->description}}</td>
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Preço</label>
                <div class="col-sm-10">
                    <td>{{$product->price}}</td>
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Data Criação</label>
                <div class="col-sm-10">
                    <td>{{$product->created_at}}</td>
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Data Atualização</label>
                <div class="col-sm-10">
                    <td>{{$product->updated_at}}</td>
                </div>
            </div>

    </div>
@endsection