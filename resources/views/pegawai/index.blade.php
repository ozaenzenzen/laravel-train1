@extends('template')

@section('content')

<div class="p-3 container-fluid" style="background-color: #34baeb; color:aliceblue">
    <h1>Pegawai Page</h1>
</div>
<div class="p-2">
    <div class="p-2 ml-3 my-2 container">
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
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@stop
