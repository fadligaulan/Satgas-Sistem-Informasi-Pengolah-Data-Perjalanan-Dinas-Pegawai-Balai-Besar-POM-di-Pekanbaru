<div class="box-body">
  <button type="button" class="btn bg-olive btn-flat margin" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle">Tambah data user</i></button>
  <a href="<?php echo site_url('dashboard')?>" class="btn bg-maroon btn-flat margin"><i class="fa  fa-home">Dashboard</i></a>
</div>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <div class="col-md-12">
      <marquee><h3 class="box-title">SELAMAT DATANG DI BALAI BESAR POM PEKANBARU/DATA USER</h3></marquee>
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
          <li class="active"><a href="#activity" data-toggle="tab">Data User</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="5%"><center>No</center></th>
                    <th width="20%"><center>Nama depan</center></th>
                    <th width="20%"><center>Nama belakang</center></th>
                    <th width="20%"><center>Username</center></th>
                    <th width="20%"><center>Password</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($user as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->first_name; ?></td>
                    <td><?php echo $row->last_name; ?></td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->password; ?></td>
                    <td><center>
                      <a 
                        href = "javascript:;"
                        data-id = "<?php echo $row->id_user; ?>"
                        data-first_name = "<?php echo $row->first_name; ?>"
                        data-last_name = "<?php echo $row->last_name; ?>"
                        data-username = "<?php echo $row->username; ?>"
                        data-password = "<?php echo $row->password; ?>"
                        data-toggle ="modal" data-target="#update">
                        <button class="btn btn-warning" data-target="#ubah" data-toggle="modal" data-placement="top" title="update"><i class="fa fa-edit">Update</i></button>                                                              
                      </a>
                      <a href="<?php echo site_url('user/delete/'. $row->id_user); ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash">Delete</i></a></center>
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



<!-- Modal Add isiuser -->
<div class="modal fade" id="modal-default">
  <form action="<?php echo base_url().'index.php/user/insert'?>"  id="form-data" method="post">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah user</h4>
        </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="row" >
                <div class="box-body">
                  <div class="form-group">
                    <label>First Name*</label>
                    <input type="text" class="form-control" name="first_name" rows="3" id="isiuser" placeholder="First Name">
                  </div>
                  <div class="form-group">
                    <label>Last Name*</label>
                    <input type="text" class="form-control" name="last_name" rows="3" id="isiuser" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <label>Username*</label>
                    <input type="text" class="form-control" name="username" rows="3" id="isiuser" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Password*</label>
                    <input type="text" class="form-control" name="password" rows="3" id="isiuser" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>ID Group*</label>
                    <select class="form-control" name="id_group" rows="3" id="isiuser" style="width: 100%;">
                      <option value="">--Pilih id group--</option>
                      <option value="1">Operator</option>
                      <option value="2">Tata Usaha</option>
                      <option value="3">Pengujian</option>
                      <option value="4">Penindakan</option>
                      <option value="5">Infokom</option>
                      <option value="6">Pemeriksaan</option>
                      <option value="7">Kepala</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Aktif*</label>
                    <select class="form-control" name="aktif" rows="3" id="isiuser" style="width: 100%;">
                      <option value="">--Pilih id group--</option>
                      <option value="Y">AKTIF</option>
                      <option value="N">NON AKTIF</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Level*</label>
                    <select class="form-control" name="level" rows="3" id="isiuser" style="width: 100%;">
                      <option value="">--Pilih level--</option>
                      <option value="2">OPERATOR</option>
                      <option value="1">BIDANG</option>
                      <option value="3">KEPALA BALAI</option>
                    </select>
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

  <!-- Modal End Add user -->


  <!-- Modal Update isiuser -->
  <div class="modal fade" id="update">
    <form action="<?php echo base_url().'index.php/user/update'?>"  id="form-data" method="post">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Update user</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <div class="row" >
                  <div class="box-body">
                    <div class="form-group">
                    <label>First Name*</label>
                    <input type="hidden" name="id" id="id">
                    <input type="text" class="form-control" name="first_name" rows="3" id="first_name" placeholder="First Name">
                  </div>
                  <div class="form-group">
                    <label>Last Name*</label>
                    <input type="text" class="form-control" name="last_name" rows="3" id="last_name" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <label>Username*</label>
                    <input type="text" class="form-control" name="username" rows="3" id="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label>Password*</label>
                    <input type="text" class="form-control" name="password" rows="3" id="password" placeholder="Password">
                  </div>
                  </div>
                </div>     
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
              <button type="submit" name="submit" value=".$row->id_user." class="btn btn-success"><i class="fa fa-paper-plane-o">Save changes</i></button>
            </div>
          </div>
        </div>
      </form>
    </div>


    <script>
      //DELETE DATA MENIMBANG
      $(document).ready(function() {
        // Untuk sunting
        $('#update').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            var id = div.data('id');
            var first_name = div.data('first_name');
            var last_name = div.data('last_name');
            var username = div.data('username');
            var password = div.data('password');
            var modal = $(this);

             // Isi nilai pada field
             modal.find('#id').attr("value", id);
             modal.find('#first_name').attr("value", first_name);
             modal.find('#last_name').attr("value", last_name);
             modal.find('#username').attr("value", username);
             modal.find('#password').attr("value", password);
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










