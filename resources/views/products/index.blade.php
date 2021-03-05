@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
    

    <div class="container">
        <a href="{{route('products.create')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>
    </div>

    <div class="container">

        <form class="d-md-flex ml-96 ">
            <input class="form-control me-2" type="search" placeholder="Localizar" aria-label="Search">
            <button class="btn btn-info" type="submit">Localizar</button>
        </form>
    
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>

                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <form action="{{route('products.destroy', $product->id)}}" method="POST">

                                <a href="{{ route('products.show', $product->id) }}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>
                                </a>
    
                                <a class="shadow bg-blue-400 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold px-1 py-1 rounded mx-2" 
                                href="{{ route('products.edit', $product->id) }}">
                                    <i class="fas fa-edit  fa-lg"></i>
                                </a>
    
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                    
                @endforeach
            </tbody>
        </table>

        {!! $products->links() !!}

    </div>

@endsection