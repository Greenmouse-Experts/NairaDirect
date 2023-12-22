<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naira Direct</title>
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702897719/NairaDirect-Images/iyggly6czgiesicqthmh.png">
    <link rel="stylesheet" href="../frontend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../frontend/assets/css/style.css">
    <link rel="stylesheet" href="../frontend/assets/js/bootstrap.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<?php include('../frontend/include/layout/header.php'); ?>

<body onload="LoadTheme()">
    <div>
        <!-- hero sections -->
        <div class="referral-hero">
            <div class="container h-100">
                <div class="banner-control">
                    <h1>Contact Us.</h1>
                </div>
            </div>
        </div>
        <!-- page content -->
        <div class="section-padding">
            <div class="container">
                <div class="section-title mb-4">
                    <h2 class="">GET IN TOUCH</h2>
                    <p class="text-center">Although NairaDirect is touted as a strictly online cryptocurrency exchange, we have an office location where our staff provides worldclass support for you to be able to buy and sell crypto with ease and at anytime.</p>
                </div>
                <div class="row gap-4">
                    <div class="col-gap-6 row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="getstart-content">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161904/NairaDirect-Images/customer-service_yxwxk5.png" alt="user-add" width="70">
                                <h3>Company Address</h3>
                                <p>Kodeso Road shop 7, close to computer village or under-bridge, Ikeja, Lagos</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="getstart-content">
                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703159990/NairaDirect-Images/app-development_ke7uvc.png" alt="bank" width="50">
                                <h3>Phone Number</h3>
                                <p>+23903 866 3412</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="getstart-content">
                                <i class="fa fa-envelope-o mt-5 text-primary" aria-hidden="true"></i>
                                <!-- <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161909/NairaDirect-Images/bitcoin_2_ejgv8n.png" alt="bank" width="140"> -->
                                <h3>Email Address</h3>
                                <p>nairadirect@imfo.com</p>
                                <p>nairadirect@help.com</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section-padding">
            <div class="container">
                <h4 class="mb-4">Send Us A Message</h4>
                <div class="form-box">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="Subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="Subject" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-4">
                        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                        </div>
                        <!--Grid row-->
                        <div class="d-flex  mt-4">
                            <button class="btn btn-primary text-white w-25 py-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../frontend/assets/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<?php include('../frontend/include/layout/footer.php'); ?>

</html>