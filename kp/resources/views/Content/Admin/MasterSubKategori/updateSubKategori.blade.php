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
        <form role="form" action="{{ route('doUpdateSubKategori')}}">
          <div class="card-body">
            <div class="form-group">
              <label for="idKategori">ID SubKategori</label>
              <input type="text" name="idSubKategori" value="{{ $daftarSubKategori['id_subkategori'] }}" class="form-control" id="idSubKategori" placeholder="Masukan Id Kategori">
                @if ($errors->has('idSubKategori'))
                  <span class="help-block">{{$errors->first('idSubKategori','Field tidak boleh kosong')}}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="namaKategori">Nama SubKategori</label>
              <input type="text" name="namaSubKategori" value="{{ $daftarSubKategori['nama_subkategori'] }}" class="form-control" id="namaSubKategori" placeholder="Masukan Nama SubKategori">
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
            <input type="hidden" name="key" value="{{ $daftarSubKategori['id_subkategori'] }}">
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
