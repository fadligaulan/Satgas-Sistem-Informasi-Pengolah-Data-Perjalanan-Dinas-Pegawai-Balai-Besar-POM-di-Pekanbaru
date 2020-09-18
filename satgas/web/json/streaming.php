<?php

include '../config/koneksi.php';
koneksi_buka();
$query = mysql_query("SELECT kj.*,mj.nama_masjid,mj.alamat_masjid,mj.contact_masjid FROM streaming kj, masjid mj where kj.id_masjid = mj.id_masjid ORDER BY id_streaming desc");
$json  = '{"streaming": [';

// bikin looping dech array yang di fetch
while ($row = mysql_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, 
//maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id_streaming'].'",
"nama_masjid":"'.str_replace($char,'`',strip_tags($row['nama_masjid'])).'",
"alamat_masjid":"'.str_replace($char,'`',strip_tags($row['alamat_masjid'])).'",
"contact_masjid":"'.str_replace($char,'`',strip_tags($row['contact_masjid'])).'",
"judul_streaming":"'.str_replace($char,'`',strip_tags($row['judul_streaming'])).'",
"des_streaming":"'.str_replace($char,'`',strip_tags($row['des_streaming'])).'",
"tgl_streaming":"'.str_replace($char,'`',strip_tags($row['tgl_streaming'])).'",
"nama_ustadz":"'.str_replace($char,'`',strip_tags($row['nama_ustadz'])).'",
"url_streaming":"'.str_replace($char,'`',strip_tags($row['url_streaming'])).'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>