<?php
  
  	$tanggal = $_GET['tgl_ikuti'];
  	$waktuIkuti = $_GET['waktu_ikuti'];
  	$idKajian = $_GET['id_kajian'];
  	$idPeserta = $_GET['id_peserta'];
  

 include "../config/koneksi.php";
 koneksi_buka();
 
 $query2 = mysql_query("SELECT * FROM ikuti_kajian WHERE id_peserta = '$idPeserta' and id_kajian='$idKajian'");

 if(mysql_num_rows($query2)<1){
    $data = mysql_query("SELECT max(kj.id_ikutikajian) FROM ikuti_kajian kj");
    if($data === false){
            die(mysql_error());
    }


    $datakode = mysql_fetch_array($data);
    if($datakode ){
        $nilaikode = substr($datakode[0], 3);
        $kode = (int) $nilaikode;
        $kode = $kode +1;
        $kode_otomatis = "IK-".str_pad($kode, 4, "0", STR_PAD_LEFT);
    }else {
        $kode_otomatis = "IK-0001";
    }

    $queryIkuti = mysql_query("INSERT INTO ikuti_kajian VALUES('$kode_otomatis','$tanggal','$waktuIkuti','$idKajian','$idPeserta')");
    if($queryIkuti){
        echo "Berhasil";
    }else{
        echo "Gagal";
    }
 }else{
     echo "Sudah Terdaftar";
 }

?>