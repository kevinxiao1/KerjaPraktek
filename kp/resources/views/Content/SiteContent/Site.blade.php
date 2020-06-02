@extends('Container.SiteContainer.Site')
@section('content')
<!-- banner part start-->
<section class="banner_part" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">
                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Welcome!
                                            </h1>
                                        <p>Start browsing our products here !</p>
                                        <a href="/products" class="btn_2">Browse</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{asset('Site/img/banner1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Start Transaction Online</h1>
                                        <p>Visit our Tokopedia store from here!</p>
                                        <a href="https://www.tokopedia.com/cvssd?source=universe&st=product" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{asset('Site/img/banner2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Wood & Cloth
                                            Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="#" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{asset('Site/img/banner3.png')}}" alt="">
                            </div>
                        </div>
                    </div> --}}
                    <!-- <div class="single_banner_slider">
                                <div class="row">
                                    <div class="col-lg-5 col-md-8">
                                        <div class="banner_text">
                                            <div class="banner_text_iner">
                                                <h1>Cloth $ Wood Sofa</h1>
                                                <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                    suspendisse ultrices gravida. Risus commodo viverra</p>
                                                <a href="#" class="btn_2">buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner_img d-none d-lg-block">
                                        <img src="img/banner_img.png" alt="">
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part padding_top" id="category">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Featured Category</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>Air Compressor</h3>
                    <a href="/products/kategori/AC" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('/Site/img/feature/feature_1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>Elektro Motor</h3>
                    <a href="/products/kategori/EL" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('/Site/img/feature/feature_2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>Tyre Opener</h3>
                    <a href="/products/kategori/TO" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                <img src="{{asset('/Site/img/feature/feature_3.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>Gasoline Generator</h3>
                    <a href="/products/kategori/GG" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('/Site/img/feature/feature_4.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>Gasoline Engine</h3>
                    <a href="/products/kategori/GE" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('/Site/img/feature/feature_5.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>Diesel Engine</h3>
                    <a href="/products/kategori/DE" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('/Site/img/feature/feature_6.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- product_list start-->
<section class="product_list section_padding" id="product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Our Product <span><a href="/products">View More</a></span> </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            @foreach ($daftarBarang as $item)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        @if ($item['gambar_barang'] == null)
                                            <img src="{{asset('ImageNotFound/notFound.png')}}" alt="">
                                        @else
                                            <img src="{{asset('Image/'.$item['id_barang'].'/profil.jpg')}}" alt="">
                                        @endif
                                        <div class="single_product_text">
                                            <h4>{{ $item['nama_barang'] }}</h4>
                                            <h3>Rp.{{number_format($item['harga_barang'],2,",",".") }}</h3>
                                            <a href="/products/productsdetail/{{$item['id_barang']}}" class="add_cart">view details</a>
                                        </div>
                                    </div>
                                </div>
                                @if ($loop->index+1 == 4)
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part start-->

<!-- awesome_shop start-->
{{-- <section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <img src="img/offer_img.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Weekly Sale on
                        60% Off All Products</h2>
                    <div class="date_countdown">
                        <div id="timer">
                            <div id="days" class="date"></div>
                            <div id="hours" class="date"></div>
                            <div id="minutes" class="date"></div>
                            <div id="seconds" class="date"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- awesome_shop part start-->

<!-- product_list part start-->
{{-- <section class="product_list best_seller section_padding" id="bestSeller">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    <div class="single_product_item">
                        <img src="{{asset('/Site/img/product/product_1.jpg')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{asset('/Site/img/product/product_1.jpg')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{asset('/Site/img/product/product_1.jpg')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{asset('/Site/img/product/product_1.jpg')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="{{asset('/Site/img/product/product_1.jpg')}}" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- product_list part end-->

<!-- subscribe_area part start-->
{{-- <section class="subscribe_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated
                        with new offers</h2>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--::subscribe_area part end::-->

<!-- subscribe_area part start-->
{{-- <section class="client_logo padding_top" id="client">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Our Client</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_2.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_3.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_4.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_5.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_2.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_3.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_4.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('/Site/img/client_logo/client_logo_5.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="contact-section padding_top" id="contact">
    <div class="container">
        <div class="section_tittle text-center">
            <h2>Contact us</h2>
        </div>


      <div class="row">
        
        <div class="col-lg-8">
            <div class="d-none d-sm-block mb-5 pb-4">
                
                <div id="map" style="height: 480px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.953947495036!2d112.69080961472243!3d-7.246081594769357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ff836164d45b%3A0xae9f8cc43d2c5519!2sCV.%20Sinar%20Surya%20Diesel!5e0!3m2!1sen!2sid!4v1590641478443!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                
                {{-- <script>
                  function initMap() {
                    var uluru = {
                      lat: -25.363,
                      lng: 131.044
                    };
                    var grayStyles = [{
                        featureType: "all",
                        stylers: [{
                            saturation: -90
                          },
                          {
                            lightness: 50
                          }
                        ]
                      },
                      {
                        elementType: 'labels.text.fill',
                        stylers: [{
                          color: '#ccdee9'
                        }]
                      }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                      center: {
                        lat: -7.245858,
                        lng: 112.693041
                      },
                      zoom: 15,
                      styles: grayStyles,
                      scrollwheel: false
                    });
                  }
                </script>
                <script
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
                </script> --}}
        
              </div>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Surabaya, Jawa Timur</h3>
              <p>Pergudangan Margomulyo Permai, AH-01, Greges, Kec. Asemrowo, Kota SBY, Jawa Timur 60183</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-alarm-clock"></i></span>
            <div class="media-body">
              <h3>Mon to Fri 8am to 4pm</h3>
              {{-- <p>Mon to Fri 8am to 5pm</p> --}}
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-user"></i></span>
            <div class="media-body">
              <h3>(031) 7480878</h3>
              {{-- <p>Mon to Fri 8am to 5pm</p> --}}
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-mobile"></i></span>
            <div class="media-body">
              <h3>+62 823-3135-0065 </h3>
              {{-- <p>Mon to Fri 8am to 5pm</p> --}}
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>sinarsuryadiesel@gmail.com</h3>
              {{-- <p>Mon to sat 8am to 4pm</p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--::subscribe_area part end::-->
@endsection
