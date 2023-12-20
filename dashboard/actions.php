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
    <link rel="shortcut icon" href="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702897719/NairaDirect-Images/iyggly6czgiesicqthmh.png" type="image/x-icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Actions</title>
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
                        <h5 class="text-dark">Actions</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-12">
                        <div class="card card-email-inbox border-0">
                            <div class="card-header bg-transparent border-0 d-flex align-items-center justify-content-between p-5 pb-3 gap-3 flex-wrap">
                                <div class="d-flex align-items-center gap-5 border-bottom border-1 border-light-200">
                                    <ul class="nav nav-tabs nav-classic-icon inbox-tab" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fontting active text-dark fs-11" href="#tab-important" data-bs-toggle="tab" role="tab"><i class="bi bi-bookmark-check-fill me-2"></i> Favorites</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fontting fs-11 text-dark" href="#tab-socials" data-bs-toggle="tab" role="tab"><i class="bi bi-currency-exchange me-2"></i> Coins</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fontting fs-11 text-dark" href="#tab-promotion" data-bs-toggle="tab" role="tab"><i class="bi bi-ticket-detailed-fill me-2"></i> Trending</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- Tab Content First  -->
                                    <div class="tab-pane fade show active" id="tab-important" role="tabpanel">
                                        <div class="crypto-item bottomming mb-1" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702983345/NairaDirect-Images/btc.b3d9fc323741d56a571e6a992ff44b8a_upwpbf.svg" alt="Bitcoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Bitcoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">BTC</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.18%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star-fill me-1"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984158/NairaDirect-Images/eth.eff505c58201f1f25718f1ef047c8a67_gjpabp.svg" alt="Ethereum" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Ethereum</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">ETH</span>
                                                    <span class="sc-4js264-0 kEiNqmmm">-7.14%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985213/NairaDirect-Images/doge.2377432aa75f5c1a100be91a213120d8_w54oz4.svg" alt="Dogecoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Dogecoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">DOGE</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.21%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984650/NairaDirect-Images/sol.19cf4bb9a3765b5da49af2e12c6ddefc_ybdaae.svg" alt="Solana" /></div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Solana</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">SOL</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.31%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star-fill me-1"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985499/NairaDirect-Images/usdt.6f0a2717ef704713537cc11af7365860_mc0xip.svg" alt="Orchid" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Tether</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">USDT</span>
                                                    <span class="sc-4js264-0 kEiNqmmm">-2.10%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-1" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702983345/NairaDirect-Images/btc.b3d9fc323741d56a571e6a992ff44b8a_upwpbf.svg" alt="Bitcoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Bitcoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">BTC</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.18%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star-fill me-1"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984158/NairaDirect-Images/eth.eff505c58201f1f25718f1ef047c8a67_gjpabp.svg" alt="Ethereum" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Ethereum</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">ETH</span>
                                                    <span class="sc-4js264-0 kEiNqmmm">-7.14%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985213/NairaDirect-Images/doge.2377432aa75f5c1a100be91a213120d8_w54oz4.svg" alt="Dogecoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Dogecoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">DOGE</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.21%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984650/NairaDirect-Images/sol.19cf4bb9a3765b5da49af2e12c6ddefc_ybdaae.svg" alt="Solana" /></div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Solana</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">SOL</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.31%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star-fill me-1"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985499/NairaDirect-Images/usdt.6f0a2717ef704713537cc11af7365860_mc0xip.svg" alt="Orchid" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Tether</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">USDT</span>
                                                    <span class="sc-4js264-0 kEiNqmmm">-2.10%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985213/NairaDirect-Images/doge.2377432aa75f5c1a100be91a213120d8_w54oz4.svg" alt="Dogecoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Dogecoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">DOGE</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.21%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984650/NairaDirect-Images/sol.19cf4bb9a3765b5da49af2e12c6ddefc_ybdaae.svg" alt="Solana" /></div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Solana</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">SOL</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.31%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tab Content Second  -->
                                    <div class="tab-pane fade" id="tab-socials" role="tabpanel">
                                        B
                                    </div>

                                    <!-- Tab Content Third  -->
                                    <div class="tab-pane fade" id="tab-promotion" role="tabpanel">
                                        <div class="crypto-item bottomming mb-2" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star-fill me-1"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984158/NairaDirect-Images/eth.eff505c58201f1f25718f1ef047c8a67_gjpabp.svg" alt="Ethereum" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Ethereum</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">ETH</span>
                                                    <span class="sc-4js264-0 kEiNqmmm">-7.14%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-1" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702983345/NairaDirect-Images/btc.b3d9fc323741d56a571e6a992ff44b8a_upwpbf.svg" alt="Bitcoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Bitcoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">BTC</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.18%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984650/NairaDirect-Images/sol.19cf4bb9a3765b5da49af2e12c6ddefc_ybdaae.svg" alt="Solana" /></div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Solana</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">SOL</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.31%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985213/NairaDirect-Images/doge.2377432aa75f5c1a100be91a213120d8_w54oz4.svg" alt="Dogecoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Dogecoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">DOGE</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.21%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984650/NairaDirect-Images/sol.19cf4bb9a3765b5da49af2e12c6ddefc_ybdaae.svg" alt="Solana" /></div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Solana</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">SOL</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.31%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-1" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702983345/NairaDirect-Images/btc.b3d9fc323741d56a571e6a992ff44b8a_upwpbf.svg" alt="Bitcoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Bitcoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">BTC</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.18%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star-fill me-1"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985499/NairaDirect-Images/usdt.6f0a2717ef704713537cc11af7365860_mc0xip.svg" alt="Orchid" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Tether</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">USDT</span>
                                                    <span class="sc-4js264-0 kEiNqmmm">-2.10%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985213/NairaDirect-Images/doge.2377432aa75f5c1a100be91a213120d8_w54oz4.svg" alt="Dogecoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Dogecoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">DOGE</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.21%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star-fill me-1"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984158/NairaDirect-Images/eth.eff505c58201f1f25718f1ef047c8a67_gjpabp.svg" alt="Ethereum" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Ethereum</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">ETH</span>
                                                    <span class="sc-4js264-0 kEiNqmmm">-7.14%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985213/NairaDirect-Images/doge.2377432aa75f5c1a100be91a213120d8_w54oz4.svg" alt="Dogecoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Dogecoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">DOGE</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.21%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984650/NairaDirect-Images/sol.19cf4bb9a3765b5da49af2e12c6ddefc_ybdaae.svg" alt="Solana" /></div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Solana</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">SOL</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.31%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2" style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star-fill me-1"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985499/NairaDirect-Images/usdt.6f0a2717ef704713537cc11af7365860_mc0xip.svg" alt="Orchid" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Tether</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">USDT</span>
                                                    <span class="sc-4js264-0 kEiNqmmm">-2.10%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985213/NairaDirect-Images/doge.2377432aa75f5c1a100be91a213120d8_w54oz4.svg" alt="Dogecoin" />
                                            </div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Dogecoin</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark">
                                                    <span class="fs-12">DOGE</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.21%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crypto-item bottomming mb-2 " style="opacity: 1; transform: translateY(0px);">
                                            <i class="bi bi-star me-2"></i>
                                            <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984650/NairaDirect-Images/sol.19cf4bb9a3765b5da49af2e12c6ddefc_ybdaae.svg" alt="Solana" /></div>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="firstly">Solana</h4>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">SOL</span>
                                                    <span class="sc-4js264-0 kEiNqmm">0.31%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-12">
                        <div class="row">
                            <div class="col col-12">
                                <div class="widget_header"><img class="symbol" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703076065/NairaDirect-Images/icon-buy-light.2a383eaef02872f76687e158268b42fb_awdmcn.svg" alt="icon">
                                    <h2 class="first alalss mb-4">Buy Crypto</h2>
                                </div>
                                <div class="card border-0 shadow-sm py-3">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <div class="d-flex align-items-center gap-0 flex-wrap">
                                                <div>
                                                    <h4 class="mb-2 first">BTCUSDT</h4>
                                                    <h2 class="fs-18 mb-0">22,228.00</h2>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="text-gray mb-0"><span class="text-danger fw-bold"><i class="bi bi-graph-down"></i> -0.5%</span> USD
                                                </p>
                                            </div>
                                            <div class="asstes">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703076230/NairaDirect-Images/2.83b1ef5cfb0b9348929b_budofh.webp" draggable="false" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fLpMjG">
                            <div class="track card">
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">14.02.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Ethereum (ETH)</h4>
                                            <span class="fs-14">0.0001</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">0.16 USD</span>
                                            <span class="firsting depo">DEPOSIT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">07.02.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Bitcoin (BTC)</h4>
                                            <span class="fs-14">0.0051</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">08.02 USD</span>
                                            <span class="firsting depoT">WITHDRAW</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">23.02.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Ripple (ROP)</h4>
                                            <span class="fs-14">0.0011</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">0.20 USD</span>
                                            <span class="firsting depo">DEPOSIT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">08.10.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Solana (SOL)</h4>
                                            <span class="fs-14">0.0061</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">08.52 USD</span>
                                            <span class="firsting depoT">WITHDRAW</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">23.02.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Ripple (ROP)</h4>
                                            <span class="fs-14">0.0011</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">0.20 USD</span>
                                            <span class="firsting depo">DEPOSIT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">08.10.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Solana (SOL)</h4>
                                            <span class="fs-14">0.0061</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">08.52 USD</span>
                                            <span class="firsting depoT">WITHDRAW</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">23.02.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Ripple (ROP)</h4>
                                            <span class="fs-14">0.0011</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">0.20 USD</span>
                                            <span class="firsting depo">DEPOSIT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">08.10.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Solana (SOL)</h4>
                                            <span class="fs-14">0.0061</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">08.52 USD</span>
                                            <span class="firsting depoT">WITHDRAW</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="flex-1">
                                        <span class="fs-14">23.02.2023</span>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Ripple (ROP)</h4>
                                            <span class="fs-14">0.0011</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12 text-capitalize">0.20 USD</span>
                                            <span class="firsting depo">DEPOSIT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-12">
                        <div class="row">
                            <div class="col col-12">
                                <div class="widget_header"><img class="symbol" src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1703070684/NairaDirect-Images/icon-wallet-light.1558aa7d9067ecc7222fcd09512cc043_habaui.svg" alt="icon">
                                    <h2 class="first alalss mb-4">Wallet Cryptocurrency</h2>
                                </div>
                                <div class="card border-0 shadow-sm py-3">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <div class="d-flex align-items-center gap-0 flex-wrap">
                                                <div>
                                                    <h4 class="mb-2 first">Total Assets</h4>
                                                    <h2 class="fs-18 mb-0">49,560.57</h2>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="text-gray mb-0"><span class="text-success fw-bold"><i class="bi bi-graph-up-arrow"></i> +0.5%</span> BTC
                                                </p>
                                            </div>
                                            <div class="asstes">
                                                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702982739/NairaDirect-Images/wallet.438f370c1c5a7e7244ae_iflfgd.webp" draggable="false" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fLpMjG">
                            <div class="track card">
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702983345/NairaDirect-Images/btc.b3d9fc323741d56a571e6a992ff44b8a_upwpbf.svg" alt="Bitcoin" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Bitcoin</h4>
                                            <span class="fs-14">0.1832</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark">
                                            <span class="fs-12">BTC</span>
                                            <span class="firsting">3880.63 USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984142/NairaDirect-Images/busd.d4330632e2fd158794a73a5c0fe41ea5_osrvcd.svg" alt="Binance" /></div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Binance</h4>
                                            <span class="fs-14">125.14</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">BUSD</span><span class="firsting">125.14 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984158/NairaDirect-Images/eth.eff505c58201f1f25718f1ef047c8a67_gjpabp.svg" alt="Ethereum" /></div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Ethereum</h4>
                                            <span class="fs-14">0.587</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">ETH</span><span class="firsting">919.07 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984653/NairaDirect-Images/xrp.8df5f76f54ec650dfa40565187b50a8e_jrk92c.svg" alt="Ripple" /></div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Ripple</h4>
                                            <span class="fs-14">12.356</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">XRP</span><span class="firsting">4.82 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon"><img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702984650/NairaDirect-Images/sol.19cf4bb9a3765b5da49af2e12c6ddefc_ybdaae.svg" alt="Solana" /></div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Solana</h4>
                                            <span class="fs-14">0.999</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">SOL</span><span class="firsting">23.15 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985213/NairaDirect-Images/doge.2377432aa75f5c1a100be91a213120d8_w54oz4.svg" alt="Dogecoin" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Dogecoin</h4>
                                            <span class="fs-14">7.504</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">DOGE</span><span class="firsting">1.50 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985364/NairaDirect-Images/orchid.c0064d2c5ae2191975adc28d25423622_m9chz3.svg" alt="Orchid" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Orchid</h4>
                                            <span class="fs-14">12.102</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">OXT</span><span class="firsting">24.08 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985499/NairaDirect-Images/usdt.6f0a2717ef704713537cc11af7365860_mc0xip.svg" alt="Orchid" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Tether</h4>
                                            <span class="fs-14">0.00</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">USDT</span><span class="firsting">0.00 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985490/NairaDirect-Images/ada.1f03164d221bd7d9511f25419505fd48_df94yd.svg" alt="Orchid" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Cardano</h4>
                                            <span class="fs-14">0.00</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">ADA</span><span class="firsting">0.00 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985932/NairaDirect-Images/xph.1ed78d333ac201a1e65f0fbb26dc9952_edmzyx.svg" alt="Orchid" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Fantom</h4>
                                            <span class="fs-14">0.00</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">XPH</span><span class="firsting">0.00 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item bottomm" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985929/NairaDirect-Images/matic.1cf1e85b1885f7b3d1634aa4d7fe69c0_cbdbtt.svg" alt="Orchid" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Polygon</h4>
                                            <span class="fs-14">0.00</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">MATIC</span><span class="firsting">0.00 USD</span></div>
                                    </div>
                                </div>
                                <div class="crypto-item" style="opacity: 1; transform: translateY(0px);">
                                    <div class="crypto-icon">
                                        <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702985926/NairaDirect-Images/link.a50883e2ab798b72ba4cd6fdc02ca575_mipf0f.svg" alt="Orchid" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="firstly">Polygon</h4>
                                            <span class="fs-14">0.00</span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between text-dark"><span class="fs-12">MATIC</span><span class="firsting">0.00 USD</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-md-12">
                        <!-- Chart -->
                        <div class="card border-0 p-5">
                            <!-- <div class="card-header border-0 d-flex align-items-center gap-4">
                            <h4 class="mb-0">Trade Chart</h4>
                        </div> -->
                            <div class="card-body p-0">
                                <div id="grouped-stacked-column"></div>
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
                        <h4 class="firstly">Payment</h4>
                        <p class="text-gray">USD Visa/Mastercard</p>
                    </div>
                    <div class="card-body pt-3">
                        <form class="" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Card Name</label>
                                        <input type="tel" class="form-control" value="Hamzat ..." placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Card Number</label>
                                        <input type="tel" class="form-control" value="0000 0000 0000 0000" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Expiration Date</label>
                                        <input type="date" class="form-control" value="MM/YY" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">CVV</label>
                                        <input type="tel" class="form-control" value="000" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Card Pin</label>
                                        <input type="tel" class="form-control" value="000" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary m-0 fs-14">Continue</button>
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