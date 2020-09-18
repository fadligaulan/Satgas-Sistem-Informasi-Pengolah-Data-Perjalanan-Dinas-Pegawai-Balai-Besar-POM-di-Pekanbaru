<div class="box-body">
   <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
   <a href="<?php echo site_url('surat-tugas')?>" class="btn bg-olive btn-flat margin"><i class="fa fa-book">Data surat tugas</i></a>
   <a href="<?php echo site_url('surat-tugas/riwayat_sppd')?>" class="btn btn-bitbucket"><i class="fa fa-book">Data riwayat SPPD</i></a>
</div>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee>SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA SPPD SURAT TUGAS</marquee>
    </div> 
  </div><br>
  <div class="col-md-12">
    <?php if($message = $this->session->flashdata('message')): ?>
      <div class="alert alert-dismissible alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?>"><?php echo $message['message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>    
    <?php endif; ?><br>
  </div>
  <div class="box-body">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#activity" data-toggle="tab">Data SPPD</a></li>
        </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><center>No</center></th>
                      <th><center>Nama Pegawai</center></th>
                      <th><center>Golongan</center></th>
                      <th><center>Jabatan</center></th>
                      <th><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 0; foreach($surat_tugas as $row): ?>
                    <tr>
                      <td><?php echo ++$no; ?></td>
                      <td><?php echo $row->nama_pegawai; ?></td>
                      <td><?php echo $row->pangkat; ?></td>
                      <td><?php echo $row->nama_jabatan; ?></td>
                      <td><center>
                        <a href="<?php echo site_url('surat-tugas/update/'. $row->id_surat_tugas); ?>" class="btn btn-warning" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-trash">Update</i></a>          
                        <a href="<?php echo site_url('surat-tugas/delete/'. $row->id_surat_tugas); ?>" class="btn btn-danger" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-trash">Delete</i></a>                      
                        <a href="<?php echo site_url('Cetak/cetak_sppd/'. $row->id_pegawai); ?>" class="btn btn-success" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-print">Cetak</i></a></center>
                      </td> 
                    </tr>
                    <?php endforeach; ?>         
                  </tbody>
                </table>
              </div>                
            </div>
          </div>        
        </div>         
      </div>
    </div>
  </div>


















