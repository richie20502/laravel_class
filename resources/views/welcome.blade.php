@extends('layouts.layout')
@section('content')
    <header class='py-5 text-center'>
        <h1> Bienvenido a mi tiendita online</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ex a tempora, voluptatem dolorem autem quibusdam corrupti laborum deleniti corporis inventore, ipsa minima quos dolorum iste quam vel ullam nisi?</p>
        <a href="#" class="btn btn-primary" id='search-toggle-btn'>
            Explorar Productos</a>
    </header>

    <section class="py-3" id="search-form" style="display:none">
        <div class="container">
            <div class="row">
                <div class="input-group">
                    <input type="text" name="search"
                    class='form-control' placeholder="Buscar Producto" >
                    <div class="input-group-append">
                        <button class="btn btn-primary">
                            Buscar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    @foreach ($products as  $product)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img
                                src="{{ asset('img/imagen-producto-1.jpg')}}"
                                 class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $product->name}}
                                    </h5>
                                    <p  class="card-title">
                                        {{ truncateText($product->description,0,30) }}
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        Agregar al Carrito

                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $products->links()}}
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


