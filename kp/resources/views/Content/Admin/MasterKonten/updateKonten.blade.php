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
        <form role="form" action="{{ route('doUpdateKonten')}}">
          <div class="card-body">
            <div class="form-group">
              <label for="isiKonten">Nama Kategori</label>
              <input type="text" name="isiKonten" value="{{ $daftarKonten['isi_konten'] }}" class="form-control" id="isiKonten" placeholder="Masukan Isi Konten">
              @if ($errors->has('isiKonten'))
                  <span class="help-block">{{$errors->first('isiKonten','Field tidak boleh kosong')}}</span>
              @endif
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <input type="hidden" name="key" value="{{ $daftarKonten['id_konten'] }}">
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
