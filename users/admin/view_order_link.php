<?php include("includes/session.php"); ?>
<?php

require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;

$order_id = $_GET['order_id'];

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

    <style>
        .border-top {
            border-top: 6px solid rgb(11 205 176) !important;
        }

        .border-top-primary {
            border-top: 6px solid rgb(11 125 205) !important;
        }
    </style>

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

        <div class="page-wrapper">
            <div class="page-content">
                <!-- content goes here -->
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

                $sql_details = "SELECT * FROM order_details WHERE order_id = '$order_id'";
                ;
                $result_details = mysqli_query($conn, $sql_details);
                $link_order_object = array();
                while ($row_details = mysqli_fetch_assoc($result_details)) {
                    $column_name = $row_details['name'];
                    $column_value = $row_details['value'];
                    $link_order_object[$column_name] = $column_value;
                }

                ?>

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
                                                <input type="text" class="form-control" value="<?php echo $order_id; ?>"
                                                    disabled>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="fullname" class="form-label">Order Date</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $order_date; ?>" disabled>
                                            </div>

                                            <div class="col-md-8 mb-3">
                                                <label for="fullname" class="form-label">Service Name</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $service_name; ?>" disabled>
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
                                                    <img src="../../data/order_images/<?php echo $payment_image; ?>"
                                                        class="card-img-top" alt="...">
                                                    <a href="../../data/order_images/<?php echo $payment_image; ?>"
                                                        class="btn btn-warning float-end mt-3" download>Download</a>
                                                </div>
                                            <?php } ?>

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
                                                <input type="text" class="form-control"
                                                    value="<?php echo $customer_name; ?>" disabled>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="fullname" class="form-label">Customer's Mobile</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $customer_mobile; ?>" disabled>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="fullname" class="form-label">Customer's WhatsApp</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $link_order_object['whatsapp']; ?>" disabled>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="fullname" class="form-label">Customer's Email</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $link_order_object['email']; ?>" disabled>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="fullname" class="form-label">Customer's DOB</label>
                                                <input type="date" class="form-control"
                                                    value="<?php echo $link_order_object['dob']; ?>" disabled>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="fullname" class="form-label">Vendor Name</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $link_order_object['vendor_name']; ?>" disabled>
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