@extends('template')

@section('content')
<div class="p-2 container-fluid text-white" style="background-color: #eb3486;">
    <h1 class="h1">Karyawan Page</h1>
</div>

<div class="container">
    <div class="card my-3">
        <div class="card-header text-center">
            CRUD Data Karyawan - Eloquent
        </div>
        <div class="card-body">
            <a href="/karyawan/tambah" class="btn btn-primary">Input Karyawan Baru</a>
            <br><br>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($karyawan as $k)
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->alamat }}</td>
                        <td>
                            <a href="/karyawan/edit/{{ $k->id }}" class="btn btn-warning">Edit</a>
                            <a href="/karyawan/hapus/{{ $k->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            Halaman : {{ $karyawan->currentPage() }} <br />
            Jumlah Data : {{ $karyawan->total() }} <br />
            Data Per Halaman : {{ $karyawan->perPage() }} <br />


            {{ $karyawan->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

@stop
