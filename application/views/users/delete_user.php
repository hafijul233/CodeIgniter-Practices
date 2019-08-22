<?php
    /**
     * Created by PhpStorm.
     * User: hafiz
     * Date: 22/08/2019
     * Time: 4:28 AM
     */
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User Name Fetch</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<a href="<?= base_url(); ?>"><button class="btn btn-primary text-white m-2">Home</button></a>
<h2 class="text-center my-3">Practice : 03</h2>
<div class="container-fluid">
  <div class="row">
    <div class="offset-3 col-sm-6">
      <div class="card">
        <div class="card-header bg-success text-white">
          <h4 class="text-center">Delete User Date from MySql</h4>
        </div>
        <div class="card-body">
            <?php if (isset($msg)){ echo $msg; unset($msg); /*redirect storage clear*/ } ?>
          <div class="table-responsive">
              <table class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    if (isset($user_names) == TRUE) {
                        foreach ($user_names as $user) { ?>
                          <tr>
                            <td><?= $user->id; ?></td>
                            <td><?= $user->first_name; ?></td>
                            <td><?= $user->last_name; ?></td>
                            <td>
                              <a href="<?= base_url().'users/delete_name/' . $user->id; ?>">
                                <button class="btn btn-primary btn-sm text-white">Delete</button>
                              </a>
                            </td>
                          </tr>
                        <?php }
                    } else { ?>
                      <tr>
                        <td colspan="3"> No data found</td>
                      </tr>
                    <?php }
                ?>
                </tbody>
              </table>
            </div>
        </div>
        <div class="card-footer">
          <div class="col text-center">
            <a href="<?= base_url() . 'users/fetch_name'; ?>">
              <button class="btn btn-primary text-white" name="insert" value="Insert">Refresh</button>
            </a>
          </div>
        </div>
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