<?php 
require "../connection/conn.php";

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $kuantitas = $_POST['kuantitas'];
    if ($id==1){
        $barang = "XBOX SERIES S";
        $total = $kuantitas * 4000000;
    }
    elseif ($id==2) {
        $barang = "XBOX SERIES X";
        $total = $kuantitas * 7200000;
    }

    $result = mysqli_query($conn, "INSERT INTO tranksaksi VALUES ('', '$barang','$email', '$nama', '$hp', '$alamat', '$kuantitas', '$total')");

            if ($result) {
                echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'history.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'history.php';
                </script>";
            }

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 3</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <nav class="navbar" style="margin-bottom: 100px;">
        <div class="logo">
            <img src="../img/profil.png"alt="">
        </div>
        <div class="nav-content">
            <div class="nav-items">
                <a href="index.php">home</a>
                <a href="#" id="profil">about me</a>
                <a href="#"><img src="../img/cart_light.png" id="cart" alt=""></a>
            </div>
            <img src="../img/moon.png" id="dark-icon">
        </div>
       
    </nav>
    
    <div class="container">
        <div class="title" style="margin-bottom: 10px;">
        <h1>Pesanan</h1>
        </div>
        <div class="content" style="display: flex;">
            <?php 
            if ($id == 1): ?>
            <img src="../img/xbox-s.png" alt="">
            <?php endif ?>
            <?php 
            if ($id == 2): ?>
            <img src="../img/xbox-2.0.png" alt="">
            <?php endif ?>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label for="email">Masukkan email </label></td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td><label for="nama">Masukkan nama Pembeli</label></td>
                        <td><input type="text" name="nama" id="nama"></td>
                    </tr>
                    <tr>
                        <td><label for="hp">Masukkan No HP</label></td>
                        <td><input type="number" name="hp" id="hp"></td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Masukkan alamat</label></td>
                        <td><textarea name="alamat" id="alamat" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="kuantitas">Kuantitas</label></td>
                        <td><input type="number" name="kuantitas" id="kuantitas"></td>
                    </tr>
                    <tr>
                        <td>harga</td>
                        <?php 
                        if ($id == 1): ?>
                        <td style="padding-left: 50px;">Rp. 4,000,000</td>
                        <?php endif ?>
                        <?php 
                        if ($id == 2): ?>
                        <td style="padding-left: 50px;">Rp. 7,200,000</td>
                        <?php endif ?>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="padding-left: 50px;"><button type="submit" name="submit" id="submit">submit</button></td>
                    </tr>
                </table>  
            </form>
            
        </div>
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

