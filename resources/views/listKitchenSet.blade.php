@extends('layout/main')

@section('title', 'Katalog Sofa - SofySofa')
@section('css', 'css/other-pages.css')
        
@section('homeContent')
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">SofySofa</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="/" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                        
                        <li class="nav-item dropdown font-weight-bold">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GALLERY
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/listSofa">SOFA</a>
                        <a class="dropdown-item" href="/listKulitSofa">KULIT SOFA</a>
                        <a class="dropdown-item" href="/listKitchenSet">KITCHEN SET</a>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endsection