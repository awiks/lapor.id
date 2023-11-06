<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header id="header" class="fixed-top header-transparent">
        <div class="container">
            <div class="logo float-start">
                {{-- <a href="index.html"><img src="{{ asset('image/logo-white.png') }}" alt="" class="img-fluid"></a> --}}
                <h1 class="text-white"><a href="index.html"><span>Lapor.ID</span></a></h1>
            </div>

            <nav class="nav-menu float-end d-none d-lg-block">
                <ul>
                    <li><a href="#">Masuk</a></li>
                    <li><a href="#">Daftar</a></li>
                </ul>
            </nav>

        </div>
    </header>
    
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container">
            <h2>Layanan Pengaduan Online Masyarakat</h2>
            <p>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
            <div class="row mt-4">
                <div class="col-12 col-lg-8 m-auto">

                </div>
            </div>
           <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" >
                        </div>
    
                        <div class="mb-3">
                            <label class="form-label">Isi Pengaduan anda</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
    
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" >
                        </div>
    
                    </div>
                    <div class="card-footer">
                        dd
                    </div>
                </div>
            </div>
           </div>

        </div>
        
    </section>

   

    <script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>