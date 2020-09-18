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