<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> | Cetak SPPD Belakang</title>

</head>
<body>
	<table border=1 width="100%" cellspacing=0 cellpadding=0>
		<tr>
			
			<td><center></center></td>
			<td width="43%"></td>
			<td font style=font-size:11pt face="Arial" color=#000000>Berangkat dari&emsp;&emsp;&nbsp;&nbsp;:Pekanbaru<br>
				(Tempat Kedudukan)<br>
				Ke&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<?php echo $sppd_belakang->nama_wilayah; ?><br>
				Pada tanggal&emsp;&emsp;&emsp;&nbsp;&nbsp;:<?php echo tgl_indo($sppd_belakang->dari_tgl); ?><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plt.Kepala Balai Besar POM di Pekanbaru<br><br><br><br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>Dra. Syarnida, Apt, MM</b></u></font><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19660418 199303 2 001
			</td>
		</tr>
		<tr>
			<td height="40px" width="5%" valign="top" font style=font-size:11pt face="Arial" color=#000000><center>II.</center></td>
			<td font style=font-size:11pt face="Arial" color=#000000>Tiba di &emsp;&emsp;&emsp;&emsp;&emsp;&#160;:<?php echo $sppd_belakang->nama_wilayah; ?><br>
				Pada tanggal&emsp;&emsp;&ensp;:<?php echo tgl_indo($sppd_belakang->dari_tgl); ?><br>
				Kepala&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:<br><br><br><br><br><br></td>
			<td font style=font-size:11pt face="Arial" color=#000000>Berangkat dari&emsp;&emsp;&nbsp;&nbsp;:<?php echo $sppd_belakang->nama_wilayah; ?><br>
				Ke&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:Pekanbaru<br>
				Pada tanggal&emsp;&emsp;&emsp;&nbsp;&nbsp;:<?php echo tgl_indo($sppd_belakang->sampai_tgl); ?><br>
				Kepala&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;:<br><br><br><br><br><br></td>	
		</tr>
		<tr>
			<td height="40px" width="5%" valign="top" font style=font-size:11pt face="Arial" color=#000000><center>III.</center></td>
			<td font style=font-size:11pt face="Arial" color=#000000>Tiba di &emsp;&emsp;&emsp;&emsp;&emsp;&#160;:<br>
				Pada tanggal&emsp;&emsp;&ensp;:<br>
				Kepala&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:<br><br><br><br><br><br></td>
			<td font style=font-size:11pt face="Arial" color=#000000>Berangkat dari&emsp;&emsp;&nbsp;&nbsp;:<br>
				Ke&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<br>
				Pada tanggal&emsp;&emsp;&emsp;&nbsp;&nbsp;:<br>
				Kepala&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;:<br><br><br><br><br></td>	
		</tr>
		<tr>
			<td height="40px" width="5%" valign="top" font style=font-size:11pt face="Arial" color=#000000><center>IV.</center></td>
			<td font style=font-size:11pt face="Arial" color=#000000>Tiba di &emsp;&emsp;&emsp;&emsp;&emsp;&#160;:<br>
				Pada tanggal&emsp;&emsp;&ensp;:<br>
				Kepala&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:
				<br><br><br><br><br>
				(.................................................)<br>
				NIP.</td>
			<td font style=font-size:11pt face="Arial" color=#000000>Berangkat dari&emsp;&emsp;&nbsp;&nbsp;:<br>
				Ke&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<br>
				Pada tanggal&emsp;&emsp;&emsp;&nbsp;&nbsp;:<br>
				Kepala&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;:
				<br><br><br><br>
				(.................................................)<br>
				NIP.</td>	
		</tr>
		<tr>
			<td height="40px" width="5%" valign="top" font style=font-size:11pt face="Arial" color=#000000><center>V.</center></td>
			<td font style=font-size:11pt face="Arial" color=#000000>Tiba di &emsp;&emsp;&emsp;&emsp;&emsp;&#160;:<br>
				Pada tanggal&emsp;&emsp;&ensp;:<br>
				Kepala&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:
				<br><br><br><br><br>
				(.................................................)<br>
				NIP.</td>
			<td font style=font-size:11pt face="Arial" color=#000000>Berangkat dari&emsp;&emsp;&nbsp;&nbsp;:<br>
				Ke&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<br>
				Pada tanggal&emsp;&emsp;&emsp;&nbsp;&nbsp;:<br>
				Kepala&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;:<br><br><br><br>
				(.................................................)<br>
				NIP.</td>	
		</tr>
		<tr>
			<td height="40px" width="5%" valign="top" font style=font-size:11pt face="Arial" color=#000000><center>VI.</center></td>
			<td font style=font-size:11pt face="Arial" color=#000000>Tiba di &emsp;&emsp;&emsp;&emsp;&emsp;&#160;:Pekanbaru<br>
				(Tempat Kedudukan)<br>
				Pada tanggal&emsp;&emsp;&ensp;:<?php echo tgl_indo($sppd_belakang->sampai_tgl); ?><br><br><br>
				<b>Pejabat Pembuat Komitment</b><br>
				Balai Besar POM di Pekanbaru<br><br><br><br><br>
				<b><u><?php echo $sppd_belakang->nama_ppk; ?></u></b><br>
				<b>NIP.<?php echo $sppd_belakang->nip_ppk; ?></b>
				</td>
			<td font style=font-size:11pt face="Arial" color=#000000>Telah diperiksa, dengan keterangan bahwa perjalanan tersebut diatas benar dilakukan atas perintahnya dan semat-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya.<br><br>
			<b>Pejabat Pembuat Komitment</b><br>
			Balai Besar POM di Pekanbaru<br><br><br><br><br>
			<b><u><?php echo $sppd_belakang->nama_ppk; ?></u></b><br>
			<b>NIP.<?php echo $sppd_belakang->nip_ppk; ?></b></td>	
		</tr>
		<tr>
			<td width="5%" valign="top" font style=font-size:11pt face="Arial" color=#000000>VII.</td>
			<td font style=font-size:11pt face="Arial" color=#000000 valign="top">Catatan lain lain</td>
			<td></td>
		</tr>
	</table>
	<table width="100%" border=0 cellspacing=0 cellpadding=0 >
		<tr>
			<td height="40px" width="5%" valign="top" font style=font-size:11pt face="Arial" color=#000000>VIII.</td>
			<td align="justify" font style=font-size:11pt face="Arial" color=#000000>Pejabat yang berwenang menerbitkan SPD, Pegawai yang melakukan perjalanan dinas, para pejabat yang mengasahkan tanggal berangkat/tiba serta bendahara bertanggung jawab berdasarkan peraturan-peraturan keuangan negara apabila negara menderita rugi akibat keselahan, kelalaian, dan kealpaannya.</td>	
		</tr>
	</table>
	
</body>
</html>