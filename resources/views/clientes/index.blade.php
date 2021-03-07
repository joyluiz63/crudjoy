@extends('layouts.template')
@section('title', 'Cliente')
@section('content')
    
{{-- 
    Insere um botão para adicionar cliente abaixo do Menu e acima da tabela
    <div class="container">
        <a href="{{route('Clientes.create')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Cliente</a>
    </div> --}}

    <div class="container">

        <form action="{{route('clientes.index')}} ">
            <label for="busca">Buscar Cliente</label>
            <input type="search" id="busca" name="nome" class="border">
            <button type="submit" class="btn btn-outline-secondary">OK</button>
          </form>
    
        <table class="table table-striped mb-4 mt-4 border-1 border-secondary">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>

                @foreach($clientes as $cliente)
                    <tr>
                        <th scope="row">{{$cliente->id}}</th>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->endereco}}</td>
                        <td>
                            <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST">

                                <a href="{{ route('clientes.show', $cliente->id) }}" title="Detalhes do Cliente">
                                    <i class="fas fa-eye text-success fa-lg mr-1"></i>
                                </a>
    
                                <a title="Editar o Cliente" href="{{route('clientes.edit', $cliente->id) }}">
                                    <i class="fas fa-edit fa-1g mr-1"></i>
                                </a>
    
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir o cliente {{$cliente->nome}}?')" title="Excluir o Cliente" style="border:none background-color:transparent">
                                    <i class="fas fa-trash fa-lg text-danger mr-1"></i>
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                    
                @endforeach
            </tbody>
        </table>

        {!! $clientes->links() !!}

    </div>

@endsection