<?php include("includes/session.php"); ?>
<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../configs/paths.php';
require_once DB_CONFIG_PATH;

$order_id = $_GET['order_id'];

$sql = "SELECT * FROM orders WHERE id = $order_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$service_id = $row['service_id'];

$sql_service = "SELECT `service_name` FROM service WHERE id = $service_id";
$result_service = mysqli_query($conn, $sql_service);
$row_service = mysqli_fetch_assoc($result_service);
$service_name = $row_service['service_name'];

$order_date = $row['order_date'];

$order_details_sql = "SELECT name,value FROM order_details WHERE order_id = $order_id";
$order_details_result = mysqli_query($conn, $order_details_sql);
$order_details_row = mysqli_fetch_all($order_details_result);

$order_details_data = array();
foreach ($order_details_row as $key => $value) {
    $order_details_data[$value[0]] = $value[1];
}
$order_details_data['customer_name'] = $row['customer_name'];
$order_details_data['customer_mobile'] = $row['customer_mobile'];
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
                <div class="row">
                    <!-- left -->
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="card border-top border-0 border-4 border-white">
                                    <div class="card-body p-5">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="row px-2">
                                                    <h5 class="mt-3 text-white">Order Details</h5>
                                                    <hr>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="fullname" class="form-label">Order ID</label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $order_id; ?>" disabled="">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="fullname" class="form-label">Order Date</label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $order_date; ?>" disabled="">
                                                    </div>

                                                    <div class="col-md-8 mb-3">
                                                        <label for="fullname" class="form-label">Service Name</label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $service_name; ?>" disabled="">
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="fullname" class="form-label">Status</label>

                                                        <select class="form-select mb-3"
                                                            aria-label="Default select example">
                                                            <option value="1">Payment Pending</option>
                                                            <option value="2">Payment Approved</option>
                                                            <option value="3">Order Pending</option>
                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="card border-top border-0 border-4 border-white">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="row px-2">
                                                <h5 class="mt-3 text-white">
                                                    Personal Details </h5>
                                                <hr>

                                                <div class="col-md-6 mb-3">
                                                    <label for="fullname" class="form-label">
                                                        Customer's Name </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['customer_name']; ?>"
                                                        id="customer_name" disabled="">
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label for="fullname" class="form-label">
                                                        Mobile Number </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['customer_mobile']; ?>"
                                                        id="customer_mobile" disabled="">
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label for="fullname" class="form-label">
                                                        WhatsApp </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['whatsapp']; ?>"
                                                        id="whatsapp" disabled="">
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label for="fullname" class="form-label">
                                                        Email </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['email']; ?>" id="email"
                                                        disabled="">
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label for="fullname" class="form-label">
                                                        Father's Name </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['father_name']; ?>"
                                                        id="father_name" disabled="">
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label for="fullname" class="form-label">
                                                        Mother's Name </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['mother_name']; ?>"
                                                        id="mother_name" disabled="">
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label for="fullname" class="form-label">
                                                        Date </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['customer_dob']; ?>"
                                                        id="customer_dob" disabled="">
                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card border-top border-0 border-4 border-white">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="row px-2">
                                                <h5 class="mt-3 text-white">
                                                    Bank Information
                                                </h5>
                                                <hr>

                                                <div class="col-md-6 mb-3">
                                                    <label for="bank_name" class="form-label">
                                                        Bank's Name
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['bank_name']; ?>"
                                                        id="bank_name" placeholder="Enter Bank's Name">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="account_holder_name" class="form-label">
                                                        Account Holder's Name
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['account_holder_name']; ?>"
                                                        id="account_holder_name"
                                                        placeholder="Enter Account Holder's Name">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="bank_account_number" class="form-label">
                                                        Account Number
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['bank_account_number']; ?>"
                                                        id="bank_account_number" placeholder="Enter Account Number">
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="ifsc" class="form-label">
                                                        IFSC
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $order_details_data['ifsc']; ?>" id="ifsc"
                                                        placeholder="Enter IFSC Code">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="card border-top border-0 border-4 border-white">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="row px-2">
                                                <h5 class="mt-3 text-white">
                                                    Documents
                                                </h5>
                                                <hr>
                                                <?php if (isset($order_details_data['registry_paper'])) { ?>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="registry_paper" class="form-label">
                                                            Registry Paper
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['registry_paper']; ?>"
                                                            class="card-img-top" alt="Registry Paper">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['registry_paper']; ?>"
                                                            class="btn btn-warning float-end mt-3" download="">Download</a>
                                                    </div>
                                                <?php } ?>

                                                <?php if (isset($order_details_data['khatauni'])) { ?>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="khatauni" class="form-label">
                                                            Khatauni
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['khatauni']; ?>"
                                                            class="card-img-top" alt="Khatauni">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['khatauni']; ?>"
                                                            class="btn btn-warning float-end mt-3" download="">Download</a>
                                                    </div>
                                                <?php } ?>

                                                <?php if (isset($order_details_data['nivas_praman_patra'])) { ?>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="nivaas_praman_patra" class="form-label">
                                                            Nivaas Praman Patra
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['nivas_praman_patra']; ?>"
                                                            class="card-img-top" alt="Nivaas Praman Patra">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['nivas_praman_patra']; ?>"
                                                            class="btn btn-warning float-end mt-3" download="">Download</a>
                                                    </div>
                                                <?php } ?>

                                                <?php if (isset($order_details_data['zameen_adhar_front'])) { ?>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="zameen_adhar_front" class="form-label">
                                                            Zameen Maalik ka Aadhaar (front)
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['zameen_adhar_front']; ?>"
                                                            class="card-img-top" alt="Zameen Maalik ka Aadhaar (front)">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['zameen_adhar_front']; ?>"
                                                            class="btn btn-warning float-end mt-3" download="">Download</a>
                                                    </div>
                                                <?php } ?>

                                                <?php if (isset($order_details_data['zameen_adhar_back'])) { ?>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="zameen_adhar_back" class="form-label">
                                                            Zameen Maalik ka Aadhaar (back)
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['zameen_adhar_back']; ?>"
                                                            class="card-img-top" alt="Zameen Maalik ka Aadhaar (back)">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['zameen_adhar_back']; ?>"
                                                            class="btn btn-warning float-end mt-3" download="">Download</a>
                                                    </div>
                                                <?php } ?>

                                                <?php if (isset($order_details_data['zameen_pan'])) { ?>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="zameen_pan" class="form-label">
                                                            Zameen Maalik ka PAN Card
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['zameen_pan']; ?>"
                                                            class="card-img-top" alt="Zameen Maalik ka PAN Card">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['zameen_pan']; ?>"
                                                            class="btn btn-warning float-end mt-3" download="">Download</a>
                                                    </div>
                                                <?php } ?>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- right -->
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="card border-top border-0 border-4 border-white">
                                    <div class="card-body p-5">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="row px-2">
                                                    <h5 class="mt-3 text-white">
                                                        Gauranter Details </h5>
                                                    <hr>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="fullname" class="form-label">
                                                            Gauranter Name </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $order_details_data['gauranter_name']; ?>"
                                                            id="gauranter_name" disabled="">
                                                    </div>


                                                    <div class="col-md-6 mb-3">
                                                        <label for="fullname" class="form-label">
                                                            Gauranter Number </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $order_details_data['gauranter_mobile']; ?>"
                                                            id="gauranter_mobile" disabled="">
                                                    </div>


                                                    <div class="col-md-6 mb-3">
                                                        <label for="fullname" class="form-label">
                                                            Relation </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $order_details_data['gauratner_relation']; ?>"
                                                            id="gauratner_relation" disabled="">
                                                    </div>


                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="card border-top border-0 border-4 border-white">
                                    <div class="card-body p-5">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="row px-2">
                                                    <h5 class="mt-3 text-white">
                                                        Income Details
                                                    </h5>
                                                    <hr>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="company_name" class="form-label">
                                                            Company's Name
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $order_details_data['company_name']; ?>"
                                                            id="company_name" placeholder="Enter Company's Name">
                                                    </div>

                                                    <?php if (isset($order_details_data['salary']) || isset($order_details_data['slary'])) { ?>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="salary" class="form-label">
                                                                Salary
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo $order_details_data['salary']; ?>"
                                                                id="salary" placeholder="Enter Salary">
                                                        </div>
                                                    <?php } ?>

                                                    <?php if (isset($order_details_data['income'])) { ?>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="income" class="form-label">
                                                                Income
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                value="<?php echo $order_details_data['income']; ?>"
                                                                id="income" placeholder="Enter Income">
                                                        </div>
                                                    <?php } ?>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="loan_amount" class="form-label">
                                                            Loan Amount
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="<?php echo $order_details_data['loan_amount']; ?>"
                                                            id="loan_amount" placeholder="Enter Loan Amount">
                                                    </div>

                                                    <!-- Use PHP to set the src attribute for each image -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="aadhar_front" class="form-label">
                                                            Aadhaar Front
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['aadhar_front']; ?>"
                                                            class="card-img-top" alt="...">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['aadhar_front']; ?>"
                                                            class="btn btn-warning float-end mt-3"
                                                            download="">Download</a>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="aadhaar_back" class="form-label">
                                                            Aadhaar Back
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['aadhaar_back']; ?>"
                                                            class="card-img-top" alt="...">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['aadhaar_back']; ?>"
                                                            class="btn btn-warning float-end mt-3"
                                                            download="">Download</a>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="pan_card" class="form-label">
                                                            Pan Card
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['pan_card']; ?>"
                                                            class="card-img-top" alt="...">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['pan_card']; ?>"
                                                            class="btn btn-warning float-end mt-3"
                                                            download="">Download</a>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label for="bank_statement" class="form-label">
                                                            Bank Statement
                                                        </label>
                                                        <img src="../../data/order_images/<?php echo $order_details_data['bank_statement']; ?>"
                                                            class="card-img-top" alt="...">
                                                        <a href="../../data/order_images/<?php echo $order_details_data['bank_statement']; ?>"
                                                            class="btn btn-warning float-end mt-3"
                                                            download="">Download</a>
                                                    </div>

                                                    <?php if (isset($order_details_data['form16'])) { ?>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="form16" class="form-label">
                                                                Form 16
                                                            </label>
                                                            <img src="../../data/order_images/<?php echo $order_details_data['form16']; ?>"
                                                                class="card-img-top" alt="...">
                                                            <a href="../../data/order_images/<?php echo $order_details_data['form16']; ?>"
                                                                class="btn btn-warning float-end mt-3"
                                                                download="">Download</a>
                                                        </div>
                                                    <?php } ?>

                                                    <?php if (isset($order_details_data['voter_id'])) { ?>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="voter_id" class="form-label">
                                                                Voter Id
                                                            </label>
                                                            <img src="../../data/order_images/<?php echo $order_details_data['voter_id']; ?>"
                                                                class="card-img-top" alt="...">
                                                            <a href="../../data/order_images/<?php echo $order_details_data['voter_id']; ?>"
                                                                class="btn btn-warning float-end mt-3"
                                                                download="">Download</a>
                                                        </div>
                                                    <?php } ?>

                                                    <?php if (isset($order_details_data['itr'])) { ?>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="itr" class="form-label">
                                                                ITR (3 Years)
                                                            </label>
                                                            <img src="../../data/order_images/<?php echo $order_details_data['itr']; ?>"
                                                                class="card-img-top" alt="ITR (3 Years)">
                                                            <a href="../../data/order_images/<?php echo $order_details_data['itr']; ?>"
                                                                class="btn btn-warning float-end mt-3"
                                                                download="">Download</a>
                                                        </div>
                                                    <?php } ?>

                                                    <?php if (isset($order_details_data['gst'])) { ?>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="gst" class="form-label">
                                                                GST (2 Years)
                                                            </label>
                                                            <img src="../../data/order_images/<?php echo $order_details_data['gst']; ?>"
                                                                class="card-img-top" alt="GST (2 Years)">
                                                            <a href="../../data/order_images/<?php echo $order_details_data['gst']; ?>"
                                                                class="btn btn-warning float-end mt-3"
                                                                download="">Download</a>
                                                        </div>
                                                    <?php } ?>

                                                    <?php if (isset($order_details_data['msme_document'])) { ?>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="gst" class="form-label">
                                                                MSME Document
                                                            </label>
                                                            <img src="../../data/order_images/<?php echo $order_details_data['msme_document']; ?>"
                                                                class="card-img-top" alt="GST (2 Years)">
                                                            <a href="../../data/order_images/<?php echo $order_details_data['msme_document']; ?>"
                                                                class="btn btn-warning float-end mt-3"
                                                                download="">Download</a>
                                                        </div>
                                                    <?php } ?>

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