
<div class="box-body">
   <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
   <a href="<?php echo site_url('surat-tugas/riwayat_surat_tugas')?>" class="btn bg-olive btn-flat margin"><i class="fa fa-book">Data riwayat surat tugas</i></a>
   <a href="<?php echo site_url('surat-tugas/riwayat_sppd')?>" class="btn btn-bitbucket"><i class="fa fa-book">Data riwayat SPPD</i></a>
</div>
<!-- Form buat surat tugas -->
<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee>SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/HALAMAN BUAT SURAT TUGAS</marquee>
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
    <form action="<?php echo site_url('surat_tugas/create');?>"  id="form-data" method="post">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Buat Surat Tugas</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="box-body table-responsive">
                <div class="row">
                  <div class="col-md-6">
                   <!-- LEVEL ADMIN -->
                   <?php if($this->session->userdata('level') === '4'): ?>
                   <div class="form-group <?= form_error('id_bidang') ? 'has-error' : null?>">
                    <label>Nama Bidang:</label>
                      <select name="id_bidang" class="form-control select2"  style="width: 100%;">
                          <option value="">--Pilih bidang--</option>
                          <?php $no = 0; foreach ($bidang as $row): ?>
                          <option value="<?php echo $row->id_bidang; ?>"><?php echo $row->nama_bidang; ?></option>
                          <?php endforeach; ?>
                      </select>
                      <?= form_error('id_bidang')?>
                    </div>
                    <?php endif?>
                    <!-- END LEVEL ADMIN -->
                    <!-- LEVEL BIDANG -->
                   <?php if($this->session->userdata('level') === '1'): ?>
                   <div class="form-group <?= form_error('id_bidang') ? 'has-error' : null?>">
                    <label>Nama Bidang:</label>
                      <select name="id_bidang" class="form-control select2"  style="width: 100%;">
                          <option value="">--Pilih bidang--</option>
                          <?php $no = 0; foreach ($get_by_bidang as $row): ?>
                          <option value="<?php echo $row->id_bidang; ?>"><?php echo $row->nama_bidang; ?></option>
                          <?php endforeach; ?>
                      </select>
                      <?= form_error('id_bidang')?>
                    </div>
                    <?php endif?>
                    <!-- END LEVEL BIDANG -->
                    <div class="form-group <?= form_error('tanggal_st') ? 'has-error' : null?>">
                      <label>Tanggal Surat:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tanggal_st" class="form-control pull-right" id="datepicker1">
                      </div>
                      <?= form_error('tanggal_st')?>
                    </div>
                    <div class="form-group <?= form_error('id_pegawai[]') ? 'has-error' : null?>">
                      <label>Nama Pegawai:</label>
                      <select name="id_pegawai[]" class="form-control select2" multiple="multiple" data-placeholder="Pilih pegawai"
                      style="width: 100%;">
                        <?php $no = 0; foreach ($pegawai as $row): ?>
                        <option value="<?php echo $row->id_pegawai; ?>"><?php echo $row->nama_pegawai; ?>||<?php echo $row->nip; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?= form_error('id_pegawai[]')?>
                    </div>
                    <div class="form-group <?= form_error('id_provinsi') ? 'has-error' : null?>">
                      <label>Provinsi:</label>
                        <select name="id_provinsi" class="form-control select2" id="id_provinsi" style="width: 100%;">
                          <option value="">--Pilih Provinsi--</option>
                          <?php
                          foreach($provinsi as $row)
                          {
                            echo '<option value="'.$row->id_provinsi.'">'.$row->nama_provinsi.'</option>';
                          }
                         ?>
                        </select>
                        <?= form_error('id_provinsi')?>
                    </div>
                    <div class="form-group <?= form_error('id_wilayah') ? 'has-error' : null?>">
                      <label>Nama Wilayah:</label>
                      <select name="id_wilayah" class="form-control select2" id="id_wilayah" style="width: 100%;">
                        <option value="">Pilih Wilayah</option>
                      </select>
                      <?= form_error('id_wilayah')?>
                    </div>
                    <?php if($this->session->userdata('level') === '4'): ?>
                    <div class="form-group <?= form_error('id_maksud') ? 'has-error' : null?>">
                      <label>Maksud Tugas:</label>
                      <select name="id_maksud" class="form-control select2" style="width: 100%;">
                          <option value="">--Pilih Maksud Tugas--</option>
                          <?php foreach ($maksud as $row): ?>
                          <option value="<?php echo $row->id_maksud; ?>"><?php echo $row->maksud_tugas; ?> | <?php echo $row->mata_anggaran; ?></option>
                          <?php endforeach; ?>
                      </select>
                      <?= form_error('id_maksud')?>
                    </div>
                    <?php endif?>
                    <?php if($this->session->userdata('level') === '1'): ?>
                    <div class="form-group <?= form_error('id_maksud') ? 'has-error' : null?>">
                      <label>Maksud Tugas:</label>
                      <select name="id_maksud" class="form-control select2" style="width: 100%;">
                          <option value="">--Pilih Maksud Tugas--</option>
                          <?php foreach ($maksud_by_bidang as $row): ?>
                          <option value="<?php echo $row->id_maksud; ?>"><?php echo $row->maksud_tugas; ?> | <?php echo $row->mata_anggaran; ?></option>
                          <?php endforeach; ?>
                      </select>
                      <?= form_error('id_maksud')?>
                    </div>
                    <?php endif?>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Cantumkan beban DIPA</label>
                      <div>
                        <input type="checkbox" class="flat-red" onchange="onCheckboxChanged(this.checked)">       
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group" id="hiddenRow" style="display:none;">
                      <label>Dipa:</label>
                      <select name="dipa" class="form-control select2" style="width: 100%;" >
                        <option value="">--Pilih dipa</option>
                        <option value="Dibebankan pada DIPA Balai Besar POM di Pekanbaru">Dibebankan</option>
                        <option value="Tidak dibebankan pada DIPA Balai Besar POM di Pekanbaru">Tidak dibebankan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group <?= form_error('dari_tgl') ? 'has-error' : null?>">
                      <label>Dari Tanggal:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="dari_tgl" class="form-control pull-right" id="datepicker2">
                      </div>
                      <?= form_error('dari_tgl')?>
                    </div>
                    <div class="form-group <?= form_error('sampai_tgl') ? 'has-error' : null?>">
                      <label>Sampai Tanggal:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="sampai_tgl" class="form-control pull-right" id="datepicker3" onchange="DateCheck()">
                      </div>
                      <?= form_error('sampai_tgl')?>
                    </div>
                    <div class="form-group <?= form_error('id_tandatangan') ? 'has-error' : null?>">
                      <label>Penanda Tangan:</label>
                      <select name="id_tandatangan" class="form-control select2" style="width: 100%;" >
                        <option value="">--Pilih Penanda Tangan--</option>
                        <?php $no = 0; foreach ($tanda_tangan as $row): ?>
                        <option value="<?php echo $row->id_tandatangan; ?>"><?php echo $row->nama_pejabat; ?> <?php echo $row->jabatan2; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?= form_error('id_tandatangan')?>
                    </div>
                    <div class="form-group <?= form_error('id_ppk') ? 'has-error' : null?>">
                      <label>Penjabat Pembuat Komitment:</label>
                      <select name="id_ppk" class="form-control select2" style="width: 100%;">
                        <option value="">--Pilih Pejabat--</option>
                        <?php $no = 0; foreach ($ppk as $row): ?>
                        <option value="<?php echo $row->id_ppk; ?>"><?php echo $row->nama_ppk; ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?= form_error('id_ppk')?>
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-info">Submit</button>
                     <button type="reset" name="submit" value="true" class="btn btn-default">Reset</button>
                   </div>
                  </div>
                </div>
              </div>                
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End form buat surat tugas -->

<!-- Data surat tugas -->
<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee>SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/HALAMAN BUAT SURAT TUGAS</marquee>
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
      <?php endif; ?>
    </div>
  </div>
  <div class="box-body">
    <div class="col-md-12">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#activity" data-toggle="tab">Data Surat Tugas</a></li>
        </ul>
        <!-- HAK AKSES ADMIN -->
        <?php if($this->session->userdata('level') === '4'): ?>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Tanggal Surat</center></th>
                    <th><center>Waktu</center></th>
                    <th><center>Nomor Surat</center></th>
                    <th><center>Nama Bidang</center></th>
                    <th><center>Jumlah Pegawai</center></th>
                    <th><center>Aksi</center></th>
                    <th><center>ST PDF</center></th>
                    <th><center>ST PDF Tanpa KOP</center></th>
                    <!--<th><center>ST Word</center></th>-->
                    <th><center>SPPD Depan</center></th>
                    <th><center>SPPD Belakang</center></th> 
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($surat_tugas as $row): ?>
                  <tr>
                    <td width="5%"><?php echo ++$no; ?></td>
                    <td width="20%"><?php echo tgl_indo($row->surat_created_at); ?></td>
                    <td width="10%"><?php echo $row->time; ?></td>
                    <td width="20%"><?php echo $row->no_surat; ?></td>
                    <td width="20%"><?php echo $row->nama_bidang; ?></td>
                    <td width="10%"><?php echo $row->jml_pegawai; ?></td>
                    <td><center>
                       <a href="<?php echo site_url('surat-tugas/update/'. $row->id_surat_tugas); ?>" class="btn btn-warning"><i class="fa fa-edit">Edit</i></a>
                       <a href="<?php echo site_url('surat-tugas/delete/'. $row->id_surat_tugas); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash">Delete</i></a>
                    </td>
                    <td><center>
                       <a href="<?php echo site_url('Cetak/cetak_st/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">ST PDF</i></a></center>
                      <!--  <a href="<?php echo site_url('surat-tugas/sppd_on_surat/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-search">SPPD Depan</i></a> -->
                    </td>
                    <td><center>
                       <a href="<?php echo site_url('Cetak/cetak_st2/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">ST PDF</i></a></center>
                      <!--  <a href="<?php echo site_url('surat-tugas/sppd_on_surat/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-search">SPPD Depan</i></a> -->
                    </td>
                    <!--<td><center><a href="<?php echo site_url('Cetak/word/'. $row->id_surat_tugas); ?>" class="btn bg-orange btn-flat margin"><i class="fa fa-file-word-o">ST Word</i>-->
                    <!--</a></center></td> -->
                    <td><center><a href="<?php echo site_url('Cetak/sppd_keseluruhan/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">SPPD Depan</i></a></center></td>
                    <td><center><a href="<?php echo site_url('Cetak/cetak_belakang/'. $row->id_surat_tugas); ?>" class="btn bg-purple btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">SPPD Belakang</i></a></center>
                    </td>
                  </tr>
                  <?php endforeach; ?>         
                </tbody>
              </table>
            </div>                
          </div>
        </div>
        <?php endif; ?>
        <!-- END LEVEL HAK AKASES ADMIN -->

        <!-- HAK AKSES KEPALA -->
        <?php if($this->session->userdata('level') === '3'): ?>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Tanggal Surat</center></th>
                    <th><center>Waktu</center></th>
                    <th><center>Nomor Surat</center></th>
                    <th><center>Nama Bidang</center></th>
                    <th><center>Jumlah Pegawai</center></th>
                    <th><center>Aksi</center></th>
                    <th><center>ST PDF</center></th>
                    <th><center>ST PDF Tanpa KOP</center></th>
                    <!--<th><center>ST Word</center></th>-->
                    <th><center>SPPD Depan</center></th>
                    <th><center>SPPD Belakang</center></th> 
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($surat_tugas as $row): ?>
                  <tr>
                    <td width="5%"><?php echo ++$no; ?></td>
                    <td width="20%"><?php echo tgl_indo($row->surat_created_at); ?></td>
                    <td width="10%"><?php echo $row->time; ?></td>
                    <td width="20%"><?php echo $row->no_surat; ?></td>
                    <td width="20%"><?php echo $row->nama_bidang; ?></td>
                    <td width="10%"><?php echo $row->jml_pegawai; ?></td>
                    <td><center>
                       <a href="<?php echo site_url('surat-tugas/update/'. $row->id_surat_tugas); ?>" class="btn btn-warning"><i class="fa fa-edit">Edit</i></a>
                       <a href="<?php echo site_url('surat-tugas/delete/'. $row->id_surat_tugas); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash">Delete</i></a>
                    </td>
                    <td><center>
                       <a href="<?php echo site_url('Cetak/cetak_st/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">ST PDF</i></a></center>
                      <!--  <a href="<?php echo site_url('surat-tugas/sppd_on_surat/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-search">SPPD Depan</i></a> -->
                    </td>
                    <td><center>
                       <a href="<?php echo site_url('Cetak/cetak_st2/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">ST PDF</i></a></center>
                      <!--  <a href="<?php echo site_url('surat-tugas/sppd_on_surat/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-search">SPPD Depan</i></a> -->
                    </td>
                    <!--<td><center><a href="<?php echo site_url('Cetak/word/'. $row->id_surat_tugas); ?>" class="btn bg-orange btn-flat margin"><i class="fa fa-file-word-o">ST Word</i>-->
                    <!--</a></center></td> -->
                    <td><center><a href="<?php echo site_url('Cetak/sppd_keseluruhan/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">SPPD Depan</i></a></center></td>
                    <td><center><a href="<?php echo site_url('Cetak/cetak_belakang/'. $row->id_surat_tugas); ?>" class="btn bg-purple btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">SPPD Belakang</i></a></center>
                    </td>
                  </tr>
                  <?php endforeach; ?>         
                </tbody>
              </table>
            </div>                
          </div>
        </div>
        <?php endif; ?>
        <!-- END LEVEL HAK AKASES KEPALA -->

        <!-- HAK AKSES BIDANG -->
        <?php if($this->session->userdata('level') === '1'): ?>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Tanggal Surat</center></th>
                    <th><center>Waktu</center></th>
                    <th><center>Nomor Surat</center></th>
                    <th><center>Nama Bidang</center></th>
                    <th><center>Jumlah Pegawai</center></th>
                    <th><center>Aksi</center></th>
                    <th><center>ST PDF</center></th>
                    <th><center>ST PDF Tanpa KOP</center></th>
                    <!--<th><center>ST Word</center></th>-->
                    <th><center>SPPD Depan</center></th>
                    <th><center>SPPD Belakang</center></th> 
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($surat_by_bidang as $row): ?>
                  <tr>
                    <td width="5%"><?php echo ++$no; ?></td>
                    <td width="20%"><?php echo tgl_indo($row->surat_created_at); ?></td>
                    <td width="10%"><?php echo $row->time; ?></td>
                    <td width="20%"><?php echo $row->no_surat; ?></td>
                    <td width="20%"><?php echo $row->nama_bidang; ?></td>
                    <td width="10%"><?php echo $row->jml_pegawai; ?></td>
                    <td><center>
                       <a href="<?php echo site_url('surat-tugas/update/'. $row->id_surat_tugas); ?>" class="btn btn-warning"><i class="fa fa-edit">Edit</i></a>
                       <a href="<?php echo site_url('surat-tugas/delete/'. $row->id_surat_tugas); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash">Delete</i></a>
                    </td>
                    <td><center>
                       <a href="<?php echo site_url('Cetak/cetak_st/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">ST PDF</i></a></center>
                      <!--  <a href="<?php echo site_url('surat-tugas/sppd_on_surat/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-search">SPPD Depan</i></a> -->
                    </td>
                    <td><center>
                       <a href="<?php echo site_url('Cetak/cetak_st2/'. $row->id_surat_tugas); ?>" class="btn bg-maroon btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">ST PDF</i></a></center>
                      <!--  <a href="<?php echo site_url('surat-tugas/sppd_on_surat/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-search">SPPD Depan</i></a> -->
                    </td>
                    <!--<td><center><a href="<?php echo site_url('Cetak/word/'. $row->id_surat_tugas); ?>" class="btn bg-orange btn-flat margin"><i class="fa fa-file-word-o">ST Word</i>-->
                    <!--</a></center></td> -->
                    <td><center><a href="<?php echo site_url('Cetak/sppd_keseluruhan/'. $row->id_surat_tugas); ?>" class="btn bg-navy btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">SPPD Depan</i></a></center></td>
                    <td><center><a href="<?php echo site_url('Cetak/cetak_belakang/'. $row->id_surat_tugas); ?>" class="btn bg-purple btn-flat margin" data-id_surat_tugas="<?php echo $row->id_surat_tugas;?>"><i class="fa fa-file-pdf-o">SPPD Belakang</i></a></center>
                    </td> 
                  </tr>
                  <?php endforeach; ?>         
                </tbody>
              </table>
            </div>                
          </div>
        </div>
        <?php endif; ?>
        <!-- END LEVEL HAK AKSES BIDANG -->           
      </div>         
    </div>
  </div>
</div>
<!-- End data surat tugas -->

<!-- Form modal hapus surat tugas -->
<form action="<?php echo site_url('surat_tugas/delete');?>" method="post">
  <div class="modal modal-danger fade" id="DeleteModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            <h4 class="modal-title">Hapus Data</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin.&hellip;??</p>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="delete_id" required>
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline">Yes</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- End form modal hapus surat tugas -->

<!-- javascript hapus surat tugas -->
<script>
   //DELETE DATA PEGAWAI
  $('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
        Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
      }
    })

  });


$(document).ready(function(){
 $('#id_provinsi').change(function(){
  var id_provinsi = $('#id_provinsi').val();
  if(id_provinsi != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>surat_tugas/fetch_wilayah",
    method:"POST",
    data:{id_provinsi:id_provinsi},
    success:function(data)
    {
     $('#id_wilayah').html(data);
    }
   });
  }
  else
  {
   $('#id_wilayah').html('<option value="">Pilih Wilayah</option>');

  }
 });
 
});


function onCheckboxChanged(checked){
  if(checked)
    $("#hiddenRow").fadeIn(1500 ,'linear');
  else $("#hiddenRow").fadeOut(900 ,'linear');
}

function DateCheck()
{
  var StartDate= document.getElementById('datepicker2').value;
  var EndDate= document.getElementById('datepicker3').value;
  var eDate = new Date(EndDate);
  var sDate = new Date(StartDate);
  if(StartDate!= '' && StartDate!= '' && sDate> eDate)
    {
    alert("Tanggal harus lebih besar dari tanggal berangkat!");
    return false;
    }
}


</script>
<!-- End javascript hapus surat tugas -->












