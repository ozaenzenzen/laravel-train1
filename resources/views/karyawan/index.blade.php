@extends('template')

@section('content')
<div class="p-2 container-fluid text-white" style="background-color: #f59542;">
    <h1 class="h1">Karyawan Page</h1>
</div>

<div class="container">
    <div class="card-mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        Halaman : {{ $karyawan->currentPage() }} <br />
        Jumlah Data : {{ $karyawan->total() }} <br />
        Data Per Halaman : {{ $karyawan->perPage() }} <br />


        {{ $karyawan->links('pagination::bootstrap-4') }}
    </div>
</div>

@stop
