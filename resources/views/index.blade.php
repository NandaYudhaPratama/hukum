@extends('layouts.lay')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 bg">
      <div class="container-fluid py-5 ">
        <div class="container">
          <p class="bg-text-1">Selamat Datang</p>
          <h1 class="bg-text-2">Jaringan Dokumentasi<br>dan Informasi Hukum</h1>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 bg2">
      <div class="container">
        <div class="row featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
          </div>
          <div class="col-md-7">
            <img src="{{ asset('img/Foto-1.png') }}" alt="image" height="420" width="700"/>
          </div>
        </div>
      </div>
    </div>
    

@endsection