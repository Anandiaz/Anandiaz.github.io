<?php 

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $kuantitas = $_POST['kuantitas'];

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar" style="margin-bottom: 100px;">
        <div class="logo">
            <img src="profil.png"alt="">
        </div>
        <div class="nav-content">
            <div class="nav-items">
                <a href="index.php">home</a>
                <a href="#" id="profil">about me</a>
                <a href="#"><img src="cart_light.png" id="cart" alt=""></a>
            </div>
            <img src="moon.png" id="dark-icon">
        </div>
       
    </nav>
    
    <div class="container">
        <div class="title" style="margin-bottom: 10px;">
        <?php if(isset($_POST['submit'])!=true): ?>
            <h1>Pesanan</h1>
        <?php endif ?>
        <?php if(isset($_POST['submit'])==true): ?>
            <h1>Details</h1>
        <?php endif ?>
        </div>
        <div class="content" style="display: flex;">
            <?php 
            if ($id == 1): ?>
            <img src="xbox-s.png" alt="">
            <?php endif ?>
            <?php 
            if ($id == 2): ?>
            <img src="xbox-2.0.png" alt="">
            <?php endif ?>
            <?php if(isset($_POST['submit']) != true): ?>
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
            <?php endif ?>

            <?php  if(isset($_POST['submit'])==true):?>
            <table style="padding-left: 150px;">
                <tr >
                    <td>Email</td>
                    <td style="padding-left: 100px;"><?php echo $email ?></td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td style="padding-left: 100px;"><?php echo $nama ?></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td style="padding-left: 100px;"><?php echo $hp ?></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td style="padding-left: 100px;"><?php echo $alamat ?></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td style="padding-left: 100px;"><?php 
                    if($id == 1){
                        echo "Rp. " , number_format($kuantitas * 4000000);
                    }
                    else{
                        echo "Rp. ", number_format($kuantitas * 7200000);

                    }
                     ?></td>
                </tr>
                <tr>
                    <td><a href="index.php">kembali</a></td>
                </tr>
            </table>
            <?php endif ?>
        </div>
    </div>
    <footer>
        <p>© Copyright 2023 Anandiaz Agung Pradana</p>
        <div class="logo">
            <img src="profil.png"alt="">
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>

