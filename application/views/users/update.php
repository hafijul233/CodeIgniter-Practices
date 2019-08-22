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
	<title>CRUD Operation</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<a href="<?= base_url(); ?>">
	<button class="btn btn-primary text-white m-2">Home</button>
</a>
<h2 class="text-center my-3">Practice : 04</h2>
<div class="container-fluid">
	<div class="row">
		<div class="offset-3 col-sm-6">
			<div class="card">
				<div class="card-header bg-success text-white">
					<h4 class="text-center">Update User Date from MySql</h4>
				</div>
				<div class="card-body">
					<form action="<?= base_url() . 'users/update_name/' . (isset($user_info->id) ? $user_info->id : NULL); ?>"
						method="post" accept-charset="utf-8">
						<?php if (isset($msg)) {
							echo $msg;
							unset($msg); /*redirect storage clear*/
						} ?>
						<div class="form-group">
							<label for="firstName">First Name</label>
							<input type="text" class="form-control" id="firstName" tabindex="1" name="first_name"
								   placeholder="Enter first name ..."
								   value="<?= isset($user_info->first_name) ? $user_info->first_name : NULL; ?>"
								   required autofocus>
							<span class="text-danger"><?= form_error('first_name'); ?></span>
						</div>
						<div class="form-group">
							<label for="lastName">Last Name</label>
							<input type="text" class="form-control" id="lastName" tabindex="2" name="last_name"
								   placeholder="Enter last name ..."
								   value="<?= isset($user_info->last_name) ? $user_info->last_name : NULL; ?>" required
								   autofocus>
							<span class="text-danger"><?= form_error('last_name'); ?></span>
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-success" name="update" value="update">Update</button>
						</div>
					</form>
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
												<a href="<?= base_url() . 'users/update_name/' . $user->id; ?>">
													<button class="btn btn-primary btn-sm text-white">Update</button>
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
