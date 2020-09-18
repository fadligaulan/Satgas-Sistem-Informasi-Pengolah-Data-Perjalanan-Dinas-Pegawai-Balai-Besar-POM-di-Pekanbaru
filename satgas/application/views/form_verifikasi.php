  <style type="text/css">
    surat_tugas { width: 250px; display: block; margin:20px; }
  </style>

  <div class="box box-success box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Data Surat Tugas </h3> <?=date('Y-m-d H:i:s')?>


    </div><br>
    <div class="col-md-11">
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
            <li class="active"><a href="#activity" data-toggle="tab">Data Surat Tugas</a></li>
            <li><a href="#timeline" data-toggle="tab">Detail Kajian</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><center>No</center></th>
                      <th><center>Nomor Surat</center></th>
                      <th><center>Nama</center></th>
                      <th><center>Bidang</center></th>
                      <th><center>Maksud</center></th>
                      <th><center>Provinsi</center></th>
                      <th><center>Wilayah</center></th>
                      <th><center>Tahun Anggaran</center></th>
                      <th><center>Tanggal Surat</center></th>
                      <th><center>Dari Tanggal</center></th>
                      <th><center>Sampai Tanggal</center></th>
                      <th><center>Dipa</center></th>
                      <th><center>Lama</center></th>
                      <th><center>Tanda Tangan</center></th>
                      <th><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 0; foreach($surat_tugas->result() as $row): ?>
                    <tr>
                      <td><?php echo ++$no; ?></td>
                      <td><?php echo $row->id_bidang; ?></td>
                      <td><?php echo $row->Nama; ?></td>
                      <td><?php echo $row->nama_bidang; ?></td>
                      <td><?php echo $row->MaksudTugas; ?></td>
                      <td><?php echo $row->NamaProvinsi; ?></td>
                      <td><?php echo $row->NamaWilayah; ?></td>
                      <td><?php echo $row->TahunAnggaran; ?></td>
                      <td><?php echo $row->Tanggal_ST; ?></td>
                      <td><?php echo $row->DariTgl; ?></td>
                      <td><?php echo $row->SampaiTgl; ?></td>
                      <td><?php echo $row->Dipa; ?></td>
                      <td><?php echo $row->Lamanya; ?></td>
                      <td><?php echo $row->NamaPejabat; ?></td>
                      <td><center>
                        <a 
                        href = "javascript:;"
                        data-id = "<?php echo $row->id_surat_tugas; ?>"
                        data-nama = "<?php echo $row->id_bidang; ?>"
                        data-nip = "<?php echo $row->Tanggal_ST; ?>"
                        data-nip = "<?php echo $row->id_provinsi; ?>"
                        data-nip = "<?php echo $row->id_wilayah; ?>"
                        data-pangkat = "<?php echo $row->id_maksud; ?>"
                        data-jabatan ="<?php echo $row->Lamanya; ?>"
                        data-jabatan ="<?php echo $row->Dipa; ?>"
                        data-jabatan ="<?php echo $row->DariTgl; ?>"
                        data-jabatan ="<?php echo $row->SampaiTgl; ?>"
                        data-jabatan ="<?php echo $row->id_tandatangan; ?>"
                        data-toggle ="modal" data-target="#update">
                        <button class="btn btn-warning" data-target="#ubah" data-toggle="modal" data-placement="top" title="update"><i class="fa fa-edit">Update</i></button>                                                              
                      </a>
                      <a>
                        <a href="<?php echo site_url('pegawai/delete/'. $row->id_surat_tugas); ?>" class="btn btn-danger" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-trash">Delete</i></a>                                                              
                      </a>
                      <a>
                        <a href="<?php echo site_url('Cetak/cetak_pdf/'. $row->id_surat_tugas); ?>" class="btn btn-success" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-print">Cetak</i></a>                                                              
                      </a>                                
                    </center>
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


<!-- Modal Update Pegawai -->
<div class="modal fade" id="update">
  <form action="<?php echo base_url().'index.php/pegawai/update'?>"  id="form-data" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Update Pegawai</h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row" >
                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Nip">Nama Bidang</label>
                      <input type="hidden" name="id" id="id">
                      <select name="id_bidang" class="form-control select2"  style="width: 100%;">
                        <option selected="<?php echo $row->id_bidang; ?>"><?php echo $row->nama_bidang; ?></option>
                        <?php $no = 0; foreach ($bidang as $row): ?>
                        <option value="<?php echo $row->id_bidang; ?>"><?php echo $row->nama_bidang; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Surat:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="Tanggal_ST" class="form-control pull-right" id="datepicker1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nama Pegawai:</label>
                    <select name="id_pegawai[]" class="form-control select2" multiple="multiple" data-placeholder="Pilih pegawai"
                    style="width: 100%;">
                    <?php $no = 0; foreach ($pegawai as $row): ?>
                    <option value="<?php echo $row->id_pegawai; ?>"><?php echo $row->Nama; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Provinsi:</label>
                <select name="id_provinsi" class="form-control select2" style="width: 100%;">
                  <option selected="selected">--Pilih Provinsi--</option>
                  <?php $no = 0; foreach ($provinsi as $row): ?>
                  <option value="<?php echo $row->id_provinsi; ?>"><?php echo $row->NamaProvinsi; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>Kabupaten:</label>
              <select name="id_wilayah" class="form-control select2" style="width: 100%;">
                <option selected="selected">--Pilih Kabupaten/kota--</option>
                <?php $no = 0; foreach ($wilayah as $row): ?>
                <option value="<?php echo $row->id_wilayah; ?>"><?php echo $row->NamaWilayah; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Maksud Tugas:</label>
            <select name="id_maksud" class="form-control select2" style="width: 100%;">
              <option selected="selected">--Pilih Maksud Tugas--</option>
              <?php $no = 0; foreach ($maksud as $row): ?>
              <option value="<?php echo $row->id_maksud; ?>"><?php echo $row->MaksudTugas; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Lama Tugas:</label>
          <input type="number" name="Lamanya" class="form-control" id="exampleInputEmail1" placeholder="Lama Tugas">
        </div>
        <div class="form-group">
          <label>Dipa:</label>
          <select name="Dipa" class="form-control select2" style="width: 100%;">
            <option selected="selected">--Pilih Dipa</option>
            <option value="Dibebankan">Dibebankan</option>
            <option value="Tidak dibebankan">Tidak dibebankan</option>
          </select>
        </div>
        <div class="form-group">
          <label>Dari Tanggal:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" name="DariTgl" class="form-control pull-right" id="datepicker2">
          </div>
        </div>
        <div class="form-group">
          <label>Sampai Tanggal:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" name="SampaiTgl" class="form-control pull-right" id="datepicker3">
          </div>
        </div>
        <div class="form-group">
          <label>Penanda Tangan:</label>
          <select name="id_tandatangan" class="form-control select2" style="width: 100%;">
           <option selected="selected">--Pilih Penanda Tangan--</option>
           <?php $no = 0; foreach ($tanda_tangan as $row): ?>
           <option value="<?php echo $row->id_tandatangan; ?>"><?php echo $row->NamaPejabat; ?></option>
         <?php endforeach; ?>
       </select>
     </div>
   </div>
 </div>     
</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
  <button type="submit" name="submit" value=".$row->id_pegawai." class="btn btn-info">Save changes</button>
</div>
</div>
</div>
</form>
</div>


















