@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Rumah</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Rumah</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Pemilik</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Luas Tanah</th>
                <th>Luas Bangunan</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->pemilik }}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>
                        <td class="align-middle">{{ $rs->noTelp }}</td>
                        <td class="align-middle">{{ $rs->luasTanah }}</td>
                        <td class="align-middle">{{ $rs->luasBangunan }}</td>
                        <td class="align-middle">{{ $rs->harga }}</td>
                        <td class="align-middle">{{ $rs->deskripsi }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('product.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('product.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('product.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="10">Rumah tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection