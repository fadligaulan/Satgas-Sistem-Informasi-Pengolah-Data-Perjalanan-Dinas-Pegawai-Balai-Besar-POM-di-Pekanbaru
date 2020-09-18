<?php

include '../config/koneksi.php';
koneksi_buka();
$query = mysql_query("SELECT kj.*,mj.nama_masjid,mj.alamat_masjid,mj.contact_masjid FROM kajian kj, masjid mj where kj.id_masjid = mj.id_masjid ORDER BY id_kajian desc");
$json  = '{"kajian": [';

// bikin looping dech array yang di fetch
while ($row = mysql_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, 
//maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id_kajian'].'",
"nama_masjid":"'.str_replace($char,'`',strip_tags($row['nama_masjid'])).'",
"alamat_masjid":"'.str_replace($char,'`',strip_tags($row['alamat_masjid'])).'",
"contact_masjid":"'.str_replace($char,'`',strip_tags($row['contact_masjid'])).'",
"judul_kajian":"'.str_replace($char,'`',strip_tags($row['judul_kajian'])).'",
"deskripsi_kajian":"'.str_replace($char,'`',strip_tags($row['deskripsi_kajian'])).'",
"tgl_kajian":"'.str_replace($char,'`',strip_tags($row['tgl_kajian'])).'",
"waktu_kajian":"'.str_replace($char,'`',strip_tags($row['waktu_kajian'])).'",
"nama_ustadz":"'.str_replace($char,'`',strip_tags($row['nama_ustadz'])).'",
"jml_peserta_kajian":"'.str_replace($char,'`',strip_tags($row['jml_peserta_kajian'])).'",
"poster_kajian":"https://onlinecashier.id/infokajianislami/assets/images/poster/'.$row['poster_kajian'].'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>