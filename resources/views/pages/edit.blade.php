@extends('layouts.app')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="card"> 
          <div class="card-body p-3">
            <h5>Edit Produk</h5> 
            <hr>
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT') <!-- Method spoofing for PUT request -->

              <div class="form-group">
                <label for="name" class="form-control-label">Judul</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
              </div>

              <div class="form-group">
                <label for="image" class="form-control-label">Gambar</label>
                <input type="file" name="image" class="form-control form-control-file" id="image" accept=".jpg, .png, .svg">
                <img src="{{ asset('path/to/your/image/folder/' . $product->image) }}" alt="Product Image" style="max-width: 100px; margin-top: 10px;">
              </div>

              <div class="form-group">
                <label for="description" class="form-control-label">Deskripsi</label>
                <textarea rows="6" name="description" class="form-control" id="description" required>{{ $product->description }}</textarea>
              </div>

              <div class="form-group">
                <label for="">Sertifikasi </label>
                <!-- Your certification buttons go here -->
              </div>

              <script>
                // Your existing JavaScript for formatting price
              </script>

              <div class="form-group">
                <label for="price" class="form-control-label">Harga</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                  </div>
                  <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
                </div>
              </div>

              <div class="form-group">
                <button class="btn btn-primary">Simpan Perubahan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
