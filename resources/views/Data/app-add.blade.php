@extends('layouts.main')
@section('content')
    <div class="container" style="width: 70%; background-color:aliceblue">
        <div class="card card-info card-outline">
            <div class="card-header py-3">
                <div class="card-header d-flex">
                    <div class="card-tools">
                        <a href="{{ route('create') }}" class="btn btn-success" >Tambah Data <i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="mt-2">
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kata</th>
                            <th scope="col">Arti</th>
                            <th scope="col">Contoh</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection