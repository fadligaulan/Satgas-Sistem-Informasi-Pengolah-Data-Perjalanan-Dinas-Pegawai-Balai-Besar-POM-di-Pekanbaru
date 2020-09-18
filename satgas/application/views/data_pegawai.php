<div class="box-body">
   <a href="<?php echo site_url('Pegawai/insert')?>" class="btn bg-olive btn-flat margin"><i class="fa fa-plus-circle">Tambah Pegawai</i></button>
   <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
</div>

 
<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA PEGAWAI</h3></marquee>
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
          <li class="active"><a href="#activity" data-toggle="tab">Data Pegawai</a></li>
          <!--   <li><a href="#timeline" data-toggle="tab">Detail Kajian</a></li> -->
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="10%"><center>NIP</center></th>
                    <th width="20%"><center>Nama Pegawai</center></th>
                    <th width="10%"><center>Pangkat</center></th>
                    <th width="10%"><center>Golongan</center></th>
                    <th width="30%"><center>Jabatan</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($pegawai as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->nip; ?></td>
                    <td><?php echo $row->nama_pegawai; ?></td>
                    <td><?php echo $row->pangkat; ?></td>
                    <td><?php echo $row->golongan; ?></td>
                    <td><?php echo $row->nama_jabatan; ?></td>
                    <td><center>
                      <a 
                      href = "javascript:;"
                      data-id = "<?php echo $row->id_pegawai; ?>"
                      data-nip = "<?php echo $row->nip; ?>"
                      data-nama = "<?php echo $row->nama_pegawai; ?>"
                      data-pangkat = "<?php echo $row->id_pangkat ?>"
                      data-jabatan ="<?php echo $row->id_jabatan ?>"
                      data-toggle ="modal" data-target="#update">
                      <button class="btn btn-warning" data-target="#ubah" data-toggle="modal" data-placement="top" title="update"><i class="fa fa-edit">Update</i></button></a>                                               
                      <a href="<?php echo site_url('pegawai/delete/'. $row->id_pegawai); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash">Delete</i></a></center>
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

<!-- Modal Add Pegawai -->
<div class="modal fade" id="modal-default">
  <form action="<?php echo base_url().'index.php/pegawai/insert'?>"  id="form-data" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Pegawai</h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row" >
                <div class="box-body">
                  <div class="form-group <?=form_error('nip') ? 'has-error' : null?>">
                    <label for="nip">NIP*</label>
                    <input type="text" name="nip" class="form-control" value="<?=set_value('nip')?>" id="nip" placeholder="NIP" required>
                    <?=form_error('nip')?>
                  </div>
                  <div class="form-group <?=form_error('nama_pegawai') ? 'has-error' : null?>">
                    <label for="nama pegawai">Nama Pegawai*</label>
                    <input type="text" name="nama_pegawai" class="form-control" value="<?=set_value('nama_pegawai')?>" id="nama_pegawai" placeholder="Nama Pegawai" required>
                     <?=form_error('nama_pegawai')?>
                  </div>
                  <div class="form-group <?=form_error('id_pangkat') ? 'has-error' : null?>">
                    <label>Pangkat*</label>
                      <select class="form-control select2" name="id_pangkat" style="width: 100%;" required="">
                        <option value="">--Pilih Pangkat--</option>
                        <?php $no = 0; foreach ($pangkat as $row): ?>
                        <option value="<?php echo $row->id_pangkat; ?>"><?php echo $row->pangkat; ?></option>
                        <?php endforeach; ?>
                      </select>
                    <?=form_error('id_pangkat')?>
                  </div>
                  <div class="form-group <?=form_error('id_jabatan') ? 'has-error' : null?>">
                    <label>Jabatan*</label>
                      <select class="form-control select2" name="id_jabatan" style="width: 100%;" required="">
                        <option value="">--Pilih Jabatan--</option>
                        <?php $no = 0; foreach ($jabatan as $row): ?>
                        <option value="<?php echo $row->id_jabatan; ?>"><?php echo $row->nama_jabatan; ?></option>
                        <?php endforeach; ?>
                      </select>
                    <?=form_error('id_jabatan')?>
                </div>
              </div>
            </div>     
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
        <button type="submit" name="submit" value="true" class="btn btn-success"><i class="fa fa-paper-plane-o">Save</i></button>
        <button type="reset" class="btn btn-default"><i class="fa fa-repeat">Reset</i></button>
      </div>
    </div>
  </div>
</form>
</div>

<!-- Modal End Add pegawai -->


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
                  <div class="form-group">
                    <label for="nip">NIP*</label>
                    <input type="hidden" name="id" id="id">
                    <input id="nip" name="nip" class="form-control" value="" required="true">
                  </div>
                  <div class="form-group">
                    <label for="nama pegawai">Nama Pegawai*</label>
                    <input id="nama" name="nama_pegawai" class="form-control" value="" required="true"> 
                  </div>
                  <div class="form-group">
                    <label>Pangkat*</label>
                      <select class="form-control select2" id="pangkat" name="id_pangkat" style="width: 100%;">
                        <?php $no = 0; foreach ($pegawai as $row): ?>
                        <option value="<?php echo $row->id_pangkat; ?>"><?php echo $row->pangkat; ?></option>
                        <?php endforeach; ?>
                        <?php $no = 0; foreach ($pangkat as $row): ?>
                        <option value="<?php echo $row->id_pangkat; ?>"><?php echo $row->pangkat; ?></option>
                        <?php endforeach; ?>
                      </select>
                </div>
                <div class="form-group">
                  <label>Jabatan*</label>
                    <select class="form-control select2" id="jabatan" name="id_jabatan" style="width: 100%;">
                        <?php $no = 0; foreach ($pegawai as $row): ?>
                        <option value="<?php echo $row->id_jabatan; ?>"><?php echo $row->nama_jabatan; ?></option>
                        <?php endforeach; ?>
                        <?php $no = 0; foreach ($jabatan as $row): ?>
                        <option value="<?php echo $row->id_jabatan; ?>"><?php echo $row->nama_jabatan; ?></option>
                        <?php endforeach; ?>
                    </select>
              </div>
            </div>
          </div>     
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
        <button type="submit" name="submit" value=".$row->id_pegawai." class="btn btn-success"><i class="fa fa-paper-plane-o">Save changes</i></button>
      </div>
    </div>
  </div>
</form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

<script>

  //UPDATE MODAL PEGAWAI
  $(document).ready(function() {
        // Untuk sunting
        $('#update').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id = div.data('id');
            var nip = div.data('nip');
            var nama = div.data('nama');
            var pangkat = div.data('pangkat');
            var jabatan = div.data('jabatan');
            var modal = $(this);

             // Isi nilai pada field
             modal.find('#id').attr("value", id);
             modal.find('#nip').attr("value", nip);
             modal.find('#nama').attr("value", nama);
             modal.find("#pangkat option[value='" + pangkat + "']").attr("selected", "selected");
             modal.find("#jabatan option[value='" + jabatan + "']").attr("selected", "selected");
           });
      });

  

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

</script>










