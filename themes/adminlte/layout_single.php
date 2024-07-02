<?php include_once('header.php'); ?>

<div class="wrapper">
  <?php include_once('sidebar.php'); ?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
              hehe
            </h1>
          </div>
          <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-12">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>

</div>
