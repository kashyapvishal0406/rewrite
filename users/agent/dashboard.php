<?php
include("includes/error.php");
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
include("includes/agent_details.php");
include("includes/status_check.php");
include("includes/profile_completion_check.php");
?>

<?php
// include('includes/marketing/visiting.php');
?>
<?php
//include('includes/marketing/banner.php');
?>
<?php
// include('includes/marketing/poster.php'); 
?>
<?php
//include('includes/marketing/id_card.php');
?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/plain.png" type="image/png" />
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
			<?php include('includes/menu.php'); ?>
			<!-- Primary Menu -->
		</div>
		<!--end header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col">
						<?php
						$sql = "SELECT * from orders where agent_id='$agent_id'  ";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_num_rows($result);


						?>
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Orders</p>
										<h4 class="my-1">
											<?php echo $row; ?>
										</h4>
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
										<h4 class="my-1">0</h4>
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
										<h4 class="my-1">0</h4>
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
											$visiting_card = '../../data/marketing/' . $visiting_card_img;
											?>
											<img src="assets/images/visiting.jpg" class="card-img-top" alt="...">
											<div class="card-body">
												<h5 class="card-title">Visiting Card</h5>
												<!-- <a href="javascript:;" class="btn btn-light mt-2">View</a> -->
												<button type="button" class="btn btn-light mt-2" data-bs-toggle="modal"
													data-bs-target="#VisitingCard">Open</button>


												<div class="modal fade" id="VisitingCard" tabindex="-1"
													aria-labelledby="VisitingCardLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="VisitingCardLabel">Visiting
																	Card</h5>
																<button type="button" class="btn-close"
																	data-bs-dismiss="modal" aria-label="Close"></button>
															</div>

															<div class="modal-body">

																<img src="<?php echo $visiting_card; ?>" width="100%">
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-bs-dismiss="modal">Close</button>
																<button type="button"
																	class="btn btn-primary download_image_button"
																	data-img-src="<?php echo $visiting_card; ?>"
																	data-d-name="visiting_card.png">Download</button>
															</div>
															<!-- <div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary">Download</button>
																</div> -->
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
											$banner = '../../data/marketing/' . $banner_img;
											?>
											<img src="assets/images/pamphlet.avif" class="card-img-top" alt="...">

											<div class="card-body">
												<h5 class="card-title">Phamplet</h5>
												<button type="button" class="btn btn-light mt-2" data-bs-toggle="modal"
													data-bs-target="#Banner">Open</button>


												<div class="modal fade" id="Banner" tabindex="-1"
													aria-labelledby="BannerLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="BannerLabel">Phamplet</h5>
																<button type="button" class="btn-close"
																	data-bs-dismiss="modal" aria-label="Close"></button>
															</div>

															<div class="modal-body">
																<img src="<?php echo $banner; ?>" width="100%">
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-bs-dismiss="modal">Close</button>
																<button type="button"
																	class="btn btn-primary download_image_button"
																	data-img-src="<?php echo $banner; ?>"
																	data-d-name="phamplet.png">Download</button>
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
											$poster = '../../data/marketing/' . $poster_img;
											?>
											<img src="assets/images/poster.jpg" class="card-img-top" alt="...">

											<div class="card-body">
												<h5 class="card-title">Poster</h5>
												<button type="button" class="btn btn-light mt-2" data-bs-toggle="modal"
													data-bs-target="#Poster">Open</button>


												<div class="modal fade" id="Poster" tabindex="-1"
													aria-labelledby="PosterLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="PosterLabel">Poster</h5>
																<button type="button" class="btn-close"
																	data-bs-dismiss="modal" aria-label="Close"></button>
															</div>

															<div class="modal-body">
																<img src="<?php echo $poster; ?>" width="100%">
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-bs-dismiss="modal">Close</button>
																<button type="button"
																	class="btn btn-primary download_image_button"
																	data-img-src="<?php echo $poster; ?>"
																	data-d-name="poster.png">Download</button>
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
											<?php
											$id_car_img = $agent_id . '_id_card.png';
											$id_card = '../../data/marketing/' . $id_car_img;
											?>
											<img src="assets/images/idcard.jpg" class="card-img-top" alt="...">

											<div class="card-body">
												<h5 class="card-title">Id Card</h5>
												<button type="button" class="btn btn-light mt-2" data-bs-toggle="modal"
													data-bs-target="#id_card">Open</button>


												<div class="modal fade" id="id_card" tabindex="-1"
													aria-labelledby="BannerLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="BannerLabel">ID Card</h5>
																<button type="button" class="btn-close"
																	data-bs-dismiss="modal" aria-label="Close"></button>
															</div>

															<div class="modal-body">
																<img src="<?php echo $id_card; ?>" width="100%">
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-bs-dismiss="modal">Close</button>
																<button type="button"
																	class="btn btn-primary download_image_button"
																	data-img-src="<?php echo $id_card; ?>"
																	data-d-name="id_card.png">Download</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col">
										<div class="card">
											<img src="assets/images/certificate.webp" class="card-img-top" alt="...">
											<div class="card-body">
												<h5 class="card-title">Certificate</h5>
												<a href="javascript:;" class="btn btn-light mt-2">View</a>
											</div>
										</div>
									</div>

									<div class="col">
										<div class="card">
											<img src="assets/images/agreement.jpg" class="card-img-top" alt="...">
											<div class="card-body">
												<h5 class="card-title">Agreement</h5>
												<a href="aggr.php" class="btn btn-light mt-2" target="_blank">View</a>
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
										<?php

										$sql5 = "SELECT  orders.customer_name,orders.customer_mobile,orders.service_id,orders.order_date,orders.id AS order_service_id, service.service_name FROM `orders` INNER JOIN service on service.id=orders.service_id  where orders.agent_id=$agent_id order by order_service_id desc limit 20;";
										$res = mysqli_query($conn, $sql5);
										?>
										<thead class="table-light">
											<tr>
												<th>Order id</th>
												<th>Customer Name</th>
												<th>Customer Mobile</th>
												<th>Service Name</th>
												<th>OrderDate</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

											<?php while ($data = mysqli_fetch_assoc($res)) {


												$order_id = $data['order_service_id'];

												$customer_name = $data['customer_name'];
												$customer_mobile = $data['customer_mobile'];
												$service_name = $data['service_name'];
												$order_date = $data['order_date'];


												?>

												<tr>
													<td>
														<?php echo $order_id; ?>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<div class="ms-2">
																<h6 class="mb-1 font-14">
																	<?php echo $customer_name; ?>
																</h6>
															</div>
														</div>
													</td>
													<td>
														<?php echo $customer_mobile; ?>
													</td>
													<td>
														<?php echo $service_name; ?>
													</td>
													<td>
														<?php echo $order_date; ?>
													</td>
													<td>
														<div class="d-flex align-items-center text-white text-danger"> <i
																class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
															<span>Pending</span>
														</div>
													</td>
													<td>
														<div class="d-flex order-actions">
															<a href="view_order_loan.php?order_id=<?php echo $order_id; ?>"
																class=""><i class='bx bx-right-arrow-alt'></i></a>
														</div>
													</td>
												</tr>
												<?php
											}
											?>

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
								<a href="wallet.php" class="btn btn-light mt-2">Visit Wallet</a>
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
														<p class="card-text">You can contact your relationship manager
															if you have any queries.</p>
													</div>
													<ul class="list-group list-group-flush">
														<li class="list-group-item">Name :
															<?php echo $agent_details['relationship_manager']; ?>
														</li>
														<li class="list-group-item">Whatsapp : 9696857016</li>
													</ul>
												</div>
											</div>
											<div class="col">
												<div class="card">
													<div class="card-body">
														<h5 class="card-title">Contact us</h5>
														<p class="card-text">If you have any questions contact us using
															any of the following medium.</p>
													</div>
													<ul class="list-group list-group-flush">
														<li class="list-group-item">E-mail :
															support@techtionsolution.com</li>
														<li class="list-group-item">E-mail :
															director@techtionsolution.com</li>
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
									<div
										class="customers-list-item d-flex align-items-center border-bottom px-2 py-3 cursor-pointer">
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
										<input type="text" class="form-control" placeholder="Referral Link"
											aria-label="Referral Link" aria-describedby="button-addon2"
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

		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
				class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!-- <footer class="page-footer">
				<p class="mb-0">Copyright © 2023. All right reserved.</p>
			</footer> -->
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		$(function () {
			$(".download_image_button").on("click", function () {
				const imageSrc = $(this).data("img-src");
				const file_name = $(this).data("d-name");
				const anchor = document.createElement("a");
				anchor.href = imageSrc;
				anchor.download = file_name;
				anchor.target = "_blank";
				anchor.click();
			});

			if (profile_complete_status == 0) {
				Swal.fire({
					title: 'Attention!',
					text: 'Your Profile is incomplete, Please complete it to continue',
					icon: 'error',
					confirmButtonText: 'Complete Profile'
				});

			}
		});
	</script>


</body>

</html>