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
    </div>
</section>

<div class="d-flex justify-content-center">
    {{ $products->links() }}
</div>
