<?php
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
require_once "includes/agent_details.php";
include('includes/service_structures.php');
include('includes/render_form.php');
include("profile_completion_check.php");

$service_id = $_GET['service_id'];
if (isset($_GET['order_id'])) {
	$order_id = $_GET['order_id'];
} else {
	$order_id = -1;
}

$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$service_data = isset($serviceData[$service_id]) ? $serviceData[$service_id] : null;
$service_name = $service_data['service_name'];
if ($service_data) {
	$pages = $service_data['pages'];

	if (isset($pages[$current_page])) {
		$current_page_data = $pages[$current_page];
		$page_name = $current_page_data['page_name'];
		$next_page = isset($current_page_data['next_page']) ? $current_page_data['next_page'] : $current_page + 1;




		if (isset($current_page_data['next_btn'])) {
			$next_btn = $current_page_data['next_btn'];
		} else {
			$next_btn = 1;
		}
		$fields = $current_page_data['Fields'];
	}
}
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

	<script>
		var current_page = <?php echo $current_page; ?>;
		var next_page = <?php echo $next_page; ?>;
		var page_name = "<?php echo $page_name; ?>";
		var service_id = <?php echo $service_id; ?>;
		var agent_id = <?php echo $agent_id; ?>;
		var order_id = <?php echo $order_id; ?>;
	</script>

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
								<li class="breadcrumb-item active" aria-current="page">
									<?php echo $service_name;
									?>
								</li>
							</ol>
						</nav>
					</div>
				</div>

				<div class="container">
					<div class="main-body">
						<div class="row">
							<div class="col">
								<div class="card border-top border-0 border-4 border-white">
									<div class="card-body p-5">
										<div class="card-title d-flex align-items-center">
											<div><i class="bx bxs-user me-1 font-22 text-white"></i>
											</div>
											<h5 class="mb-0 text-white">
												<?php echo $page_name; ?>
											</h5>
										</div>
										<hr>
										<!-- rendering fields -->
										<form class="row g-3">
											<?php
											foreach ($fields as $field) {

												$field_type = $field['type'];
												$field_id = $field['id'];
												$display_name = $field['display_name'];
												$placeholder = isset($field['placeholder']) ? $field['placeholder'] : null;
												?>
												<?php
												switch ($field_type) {
													case 'text':
														?>
														<div class="col-md-6">
															<label for="<?php echo $display_name; ?>" class="form-label">
																<?php echo $display_name; ?>
															</label>
															<input type="<?php echo $field_type; ?>"
																class="form-control order_input_field"
																placeholder="<?php echo $placeholder; ?>"
																id="<?php echo $field_id; ?>">
														</div>
														<?php break;

													case 'file':
														?>
														<span class="image-upload-wrapper">
															<div class="col-md-6">
																<label for="profile_img" class="form-label">
																	<?php echo $display_name; ?>
																</label>
																<div class="input-group"> <span class="input-group-text"><i
																			class="bx bxs-id-card"></i></span>
																	<input type="file"
																		class="imageInput form-control border-start-0 order_input_field"
																		accept="image/*" id="<?php echo $field_id; ?>">
																</div>
															</div>
															<div class="col-6 mb-3">
																<img class="imagePreview " style="width:40%;" src=""
																	alt="Image Preview">
															</div>
														</span>
														<?php break;

													case 'button':

														$href = $field['href'];
														?>
														<div class="col-md-6">
															<a href="<?php echo $href; ?>&service_id=<?php echo $service_id; ?>&order_id=<?php echo $order_id; ?>"
																class="btn btn-light btn-lg" id="">
																<?php echo $display_name; ?>
															</a>
														</div>

														<?php break;

													case 'date':

														?>
														<div class="col-md-6">
															<label for="<?php echo $display_name; ?>" class="form-label">
																<?php echo $display_name; ?>
															</label>
															<input type="<?php echo $field_type; ?>"
																class="form-control order_input_field"
																placeholder="<?php echo $placeholder; ?>"
																id="<?php echo $field_id; ?>">
														</div>

														<?php break;

												}
												?>
											<?php } ?>

										</form>

										<!-- buttons -->
										<div class="col-12 mt-3">
											<?php
											$previous_page = $current_page - 1;
											$next_page = $current_page + 1;
											$has_previous_page = isset($pages[$previous_page]);
											$has_next_page = isset($pages[$next_page]);

											if ($has_next_page & $next_btn == 1) {
												echo '<button class="btn btn-light px-5 float-end mx-2 order_next_button">Next</button>';
											}
											if
											(!$has_next_page & $next_btn == 1) {
												echo '<button class="btn btn-light px-5 float-end mx-2 order_submit_button">Submit</button>';
											}

											?>
										</div>
										<!-- buttons -->
									</div>
								</div>
							</div>

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

	<script src="assets/js/script.js?v=2"></script>
	<!-- <script type="text/javascript" src="https://control.msg91.com/app/assets/otp-provider/otp-provider.js"></script> -->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>