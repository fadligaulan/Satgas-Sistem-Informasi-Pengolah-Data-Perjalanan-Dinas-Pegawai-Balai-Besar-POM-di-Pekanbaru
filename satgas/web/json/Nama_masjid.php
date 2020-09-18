<?php

include '../config/koneksi.php';
koneksi_buka();
$query = mysql_query("SELECT * FROM masjid ORDER BY nama_masjid asc");
$json  = '{"masjid": [';

// bikin looping dech array yang di fetch
while ($row = mysql_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, 
//maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id_masjid'].'",
"nama_masjid":"'.str_replace($char,'`',strip_tags($row['nama_masjid'])).'",
"alamat_masjid":"'.str_replace($char,'`',strip_tags($row['alamat_masjid'])).'",
"thn_berdiri":"'.str_replace($char,'`',strip_tags($row['thn_berdiri'])).'",
"des_masjid":"'.str_replace($char,'`',strip_tags($row['des_masjid'])).'",
"contact_masjid":"'.str_replace($char,'`',strip_tags($row['contact_masjid'])).'",
"lat":"'.str_replace($char,'`',strip_tags($row['lat'])).'",
"lng":"'.str_replace($char,'`',strip_tags($row['lng'])).'",
"foto_masjid":"https://onlinecashier.id/infokajianislami/assets/foto/masjid/'.$row['foto_masjid'].'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>