@extends('layout/main')

@section('title', 'Sofy Sofa ID')
@section('css', 'css/style.css')

@section('navbar')
<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top py-3">
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

<div id="bg-img">
  <div class="container home-text">
    <div class="pt-5 text-white">
      <header class="py-5 mt-5">
        <br><br><br><br><br>
        <h1 class="display-4">Buat Sofa dan Dapur Di Rumah Menjadi Lebih Nyaman</h1>
        <p class="lead mb-0">Solusi mudah untuk membeli, memperbaiki, menambahkan sofa dan dapur <br> dirumah anda
          dengan harga yang terjangkau.</p>
      </header>
      <div class="py-5"></div>
      <div class="py-5"></div>
    </div>
  </div>
</div>
@endsection

@section('homeContent')

<div class="container" id="home-about">
  <div class="row about-section">
    <div class="col" id="logo-about">
      <img src="css/logo-about.jpeg" alt="">
    </div>
    <div class="col subtitle-about">
      <h2>Tentang Kami</h2>
      <p align='justify'> Sofy Sofa & Interior Design berdiri sejak Maret tahun 1994, bergerak dalam bidang penjualan
        dan perbaikan sofa,
        serta membantu mewujudkan desain dapur impian di rumah anda dengan material
        yang berkualitas dengan harga terjangkau.</p>
      <p>
        Hanya dengan mengontak kami, anda dapat berkonsultasi mengenai
        kebutuhan sofa dan kitchen set yang anda inginkan.</p>
    </div>
  </div>
</div>

<div class="container subtitle-services">
  <h2>Jasa Kami</h2>
</div>

<div class="test-slider">
  <div class="slider owl-carousel owl-theme owl-load owl-drag">

    <div class="card">
      <div class="img img-card"><img src="css/jual_sofa.jpeg" alt=""></div>
      <div class="content">
        <div class="card-title"><strong>Jual Sofa</strong></div>
        <div class="description">
          <p> SofySofa menyediakan berbagai jenis pilihan sofa untuk rumah impian anda dengan harga yang terjangkau.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="img img-card"><img src="css/cuci_sofa.png" alt=""></div>
      <div class="content">
        <div class="card-title"><strong>Cuci Sofa</strong></div>
        <div class="description">
          <p> SofySofa mencuci sofa anda yang kotor menjadi bersih dan wangi dengan harga yang terjangkau.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="img img-card"><img src="css/jual_sofa2.jpeg" alt=""></div>
      <div class="content">
        <div class="card-title"><strong>Perbaikan Sofa</strong></div>
        <div class="description">
          <p> SofySofa memperbaiki kulit dan isi sofa anda yang telah usang menjadi seperti baru kembali.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="img img-card"><img src="css/kitchen-set.jpeg" alt=""></div>
      <div class="content">
        <div class="card-title"><strong>Kitchen Set</strong></div>
        <div class="description">
          <p>Sofy Kitchen Set dapat membantu mewujudkan dapur impian anda dengan menyediakan banyak variasi.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="img img-card"><img src="css/kitchen-set.jpeg" alt=""></div>
      <div class="content">
        <div class="card-title"><strong>Jual Gorden</strong></div>
        <div class="description">
          <p>SofySofa menerima jasa pembuatan gorden untuk memperindah lingkungan ruangan anda.</p>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection