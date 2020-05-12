<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="icon" href="img/favicon.png">
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
    <style>
        .html{
            text-align: center;
            justify-content: center;
            justify-items: center;
        }
    </style>
</head>

<body style="justify-items: center">

    <!--================login_part Area =================-->
    <section class="login_part" style="padding-top: 5%">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Pastikan anda adalah admin</h2>
                            <p></p>
                            {{-- <a href="#" class="btn_3">Create an Account</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="{{ route('doLogin') }}" method="post" novalidate="novalidate">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="username" value=""
                                        placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->


    <!-- jquery plugins here-->
    <!-- jquery -->
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
    <script src="{{asset('Site/js/stellar.js')}}"></script>
    <script src="{{asset('Site/js/price_rangs.js')}}"></script>
    <!-- custom js -->
<script src="{{asset('Site/js/custom.js')}}"></script>
</body>

</html>