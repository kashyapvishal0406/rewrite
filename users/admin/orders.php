<?php include("includes/session.php"); ?>
<?php
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

        <!--start page wrapper -->
        <!-- content -->
        <!-- php code -->









        <div class="page-wrapper">
            <div class="page-content">
                <?php

                $sql = "SELECT * FROM `orders`";
                $res = mysqli_query($conn, $sql);


                if (!$res) {
                    echo "Error" . mysqli_connect_error();
                }

                ?>


                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Customer's Name</th>
                                    <th>Customer's mobile</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM orders";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $order_id = $row['id'];
                                    $customer_name = $row['customer_name'];
                                    $customer_mobile = $row['customer_mobile'];
                                    $order_date = $row['order_date'];
                                    $order_type = $row['order_type'];
                                    switch ($order_type) {
                                        case 1:
                                            $href_link = 'view_order.php';
                                            break;
                                        case 2:
                                            $href_link = 'view_order_loan.php';
                                            break;
                                        case 3:
                                            $href_link = 'view_order_link.php';
                                            break;

                                    }

                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $order_id; ?>
                                        </td>
                                        <td>
                                            <?php echo $customer_name; ?>
                                        </td>
                                        <td>
                                            <?php echo $customer_mobile; ?>
                                        </td>
                                        <td>
                                            <?php echo $order_date; ?>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center text-white text-danger"> <i
                                                    class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                                <span>Pending</span>
                                            </div>
                                        </td>
                                        <td><a href="<?php echo $href_link; ?>?order_id=<?php echo $order_id; ?>"
                                                class="btn btn-light">View</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
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