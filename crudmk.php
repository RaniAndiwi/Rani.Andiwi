<?php
    require_once 'koneksi.php';

    //Menambahkan fungsi "bacaMtKuliah"
    Function bacaMtKuliah($sql){
        $data = array();
        $koneksi = koneksiAkademik();
        $hasil = mysqli_query($koneksi, $sql);
        // jika tidak ada record, hasil berupa null
        if (mysqli_num_rows($hasil) == 0) {
                mysqli_close($koneksi);
                return null;
        }
        $i=0;
        while($baris = mysqli_fetch_assoc($hasil)){
            $data[$i]['kode']= $baris['Kode'];
            $data[$i]['nama'] = $baris['Nama'];
            $data[$i]['sks'] = $baris['SKS'];
            $i++;
        }
        mysqli_close($koneksi);
        return $data;
    }

    // Menambahkan Fungsi "tambahMtKuliah"  
    function tambahMtKuliah($kode, $nama, $sks) {
    $koneksi = koneksiAkademik();
    $sql = "insert into matakuliah values('$kode', '$nama', '$sks')";
    $hasil = 0;
    
    if (!mysqli_query($koneksi, $sql)) {
        $hasil = 1;
        mysqli_close($koneksi);
    
        return $hasil;
    }

    // Menambahkan fungsi "hapusMtKuliah" berdasar kode   
    function hapusMtKuliah($Kode){
    $koneksi = koneksiAkademik();
    $sql = "delete from matakuliah where Kode='$Kode'";

    if (mysqli_query($koneksi, $sql)){
        $hasil = true;
    }else {
        $hasil = "Error menghapus record: " . mysqli_error($koneksi);
    }
    
    mysqli_close($koneksi);
    return $hasil;
    }
    }