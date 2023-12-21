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
    <title>Setting Profile</title>
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
                        <h5 class="text-dark">My Profile</h5>
                        <p class="text-gray mb-0">Manage your information and security to make Nairadirect work better for you.</p>
                    </div>
                </div>
                <div class="col-xxl-12 col-md-12">
                    <div class="card card-email-inbox border-0">
                        <div class="card-header bg-transparent border-0 d-flex align-items-center justify-content-between p-5 pb-3 gap-3 flex-wrap">
                            <div class="d-flex align-items-center gap-5 border-bottom border-1 border-light-200">
                                <ul class="nav nav-tabs nav-classic-icon inbox-tab" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link fontting active text-dark fs-11" href="#tab-important" data-bs-toggle="tab" role="tab"><i class="bi bi-person-check-fill me-3"></i> Personal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fontting fs-11 text-dark" href="#tab-socials" data-bs-toggle="tab" role="tab"><i class="bi bi-bank2 me-3"></i>Bank</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fontting fs-11 text-dark" href="#tab-promotion" data-bs-toggle="tab" role="tab"><i class="bi bi-file-earmark-lock-fill me-3"></i> Security</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fontting fs-11 text-dark" href="#tab-verify" data-bs-toggle="tab" role="tab"><i class="bi bi-check-circle-fill me-3"></i>Verify Identity</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Tab Content First  -->
                                <div class="tab-pane fade show active" id="tab-important" role="tabpanel">
                                    <div class="card-body p-0">
                                        <form class="form-horizontal" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Full Name</label>
                                                        <input type="text" class="form-control" name="fname" value="" placeholder="Enter Full name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Username</label>
                                                        <input type="text" class="form-control" name="lname" value="" placeholder="Enter username" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Email</label>
                                                        <input type="email" class="form-control" name="email" value="" placeholder="Enter Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Phone Number</label>
                                                        <input type="Tel" class="form-control" name="phone" value="" placeholder="Enter phone number" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Date of Birth</label>
                                                        <input type="date" class="form-control" name="password" value="" placeholder="Type Password" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Password</label>
                                                        <input type="password" class="form-control" name="c_password" value="" placeholder="Type Password" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Gender</label>
                                                        <input type="text" class="form-control" name="c_password" value="" placeholder="Male or Female" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Photo</label>
                                                        <input type="file" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn mt-3 btn-primary w-10 text-white rounded-1 lh-15 ff-heading">Save Changes</a>
                                        </form>
                                    </div>
                                </div>

                                <!-- Tab Content Second  -->
                                <div class="tab-pane fade" id="tab-socials" role="tabpanel">
                                    <div class="card-body p-0">
                                        <form class="form-horizontal" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Account Name</label>
                                                        <input type="text" class="form-control" name="fname" value="" placeholder="Account name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Bank Name</label>
                                                        <input type="text" class="form-control" name="fname" value="" placeholder="Enter Bank name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Account Number</label>
                                                        <input type="tel" class="form-control" name="fname" value="" placeholder="1234567890" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Secret Question</label>
                                                        <select class="select" name="" id="" required>
                                                            <option value="">Please select</option>
                                                            <option data-value="What is the name of your favourite pet?">What is the name of your favourite pet?</option>
                                                            <option value="In what city were you born?">In what city were you born?</option>
                                                            <option value="What high school did you attend?">What high school did you attend?</option>
                                                            <option value="What is the name of your first school?">What is the name of your first school?</option>
                                                            <option value="What is your favourite movie?">What is your favourite movie?</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn mt-3 btn-primary w-10 text-white rounded-1 lh-15 ff-heading">Update Bank</a>
                                        </form>
                                    </div>
                                </div>

                                <!-- Tab Content Third  -->
                                <div class="tab-pane fade" id="tab-promotion" role="tabpanel">
                                    <div class="card-body p-0">
                                        <form class="form-horizontal" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Secret Question 1</label>
                                                        <select class="select" name="" id="" required>
                                                            <option value="">Please select</option>
                                                            <option data-value="What is the name of your favourite pet?">What is the name of your favourite pet?</option>
                                                            <option value="In what city were you born?">In what city were you born?</option>
                                                            <option value="What high school did you attend?">What high school did you attend?</option>
                                                            <option value="What is the name of your first school?">What is the name of your first school?</option>
                                                            <option value="What is your favourite movie?">What is your favourite movie?</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Answer 1</label>
                                                        <input type="text" class="form-control" name="fname" value="" placeholder="Answer 1" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Secret Question 2</label>
                                                        <select class="select" name="" id="" required>
                                                            <option value="">Please select</option>
                                                            <option data-value="What is your favourite colour?">What is your favourite colour?</option>
                                                            <option value="What is your mother's middle name?">What is your mother's middle name?</option>
                                                            <option value="What is your grandfather's first name?">What is your grandfather's first name?</option>
                                                            <option value="What is the name of your first school?">Where did you meet your spouse?</option>
                                                            <option value="Where did you meet your spouse?">What is your favourite movie?</option>
                                                            </option>
                                                            <option value="Which phone number do you remember most from your childhood?">Which phone number do you remember most from your childhood?</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Answer 2</label>
                                                        <input type="text" class="form-control" name="fname" value="" placeholder="Answer 2" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Secret Question 2</label>
                                                        <select class="select" name="" id="" required>
                                                            <option value="">Please select</option>
                                                            <option data-value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                                            <option value="What street did you grow up on?">What street did you grow up on?</option>
                                                            <option value="What was the make of your first car?">What was the make of your first car?</option>
                                                            <option value="What is your father's middle name?">What is your father's middle name?</option>
                                                            <option value="What is your father's favourite food?">What is your father's favourite food?</option>
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Answer 3</label>
                                                        <input type="text" class="form-control" name="fname" value="" placeholder="Answer 3" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn mt-3 mb-4 btn-primary w-10 text-white rounded-1 lh-15 ff-heading">Update Quetions</a>
                                        </form>
                                        <form class="form-horizontal mt-2 " method="post">
                                            <p class="mb-3">
                                                To protect your account from unauthorized access, you should enable two-factor authentication.
                                            </p>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Enable paper code two-factor authentication</label>
                                                        <input type="tel" class="form-control" name="fname" value="" placeholder="00000" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn mt-3 btn-primary w-10 text-white rounded-1 lh-15 ff-heading">Update 2fa</a>
                                        </form>
                                    </div>
                                </div>

                                <!-- Tab Content Fourth  -->
                                <div class="tab-pane fade" id="tab-verify" role="tabpanel">
                                    <div class="card-body p-0">
                                        <form class="form-horizontal" method="post">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">First Name</label>
                                                        <input type="text" class="form-control" name="fname" value="" placeholder="Enter First name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Middle Name</label>
                                                        <input type="text" class="form-control" name="fname" value="" placeholder="Enter Middle name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Username</label>
                                                        <input type="text" class="form-control" name="lname" value="" placeholder="Enter username" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Date of Birth</label>
                                                        <input type="date" class="form-control" name="lname" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Bank Name</label>
                                                       <select name="" class="select" id="">
                                                        <option value="">Select Bank</option>
                                                        <option value="">Hamzat Bank</option>
                                                       </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Account Number</label>
                                                        <input type="tel" class="form-control" placeholder="1234567890"  name="lname" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Bank Verification Number (BVN)</label>
                                                        <input type="tel" class="form-control" name="lname" placeholder="1234567890" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Main Phone Number</label>
                                                        <input type="tel" class="form-control" name="password" value="" placeholder="Main Phone Number" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Second Phone Number (Optional)</label>
                                                        <input type="tel" class="form-control" name="password" value="" placeholder="Second Phone Number (Optional)" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="" class="mb-2 form-label">Gender</label>
                                                       <select name="" class="select" id="">
                                                        <option value="">Select option</option>
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                       </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn mt-3 btn-primary w-10 text-white rounded-1 lh-15 ff-heading">Submit</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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