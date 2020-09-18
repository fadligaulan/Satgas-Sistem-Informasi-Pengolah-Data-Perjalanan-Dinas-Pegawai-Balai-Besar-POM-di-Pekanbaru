<div class="row">
  <!-- DATA JUMLAH PEGAWAI -->
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $pegawai; ?><sup style="font-size: 20px"></sup></h3>

        <p>Jumlah Pegawai</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="<?php echo site_url('pegawai'); ?>" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- DATA JUMLAH BIDANG -->
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $bidang; ?><sup style="font-size: 20px"></sup></h3>

        <p>Jumlah Bidang</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="<?php echo site_url('bidang'); ?>" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- DATA JUMLAH SURAT TUGAS LEVEL BIDANG -->
  <?php if($this->session->userdata('level') === '1'): ?>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $surat_by_bidang; ?><sup style="font-size: 20px"></sup></h3>

        <p>Jumlah Surat Tugas</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="<?php echo site_url('surat_tugas'); ?>" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <?php endif?>
  <!-- DATA JUMLAH SURAT TUGAS LEVEL ADMIN -->
  <?php if($this->session->userdata('level') === '4'): ?>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $surat_tugas; ?><sup style="font-size: 20px"></sup></h3>

        <p>Jumlah Surat Tugas</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="<?php echo site_url('surat_tugas'); ?>" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <?php endif?>
  <?php if($this->session->userdata('level') === '3'): ?>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $surat_tugas; ?><sup style="font-size: 20px"></sup></h3>

        <p>Jumlah Surat Tugas</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="<?php echo site_url('surat_tugas'); ?>" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <?php endif?>
  <!-- DATA JUMLAH SSPD LEVEL BIDANG -->
  <?php if($this->session->userdata('level') === '1'): ?>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $sppd_by_bidang; ?><sup style="font-size: 20px"></sup></h3>

        <p>Jumlah SPPD</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="<?php echo site_url('surat_tugas/riwayat_sppd'); ?>" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <?php endif?>
  <!-- DATA JUMLAH SPPD LEVEL ADMIN -->
  <?php if($this->session->userdata('level') === '4'): ?>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $sppd; ?><sup style="font-size: 20px"></sup></h3>

        <p>Jumlah SPPD</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="<?php echo site_url('surat_tugas/riwayat_sppd'); ?>" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <?php endif?>
  <?php if($this->session->userdata('level') === '3'): ?>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $sppd; ?><sup style="font-size: 20px"></sup></h3>

        <p>Jumlah SPPD</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="<?php echo site_url('surat_tugas/riwayat_sppd'); ?>" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <?php endif?>
</div>










