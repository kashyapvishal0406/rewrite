<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;

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
		<link href="assets/css/pace.min.css" rel="stylesheet" />
		<script src="assets/js/pace.min.js"></script>
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="assets/css/app.css" rel="stylesheet">
		<link href="assets/css/icons.css" rel="stylesheet">

		<title>Techtions</title>
	</head>

	<body class="bg-theme bg-theme2">
		<!--wrapper-->
		<div class="wrapper">
			<!--sidebar wrapper -->
			<!-- SIDEBAR -->
			<?php include('includes/sidebar.php'); ?>
			<!--end sidebar wrapper -->


			<!--start header -->
			<?php include('includes/header.php'); ?>
			<!--end header -->
			<!-- visiting card -->
			<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				// Retrieve form data
				$agent_name = $_POST['fullname'];
				$userJobTitle = $_POST['designation'];
				$email = $_POST['email'];
				$contact = $_POST['mobile'];
				$address = $_POST['address'];

				// Load the blank template image
				$template = imagecreatefrompng('assets/images/marketing_templates/visit.png');

				// Set font and colors
				$fontColor = imagecolorallocate($template, 0, 0, 0);
				$white = imagecolorallocate($template, 255, 255, 255);
				$fontPath_bold = 'assets/fonts/Poppins-Bold.ttf'; // Provide a path to a TrueType font file

				// Calculate text width using user's name
				$fontSize = 32; // Adjust the font size
				$textWidth = imagettfbbox($fontSize, 0, $fontPath_bold, $agent_name);
				$textWidth = $textWidth[2] - $textWidth[0]; // Calculate the width of the text

				// Define the width of your image or template
				$imageWidth = imagesx($template);

				// Calculate the starting x-coordinate to position text from the right
				$xFromRightName = $imageWidth - $textWidth - 50; // 50 is a margin
				$xFromRightJobTitle = $imageWidth - $textWidth - 50; // 50 is a margin

				// Add user-specific content to the image
				imagettftext($template, 32, 0, $xFromRightName, 45, $fontColor, $fontPath_bold, $agent_name);
				imagettftext($template, 20, 0, $xFromRightJobTitle, 75, $fontColor, $fontPath_bold, $userJobTitle);
				// ... add other content
				imagettftext($template, 22, 0, 410, 396, $fontColor, $fontPath_bold, $email);
				imagettftext($template, 22, 0, 420, 495, $fontColor, $fontPath_bold, $contact);
				imagettftext($template, 22, 0, 90, 598, $white, $fontPath_bold, $address);

				$outputPath = MARKETING_IMG_DIRECTORY . '/' . 'my_visiting_card.png';
				imagepng($template, $outputPath);

				// Clean up
				imagedestroy($template);
			} else {
				$agent_name = '';
				$userJobTitle = '';
				$email = '';
				$contact = '';
				$address = '';
			}
			?>
			<!-- visiting card -->
			<!--start page wrapper -->
			<!-- content -->
			<div class="page-wrapper">
				<div class="page-content">
					<div class="row ">
						<!-- visint card preview -->
						<div class="col-6">
							<div class="card border-top border-0 border-4 border-white">
								<div class="card-body p-5">
									<div class="row">
										<div class="col-md-12 mb-3">
											<div class="row px-2">
												<h5 class="mt-3 text-white">Preview</h5>
												<hr>
												<div class="col mb-3">
													<img src="../../data/marketing/my_visiting_card.png?v=<?php echo time(); ?>" class="w-100">
													<a href="../../data/marketing/my_visiting_card.png" class="btn btn-warning float-end mt-3" download="">Download</a>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Input form -->
						<div class="col-6">
							<div class="card border-top border-0 border-4 border-white">
								<div class="card-body p-5">
									<div class="row">
										<div class="col-md-12 mb-3">
											<form action="" method="POST" class="row px-2">
												<h5 class="mt-3 text-white">Order Details</h5>
												<hr>
												<div class="col-md-6 mb-3">
													<label for="fullname" class="form-label">Name</label>
													<input type="text" class="form-control" placeholder="Enter Name" name="fullname" value="<?php echo $agent_name; ?>" required>
												</div>

												<div class="col-md-6 mb-3">
													<label for="fullname" class="form-label">Deisgnation</label>
													<input type="text" class="form-control" placeholder="Enter Designation" name="designation" value="<?php echo $userJobTitle; ?>" required>
												</div>

												<div class="col-md-6 mb-3">
													<label for="fullname" class="form-label">E-mail</label>
													<input type="text" class="form-control" placeholder="Enter E-mail" name="email" value="<?php echo $email; ?>" required>
												</div>

												<div class="col-md-6 mb-3">
													<label for="fullname" class="form-label">Mobile</label>
													<input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" value="<?php echo $contact; ?>" required>
												</div>

												<div class="col-md-6 mb-3">
													<label for="fullname" class="form-label">Address</label>
													<textarea class="form-control" placeholder="Enter Address" name="address" required><?php echo $address; ?></textarea>
												</div>
												<div class="row">
													<div class="col mb-3">
														<button type="submit" name="submit" class="btn btn-light float-end px-3">Create</button>
													</div>
												</div>
											</form>
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
		<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
		<script>
			$(document).ready(function () {
				$('#Transaction-History').DataTable({
					lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
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
