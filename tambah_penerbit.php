<!DOCTYPE html>
<html>
<head>
<title>Data User</title>

<style>
    fieldset {
        width: 400px;
        margin:auto;
        }
</style>
</head>
<body>

<!--membungkus tampilan Read Data-->
<fieldset >
    <!--Judul pada fieldset-->
    <legend align="center">Input Data Penerbit</legend>
    <!--Tampulam Form Input Data-->
    <form action="tambah_proses_penerbit.php" method="post">
        <input type="text" name="id_penerbit" placeholder="id_penerbit" size="40px">
        <br><br>
        <input type="text" name="nama_penerbit" placeholder="nama_penerbit" size="40px">
        <br><br>
        <input type="text" name="alamat" placeholder="alamat" size="40px">
        <br><br>
        <input type="text" name="kota" placeholder="kota" size="40px">
        <br><br>
        <input type="text" name="telepon" placeholder="telepon" size="40px">
        <br><br>
        <button type="submit" name="submit">SIMPAN</button>
        <button type="reset" name="reset">RESET</button>
    </form>
</fieldset>
</body>
</html>