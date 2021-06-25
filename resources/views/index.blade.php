@extends('layouts.lay')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 bg">
      <div class="container-fluid py-5 ">
        <div class="container">
          <p class="bg-text-1">Selamat Datang di Website</p>
          <h1 class="bg-text-2">Jaringan Dokumentasi<br>dan Informasi Hukum</h1>
        </div>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <p class="lead">Meneguhkan Kota Yogyakarta sebagai Kota Nyaman Huni dan Pusat Layanan Jasa yang Berdaya Saing Kuat untuk Keberdayaan 
Masyarakat dengan Berpijak pada Nilai Keistimewaan</p>
      </div>
    </div>

    <div class="container-fluid py-5 bg2">
      <div class="container">
        <div class="row featurette">
          <div class="col-md-5">
            <p class="display-4">Kami adalah salah satu <br> <span> firma hukum terkemuka di Indonesia,</span> <br>
            melayani yang terbaik untuk client kami. <br></p>
          </div>
          <div class="col-md-7">
            <img src="{{ asset('img/Foto-1.png') }}" alt="image" height="420" width="700"/>
          </div>
        </div>
      </div>
    </div>
    

@endsection