<?php
include("includes/error.php");
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
include("includes/agent_details.php");

$service_id = $_GET['service_id'];
$service_name = $_GET['service_name'];
$vendor_link = $_GET['vendor_link']
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

		<script>
			var service_id = <?php echo $service_id; ?>;
			var agent_id = <?php echo $agent_id; ?>;
			var vendor_link = "<?php echo $vendor_link; ?>";
			var vendor_name = "<?php echo $service_name; ?>";
		</script>
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
						<div class="breadcrumb-title pe-3">Loan</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">

									<li class="breadcrumb-item active" aria-current="page"><?php echo $service_name; ?></li>
								</ol>
							</nav>
						</div>

					</div>
					<!--end breadcrumb-->
					<div class="row">
						<?php include('includes/sidebar.php'); ?>
						<div class="col-10">
							<div class="row">
								<div class="col-10 mx-auto">
									<div class="card border-top border-0 border-4 border-white">
										<div class="card-body p-5">
											<div class="card-title d-flex align-items-center">
												<div><i class="bx bxs-user me-1 font-22 text-white"></i>
												</div>
												<h5 class="mb-0 text-white">
													Personal Details </h5>
											</div>
											<hr>
											<!-- rendering fields -->
											<form class="row g-3">
												<div class="col-md-6">
													<label for="Customer's Name" class="form-label">
														Customer's Name </label>
													<input type="text" class="form-control order_input_field" placeholder="Enter Your Name" id="customer_name">
												</div>
												<div class="col-md-6">
													<label for="Customer's Mobile" class="form-label">
														Customer's Mobile </label>
													<input type="text" class="form-control order_input_field" placeholder="Enter Your Mobile" id="customer_mobile">
												</div>
												<div class="col-md-6">
													<label for="WhatsApp" class="form-label">
														WhatsApp </label>
													<input type="text" class="form-control order_input_field" placeholder="Enter Your WhatsApp Number" id="whatsapp">
												</div>
												<div class="col-md-6">
													<label for="Customer's E-mail" class="form-label">
														Customer's E-mail </label>
													<input type="text" class="form-control order_input_field" placeholder="Enter Your Email" id="email">
												</div>
												<div class="col-md-6">
													<label for="Date Of Birth" class="form-label">
														Date Of Birth </label>
													<input type="date" class="form-control order_input_field" placeholder="" id="customer_dob">
												</div>

											</form>

											<!-- buttons -->
											<div class="col-12 mt-3">
												<button class="btn btn-light px-5 float-end mx-2 link_order_button">Submit</button>
											</div>
											<!-- buttons -->
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
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<!--app JS-->
		<script src="assets/js/app.js"></script>
		<script src="assets/js/script.js"></script>
	</body>

</html>