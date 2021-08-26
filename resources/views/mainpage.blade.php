@extends('template')

@section('content')
<div class="p-3 mb-2 bg-success text-white">
    <h1>Main Page Test</h1>
</div>

<div class="ml-4 container">
    <div class="list-group">
        <a href="/welcome" class="list-group-item list-group-item-action">Link to Laravel Page</a>
        <a href="/dosen" class="list-group-item list-group-item-action">Link to Dosen Page</a>
        <a href="/formulir" class="list-group-item list-group-item-action">Link to Formulir Page</a>
        <a href="/blog" class="list-group-item list-group-item-action">Link to Blog Page</a>
        <a href="/pegawai" class="list-group-item list-group-item-action">Link to Pegawai Page</a>
        <a href="/input" class="list-group-item list-group-item-action">Link to Form Input Page</a>
        <a href="/karyawan" class="list-group-item list-group-item-action">Link to Karyawan Page</a>
        <a href="/guru" class="list-group-item list-group-item-action">Link to Guru Page</a>
        <a href="/pengguna" class="list-group-item list-group-item-action">Link to Pengguna Page</a>
        <a href="/article" class="list-group-item list-group-item-action">Link to Article Page</a>
        <a href="/anggota" class="list-group-item list-group-item-action">Link to Anggota Hadiah Page</a>
        <a href="/home" class="list-group-item list-group-item-action">Link to Login Page</a>
    </div>
</div>
@stop
