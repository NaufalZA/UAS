@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detail Rumah</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Pemilik</label>
            <input type="text" name="pemilik" class="form-control" placeholder="Pemilik" value="{{ $product->pemilik }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $product->alamat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Luas Tanah</label>
            <input type="text" name="luasTanah" class="form-control" placeholder="Luas Tanah" value="{{ $product->luasTanah }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Luas Bangunan</label>
            <input type="text" name="luasBangunan" class="form-control" placeholder="Luas Bangunan" value="{{ $product->uasBangunan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $product->harga }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" readonly>{{ $product->deskripsi }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection