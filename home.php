<?php 
	session_start();
	if(empty($_SESSION['username'])){
		header("location: login.php?message=belum_login");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="kategori.css">
</head>

<style>
    nav .container-fluid ul li a, nav .container-fluid a{
        color: white;
    }
    nav .container-fluid ul li a:hover, nav .container-fluid a:hover{
        color: #0099ff;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="foto/LW.png" alt="" style="height: 40px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="justify-content: center;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Top Wear
                        </a>
                        <ul class="dropdown-menu bg-dark">
                            <li><a class="dropdown-item" href="t-shirt.php">Aadoreity T-shirt</a></li>
                            <li><a class="dropdown-item" href="hodie.php">Aadoreity Hoodie</a></li>
                            <li><a class="dropdown-item" href="sweatshirt.php">Aadoreity Sweatshirt</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="navbar-brand" href="cart.php"><img src="foto/cart.png" alt="" style="height: 40px;"></a>
                <a href="logout.php"><button class="btn btn-outline-danger" type="submit">Logout</button></a>
            </div>
        </div>
    </nav>

    
    <section class="section">
        <div class="slider">
            <div class="slide">
                <input type="radio" name="radio-btn" id="radio1" />
                <input type="radio" name="radio-btn" id="radio2" />
                <input type="radio" name="radio-btn" id="radio3" />
                <input type="radio" name="radio-btn" id="radio4" />

                <div class="st first">
                    <img src="foto/aadoreity.jpg" alt="" style="border-radius: 10px;"/>
                </div>
                <div class="st">
                    <img src="foto/bg1.jpg" alt="" style="border-radius: 10px;"/>
                </div>
                <div class="st">
                    <img src="foto/iklan.jpg" alt="" />
                </div>
                <div class="st">
                    <img src="foto/bg.jpg" alt="" />
                </div>

                
            </div>

            <div class="nav-m">
            <label for="radio1" class="m-btn"></label>
            <label for="radio2" class="m-btn"></label>
            <label for="radio3" class="m-btn"></label>
            <label for="radio4" class="m-btn"></label>
            </div>
        </div>
    </section>
    <div class="label">
        <h5 class="card-title">Aadoreity Product</h5>
    </div>
    
    <div class="row" style="justify-content: center;">
        <?php
            include('koneksi.php');

            $sql	= "SELECT * FROM pakaian";
            $i = 1;
            $query	= mysqli_query($connect, $sql);

            while ($data = mysqli_fetch_array($query)) {
        ?>

        <div style="margin-left: 10px; margin-right: 10px; margin-bottom: 50px; background-color: rgb(200, 200, 200); width:400px; padding: 10px; border-radius: 10px; align-items:center;">
            <a href="produk_pakaian.php?id=<?= $data['id_pakaian']; ?>"><button class="btn" type="button">
                <div class="col-3 d-flex">
                    <img src="foto/<?= $data['gambar']; ?>" alt="" style="height: 150px;">
                    <div style="text-align: left; margin-left: 25px; margin-top: 25px;">
                        <h5 class="card-title"><?= $data['nama']; ?></h5>
                        <p class="card-text">Rp <?= $data['harga']; ?></p>
                    </div>
                </div>
            </button></a>
        </div>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>