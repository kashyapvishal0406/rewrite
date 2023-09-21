<?php
include("includes/error.php");
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
include("includes/agent_details.php");
include("includes/status_check.php");
$profile_complete_status = $_SESSION['profile_complete_status'];
?>
<script>
	var profile_complete_status = <?php echo $profile_complete_status; ?>
</script>

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

		<title>Profile</title>
	</head>

	<body class="bg-theme bg-theme2">
		<!--wrapper-->
		<div class="wrapper">
			<!--start header wrapper-->
			<div class="header-wrapper">
				<!--start header -->
				<?php include('includes/navbar.php'); ?>
				<!--end header -->
				<!--navigation-->
				<?php include('includes/menu.php'); ?>
				<!--end navigation-->
			</div>
			<!--end header wrapper-->
			<!--start page wrapper -->
			<div class="page-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">User Profile</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">User Profile</li>
								</ol>
							</nav>
						</div>

					</div>
					<!--end breadcrumb-->
					<div class="container">
						<div class="main-body">
							<div class="row">

								<div class="col">
									<!-- <div class="row">
										<div class="col-sm-12"> -->
									<div class="card border-top border-0 border-4 border-white">
										<div class="card-body p-5">
											<div class="card-title d-flex align-items-center">
												<div><i class="bx bxs-user me-1 font-22 text-white"></i>
												</div>
												<h5 class="mb-0 text-white">Basic Details</h5>
											</div>
											<hr>
											<form class="row g-3">
												<div class="col-md-6">
													<label for="full_name" class="form-label">Full Name</label>
													<div class="input-group"> <span class="input-group-text"><i class="bx bxs-user"></i></span>
														<input type="text" class="form-control border-start-0" id="full_name" placeholder="Enter Your Name"
															value="<?php echo $agent_details['name']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<label for="shop_name" class="form-label">Shop Name</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bx-store'></i></span>
														<input type="text" class="form-control border-start-0" id="shop_name" placeholder="Enter Shop Name"
															value="<?php echo $agent_details['shop_name']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<label for="dob" class="form-label">DOB</label>
													<div class="input-group"> <span class="input-group-text"><i class="bx bx-list-check"></i></span>
														<input type="date" class="form-control border-start-0" id="dob" value="<?php echo $agent_details['dob'] ?>">
													</div>
												</div>
												<span class="image-upload-wrapper">
													<div class="col-md-6">
														<label for="profile_img" class="form-label">Profile Picture</label>
														<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
															<input type="file" class="imageInput form-control border-start-0" id="profile_img" accept="image/png, image/jpeg, image/jpg">

														</div>
													</div>
													<div class="col-12 mb-3">
														<?php if (!empty($agent_details['profile_img'])): ?>
															<img class="imagePreview" src="<?php echo "../../data/user_images/" . $agent_details['profile_img']; ?>" alt="Image Preview"
																style="display:block;">
														<?php else: ?>
															<img class="imagePreview" src="" alt="Image Preview" style="display: none;">
														<?php endif; ?>
													</div>
												</span>


												<div class="card-title d-flex align-items-center pt-2">
													<div><i class="bx bxs-user me-1 font-22 text-white"></i>
													</div>
													<h5 class="mb-0 text-white">Contact Details</h5>
												</div>
												<hr>
												<div class="col-md-6">
													<label for="phone_number" class="form-label">Phone Number</label>
													<div class="input-group"> <span class="input-group-text"><i class="bx bxs-phone"></i></span>
														<input type="text" class="form-control border-start-0" id="phone_number" placeholder="Phone No" value="<?php echo $agent_details['mobile']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<label for="whatsapp" class="form-label">WhatsApp</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bxl-whatsapp'></i></span>
														<input type="text" class="form-control border-start-0" id="whatsapp" placeholder="WhatsApp" value="<?php echo $agent_details['whatsapp']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<label for="email" class="form-label">Email Address</label>
													<div class="input-group"> <span class="input-group-text"><i class="bx bxs-envelope"></i></span>
														<input type="text" class="form-control border-start-0" id="email" placeholder="Email Address" value="<?php echo $agent_details['email']; ?>">
													</div>
												</div>

												<div class="col-12">
													<label for="address" class="form-label">Address</label>
													<textarea class="form-control" id="address" placeholder="Enter Address" rows="3"><?php echo $agent_details['address']; ?></textarea>
												</div>


												<div class="col-md-6">
													<label for="state" class="form-label">State</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bxs-buildings'></i></span>

														<select class="form-select" aria-label="Default select example" id="state">
															<option value="0">Select State</option>
															<?php
															$sql_states = "SELECT * FROM states";
															$result_states = mysqli_query($conn, $sql_states);
															while ($row_states = mysqli_fetch_assoc($result_states)) {
																$state_id = $row_states['id'];
																$state_name = $row_states['name'];
																?>
																<option value="<?php echo $state_id; ?>" <?php if ($agent_state == $state_id) {
																	   echo 'selected';
																   } ?>><?php echo $state_name; ?></option>
															<?php } ?>
														</select>

													</div>
												</div>
												<div class="col-md-6">
													<label for="city" class="form-label">City</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bxs-city'></i></span>
														<input type="text" class="form-control border-start-0" id="city" placeholder="City" value="<?php echo $agent_details['city']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<label for="pincode" class="form-label">Pincode</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bx-buildings'></i></span>
														<input type="text" class="form-control border-start-0" id="pincode" placeholder="Pincode" value="<?php echo $agent_details['pincode']; ?>">
													</div>
												</div>

												<div class="card-title d-flex align-items-center pt-2">
													<div><i class="bx bxs-user me-1 font-22 text-white"></i>
													</div>
													<h5 class="mb-0 text-white">Documents</h5>
												</div>
												<hr>

												<div class="row">
													<div class="col">
														<div class="row">
															<div class="col-12 mb-3">
																<label for="aadhaar_number" class="form-label">Aadhaar Number</label>
																<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
																	<input type="text" class="form-control border-start-0" id="aadhaar_number" placeholder="Aadhaar Number"
																		value="<?php echo $agent_details['aadhar_number']; ?>">
																</div>
															</div>
															<span class="image-upload-wrapper">
																<div class="col-12 mb-3">
																	<label for="aadhaar_number" class="form-label">Upload Aadhaar Front</label>
																	<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
																		<input type="file" class="imageInput form-control border-start-0" id="aadhaar_front_img" accept="image/*">

																	</div>
																</div>
																<div class="col-12 mb-3">
																	<?php if (!empty($agent_details['aadhaar_front_img'])): ?>
																		<img class="imagePreview" src="<?php echo "../../data/user_images/" . $agent_details['aadhaar_front_img']; ?>" alt="Image Preview"
																			style="display:block;">
																	<?php else: ?>
																		<img class="imagePreview" src="" alt="Image Preview" style="display: none;">
																	<?php endif; ?>
																</div>
															</span>
															<span class="image-upload-wrapper">
																<div class="col-12 mb-3">
																	<label for="aadhaar_number" class="form-label">Upload Aadhaar Back</label>
																	<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
																		<input type="file" class="imageInput form-control border-start-0" id="aadhaar_back_img" accept="image/*">

																	</div>
																</div>
																<div class="col-12 mb-3">
																	<?php if (!empty($agent_details['aadhaar_back_img'])): ?>
																		<img class="imagePreview" src="<?php echo "../../data/user_images/" . $agent_details['aadhaar_back_img']; ?>" alt="Image Preview"
																			style="display:block;">
																	<?php else: ?>
																		<img class="imagePreview" src="" alt="Image Preview" style="display: none;">
																	<?php endif; ?>
																</div>
															</span>
														</div>
													</div>
													<div class="col">
														<div class="row">
															<div class="col mb-3">
																<label for="pan_number" class="form-label">Pan Number</label>
																<div class="input-group"> <span class="input-group-text"><i class='bx bx-id-card'></i></span>
																	<input type="text" class="form-control border-start-0" id="pan_number" placeholder="Pan Number"
																		value="<?php echo $agent_details['pan_number']; ?>">
																</div>
															</div>
															<span class="image-upload-wrapper">
																<div class="col-12 mb-3 mb-3">
																	<label for="aadhaar_number" class="form-label">Upload Pan Card</label>
																	<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
																		<input type="file" class="imageInput form-control border-start-0" id="pan_img" accept="image/*">

																	</div>
																</div>
																<div class="col-12">
																	<?php if (!empty($agent_details['pan_img'])): ?>
																		<img class="imagePreview" src="<?php echo "../../data/user_images/" . $agent_details['pan_img']; ?>" alt="Image Preview"
																			style="display:block;">
																	<?php else: ?>
																		<img class="imagePreview" src="" alt="Image Preview" style="display: none;">
																	<?php endif; ?>
																</div>
															</span>

														</div>
													</div>
												</div>






												<div class="card-title d-flex align-items-center pt-2">
													<div><i class="bx bxs-user me-1 font-22 text-white"></i>
													</div>
													<h5 class="mb-0 text-white">Bank Details</h5>
												</div>
												<hr>

												<div class="col-md-6">
													<label for="benificiary_name" class="form-label">Benificiary Name</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bx-list-check'></i></span>
														<input type="text" class="form-control border-start-0" id="benificiary_name" placeholder="Benificiary Name"
															value="<?php echo $agent_details['benificiary_name']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<label for="benificiary_account_number" class="form-label">Benificiary Account Number</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bx-list-check'></i></span>
														<input type="text" class="form-control border-start-0" id="benificiary_account_number" placeholder="Benificiary Account Number"
															value="<?php echo $agent_details['benificiary_account_number']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<label for="bank_name" class="form-label">Bank Name</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bxs-bank'></i></span>
														<input type="text" class="form-control border-start-0" id="bank_name" placeholder="Bank Name"
															value="<?php echo $agent_details['bank_name']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<label for="ifsc" class="form-label">IFSC Code</label>
													<div class="input-group"> <span class="input-group-text"><i class='bx bx-list-check'></i></span>
														<input type="text" class="form-control border-start-0" id="ifsc" placeholder="IFSC Code" value="<?php echo $agent_details['ifsc']; ?>">
													</div>
												</div>

												<!-- <div class="card-title d-flex align-items-center pt-2">
													<div><i class="bx bxs-user me-1 font-22 text-white"></i>
													</div>
													<h5 class="mb-0 text-white">Upload Documents</h5>
												</div>
												<hr> -->
											</form>
											<div class="col-12">
												<button id="update_profile" class="btn btn-light px-5 float-end mt-3">Save</button>
											</div>
										</div>
									</div>

									<!-- </div>
									</div> -->
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
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<!--Password show & hide js -->
		<script src="assets/js/script.js?version=2"></script>
		<script>
			$(function () {
				if (profile_complete_status == 0) {
					Swal.fire({
						title: 'Attention!',
						text: 'Your Profile is incomplete, Please complete it to continue',
						icon: 'error',
						confirmButtonText: 'Complete Profile'
					});

				}
			})
		</script>
	</body>

</html>