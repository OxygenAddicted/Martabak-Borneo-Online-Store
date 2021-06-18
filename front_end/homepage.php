<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Logo -->
    <link rel="icon" href="./upload/logo/logo_borneo.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <!-- Font Montserrat --> 
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Pooper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    
    
    <title>Martabak Borneo</title>
</head>

<body>
    <style>
        b{
            font-family: 'Montserrat', sans-serif;
        }
    
        /* Cart Button */
        
        .float{
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #fbff00;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 6px rgb(168, 172, 123);
            z-index: 100;
        }

        .float:hover{
            background: #f4f804;
            border: 1px solid #f8f40c;
            color: black;
        }

        .float button{
            background-color: transparent;
            margin-top:22px;
            border: none;
        }

        /* Navbar */

        .navbar{
			background: #fbff00;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			border-radius: 0px 0px 50px 50px;
			padding: 30px;
		}

        .nav-item{
            font-size: 20px;
        }
        
        .form-control:valid{
            background: #f7f564;
            border: 1px solid #f5f840;
            box-sizing: border-box;
            box-shadow: inset 0px 4px 5px rgba(0, 0, 0, 0.25);
            border-radius: 22px;
        }
        
        .btn{
            color: black;
            background: #fbff00;
            border: 1px solid #f5f129;
            box-sizing: border-box;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 22px;
        }

        .btn:hover{
            background: #f4f804;
            border: 1px solid #f8f40c;
            color: black;
        }

        /* Main Content */

        .main-content{
            margin: 7% 0;
            height: max-content;
        }

        .main-content #logo{
            display: inline-block;
            width: 40%;
        }

        .main-content #logo img{
            width: 70%;
            margin-left: 30%;
        }

        .main-content #text-container{
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            width: 60%;
        }

        .main-content #text-container img{
            width: 70%;
        }

        .carousel-item{
            background: no-repeat scroll center scroll;
            -webkit-background-size: cover;
            background-size: cover;
        }

        #carouselExampleCaptions .carousel-item::before{
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: black;
            opacity: 0.4;
        }

        /* Container */

        #products, #contact{
            margin: 100px 15%;
            padding: 100px 0;
        }

        #outlet{
            padding: 100px 15%;
            background: #fbff00;
            border-radius: 50px;
            text-align: justify;
        }

        .content-title{
            font-weight: 700;
            font-size: 36px;
            margin: 0 0 30px 0;
        }

        /* Product */

        .card-title{
            font-size: 24px;
        }

        .btn-group{
            margin: 10px 0;
        }

        .btn-group button{
            width: 100px;
        }

        /* Outlet */

        .content-text{
            font-size: 24px;
            margin: 0 0 70px 0;
        }

        .content-list{
            font-size: 24px;
        }

        /* Contact */

        #contact table{
            margin: 0 0 80px 0;
        }

        #contact td{
            font-size: 28px;
        }

        .map-container{
            overflow: hidden;
            position: relative;
            margin: 0 0 80px 0;
            border-radius: 30px;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .map-container iframe{
            height: 100%;
            width: 100%;
        }

        #contact img{
            width: 60px;
            border-radius: 12px;
            margin: 0 16px 16px 0;
        }

        #contact .form-floating{
            font-size: 18px;
        }

        #contact button{
            font-size: 18px;
        }

        /* Footer */

        .footer{
            background-color: #fbff00;
        }

        #foot-info{
            margin: 30px 0;
        }

        #foot-info .title-p{
            margin: 0 0 20px 0;
            font-weight: 700;
            font-size: 24px;
        }

        #foot-info ul, #foot-info li{
            margin: 12px 0 0 0;
            padding: 0;
            font-size: 20px;
        }

        /* -------------------- */

        #foot-logo{
            margin: 30px 0;
            display: inline-flex;
            justify-content: center;
        }

        #foot-logo .fcl-bg{
            background-color: #edf05c;
            border-radius: 75px;
            margin: 10px 0;
            width: 150px;
        }

        #foot-logo .fcl-nm{
            font-size: 20px;
            width: 150px;
        }

        #foot-logo img{
            margin: 15px;
            width: 120px;
        }

        /* -------------------- */

        #foot-contact .fc-contc{
            margin: 30px 0;
            padding: 73px 0;
        }

        #foot-contact .fcc-bg{
            display: inline-flex;
            width: 80px;
            height: 80px;
            background-color: #FDF2EC;
            border-radius: 40px;
            margin: 5px;
        }

        #foot-contact img{
            width: 40px;
            margin: 20px;
            border-radius: 12px;
        }

        /* -------------------- */

        .f-copyright{
            font-size: 16px;
            margin: 0 130px;
            padding: 36px 0 30px;
        }

    </style>

    <!-- Cart Floating Button -->
    <a class="float" href="cart.php">
        <button class="button fa fa-shopping-cart" type="submit"></button>
    </a>

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg py-4 navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#outlet">Outlet dan Pemesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn fa fa-search me-1" type="submit"></button>
                </form>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="main-content">
        <div id="logo">
            <a href="#"><img src="./upload/logo/logo_borneo.png" alt="Sweetie Batter"></a>
        </div><div id="text-container">
            <img src="./upload/img/teks.png" alt="Ahlinya martabak, Dibuat tanpa pewarna buatan">
        </div>
    </div>
    
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="upload/product/car_1.jpg" class="d-block w-100" alt="carousel_1">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Martabak Manis</b></h5>
                    <p>Martabak manis untuk memaniskan <i>mood</i>-mu kapanpun kamu mau.</p>
                </div>
            </div>
                <div class="carousel-item">
                <img src="upload/product/car_2.jpg" class="d-block w-100" alt="carousel_2">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Dibuat dengan sepenuh hati dengan berbagai macam adonan rasa</b></h5>
                    <p>Original, cokelat, atau matcha, semaumu, sesukamu.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="upload/product/car_3.jpg" class="d-block w-100" alt="carousel_3">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Martabak Telur</b></h5>
                    <p>Gurih-gurih dengan isian mewah memang cocok di saat lapar.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="upload/product/car_4.jpg" class="d-block w-100" alt="carousel_4">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Pilih isian sesuai seleramu</b></h5>
                    <p>Kombinasi telur dengan daging sapi, ayam, kornet, sosis, atau yang lainnya memang gak pernah salah.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Our Products -->
    <div id="products">
        <p class="content-title">Tinggal pilih...</p>
        <div class="row row-cols-1 row-cols-md-2 g-5">
            <div class="col">
                <div id="carouselExampleFade1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleFade1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleFade1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleFade1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleFade1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="upload/product/s_1.jpg" class="d-block w-100" alt="Manis_1">
                        </div>
                        <div class="carousel-item">
                            <img src="upload/product/s_2.jpg" class="d-block w-100" alt="Manis_2">
                        </div>
                        <div class="carousel-item">
                            <img src="upload/product/s_3.jpg" class="d-block w-100" alt="Manis_3">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Martabak Manis</b></h5>
                                <!-- start add cart -->
                                <form action="index.php#products" method="post" class="d-grid gap-2" id="addtocart">
                                    <button type="submit" class="btn" name="add">Tambah ke keranjang</button>
                                    <input type="hidden" name="product_name" value="martabak_manis">
                                </form>
                                <!-- end add cart -->
                    </div>
                </div>
            </div>

            <div class="col">
                <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleFade2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./upload/product/t_1.jpg" class="d-block w-100" alt="Telur_1">
                        </div>
                        <div class="carousel-item">
                            <img src="./upload/product/t_2.jpg" class="d-block w-100" alt="Telur_2">
                        </div>
                        <div class="carousel-item">
                            <img src="./upload/product/t_3.jpg" class="d-block w-100" alt="Telur_3">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Martabak Telur</b></h5>
                        <div class="d-grid gap-2" id="addtocart">
                            <!-- start add cart -->
                            <form action="index.php#products" method="post" class="d-grid gap-2" id="addtocart">
                                <button type="submit" class="btn" name="add">Add to Cart</button>
                                <input type="hidden" name="product_name" value="martabak_telur">
                            </form>
                            <!-- end add cart -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Outlet -->
    <div id="outlet">
        <p class="content-title">Outlet dan Pemesanan</p>
        <p class="content-text">Martabak Borneo memiliki 9 <i>outlet</i> yang tersebar di seluruh penjuru Jakarta</p>
        <ul class="content-list">
            <li>Jl. Setiabudi Tengah 2 no. 48, Jakarta Selatan                   (Sebelah Apotik Setiabudi)</li>
            <li>Jl. Jatiwaringin Raya no. 48, Bekasi                             (Depan Master Snow Carwash)</li>
            <li>Jl. Tebet Barat Dalam no. 55, Jakarta Selatan                    (Sebelah BNI)</li>
            <li>Jl. Cikajang no. 74, Kebayoran Baru, Jakarta Selatan             (Pasar Santa)</li>
            <li>Jl. Pejaten Raya no. 16, Jakarta Selatan                         (Pasar Minggu, seberang cuci mobil)</li>
            <li>Jl. Cipete Raya no. 2E, Jakarta Selatan                          (Sebelah Family Mart)</li>
            <li>Jl. Raya Kelapa Hybrida Blok RA2 no. 1, Jakarta Utara            (Depan Bakmi Lily)</li>
            <li>Jl. Danau Jl. Agung Tengah 4 no. 4, Sunter Agung, Jakarta Utara  (Sebelah Flying Pig)</li>
            <li>Jl. Cempaka Putih Tengah 2 no. 39, Jakarta Pusat                 (Sebelah Care Terasa)</li>
            <br>
            <li>Tersedia pula <i>online ordering</i> melalui GoFood dan GrabFood.</li>
        </ul>
    </div>
    
    <!-- Contact Us -->
    <div id="contact">
        <p class="content-title">Contact Us</p>
        <table>
            <tr>
                <td><img src="upload/logo/loc_logo.png" alt="Location"></td>
                <td>Jakarta, Indonesia</td>
            </tr>
            <tr>
                <td><img src="upload/logo/email_logo.png" alt="Email"></td>
                <td>martabakborneo@gmail.com</td>
            </tr>
            <tr>
                <td><img src="upload/logo/tel_logo.png" alt="Telephone"></td>
                <td>+62 811 1706 603</td>
            </tr>
            <tr>
                <td><img src="./upload/logo/logo_wa.png" alt="WhatsApp"></td>
                <td>+62 811 1706 603</td>
            </tr>
            <tr>
                <td><img src="./upload/logo/logo_ig.png" alt="Instagram"></td>
                <td>@martabakborneo</td>
            </tr>
        </table>

        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254832.50415933214!2d98.52940908067633!3d3.642618293240537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1619705611662!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <form class="needs-validation">
            <div class="form-floating mb-3">
                <input type="name" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 120px"></textarea>
                <label for="floatingTextarea2">Message</label>
            </div>

            <div class="form-floating mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck"> Send a copy to email</label>
                </div>
            </div>

            <button type="submit" class="btn btn-lg col-4">Submit</button>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <footer>
            <div class="container p-4 text-center">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <div class="mb-0" id="foot-info">
                            <p class="title-p">Pemesanan Catering/Acara</p>
                            <ul class="list-unstyled">
                                <li><i>Pre-Order</i> maksimum H-3</li>
                                <li>Via Call / WA</li>
                                <li>Diberlakukan harga khusus</li>
                                <li>Khusus Jabodetabek</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <div class="mb-0" id="foot-logo">
                            <div class="logo-nb">
                                <div class="fcl-bg">
                                    <a href="#"><img src="./upload/logo/logo_borneo.png" alt="Martabak Borneo"></a>
                                </div>
                                <div class="fcl-nm">
                                    <p>Martabak Borneo est. 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <div class="mb-0" id="foot-contact">
                            <div class="fc-contc">
                                <div class="fcc-bg">
                                    <a href="tel:08111706603" target="_blank"><img src="./upload/logo/tel_logo.png" alt=""></a>
                                </div>
                                <div class="fcc-bg">
                                    <a href="https://wa.me/08111706603" target="_blank"><img src="./upload/logo/logo_wa.png" alt=""></a>
                                </div>
                                <div class="fcc-bg">
                                    <a href="https://www.instagram.com/martabakborneo/" target="_blank"><img src="./upload/logo/logo_ig.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-copyright">
                    <div class="f-cr">
                    Copyright &copy;2020 Martabak Borneo. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
