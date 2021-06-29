<!DOCTYPE html>
<?php
include('crudmk.php');
$sql="select * from matakuliah";
$data = bacaMtKuliah($sql);
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Matakuliah</title>
</head>

<body>
<h2>Daftar Mata Kuliah</h2>
<table border="1">
<tr>
<th>Kode</th>
<th>Nama</th>
<th>SKS</th>
</tr>
<?php
foreach($data as $mhs){
$kode = $mhs['kode'];
$nama = $mhs['nama'];
$sks = $mhs['sks'];
echo "
<tr>
<td>$kode</td>
<td>$nama</td>
<td>$sks</td>
<td><a href='konfirmasihapus.php?kode=$kode'>Hapus</a></td>
</tr>
";
}
?>
</table>
</body>
</html>