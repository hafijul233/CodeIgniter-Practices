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
<h2 class="text-center my-3">Practice : 06</h2>
<div class="container-fluid">
  <div class="row">
    <div class="offset-4 col-sm-4">
      <div class="card mb-5">
        <div class="card-header bg-info text-white">
          <h4 class="text-center">Registration</h4>
        </div>
        <form action="<?= base_url() . 'authentication/register'; ?>" method="post" accept-charset="utf8">
          <div class="card-body">
              <?php if (isset($msg)) { ?>
                <div class="alert bg-primary text-white mb-1">
                    <?= $msg; ?>
                </div>
                  <?php
                  unset($msg); /*redirect storage clear*/
              } ?>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input type="text" class="form-control" id="fullName" tabindex="1"
                         name="full_name"
                         placeholder="Enter Full Name ..." required autofocus>
                  <span class="text-danger"><?= form_error('full_name'); ?></span>
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" id="email" tabindex="2"
                         name="email"
                         placeholder="Email Address ..." required autofocus>
                  <span class="text-danger"><?= form_error('email'); ?></span>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" tabindex="3" name="password"
                         placeholder="Password ..." required autofocus>
                  <span class="text-danger"><?= form_error('password'); ?></span>
                </div>
                <div class="form-group">
                  <label for="passConf">Password Confirm</label>
                  <input type="password" class="form-control" id="passConf" tabindex="4" name="pass_conf"
                         placeholder="Password Confirmation ..." required autofocus>
                  <span class="text-danger"><?= form_error('pass_conf'); ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
          <div class="row">
            <div class="col-sm-12 text-center">
              <button type="submit" class="btn btn-primary text-white"
                      name="insert" value="Insert">Register
              </button>
            </div>
            <div class="col-sm-12 text-center">
              <a href="<?= base_url() . 'authentication/login'; ?>" target="_blank">Log in</a>
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
