@extends ('layouts.about');

@section('personel')
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-8 text-center mb-5">
                    <h2 class="text-uppercase heading border-bottom mb-4">Наши сотрудники</h2>
                    <p class="mb-0 lead">Наши сотрудники - это наша гордость и ключ к успеху</p>
                </div>
            </div>
            <div class="row element-animate">
                <div class="major-caousel js-carousel-1 owl-carousel">

                    @foreach($persons as $person)
                        <div>
                            <div class="media d-block media-custom text-center">
                                <img src="{{$person->photo}}" alt="Image Placeholder" class="img-fluid">
                                <div class="media-body">
                                    <h3 class="mt-0 text-black">{{$person->first_name}}<br>{{$person->last_name}}</h3>
                                    <p>{{$person->notice}}</p>
                                    <p>
                                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <!-- END slider -->
            </div>
        </div>
    </section>
@endsection
