@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
    
    <div class="container">
        <a href="{{route('products.create')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>
    </div>

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

    <div>
        <form action="{{route('products.store')}}" method="POST" >
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Descrição</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="description" id="description">
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Preço</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="price" id="price">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

           
@endsection