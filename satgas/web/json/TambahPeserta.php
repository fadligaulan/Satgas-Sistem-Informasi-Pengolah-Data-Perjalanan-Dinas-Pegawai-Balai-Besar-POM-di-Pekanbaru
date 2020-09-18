<?php
  
  	$namaPeserta = $_GET['nama_peserta'];
  	$emailPeserta = $_GET['email_peserta'];
  

 include "../config/koneksi.php";
 koneksi_buka();
 
 $query2 = mysql_query("SELECT * FROM peserta WHERE email_peserta = '$emailPeserta'");

 if(mysql_num_rows($query2)<1){
    $data = mysql_query("SELECT max(kj.id_peserta) FROM peserta kj");
    if($data === false){
            die(mysql_error());
    }


    $datakode = mysql_fetch_array($data);
    if($datakode ){
        $nilaikode = substr($datakode[0], 3);
        $kode = (int) $nilaikode;
        $kode = $kode +1;
        $kode_otomatis = "PR-".str_pad($kode, 4, "0", STR_PAD_LEFT);
    }else {
        $kode_otomatis = "PR-0001";
    }

    $queryPeserta = mysql_query("INSERT INTO peserta VALUES('$kode_otomatis','$namaPeserta','$emailPeserta','')");
    if($queryPeserta){
        echo "Berhasil";
    }else{
        echo "Gagal";
    }
 }else{
     echo "Email Ada";
 }

?>