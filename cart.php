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
    <title>PROFIL PAGE</title>
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

    <div class="row" style="justify-content: center;">
        <div class="col-6 d-flex">
            
            <table>
                <?php
                    include 'koneksi.php';

                    $sql	= "SELECT * FROM pesanan_pakaian pp INNER JOIN pakaian p ON pp.id_pakaian = p.id_pakaian INNER JOIN ukuran_pakaian up ON pp.id_ukuran_pakaian = up.id_ukuran_pakaian";
                    
                    $i = 1;
                    $a = 0;
                    $n = 0;
                    $query	= mysqli_query($connect, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                        $n=$a+$data['harga'];
                        $a=$n;
                ?>
                <tr style="background-color: rgb(200, 200, 200); width: 500px; margin: 50px; padding: 10px; border-radius: 10px; display:flex;">
                    <td><img src="foto/<?= $data['gambar']; ?>" alt="" style="height: 150px;"></td>
                    <td>
                        <h5 class="card-title"><?= $data['nama']; ?></h5>
                        <p class="card-text"><?= $data['ukuran']; ?></p>
                        <p class="card-text">Rp <?= $data['harga']; ?></p>
                        <div class="d-flex">
                            <a href="edit.php?id=<?= $data['id_pesanan']; ?>"><button class="btn btn-outline-warning" type="submit" style="width: 100px; margin-left: 10px">Edit</button></a>
                            <a href="deletep.php?id=<?= $data['id_pesanan']; ?>"><button class="btn btn-outline-danger" type="submit" style="width: 100px; margin-left: 10px">Delete</button></a>
                        </div>
                    </td>
                </tr>
                <?php  }  ?>
            </table>
        </div>
        
        <div class="col-4 " style="background-color: rgb(200, 200, 200); margin: 50px; padding: 10px; border-radius: 30px;" >
            <center><h5>Price Detail</h5><br></center>
            <hr>
            <table>
                <tr>
                    <td>Price</td>
                    <td>: Rp <?= $n; ?></td>
                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td>: FREE</td>
                </tr>
            </table>
            <hr>
            Amount payable      Rp <?= $n; ?><br>
            <br>
            <center><a href="delete.php"><button class="btn btn-outline-success" type="submit" style="width: 100px;">Checkout</button></a></center>
        </div>
        
    </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>