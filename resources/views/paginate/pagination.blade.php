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
                            <a href="#"  data-identificador="{{ $product->id }}" class="btn btn-primary add_cart">Agregar al Carrito</a>
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

<script>
    $(document).ready(function (){
        $('.add_cart').click(function(){
            $data = $(this).data('identificador');
            alert($data);

            $.ajax({
                url: '{{ route('cart.add') }}',
                method:'GET',
                data:{
                    product_id : $data
                },
                success: function(data){
                    alert('se realizo correctamente');
                },
                erros: function(error){
                    console.log('AQUI ');
                }
            });


        });
    });

</script>
