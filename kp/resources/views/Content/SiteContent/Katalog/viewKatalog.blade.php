@extends('Container.SiteContainer.Site')
@section('content')
<!--================Category Product Area =================-->
<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                @foreach ($daftarKategori as $item)
                                    @if ($item['id_kategori'] == $kategoriTerpilih)
                                        <li>
                                            <a style="color: red"
                                                href="/products/kategori/{{ $item['id_kategori'] }}">{{ $item['nama_kategori'] }}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a
                                                href="/products/kategori/{{ $item['id_kategori'] }}">{{ $item['nama_kategori'] }}</a>
                                        </li>
                                    @endif
                                @endforeach
                                <li>
                                    <a href="/products/" style="color: red">Reset</a>
                                </li>
                            </ul>
                        </div>
                    </aside>

                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Browse Sub Category</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                @foreach ($daftarSubKategori as $item)
                                @if ($item['id_subkategori'] == $subKategoriTerpilih)
                                <li>
                                    <a style="color: red"
                                        href="/products/subkategori/{{ $item['id_subkategori'] }}">{{ $item['nama_subkategori'] }}</a>
                                </li>
                                @else
                                <li>
                                    <a
                                        href="/products/subkategori/{{ $item['id_subkategori'] }}">{{ $item['nama_subkategori'] }}</a>
                                </li>
                                @endif

                                @endforeach
                                <li>
                                    <a href="/products/" style="color: red">Reset</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9" id="produk">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu">
                                <p><span> {{ count($daftarBarang) }} </span> Product Found</p>
                            </div>
                            <div class="single_product_menu">
                                <form action="{{ url('/products/search') }}" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="search"
                                            aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center latest_product_inner">
                    @foreach ($daftarBarang as $item)
                    @if ($item->status_barang == 1)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                @if ($item->gambar_barang == null)
                                <img src="{{asset('ImageNotFound/notFound.png')}}" alt="">
                                @else
                                <img src="{{asset('Image/'.$item->id_barang.'/profil.jpg')}}" alt="">
                                @endif
                                <div class="single_product_text">
                                    <h4>{{ $item->nama_barang }}</h4>
                                    <h3>Rp.{{number_format($item->harga_barang,2,",",".") }}</h3>
                                    <a href="/products/productsdetail/{{$item->id_barang}}" class="add_cart">View Detail</a>
                                </div>
                            </div>
                        </div>
                    @else
                        
                    @endif
                    
                    @endforeach

                    <div class="col-lg-12" style="text-align: center">
                        {{ $daftarBarang->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->
@endsection