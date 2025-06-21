<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data tamu</title>
</head>

<body>
    <!--halaman create !-->
    <h1>SILAHKAN ISI DAFTAR TAMU</h1>
    <form action="tambah_action.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
             <tr>
                <td>Alamat</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
             <tr>
                <td>No Telpon</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Kepada</td>
                <td><input type="text" name="kepada" id=""></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" id="" col="30" row="3"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN"><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</body>

</html>
