 <div class="box-body">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <?php foreach($masjid as $row): ?>
            <center><img src="<?php echo base_url('assets/foto/masjid/' .$row->foto_masjid); ?>" alt="First slide"></center>

            <div class="carousel-caption">
              First Slide
            </div>
          </div>
          <div class="item">
            <center><img src="<?php echo base_url('assets/foto/masjid/' .$row->foto_masjid); ?>" alt="Second slide"></center>

            <div class="carousel-caption">
              Second Slide
            </div>
          </div>
          <div class="item">
            <center><img src="<?php echo base_url('assets/foto/masjid/' .$row->foto_masjid); ?>" alt="Third slide"></center>
            <?php endforeach; ?>
            <div class="carousel-caption">
              Third Slide
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="fa fa-angle-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="fa fa-angle-right"></span>
        </a>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->