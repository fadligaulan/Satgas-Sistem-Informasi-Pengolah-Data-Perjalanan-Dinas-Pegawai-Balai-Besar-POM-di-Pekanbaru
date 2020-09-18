<div class="box-body">
  <button type="button" class="btn bg-olive btn-flat margin" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle">Tambah Maksud</i></button>
  <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
</div>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA KABUPATEN</h3></marquee>
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
          <li class="active"><a href="#activity" data-toggle="tab">Data Maksud</a></li>
          <!-- <li><a href="#timeline" data-toggle="tab">Detail Kajian</a></li> -->
        </ul>
        <?php if($this->session->userdata('level') === '4'): ?>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="15%"><center>Mata Anggaran</center></th>
                    <th width="7%"><center>Tahun Anggaran</center></th>
                    <th width="40%"><center>Maksud Tugas</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($maksud as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->mata_anggaran; ?></td>
                    <td><?php echo $row->tahun_anggaran; ?></td>
                    <td><?php echo $row->maksud_tugas; ?></td>
                    <td><center>
                      <a 
                      href = "javascript:;"
                      data-id = "<?php echo $row->id_maksud; ?>"
                      data-mataanggaran = "<?php echo $row->mata_anggaran; ?>"
                      data-tahunanggaran = "<?php echo $row->tahun_anggaran ?>"
                      data-maksudtugas ="<?php echo $row->maksud_tugas ?>"
                      data-toggle ="modal" data-target="#update">
                      <button class="btn btn-warning" data-target="#ubah" data-toggle="modal" data-placement="top" title="update"><i class="fa fa-edit">update</i></button>                                                              
                    </a>
                    <a>
                      <a href="<?php echo site_url('maksud/delete/'. $row->id_maksud); ?>" class="btn btn-danger tombol-hapus" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-trash">delete</i></a>                                                              
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
  <?php endif; ?>
   <?php if($this->session->userdata('level') === '1'): ?>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="15%"><center>Mata Anggaran</center></th>
                    <th width="7%"><center>Tahun Anggaran</center></th>
                    <th width="40%"><center>Maksud Tugas</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($maksud_by_bidang as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->mata_anggaran; ?></td>
                    <td><?php echo $row->tahun_anggaran; ?></td>
                    <td><?php echo $row->maksud_tugas; ?></td>
                    <td><center>
                      <a 
                      href = "javascript:;"
                      data-id = "<?php echo $row->id_maksud; ?>"
                      data-mataanggaran = "<?php echo $row->mata_anggaran; ?>"
                      data-tahunanggaran = "<?php echo $row->tahun_anggaran ?>"
                      data-maksudtugas ="<?php echo $row->maksud_tugas ?>"
                      data-toggle ="modal" data-target="#update">
                      <button class="btn btn-warning" data-target="#ubah" data-toggle="modal" data-placement="top" title="update"><i class="fa fa-edit">update</i></button>                                                              
                    </a>
                    <!-- <a>
                      <a href="<?php echo site_url('maksud/delete/'. $row->id_maksud); ?>" class="btn btn-danger tombol-hapus" data-toggle="tooltipsk" data-placement="top" title="Hapus"><i class="fa fa-trash">delete</i></a>                                                              
                    </a>    -->                             
                  </center>
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



<!-- Modal Add Maksud -->
<div class="modal fade" id="modal-default">
  <form action="<?php echo base_url().'index.php/maksud/insert'?>"  id="form-data" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Maksud</h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row" >
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mata Anggaran*</label>
                    <input type="text" name="mata_anggaran" class="form-control" id="mataanggaran" placeholder="Mata Anggaran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun Anggaran*</label>
                    <select name="tahun_anggaran" class="form-control" id="tahunanggaran" placeholder="Tahun Anggaran" required="true">
                      <option value="">Please Select</option>
                      <?php
                      $thn_skr = date('Y');
                      for ($x = $thn_skr; $x >= 1990; $x--) {
                        ?>
                        <option value="<?php echo $x ?>"><?php echo $x ?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Maksud Tugas*</label>
                    <!--<input type="text" name="maksud_tugas" class="form-control" id="maksudtugas" placeholder="Maksud Tugas" required="true">-->
                    <textarea id="maksudtugas" class="form-control" name="maksud_tugas" rows="4" cols="50" required="" placeholder="Maksud Tugas"></textarea>
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

  <!-- Modal End Add maksud -->


  <!-- Modal Update Maksud -->
  <div class="modal fade" id="update">
    <form action="<?php echo base_url().'index.php/maksud/update'?>"  id="form-data" method="post">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Update Maksud</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <div class="row" >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Nip">Mata Anggaran*</label>
                      <input type="hidden" name="id" id="id">
                      <input id="mataanggaran" name="mata_anggaran" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tahun Anggaran*</label>
                      <select name="tahun_anggaran" class="form-control" id="tahunanggaran" placeholder="Tahun Anggaran" required="true">
                      <option value="<?php echo $row->tahun_anggaran; ?>"><?php echo $row->tahun_anggaran; ?></option>
                      <?php
                      $thn_skr = date('Y');
                      for ($x = $thn_skr; $x >= 1990; $x--) {
                        ?>
                        <option value="<?php echo $x ?>"><?php echo $x ?></option>
                        <?php
                      }
                      ?>
                    </select> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Maksud Tugas*</label>
                      <input id="maksudtugas" name="maksud_tugas" class="form-control" value="" required="true"> 
                      <!--<textarea id="maksudtugas" class="form-control" name="maksud_tugas" rows="4" cols="50" required="" placeholder="Maksud Tugas"></textarea>-->
                    </div>
              </div>
            </div>     
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
          <button type="submit" name="submit" value=".$row->id_maksud." class="btn btn-info"><i class="fa fa-paper-plane-o">Save changes</i></button>
        </div>
      </div>
    </div>
  </form>
</div>




<script>
  $(document).ready(function() {
        // Untuk sunting
        $('#update').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id = div.data('id');
            var mataanggaran = div.data('mataanggaran');
            var tahunanggaran = div.data('tahunanggaran');
            var maksudtugas = div.data('maksudtugas');
            var modal = $(this);

             // Isi nilai pada field
             modal.find('#id').attr("value", id);
             modal.find('#mataanggaran').attr("value", mataanggaran);
             modal.find("#tahunanggaran option[value='" + tahunanggaran + "']").attr("selected", "selected");
             modal.find('#maksudtugas').attr("value", maksudtugas);
           });
        
        
      });


  //DELETE DATA MAKSUD TUGAS
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










