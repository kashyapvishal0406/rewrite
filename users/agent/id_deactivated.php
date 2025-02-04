<?php
include("includes/session.php");
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;
require_once "includes/agent_details.php";
include('includes/service_fields.php');

// $order_id = $_GET['order_id'];
// $service_name = $_GET['service_name'];
// echo $service_id;

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



        <title>Order</title>
    </head>

    <body class="bg-theme bg-theme2">
        <!--wrapper-->
        <div class="wrapper">
            <!--start header wrapper-->
            <div class="header-wrapper">
                <!--start header -->
                <?php
                include('includes/navbar.php');
                ?>
                <!--end header -->
                <!-- Primary Menu -->
                <?php
                //  include('includes/menu.php'); 
                ?>

                <!-- Primary Menu -->
            </div>
            <!--end header wrapper-->
            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->


                    <div class="container-fluid">
                        <div class="main-body">
                            <div class="row">

                                <div class="col">
                                    <div class="card border-top border-0 border-4 border-white">
                                        <div class="card-body p-5">
                                            <div class="card-title">
                                                <h3 class="mb-0 text-danger text-center fw-bold">ID Deactivated</h3>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4 class="mb-3 text-warning fw-bold">
                                                        Your Id has been deactivated because you didn't pay your last EMI. Please pay your EMi and upload screenshot below to reactivate your id.
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card border-top border-0 border-4 border-white">
                                        <div class="card-body p-5">
                                            
                                            <div class="row">

                                                <div class="col-3">
                                                    <div class="card mb-5 mb-lg-0">
                                                        <div class="card-header py-3 bg-success">
                                                            <h5 class="card-title text-white text-uppercase text-center">UPI
                                                            </h5>
                                                            <h6 class="card-price text-white text-center"></h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="list-group list-group-flush">
                                                                <img src="assets/images/qr.png" class="">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="card mb-5 mb-lg-0">
                                                        <div class="card-header py-3 bg-danger">
                                                            <h5 class="card-title text-white text-uppercase text-center">
                                                                Bank Details</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item bg-transparent">Recipient Name :
                                                                    Techtions Solution PrivateLimited</li>
                                                                <li class="list-group-item bg-transparent">Account Number :
                                                                    42074401119</li>
                                                                <li class="list-group-item bg-transparent">IFSC Code :
                                                                    SBIN0003347</li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                    <div class="card mt-3 mb-5 mb-lg-0">
                                                        <div class="card-header py-3 bg-warning">
                                                            <h5 class="card-title text-white text-uppercase text-center">How
                                                                to Make Payment</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <p>You can make payment Via UPI or Direct Bank transfer.</p>
                                                            <p>Once you are done with UPI or Bank Transfer, Please upload
                                                                the screenshot below</p>
                                                            <p>We'll notify you once we verify the payment from our backend.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-4 image-upload-wrapper mb-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="document_name" class="form-label h4 mb-3">Upload
                                                                Screenshot Of Payment</label>
                                                            <input type="file" class="imageInput form-control service_docs_field" id="payment_proof">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img class="imagePreview " style="width:100%;" src="../../data/user_images/19_profile_img.png" alt="Image Preview">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            <form class="row">



                                            </form>
                                            <div class="col-12">
                                                <button class="btn btn-primary mt-3 float-end btn-lg " id="submit">Submit</button>
                                            </div>

                                            <!-- Add more rows and columns as needed -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Additional content below the two columns -->
                                                </div>
                                            </div>




                                            <div class="col-12">
                                                <a href="buy_page_pay.php?service_id="></a>
                                                <!-- fieldObject -->
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="assets/js/script.js"></script>
        <script type="text/javascript" src="https://control.msg91.com/app/assets/otp-provider/otp-provider.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(function () {
                $("#submit").on("click", function () {


                    Swal.fire({
                        icon: "success",
                        title: "Deactivated",
                        text: "Your id deactivated",

                    });
                }
                )
            },
            )

        </script>

    </body>

</html>