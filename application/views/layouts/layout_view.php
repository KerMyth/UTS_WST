<!doctype html>
<html lang="en">

<!-- HEADER -->
<?php $this->load->view('layouts/partials/header'); ?>

<body>

  <!-- NAVBAR -->
  <?php $this->load->view('layouts/partials/navbar'); ?>

  <div class="container mt-5">

    <!-- CONTENT -->
    <!-- datanya di ambil dari controller -->
    <?php $this->load->view($content); ?>

  </div>


  <!-- JS -->
  <?php $this->load->view('layouts/partials/js'); ?>

  <!-- Ajax -->
  <?php $this->load->view('ajax/AjaxData'); ?>
  <?php $this->load->view('ajax/AjaxChat'); ?>

</body>

</html>