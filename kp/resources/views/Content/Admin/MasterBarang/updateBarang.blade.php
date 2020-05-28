@extends('Container.Admin.Dashboard.ContainerDashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Buat Barang Baru</h3>
    </div>
    <!-- /.card-header -->
    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('doUpdateBarang')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="idBarang">ID Barang</label>
              <input type="text" name="idBarang" value="{{ $daftarBarang['id_barang'] }}" class="form-control" id="idBarang" placeholder="Masukan Id Barang">
                @if ($errors->has('idBarang'))
                  <span class="help-block">{{$errors->first('idBarang','Field tidak boleh kosong')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="namaBarang">Nama Barang</label>
              <input type="text" name="namaBarang" value="{{ $daftarBarang['nama_barang'] }}" class="form-control" id="namaBarang" placeholder="Masukan Nama Barang">
                @if ($errors->has('namaBarang'))
                  <span class="help-block">{{$errors->first('namaBarang','Field tidak boleh kosong')}}</span>
                @endif  
            </div>
            <div class="form-group">
              <label for="hargaBarang">Harga Barang</label>
              <input type="text" name="hargaBarang" value="{{ $daftarBarang['harga_barang'] }}" class="form-control" id="hargaBarang" placeholder="Masukan Harga Barang">
                @if ($errors->has('hargaBarang'))
                  <span class="help-block">{{$errors->first('hargaBarang','Field tidak boleh kosong')}}</span>
                @endif  
            </div>
            <div class="form-group">
              <label for="deskripsiBarang">Deskripsi Barang</label>
              <textarea id="deskripsiBarang" class="form-control"  name="deskripsiBarang" rows="10" cols="50">

                {{ $daftarBarang['deskripsi_barang'] }}
              </textarea>
                @if ($errors->has('hargaBarang'))
                  <span class="help-block">{{$errors->first('hargaBarang','Field tidak boleh kosong')}}</span>
                @endif  
            </div>
            
            <div class="form-group">
              <label for="deskripsiBarang">Kategori Barang</label>
              <select class="form-control" name="kategori">
                @foreach ($daftarKategori as $item)
                  @if ($daftarBarang['id_kategori'] == $item['id_kategori'])
                    <option selected value="{{ $item["id_kategori"] }}">{{ $item["nama_kategori"] }}</option>
                  @else  
                    <option value="{{ $item["id_kategori"] }}">{{ $item["nama_kategori"] }}</option>
                  @endif
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="deskripsiBarang">SubKategori Barang</label>
              <select class="form-control" name="subKategori">
                @foreach ($daftarSubKategori as $item)
                @if ($daftarBarang['id_subkategori'] == $item['id_subkategori'])
                  <option selected value="{{ $item["id_subkategori"] }}">{{ $item["nama_subkategori"] }}</option>
                  @else  
                    <option value="{{ $item["id_subkategori"] }}">{{ $item["nama_subkategori"] }}</option>
                  @endif
                    
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="gambarBarang">Gambar Barang</label>
              <img src="{{ asset('Image/'.$daftarBarang['id_barang'].'/profil.jpg')}}" style="width: 150px" alt="">
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="gambarBarang" class="custom-file-input" id="gambarBarang">
                  <label class="custom-file-label" for="gambarBarang">Choose file</label>
                </div>
              </div>
            </div>
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <input type="hidden" name="key" value="{{ $daftarBarang['id_barang'] }}">
            <input type="hidden" name="redirects_to" value="{{ url()->previous() }}">
            {{-- {!! Form::hidden('redirects_to', URL::previous()) !!} --}}
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
@endsection
