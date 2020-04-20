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
        <form role="form" action="{{ route('doCreateKategori')}}">
          <div class="card-body">
            <div class="form-group">
              <label for="idKategori">ID Kategori</label>
              <input type="text" name="idKategori" class="form-control" id="idKategori" placeholder="Masukan Id Kategori">
                @if ($errors->has('idKategori'))
                  <span class="help-block">{{$errors->first('idKategori','Field tidak boleh kosong')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="namaKategori">Nama Kategori</label>
              <input type="text" name="namaKategori" class="form-control" id="namaKategori" placeholder="Masukan Nama Kategori">
                @if ($errors->has('namaKategori'))
                  <span class="help-block">{{$errors->first('namaKategori','Field tidak boleh kosong')}}</span>
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
