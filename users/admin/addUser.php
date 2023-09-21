<?php include("includes/session.php"); ?>

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

        <!--start page wrapper -->

        <!-- content -->
        <div class="page-wrapper">

            <div class="col">

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
                                <label for="name" class="form-label">Full Name <span
                                        class="text-danger">(Required)</span></label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxs-user"></i></span>
                                    <input type="text" class="form-control border-start-0" id="name"
                                        placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="shop_name" class="form-label">Shop Name</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bx-store"></i></span>
                                    <input type="text" class="form-control border-start-0" id="shop_name"
                                        placeholder="Enter Shop Name">
                                </div>
                            </div>

                            <span class="image-upload-wrapper">
                                <div class="col-md-6">
                                    <label for="profile_img" class="form-label">Profile Picture <span
                                            class="text-danger">Required</span></label>
                                    <div class="input-group"> <span class="input-group-text"><i
                                                class="bx bxs-id-card"></i></span>
                                        <input type="file" class="imageInput form-control border-start-0"
                                            id="profile_img" accept="image/*">

                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <img class="imagePreview w-50" src="" alt="Image Preview">
                                </div>
                            </span>

                            <div class="card-title d-flex align-items-center pt-2">
                                <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                                </div>
                                <h5 class="mb-0 text-white">Contact Details</h5>
                            </div>
                            <hr>
                            <div class="col-md-6">
                                <label for="phone_number" class="form-label">Phone Number<span class="text-danger">
                                        (Required)</span></label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxs-phone"></i></span>
                                    <input type="text" class="form-control border-start-0" id="phone_number"
                                        placeholder="Phone No">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="whatsapp" class="form-label">WhatsApp</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxl-whatsapp"></i></span>
                                    <input type="text" class="form-control border-start-0" id="whatsapp"
                                        placeholder="WhatsApp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxs-envelope"></i></span>
                                    <input type="text" class="form-control border-start-0" id="email"
                                        placeholder="Email Address">
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" placeholder="Enter Address"
                                    rows="3"></textarea>
                            </div>


                            <div class="col-md-6">
                                <label for="state" class="form-label">State</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxs-buildings"></i></span>

                                    <select class="form-select" aria-label="Default select example" id="state">
                                        <option value="0">Select State</option>
                                        <option value="1">Andhra Pradesh</option>
                                        <option value="2">Arunachal Pradesh</option>
                                        <option value="3">Assam</option>
                                        <option value="4">Bihar</option>
                                        <option value="5">Chhattisgarh</option>
                                        <option value="6">Goa</option>
                                        <option value="7">Gujarat</option>
                                        <option value="8">Haryana</option>
                                        <option value="9">Himachal Pradesh</option>
                                        <option value="10">Jharkhand</option>
                                        <option value="11">Karnataka</option>
                                        <option value="12">Kerala</option>
                                        <option value="13">Madhya Pradesh</option>
                                        <option value="14">Maharashtra</option>
                                        <option value="15">Manipur</option>
                                        <option value="16">Meghalaya</option>
                                        <option value="17">Mizoram</option>
                                        <option value="18">Nagaland</option>
                                        <option value="19">Odisha</option>
                                        <option value="20">Punjab</option>
                                        <option value="21">Rajasthan</option>
                                        <option value="22">Sikkim</option>
                                        <option value="23">Tamil Nadu</option>
                                        <option value="24">Telangana</option>
                                        <option value="25">Tripura</option>
                                        <option value="26" selected="">Uttar Pradesh</option>
                                        <option value="27">Uttarakhand</option>
                                        <option value="28">West Bengal</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="city" class="form-label">City</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxs-city"></i></span>
                                    <input type="text" class="form-control border-start-0" id="city" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="pincode" class="form-label">Pincode</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bx-buildings"></i></span>
                                    <input type="text" class="form-control border-start-0" id="pincode"
                                        placeholder="Pincode">
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
                                            <label for="aadhaar_number" class="form-label">Aadhaar
                                                Number</label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class="bx bxs-id-card"></i></span>
                                                <input type="text" class="form-control border-start-0"
                                                    id="aadhaar_number" placeholder="Aadhaar Number">
                                            </div>
                                        </div>
                                        <span class="image-upload-wrapper">
                                            <div class="col-12 mb-3">
                                                <label for="aadhaar_number" class="form-label">Upload Aadhaar
                                                    Front</label>
                                                <span>
                                                    <div class="input-group"> <span class="input-group-text"><i
                                                                class="bx bxs-id-card"></i></span>
                                                        <input type="file"
                                                            class="imageInput form-control border-start-0"
                                                            id="aadhaar_front_img" accept="image/*">

                                                    </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img class="imagePreview mt-3" style="width:100%" ; src=""
                                                    alt="Image Preview">
                                            </div>
                                        </span>
                                        <span class="image-upload-wrapper">
                                            <div class="col-12 mb-3">
                                                <label for="aadhaar_number" class="form-label">Upload Aadhaar
                                                    Back</label>
                                                <span>
                                                    <div class="input-group"> <span class="input-group-text"><i
                                                                class="bx bxs-id-card"></i></span>
                                                        <input type="file"
                                                            class="imageInput form-control border-start-0"
                                                            id="aadhaar_back_img" accept="image/*">

                                                    </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <img class="imagePreview mt-3" style="width:100%" ; src=""
                                                    alt="Image Preview">
                                            </div>
                                        </span>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="pan_number" class="form-label">Pan Number</label>
                                            <div class="input-group"> <span class="input-group-text"><i
                                                        class="bx bx-id-card"></i></span>
                                                <input type="text" class="form-control border-start-0" id="pan_number"
                                                    placeholder="Pan Number">
                                            </div>
                                        </div>
                                        <span class="image-upload-wrapper">
                                            <div class="col-12 mb-3 mb-3">
                                                <label for="aadhaar_number" class="form-label">Upload Pan
                                                    Card</label>
                                                <span>
                                                    <div class="input-group"> <span class="input-group-text"><i
                                                                class="bx bxs-id-card"></i></span>
                                                        <input type="file"
                                                            class="imageInput form-control border-start-0" id="pan_img"
                                                            accept="image/*">

                                                    </div>
                                            </div>
                                            <div class="col-12">
                                                <img class="imagePreview mt-3" style="width:100%" ; src=""
                                                    alt="Image Preview">
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
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bx-list-check"></i></span>
                                    <input type="text" class="form-control border-start-0" id="benificiary_name"
                                        placeholder="Benificiary Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="benificiary_account_number" class="form-label">Benificiary Account
                                    Number</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bx-list-check"></i></span>
                                    <input type="text" class="form-control border-start-0"
                                        id="benificiary_account_number" placeholder="Benificiary Account Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="bank_name" class="form-label">Bank Name</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxs-bank"></i></span>
                                    <input type="text" class="form-control border-start-0" id="bank_name"
                                        placeholder="Bank Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="ifsc" class="form-label">IFSC Code</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bx-list-check"></i></span>
                                    <input type="text" class="form-control border-start-0" id="ifsc"
                                        placeholder="IFSC Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="pass" class="form-label">Password <span
                                        class="text-danger">(Required)</span></label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxs-user"></i></span>
                                    <input type="text" class="form-control border-start-0" id="pass"
                                        placeholder="Enter Your Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label">DOB</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="bx bxs-user"></i></span>
                                    <input type="date" class="form-control border-start-0" id="dob">


                                </div>
                            </div>

                        </form>
                        <div class="col-12">
                            <button id="save" class="btn btn-light px-5 float-end mt-3">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
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
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/script.js?v=2"></script>
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
    <script>
        new PerfectScrollbar('.product-list');
        new PerfectScrollbar('.customers-list');



    </script>


</body>

</html>