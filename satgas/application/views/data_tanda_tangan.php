<div class="box-body">
  <button type="button" class="btn bg-olive btn-flat margin" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle">Tambah tandatangan</i></button>
  <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
</div>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA TANDA TANGAN</h3></marquee>
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
          <li class="active"><a href="#activity" data-toggle="tab">Data tandatangan</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="15%"><center>NIP Pejabat</center></th>
                    <th width="7%"><center>Nama Pejabat</center></th>
                    <th width="20%"><center>Jabatan 1</center></th>
                    <th width="10%"><center>Jabatan 2</center></th>
                    <th width="20%"><center>Jabatan 3</center></th>
                    <th width="20%"><center>Jabatan 4</center></th>
                    <th width="20%"><center>Jabatan 5</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($tanda_tangan as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->nip_pejabat; ?></td>
                    <td><?php echo $row->nama_pejabat; ?></td>
                    <td><?php echo $row->jabatan1; ?></td>
                    <td><?php echo $row->jabatan2; ?></td>
                    <td><?php echo $row->jabatan3; ?></td>
                    <td><?php echo $row->jabatan4; ?></td>
                    <td><?php echo $row->jabatan5; ?></td>
                    <td><center>
                      <a 
                        href = "javascript:;"
                        data-id = "<?php echo $row->id_tandatangan; ?>"
                        data-nippejabat = "<?php echo $row->nip_pejabat; ?>"
                        data-namapejabat = "<?php echo $row->nama_pejabat; ?>"
                        data-jabatan1 ="<?php echo $row->jabatan1; ?>"
                        data-jabatan2 ="<?php echo $row->jabatan2; ?>"
                        data-jabatan3 ="<?php echo $row->jabatan3; ?>"
                        data-toggle ="modal" data-target="#update">
                        <button class="btn btn-warning" data-target="#ubah" data-toggle="modal" data-placement="top" title="update"><i class="fa fa-edit">Update</i></button>                                                              
                      </a>
                      <a href="<?php echo site_url('tanda_tangan/delete/'. $row->id_tandatangan); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash">Delete</i></a></center>
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



<!-- Modal Add tandatangan -->
<div class="modal fade" id="modal-default">
  <form action="<?php echo base_url().'index.php/tanda_tangan/insert'?>"  id="form-data" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah tandatangan</h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row" >
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIP Pejabat*</label>
                    <input type="text" name="nip_pejabat" class="form-control" id="nippejabat" placeholder="NIP Pejabat" required="true">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pejabat*</label>
                    <input type="text" name="nama_pejabat" class="form-control" id="namapejabat" placeholder="Nama Pejabat" required="true">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan 1*</label>
                    <input type="text" name="jabatan1" class="form-control" id="jabatan1" placeholder="Jabatan 1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan 2*</label>
                    <input type="text" name="jabatan2" class="form-control" id="jabatan2" placeholder="Jabatan 2">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan 3*</label>
                    <input type="text" name="jabatan3" class="form-control" id="jabatan3" placeholder="Jabatan 3">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan 4*</label>
                    <input type="text" name="jabatan4" class="form-control" id="jabatan3" placeholder="Jabatan 4">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan 5*</label>
                    <input type="text" name="jabatan5" class="form-control" id="jabatan3" placeholder="Jabatan 5">
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

  <!-- Modal End Add tanda_tangan -->


  <!-- Modal Update tandatangan -->
  <div class="modal fade" id="update">
    <form action="<?php echo base_url().'index.php/tanda_tangan/update'?>"  id="form-data" method="post">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Update tandatangan</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <div class="row" >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="Nip">NIP Pejabat*</label>
                      <input type="hidden" name="id" id="id">
                      <input id="nippejabat" name="nip_pejabat" class="form-control" value="" required="true">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Pejabat*</label>
                      <input id="namapejabat" name="nama_pejabat" class="form-control" value="" required="true"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jabatan 1*</label>
                      <input id="jabatan1" name="jabatan1" class="form-control" value="" required="true"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jabatan 2*</label>
                      <input id="jabatan2" name="jabatan2" class="form-control" value="" required="true"> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jabatan 3*</label>
                      <input id="jabatan3" name="jabatan3" class="form-control" value="" required="true"> 
                    </div>
                  </div>
                </div>     
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
              <button type="submit" name="submit" value=".$row->id_tandatangan." class="btn btn-success"><i class="fa fa-paper-plane-o">Save changes</i></button>
            </div>
          </div>
        </div>
      </form>
    </div>




    <script>
      //UPDATE DATA PROVINSI
      $(document).ready(function() {
        // Untuk sunting
        $('#update').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id = div.data('id');
            var nippejabat = div.data('nippejabat');
            var namapejabat = div.data('namapejabat');
            var jabatan1 = div.data('jabatan1');
            var jabatan2 = div.data('jabatan2');
            var jabatan3 = div.data('jabatan3');
            var modal = $(this);

             // Isi nilai pada field
             modal.find('#id').attr("value", id);
             modal.find('#nippejabat').attr("value", nippejabat);
             modal.find('#namapejabat').attr("value", namapejabat);
             modal.find('#jabatan1').attr("value", jabatan1);
             modal.find('#jabatan2').attr("value", jabatan2);
             modal.find('#jabatan3').attr("value", jabatan3);
           });
        
        
      });

       //DELETE DATA PROVINSI
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










