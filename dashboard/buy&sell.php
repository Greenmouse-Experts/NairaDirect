<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/apple-touch-icon.html" rel="apple-touch-icon">
    <link href="assets/img/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
    <link href="assets/img/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
    <link href="assets/img/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">
    <link rel="stylesheet" href="assets/css/main.css" id="stylesheet">
    <link rel="stylesheet" href="assets/css/dashstyle.css" id="stylesheet">
    <link rel="shortcut icon" href="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703153357/NairaDirect-Images/Group_48097704_2_qfdtgb.png" type="image/x-icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Buy & Sell</title>
</head>
<!-- PHP to set the theme class dynamically -->

<?php include('../dashboard/include/layout/header.php'); ?>

<body>
    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h5 class="text-dark">Buy & Sell</h5>
                    </div>
                    <div class="right-part">
                        <button class="btn btn-primary rounded-1 ff-heading fs-14 py-1" data-bs-toggle="modal" data-bs-target="#newcard"><i class="bi bi-bank me-2"></i>Today's Price List</button>
                    </div>
                </div>
                <div class="col-xxl-12 col-md-12">
                    <div class="card card-email-inbox border-0">
                        <div class="card-header bg-transparent border-0 d-flex align-items-center justify-content-between p-5 pb-3 gap-3 flex-wrap">
                            <div class="d-flex align-items-center gap-5 border-bottom border-1 border-light-200">
                                <ul class="nav nav-tabs nav-classic-icon inbox-tab" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link fontting active text-dark fs-11" href="#tab-important" data-bs-toggle="tab" role="tab"><i class="bi bi-cash-stack me-3"></i> Buy E-Currency</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fontting fs-11 text-dark" href="#tab-socials" data-bs-toggle="tab" role="tab"><i class="bi bi-cash-coin me-3"></i> Sell E-Currency</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fontting fs-11 text-dark" href="#tab-promotion" data-bs-toggle="tab" role="tab"><i class="bi bi-card-checklist me-3"></i> Today's Price List</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Tab Content First  -->
                                <div class="tab-pane fade show active" id="tab-important" role="tabpanel">
                                    <div class="card-body p-0">
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <h5 class="text-dark mb-4">Buy 1 BTC @ <a href="#">₦52,925,761.44</a></h5>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Currency</label>
                                                        <select class="select" name="" id="" required>
                                                            <option value="">Please select</option>
                                                            <option data-value="Bitcoin" data-display="Bitcoin">Bitcoin</option>
                                                            <option data-value="Perfect Money">Perfect Money</option>
                                                            <option data-value="Ethereum">Ethereum</option>
                                                            <option data-value="USDT TRC20">USDT TRC20</option>
                                                            <option data-value="Bitcoin Cash">Bitcoin Cash</option>
                                                        </select>
                                                    </div>
                                                    <p class="mb-3 text-dark">
                                                        <i class="bi bi-dot text-bg-danger me-1"></i> <a href="setting.php"> Click here</a> to verify your identity to be able to buy
                                                    </p>
                                                    <p class="text-dark">
                                                        <i class="bi bi-dot text-bg-danger me-1"></i>After verification, you can buy instantly.
                                                    </p>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn mt-5 btn-primary w-10 text-white rounded-1 lh-15 ff-heading">Buy Now</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Tab Content Second  -->
                                <div class="tab-pane fade" id="tab-socials" role="tabpanel">
                                    <div class="card-body p-0">
                                        <p class="text-dark fw-bold mb-3">
                                            Deposit Method
                                        </p>
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Verify Identity To Deposit Money</label>
                                                        <select class="select" name="" id="" required>
                                                            <option value="">Please select</option>
                                                            <option data-value="Verify your identity to deposit money">Verify your identity to deposit money</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <p class="mb-3 text-gray">
                                                    <i class="bi bi-dot text-bg-danger me-1"></i> <a href="setting.php"> Click here</a> to verify your identity to be able to deposit Naira.
                                                </p>
                                                <p class="mb-4 text-gray">
                                                    <i class="bi bi-dot text-bg-danger me-1"></i> After verification, you can transfer money to Naira Direct bank account number and get funds in your naira wallet instantly.
                                                </p>
                                            </div>
                                            <button type="submit" class="btn mt-3 btn-primary w-10 text-white rounded-1 lh-15 ff-heading">Update Bank</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Tab Content Third  -->
                                <div class="tab-pane fade" id="tab-promotion" role="tabpanel">
                                    <div class="card-body p-0">
                                        <div class="table-responsive table-hiring">
                                            <table id="table-1" class="display text-center">
                                                <thead class="alll">
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Amount (NGN)</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="alllk">
                                                    <tr>
                                                        <td>
                                                        2:00pm
                                                        </td>
                                                        <td>
                                                        Freelancer
                                                        </td>
                                                        <td>
                                                        Kleon Studio
                                                        </td>
                                                        <td>June 1, 2020</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu p-0">
                                                                    <a class="dropdown-item" href="#">View</a>
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item text-danger" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Modal: New Card -->
    <div class="modal fade" id="newcard" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card border-0 m-0">
                    <div class="card-header bg-transparent border-0 p-5 pb-0">
                        <h4 class="firstly">Add Bank</h4>
                        <p class="text-gray">Kindly add bank details below</p>
                    </div>

                    <div class="card-body pt-3">
                        <form class="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Account Name</label>
                                        <input type="text" class="form-control" name="" value="Hamzat ..." placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Account Number</label>
                                        <input type="tel" class="form-control" name="" value="0000 0000 0000 0000" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" name="" value="Bank Name" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary rounded-1 m-0">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery UI Kit -->
    <script src="plugins/jquery_ui/jquery-ui.1.12.1.min.js"></script>

    <!-- ApexChart -->
    <script src="plugins/apexchart/apexcharts.min.js"></script>
    <script src="plugins/apexchart/apexchart-demo/apexcolumn-init.js"></script>

    <!-- Peity  -->
    <script src="plugins/peity/jquery.peity.min.js"></script>
    <script src="plugins/peity/piety-init.js"></script>

    <!-- Select 2 -->
    <script src="plugins/select2/js/select2.min.js"></script>

    <!-- Datatables -->
    <script src="plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/js/datatables.init.js"></script>

    <!-- Date Picker -->
    <script src="plugins/flatpickr/flatpickr.min.js"></script>

    <!-- Dropzone -->
    <script src="plugins/dropzone/dropzone.min.js"></script>
    <script src="plugins/dropzone/dropzone_custom.js"></script>

    <!-- TinyMCE -->
    <script src="plugins/tinymce/tinymce.min.js"></script>
    <script src="plugins/prism/prism.js"></script>
    <script src="plugins/jquery-repeater/jquery.repeater.js"></script>

    <!-- jQuery Validation -->
    <script src="plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Sweet Alert -->
    <script src="plugins/sweetalert/sweetalert2.min.js"></script>
    <script src="plugins/sweetalert/sweetalert2-init.js"></script>
    <script src="plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- Snippets JS -->
    <script src="assets/js/snippets.js"></script>

    <!-- Theme Custom JS -->
    <script src="assets/js/theme.js"></script>

</body>
<?php include('../dashboard/include/layout/footer.php'); ?>

</html>