@extends('Container.Admin.Dashboard.ContainerDashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List barang</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Status Kategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarKategori as $item)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item['id_kategori']}}</td>
                        <td>{{$item['nama_kategori']}}</td>
                        <td>
                            @if ($item['status_kategori'] == 1)
                            Aktif
                            @else
                            Tidak Aktif
                            @endif
                        </td>
                        <td>
                            {{-- <form method="get" action="{{route('UpdateBarang')}}"> --}}
                                {{-- @csrf --}}
                                <input type="hidden" name="key" value="{{$item['id_kategori']}}" />
                                <button type="submit" class="btn btn-block btn-warning">Ubah</button>
                            {{-- </form> --}}
                        </td>
                        <td>
                            {{-- <form method="get" action="{{route('UpdateBarang')}}"> --}}
                                {{-- @csrf --}}
                                <input type="hidden" name="key" value="{{$item['id_kategori']}}" />
                                <button type="submit" class="btn btn-block btn-danger">Hapus</button>
                            {{-- </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
@endsection
