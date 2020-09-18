<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">  
        <!-- <img src="<?php echo base_url('assets/foto/takmir/'.$this->session->userdata('foto_takmir')); ?>" class="img-circle" alt="User Image"> -->
        <img src="<?php echo base_url('assets/dist/img/icon.png'); ?>" class="img-circle" alt="User Image">  

      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('first_name'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <!--  LEVEL ADMIN  -->
      <?php if($this->session->userdata('level') === '4'): ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i> <span>HOME</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard "></i> Dashboard</a></li>
          <li><a href="<?php echo site_url('sop_surat_tugas')?>"><i class="fa fa-user"></i> SOP Satgas </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span> Master Pegawai </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('pegawai')?>"><i class="fa fa-book"></i> Data Pegawai </a></li>
          <li><a href="<?php echo site_url('pangkat')?>"><i class="fa fa-star"></i> Pangkat </a></li>
          <li><a href="<?php echo site_url('jabatan')?>"><i class="fa fa-suitcase"></i> Jabatan </a></li>
          <li><a href="<?php echo site_url('bidang')?>"><i class="fa fa-institution"></i> Bidang </a></li>       
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span> Master Surat Tugas </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('surat-tugas')?>"><i class="fa fa-plus-square"></i> Buat Surat Tugas </a></li>
          <li><a href="<?php echo site_url('maksud')?>"><i class="fa fa-paper-plane"></i> Data Maksud Tugas </a></li>
          <li><a href="<?php echo site_url('surat-tugas/riwayat_surat_tugas')?>"><i class="fa fa-history"></i> Riwayat Surat Tugas </a></li>
          <li><a href="<?php echo site_url('surat-tugas/riwayat_sppd')?>"><i class="fa fa-bookmark"></i> Riwayat SPPD </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-location-arrow"></i>
          <span> Master Wilayah </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('provinsi')?>"><i class="fa fa-map-marker"></i> Data Provinsi </a></li>
          <li><a href="<?php echo site_url('kabupaten')?>"><i class="fa fa-map"></i> Data Kabupaten/Kota </a></li>
          <li><a href="<?php echo site_url('wilayah')?>"><i class="fa fa-building"></i> Data Daerah </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gears"></i>
          <span> Master Konfigurasi </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('dasar')?>"><i class="fa fa-list-ul"></i> Dasar </a></li>
          <li><a href="<?php echo site_url('menimbang')?>"><i class="fa fa-balance-scale"></i> Menimbang </a></li>
           <li><a href="<?php echo site_url('ppk')?>"><i class="fa  fa-pencil-square"></i> PPK </a></li>
          <li><a href="<?php echo site_url('tanda-tangan')?>"><i class="fa fa-hand-pointer-o"></i> Tandatangan </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i>
          <span> User </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('user')?>"><i class="fa fa-user-plus"></i> Data user </a></li>
        </ul>
      </li> 
      <?php endif?>
      <!-- END LEVEL ADMIN -->


      <!--  LEVEL KEPALA  -->
      <?php if($this->session->userdata('level') === '3'): ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i> <span>HOME</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard "></i> Dashboard</a></li>
          <li><a href="<?php echo site_url('sop_surat_tugas')?>"><i class="fa fa-user"></i> SOP Satgas </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span> Master Surat Tugas </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('surat-tugas')?>"><i class="fa fa-plus-square"></i> Daftar Surat Tugas </a></li>
          <li><a href="<?php echo site_url('surat-tugas/riwayat_sppd')?>"><i class="fa fa-bookmark"></i> Riwayat SPPD </a></li>
        </ul>
      </li>
      <?php endif?>
      <!-- END LEVEL KEPALA --> 

      <!-- LEVEL PPK --> 
      <?php if($this->session->userdata('level') === '2'): ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i> <span>HOME</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard "></i> Dashboard</a></li>
          <li><a href="<?php echo site_url('sop_surat_tugas')?>"><i class="fa fa-user"></i> SOP Satgas </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span> Master Surat Tugas </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('surat-tugas/riwayat_surat_tugas')?>"><i class="fa fa-history"></i> Riwayat Surat Tugas </a></li>
          <li><a href="<?php echo site_url('surat-tugas/riwayat_sppd')?>"><i class="fa fa-bookmark"></i> Riwayat SPPD </a></li>
        </ul>
      </li>
      <?php endif?>
      <!-- END LEVEL PPK -->

      <!-- LEVEL BIDANG -->
      <?php if($this->session->userdata('level') === '1'): ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i> <span>HOME</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard "></i> Dashboard</a></li>
          <li><a href="<?php echo site_url('sop_surat_tugas')?>"><i class="fa fa-user"></i> SOP Satgas </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span> Master Pegawai </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('pegawai')?>"><i class="fa fa-book"></i> Data Pegawai </a></li>
          <li><a href="<?php echo site_url('pangkat')?>"><i class="fa fa-star"></i> Pangkat </a></li>
          <li><a href="<?php echo site_url('jabatan')?>"><i class="fa fa-suitcase"></i> Jabatan </a></li>       
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span> Master Surat Tugas </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('surat-tugas')?>"><i class="fa fa-plus-square"></i> Buat Surat Tugas </a></li>
          <li><a href="<?php echo site_url('maksud')?>"><i class="fa fa-paper-plane"></i> Data Maksud Tugas </a></li>
          <li><a href="<?php echo site_url('surat-tugas/riwayat_surat_tugas')?>"><i class="fa fa-history"></i> Riwayat Surat Tugas </a></li>
          <li><a href="<?php echo site_url('surat-tugas/riwayat_sppd')?>"><i class="fa fa-bookmark"></i> Riwayat SPPD </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-location-arrow"></i>
          <span> Master Wilayah </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('provinsi')?>"><i class="fa fa-map-marker"></i> Data Provinsi </a></li>
          <!-- <li><a href="<?php echo site_url('kabupaten')?>"><i class="fa fa-map"></i> Data Kabupaten/Kota </a></li> -->
          <li><a href="<?php echo site_url('wilayah')?>"><i class="fa fa-building"></i> Data Daerah </a></li>
        </ul>
      </li>
      <?php endif?>
      <!-- END LEVEL BIDANG -->      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>