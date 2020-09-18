<?php

include '../config/koneksi.php';
koneksi_buka();
$query = mysql_query("SELECT kj.*,mj.nama_masjid,mj.alamat_masjid,mj.contact_masjid FROM video kj, masjid mj where kj.id_masjid = mj.id_masjid ORDER BY id_video desc");
$json  = '{"video": [';

// bikin looping dech array yang di fetch
while ($row = mysql_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, 
//maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id_video'].'",
"nama_masjid":"'.str_replace($char,'`',strip_tags($row['nama_masjid'])).'",
"alamat_masjid":"'.str_replace($char,'`',strip_tags($row['alamat_masjid'])).'",
"contact_masjid":"'.str_replace($char,'`',strip_tags($row['contact_masjid'])).'",
"judul_video":"'.str_replace($char,'`',strip_tags($row['judul_video'])).'",
"des_video":"'.str_replace($char,'`',strip_tags($row['des_video'])).'",
"tgl_video":"'.str_replace($char,'`',strip_tags($row['tgl_video'])).'",
"nama_ustadz":"'.str_replace($char,'`',strip_tags($row['nama_ustadz'])).'",
"file_video":"https://onlinecashier.id/infokajianislami/assets/video/file/'.$row['file_video'].'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>