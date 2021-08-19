@extends('template')

@section('content')

<div class="p-2 container-fluid" style="background-color: #eb3486; color: white">
    <h1 class="h1">Karyawan Page | Tambah</h1>
</div>

<div class="container">
    <div class="card my-3">
        <div class="card-header text-center">
            CRUD Data Karyawan - Eloquent
        </div>
        <div class="card-body">
            <a href="/karyawan" class="btn btn-primary">Kembali</a>
            <br><br>

            <form action="/karyawan/store" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama karyawan...">

                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{$errors->first('nama')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" cols="30" rows="10" class="form-control" placeholder="Alamat karyawan..."></textarea>

                    @if($errors->has('alamat'))
                    <div class="text-danger">
                        {{$errors->first('alamat')}}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@stop
