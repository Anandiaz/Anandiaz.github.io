<?php 
require "../connection/conn.php";

if (isset($_POST['daftar'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    if($pass === $cpass){
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $result = mysqli_query($conn,"SELECT email from users where email = '$email'");

        if(mysqli_fetch_assoc($result)){
            echo "
            <script>
                alert('Username sudah ada!');
                document.location.href = 'register.php';
            </script>";
        }
        else{
            $result = mysqli_query($conn, "INSERT INTO users VALUES ('','$name','$email','$pass')");

            if(mysqli_affected_rows($conn) > 0){
                echo "
                <script>
                    alert('Register berhasil');
                    document.location.href = 'login.php';
                </script>";
            }
            else {
                echo "
                <script>
                    alert('Register gagal!');
                    document.location.href = 'register.php';
                </script>";
            }
        }
        
    } else {
            echo "
            <script>
                alert('Password tidak sama!');
                document.location.href = 'register.php';
            </script>";
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 7</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>

    <nav class="navbar" style="margin-bottom: 100px;">
        <div class="logo">
        <a href="#" id="profil"><img src="../img/profil.png"alt=""></a>
        </div>
        <div class="nav-content">
            <div class="nav-items">
                <a href="index.php">home</a>
                <a href="login.php">Login</a>
                <a href="history.php"><img src="../img/cart_light.png" id="cart" alt=""></a>
            </div>
            
            <img src="../img/moon.png" id="dark-icon">
        </div>   
    </nav>

    <div class="container">
        <h1>LOGIN</h1>
        <hr>
        <?php 
            if(isset($error)){
                echo"<p style='color:red'>USername atau password salah</p>";
            } 
        ?>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" class="textfield" required>
            <input type="text" name="email" placeholder="Email" class="textfield" required>
            <input type="password" name="password" placeholder="Password" class="textfield" required>
            <input type="password" name="cpassword" placeholder="Konfirmasi Password" class="textfield" required>
            <input type="submit" name="daftar" value="Daftar" class="login-btn">
        </form>
    </div>
        
    <footer>
        <p>© Copyright 2023 Anandiaz Agung Pradana</p>
        <div class="logo">
            <img src="../img/profil.png"alt="">
        </div>
    </footer>
    <script src="../scripts/script.js"></script>
</body>
</html>

