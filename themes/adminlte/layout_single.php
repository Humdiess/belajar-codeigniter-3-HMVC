<?php include_once('header.php'); ?>

<div class="wrapper">
  <?php include_once('sidebar.php'); ?>

  <div class="content-wrapper">
  <button value="halo" onclick="showSidebar()">Halo</button>
  <button value="halo" onclick="hideSidebar()">Halo</button>

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
