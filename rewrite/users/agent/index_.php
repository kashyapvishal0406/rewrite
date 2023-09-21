<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
require_once 'functions/agent_details.php';

?>
<?php include('includes/marketing/visiting.php'); ?>
<?php include('includes/marketing/banner.php'); ?>
<?php include('includes/marketing/poster.php'); ?>
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
		<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
		<!-- loader-->
		<!-- <link href="assets/css/pace.min.css" rel="stylesheet" />
		<script src="assets/js/pace.min.js"></script> -->
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="assets/css/app.css" rel="stylesheet">
		<link href="assets/css/icons.css" rel="stylesheet">

		<title>Dashboard</title>
	</head>

	<body class="bg-theme bg-theme2">
		<!--wrapper-->
		<div class="wrapper">
			<!--start header wrapper-->
			<div class="header-wrapper">
				<!--start header -->

				<?php include('includes/navbar.php'); ?>

				<!-- Primary Menu -->
				<?php include('includes/menu_working.php'); ?>
				<!-- Primary Menu -->
			</div>
			<!--end header wrapper-->
			<!--start page wrapper -->
			<div class="page-wrapper">
				<div class="page-content">
					<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
						<div class="col">
							<div class="card radius-10">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0">Total Orders</p>
											<h4 class="my-1">125</h4>
										</div>
										<div class="widgets-icons ms-auto"><i class='bx bx-list-ol'></i>
										</div>
									</div>
									<div id="chart1"></div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card radius-10">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0">Pending Orders</p>
											<h4 class="my-1">59</h4>
										</div>
										<div class="widgets-icons ms-auto"><i class='bx bx-list-ol'></i>
										</div>
									</div>
									<div id="chart2"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="card radius-10">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0">Rejected Orders</p>
											<h4 class="my-1">12</h4>
										</div>
										<div class="widgets-icons ms-auto"><i class='bx bx-list-ol'></i>
										</div>
									</div>
									<div id="chart3"></div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="row row-cols-1 row-cols-xl-2">
						<div class="col d-flex">
							<div class="card radius-10 w-100">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-1">Branding Material</h5>
											<p class="mb-0 font-13">Download and Print from below</p>
										</div>

									</div>
									<div class="row row-cols-1 row-cols-sm-3 mt-4">

										<div class="col">
											<div class="card">

												<?php
												$visiting_card_img = $agent_id . '_visiting_card.png';
												$visiting_card = '../../data/marketing/'. $visiting_card_img;
												?>
												<img src="assets/images/visiting.jpg" class="card-img-top" alt="...">
												<div class="card-body">
													<h5 class="card-title">Visiting Card</h5>
													<!-- <a href="javascript:;" class="btn btn-light mt-2">View</a> -->
													<button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#VisitingCard">Open</button>


													<div class="modal fade" id="VisitingCard" tabindex="-1" aria-labelledby="VisitingCardLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="VisitingCardLabel">Visiting Card</h5>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>

																<div class="modal-body">

																	<img src = "<?php echo $visiting_card; ?>" width="100%">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary">Download</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col">
											<div class="card">
												<?php
												$banner_img = $agent_id . '_banner.png';
												$banner = '../../data/marketing/'. $banner_img;
												?>
												<img src="assets/images/banner.jpg" class="card-img-top" alt="...">

												<div class="card-body">
													<h5 class="card-title">Banner</h5>
													<button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#Banner">Open</button>


													<div class="modal fade" id="Banner" tabindex="-1" aria-labelledby="BannerLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="BannerLabel">Visiting Card</h5>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>

																<div class="modal-body">
																	<img src = "<?php echo $banner; ?>" width="100%">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary">Download</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col">
											<div class="card">
												<?php
												$poster_img = $agent_id . '_poster.png';
												$poster = '../../data/marketing/'. $poster_img;
												?>
												<img src="assets/images/poster.avif" class="card-img-top" alt="...">

												<div class="card-body">
													<h5 class="card-title">Poster</h5>
														<button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#Poster">Open</button>


													<div class="modal fade" id="Poster" tabindex="-1" aria-labelledby="PosterLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="PosterLabel">Visiting Card</h5>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																</div>

																<div class="modal-body">
																	<img src = "<?php echo $poster; ?>" width="100%">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary">Download</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>

									<div class="row row-cols-1 row-cols-sm-3 mt-4">

										<div class="col">
											<div class="card">
												<img src="assets/images/visiting_card.jpg" class="card-img-top" alt="...">
												<div class="card-body">
													<h5 class="card-title">ID Card</h5>
													<a href="javascript:;" class="btn btn-light mt-2">View</a>
												</div>
											</div>
										</div>

										<div class="col">
											<div class="card">
												<img src="assets/images/visiting_card.jpg" class="card-img-top" alt="...">
												<div class="card-body">
													<h5 class="card-title">Certificate</h5>
													<a href="javascript:;" class="btn btn-light mt-2">View</a>
												</div>
											</div>
										</div>

										<div class="col">
											<div class="card">
												<img src="assets/images/visiting_card.jpg" class="card-img-top" alt="...">
												<div class="card-body">
													<h5 class="card-title">Agreement</h5>
													<a href="javascript:;" class="btn btn-light mt-2">View</a>
												</div>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
						<div class="col d-flex">
							<div class="card radius-10 w-100">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-1">Recent Orders</h5>

										</div>
									</div>
									<div class="table-responsive mt-4">
										<table class="table align-middle mb-0 table-hover">
											<thead class="table-light">
												<tr>
													<th>Order id</th>
													<th>Service</th>
													<th>Customer</th>
													<th>Date</th>
													<th>Price</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>#897656</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">MSME Registration</h6>
															</div>
														</div>
													</td>
													<td>Rajesh Kumar</td>
													<td>12 Jul 2020</td>
													<td>₹1200.00</td>
													<td>
														<div class="d-flex align-items-center text-white text-danger"> <i
																class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Pending</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#987549</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">Micro ATM</h6>
															</div>
														</div>
													</td>
													<td>Vikram Singh</td>
													<td>14 Jul 2020</td>
													<td>₹1200.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Dispatched</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#685749</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">Business Loan</h6>
															</div>
														</div>
													</td>
													<td>Amit Sharma</td>
													<td>15 Jul 2020</td>
													<td>₹1300.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Completed</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#887459</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">Car Insurance</h6>
															</div>
														</div>
													</td>
													<td>Sneha Gupta</td>
													<td>18 Jul 2020</td>
													<td>₹1400.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Completed</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#335428</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">GST Surrender</h6>
															</div>
														</div>
													</td>
													<td>Anjali Verma</td>
													<td>20 Jul 2020</td>
													<td>₹1500.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Pending</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#224578</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">ITR Correction</h6>
															</div>
														</div>
													</td>
													<td>Priya Patel</td>
													<td>22 Jul 2020</td>
													<td>₹1400.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Dispatched</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#447896</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">Housing Loan</h6>
															</div>
														</div>
													</td>
													<td>Varun Khanna</td>
													<td>28 Jul 2020</td>
													<td>₹1100.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Pending</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#447896</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">Housing Loan</h6>
															</div>
														</div>
													</td>
													<td>Arjun Sharma</td>
													<td>28 Jul 2020</td>
													<td>₹1200.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Pending</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#447896</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">Housing Loan</h6>
															</div>
														</div>
													</td>
													<td>Manisha Kapoor</td>
													<td>28 Jul 2020</td>
													<td>₹1400.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Pending</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>#447896</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">Housing Loan</h6>
															</div>
														</div>
													</td>
													<td>Rohit Verma</td>
													<td>28 Jul 2020</td>
													<td>₹1250.00</td>
													<td>
														<div class="d-flex align-items-center text-white"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Pending</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="javascript:;" class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->


					<div class="row row-cols-1 row-cols-md-1">
						<div class="col col-lg-6">
							<div class="card radius-10">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h4 class="my-1">Order Center</h4>
											<p class="mb-0">Visit order center to see all your orders</p>
										</div>
									</div>
									<a href="orders.php" class="btn btn-light mt-2">Visit Order Center</a>
								</div>
							</div>

							<div class="card radius-10">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h4 class="my-1">My Wallet</h4>
											<p class="mb-0">Visit your wallet to manage your credits</p>
										</div>
									</div>
									<a href="javascript:;" class="btn btn-light mt-2">Visit Wallet</a>
								</div>
							</div>

							<!-- <div class="card radius-10">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h4 class="my-1">Order Center</h4>
											<p class="mb-0">Visit order center to see all your orders</p>
										</div>
									</div>
									<a href="javascript:;" class="btn btn-light mt-2">Go somewhere</a>
								</div>
							</div> -->
						</div>
						<div class="col col-lg-6 d-flex">
							<div class="card radius-10 w-100">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-1">Support</h5>

											<div class="row mt-4">
												<div class="col">
													<div class="card">
														<div class="card-body">
															<h5 class="card-title">Relationship Manager</h5>
															<p class="card-text">You can contact your relationship manager if you have any queries.</p>
														</div>
														<ul class="list-group list-group-flush">
															<li class="list-group-item">Name : Aman Gupta</li>
															<li class="list-group-item">Mobile : 8878767656</li>
															<li class="list-group-item">Whatsapp : 9898767654</li>
														</ul>
													</div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-body">
															<h5 class="card-title">Contact us</h5>
															<p class="card-text">If you have any questions contact us using any of the following medium.</p>
														</div>
														<ul class="list-group list-group-flush">
															<li class="list-group-item">Mobile : 8878767656</li>
															<li class="list-group-item">Whatsapp : 9898767654</li>
															<li class="list-group-item">E-mail : support@techtionsolution.com</li>
														</ul>
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

					<!--end row-->
					<div class="row">
						<div class="col-12 col-xl-6 d-flex">
							<div class="card radius-10 w-100">
								<div class="card-header border-bottom">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-0">Login History</h5>
										</div>
									</div>
								</div>
								<div class="customers-list p-3 mb-3">
									<?php for ($i = 0; $i < 5; $i++) { ?>
										<div class="customers-list-item d-flex align-items-center border-bottom px-2 py-3 cursor-pointer">
											<div class="ms-2">
												<h6 class="mb-1 font-14">23-july-2023 02:44 PM</h6>
											</div>
											<div class="list-inline d-flex customers-contacts ms-auto">
												12.23.45.6
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-12 col-xl-6 d-flex">
							<div class="card radius-10 w-100">
								<div class="card-header border-bottom">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-0">Refer & Earn</h5>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="row m-0 row-cols-1 row-cols-md-3">
										<p>Share this link to refer someone.</p>
										<div class="input-group mb-3">
											<input type="text" class="form-control" placeholder="Referral Link" aria-label="Referral Link" aria-describedby="button-addon2"
												value="https://techtinsolution.com">
											<button class="btn btn-light" type="button" id="button-addon2">Copy</button>
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
		<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
		<script>
			$(document).ready(function () {
				$('#Transaction-History').DataTable({
					lengthMenu: [
						[6, 10, 20, -1],
						[6, 10, 20, 'Todos']
					]
				});
			});
		</script>
		<script src="assets/js/index.js"></script>
		<!--app JS-->
		<script src="assets/js/app.js"></script>
		<script>
			new PerfectScrollbar('.product-list');
			new PerfectScrollbar('.customers-list');
		</script>


	</body>

</html>
