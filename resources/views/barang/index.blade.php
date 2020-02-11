@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Barang</div>
                <div class="card-body">
                    <a class="btn btn-outline-primary" href="{{ route('barang.create') }}"> Tambah Barang</a>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th width="150px">Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Gambar Barang</th>
                            <th width="280px">Aksi</th>
                        </tr>
                        @php
                        $page = 1;
                        if (request()->has('page')) {
                        $page = request('page');
                        }
                        $no = config('pos.pagination') * $page - (config('pos.pagination') - 1);
                        @endphp
                        @forelse ($barangs as $barang)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->gambar_barang }}</td>
                            <td>
                                <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data</td>
                        </tr>
                        @endforelse
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    {{ $barangs->appends(Request::all())->links() }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
