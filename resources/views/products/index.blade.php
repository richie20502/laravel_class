@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>Lista de Productos</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo Producto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th colspan="2" class="text-center">Acciones</th>
            </tr>
        </thead>
        <body>
            @foreach ( $products as $product )
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}"  class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('products.delete', $product->id) }}"  class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>
@endsection
