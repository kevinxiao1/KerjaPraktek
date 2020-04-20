@extends('Container.Admin.Dashboard.ContainerDashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List SubKategori</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Id SubKategori</th>
                    <th>Nama SubKategori</th>
                    <th>Status SubKategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarSubKategori as $item)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item['id_subkategori']}}</td>
                        <td>{{$item['nama_subkategori']}}</td>
                        <td>
                            @if ($item['status_subkategori'] == 1)
                            Aktif
                            @else
                            Tidak Aktif
                            @endif
                        </td>
                        <td>
                            <form method="get" action="{{route('updateSubKategori')}}">
                                @csrf
                                <input type="hidden" name="key" value="{{$item['id_subkategori']}}" />
                                <button type="submit" class="btn btn-block btn-warning">Ubah</button>
                            </form>
                        </td>
                        <td>
                            @if ($item['status_subkategori'] == 1)
                                <form method="get" action="{{route('doDeleteSubKategori')}}">
                                    @csrf
                                    <input type="hidden" name="key" value="{{$item['id_subkategori']}}" />
                                    <button type="submit" class="btn btn-block btn-danger">Non-Aktifkan</button>
                                </form>
                            @else
                                <form method="get" action="{{route('undoDeleteSubKategori')}}">
                                    @csrf
                                    <input type="hidden" name="key" value="{{$item['id_subkategori']}}" />
                                    <button type="submit" class="btn btn-block btn-primary">Aktifkan</button>
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
