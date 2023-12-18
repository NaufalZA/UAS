@extends('layouts.app')
 
@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="card"> 
          <div class="card-body p-3">
            <h5>Tambah Rumah</h5> 
            <hr>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name" class="form-control-label">Judul</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group">
                <label for="image" class="form-control-label">Gambar</label>
                <input type="file" name="image" class="form-control form-control-file" id="image" accept=".jpg, .png, .svg" required>
              </div>
              <div class="form-group">
                <label for="description" class="form-control-label">Deskripsi</label>
                <textarea rows="6" name="description" class="form-control" id="description" required></textarea>
              </div>
              <div class="form-group">
                <label for="">Sertifikasi </label>
                <div class="form-group">
                  <button class="form-group" data-aut-id="opp_certificate0">SHM - Sertifikat Hak Milik</button>
                  <button class="form-group" data-aut-id="opp_certificate1">HGB - Hak Guna Bangun</button>
                  <button class="form-group" data-aut-id="opp_certificate2">Lainnya (PPJB, Girik, Adat, dll)</button>
                </div>
                <div class="form-group">
                  <span class="form-group" data-aut-id=""></span>
                </div>
              </div>
              <div class="form-group">
                <label for="price" class="form-control-label">Harga</label>
                <input type="number" name="price" class="form-control" id="price" required>
              
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection