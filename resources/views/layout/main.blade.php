<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="@yield('css')">

    <title>@yield('title')</title>
</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=6281280907012&text=Halo%20Sofy%20Sofa!%20Ada%20yang%20ingin%20saya%20tanyakan."
        class=" float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    {{-- Navbar --}}
    @yield('navbar')

    {{-- Konten Utama --}}
    @yield('homeContent')

    <section id="contact"></section>
    <div class="container contact">
        <div class="container home-contact">
            <div class="row contact-section">
                <div class="col-3 contact-title">
                    <h1><strong>Kontak Kami</strong></h1>
                </div>
                <div class="col contact-subtitle">

                    <div class="row" id="subject1">
                        <div class="col-2">
                            <span><img src="css/clock.png" alt=""></span>
                        </div>
                        <div class="col-10 contact-subject">
                            <h3>Jam Operasional</h3>
                            <p class="contact-description"> Senin - Minggu: 08:00 - 20:00 WIB</p>
                        </div>
                    </div>

                    <div class="row" id="subject2">
                        <div class="col-2">
                            <span><img src="css/location-pin.png" alt=""></span>
                        </div>
                        <div class="col-10 contact-subject">
                            <h3>Alamat</h3>
                            <p class="contact-description"> Jln. Kesehatan Raya No. 26, <br> Bintaro, <br> Jakarta
                                Selatan</p>
                        </div>
                    </div>

                    <div class="row" id="subject3">
                        <div class="col-2">
                            <span><img src="css/whatsapp-logo-variant.png" alt=""></span>
                        </div>
                        <div class="col-10 contact-subject">
                            <h3>Whatsapp</h3>
                            <p class="contact-description"> +62 812-8090-7012</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-copyright text-center py-1" style="margin-top: -1%">
            <p>Copyright © 2020 Sofy Sofa & Interior Design ID</p>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverpause: true,
        responsiveClass: true,
        responsive:{
          320:{
            items: 1,
            loop: true
          },

          1000:{
            items: 3,
            loop: true
          }
        }
      })

        // Select all links with hashes
            $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                    } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                    };
                });
                }
            }
            });
    </script>
</body>

</html>