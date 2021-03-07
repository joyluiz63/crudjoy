<div class="container mt-2 mb-2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">

            <div class="btn-group">
                <button class="fs-4 btn btn-secondary dropdown-toggle" type="button" id="Product" data-bs-toggle="dropdown" aria-expanded="false">
                Produtos
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="{{ route('products.index') }}">Home Produto</a></li>
                    <li><a class="dropdown-item" href="{{ route('products.create') }}">Cadastrar Produto</a></li>
                </ul>
            </div>

            <div class="btn-group">
                <button class="fs-4 btn btn-secondary dropdown-toggle" type="button" id="Cliente" data-bs-toggle="dropdown" aria-expanded="false">
                    Clientes
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="{{ route('clientes.index') }}">Home Cliente</a></li>
                    <li><a class="dropdown-item" href="{{ route('clientes.create') }}">Cadastrar Cliente</a></li>
                </ul>
            </div>

            <div class="btn-group">
                <button class=" fs-4 btn btn-secondary dropdown-toggle" type="button" id="Venda" data-bs-toggle="dropdown" aria-expanded="false">
                    Vendas
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="{{-- {{ route('vendas.index') }} --}}">Home Vendas</a></li>
                    <li><a class="dropdown-item" href="{{-- {{ route('vendas.create') }} --}}">Cadastrar Venda</a></li>
                </ul>
            </div>

            @if (Route::has('login'))
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="Cliente" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li>
                            @auth
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Log out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                </form>
            @else
                                <a href="{{ route('login') }}" class="font-medium text-indigo-600 
                                    hover:text-indigo-500 focus:outline-none focus:underline 
                                    transition ease-in-out duration-150">
                                    Login
                                </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
            @endif
                            @endauth

                        </li>
                    </ul>
                </div>
            @endif

        </div>
    </nav>
</div>
