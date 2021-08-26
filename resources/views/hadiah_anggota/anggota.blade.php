@extends('template')

@section('content')
<div class="p-3 container-fluid text-black" style="background-color: greenyellow; color:black">
    <h1 class="h1">Anggota Page: Many to many</h1>
</div>

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="text-center my-4">Eloquent Many to Many</h5>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nama Pengguna</th>
                        <th>Hadiah</th>
                        <th width="18%">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anggota as $a)
                    <tr>
                        <td>{{ $a->nama }}</td>
                        <td>
                            <ul>
                                @foreach($a->hadiah as $h)
                                <li>{{ $h->nama_hadiah }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="text-center">{{ $a->hadiah->count() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
