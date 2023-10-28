@extends('layouts.layout')
@section('content')

    <header class="py-5 text-center">
        <h1>Bienvenido a Tu Tienda en Línea</h1>
        <p>Descubre nuestra amplia selección de productos.</p>
        <a class="btn btn-primary" href="#" id='search-toggle-btn'>Explorar Productos</a>
    </header>

    <section class="py-3" id="search-form" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="input-group">
                    <input type="text" name="search" id="search-input" class="form-control" placeholder="Buscar productos">
                </div>
            </div>
        </div>
    </section>




    <main>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div id="products-container">
                        <!-- Aquí se cargarán los productos mediante Ajax -->
                    </div>
                    <div id="pagination-container">
                        <!-- Aquí se cargará la paginación mediante Ajax -->
                    </div>
                </div>
            </div>
        </section>



    <script>
        $(document).ready(function() {


            $('#search-input').on('input', function() {
                var searchQuery = $(this).val();
                var characterCount = searchQuery.length;
                if(characterCount > 1){
                    $.ajax({
                        url: '{{ route('products.searchs') }}', // Ruta de búsqueda en tu controlador
                        method: 'GET',
                        data: { search: searchQuery }, // Enviar el valor de búsqueda como parámetro
                        success: function(data) {
                            // Manejar la respuesta exitosa aquí
                            // Actualizar #products-container con los resultados de la búsqueda en tiempo real
                            $('#products-container').html(data);

                            // Puedes manejar la actualización de la paginación aquí si es necesario
                        },
                        error: function(error) {
                            // Manejar errores de la solicitud Ajax aquí
                            console.log(error);
                        }
                    });
                }else{
                    loadProductsPage(1);
                }
            });

            $('#search-toggle-btn').click(function() {
                var searchForm = $('#search-form');
                if (searchForm.css('display') === 'none') {
                    searchForm.css('display', 'block');
                } else {
                    searchForm.css('display', 'none');
                }
            });


            function loadProductsPage(page) {
                $.ajax({
                    url: '/products?page=' + page, // Reemplaza '/products' con la ruta de paginación correcta
                    method: 'GET',
                    success: function(data) {
                        $('#products-container').html(data); // Reemplaza '#products-container' con el contenedor de productos
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                loadProductsPage(page);
            });

            loadProductsPage(1);
        });

    </script>
@endsection
