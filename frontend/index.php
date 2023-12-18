<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naira Direct</title>
    <link rel="stylesheet" href="../frontend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../frontend/assets/css/style.css">
    <link rel="stylesheet" href="../frontend/assets/js/bootstrap.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<?php include('../frontend/include/layout/header.php'); ?>
<?php include('../frontend/include/layout/footer.php'); ?>

<body onload="LoadTheme()">
    <div class="">
        <div class="intro" id="home">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="intro-content">
                            <h1>Trade with <strong class="text-primary">Naira Direct.</strong> <br> Buy and sell cryptocurrency</h1>
                            <p>Fast and secure way to purchase or exchange 150+ cryptocurrencies</p>
                        </div>
                        <div class="intro-btn"><a class="btn btn-primary text-white" href="/">Get Started</a><a class="btn btn-outline-primary" href="/">Browse Now</a></div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-12">
                        <div class="intro-form-exchange">
                            <form method="post" name="myform" class="currency_validate">
                                <div class="form-group"><label class="mr-sm-2">Send</label>
                                    <div class="input-group mb-3"><select name="currency" class="form-control">
                                            <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                            <option value="litecoin">Litecoin</option>
                                        </select><input type="text" name="usd_amount" class="form-control" value="125.00 USD"></div>
                                </div>
                                <div class="form-group"><label class="mr-sm-2">Get</label>
                                    <div class="input-group mb-3"><select name="currency" class="form-control">
                                            <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                            <option value="litecoin">Litecoin</option>
                                        </select><input type="text" name="usd_amount" class="form-control" value="125.00 USD"></div>
                                    <div class="d-flex justify-content-between mt-0 align-items-center">
                                        <p class="mb-0">Monthly Limit</p>
                                        <h6 class="mb-0">$49750 remaining</h6>
                                    </div>
                                </div><a type="submit" name="submit" class="btn btn-success btn-block mt-4 w-100 text-white" href="/signin">Exchange Now<i class="la la-arrow-right"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- different charts -->
        <div class="price-grid section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header d-lg-flex justify-content-between">
                                <div class="media">
                                    <span>
                                        <i class="cc BTC"></i>
                                    </span>
                                    <p class="">Bitcoin</p>
                                </div>
                                <div>24h</div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header d-lg-flex justify-content-between">
                                <div class="media">
                                    <span>
                                        <i class="cc BTC"></i>
                                    </span>
                                    <p class="">Litecoin</p>
                                </div>
                                <div>24h</div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header d-lg-flex justify-content-between">
                                <div class="media">
                                    <span>
                                        <i class="cc BTC"></i>
                                    </span>
                                    <p class="">Dashcoin</p>
                                </div>
                                <div>24h</div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header d-lg-flex justify-content-between">
                                <div class="media">
                                    <span>
                                        <i class="cc BTC"></i>
                                    </span>
                                    <p class="">Ripple</p>
                                </div>
                                <div>24h</div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- toggle button -->
        <div class='position-fixed bottom-0 end-0 bg-trans'>
            <button class="switch border-0 bg-trans" data-theme-toggle>
                <input type="checkbox">
                <span class="slider"></span>
            </button>
        </div>
        <script src="../frontend/assets/js/home.js"></script>
</body>

</html>