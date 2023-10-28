@extends('layouts.layout')
@section('content')
    <!-- Encabezado de la página -->
    <header class="py-5 text-center">
        <h1>Bienvenido a Tu Tienda en Línea</h1>
        <p>Descubre nuestra amplia selección de productos.</p>
        <a class="btn btn-primary" href="#" id='search-toggle-btn'>Explorar Productos</a>
    </header>

    <section class="py-3" id="search-form" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar productos">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <main>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('img/imagen-producto-1.jpg') }}" class="card-img-top" alt="Producto 1">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ truncateText($product->description, 25) }}</p>
                                    <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>
        </section>
    </main>


    <script>
        $(document).ready(function() {
            $('#search-toggle-btn').click(function() {
                var searchForm = $('#search-form');
                if (searchForm.css('display') === 'none') {
                    searchForm.css('display', 'block');
                } else {
                    searchForm.css('display', 'none');
                }
            });
        });
    </script>


@endsection
