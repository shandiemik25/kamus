@extends('layouts.main')
@section('content')
    <div class="container" style="width: 70%; background-color:aliceblue">
        <div class="card card-info card-outline">
            <div class="card-header py-3">
                <div class="card-header d-flex">
                    <div class="card-tools">
                        <a href="" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" id=kata name="kata"  class="form-control" placeholder="Masukkan Kata">
                        </div>
                        <div class="form-group">
                            <input type="text" id=arti name="arti"  class="form-control" placeholder="Masukkan Arti">
                        </div>
                        <div class="form-group">
                            <input type="text" id=arti name="contoh"  class="form-control" placeholder="Masukkan Contoh">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection