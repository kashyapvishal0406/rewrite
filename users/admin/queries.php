<?php include("includes/session.php"); ?>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$hostname = 'localhost'; // MySQL server hostname (usually 'localhost')
$username = 'techtions_Mysql_User'; // MySQL username
$password = 'YqpKWTzZR(447r]i'; // MySQL password
$database = 'finance_management_system'; // MySQL database name

// Create a new MySQLi connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

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

        <div class="page-wrapper">
            <div class="page-content">


                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Query Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM leads";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $lead_id = $row['id'];
                                    $customer_name = $row['name'];
                                    $customer_mobile = $row['mobile'];
                                    $customer_email = $row['email'];
                                    $customer_dob = $row['dob'];
                                    $lead_date = $row['lead_date'];

                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $customer_name; ?>
                                        </td>
                                        <td>
                                            <?php echo $customer_mobile; ?>
                                        </td>
                                        <td>
                                            <?php echo $customer_email; ?>
                                        </td>
                                        <td>
                                            <?php echo $customer_dob; ?>
                                        </td>
                                        <td>
                                            <?php echo $lead_date; ?>
                                        </td>

                                        <td><button class="btn btn-light lead_done"
                                                data-lead-id="<?php echo $lead_id; ?>">Done</button>
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
    <script src="assets/js/script.js"></script>
    <script>
        new PerfectScrollbar('.product-list');
        new PerfectScrollbar('.customers-list');
    </script>
</body>

</html>