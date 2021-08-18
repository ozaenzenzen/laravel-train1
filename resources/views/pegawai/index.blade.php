@extends('template')

@section('content')

<div class="p-3 container-fluid" style="background-color: #34baeb; color:aliceblue">
    <h1>
        <a style="color: white;" href="/pegawai">Pegawai Page</a>
    </h1>

</div>
<div class="container-fluid">
    <div>
        Pencarian:<br>
        <form action="/pegawai/cari" method="GET" class="form-inline">
            <div class="form-group mb-2 mr-2">
                <input type="text" name="cari" placeholder="Cari Nama..." value="{{ old('cari')}}" class="form-control mt-2">
            </div>
            <div class="form-group mb-2">
            <input type="submit" value="Cari" class="btn btn-primary mt-2">
            </div>
        </form>
</div>
<div class="p-2 ml-0 my-2 container">
    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
</div>

<table class="table">
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <td>{{ $p->pegawai_nama }}</td>
        <td>{{ $p->pegawai_jabatan }}</td>
        <td>{{ $p->pegawai_umur }}</td>
        <td>{{ $p->pegawai_alamat }}</td>
        <td>
            <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
            <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

Halaman: {{$pegawai->currentPage()}} <br>
Jumlah Data: {{$pegawai->total()}} <br>
Data per Halaman: {{$pegawai->perPage()}} <br><br>

<div class="container-fluid">
    {!! $pegawai->links('pagination::bootstrap-4') !!}
</div>

</div>

@stop
