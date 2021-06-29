<?php
    include ('crudmk.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mata Kuliah</title>
</head>

<body>
    <?php
        $koneksi = koneksiAkademik();
        $kode = $_GET['kode'];
        $data = mysqli_query($koneksi, "select * from matakuliah where Kode='$kode'");
        $edit = mysqli_fetch_array($data);
    ?>

    <h2><?php echo 'Apakah anda akan menghapus matakuliah dengan Kode: '.$kode ?></h2>
    <form action="proseshapus.php" method="GET">
        <input type="text" hidden name="Kode" id="Kode" value="<?php echo $edit['Kode']; ?>">
        <input type="submit" value="OK">
        <a href="hapusmk.php"><input type="button" value="Batal"></a>
    </form>

</body>

</html>