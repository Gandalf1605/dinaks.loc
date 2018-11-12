@extends ('layouts.single');

@section('product')
    <section class="section">
        <div class="container">
            @foreach($products as $product)
            <div class="row">
                <div class="col-md-6 element-animate">
                    <img src="/img/img_1.jpg" class="img-fluid mb-4" alt="Image placeholder">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 element-animate">
                    <h2 class="text-uppercase mb-4">{{$product->product_name}}</h2>
                    <p class="lead" align="justify">{{$product->product_description}}</p>
                    <p class="mb-5" align="justify">{{$product->product_notice}}</p>
                    <p><a href="/news" class="btn btn-primary">Вернуться к списку оборудования</a></p>
                </div>
            </div>
             @endforeach
        </div>
    </section>
@endsection
