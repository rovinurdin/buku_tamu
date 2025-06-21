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
        <td>ALAMAT</td>
        <td>No Telp</td>
        <td>E-Mail</td>
        <td>KEPADA</td>
        <td>PESAN</td>
        <td>WAKTU</td>
        <td>AKSI</td>
    </tr>
    <?php
    $query = mysqli_query($koneksi, "select * from daftar_tamu");
    $no=1;
    while ($data = mysqli_fetch_array($query)) {
        echo   "<tr><td>" . $no . "</td>
                    <td>" . $data['nama'] . "</td>
                    <td></td>
                    <td></td>
                    <td>" . $data['email'] . "</td>
                    <td>" . $data['kepada'] . "</td>
                    <td>" . $data['pesan'] . "</td>
                    <td>" . $data['tanggal'] . "</td>
                    <td><a href='edit.php?id=".$data['id']."'>EDIT | <a href='delete.php?id=".$data['id']."'>DELETE</td>                
                </tr>";
    $no++;
            }
    ?>
</table>
