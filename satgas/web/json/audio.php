<?php

include '../config/koneksi.php';
koneksi_buka();
$query = mysql_query("SELECT kj.*,mj.nama_masjid,mj.alamat_masjid,mj.contact_masjid FROM audio kj, masjid mj where kj.id_masjid = mj.id_masjid ORDER BY id_audio desc");
$json  = '{"audio": [';

// bikin looping dech array yang di fetch
while ($row = mysql_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, 
//maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id_audio'].'",
"nama_masjid":"'.str_replace($char,'`',strip_tags($row['nama_masjid'])).'",
"alamat_masjid":"'.str_replace($char,'`',strip_tags($row['alamat_masjid'])).'",
"contact_masjid":"'.str_replace($char,'`',strip_tags($row['contact_masjid'])).'",
"judul_audio":"'.str_replace($char,'`',strip_tags($row['judul_audio'])).'",
"des_audio":"'.str_replace($char,'`',strip_tags($row['des_audio'])).'",
"tgl_audio":"'.str_replace($char,'`',strip_tags($row['tgl_audio'])).'",
"nama_ustadz":"'.str_replace($char,'`',strip_tags($row['nama_ustadz'])).'",
"file_audio":"https://onlinecashier.id/infokajianislami/assets/audio/file/'.$row['file_audio'].'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>