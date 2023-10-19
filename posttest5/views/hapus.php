<?php
    require "../connection/conn.php";
    $id = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM tranksaksi WHERE id = $id");
    $mahasiswa = [];

    if ($result) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'tranksaksi.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'tranksaksi.php';
        </script>";
    }
?>