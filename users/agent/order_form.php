<?php
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
require_once "includes/agent_details.php";

// $recieved_bank_name = $_GET['service'];
$service_id = $_GET['service_id'];
$service_name = $_GET['service_name'];
$template_name = $_GET['page'];
// include('includes/pagelinks.php');

// $page_link_array = $pages_links_object[$service_id];

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
		<link href="assets/css/style.css" rel="stylesheet">

		

		<title>Order</title>
	</head>

	<body class="bg-theme bg-theme2">
		<!--wrapper-->
		<div class="wrapper">
			<!--start header wrapper-->
			<div class="header-wrapper">
				<!--start header -->
				<?php include('includes/navbar.php'); ?>
				<!--end header -->
				<!-- Primary Menu -->
				<?php include('includes/menu.php'); ?>

				<!-- Primary Menu -->
			</div>
			<!--end header wrapper-->
			<!--start page wrapper -->
			<div class="page-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">Service</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<!-- <li class="breadcrumb-item"></li> -->
									<li class="breadcrumb-item active" aria-current="page"><?php echo $service_name; ?></li>
								</ol>
							</nav>
						</div>
					</div>

					<div class="container">
						<div class="main-body">
							<div class="row">
								<?php
								$template_full_path = 'order_templates/'.$template_name.'.php';
								include($template_full_path);
								?>
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
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

		
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		
		<!-- Bootstrap Wizard Form js -->
		<script src="assets/js/jquery.bootstrap.wizard.min.js"></script>

		<!-- Wizard Form Demo js -->
		<script src="assets/js/demo.form-wizard.js"></script>

		<script src="assets/js/script.js"></script>
		<script type="text/javascript" src="https://control.msg91.com/app/assets/otp-provider/otp-provider.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	</body>

</html>