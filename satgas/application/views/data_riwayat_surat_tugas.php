<div class="box-body">
   <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
   <a href="<?php echo site_url('surat-tugas')?>" class="btn bg-olive btn-flat margin"><i class="fa fa-book">Buat surat tugas</i></a>
</div>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA RIWAYAT SURAT TUGAS</h3></marquee>
    </div>
  </div>
  <div class="box-body">
    <div class="col-md-12">
      <?php if($message = $this->session->flashdata('message')): ?>
        <div class="alert alert-dismissible alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?>"><?php echo $message['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>    
      <?php endif; ?><br>
    </div>
  </div>
  <div class="box-body">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#activity" data-toggle="tab">Data riwayat surat tugas</a></li>
        </ul>
        <!-- Hak akses bidang -->
        <?php if($this->session->userdata('level') === '1'): ?>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Tanggal Surat</center></th>
                    <th><center>Bidang</center></th>
                    <th><center>Provinsi</center></th>
                    <th><center>Wilayah</center></th>
                    <th><center>Dari Tanggal</center></th>
                    <th><center>Sampai Tanggal</center></th>
                    <th><center>PPK</center></th>
                    <th><center>Tanda Tangan</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($surat_tugas_by_bidang as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->surat_created_at; ?></td>
                    <td><?php echo $row->nama_bidang; ?></td>
                    <td><?php echo $row->nama_provinsi; ?></td>
                    <td><?php echo $row->nama_wilayah; ?></td>
                    <td><?php echo $row->dari_tgl; ?></td>
                    <td><?php echo $row->sampai_tgl; ?></td>
                    <td><?php echo $row->nama_ppk; ?></td>
                    <td><?php echo $row->nama_pejabat; ?></td>
                    <td><center>                                                                           
                      <a href="<?php echo site_url('Cetak/cetak_st/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-file-pdf-o">Download</i></a></center>

                    </td> 
                  </tr>
                  <?php endforeach; ?>         
                </tbody>
              </table>
            </div>                
          </div>
        </div>
        <?php endif; ?>
        <!-- End hak akses bidang -->

        <!-- Hak akses ppk -->
        <?php if($this->session->userdata('level') === '2'): ?>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Tanggal Surat</center></th>
                    <th><center>Bidang</center></th>
                    <th><center>Provinsi</center></th>
                    <th><center>Wilayah</center></th>
                    <th><center>Dari Tanggal</center></th>
                    <th><center>Sampai Tanggal</center></th>
                    <th><center>PPK</center></th>
                    <th><center>Tanda Tangan</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($surat_tugas_by_ppk as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->surat_created_at; ?></td>
                    <td><?php echo $row->nama_bidang; ?></td>
                    <td><?php echo $row->nama_provinsi; ?></td>
                    <td><?php echo $row->nama_wilayah; ?></td>
                    <td><?php echo $row->dari_tgl; ?></td>
                    <td><?php echo $row->sampai_tgl; ?></td>
                    <td><?php echo $row->nama_ppk; ?></td>
                    <td><?php echo $row->nama_pejabat; ?></td>
                    <td><center>                                                                           
                      <a href="<?php echo site_url('Cetak/cetak_st/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-file-pdf-o">Download</i></a></center>
                    </td> 
                  </tr>
                  <?php endforeach; ?>         
                </tbody>
              </table>
            </div>                
          </div>
        </div>
        <?php endif; ?>
        <!-- End hak akses ppk -->

        <!-- Hak akses kepala balai -->
        <?php if($this->session->userdata('level') === '3'): ?>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Tanggal Surat</center></th>
                    <th><center>Bidang</center></th>
                    <th><center>Provinsi</center></th>
                    <th><center>Wilayah</center></th>
                    <th><center>Dari Tanggal</center></th>
                    <th><center>Sampai Tanggal</center></th>
                    <th><center>PPK</center></th>
                    <th><center>Tanda Tangan</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($surat_tugas_by_kepala as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->surat_created_at; ?></td>
                    <td><?php echo $row->nama_bidang; ?></td>
                    <td><?php echo $row->nama_provinsi; ?></td>
                    <td><?php echo $row->nama_wilayah; ?></td>
                    <td><?php echo $row->dari_tgl; ?></td>
                    <td><?php echo $row->sampai_tgl; ?></td>
                    <td><?php echo $row->nama_ppk; ?></td>
                    <td><?php echo $row->nama_pejabat; ?></td>
                    <td><center>                                                                           
                      <a href="<?php echo site_url('Cetak/cetak_st/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-file-pdf-o">Download</i></a></center>
                    </td> 
                  </tr>
                  <?php endforeach; ?>         
                </tbody>
              </table>
            </div>                
          </div>
        </div>
        <?php endif; ?>
        <!-- End hak akses kepala balai -->

        <!-- Hak akses operator -->
        <?php if($this->session->userdata('level') === '4'): ?>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><center>No</center></th>
                      <th><center>Tanggal Surat</center></th>
                      <th><center>Bidang</center></th>
                      <th><center>Dari Tanggal</center></th>
                      <th><center>Sampai Tanggal</center></th>
                      <th><center>Tanda Tangan</center></th>
                      <th><center>Status</center></th>
                      <th><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 0; foreach($surat_tugas as $row): ?>
                    <tr>
                      <td><?php echo ++$no; ?></td>
                      <td><?php echo $row->surat_created_at; ?></td>
                      <td><?php echo $row->nama_bidang; ?></td>
                      <td><?php echo $row->dari_tgl; ?></td>
                      <td><?php echo $row->sampai_tgl; ?></td>
                      <td><?php echo $row->nama_pejabat; ?></td>
                      <td><span class="label label-warning"><?php echo $row->status; ?></span></td>
                      <td><center>
                         <a href="<?php echo site_url('Cetak/cetak_st/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">Surat Tugas</i></a></center>
                      </td> 
                    </tr>
                    <?php endforeach; ?>         
                  </tbody>
                </table>
              </div>                
            </div>
          </div>
        <?php endif; ?>           
      </div>         
    </div>
  </div>
</div>


















