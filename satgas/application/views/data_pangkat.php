<div class="box-body">
  <button type="button" class="btn bg-olive btn-flat margin" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle">Tambah pangkat</i></button>
   <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
</div>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA PANGKAT</h3></marquee>
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
          <li class="active"><a href="#activity" data-toggle="tab">Data pangkat</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="30%"><center>Pangkat</center></th>
                    <th width="30%"><center>Golongan</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($pangkat as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->pangkat; ?></td>
                    <td><center><?php echo $row->golongan; ?></center></td>
                    <td><center>
                      <a 
                      href = "javascript:;"
                      data-id = "<?php echo $row->id_pangkat; ?>"
                      data-pangkat = "<?php echo $row->pangkat; ?>"
                      data-golongan = "<?php echo $row->golongan; ?>"
                      data-toggle ="modal" data-target="#update">
                      <button class="btn btn-warning" data-target="#ubah" data-toggle="modal" data-placement="top" title="update"><i class="fa fa-edit">Update</i></button></a>
                      <a href="<?php echo site_url('pangkat/delete/'. $row->id_pangkat); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash">Delete</i></a></center>
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



<!-- Modal Add isipangkat -->
<div class="modal fade" id="modal-default">
  <form action="<?php echo base_url().'index.php/pangkat/insert'?>"  id="form-data" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah pangkat</h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row" >
                <div class="box-body">
                  <div class="form-group">
                    <label for="pangkat">Pangkat*</label>
                    <input type="text" name="pangkat" class="form-control" id="pangkat" placeholder="Pangkat" required="">
                  </div>
                   <div class="form-group">
                    <label for="golongan">Golongan*</label>
                    <input type="text" name="golongan" class="form-control" id="golongan" placeholder="Golongan" required="">
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

  <!-- Modal End Add pangkat -->


  <!-- Modal Update isipangkat -->
  <div class="modal fade" id="update">
    <form action="<?php echo base_url().'index.php/pangkat/update'?>"  id="form-data" method="post">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Update pangkat</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <div class="row" >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="kode pangkat">Pangkat*</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" class="form-control" name="pangkat" id="pangkat" placeholder="Pangkat"> 
                    </div>
                    <div class="form-group">
                    <label for="golongan">Golongan*</label>
                    <input type="text" name="golongan" class="form-control" id="golongan" placeholder="Golongan">
                    </div>
                  </div>
                </div>     
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
              <button type="submit" name="submit" value=".$row->id_pangkat." class="btn btn-success"><i class="fa fa-paper-plane-o">Save changes</i></button>
            </div>
          </div>
        </div>
      </form>
    </div>



  <script>

    //UPDATE DATA PANGKAT
    $(document).ready(function() {
      // Untuk sunting
      $('#update').on('show.bs.modal', function (event) {
          var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

          var id = div.data('id');
          var pangkat = div.data('pangkat');
          var golongan = div.data('golongan');
          var modal = $(this);

           // Isi nilai pada field
           modal.find('#id').attr("value", id);
           modal.find('#pangkat').attr("value", pangkat);
           modal.find('#golongan').attr("value", golongan);
         });
      
      
    });

    //DELETE DATA PANGKAT

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










