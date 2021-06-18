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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Pooper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>

    <title>Martabak Borneo</title>
</head>

<body>
    <style>
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

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg py-4 navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#products">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn fa fa-search me-1" type="submit"></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Cart -->
    <div id="cart" style="margin: 100px 15%; font-family: 'Montserrat', sans-serif;">
        <?php
            include("back_end/koneksi.php");
        ?>

        <center>
            <?php
                if (isset($_POST["remove"])){
                    $rem = $_POST["remove_id"];
                    if (isset($rem)){
                        $del = "DELETE FROM testing2 WHERE id='$rem'";
                        mysqli_query($connection, $del);
                    }
                }
                if (isset($_POST["update"])){
                    $change = $_POST['change_id'];
                    if(isset($change)){
                        $nama_produk = $_POST['nama_produk'];
                        if ($nama_produk === "martabak_manis"){
                            $nama_produk = "martabak_telur";
                        }
                        else {
                            $nama_produk = "martabak_manis";
                        }
                        $chg = "UPDATE testing2 SET product= '$nama_produk' WHERE id='$change'";
                        mysqli_query($connection, $chg);
                    }
                } 
            ?>

            <table class="table table-striped" style="text-align: center; vertical-align: middle">
                <thead>
                    <td>No.</td>
                    <td>User ID</td>
                    <td>Product</td>
                    <td>Action</td>
                </thead>
                <?php
                    $sql = "SELECT * FROM testing2";
                    $result = mysqli_query($connection, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo 	"<td>" . ($i+1) . "</td>";
                        echo 	"<td>" . $row['user_id'] . "</td>";
                        echo 	"<td>" . $row['product'] . "</td>";
                        echo 	"<form action='cart.php' method='post'>";
                        echo 	"<td><button type='submit' name='remove' style='background-color: rgb(251, 255, 0); border: none; border-radius: 10px; padding: 8px; width: 100px'>Remove</button>
                                    <input type='hidden' name='remove_id' value='".$row['id']."'>";
                        echo 	"<button type='submit' name='update' style='background-color: rgb(251, 255, 0); border: none; border-radius: 10px; padding: 8px; width: 100px'>Change</button>
                                    <input type='hidden' name='change_id' value='".$row['id']."'>
                                    <input type='hidden' name='nama_produk' value='".$row['product']."'>    
                                </td>";
                        echo 	"</form>";
                        echo 	"</tr>";
                        ++$i;
                    }
                ?>
                </form>
            </table>

            <form action="index.php">
                <button type="submit" style="background-color: rgb(251, 255, 0); border: none; border-radius: 15px; padding: 8px; width: 100px">Exit</button>
            </form>
        </center>
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