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
                                        <h1>Wood & Cloth
                                            Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="#" class="btn_2">buy now</a>
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
                                        <h1>Cloth & Wood
                                            Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="#" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{asset('Site/img/banner2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="single_banner_slider">
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
                    </div>
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
                    <h3>Low Pressure</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('/Site/img/feature/feature_1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>Opener</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('/Site/img/feature/feature_2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>Medium Pressure</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                <img src="{{asset('/Site/img/feature/feature_3.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Best Quality</p>
                    <h3>High Pressure</h3>
                    <a href="#" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('/Site/img/feature/feature_4.png')}}" alt="">
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
                                @if ($loop->index+1 == 8)
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
                <div id="map" style="height: 480px;"></div>
                <script>
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
                        lat: -31.197,
                        lng: 150.744
                      },
                      zoom: 9,
                      styles: grayStyles,
                      scrollwheel: false
                    });
                  }
                </script>
                <script
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
                </script>
        
              </div>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--::subscribe_area part end::-->
@endsection
