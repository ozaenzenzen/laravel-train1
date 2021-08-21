@extends('template')

@section('content')
<div class="p-2 container-fluid" style="background-color:darkslategrey; color:white">
    <h1 class="h1">Guru Page: Tong Sampah</h1>
</div>

<div class="container">
    <div class="card my-3">

        <div class="card-header text-center">
            Data Guru
        </div>
        <div class="card-body">
            <a href="/guru" class="btn btn-sm btn-primary">Data Guru</a>
            |
            <a href="/guru/trash">Tong Sampah</a>
            <br>
            <br>

            <a href="/guru/kembalikan_semua">Kembalikan Semua</a>
            |
            <a href="/guru/hapus_permanen_semua">Hapus Permanen Semua</a>
            <br>
            <br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th width="30%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guru as $g)
                    <tr>
                        <td>{{$g->nama}}</td>
                        <td>{{$g->umur}}</td>
                        <td>
                            <a href="/guru/kembalikan/{{ $g->id }}" class="btn btn-success btn-sm">Restore</a>
                            <a href="/guru/hapus_permanen/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
