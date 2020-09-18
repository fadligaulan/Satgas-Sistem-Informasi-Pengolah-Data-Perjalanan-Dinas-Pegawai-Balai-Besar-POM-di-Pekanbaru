<div class="box-body">
   <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
   <a href="<?php echo site_url('surat-tugas')?>" class="btn bg-olive btn-flat margin"><i class="fa fa-book">Buat surat tugas</i></a>
</div>


<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA RIWAYAT SPPD</h3></marquee>
    </div> 
  </div>
  <div class="box-body">
    <div class="col-md-11">
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
          <li class="active"><a href="#activity" data-toggle="tab">Data Riwayat SPPD</a></li>
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
                    <th><center>Nama Pegawai</center></th>
                    <th><center>Nama Bidang</center></th>
                    <th><center>Lama</center></th>
                    <th><center>Wilayah</center></th>
                    <th><center>Dari Tanggal</center></th>
                    <th><center>Sampai Tanggal</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($sppd_by_bidang as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>
                    <td><?php echo $row->nama_bidang; ?></td>
                    <td><?php echo $row->lamanya. ' hari'; ?></td>
                    <td><?php echo $row->nama_wilayah; ?></td>
                    <td><?php echo $row->dari_tgl; ?></td>
                    <td><?php echo $row->sampai_tgl; ?></td>
                    <td><center>                                                                           
                      <a href="<?php echo site_url('Cetak/cetak_sppd/'. $row->id_pegawai); ?>" class="btn bg-navy btn-flat margin" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-print">Cetak</i></a></center>
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
                    <th><center>Nama Pegawai</center></th>
                    <th><center>Nama Bidang</center></th>
                    <th><center>Lama</center></th>
                    <th><center>Wilayah</center></th>
                    <th><center>Dari Tanggal</center></th>
                    <th><center>Sampai Tanggal</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($sppd_by_ppk as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>
                    <td><?php echo $row->nama_bidang; ?></td>
                    <td><?php echo $row->lamanya. ' hari'; ?></td>
                    <td><?php echo $row->nama_wilayah; ?></td>
                    <td><?php echo $row->dari_tgl; ?></td>
                    <td><?php echo $row->sampai_tgl; ?></td>
                    <td><center>                                                                           
                      <a href="<?php echo site_url('Cetak/cetak_sppd/'. $row->id_pegawai); ?>" class="btn bg-navy btn-flat margin" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-print">Cetak</i></a></center>
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
                    <th><center>Nama Pegawai</center></th>
                    <th><center>Nama Bidang</center></th>
                    <th><center>Lama</center></th>
                    <th><center>Wilayah</center></th>
                    <th><center>Dari Tanggal</center></th>
                    <th><center>Sampai Tanggal</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($sppd_by_kepala as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>
                    <td><?php echo $row->nama_bidang; ?></td>
                    <td><?php echo $row->lamanya. ' hari'; ?></td>
                    <td><?php echo $row->nama_wilayah; ?></td>
                    <td><?php echo $row->dari_tgl; ?></td>
                    <td><?php echo $row->sampai_tgl; ?></td>
                    <td><center>                                                                           
                      <a href="<?php echo site_url('Cetak/cetak_sppd/'. $row->id_pegawai); ?>" class="btn bg-navy btn-flat margin" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-print">Cetak</i></a></center>
                    </td> 
                  </tr>
                  <?php endforeach; ?>         
                </tbody>
              </table>
            </div>                
          </div>
        </div>
        <?php endif; ?>
        <!-- End hak akses kepala -->

        <!-- Hak akses operator -->
        <?php if($this->session->userdata('level') === '4'): ?>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Nama Pegawai</center></th>
                    <th><center>Nama Bidang</center></th>
                    <th><center>Lama</center></th>
                    <th><center>Wilayah</center></th>
                    <th><center>Dari Tanggal</center></th>
                    <th><center>Sampai Tanggal</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($sppd as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>
                    <td><?php echo $row->nama_bidang; ?></td>
                    <td><?php echo $row->lamanya. ' hari'; ?></td>
                    <td><?php echo $row->nama_wilayah; ?></td>
                    <td><?php echo $row->dari_tgl; ?></td>
                    <td><?php echo $row->sampai_tgl; ?></td>
                    <td><center>                                                                           
                      <a href="<?php echo site_url('Cetak/cetak_sppd/'. $row->id_pegawai); ?>" class="btn bg-navy btn-flat margin" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-print">Cetak</i></a></center>
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


















