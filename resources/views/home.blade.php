@include('partials.navbar')
@extends('layouts.all')

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#8888" />
        </svg> -->
        <img src="img/bg1.png" alt="">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Malikah Food</h1>
            <h3>Mie Ayam dan Bakso Menu andalan dari Malikah Food,</h3>
            <h3>yuk langsung cobain!</h3>
            <p><a class="btn btn-lg btn-warning" href="/categories">Malikah Food</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
        </svg> -->
        <img src="img/bg2..png" alt="">


        <div class="container">
          <div class="carousel-caption">
            <h1>Malikah Drink</h1>
            <h3>Mulai dari Boba sampai minuman berkhasiat dan segar lainnya ada di Malikah Drink</h3>
            <p><a class="btn btn-lg btn-warning" href="/categories">Malikah Drink</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
        </svg> -->
        <img src="img/bg3.png" alt="">


        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Malikah Bakery</h1>
            <h3>semua olahan Malikah Bakery emang ga ada tandingannya! </h3>
            <h3>masih belum cobain? yuk tunggu apa lagi!</h3>
            <p><a class="btn btn-lg btn-warning" href="/categories">Malikah Bakery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <!-- Three columns of text below the carousel -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider mb-5">
    <center>
      <h1>Apa Kata Mereka?</h1>
    </center>

    <div class="row featurette mt-5">
      <div class="col-md-7">
        <h2 class="featurette-heading">Malikah nomor 1,<span class="text-muted"> Demi Malikah saya rela ngantri</span></h2>
        <p class="lead">rasa dapet Malikah setelah bersusah payah ngantri itu Maasyaallah banget, apalagi Malikah Drink nya
          saya paling suka jus mangga nya, ga paham lagi apa yang bikin saya jatuh cinta sama Jus Mangga Malikah Drink. kalo sekali minuma
          ga bakal bisa berhenti, saking enak nya. enak, sehat, halal, Malikah Banget!
        </p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg> -->
        <img src="img/cus1.jpg" alt="" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Akhwati suka banget jajanan Malikah, <span class="text-muted">Juara deh!</span></h2>
        <p class="lead">Saya kalau lagi kumpul sama Akhwat, pasti suguhannya Malikah. semua produk Malikah saya suka, dari Bakery, Minuman, Mie Ayam semuanya saya suka.
          Makan semua produk Malikah lengkap banget, makanan pembuka nya pake Bakery pisang coklat, menu utamanya Mie Ayam Bakso Telur, dan Minumnya Es Jeruk
          Maasyaallah, Malikah emang temen terbaik buat ngumpul-ngumpul.
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg> -->
        <img src="img/cus.jpg" alt="" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Saya greget kalo sampe kehabisan produk Malikah <span class="text-muted">sesuka itu.</span></h2>
        <p class="lead">Saya orangnya suka banget makan, bagi saya roti itu cuma cemilan bukan makanan pokok, yaa biasa lah orang indonesia
          saya ga cukup 3 kalo sekali makan malikah bakery, bukan karena ukurannya kecil tapi rasanya NAGIH banget pengen makan lagi dan lagi.
          mie ayam Malikah juga paling asik kalo di makan siang-siang, karena saya suka banget sama kuah kaldu nya yang pekat.
        </p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg> -->
        <img src="img/cus2.jpg" alt="" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  @include('layouts.footer')
</main>