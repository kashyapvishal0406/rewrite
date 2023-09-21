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

				$user_id = $_POST['user_id'];
				$agent_name = $_POST['fullname'];
				$userJobTitle = $_POST['designation'];
				$email = 'Email Id : support@techtionsolution.com';
				$email2 = 'Email Id : director@techtionsolution.com';
				$website = 'Website : https://techtionsolution.com';
				$contact = $_POST['mobile'];
				$address = $_POST['address'];
				$dob = $_POST['dob'];

				echo $agent_name;

				// Handle uploaded profile picture
				$profilePicture_name = $_FILES['profilePicture']['name'];
				$profilePicture_tmp = $_FILES['profilePicture']['tmp_name'];
				$profilePicture_path = '../../data/temporary_storage/' . $profilePicture_name;

				if (move_uploaded_file($profilePicture_tmp, $profilePicture_path)) {

					// Load the blank template image
					$template = imagecreatefrompng('assets/images/marketing_templates/id_card.png');


					$fontColor = imagecolorallocate($template, 0, 0, 0);
					$white = imagecolorallocate($template, 255, 255, 255);
					$fontPath_bold = 'assets/fonts/Poppins-Bold.ttf'; // Provide a path to a TrueType font file
					$fontPath_regular = 'assets/fonts/Poppins-Medium.ttf'; // Provide a path to a TrueType font file

					$fileExtension = strtolower(pathinfo($profilePicture_path, PATHINFO_EXTENSION));

					switch ($fileExtension) {
						case 'png':
							$profilePicture = imagecreatefrompng($profilePicture_path);
							break;
						case 'jpeg':
						case 'jpg':
							$profilePicture = imagecreatefromjpeg($profilePicture_path);
							break;
						case 'webp':
							$profilePicture = imagecreatefromwebp($profilePicture_path);
							break;
						// Add more cases for other supported formats as needed
						default:
							// Handle unsupported image formats or errors here
							// For example, you can log an error or provide a default image
							break;
					}



					// ... other user data

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
					imagettftext($template, 19, 0, 220, 465, $fontColor, $fontPath_regular, $agent_name);
					// imagettftext($template, 19, 0, 220, 465, $fontColor, $fontPath_regular, $agent_name);
					imagettftext($template, 14, 0, 220, 526, $fontColor, $fontPath_regular, $user_id);
					imagettftext($template, 14, 0, 220, 494, $fontColor, $fontPath_regular, $userJobTitle);
					imagettftext($template, 14, 0, 220, 557, $fontColor, $fontPath_regular, $dob);
					imagettftext($template, 14, 0, 220, 591, $fontColor, $fontPath_regular, $contact);
					imagettftext($template, 14, 0, 220, 620, $fontColor, $fontPath_regular, $address);


					$profileWidth = imagesx($profilePicture);
					$profileHeight = imagesy($profilePicture);

					// Calculate the position to overlay the profile picture
					$profileX = 208; // Adjust as needed
					$profileY = 194; // Adjust as needed

					// Calculate the size you want for the resized profile picture
					$newProfileWidth = 174; // Adjust as needed
					$newProfileHeight = 228; // Adjust as needed

					// Create a new image to hold the resized profile picture
					$resizedProfile = imagecreatetruecolor($newProfileWidth, $newProfileHeight);

					// Resize and copy the profile picture onto the new image
					imagecopyresampled($resizedProfile, $profilePicture, 0, 0, 0, 0, $newProfileWidth, $newProfileHeight, $profileWidth, $profileHeight);

					// Overlay the resized profile picture on the template
					imagecopy($template, $resizedProfile, $profileX, $profileY, 0, 0, $newProfileWidth, $newProfileHeight);

					// $outputPath = 'assets/images' . '/'.$agent_id.'_id_card.png';
					$outputPath = MARKETING_IMG_DIRECTORY . '/' . 'my_id_card.png';


					imagepng($template, $outputPath);

					// Clean up
					imagedestroy($template);
				}


			} else {
				echo "failed to create";
				$user_id = '';
				$agent_name = '';
				$userJobTitle = '';
				$email = '';
				$contact = '';
				$address = '';
				$dob = '';
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
													<img src="../../data/marketing/my_id_card.png?v=<?php echo time(); ?>" class="w-100">
													<a href="../../data/marketing/my_id_card.png" class="btn btn-warning float-end mt-3" download="">Download</a>
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
											<form action="" method="POST" class="row px-2" enctype="multipart/form-data">
												<h5 class="mt-3 text-white">Order Details</h5>
												<hr>
												<div class="col-md-6 mb-3">
													<label for="fullname" class="form-label">User Id</label>
													<input type="text" class="form-control" placeholder="Enter ID" name="user_id" value="<?php echo $user_id; ?>" required>
												</div>
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
													<label for="fullname" class="form-label">Date Of Birth</label>
													<input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>" required>
												</div>
												<div class="col-md-6 mb-3">
													<label for="profilePicture" class="form-label">Profile Picture</label>
													<input type="file" class="form-control" id="profilePicture" name="profilePicture" required accept="image/*">
												</div>
												<div class="col-12 mb-3">
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
