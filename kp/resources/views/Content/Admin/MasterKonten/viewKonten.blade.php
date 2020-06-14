@extends('Container.Admin.Dashboard.ContainerDashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Kategori</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Id Konten</th>
                    <th>Isi Konten</th>
                    <th>Status Kategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarKonten as $item)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item['id_konten']}}</td>
                        <td>{{$item['isi_konten']}}</td>
                        <td>
                            @if ($item['status_konten'] == 1)
                            Aktif
                            @else
                            Tidak Aktif
                            @endif
                        </td>
                        <td>
                            <form method="get" action="{{route('updateKonten')}}">
                                @csrf
                                <input type="hidden" name="key" value="{{$item['id_konten']}}" />
                                <button type="submit" class="btn btn-block btn-warning">Ubah</button>
                            </form>
                        </td>
                        <td>
                            @if ($item['status_konten'] == 1)
                                <form method="get" action="{{route('doDeleteKonten')}}">
                                    @csrf
                                    <input type="hidden" name="key" value="{{$item['id_konten']}}" />
                                    <button type="submit" class="btn btn-block btn-danger">Hapus</button>
                                </form>
                            @else
                                <form method="get" action="{{route('undoDeleteKonten')}}">
                                    @csrf
                                    <input type="hidden" name="key" value="{{$item['id_konten']}}" />
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
