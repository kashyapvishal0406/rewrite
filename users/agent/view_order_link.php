<?php
include("includes/error.php");
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
include("includes/agent_details.php");

$order_id = $_GET['order_id'];

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
		<style>
			.border-top {
				border-top: 6px solid rgb(11 205 176) !important;
			}
		</style>

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
						<div class="breadcrumb-title pe-3">Order Center</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">

									<li class="breadcrumb-item active" aria-current="page">You can View all your previous orders below</li>
								</ol>
							</nav>
						</div>

					</div>
					<!--end breadcrumb-->
					<div class="row">
						<?php include('includes/sidebar.php'); ?>

						<?php
						$sql = "SELECT * FROM orders WHERE id = $order_id";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						$order_id = $row['id'];
						$customer_name = $row['customer_name'];
						$customer_mobile = $row['customer_mobile'];
						// $customer_email = $row['customer_email'];
						// $customer_address = $row['customer_address'];
						$order_date = $row['order_date'];
						$order_status = $row['status'];
						$service_id = $row['service_id'];
						$payment_image = $row['payment_image'];

						$sql_service = "SELECT `service_name` FROM `service` WHERE id = $service_id";
						$result_service = mysqli_query($conn, $sql_service);
						$row_service = mysqli_fetch_assoc($result_service);
						$service_name = $row_service['service_name'];

						$sql_details = "SELECT * FROM order_details WHERE order_id = '$order_id'";;
						$result_details = mysqli_query($conn, $sql_details);
						$link_order_object = array();
						while($row_details = mysqli_fetch_assoc($result_details))
						{
							$column_name = $row_details['name'];
							$column_value = $row_details['value'];
							$link_order_object[$column_name] = $column_value;
						}
						
						?>

						<div class="col-10">
							<div class="row">
								<div class="col-6">
									<div class="card border-top border-0 border-4 border-white">
										<div class="card-body p-5">
											<div class="row">
												<div class="col-md-12 mb-3">
													<div class="row px-2">
														<h5 class="mt-3 text-white">Order Details</h5>
														<hr>
														<div class="col-md-6 mb-3">
															<label for="fullname" class="form-label">Order ID</label>
															<input type="text" class="form-control" value="<?php echo $order_id; ?>" disabled>
														</div>

														<div class="col-md-6 mb-3">
															<label for="fullname" class="form-label">Order Date</label>
															<input type="text" class="form-control" value="<?php echo $order_date; ?>" disabled>
														</div>

														<div class="col-md-8 mb-3">
															<label for="fullname" class="form-label">Service Name</label>
															<input type="text" class="form-control" value="<?php echo $service_name; ?>" disabled>
														</div>

														<div class="col-md-4 mb-3">
															<label for="fullname" class="form-label">Status</label>

															<select class="form-select mb-3" aria-label="Default select example">
																<option value="1">Payment Pending</option>
																<option value="2">Payment Approved</option>
																<option value="3">Order Pending</option>
															</select>
														</div>

														<?php if (isset($payment_image)) { ?>
														<div class="col-md-6 mb-3">
															<label for="fullname" class="form-label">Payment Screenshot</label>
															<img src="../../data/order_images/<?php echo $payment_image; ?>" class="card-img-top" alt="...">
															<a href="../../data/order_images/<?php echo $payment_image; ?>" class="btn btn-warning float-end mt-3" download>Download</a>
														</div>
														<?php }?>

													</div>
												</div>

											</div>

										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="card border-top border-0 border-4 border-white">
										<div class="card-body p-5">
											<div class="row">
												<div class="col-md-12 mb-3">
													<div class="row px-2">
														<h5 class="mt-3 text-white">Customer Details</h5>
														<hr>

														<div class="col-md-6 mb-3">
															<label for="fullname" class="form-label">Customer's Name</label>
															<input type="text" class="form-control" value="<?php echo $customer_name; ?>" disabled>
														</div>

														<div class="col-md-6 mb-3">
															<label for="fullname" class="form-label">Customer's Mobile</label>
															<input type="text" class="form-control" value="<?php echo $customer_mobile; ?>" disabled>
														</div>

														<div class="col-md-12 mb-3">
															<label for="fullname" class="form-label">Customer's WhatsApp</label>
															<input type="text" class="form-control" value="<?php echo $link_order_object['whatsapp']; ?>" disabled>
														</div>
														<div class="col-md-12 mb-3">
															<label for="fullname" class="form-label">Customer's Email</label>
															<input type="text" class="form-control" value="<?php echo $link_order_object['email']; ?>" disabled>
														</div>
														<div class="col-md-12 mb-3">
															<label for="fullname" class="form-label">Customer's DOB</label>
															<input type="date" class="form-control" value="<?php echo $link_order_object['dob']; ?>" disabled>
														</div>
														<div class="col-md-6 mb-3">
															<label for="fullname" class="form-label">Vendor Name</label>
															<input type="text" class="form-control" value="<?php echo $link_order_object['vendor_name']; ?>" disabled>
														</div>

													</div>
												</div>

											</div>

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

		<script>
			$(".docs_modal_button").on('click', function () {
				var service_id = $(this).data('service-id');
				$(".required_document_modal").empty();

				$.ajax({
					type: "POST",
					url: "functions/index.php",
					data: { service_id: service_id, fetch_docs: 1 },
					success: function (result) {
						console.log(result);
						$(".required_document_modal").append(result);
					},
				});
			});
		</script>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Required Documents</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<ol class="required_document_modal">

						</ol>
					</div>
					<div class=" modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

					</div>
				</div>
			</div>
		</div>
	</body>

</html>