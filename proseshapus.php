<?php

    include ('crudmk.php');
        $Kode = $_GET['Kode'];

        $hasil = hapusMtKuliah($kode);    
    if ($hasil == true){
        header("Location: hapusmk.php");
    } else {
        echo "Gagal hapus record";
    }
?>