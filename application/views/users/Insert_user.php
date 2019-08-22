<?php
    /**
     * Created by PhpStorm.
     * User: hafiz
     * Date: 22/08/2019
     * Time: 3:00 AM
     */
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User Name Insert</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<a href="<?= base_url(); ?>"><button class="btn btn-primary text-white m-2">Home</button></a>
<h2 class="text-center my-3">Practice : 01</h2>
<div class="container-fluid">
  <div class="row">
    <div class="offset-3 col-sm-6">
      <div class="card">
        <div class="card-header bg-success text-white">
          <h4 class="text-center">Form Validation and Insert Data into MySql</h4>
        </div>
          <?= form_open("Users/insert_name"); ?>
        <div class="card-body">
          <?php if (isset($msg)){ echo $msg; unset($msg); /*redirect storage clear*/ } ?>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" tabindex="1" name="first_name"
                       placeholder="Enter first name ..." required autofocus>
                <span class="text-danger"><?= form_error('first_name'); ?></span>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" tabindex="2" name="last_name"
                       placeholder="Enter last name ..." required autofocus>
                <span class="text-danger"><?= form_error('last_name'); ?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="col text-center">
            <button type="submit" class="btn btn-primary text-white btn-lg" name="insert" value="Insert">Insert</button>
          </div>
        </div>
          <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="<?= base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
