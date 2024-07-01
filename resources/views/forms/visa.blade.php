<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Oishee</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('assets/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
<!-- section header start -->
<div class="header_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="logo"><a href="index.html"><img src="{{asset('assets/images/oishi.jfif')}}"style="width: 40px;height: auto"></a></div>
            </div>
            <div class="col-md-6" style="text-align: right">
                <h1>Login</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                {{--<div class="logo"><a href="index.html"><img src="{{asset('assets/images/oishi.jfif')}}"style="width: 40px;height: auto"></a></div>--}}
            </div>
            <div class="col-md-9">
                <div class="menu_text">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="services.html">SERVICES</a></li>
                        <li><a href="{{route('visa')}}">VISA & IMMEGERATION</a></li>
                        <li><a href="contact.html">REGESTRATION</a></li>
                        <li><a href="contact.html">CONTACT US</a></li>

                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="index.html">HOME</a>
                                <a href="about.html">ABOUT</a>
                                <a href="services.html">SERVICES</a>
                                <a href="{{route('visa')}}">VISA & IMMEGERATION</a>
                                <a href="contact.html">CONTACT US</a>
                                <a href="client.html">CLIENTS</a>
                            </div>
                        </div>
                        <div>  <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="{{asset('assets/images/toggle.png')}}" class="toggle_menu"></span>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- section header end -->
    <!-- banner section start -->
    <div class="banner_section">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="round"><img src="{{asset('assets/images/round-icon.png')}}"></div>
                                <p class="number_text">02</p>
                                <div class="line"><img src="{{asset('assets/images/line.png')}}"></div>
                                <p class="number_text">02</p>
                                <div class="round"><img src="{{asset('assets/images/round-icon.png')}}"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="taital_main">
                                    <h2 class="construction_text">MANPOWER</h2>
                                    <h1 class="building_text">BUILDING</h1>
                                    <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure </p>
                                    <div class="contact_bt"><a href="#">CONTACT US</a></div>
                                    <div class="get_bt"><a href="#">GET A QUOTE NOW</a></div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div><img src="{{asset('assets/images/banner-bg.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="round"><img src="{{asset('assets/images/round-icon.png')}}"></div>
                                <p class="number_text">02</p>
                                <div class="line"><img src="{{asset('assets/images/line.png')}}"></div>
                                <p class="number_text">02</p>
                                <div class="round"><img src="{{asset('assets/images/round-icon.png')}}"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="taital_main">
                                    <h2 class="construction_text">MANPUWER</h2>
                                    <h1 class="building_text">BUILDING</h1>
                                    <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure </p>
                                    <div class="contact_bt"><a href="#">CONTACT US</a></div>
                                    <div class="get_bt"><a href="#">GET A QUOTE NOW</a></div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div><img src="{{asset('assets/images/banner-bg.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="round"><img src="{{asset('assets/images/round-icon.png')}}"></div>
                                <p class="number_text">02</p>
                                <div class="line"><img src="{{asset('assets/images/line.png')}}"></div>
                                <p class="number_text">02</p>
                                <div class="round"><img src="{{asset('assets/images/round-icon.png')}}"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="taital_main">
                                    <h2 class="construction_text">MANPOWER</h2>
                                    <h1 class="building_text">BUILDING</h1>
                                    <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure </p>
                                    <div class="contact_bt"><a href="#">CONTACT US</a></div>
                                    <div class="get_bt"><a href="#">GET A QUOTE NOW</a></div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div><img src="{{asset('assets/images/banner-bg.png')}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

   {{ slot }}

    <div class="footer_section layout_padding">
        <div class="container">
        </div>
        <div class="footer_section_2">
            <div class="container">
                <h2 class="addres_text">Addres</h2>
                <div class="row map_addres">
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="{{asset('assets/images/map-icon.png')}}"><span class="map_icon">Dhaka</span></div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="{{asset('assets/images/phone-icon.png')}}"><span class="map_icon">( 01818811220)</span></div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="map_text"><img src="{{asset('assets/images/email-icon.png')}}"><span class="map_icon">demo@gmail.com</span></div>
                    </div>
                </div>
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="{{asset('assets/images/fb-icon.png')}}"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/in-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <p class="copyright_text">Copyright 2020 All Right Reserved By.<a href="https://html.design">Nayeem</a></p>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- javascript -->
    <script src="{{asset("assets/js/owl.carousel.js")}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function(){

                $(this).addClass('transition');
            }, function(){

                $(this).removeClass('transition');
            });
        });

    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</body>
</html>