<style type="text/css">
  surat_tugas { width: 250px; display: block; margin:20px; }
</style>

<div class="box box-success box-solid">
  <div class="box-header with-border">
    <h3 class="box-title">DATA SURAT TUGAS</h3> <?=date('Y-m-d H:i:s')?>


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
          <!-- <li><a href="#timeline" data-toggle="tab">Detail Kajian</a></li> -->
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th><center>Tanggal Surat</center></th>
                    <th><center>Jumlah Pegawai</center></th>
                    <th><center>Aksi</center></th> 
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; foreach($surat_tugas as $row): ?>
                  <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $row->surat_created_at; ?></td>
                    <td><?php echo $row->jml_pegawai; ?></td>
                    <td><center>
                     <a href="#" class="btn btn-info btn-sm update-record" data-package_id="<?php echo $row->id_surat_tugas;?>">Edit</a>
                     <a href="#" class="btn btn-danger btn-sm delete-record" data-package_id="<?php echo $row->id_surat_tugas;?>">Delete</a>                                
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







 




















