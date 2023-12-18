<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dashboard/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/dashboard/assets/css/dashstyle.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/greenmouse-tech/image/upload/v1702897719/NairaDirect-Images/iyggly6czgiesicqthmh.png" type="image/x-icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<!-- PHP to set the theme class dynamically -->
<?php
$themeClass = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
echo '<script>document.body.className = "' . $themeClass . '";</script>';
?>
<?php include('../dashboard/include/layout/header.php'); ?>
<?php include('../dashboard/include/layout/footer.php'); ?>

<body>

    <!-- Theme switch button -->
    <!-- <button id="themeToggleBtn" class="btn btn-primary">Toggle Theme</button> -->


    <!-- Bootstrap JS (Popper.js and jQuery dependencies) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="./assets/js/theme-switcher.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
</body>

</html>