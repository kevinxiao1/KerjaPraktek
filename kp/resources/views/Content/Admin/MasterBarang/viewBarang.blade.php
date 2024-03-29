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
                    <th>Gambar Barang</th>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Kategori</th>
                    <th>Sub Kategori</th>
                    <th>Status Barang</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarBarang as $item)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    @if ($item['gambar_barang'] == null)
                        <td><img src="{{ asset('ImageNotFound/notFound.png') }}" style="width: 150px" alt=""></td>
                    @else
                        <td><img src="{{ asset('Image/'.$item['id_barang'].'/profil.jpg')}}" style="width: 150px" alt=""></td>
                    @endif
                    {{-- <img src="http://localhost:8000/Gambar/asw/1581918457982.jpg" style="width: 150px" alt=""> --}}
                    <td>{{$item['id_barang']}}</td>
                    <td>{{$item['nama_barang']}}</td>
                    <td>Rp.{{number_format($item['harga_barang'],2,",",".") }}</td>
                    <td>{!!$item['deskripsi_barang']!!}</td>
                    <td>{{$item->Kategori['nama_kategori']}}</td>
                    <td>{{$item->Subkategori['nama_subkategori']}}</td>
                    <td>
                        @if ($item['status_barang'] == 1)
                        Aktif
                        @else
                        Tidak Aktif
                        @endif
                    </td>
                    <td>
                        <form method="get" action="{{route('updateBarang')}}">
                            @csrf
                            <input type="hidden" name="key" value="{{$item['id_barang']}}" />
                            <button type="submit" class="btn btn-block btn-warning">Ubah</button>
                        </form>
                    </td>
                    <td>
                        @if ($item['status_barang'] == 1)
                            <form method="get" action="{{route('deleteBarang')}}">
                                @csrf
                                <input type="hidden" name="key" value="{{$item['id_barang']}}" />
                                <button type="submit" class="btn btn-block btn-danger">Non-Aktfikan</button>
                            </form>
                        @else
                            <form method="get" action="{{route('unDeleteBarang')}}">
                                @csrf
                                <input type="hidden" name="key" value="{{$item['id_barang']}}" />
                                <button type="submit" class="btn btn-block btn-success">Aktifkan</button>
                            </form>
                        @endif
                        
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
