<?php 
    session_start();

    require "../connection/conn.php";

    if(isset($_POST['masuk'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $result = mysqli_query($conn,"SELECT * FROM users where email='$email'");
        
        if(mysqli_num_rows($result)=== 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($pass,$row['password'])){
                echo 1;
                $_SESSION['login'] = true;
                header('Location: index.php');
                exit;
            }
        }
        $error = true;
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
            <input type="email" name="email" placeholder="Email" class="textfield" required>
            <input type="password" name="password" placeholder="Password" class="textfield" required>
            <input type="submit" name="masuk" value="Masuk" class="login-btn">
            <a href="register.php"><input type="button" name="register" value="Register" class="login-btn"></a>
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

