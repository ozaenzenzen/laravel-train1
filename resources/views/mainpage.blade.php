@extends('template')

@section('content')
<div class="p-3 mb-2 bg-success text-white">
    <h1>Main Page Test</h1>
</div>

<div class="ml-4 container">
    <div class="list-group">
        <a href="/dosen" class="list-group-item list-group-item-action">Link to Dosen Page</a>
        <a href="/formulir" class="list-group-item list-group-item-action">Link to Formulir Page</a>
        <a href="/blog" class="list-group-item list-group-item-action">Link to Blog Page</a>
        <a href="#" class="list-group-item list-group-item-action">Link to Page 3</a>
    </div>
</div>
@stop
