@extends('frontend.master')
@section('content')

<!-- section header start -->


<!-- banner section end -->
<!-- about section start -->

<!-- about section end -->
<!-- our service section start -->
<div class="our_section layout_padding">
    <div class="container">
        <h1 class="our_text"><strong>OUR SERVICES</strong></h1>
        <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable</p>
        <div class="row padding_top_0">
            <div class="col-lg-4">
                <div class="image_7"><a href="#"><img src="{{asset('assets/images/img-1.png')}}"></a></div>
                <h2 class="design_text">ARCHITECTURAL  DESIGN</h2>
                <p class="fact_text">It is a long established fact that a reader will be distracted by the readable</p>
            </div>
            <div class="col-lg-4">
                <div class="image_7"><a href="#"><img src="{{asset('assets/images/img-2.png')}}"></a></div>
                <h2 class="design_text">RECONSTRUCTION  SERVICES</h2>
                <p class="fact_text">It is a long established fact that a reader will be distracted by the readable</p>
            </div>
            <div class="col-lg-4">
                <div class="image_7"><a href="#"><img src="{{asset('assets/images/img-3.png')}}"></a></div>
                <h2 class="design_text">ELECTRICAL  SYSTEMS</h2>
                <p class="fact_text">It is a long established fact that a reader will be distracted by the readable</p>
            </div>
            <div class="bt_main">
                <div class="seemore_bt"><a href="#">See More</a></div>
            </div>
        </div>
    </div>
</div>
<!-- our service section end -->
<!-- project section start -->
<div class="project_section layout_padding">
    <div class="container">
        <h1 class="partner_text">PARTNER<br> UP-DOUBLE POWER</h1>
        <p class="lorem_ipsum_text">t is a long established fact that a reader will be distracted by the readable content
            of a page when looking at its layout. The point of using Lorem Ipsum is tha
        </p>
        <div class="choice_main">
            <div class="choose_bt"><a href="#">Choose your home</a></div>
        </div>
    </div>
</div>
<!-- project section end -->
<!-- client section start -->
<div class="clients_section layout_padding">
    <div class="container">
        <h1 class="client_text"><strong>WHAT IS SAY CLIENTS</strong></h1>
        <p class="client_long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum </p>
        <div class="clients_section_2">
            <div id="my_carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#my_carousel" data-slide-to="1"></li>
                    <li data-target="#my_carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="client_img"><img src="{{asset('assets/images/client-img.png')}}"></div>
                                <h2 class="henrry_text">Henrry Jo</h2>
                            </div>
                            <div class="col-sm-12 col-lg-10">
                                <div class="img_5"><img src="{{asset('assets/images/img-6.png')}}"></div>
                                <p class="client_lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="client_img"><img src="{{asset('assets/images/client-img.png')}}"></div>
                                <h2 class="henrry_text">Henrry Jo</h2>
                            </div>
                            <div class="col-sm-12 col-lg-10">
                                <div class="img_5"><img src="{{asset('assets/images/img-6.png')}}"></div>
                                <p class="client_lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12 col-lg-2">
                                <div class="client_img"><img src="{{asset('assets/images/client-img.png')}}"></div>
                                <h2 class="henrry_text">Henrry Jo</h2>
                            </div>
                            <div class="col-sm-12 col-lg-10">
                                <div class="img_5"><img src="{{asset('assets/images/img-6.png')}}"></div>
                                <p class="client_lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- client section end -->
<!-- contact section start -->

<!-- contact section end -->
<!-- footer section start -->

    <!-- footer section end -->
    <!-- copyright section start -->

    <!-- copyright section end -->
    <!-- Javascript files-->



@endsection
