<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST ['nama'];
$email = $_POST['email'];
$kepada = $_POST['kepada'];
$pesan = $_POST['pesan'];

//insert mysql
$query = mysqli_query($koneksi, "update daftar_tamu set 
nama='$nama',
email='$email',
kepada='$kepada',
pesan='$pesan' where id='$id'");

?>

<script>
    alert ("Update Data Berhasil");
    document.location = "index.php";
</script>