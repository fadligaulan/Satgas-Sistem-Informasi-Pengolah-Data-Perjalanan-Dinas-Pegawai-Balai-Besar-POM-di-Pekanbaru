<?php
  $kode="";
include '../config/koneksi.php';
if(isset($_GET['email_peserta'])){
 $kode=$_GET['email_peserta'];

}

  
 koneksi_buka();
 
 $query = mysql_query("SELECT * FROM peserta WHERE email_peserta = '$kode'");
$json  = '{"peserta": [';

// bikin looping dech array yang di fetch
while ($row = mysql_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, 
//maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id_peserta'].'",
"nama_peserta":"'.str_replace($char,'`',strip_tags($row['nama_peserta'])).'",
"email_peserta":"'.str_replace($char,'`',strip_tags($row['email_peserta'])).'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>