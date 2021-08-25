@extends('template')

@section('content')
<div class="p-2 container-fluid" style="background-color:steelblue; color: white">
    <h1 class="h1">Article Page: One to Many</h1>
</div>

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="text-center my-5">One to Many Relationship</h5>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Judul Article</th>
                        <th>Tag</th>
                        <th width="15%" class="text-center">Jumlah Tag</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artikel as $a)
                    <tr>
                        <td>{{ $a->judul }}</td>
                        <td>
                            @foreach($a->tags as $t)
                            {{$t->tag}},
                            @endforeach
                        </td>
                        <td class="text-center">{{ $a->tags->count() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
