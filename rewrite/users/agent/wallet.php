<?php
include("includes/error.php");
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
include("includes/agent_details.php");

?>

<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
		<!--plugins-->
		<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
		<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
		<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
		<!-- loader-->
		<link href="assets/css/pace.min.css" rel="stylesheet" />
		<script src="assets/js/pace.min.js"></script>
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="assets/css/app.css" rel="stylesheet">
		<link href="assets/css/icons.css" rel="stylesheet">

		<title>Service Vendors</title>
	</head>

	<body class="bg-theme bg-theme2">
		<!--wrapper-->
		<div class="wrapper">
			<!--start header wrapper-->
			<div class="header-wrapper">
				<?php include('includes/navbar.php'); ?>

				<!-- Primary Menu -->
				<?php include('includes/menu.php'); ?>
			</div>
			<!--end header wrapper-->
			<!--start page wrapper -->
			<div class="page-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">My Wallet</div>


					</div>
					<!--end breadcrumb-->
					<div class="row">
						<?php include('includes/sidebar.php'); ?>
						<div class="col-10">
							<div class="row">
								<div class="col-lg-3">
									<div class="card radius-10">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<div>
													<p class="mb-0">Credits</p>
													<h4 class="my-1">0</h4>
												</div>
												<div class="widgets-icons ms-auto"><i class='bx bx-dollar'></i>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="row">

								<div class="col-4">
									<div class="card mb-5 mb-lg-0">
										<div class="card-header py-3 bg-success">
											<h5 class="card-title text-white text-uppercase text-center">UPI</h5>
											<h6 class="card-price text-white text-center"></h6>
										</div>
										<div class="card-body">
											<ul class="list-group list-group-flush">
												<img src="assets/images/qr.png" class="">
											</ul>
										</div>
									</div>
								</div>
								<div class="col-8">
									<div class="card mb-5 mb-lg-0">
										<div class="card-header py-3 bg-danger">
											<h5 class="card-title text-white text-uppercase text-center">Bank Details</h5>
										</div>
										<div class="card-body">
											<ul class="list-group list-group-flush">
												<li class="list-group-item bg-transparent">Recipient Name : Techtions Solution PrivateLimited</li>
												<li class="list-group-item bg-transparent">Account Number : 42074401119</li>
												<li class="list-group-item bg-transparent">IFSC Code : SBIN0003347</li>
											</ul>
										</div>
									</div>


									<div class="card mt-3 mb-5 mb-lg-0">
										<div class="card-header py-3 bg-warning">
											<h5 class="card-title text-white text-uppercase text-center">How to Add Credits</h5>
										</div>
										<div class="card-body">
											<p>You can add credits in your wallet Via UPI or Direct Bank transfer.</p>
											<p>Once you are done with UPI or Bank Transfer, Please inform us with screenshots.</p>
											<p>Once we verify the same from our backend, your credit will reflect in your account.</p>

											<p>If you have any other queries or questions, please contact your Relationship manager via WhatsApp</p>
										</div>
									</div>

									
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
			<!--end page wrapper -->
			<!--start overlay-->
			<div class="overlay toggle-icon"></div>
			<!--end overlay-->
			<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
			<!--End Back To Top Button-->
			<footer class="page-footer">
				<p class="mb-0">Copyright © 2023. All right reserved.</p>
			</footer>
		</div>
		<!--end wrapper-->
		<!--start switcher-->
		<div class="switcher-wrapper">
			<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
			</div>
			<div class="switcher-body">
				<div class="d-flex align-items-center">
					<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
					<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
				</div>
				<hr />
				<p class="mb-0">Gaussian Texture</p>
				<hr>

				<ul class="switcher">
					<li id="theme1"></li>
					<li id="theme2"></li>
					<li id="theme3"></li>
					<li id="theme4"></li>
					<li id="theme5"></li>
					<li id="theme6"></li>
				</ul>
				<hr>
				<p class="mb-0">Gradient Background</p>
				<hr>

				<ul class="switcher">
					<li id="theme7"></li>
					<li id="theme8"></li>
					<li id="theme9"></li>
					<li id="theme10"></li>
					<li id="theme11"></li>
					<li id="theme12"></li>
					<li id="theme13"></li>
					<li id="theme14"></li>
					<li id="theme15"></li>
				</ul>
			</div>
		</div>
		<!--end switcher-->
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<!--plugins-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
		<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
		<!--app JS-->
		<script src="assets/js/app.js"></script>
	</body>

</html>