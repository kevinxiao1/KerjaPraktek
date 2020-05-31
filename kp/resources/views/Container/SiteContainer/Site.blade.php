<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="icon" href="{{asset('Site/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Site/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('Site/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('Site/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Site/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('Site/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Site/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('Site/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('Site/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('Site/css/style.css')}}">
    {{-- ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <style>
        .fix {
            /* overflow: hidden; */
            background-color: #ffffff;
            position: fixed;
            top: 0;
            left: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        body,
        html {
            height: 100%;
            /* text-align: center; */
        }

        body {
            /* background-color: #242F3F; */
        }

        .loader {
            display: inline-block;
            width: 30px;
            height: 30px;
            position: relative;
            border: 4px solid #Fff;
            animation: loader 2s infinite ease;
        }

        .loader-inner {
            vertical-align: top;
            display: inline-block;
            width: 100%;
            background-color: #fff;
            animation: loader-inner 2s infinite ease-in;
        }
        .loader-wrapper{
            width: 100%;
            height: 100vh;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #242F3F;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes loader {
            0% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(180deg);
            }

            50% {
                transform: rotate(180deg);
            }

            75% {
                transform: rotate(360deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loader-inner {
            0% {
                height: 0%;
            }

            25% {
                height: 0%;
            }

            50% {
                height: 100%;
            }

            75% {
                height: 100%;
            }

            100% {
                height: 0%;
            }
        }
    </style>
</head>

<body>
    
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">

                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <a class="navbar-brand" href="/"> <img width="250px" src="{{asset('Site/img/logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a style="font-size: 17pt" class="nav-link" href="{{url('/#home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a style="font-size: 17pt" class="nav-link" href="{{url('/#category')}}">Featured Category</a>
                                </li>
                                <li class="nav-item">
                                    <a style="font-size: 17pt" class="nav-link" href="{{url('/#product')}}">Our Product</a>
                                </li>
                                <li class="nav-item">
                                    <a style="font-size: 17pt" class="nav-link" href="{{url('/#contact')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="hearer_icon d-flex">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href=""><i class="ti-heart"></i></a>
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>
                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->

                            </div>
                        </div> --}}
                    </nav>
                </div>
            </div>
        </div>
        {{-- <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div> --}}
    </header>
    <!-- Header part end-->

    @yield('content')
    {{-- <span class="float">Need Help?</span> --}}
    <a href="https://api.whatsapp.com/send?phone=6281357260908&text=Saya%20ingin%20mencari%20barang%20di%20toko%20ini.%20Mohon%20Bantuannya."
        target="blank" class="float">
        <i class="fa fa-phone my-float"></i>
    </a>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <!--::footer_part start::-->
    <footer class="footer_part">
        {{-- <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Managed Website</a></li>
                            <li><a href="">Manage Reputation</a></li>
                            <li><a href="">Power Tools</a></li>
                            <li><a href="">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | by <a href="https://colorlib.com"
                                    target="_blank"> Sinar Surya DIesel, Official Distributor of Shark and SDP</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                {{-- <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->
    {{-- for loader --}}
    <script>
        $(window).on("load",function(){
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
    <!-- jquery plugins here-->
    <script src="{{asset('Site/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('Site/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('Site/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('Site/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('Site/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('Site/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('Site/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Site/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('Site/js/slick.min.js')}}"></script>
    <script src="{{asset('Site/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('Site/js/waypoints.min.js')}}"></script>
    <script src="{{asset('Site/js/contact.js')}}"></script>
    <script src="{{asset('Site/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('Site/js/jquery.form.js')}}"></script>
    <script src="{{asset('Site/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('Site/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('Site/js/custom.js')}}"></script>
</body>

</html>