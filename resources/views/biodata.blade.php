@extends('template')

@section('content')
<div class="p-3 mb-2 bg-primary text-white">
<!-- <div class="container bg-primary text-white"> -->
    <h1>Train to passing data from Controller to View </h1>
</div>
<div class="ml-4">
    <a href="https://fauzanlab.netlify.app/home" target="_blank">Link to my website</a>
</div>
<div class="container p-3 my-2 mx-4 bg-primary text-white">
    <p>Nama : {{ $nama }}</p>
    @foreach($arrayNama as $m)
    <li>{{ $m }}</li>
    @endforeach
</div>
@stop
