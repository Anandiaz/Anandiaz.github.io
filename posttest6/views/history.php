<?php 
    require "../connection/conn.php";

    $result = mysqli_query($conn, "SELECT * FROM tranksaksi");
    $tranksaksi = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $tranksaksi[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 6</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/table.css">
</head>
<body onload="realtimeClock()">

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
        <h1>Tranksaksi</h1>
        <h3 id="clock">Current Time : <?php date_default_timezone_set('Asia/Makassar');echo date("y/m/d h:i:sa"); ?> </h3>
        </div>
        <div class="content">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Barang</th>
                            <th>Email</th>
                            <th>Pembeli</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>kuantitas</th>
                            <th>total harga</th>
                            <th>foto</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($tranksaksi as $tks) :?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $tks['barang']; ?></td>
                            <td><?php echo $tks['email']; ?></td>
                            <td><?php echo $tks['pembeli']; ?></td>
                            <td><?php echo $tks['no_hp']; ?></td>
                            <td><?php echo $tks['alamat']; ?></td>
                            <td><?php echo $tks['kuantitas']; ?></td>
                            <td><?php echo 'Rp.'.number_format($tks['total_harga']); ?></td>
                            <td><img src="../img/bukti/<?php echo $tks['foto'] ?>" alt="" height="250px"></td>
                            <td class="action">
                                <a href="ubah.php?id=<?php echo $tks['id']?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="black"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                <a href="hapus.php?id=<?php echo $tks['id']?>"><button class="delete-btn" onclick="confirm('Yakin ingin menghapus pesanan <?php echo $tks['id']?>?')"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="black"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
    <footer>
        <p>© Copyright 2023 Anandiaz Agung Pradana</p>
        <div class="logo">
            <img src="../img/profil.png"alt="">
        </div>
    </footer>
    <script src="../scripts/script.js"></script>
    <script src="../scripts//realTime.js"></script>
</body>
</html>