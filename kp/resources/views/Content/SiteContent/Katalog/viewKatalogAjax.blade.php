

@foreach ($collection as $item)
    <div class="col-lg-4 col-sm-6">
        <div class="single_product_item">
            @if ($item['gambar_barang'] == null)
                <img src="{{asset('ImageNotFound/notFound.png')}}" alt="">
            @else
                <img src="{{asset('Image/'.$item['id_barang'].'/profil.jpg')}}" alt="">
            @endif
            <div class="single_product_text">
                <h4>{{ $item['nama_barang'] }}</h4>
                <h3>Rp.{{number_format($item['harga_barang'],2,",",".") }}</h3>
                <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
            </div>
        </div>
    </div>
@endforeach