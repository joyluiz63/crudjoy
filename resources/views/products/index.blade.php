@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
    
{{-- 
    Insere um botão para adicionar produto abaixo do Menu e acima da tabela
    <div class="container">
        <a href="{{route('products.create')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>
    </div> --}}

    <div class="container">

        <form action="{{route('products.index')}} ">
            <label for="busca">Buscar Produto</label>
            <input type="search" id="busca" name="name" class="border">
            <button type="submit" class="btn btn-outline-secondary">OK</button>
          </form>
    
        <table class="table table-striped mb-4 mt-4 border-1 border-secondary">
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

                                <a href="{{ route('products.show', $product->id) }}" title="Detalhes do Produto">
                                    <i class="fas fa-eye text-success fa-lg mr-1"></i>
                                </a>
    
                                <a title="Editar o Produto" href="{{route('products.edit', $product->id) }}">
                                    <i class="fas fa-edit fa-1g mr-1"></i>
                                </a>
    
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir o produto {{$product->name}}?')" title="Excluir o Produto" style="border:none background-color:transparent">
                                    <i class="fas fa-trash fa-lg text-danger mr-1"></i>
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                    
                @endforeach
            </tbody>
        </table>

        {!! $products->links() !!}

    </div>

    {{-- Modal Excluir Registros --}}
    
      

@endsection