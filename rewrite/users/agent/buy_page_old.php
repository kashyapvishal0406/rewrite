<?php
include("includes/error.php");
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
include("includes/agent_details.php");

$service_id = $_GET['service_id'];
$service_name = $_GET['service_name'];
$recieved_category_id = $_GET['category_id'];
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
						<div class="breadcrumb-title pe-3">Service</div>
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
						<div class="col-lg-2">
							<div class="accordion" id="accordionExample">
								<!-- <ul> -->
								<?php
								$sidebar_categories_sql = "SELECT * FROM service_category ORDER BY display_order";
								$sidebar_categories_result = mysqli_query($conn, $sidebar_categories_sql);
								while ($sidebar_categories_row = mysqli_fetch_assoc($sidebar_categories_result)) {
									$sidebar_category_id = $sidebar_categories_row['id'];
									$sidebar_category_name = $sidebar_categories_row['name'];
									?>

									<div class="accordion-item bg-primary">
										<h2 class="accordion-header" id="<?php echo 'heading_' . $sidebar_category_name; ?>">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'collapse_' . $sidebar_category_name; ?>"
												aria-expanded="true" aria-controls="collapseOne">
												<?php echo $sidebar_category_name; ?>
											</button>
										</h2>
										<div id="<?php echo 'collapse_' . $sidebar_category_name; ?>" class="accordion-collapse collapse"
											aria-labelledby="<?php echo 'heading_' . $sidebar_category_name; ?>" data-bs-parent="#accordionExample" style="">
											<div class="accordion-body">
												<ul>
													<?php
													$service_category_sql = "SELECT * FROM service WHERE category_id = $sidebar_category_id";
													$service_category_result = mysqli_query($conn, $service_category_sql);
													while ($service_category_row = mysqli_fetch_assoc($service_category_result)) {
														$sidebar_service_name = $service_category_row['service_name'];
														$sidebar_service_id = $service_category_row['id'];

														?>
														<li>
															<h6><a href="service_order_router.php?service_id=<?php echo $sidebar_service_id; ?>&service_name=<?php echo $sidebar_service_name; ?>&category_id=<?php echo $sidebar_category_id; ?>"
																	class="category_list"><?php echo $sidebar_service_name; ?></a></h6>
														</li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>

								<?php } ?>





							</div>
							<!-- </ul> -->
						</div>
						<div class="col-10">
							<div class="card">
								<div class="card-body">
									<table class="table mb-0 table-striped">
										<thead>
											<tr>
												<th scope="col">Service Name</th>
												<th scope="col">Required Document</th>
												<th scope="col">Price</th>
												<th scope="col">Quantity</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$sql = "SELECT * FROM service WHERE category_id = $recieved_category_id";
											$result = mysqli_query($conn, $sql);
											while ($row = mysqli_fetch_assoc($result)) {
												?>
												<tr>
													<td><?php echo $row['service_name']; ?></td>
													<td><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Documents</button></td>

													<td><?php echo rand(150, 300) * 10; ?></td>
													<td>
														<select class="form-select mb-3" aria-label="Default select example">
															<option value="1" selected>1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="1">4</option>
															<option value="2">5</option>
															<option value="3">6</option>
															<option value="3">7</option>
															<option value="3">8</option>
															<option value="3">9</option>
															<option value="3">10</option>
														</select>
													</td>
													<td><button class="btn btn-light">Add to cart</button></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>

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
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Required Documents</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<ol>
							<li>Aadhaar Card</li>
							<li>Pan Card</li>
							<li>Voter Id</li>
						</ol>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						
					</div>
				</div>
			</div>
		</div>
	</body>

</html>