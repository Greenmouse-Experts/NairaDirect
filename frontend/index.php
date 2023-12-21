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
</head>
<?php include('../frontend/include/layout/header.php'); ?>

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
                                    <div class="input-group mb-3 mt-1"><select name="currency" class="form-control">
                                            <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                            <option value="litecoin">Litecoin</option>
                                        </select><input type="text" name="usd_amount" class="form-control" value="125.00 USD"></div>
                                </div>
                                <div class="form-group"><label class="mr-sm-2">Get</label>
                                    <div class="input-group mb-3 mt-1"><select name="currency" class="form-control">
                                            <option data-display="Bitcoin" value="bitcoin">Bitcoin</option>
                                            <option value="litecoin">Litecoin</option>
                                        </select><input type="text" name="usd_amount" class="form-control" value="125.00 USD"></div>
                                    <div class="d-flex justify-content-between mt-0 align-items-center">
                                        <p class="mb-0">Monthly Limit</p>
                                        <h6 class="mb-0">$49750 remaining</h6>
                                    </div>
                                </div><a type="submit" name="submit" class="btn btn-primary btn-block mt-4 w-100 text-white" href="/signin">Exchange Now<i class="la la-arrow-right"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- different charts -->
        <div class='scroll-animate'>
            <iframe src="https://bit2me.com/widget/crypto-carousel/v1" style="display:block;width:100%;height:40px;" class="bg-primary" frameborder="0"></iframe>
        </div>
        <!-- <div class="price-grid section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header d-lg-flex justify-content-between">
                                <div class="media">
                                    <span class="media-box justify-content-center bg-yellow">
                                        <i class="fa fa-btc" aria-hidden="true"></i>
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
                                    <span class="media-box">
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
                    <div class="col-3 mt-3">
                        <div class="card">
                            <div class="card-header d-lg-flex justify-content-between">
                                <div class="media">
                                    <span class="media-box">
                                        <i class="fa fa-btc" aria-hidden="true"></i>
                                    </span>
                                    <p class="">Bitcoin</p>
                                </div>
                                <div>24h</div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="col-3 mt-3">
                        <div class="card">
                            <div class="card-header d-lg-flex justify-content-between">
                                <div class="media">
                                    <span class="media-box">
                                        <i class="cc BTC"></i>
                                    </span>
                                    <p class="">Litecoin</p>
                                </div>
                                <div>24h</div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="col-3 mt-3">
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
                    <div class="col-3 mt-3">
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
        </div> -->
        <!-- get start in a few minute -->
        <div class="getstart section-padding" id="portfolio">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title">
                            <h2>Get started in a few minutes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="getstart-content">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161903/NairaDirect-Images/user_4_ytwjqb.png" alt="user-add" width="140">
                            <h3>Create an account</h3>
                            <p>Sign up for free on our website</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="getstart-content">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161908/NairaDirect-Images/bank_1_e8kncx.png" alt="bank" width="140">
                            <h3>Link your bank account</h3>
                            <p>Link your bank account to make Naira deposits and withdrawals</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="getstart-content">
                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161909/NairaDirect-Images/bitcoin_2_ejgv8n.png" alt="bank" width="140">
                            <h3>Start buying &amp; selling</h3>
                            <p>Fund your account with Naira and start trading all your favourite coins!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- create your crypto portfolio -->
        <div class="portfolio section-padding" id="portfolio">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <h2>Create your cryptocurrency portfolio today</h2>
                            <p class="opacity-75">Naira direct has a variety of features that make it the best place to start trading</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-6">
                        <div class="portfolio_list">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="media">
                                        <span class="port-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703159988/NairaDirect-Images/pie-chart_dxmomf.png" alt="icon" width='40'></span>
                                        <div class="media-body">
                                            <h4>Manage your portfolio</h4>
                                            <p>Buy and sell popular digital currencies, keep track of them in the one place.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="media">
                                        <span class="port-icon">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703159987/NairaDirect-Images/schedule_1_xmyz0v.png" alt="schedule" width="40">
                                        </span>
                                        <div class="media-body">
                                            <h4>Recurring buys</h4>
                                            <p>Invest in cryptocurrency slowly over time by scheduling buys daily, weekly, or monthly.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="media">
                                        <span class="port-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703159990/NairaDirect-Images/security_1_zlyjmp.png" alt="shield" width="40">
                                        </span>
                                        <div class="media-body">
                                            <h4>Vault protection</h4>
                                            <p>For added security, store your funds in a vault with time delayed withdrawals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="media">
                                        <span class="port-icon">
                                            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703159990/NairaDirect-Images/app-development_ke7uvc.png" alt="mobile" width="40">
                                        </span>
                                        <div class="media-body">
                                            <h4>Mobile View</h4>
                                            <p>Stay on top of the markets with the Naira direct for mobiles.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="portfolio_img"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703084891/NairaDirect-Images/bg-dasg_jok9rm.png" alt="dashboard" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trade. Anywhere -->
        <div class="trade-app section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2>Trade. Anywhere</h2>
                            <p class="opacity-75"> All of our products are ready to go, easy to use and offer great value to any kind of business</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card trade-app-content">
                            <div class="card-body">
                                <span><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161339/NairaDirect-Images/Group_480977152_crstiv.png" alt="phone" width="50"></span>
                                <h4 class="card-title">Mobile</h4>
                                <p>All the power of Naira Direct's cryptocurrency exchange, in the palm of your hand. Log into Naira direct trading app platform today from your mobile devices</p><a href="/" class="text-com fw-bold"> Know More <i class="la la-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card trade-app-content">
                            <div class="card-body"><span><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161338/NairaDirect-Images/Group_480977162_ezlfp4.png" alt="phone" width="100"></span>
                                <h4 class="card-title">Desktop</h4>
                                <p>Powerful crypto trading platform for those who mean business. The Naira direct crypto trading experience, tailor-made for your Windows or MacOS device.</p><a href="/" class="text-com fw-bold"> Know More <i class="la la-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card trade-app-content">
                            <div class="card-body"><span><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161338/NairaDirect-Images/Group_480977172_qw84uu.png" alt="phone" width="85"></span>
                                <h4 class="card-title">API</h4>
                                <p class="mb-4 pb-3">The Naira direct API is designed to provide an easy and efficient way to integrate your trading application into our platform.</p><a href="/" class="text-com fw-bold"> Know More <i class="la la-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- what our customers says -->
        <div class="testimonial section-padding" id="testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title">
                            <h2>What our customer says</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="testimonial-content">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="d-lg-flex align-items-center bg-sec">
                                            <div class="w-lg-50 h-80">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702986973/NairaDirect-Images/ceo_andsks.jpg" alt="ceo" class="w-100 h-100">
                                            </div>
                                            <div class="w-lg-50 ps-5 pe-2 bg-sec">
                                                <p class="fs-4">Banimibo-ofori</p>
                                                <p>Naira Direct deserves 6 stars if possible. It has all the qualities to be Nigeria's No.1.</p>
                                                <p class="opacity-75"> Rivers State.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-lg-flex align-items-center bg-sec">
                                            <div class="w-lg-50 h-80">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702986973/NairaDirect-Images/ceo_andsks.jpg" alt="ceo" class="w-100 h-100">
                                            </div>
                                            <div class="w-lg-50 ps-5 pe-2 bg-sec">
                                                <p class="fs-4">Anu</p>
                                                <p>At first I was skeptical but I had to give it a try. The transaction was smooth and easy.</p>
                                                <p class="opacity-75">Lagos State.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-lg-flex align-items-center bg-sec">
                                            <div class="w-lg-50 h-80">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702986973/NairaDirect-Images/ceo_andsks.jpg" alt="ceo" class="w-100 h-100">
                                            </div>
                                            <div class="w-lg-50 ps-5 pe-2 bg-sec">
                                                <p class="fs-4">Ubong Asukwo</p>
                                                <p>Good job done here... everything was done less than an hour.</p>
                                                <p class="opacity-75">Cross River State</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Promo section -->
        <div class="promo section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center">
                            <h2>The most trusted cryptocurrency platform</h2>
                            <p> Here are a few reasons why you should choose Naira Direct</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center py-5">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img"><img class="img-fluid" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702997867/NairaDirect-Images/icons8-buy-and-sell-64_ck73mx.png" alt=""></div>
                            <h3>Instant Buy & Sell</h3>
                            <p>Your Naira Direct account is credited instantly when you buy and sell coins.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img"><img class="img-fluid" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702997867/NairaDirect-Images/icons8-secure-wallet-68_cxolns.png" alt="secure"></div>
                            <h3>Secure Wallet</h3>
                            <p>You can store your bitcoin in our secure wallet for free. The safest place to buy, sell and manage your cryptocurrencies.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="promo-content">
                            <div class="promo-content-img"><img class="img-fluid" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702997867/NairaDirect-Images/icons8-approval-80_bhr3yh.png" alt=""></div>
                            <h3>Tested & Trusted</h3>
                            <p>We are trusted by thousands of active bitcoin traders that understand the importance of security and good rates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faqs section -->
        <div class="blog section-padding">
            <!-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="blog-grid">
                            <div class="card">
                                <img class="img-fluid" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702991698/NairaDirect-Images/download_2_assieo.jpg" alt="">
                                <div class="card-body"><a href="">
                                        <h4 class="card-title">How is the price calculated?</h4>
                                    </a>
                                    <p class="card-text opacity-75">The price of Bitcoin and other digital currencies are determined by supply and demand: the buyers who want a certain currency and the sellers who have that currency. Naira Direct does not set the price of Bitcoin or any digital currency.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="img-fluid" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702991699/NairaDirect-Images/shutterstock_2158405327-11_c5ezjr.jpg" alt="">
                                <div class="card-body"><a href="">
                                        <h4 class="card-title">Why is the Bitcoin price different on Google?</h4>
                                    </a>
                                    <p class="card-text opacity-75">There is no global Bitcoin price, it isn't pegged to any currency, country or Bitcoin platform. When you see the price on Google, it is simply showing an estimated, international price</p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="img-fluid" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702986973/NairaDirect-Images/ceo_andsks.jpg" alt="">
                                <div class="card-body"><a href="">
                                        <h4 class="card-title">Do I need to buy a whole Bitcoin?</h4>
                                    </a>
                                    <p class="card-text opacity-75">No. Bitcoin, Ethereum and most other digital currencies are divisible. You can spend a small amount of money and buy or sell very small amounts over time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--  -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class="acc-container">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item acc-div">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    How is the price calculated?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">The price of Bitcoin and other digital currencies are determined by supply and demand: the buyers who want a certain currency and the sellers who have that currency. Naira Direct does not set the price of Bitcoin or any digital currency.</div>
                            </div>
                        </div>
                        <div class="accordion-item acc-div">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Why is the Bitcoin price different on Google?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">There is no global Bitcoin price, it isn't pegged to any currency, country or Bitcoin platform. When you see the price on Google, it is simply showing an estimated, international price.</div>
                            </div>
                        </div>
                        <div class="accordion-item acc-div">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Do I need to buy a whole Bitcoin?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">No. Bitcoin, Ethereum and most other digital currencies are divisible. You can spend a small amount of money and buy or sell very small amounts over time.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get and stay in touch -->
        <div class="get-touch section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title">
                            <h2>Get in touch. Stay in touch.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="get-touch-content">
                            <div class="media"><span><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161904/NairaDirect-Images/customer-service_yxwxk5.png" alt="shield" width="40"></span>
                                <div class="media-body">
                                    <h4>24 / 7 Support</h4>
                                    <p>Got a problem? Just get in touch. Our support team is available 24/7.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="get-touch-content">
                            <div class="media"><span><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161903/NairaDirect-Images/blog_vwkqmq.png" alt="community" width="40"></span>
                                <div class="media-body">
                                    <h4>Naira Direct Blog</h4>
                                    <p>News and updates from the world’s leading cryptocurrency exchange.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="get-touch-content">
                            <div class="media"><span><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161903/NairaDirect-Images/briefcase_1_e3uh21.png" alt="community" width="40"></span>
                                <div class="media-body">
                                    <h4>Careers</h4>
                                    <p>Help build the future of technology. Start your new career at Tradio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="get-touch-content">
                            <div class="media"><span><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703161904/NairaDirect-Images/group-users_c8com8.png" alt="community" width="40"></span>
                                <div class="media-body">
                                    <h4>Community</h4>
                                    <p>Naira direct is global. Join the discussion in our worldwide communities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../frontend/assets/js/home.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<?php include('../frontend/include/layout/footer.php'); ?>

</html>