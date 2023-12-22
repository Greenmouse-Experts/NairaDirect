<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../frontend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../frontend/assets/js/bootstrap.js">
    <link rel="stylesheet" href="../frontend/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="bg-sec">
        <div class="container py-3">
            <div class='row px-2'>
                <div class='p-0 bg-trans'>
                    <nav class='navbar navbar-expand-lg align-items-center justify-content-between'>
                        <a class="navbar-brand bg-logo" href="#"></a>
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler collapsed"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        <div class="navbar-collapse collapse flex-grow-0">
                            <div data-nav="list" class="d-flex align-items-center gap-3">
                                <div class="ml-auto navbar-nav">
                                    <div class="nav-item"><a href="https://nairadirect.victornwadinobi.com/frontend/" data-rb-event-key="#home" class="nav-Nav.link nav-link">Home</a></div>
                                    <div class="nav-item"><button data-rb-event-key="#price" data-bs-toggle="modal" data-bs-target="#priceModal" class="nav-Nav.link nav-link">Price List</button></div>
                                    <div class="nav-item"><a href="referrals.php" data-rb-event-key="#portfolio" class="nav-Nav.link nav-link">Referrals</a></div>
                                    <!-- <div class="nav-item"><a href="contact.php" data-rb-event-key="#testimonial" class="nav-Nav.link nav-link">Contact Us</a></div> -->
                                    <div class="nav-item"><a href="about.php" data-rb-event-key="#app" class="nav-Nav.link nav-link">About Us</a></div>
                                    <div class="nav-item"><a href="signin.php" data-rb-event-key="#blog" class="nav-Nav.link nav-link">Sign in</a></div>
                                </div>
                                <div class="signin-btn"><a class="btn btn-primary ml-3 text-white" href="signup.php">Create Account</a></div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- menu callout -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand bg-logo" href="#"></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="my-ul">
                <li><a href="about.php">About Us</a></li>
                <li class="mt-3"><a href="https://buysellbitcoin.website/">Blog/News</a></li>
                <li class="mt-3"><a href="contact.php">Contact Us</a></li>
                <li class="mt-3"><a href="referrals.php">Referrals & Affiliates</a></li>
                <li class="mt-3"><a href="guide.php">Support</a></li>
                <li class="mt-3"><a href="bitcoin-wallet.php">Bitcoin Wallet</a></li>
                <li class="mt-3"><a href="naira-wallet.php">Naira Wallet</a></li>
                <li class="mt-3"><a href="terms.php">Terms & Conditions</a></li>
                <li class="mt-3"><a href="privacy.php">Privacy Policy</a></li>
                <li class="mt-3"><a href="guide.php">Guide</a></li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="priceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Today's Price List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">E-Currency</th>
                                <th scope="col">
                                    <button class="btn btn-primary text-white px-3">Buy</button>
                                </th>
                                <th scope="col">
                                    <button class="btn btn-danger text-white">Sell</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td scope="row">
                                    <div>
                                        <p>Bitcoin (BTC)</p>
                                    </div>
                                </td>
                                <td>
                                    ₦1212/$
                                </td>
                                <td>
                                    ₦1000/$
                                </td>
                            </tr> -->
                            <tr>
                                <td scope="row">
                                    <div class="coin-list">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703157525/NairaDirect-Images/bitcoin-logo-png-transparent_trfjau.png" alt="logo">
                                        <p>Bitcoin (BTC)</p>
                                    </div>
                                </td>
                                <td>
                                    ₦1212/$
                                </td>
                                <td>
                                    ₦1000/$
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="coin-list">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703157525/NairaDirect-Images/Venezia_vaporetti_PM.svg_rlvoz5.png" alt="pm">
                                        <p>Perfect Money (PM)</p>
                                    </div>
                                </td>
                                <td>
                                    ₦1212/$
                                </td>
                                <td>
                                    ₦1000/$
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="coin-list">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703157525/NairaDirect-Images/ethereum-logo-EC6CDBA45B-seeklogo.com_ynwlct.png" alt="eth">
                                        <p>Ehereum (ETH)</p>
                                    </div>
                                </td>
                                <td>
                                    ₦1212/$
                                </td>
                                <td>
                                    ₦1000/$
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="coin-list">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703157524/NairaDirect-Images/tether-usdt-logo-FA55C7F397-seeklogo.com_znixwi.png" alt="usdt">
                                        <p>USDT TRC20 (TRC20)</p>
                                    </div>
                                </td>
                                <td>
                                    ₦1212/$
                                </td>
                                <td>
                                    ₦1000/$
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="coin-list">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703157525/NairaDirect-Images/Bitcoin_Cash_iyuhbu.png" alt="cash">
                                        <p>Bitcoin Cash (BCH)</p>
                                    </div>
                                </td>
                                <td>
                                    ₦1212/$
                                </td>
                                <td>
                                    ₦1000/$
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- toggle button -->
    <div class='position-fixed top-20 bg-trans'>
        <button class="switch border-0 bg-trans" data-theme-toggle>
            <input type="checkbox">
            <span class="slider"></span>
        </button>
    </div>
    <script src="../frontend/assets/js/home.js"></script>
</body>

</html>