@extends('Container.Admin.Dashboard.ContainerDashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Buat Kategori</h3>
    </div>
    <!-- /.card-header -->
    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{ route('doCreateSubKategori')}}">
          <div class="card-body">
            <div class="form-group">
              <label for="kategori">Kategori Barang</label>
              <select class="form-control" name="kategori">
                @foreach ($daftarKategori as $item)
                    <option value="{{ $item["id_kategori"] }}">{{ $item["nama_kategori"] }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="idKategori">ID SubKategori</label>
              <input type="text" name="idSubKategori" class="form-control" id="idSubKategori" placeholder="Masukan Id SubKategori">
                @if ($errors->has('idSubKategori'))
                  <span class="help-block">{{$errors->first('idSubKategori','Field tidak boleh kosong')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="namaKategori">Nama SubKategori</label>
              <input type="text" name="namaSubKategori" class="form-control" id="namaSubKategori" placeholder="Masukan Nama SubKategori">
                @if ($errors->has('namaSubKategori'))
                  <span class="help-block">{{$errors->first('namaSubKategori','Field tidak boleh kosong')}}</span>
                @endif  
            </div>
            {{-- <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div> --}}
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
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
