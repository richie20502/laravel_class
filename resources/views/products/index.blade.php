@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>Lista de Productos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
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
                </tr>
            @endforeach
        </body>
    </table>
    {{ $products->links() }}
</div>


@endsection
