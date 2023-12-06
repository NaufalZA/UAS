@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Tambah Rumah</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="pemilik" class="form-control" placeholder="Pemilik">
            </div>
            <div class="col">
                <input type="text" name="noTelp" class="form-control" placeholder="No Telpon">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="luasTanah" class="form-control" placeholder="Luas Tanah">
            </div>
            <div class="col">
                <input type="text" name="luasBangunan" class="form-control" placeholder="Luas Bangunan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
            <div class="col">
                <!-- <input> -->
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value=""></option>
                    <option value="dijual">dijual</option>
                    <option value="terjual">terjual</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection