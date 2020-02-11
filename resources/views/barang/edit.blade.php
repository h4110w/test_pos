@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Data Barang</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('barang.update',$barang->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kode Barang:</strong>
                                    <input type="text" name="kode_barang" value="{{ $barang->kode_barang }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Barang:</strong>
                                    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gambar Barang:</strong>
                                    <input type="text" name="gambar_barang" value="{{ $barang->gambar_barang }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-success" href="{{ route('barang.index') }}"> Kembali</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
