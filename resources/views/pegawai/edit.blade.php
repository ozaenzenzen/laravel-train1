@extends('template')

@section('content')

<div class="p-3 container-fluid" style="background-color: #34baeb; color:aliceblue">
    <h1>Pegawai Page | Edit</h1>
</div>

<div class="p-3 container-fluid">
    <a href="/pegawai">Kembali</a>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            Id <input type="text" name="id" required="required" class="form-control" value="{{ $p->pegawai_id }}" readonly>
        </div>
        <div class="form-group">
            Nama <input type="text" name="nama" required="required" class="form-control" value="{{ $p->pegawai_nama }}">
        </div>
        <div class="form-group">
            Jabatan <input type="text" name="jabatan" required="required" class="form-control" value="{{ $p->pegawai_jabatan }}">
        </div>
        <div class="form-group">
            Umur <input type="number" name="umur" required="required" class="form-control" value="{{ $p->pegawai_umur }}">
        </div>
        <div class="form-group">
            Alamat <textarea name="alamat" required="required" cols="30" rows="10" class="form-control">{{ $p->pegawai_alamat }}</textarea>
        </div>
        <input type="submit" value="Update Data" class="btn btn-primary">
    </form>
    @endforeach
</div>

@stop
