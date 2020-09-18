<div class="box-body">
  <button type="button" class="btn bg-olive btn-flat margin" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle">Tambah provinsi</i></button>
  <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
</div>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA PROVINSI</h3></marquee>
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
          <li class="active"><a href="#activity" data-toggle="tab">Data provinsi</a></li>
          <!-- <li><a href="#timeline" data-toggle="tab">Detail Kajian</a></li> -->
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="30%"><center>Nama Provinsi</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($provinsi as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->nama_provinsi; ?></td>
                    <td><center>
                      <a 
                      href = "javascript:;"
                      data-id = "<?php echo $row->id_provinsi; ?>"
                      data-namaprovinsi = "<?php echo $row->nama_provinsi; ?>"
                      data-toggle ="modal" data-target="#update">
                      <button class="btn btn-warning" data-target="#ubah" data-toggle="modal" data-placement="top" title="update"><i class="fa fa-edit">Update</i></button>                                                              
                      </a>
                      <a href="<?php echo site_url('provinsi/delete/'. $row->id_provinsi); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash">Delete</i></a></center>
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



<!-- Modal Add isiprovinsi -->
<div class="modal fade" id="modal-default">
  <form action="<?php echo base_url().'index.php/provinsi/insert'?>"  id="form-data" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Provinsi</h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row" >
                <div class="box-body">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Nama Provinsi*</label>
                    <input type="text" name="nama_provinsi" class="form-control" id="namaprovinsi" placeholder="Nama Provinsi" required="">
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

  <!-- Modal End Add provinsi -->


  <!-- Modal Update isiprovinsi -->
  <div class="modal fade" id="update">
    <form action="<?php echo base_url().'index.php/provinsi/update'?>"  id="form-data" method="post">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Update Data Provinsi</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <div class="row" >
                  <div class="box-body">
                    <div class="form-group">
                    <label for="Nama Provinsi">Nama Provinsi*</label>
                    <input type="hidden" name="id" id="id">
                    <input type="text" name="nama_provinsi" class="form-control" id="namaprovinsi" placeholder="Nama Provinsi">
                  </div>
                  </div>
                </div>     
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
              <button type="submit" name="submit" value=".$row->id_provinsi." class="btn btn-success"><i class="fa fa-paper-plane-o">Save changes</i></button>
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
            var namaprovinsi = div.data('namaprovinsi');
            var modal = $(this);

             // Isi nilai pada field
             modal.find('#id').attr("value", id);
             modal.find('#namaprovinsi').attr("value", namaprovinsi);
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










