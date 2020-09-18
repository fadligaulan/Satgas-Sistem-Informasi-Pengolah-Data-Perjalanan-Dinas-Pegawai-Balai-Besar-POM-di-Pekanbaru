
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?> | Cetak Surat Tugas</title>
    <style type="text/css">

     @page {
       /* background: url('assets/images/logo/cover.jpg') no-repeat 0 0;*/
        background-image-resize: 6;
        margin-footer: 25mm;
        odd-footer-name: html_myFooter1;
    }


    #table1 {
        boerder-collapse: collapse;
        border-color: black;
    }
    
</style>

</head>
<body>
    <htmlpagefooter name="myFooter1" style="display:none">
        <table width="100%" border="1" cellspacing=0 cellpadding=0>
            <tr>
                <td align="center"><font style=font-size:9pt face="Arial" color=#000000>Berdasarkan Peraturan Kepala Badan POM Nomor 20 Tahun 2017 tentang Pengendalian Gratifikasi di Lingkungan Badan POM<br><b>"Petugas tidak menerima bingkisan /hadiah dalam bentuk apapun"</b><br> Jika menemukan petugas kami meminta bingkisan/hadiah, harap laporkan ke hotline <b>0811 7484 111</b></b></b></font></td>
            </tr>
        </table>
    </htmlpagefooter><br><br><br><br><br><br>
 <!-- <table width="100%">
    <tr>
        <td width=100 align="center"><img src="<?php echo base_url('assets/images/logo/head.jpg'); ?>" width="100%"></td>             
    </tr>
</table>  -->
<table width="100%" border=0 cellspacing=0 cellpadding=0 >
    <tr>
        <td width=100  align=center bgcolor=#ffffff><b><u><font style=font-size:10pt face="Arial" color=#000000>SURAT TUGAS</font></u></b></td>
    </tr>
</table>
<table width="100%" border=0 cellspacing=0 cellpadding=0 >
    <tr>
        <td width=100  align=center bgcolor=#ffffff><font style=font-size:10pt face="Arial" color=#000000>Nomor : RT.02.01.94.<?php echo $surat->kode_bidang_01; ?>.<?php $tanggal_st = date("m.y"); echo ($tanggal_st); ?>.<?php echo $surat->no_surat; ?></font></td>
    </tr>
</table>
<table tex border=0 cellspacing=0 cellpadding=0 >
    <tr height=25 >
        <td valign="top" width="18%" align=left  bgcolor=#ffffff ><b><font style=font-size:10pt face="Arial" color=#000000>Menimbang</font></b></td>
        <td valign="top" width="2%" align=right  bgcolor=#ffffff ><b><font style=font-size:10pt face="Arial" color=#000000>:</font></b></td>
        <td><table border=0 cellspacing=0 cellpadding=0>
            <tbody>
                <?php $char='a'; foreach($menimbang as $row): ?>
                <tr>
                    <td valign="top" align="right"><font style=font-size:10pt face="Arial" color=#000000><?php echo $char++.'.' ; ?></font></td>
                    <td align="justify"><font style=font-size:10pt face="Arial" color=#000000><?php echo $row->isi_menimbang; ?></font></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table></td>  
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
    <tr height=25 >
        <td valign="top" width="18%" align=left  bgcolor=#ffffff ><b><font style=font-size:10pt face="Arial" color=#000000>Dasar</font></b></td>
        <td valign="top" width="2%" align=right  bgcolor=#ffffff ><b><font style=font-size:10pt face="Arial" color=#000000>:</font></b></td>
        <td><table border=0 cellspacing=0 cellpadding=0 height="100%">
            <tbody>
                <?php $no=0; foreach($dasar as $row): ?>
                <tr>
                    <td valign="top" align="right"><font style=font-size:10pt face="Arial" color=#000000><?php echo ++$no.'.' ; ?></font></td>
                    <td align="justify"><font style=font-size:10pt face="Arial" color=#000000><?php echo $row->isi_dasar; ?></font></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table> 
        </td>
    </tr>
</table>
<br>
<table width="100%" border=0 cellspacing=0 cellpadding=0 >
    <tr>
        <td width=100  align=center bgcolor=#ffffff><b><font style=font-size:10pt face="Arial" color=#000000>Memberi Tugas Kepada</font></b></td>
    </tr>
</table>
<table width="100%" border=0 cellspacing=0 cellpadding=0 >
    <tr height=25 >
        <!-- <td valign="top" width="21%" align=left  bgcolor=#ffffff ><b><font style=font-size:10pt face="Arial" color=#000000>Kepada:</font></b></td> -->
        <td>
            <table width="100%" border=1 cellspacing=0.5 cellpadding=0>
                <thead>
                  <tr>
                    <td><center><font style=font-size:10pt face="Arial" color=#000000>No</font></center></td>
                    <td><center><font style=font-size:10pt face="Arial" color=#000000>Nama</font></center></td>
                    <td><center><font style=font-size:10pt face="Arial" color=#000000>Pangkat/Golongan</font></center></td>
                    <td><center><font style=font-size:10pt face="Arial" color=#000000>NIP</font></center></td>
                    <td><center><font style=font-size:10pt face="Arial" color=#000000>Jabatan</font></center></td>
                    <td><center><font style=font-size:10pt face="Arial" color=#000000>Keterangan</font></center></td>
                </tr>
                </thead>
            <tbody>
                <?php $no = 0; foreach($pegawai as $row): ?>
                <tr>
                    <td><font style=font-size:10pt face="Arial" color=#000000><?php echo ++$no; ?></font></td>
                    <td width="20%"><font style=font-size:10pt face="Arial" color=#000000><?php echo $row->nama_pegawai; ?></font></td>
                    <td width="25%"><font style=font-size:10pt face="Arial" color=#000000><?php echo $row->pangkat; ?>/ <?php echo $row->golongan; ?></font></td>
                    <td><font style=font-size:10pt face="Arial" color=#000000><?php echo $row->nip; ?></font></td>
                    <td><font style=font-size:10pt face="Arial" color=#000000><?php echo $row->nama_jabatan; ?></font></td>
                    <td></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </td>
    </tr>
</table>
<br>
<table border=0 cellspacing=0 cellpadding=0 >
    <tr height=25 >
        <td valign="top" width="18%" align=left  bgcolor=#ffffff ><b><font style=font-size:10pt face="Arial" color=#000000>Untuk:</font></b></td>
        <td valign="top" width="2%" align=right  bgcolor=#ffffff ><b><font style=font-size:10pt face="Arial" color=#000000>:</font></b></td>
        <td><table>
            <tbody>
                <tr>
                    <td align="justify"><font style=font-size:10pt face="Arial" color=#000000><?php echo $surat->maksud_tugas; ?>. (<?php echo $surat->mata_anggaran; ?>) selama <?php echo $surat->lamanya; ?> (<?php echo ucwords(number_to_words($row->lamanya)); ?>) hari, yaitu dari tanggal <?php echo tgl_indo($surat->dari_tgl); ?> sampai <?php echo tgl_indo($surat->sampai_tgl); ?>, tempat tujuan <?php echo $surat->nama_kabupaten; ?> <?php echo $surat->nama_wilayah; ?> </font></td>
                </tr>
            </tbody>
        </table></td>  
    </tr>
</table>
<br>
<table border=0 cellspacing=0 cellpadding=0 >
    <tr height=25 >
        <td valign="top" width="20%" align=left  bgcolor=#ffffff ><font style=font-size:10pt face="Arial" color=#000000><?php echo $surat->dipa; ?></font></td> 
    </tr>
</table>
<br>
<table border=0 cellspacing=0 cellpadding=0 >
    <tr height=17 >
        <td width=430 align=left > <br></td>
        <td width=270 align=left  bgcolor=#ffffff ><font style=font-size:10pt face="Arial" color=#000000> Di Keluarkan di Pekanbaru</font></td>
    </tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
    <tr height=17 >
        <td width=430 align=left > <br></td>
        <td width=270 align=left  bgcolor=#ffffff ><font style=font-size:10pt face="Arial" color=#000000> Pada tanggal <?php echo tgl_indo($surat->tanggal_st); ?></font></td>
    </tr>
</table>
<table width="100%" border=0 cellspacing=0 cellpadding=0 >
    <tr height=17 >
        <td width=55.5% align=left> <br></td>
        <td width=30% align=left> <img src="<?php echo base_url('assets/images/logo/ttd.png'); ?>" width="33%"></td>
    </tr>
</table>
</body>
</html>