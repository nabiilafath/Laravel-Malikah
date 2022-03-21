@extends('layouts.main')
@section('container')
<!-- <h1>HALAMAN ABOUT</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"> -->

<body class="sub_page">

    <div class="hero_area">
        <div class="bg-box">
            <img src="images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">

            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">

            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="img/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h1>
                                MALIKAH
                            </h1>
                            <h2>
                                📍 Malikah Food 1
                            </h2>
                        </div>
                        <p>
                            Malikah Food yang pertama berdiri, menyediakan berbagai macam menu, diantaranya yang terlaris adalah
                            Mie Ayam dan Bakso serta beberapa lauk pendamping lainnya. Malikah Food 1 ini berlokasi di belakang asrama
                            mahasiswi di gedung Siti Aminah. lokasi yang startegis karena di sekelilingnya terdapat saung dan bangku marmer
                            yang menjadi pelengkap dalam menikmati produk Malikah Food.
                        </p>
                        <div class="heading_container">

                            <h2>
                                📍 Malikah Food 2
                            </h2>
                        </div>
                        <p>
                            Karena banyaknya peminat Malikah Food dari setiap kalangan, Malikah memutuskan untuk mambuka cabang di gedung mesir, yang
                            lokasinya cukup jauh dari dapur umum, gedung mesir yang sebagai kelas perkuliahan menjadikan sebagai lokasi yang sangat startegis
                            untuk membuka cabang Malikah Food, dan pembeli juga tidak sebatas mahasiswi saja bahkan dosen dan mahasiswi kampus lain pun turut menikmati.
                        </p>
                        <div class="heading_container">

                            <h2>
                                📍 Malikah Drink
                            </h2>
                        </div>
                        <p>
                            Malikah Drink yang menyediakan aneka minuman segar dan menyehatkan berlokasi di antara asrama mahasiswi, yakni gedung Fatimah Azzahra
                            dan gedung Al-Azhar. lokasi yang sangat strategis untuk Malikah Drink karena dekat dengan Koperasi Mahasiswa dan KAMADA.
                        </p>
                        <div class="heading_container">

                            <h2>
                                📍 Malikah Bakery
                            </h2>
                        </div>
                        <p>
                            Lokasi Malikah Bakery masih satu atap dengan Malikah Drink, karena tempat pengolahan dan penjuala bakery ada di satu tempat, membuat Malikah Bakery memiliki Rasa
                            yang fresh, berbagai jenis roti yang dibuat Malikah Bakery juga menjadikan daya tarik tersendiri dari Malikah Bakery, produknya sering di distribusikan juga
                            ke gedung Mesir, agar para Mahasiswi yang sedang berkuliah di kelas mesir juga bisa menikmati Malikah Bakery.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->


    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>
@include('layouts.footer')
@endsection