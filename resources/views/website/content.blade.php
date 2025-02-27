@extends('website.home');
@section('content');

<section class="banner-area relative" id="home">
    <div class="container-fluid">
        <div class="row fullscreen align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12 d-flex align-self-end img-right no-padding">
                <img class="img-fluid" src="{{asset('assets/img/header-img.png')}}" alt="">
            </div>
            <div class="banner-content col-lg-6 col-md-12">
                <h1 class="title-top"><span>Flat</span> 75%Off</h1>
                <h1 class="text-uppercase">
                    It’s Happening <br>
                    this Season!
                </h1>
                <button class="primary-btn text-uppercase"><a href="#">Purchase Now</a></button>
            </div>
        </div>
    </div>
</section>


<section class="category-area section-gap section-gap" id="catagory">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40">
                <div class="title text-center">
                    <h1 class="mb-10">Shop for Different Categories</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            
                <div class="row category-bottom">
                    @foreach ($category as $item)
                        
                   
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="content">
                            <a href="{{ route('homesubcat', $item->id) }}">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" src="{{ asset('storage/' . $item->image) }}" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title">{{$item->name}}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-6 col-md-6 mb-30">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" src="{{asset('assets/img/c2.jpg')}}" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title">Product for Couple</h3>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-12">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" src="{{asset('assets/img/c3.jpg')}}" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title">Shop Now</h3>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>
        
            {{-- <div class="col-lg-4 col-md-4 mb-10">
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="{{asset('assets/img/c4.jpg')}}" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Product For Men</h3>
                        </div>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</section>


<section class="men-product-area section-gap relative" id="men">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40">
                <div class="title text-center">
                    <h1 class="text-white mb-10">New realeased Products for Men</h1>
                    <p class="text-white">Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($p as $item)
            <div class="col-lg-3 col-md-6 single-product">
                <div class="content">
                    <div class="content-overlay"></div>
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="200px" height="200px">
                    <div class="content-details fadeIn-bottom">
                        <div class="bottom d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)"><span class="lnr lnr-heart"></span></a>
                            <a href="javascript:void(0)"><span class="lnr lnr-layers"></span></a>
                            <a href="javascript:void(0)"><span  data-product-id="{{$item->id}}" class="lnr lnr-cart"></span></a>

                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"><span
                            class="lnr lnr-frame-expand"></span></a>
                        </div>
                    </div>
                </div>
                <div class="price">
                    <h5 class="text-white">{{$item->name}}</h5>
                    <h3 class="text-white">{{$item->price}}</h3>
                </div>
            </div>
            @endforeach
          
        </div>
    </div>
</section>


<section class="women-product-area section-gap" id="women">
    <div class="container">
        <div class="countdown-content pb-40">
            <div class="title text-center">
                <h1 class="mb-10">New realeased Products for Women</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
        </div>
        <div class="row">
            @foreach($product as $item)
            <div class="col-lg-3 col-md-6 single-product">
                <div class="content">
                    <div class="content-overlay"></div>
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="200px" height="200px">
                    <div class="content-details fadeIn-bottom">
                        <div class="bottom d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)"><span class="lnr lnr-heart"></span></a>
                            <a href="javascript:void(0)"><span class="lnr lnr-layers"></span></a>
                            <a href="javascript:void(0)"><span data-product-id="{{$item->id}}" class="lnr lnr-cart"></span></a>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"><span
                                    class="lnr lnr-frame-expand"></span></a>
                        </div>
                    </div>
                </div>
                <div class="price">
                    <h5>{{$item->name}}</h5>
                    <h3>{{$item->price}}</h3>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>


<div class="countdown-area">
    <div class="container">
        <div class="countdown-content">
            <div class="title text-center">
                <h1 class="mb-10">Exclusive Hot Deal Ends in:</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4"></div>
            <div class="col-xl-6 col-lg-7">
                <div class="countdown d-flex justify-content-center justify-content-md-end" id="js-countdown">
                    <div class="countdown-item">
                        <div class="countdown-timer js-countdown-days time" aria-labelledby="day-countdown">
                        </div>
                        <div class="countdown-label" id="day-countdown">Days</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-timer js-countdown-hours" aria-labelledby="hour-countdown">
                        </div>
                        <div class="countdown-label" id="hour-countdown">Hours</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-timer js-countdown-minutes" aria-labelledby="minute-countdown">
                        </div>
                        <div class="countdown-label" id="minute-countdown">Minutes</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-timer js-countdown-seconds" aria-labelledby="second-countdown">
                        </div>
                        <div class="countdown-label text" id="second-countdown">Seconds</div>
                    </div>
                    <a href="#" class="view-btn primary-btn2"><span>Shop Now</span></a>
                    <img src="{{asset('assets/img/cd.png')}}" class="img-fluid cd-img" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<section class="related-product-area section-gap" id="latest">
    <div class="container">
        <div class="related-content">
            <div class="title text-center">
                <h1 class="mb-10">Related Searched Products</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r1.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r2.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r3.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r4.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r5.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r6.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r7.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r8.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r9.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r10.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r11.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="{{asset('assets/img/r12.jpg')}}" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="brand-area pb-100">
    <div class="container">
        <div class="row logo-wrap">
            <a class="col single-img" href="#">
              <img class="d-block mx-auto" src="{{asset('assets/img/br1.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
              <img class="d-block mx-auto" src="{{asset('assets/img/br2.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
              <img class="d-block mx-auto" src="{{asset('assets/img/br3.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
              <img class="d-block mx-auto" src="{{asset('assets/img/br4.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
              <img class="d-block mx-auto" src="{{asset('assets/img/br5.png')}}" alt="">
            </a>
          </div>
    </div>
</section>

@endsection