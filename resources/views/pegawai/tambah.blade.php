@extends('template')

@section('content')

<div class="p-3 container-fluid" style="background-color: #34baeb; color:aliceblue">
    <h1>Pegawai Page | Tambah</h1>
</div>

<div class="p-3 container-fluid">
    <a href="/pegawai">Kembali</a>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleNama">Nama</label>
            <input type="text" name="nama" required="required" class="form-control">
        </div>
        <div class="form-group">
            Jabatan <input type="text" name="jabatan" required="required" class="form-control">
        </div>
        <div class="form-group">
            Umur <input type="number" name="umur" required="required" class="form-control">
        </div>
        <div class="form-group">
            Alamat <textarea name="alamat" required="required" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
</div>

@stop
