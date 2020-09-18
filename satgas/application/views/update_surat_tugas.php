<div class="box-body">
   <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
</div>
<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">Update data surat tugas</h3></marquee>
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
    <form action=""  id="form-data" method="post"  enctype="multipart/form-data">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Update surat tugas</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="box-body table-responsive">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $surat_tugas->id_surat_tugas; ?>">
                    </div>
                    <!-- LEVEL ADMIN -->
                    <?php if($this->session->userdata('level') === '4'): ?>
                    <div class="form-group  <?= form_error('id_bidang') ? 'has-error' : null?>">
                      <label> Bidang:</label>
                      <select name="id_bidang" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $surat_tugas->id_bidang; ?>"><?php echo $surat_tugas->nama_bidang; ?></option>
                        <?php $no = 0; foreach ($bidang as $row): ?>
                        <option value="<?php echo $row->id_bidang; ?>"><?php echo $row->nama_bidang; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <?php endif?>
                    <!-- END LEVEL ADMIN -->
                    <!-- LEVEL BIDANG -->
                    <?php if($this->session->userdata('level') === '1'): ?>
                    <div class="form-group <?= form_error('id_bidang') ? 'has-error' : null?>">
                    <label>Nama Bidang:</label>
                      <select name="id_bidang" class="form-control select2"  style="width: 100%;">
                          <option value="<?php echo $surat_tugas->id_bidang; ?>"><?php echo $surat_tugas->nama_bidang; ?></option>
                          <?php $no = 0; foreach ($get_by_bidang as $row): ?>
                          <option value="<?php echo $row->id_bidang; ?>"><?php echo $row->nama_bidang; ?></option>
                          <?php endforeach; ?>
                      </select>
                      <?= form_error('id_bidang')?>
                    </div>
                    <?php endif?>
                    <!-- END LEVEL BIDANG -->
                    <div class="form-group">
                      <label>Tanggal Surat:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tanggal_st" value="<?php echo $surat_tugas->tanggal_st; ?>" class="form-control pull-right" id="datepicker1">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Pegawai:</label>
                      <select name="id_pegawai[]" class="form-control select2" multiple="multiple" data-placeholder="Pilih pegawai"
                      style="width: 100%;">
                          <?php 
                          // push data pegawai on surat to array data
                          $pegawaiOnSurat = array();
                          foreach ($pegawai_by_surat as $row):
                            $pegawaiOnSurat[] = $row->id_pegawai;
                          endforeach;

                          foreach ($pegawai as $row): ?>
                            <option value="<?php echo $row->id_pegawai; ?>" <?=in_array($row->id_pegawai, $pegawaiOnSurat) ? 'selected' : ''?> >
                              <?php echo $row->nama_pegawai; ?>||<?php echo $row->nip; ?>
                            </option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Provinsi:</label>
                        <select name="id_provinsi" class="form-control select2" id="id_provinsi" style="width: 100%;">
                          <option value="<?php echo $surat_tugas->id_provinsi; ?>"><?php echo $surat_tugas->nama_provinsi; ?></option>
                          <?php
                          foreach($provinsi as $row)
                          {
                            echo '<option value="'.$row->id_provinsi.'">'.$row->nama_provinsi.'</option>';
                          }
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Wilayah:</label>
                        <select name="id_wilayah" class="form-control select2" id="id_wilayah" style="width: 100%;">
                          <option value="<?php echo $surat_tugas->id_wilayah; ?>"><?php echo $surat_tugas->nama_wilayah; ?></option>
                          <option value="">Select Wilayah</option>
                        </select>
                    </div>
                    <?php if($this->session->userdata('level') === '4'): ?>
                    <div class="form-group">
                      <label>Maksud Tugas:</label>
                      <select name="id_maksud" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $surat_tugas->id_maksud; ?>"><?php echo $surat_tugas->maksud_tugas; ?></option>
                        <?php $no = 0; foreach ($maksud as $row): ?>
                        <option value="<?php echo $row->id_maksud; ?>"><?php echo $row->maksud_tugas; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <?php endif?>
                    <?php if($this->session->userdata('level') === '1'): ?>
                    <div class="form-group">
                      <label>Maksud Tugas:</label>
                      <select name="id_maksud" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $surat_tugas->id_maksud; ?>"><?php echo $surat_tugas->maksud_tugas; ?> | <?php echo $surat_tugas->mata_anggaran; ?></option>
                        <?php $no = 0; foreach ($maksud_by_bidang as $row): ?>
                        <option value="<?php echo $row->id_maksud; ?>"><?php echo $row->maksud_tugas; ?> | <?php echo $row->mata_anggaran; ?></option>
                        <?php endforeach; ?>
                      </select>
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
                      <select name="dipa" class="form-control select2" style="width: 100%;">
                        <option value="<?php echo $surat_tugas->dipa; ?>"><?php echo $surat_tugas->dipa; ?></option>
                        <option value="Dibebankan pada DIPA Balai Besar POM di Pekanbaru">Dibebankan</option>
                        <option value="Tidak dibebankan pada DIPA Balai Besar POM di Pekanbaru">Tidak dibebankan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Dari Tanggal:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="dari_tgl" value="<?php echo $surat_tugas->dari_tgl; ?>" class="form-control pull-right" id="datepicker2">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Sampai Tanggal:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="sampai_tgl" value="<?php echo $surat_tugas->sampai_tgl; ?>" class="form-control pull-right" id="datepicker3">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Penanda Tangan:</label>
                      <select name="id_tandatangan" class="form-control select2" style="width: 100%;">
                         <option value="<?php echo $surat_tugas->id_tandatangan; ?>"><?php echo $surat_tugas->nama_pejabat; ?></option>
                         <?php $no = 0; foreach ($tanda_tangan as $row): ?>
                         <option value="<?php echo $row->id_tandatangan; ?>"><?php echo $row->nama_pejabat; ?> <?php echo $row->jabatan2; ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Penjabat Pembuat Komitment:</label>
                      <select name="id_ppk" class="form-control select2" style="width: 100%;">
                         <option value="<?php echo $surat_tugas->id_ppk; ?>"><?php echo $surat_tugas->nama_ppk; ?></option>
                         <?php $no = 0; foreach ($ppk as $row): ?>
                         <option value="<?php echo $row->id_ppk; ?>"><?php echo $row->nama_ppk; ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                     <button type="submit" name="submit" value="true" class="btn btn-info">Simpan</button>
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

<script >
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
</script>









