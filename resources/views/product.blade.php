@extends ('layouts.product');

@section('product')
    <section class="section bg-light">
        <div class="container">


            <div class="row">

                @foreach($products as $product)

                <div class="col-md-4 element-animate">
                    <div class="media d-block media-custom text-left">
                        <img src="img/img_thumb_1.jpg" alt="Image Placeholder" class="img-fluid">
                        <div class="media-body">
                            <span class="meta-post">December 2, 2017</span>
                            <h3 class="mt-0 text-black"><a href="/single_news/{{$product->id}}" class="text-black">{{$product->product_name}}</a></h3>
                            <p>{{$product->product_category}}</p>
                            <p class="clearfix">
                                <a href="/single_news/{{$product->id}}" class="float-left">Подробнее...</a>
                                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> {{$product->product_views}}</a>
                            </p>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>


            <div class="panel-heading" style="display:flex; justify-content:center;align-items:center;">
            {{$products->render()}}
        </div>








        </div>
    </section>
@endsection
