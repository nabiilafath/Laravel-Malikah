@extends('layouts.main')
@section('container')

<!-- <h1 class="mb-5">Post Categories</h1> -->
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <p class="fs-5 text-muted"></p>
    <p class="fs-5 text-muted"></p>
    <h1 class="display-4 fw-normal">Malikah Factory</h1>
    <p class="fs-5 text-muted"></p>

    <p class="fs-5 text-muted">Malikah memiliki Factory yang paling sering dikunjungi oleh mahasiswi UNIDA Gontor Putri
        diantaranya ada 3 factory yaitu Malikah Food, Malikah Drink dan Malikah Bakery.
    </p>
</div>

<div class="container">
    <div class="row mb-3 mt-3">
        @foreach ($categories as $category)


        <div class="col-4 mb-4">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-dark">
                    <img src="img/cate.png" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(255,215,0,0.8)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

</div>

@include('layouts.footer')
@endsection