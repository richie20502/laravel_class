    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($products as $product )
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('img/imagen-producto-1.jpg')}}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5>{{$product->name }}</h5>
                                <p> {{ truncateText($product->description,30) }} </p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        </@section('name')

    </section>
