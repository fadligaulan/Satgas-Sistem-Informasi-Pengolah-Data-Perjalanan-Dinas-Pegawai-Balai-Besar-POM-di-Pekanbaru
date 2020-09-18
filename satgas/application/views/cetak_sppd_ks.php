<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> | Cetak SPPD</title>
    <style type="text/css">

     @page {
        margin-header: 5mm;
       	odd-header-name: html_myHeader1;
    }


    #table1 {
        boerder-collapse: collapse;
        border-color: black;
    }

</style>

</head>
<body>
	<htmlpageheader name="myHeader1" style="display:none">
        <div style="text-align: left; font-weight: bold; font-size: 12pt;">
           BALAI BESAR PENGAWAS OBAT DAN MAKANAN<br> DI PEKANBARU
        </div>
    </htmlpageheader>
	<?php $no = 0; foreach($sppd_ks as $row): ?>
	<table border=0 cellspacing=0 cellpadding=0 >
		<tr height=25>
			<td width=150></td>
			<td width=450  align=left><br></td>
			<td width=150  align=left bgcolor=#ffffff><font style=font-size:14pt face="Arial" color=#000000>Lembar Ke</font></td>
			<td>:</td>
			<td width=250 align=left bgcolor=#ffffff><font style=font-size:14pt face="Arial" color=#000000>&nbsp;&nbsp;<?php echo ++$no; ?></font></td>
		</tr>
	</table>
	<table border=0 cellspacing=0 cellpadding=0 >
		<tr height=25>
			<td width=150></td>
			<td width=450  align=left><br></td>
			<td width=150  align=left bgcolor=#ffffff><font style=font-size:14pt face="Arial" color=#000000>Kode No.</font></td>
			<td>:</td>
			<td width=250></td>
		</tr>
	</table>
	<table border=0 cellspacing=0 cellpadding=0 >
		<tr height=25>
			<td width=150></td>
			<td width=450  align=left><br></td>
			<td width=150  align=left bgcolor=#ffffff><font style=font-size:14pt face="Arial" color=#000000>Nomor</font></td>
			<td>:</td>
			<td width=250><font style=font-size:14pt face="Arial" color=#000000>RT.02.01.94.<?php echo $row->kode_bidang_01; ?>.<?php $tanggal_st = date("m.y"); echo ($tanggal_st); ?>.<?php echo $row->no_surat; ?></font></td>
		</tr>
	</table><br><br>
	<table width="100%" border=0 cellspacing=0 cellpadding=0 >
		<tr>
			<td width=100  align=center bgcolor=#ffffff><b><font style=font-size:14pt face="Arial" color=#000000>SURAT PERJALANAN DINAS</font></b></td>
		</tr>
	</table><br><br>
	<table border=1 width="100%" cellspacing=0 cellpadding=0>
		<tr>
			
			<td height="40px" width="5%"><center>1.</center></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Pejabat Pembuat Komitment</font></td> <td colspan="3"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;<?php echo $row->nama_ppk; ?></font></td>
			
		</tr>
		<tr>
			
			<td height="40px" width="5%"><center>2.</center></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Nama/NIP Pegawai yang di &nbsp;&nbsp;perintahkan</font></td>
			<td colspan="3"  align="justify"><font style=font-size:11pt face="Arial" color=#000000><?php echo $row->nama_pegawai; ?>/<?php echo $row->nip; ?></font></td>
			
		</tr>
		<tr>
			
			<td valign="top" height="40px" width="5%"><font style=font-size:11pt face="Arial" color=#000000><center>3.</center></font></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;a. Pangkat dan Golongan<br><br>&nbsp;&nbsp;b. Jabatan/Instansi<br><br>&nbsp;&nbsp;c. Tingkat Biaya perjalanan dinas</font></td>
			<td colspan="3"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;a. <?php echo $row->pangkat; ?> <?php echo $row->golongan; ?><br><br>&nbsp;&nbsp;b. <?php echo $row->nama_jabatan; ?><br><br>&nbsp;&nbsp;c. Biasa</font></td>
			
		</tr>
		<tr>
			
			<td height="40px" width="5%"><center>4.</center></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Maksud Perjalanan Dinas</font></td>
			<td colspan="3" align="justify"><font style=font-size:11pt face="Arial" color=#000000><?php echo $row->maksud_tugas; ?></font></td>
			
		</tr>
		<tr>
			
			<td height="40px" width="5%"><center>5.</center></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Alat angkutan yang digunakan</font></td>
			<td colspan="3"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Angkutan Umum</font></td>
			
		</tr>
		<tr>
			
			<td height="40px" width="5%"><center>6.</center></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;a. Tempat berangkat<br><br>&nbsp;&nbsp;b. Tempat tujuan</font></td>
			<td colspan="3"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;a. Pekanbaru<br><br>&nbsp;&nbsp;b. <?php echo $row->nama_wilayah; ?></font></td>
			
		</tr>
		<tr><font style=font-size:11pt face="Arial" color=#000000>
			
			<td valign="top" height="40px" width="5%"><font style=font-size:11pt face="Arial" color=#000000><center>7.</center></font></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;a. Lamanya perjalanan dinas<br><br>&nbsp;&nbsp;b. Tanggal berangkat<br><br>&nbsp;&nbsp;c. Tanggal harus kembali/tiba di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tempat baru *)</font></td>
			<td colspan="3"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;a.<?php echo $row->lamanya; ?>&nbsp;&nbsp;(<?php echo ucwords(number_to_words($row->lamanya)); ?>)&nbsp;Hari<br><br>&nbsp;&nbsp;b.<?php echo tgl_indo($row->dari_tgl);?><br><br>&nbsp;&nbsp;c.<?php echo tgl_indo($row->sampai_tgl);?></font></td>
			
		</tr>
		<tr>
			<td height="40px" width="5%"><font style=font-size:11pt face="Arial" color=#000000><center>8.</center></font></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Pengikut:Nama</font></td>
			<td width="25%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Tanggal lahir</font></td>
			<td width="30%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Keterangan</font></td>
		</tr>
		<tr>
			<td height="40px" width="5%"><font style=font-size:11pt face="Arial" color=#000000><center></center></font></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;1.<br><br>&nbsp;&nbsp;2.<br><br>&nbsp;&nbsp;3.</font></td>
			<td width="25%"><font style=font-size:11pt face="Arial" color=#000000></font></td>
			<td width="30%"><font style=font-size:11pt face="Arial" color=#000000></font></td>
		</tr>
		<tr>
			
			<td valign="top" height="40px" width="5%"><center>9.</center></td>
			<td width="40%"><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;Pembebanan Anggaran<br><br>&nbsp;&nbsp;a.Instansi<br><br>&nbsp;&nbsp;b. Mata Anggaran</font></td>
			<td colspan="3"><br><br><font style=font-size:11pt face="Arial" color=#000000>&nbsp;&nbsp;a. Balai Besar POM di Pekanbaru<br><br>&nbsp;&nbsp;b.(<?php echo $row->mata_anggaran?>)</font></td>
			
		</tr>
		<tr>
		<tr>
			<td valign="top" height="40px" width="5%"><font style=font-size:11pt face="Arial" color=#000000><center>10.</center></font></td>
			<td valign="top" width="40%"><font style=font-size:11pt face="Arial" color=#000000>Keterangan lain-lain:</font></td>
			<td colspan="3"></td>
		</tr>
	</table>
	<table width="100%" border=0 cellspacing=0 cellpadding=0 >
		<tr>
			<td width=100  align=left bgcolor=#ffffff><i><font style=font-size:11pt face="Arial" color=#000000>*) Coret yang tidak perlu</font></i></td>
		</tr>
	</table>
	<br>
	<br>
	<br>
	<br>	
	<table border=0 width="100%" cellspacing=0 cellpadding=0 >
		<tr height=17 >
			<td width=480  align=left > <br></td>
			<td width=130  align=left  bgcolor=#ffffff ><font style=font-size:11pt face="Arial" color=#000000> Di Keluarkan di</font></td>
			<td width=10 valign="top">:</td>
			<td width=200 valign="top"><font style=font-size:11pt face="Arial" color=#000000>Pekanbaru</font></td>
		</tr>
	</table>
	<table border=0 width="100%" cellspacing=0 cellpadding=0 >
		<tr height=17 >
			<td width=480  align=left > <br></td>
			<td width=130  align=left  bgcolor=#ffffff ><font style=font-size:11pt face="Arial" color=#000000> Tanggal</font></td>
			<td width=10 valign="top" align="right">:</td>
			<td width=200 valign="top"><font style=font-size:11pt face="Arial" color=#000000> <?php echo tgl_indo($row->tanggal_st); ?></font></td>
		</tr>
	</table>
	<table border=0 width="100%" cellspacing=0 cellpadding=0 >
		<tr height=17 >
			<td width=450  align=left > <br></td>
			<td width=320  align=left  bgcolor=#ffffff ><font style=font-size:11pt face="Arial" color=#000000> Pejabat Pembuat Komitmen</font></td>
		</tr>
	</table>
	<table border=0 width="100%" cellspacing=0 cellpadding=0 >
		<tr height=17 >
			<td width=450  align=left > <br></td>
			<td width=320  align=left  bgcolor=#ffffff ><font style=font-size:11pt face="Arial" color=#000000> Balai Besar POM di Pekanbaru</font></td>
		</tr>
	</table><br><br><br>
	<table border=0 width="100%" cellspacing=0 cellpadding=0 >
		<tr height=17 >
			<td width=450  align=left > <br></td>
			<td width=320  align=left  bgcolor=#ffffff ><b><u><font style=font-size:11pt face="Arial" color=#000000> <?php echo $row->nama_ppk; ?></font></u></b></td>
		</tr>
	</table>
	<table border=0 width="100%" cellspacing=0 cellpadding=0 >
		<tr height=17 >
			<td width=445  align=left > <br></td>
			<td width=320  align=left  bgcolor=#ffffff ><font style=font-size:11pt face="Arial" color=#000000><?php echo $row->nip_ppk; ?></font></td>
		</tr>
	</table>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php endforeach; ?>
</body>
</html>