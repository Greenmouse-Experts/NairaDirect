<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naira Direct</title>
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702897719/NairaDirect-Images/iyggly6czgiesicqthmh.png">
    <link rel="stylesheet" href="../frontend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../frontend/assets/css/style.css">
    <link rel="stylesheet" href="../frontend/assets/css/auth.css">
    <link rel="stylesheet" href="../frontend/assets/js/bootstrap.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>

<body onload="LoadTheme()">
    <div class="auth-bg">
        <div class="maincol-con">
            <div class="signcol-con">
                <div class="img-div">
                    <a href="/NairaDirect/frontend"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703154148/NairaDirect-Images/Group_48097706_vvxl4g.png" alt="logo" /></a>
                </div>
                <div class="main-div">
                    <div class="">
                        <p class="bg-text">Sign Up</p>
                        <p class="sm-text">Fill in your credentials to create an account</p>
                    </div>
                    <div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="surname" class="form-label">Surname</label>
                                    <input type="text" class="form-control" id="surname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="confirm-email" class="form-label">Confirm Email</label>
                                    <input type="text" class="form-control" id="confim-email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="phone number" class="form-label">Phone number</label>
                                    <input type="tel" class="form-control" id="phone number">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="confirm-phone" class="form-label d-block">Confirm Phone</label>
                                    <input type="tel" class="form-control w-100" id="corfirm-phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="state" class="form-label">State</label>
                                    <select class="form-control" id="state">
                                        <option></option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="confirm-phone" class="form-label d-block">Referrer's Code </label>
                                    <input type="tel" class="form-control w-100" id="corfirm-phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class=" col-lg-6 mb-3">
                                    <label for="confirm-password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm-password">
                                </div>
                            </div>
                            <div>
                                <P>By clicking signup, you agree to our <span>Terms & Conditions</span></P>
                            </div>
                            <div class="my-3">
                                <button class="form-btn">Sign up</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <p>Already have an account? <a href="/NairaDirect/frontend/signin.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../frontend/assets/js/home.js"></script>
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>