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
            <input type="text" name="luas tanah" class="form-control" placeholder="Luas Tanah" value="{{ $product->pemilik }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $product->alamat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">noTelp</label>
            <input type="text" name="noTelp" class="form-control" placeholder="No Telpon" value="{{ $product->noTelp }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
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