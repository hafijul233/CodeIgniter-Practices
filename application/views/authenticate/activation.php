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
  <title>User Authentication</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<a href="<?= base_url(); ?>">
  <button class="btn btn-primary text-white m-2">Home</button>
</a>
<h2 class="text-center my-3">Practice : 05</h2>
<div class="container-fluid">
  <div class="row">
    <div class="offset-4 col-sm-4">
      <div class="card">
        <div class="card-header bg-warning text-black-50">
          <h4 class="text-center">Account Activation</h4>
        </div>
        <form action="<?= base_url() . 'authentication/login'; ?>" method="post" accept-charset="utf8">
          <div class="card-body">
              <?php if (isset($msg)) { ?>
                <div class="col alert alert-danger text-white">
                    <?= $msg; ?>
                </div>
                  <?php
                  unset($msg); /*redirect storage clear*/
              } ?>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" tabindex="1"
                         name="email"
                         placeholder="Email Address ..." required autofocus>
                  <span class="text-danger"><?= form_error('email'); ?></span>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" tabindex="2" name="password"
                         placeholder="Password ..." required autofocus>
                  <span class="text-danger"><?= form_error('password'); ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
          <div class="row">
            <div class="col-sm-12 text-center">
              <button type="submit" class="btn btn-success text-white"
                      name="insert" value="Insert">Login
              </button>
            </div>
            <div class="col-sm-12 text-center">
              <a href="<?= base_url() . 'authentication/register'; ?>" target="_blank">Register Account</a>
              |
              <a href="<?= base_url() . 'authentication/recovery'; ?>" target="_blank">Forgot Password</a>
            </div>
          </div>
          </div>
        </form>
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
