@extends('layout/main')

@section('title', 'Katalog Sofa - SofySofa')
@section('css', 'css/sofa.css')

@section('navbar')
<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top py-3" style="background-color:  rgb(122, 4, 97)">
    <div class="container" id="collapse">
      <div class="row">
        <div class="col-12 navbar-brand text-uppercase font-weight-bold dis-flex">
          <span>
            <a href="#about">
              <img src="css/logo.png" id="weblogo">
            </a>
          </span>
          <span>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
              class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          </span>
        </div>
        <div class="col-12">
          <div id="navbarSupportedContent" class="collapse navbar-collapse text-right">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/" class="nav-link text-uppercase font-weight-bold">BERANDA<span
                    class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="#contact" class="nav-link text-uppercase font-weight-bold" id="about">KONTAK
                  KAMI</a></li>
              <li class="nav-item dropdown font-weight-bold">
                <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  KATALOG
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/listSofa">SOFA</a>
                  <a class="dropdown-item" href="/listKitchenSet">KITCHEN SET</a>
                  <a class="dropdown-item" href="/listGorden">GORDEN</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>

<div class="container">
  <h1 class="text-center title-sofa">Katalog Sofa</h1>
  <hr>
  <div class="container product-all">

    <div class="row">

      <!-- TULIS PRODUK DISINI !! -->

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_1.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-001</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_2.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-002</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_3.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-003</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_4.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-004</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_5.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-005</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_6.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-006</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_7.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-007</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_8.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-008</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_9.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-009</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_10.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-010</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_11.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-011</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_12.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-012</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_13.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-013</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_14.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-014</h4>
      </div>

      <div class="col-6 col-md-4 product-grid">
        <div class="image product-image">
          <img src="css/sofa_15.jpeg" class="w-100">
        </div>
        <h4 class="text-center product-title"> SS-JS-015</h4>
      </div>

    </div>
  </div>
</div>
@endsection