@extends('layouts.app')
 
@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="card"> 
          <div class="card-body p-3">
            <h5>Jual Rumah</h5> 
            <hr>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name" class="form-control-label">Judul</label>
                <input type="text" name="name" class="form-control" id="name" >
              </div>
              <div class="form-group">
                <label for="image" class="form-control-label">Gambar</label>
                <input type="file" name="image" class="form-control form-control-file" id="image" accept=".jpg, .png, .svg" >
              </div>
              <div class="form-group">
                <label for="description" class="form-control-label">Deskripsi</label>
                <textarea rows="6" name="description" class="form-control" id="description" ></textarea>
              </div>

              <!-- <div class="form-group">
                <label for="">Sertifikasi </label>
                <div class="form-group" id="sertifikasi">

                  <style>
                  .btn-custom {
                    transition: background-color 0.3s ease;
                  }

                  .btn-custom:hover, .btn-custom:focus, .btn-custom:active {
                    background-color: #c8f8f6 !important;
                    border-color: #002f34 !important;
                  }
                  </style>
                  
                  <button type="button" class="btn btn-sm btn-outline-light text-dark mr-2 btn-custom">SHM - Sertifikat Hak Milik</button>
                  <button type="button" class="btn btn-sm btn-outline-light text-dark mr-2 btn-custom">HGB - Hak Guna Bangun</button>
                  <button type="button" class="btn btn-sm btn-outline-light text-dark mt-2 btn-custom">Lainnya (PPJB, Girik, Adat, dll)</button>
                </div>
              </div> -->
              
              <script>
              window.onload = function() {
                var priceInput = document.getElementById('price');

                priceInput.addEventListener('input', function (e) {
                  var num = e.target.value.replace(/[^\d]/g, '');
                  e.target.value = num ? parseFloat(num).toLocaleString('id-ID') : '';
                });

                // Get the form and add a submit event listener
                var form = priceInput.form;
                form.addEventListener('submit', function (e) {
                  // Before submitting the form, format the price back to a plain number
                  var num = priceInput.value.replace(/[^\d]/g, '');
                  priceInput.value = num ? parseFloat(num) : '';
                });
              };
              </script>

              <div class="form-group">
                <label for="price" class="form-control-label">Harga</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                  </div>
                  <input type="text" name="price" class="form-control" id="price" >
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Jual</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection