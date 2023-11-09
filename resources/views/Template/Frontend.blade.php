<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('image/favicon.png') }}" type="image/x-icon" />
    <title>@stack('title')</title>
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/selectize/selectize.bootstrap5.css') }}">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header id="header" class="fixed-top header-transparent">
        <div class="container">
            <div class="logo float-start">
                {{-- <a href="index.html"><img src="{{ asset('image/logo-white.png') }}" alt="" class="img-fluid"></a> --}}
                <h1><a href="index.html"><span>報告.ID </span></a></h1>
            </div>

            <nav class="nav-menu float-end d-none d-lg-block">
                <ul>
                    <li><a href="#ModalLogin" data-bs-toggle="modal"> Masuk</a></li>
                    <li><a href="#" class="btn btn-outline-warning btn-block">Daftar</a></li>
                </ul>
            </nav>

        </div>
    </header>

    @yield('content')
    

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                          A108 Adam Street <br>
                          New York, NY 535022<br>
                          United States <br><br>
                          <strong>Phone:</strong> +1 5589 55488 55<br>
                          <strong>Email:</strong> info@example.com<br>
                        </p>
            
                      </div>

                      <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Tentang kami</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                          <a href="#" class="twitter"><i class="fa-brands fa-x-twitter"></i></a>
                          <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                          <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                          <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </footer>
    @stack('Modal')
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/function.js') }}"></script>
    @stack('Javascript')
</body>
</html>