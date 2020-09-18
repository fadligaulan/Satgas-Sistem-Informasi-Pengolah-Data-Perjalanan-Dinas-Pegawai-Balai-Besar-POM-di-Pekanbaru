<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> | Cetak SPPD</title>

</head>
<body>
    
    <table border=0 width="100%" cellspacing=0 cellpadding=0 >
        <tr height=25>
            <td width=500></td>
            <td width=500 align=left bgcolor=#ffffff><font style=font-size:14pt face="Arial" color=#000000>
                <b>LAMPIRAN I.B</b><br>
                PERATURAN DIREKTUR JENDERAL PERBENDAHARAAN<br>
                NOMOR PER- 22/PB/2013 TENTANG KETENTUAN LEBIH <br>
                LANJUT PELAKSANAAN PERJALANAN DINAS DALAM<br>
                NEGERI BAGI PEJABAT NEGARA, PEGAWAI NEGERI DAN <br>
                PEGAWAI TIDAK TETAP.
            </font></td>
        </tr>
    </table>
    <br>
    <br>
    <table border=0 width="100%" cellspacing=0 cellpadding=0 >
        <tr height=25>
            <td width=100><b><font style=font-size:13pt face="Arial" color=#000000>
                Form Bukti Kehadiran Pelaksanaan Perjalanan Dinas Jabatan Dalam Kota</font></b>
            </td>
        </tr>
    </table>
    <table border=0 width="100%" cellspacing=0 cellpadding=0 >
        <tr height=25>
            <td width=100 align="center"><b><font style=font-size:13pt face="Arial" color=#000000>
                sampai dengan 8 (delapan) jam</font></b>
            </td>
        </font>
        </tr>
    </table>
    
    <table height="40px" border=1 width="100%" cellspacing=0 cellpadding=0 >
        <tr height="160px">
            <td rowspan="2" align="center"><font style=font-size:12pt face="Arial" color=#000000>No</font></td>
            <td rowspan="2" align="center"><font style=font-size:12pt face="Arial" color=#000000>Pelaksana SPD</font></td>
            <td rowspan="2" align="center"><font style=font-size:12pt face="Arial" color=#000000>Hari</font></td>
            <td rowspan="2" align="center"><font style=font-size:12pt face="Arial" color=#000000>Tanggal</font></td>
            <td colspan="3" align="center"><font style=font-size:12pt face="Arial" color=#000000>Pejabat / Petugas yang mengesahkan</font></td>
        </tr>
        <tr>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>Nama</font></td>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>Jabatan</font></td>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>Tanda Tangan</font></td>
        </tr>
        <tr>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>(1)</font></td>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>(2)</font></td>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>(3)</font></td>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>(4)</font></td>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>(5)</font></td>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>(6)</font></td>
            <td align="center"><font style=font-size:12pt face="Arial" color=#000000>(7)</font></td>
        </tr>
        
        <?php $no = 0; foreach($sppd_ks as $row): ?>
        <tr>
            <td valign="top"><font style=font-size:12pt face="Arial" color=#000000><?php echo ++$no.'.' ; ?></font></td>
            <td valign="top"><font style=font-size:12pt face="Arial" color=#000000><?php echo $row->nama_pegawai; ?></font></td>
            <td valign="top"><font style=font-size:12pt face="Arial" color=#000000><?php echo nama_hari($row->dari_tgl);?> sampai <?php echo nama_hari($row->sampai_tgl);?></font></td>
            <td valign="top"><font style=font-size:12pt face="Arial" color=#000000><?php echo tgl_indo($row->dari_tgl);?> sampai <?php echo tgl_indo($row->sampai_tgl);?></font></td>
            <td width="20%" class="a" align="center"><font style=font-size:12pt face="Arial" color=#000000><br><br><br><br><br></font></td>
            <td class="a" align="center"><font style=font-size:12pt face="Arial" color=#000000></font></td>
            <td class="a" align="center"><font style=font-size:12pt face="Arial" color=#000000></font></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>
