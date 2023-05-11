<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <style>
        body {
            background-image: url(foto/bg1.jpg);
            background-size: cover;
        }
    </style>
</head>

<style>
    .a a:hover{
        color: #0099ff;
    }
</style>

<body class="p-3 mb-2 text-dark position-absolute top-50 start-50 translate-middle">
    <center style=" background-color: white; padding: 70px; border-radius: 30px;">
        <h1>Register Page</h1>
        <hr>
        <br>
        <form method="POST" action="register_proses.php">
            <input style="width: 240px; margin: 5px; border-radius: 10px; padding: 5px; border-color: black;" type="text" name="username" placeholder="Username" class="input">
            <br>
            <input style="width: 240px; margin: 5px; border-radius: 10px; padding: 5px; border-color: black;" type="password" name="password" placeholder="Password" class="input">
            <br>
            <input style="width: 240px; margin: 5px; border-radius: 10px; padding: 5px; border-color: black;" type="submit" name="" value="Register" class="input">
        </form>
        <div style="display: flex; justify-content: center; gap: 10px;" class="a">
            <p>Sudah punya akun? </p> <a style=" color: black; text-decoration: none;" href="login.php">Login disini</a>
        </div>
        
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>