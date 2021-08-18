@extends('template')

@section('content')

<div class="p-3 container-fluid" style="background-color: #7542f5; color:aliceblue">
    <h1>Form Input Page | Hasil</h1>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="my-4">Data yang diinput: </h3>

                    <table class="table table-bordered table-stripped">
                        <tr>
                            <td style="width:150px">Nama</td>
                            <td>{{$data->nama}}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{$data->pekerjaan}}</td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td>{{$data->usia}}</td>
                        </tr>
                    </table>

                    <a href="/input" class="btn btn-primary"> Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
