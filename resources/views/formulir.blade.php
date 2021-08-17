@extends('template')

@section('content')
<div class="p-3 mb-2 bg-success text-white">
    <h1 class="display-4">Formulir Page</h1>
</div>

<div class="mx-4 my-4">
    <form action="/formulir/proses" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        Nama: &emsp;
        <input type="text" name="nama"><br>
        Alamat: &emsp;
        <input type="text" name="alamat">
        <br><br>
        <input type="submit" value="simpan">
    </form>
</div>
@stop
