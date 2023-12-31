@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Approve</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Approve</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      @if($products->count() > 0)
      @foreach($products as $product)
      <div class="col-xl-4 col-sm-6 mb-4">
        <div class="card">
          <div class="card-header text-center">
            <img src="{{ asset('assets/img') }}/{{ $product->image }}"
              style="height: 200px; width: 100%; object-fit: contain;">
          </div>
          <div class="card-body p-3">
            <div class="row">
              <div class="col-12">
                <div class="numbers">
                  <small class="d-flex align-items-center text-capitalize">
                    <i class="ri-store-2-fill me-1"></i>
                    <span>{{ $product->seller->name }}</span>
                  </small>
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $product->name }}</p>
                  <h5 class="font-weight-bolder mb-0">
                    Rp. {{ number_format($product->price, 0, '.', '.') }}
                  </h5>
                  <small class="description">
                    {!! nl2br(e($product->description)) !!}
                  </small>

                  <a href="#" class="read-more" style="font-size: 0.8em;">Lebih Banyak</a>

                  <script>
                    window.onload = function() {
                      var descriptions = document.querySelectorAll('.description');
                      var readMores = document.querySelectorAll('.read-more');

                      for (let i = 0; i < descriptions.length; i++) {
                        let fullDescription = descriptions[i].innerHTML;
                        let shortDescription = fullDescription.slice(0, 250) + '...';
                        let isExpanded = false;

                        descriptions[i].innerHTML = shortDescription;

                        readMores[i].addEventListener('click', function(e) {
                          e.preventDefault();
                          if (!isExpanded) {
                            descriptions[i].innerHTML = fullDescription;
                            readMores[i].textContent = 'Read less';
                            isExpanded = true;
                          } else {
                            descriptions[i].innerHTML = shortDescription;
                            readMores[i].textContent = 'Read more';
                            isExpanded = false;
                          }
                        });
                      }
                    }
                  </script>
                  <p>{{ $product->sertifikasi }}</p>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-end">
                <form action="{{ route('product.reject', $product->id) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger mr-2">Tolak</button>
                </form>
                <form action="{{ route('product.approve', $product->id) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-success">Terima</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <div class="col-12">
        <div class="card">
          <div class="card-body text-center p-3">
            <h4>Tidak Ada Rumah Yang Sedang Menunggu Approval</h4>
            <!-- <a href="{{ route('product.create') }}" class="btn bg-gradient-primary">Tambah Rumah</a> -->
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>
<!-- /.content -->
@endsection