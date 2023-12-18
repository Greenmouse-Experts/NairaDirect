<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dashboard/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/dashboard/assets/dashstyle.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702897719/NairaDirect-Images/iyggly6czgiesicqthmh.png" type="image/x-icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Header</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9"></div>
                <div class="col-lg-2">
                    <!-- Search form with Bootstrap icon -->
                    <form class="form-inline alll my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <i class="bi bi-search"></i>
                    </form>
                </div>
                <div class="col-lg-1">
                    <button class="btn headder-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-justify"></i></button>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-start all-in-one" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702897618/NairaDirect-Images/eyvre8n6kz9a18vadbzl.png" draggable="false" alt="">
        </div>
        <div class="offcanvas-body css-snw5ah">
            <div class="style_list__4zulN flex-1">
                <a aria-current="page" class="nav-link nav-link--sidebar style_list_item__bvCzP active" href="/">
                    <span class="wrapper"><i class="icon icon-dashboard"></i><i class="icon icon-fill active icon-dashboard-active"></i><i class="bi bi-grid-fill"></i></span>Dashboard
                </a>
                <a class="nav-link nav-link--sidebar style_list_item__bvCzP" href="/trade">
                    <span class="wrapper"><i class="icon icon-trade active"></i><i class="icon icon-fill icon-trade"></i></span>Trade
                </a>
                <a class="nav-link nav-link--sidebar style_list_item__bvCzP" href="/actions">
                    <span class="wrapper"><i class="icon icon-actions active"></i><i class="icon icon-fill icon-actions-active"></i></span>Actions
                </a>
                <a class="nav-link nav-link--sidebar style_list_item__bvCzP" href="/wallet">
                    <span class="wrapper"><i class="icon icon-wallet active"></i><i class="icon icon-fill icon-wallet-active"></i></span>Wallet
                </a>
                <a class="nav-link nav-link--sidebar style_list_item__bvCzP" href="/nft">
                    <span class="wrapper"><i class="icon icon-nft active"></i><i class="icon icon-fill icon-nft-active"></i></span>NFT
                </a>
                <a class="nav-link nav-link--sidebar style_list_item__bvCzP" href="/collections">
                    <span class="wrapper"><i class="icon icon-collections style_sm__1c6EO active"></i><i class="icon icon-fill icon-collections-active style_sm__1c6EO"></i></span>Collections
                </a>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Bootstrap JS (Popper.js and jQuery dependencies) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="./assets/js/theme-switcher.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
</body>

</html>