@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center" style="padding-top: 20px;">Buat kategori</h1>
                        <div class="row">
                            <div class="col-lg-8" style="float: none; margin: 0 auto;">
                                <form action="{{route('category.store')}}" style=" padding-bottom: 20px;" method="post" enctype="multipart/form-data">  
                                {{ csrf_field() }}
                                    <div class="form-group">    
                                        <label for="nama">Nama kategori</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama kategori">
                                    </div>
                                    <div class="form-group">    
                                        <label for="jml_produk">Jumlah produk</label>
                                        <input type="number" class="form-control" id="jml_produk" name="jml_produk" placeholder="Masukkan jumlah produk">
                                    </div>
                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi Kategori</label>
                                        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary" style="margin:auto; text-align:center; display:block;">BUAT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection