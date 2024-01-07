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
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $product->name }}</p>
                  <h5 class="font-weight-bolder mb-0">
                    Rp. {{ number_format($product->price, 0, '.', '.') }}
                  </h5>
                  <small class="description">
                    {!! nl2br(e($product->description)) !!}
                  </small>

                  <a href="#" class="read-more" style="font-size: 0.8em;">Lebih Banyak</a>

                  <script>
                    var description = document.querySelector('.description');
                    var readMore = document.querySelector('.read-more');

                    var fullDescription = description.innerHTML;
                    var shortDescription = fullDescription.slice(0, 250) + '...';

                    description.innerHTML = shortDescription;

                    readMore.addEventListener('click', function (e) {
                      e.preventDefault();

                      if (description.innerHTML === shortDescription) {
                        description.innerHTML = fullDescription;
                        readMore.innerHTML = 'Lebih Sedikit';
                      } else {
                        description.innerHTML = shortDescription;
                        readMore.innerHTML = 'Lebih Banyak';
                      }
                    });
                  </script>
                  <p>{{ $product->sertifikasi }}</p>
                </div>
              </div>
              <div class="col-12 d-flex gap-2">
                <form action="{{ route('product.approve', $product->id) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-success">Terima</button>
                </form>
                <form action="{{ route('product.reject', $product->id) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">Tolak</button>
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
            <h4>Kamu Belum Memiliki Rumah Yang Dijual</h4>
            <a href="{{ route('product.create') }}" class="btn bg-gradient-primary">Tambah Rumah</a>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>
<!-- /.content -->
@endsection