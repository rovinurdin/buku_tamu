<?php
//halaman read
include "koneksi.php";
?>
<h1>DAFTAR TAMU</h1>
<a href="tambah.php">TAMBAH TAMU</a> <br> <br>
<table border=1>
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>E-Mail</td>
        <td>KEPADA</td>
        <td>PESAN</td>
        <td>TANGGAL</td>
        <td>AKSI</td>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "select * from daftar_tamu");
    while ($data = mysqli_fetch_array($query)) {
        echo   "<tr><td>" . $data['id'] . "</td>
                <td>" . $data['nama'] . "</td>
                <td>" . $data['email'] . "</td>
                <td>" . $data['kepada'] . "</td>
                <td>" . $data['pesan'] . "</td>
                <td>" . $data['waktu'] . "</td>
                <td><a href='edit.php?id=" . $data['id'] . ">EDIT</td>                
            </tr>";
    }
    ?>
</table>