<?php
include('crudmk.php');

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$sks = $_POST['sks'];

$hasil = tambahMtKuliah($kode, $nama, $sks);
if($hasil > 0)
    header("Location: bacamk.php");
else {
        echo "Tidak ada record";
}

?>