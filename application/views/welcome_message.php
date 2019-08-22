<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Practices List</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<h2 class="text-center my-3">CodeIgniter Practices List</h2>
<div class="container-fluid">
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/fetch_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/delete_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/update_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!-- Simple Authentication -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. Simple Authentication System</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'authentication/login'; ?>">Login</a></li>
            <li class="list-group-item"><a href="<?= base_url().'authentication/register'; ?>">Registration</a></li>
            <li class="list-group-item"><a href="<?= base_url().'authentication/recovery'; ?>">Password Recovery</a></li>
            <li class="list-group-item"><a href="<?= base_url().'authentication/activation'; ?>">Email Activation (Future)</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- CRUD on MySql -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <p class="text-center mb-n1">1. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-success text-white">
          <p class="text-center mb-n1">2. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--    -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-warning text-dark">
          <p class="text-center mb-n1">3. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
        </div>
      </div>
    </div>
    <!--   -->
    <div class="col-sm-12 col-md-6 col-xl-3 mb-3">
      <div class="card">
        <div class="card-header bg-danger text-white">
          <p class="text-center mb-n1">4. CRUD Operation MySql</p>
        </div>
        <div class="card-body" style="padding: 0rem;">
          <ol class="list-group list-group-flush">
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Insert Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Fetch Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Delete Name</a></li>
            <li class="list-group-item"><a href="<?= base_url().'users/insert_name'; ?>">Update Name</a></li>
          </ol>
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
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
