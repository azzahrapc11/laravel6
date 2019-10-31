@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">SDN 1 Sukamakmur</div>
                <div class="card-body">
                    <h1 class=text-center> List Data Siswa </h1>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-right">
                        </div>
                        <table class="table table-striped text-left">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-1">No</th>
                                    <th class="col-2">Nama Kategori</th>
                                    <th class="col-3 text-center">Jumlah Produk</th>
                                    <th class="col-3">Deskripsi</th>
                                    <th class="col-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php 
                                $no = 1;
                            @endphp
                                @foreach($data as $d)
                                    <tr class="d-flex">
                                        <td class="col-1">{{ $no++ }}</td>
                                        <td class="col-2">{{ $d->nama }}</td>
                                        <td class="col-3">{{ $d->jml_produk }}</td>
                                        <td class="col-3 text-center">{{ $d->desc }}</td>
                                        <td class="col-3 text-center">                    
                                            <form action="#" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="{{ route('category.edit', $d->id) }}" class=" btn btn-sm btn-warning" >Edit</a>
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                            </form>
                                        </td>              
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection