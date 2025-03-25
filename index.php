<? require_once('./connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Alazea - Gardening &amp; Landscaping HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style.css.map">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/classy-nav.css">
    <link rel="stylesheet" href="./assets/css/elegant-icon.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="./assets/img/core-img/leaf.png" alt="">
        </div>
    </div>

    <?php
    include_once('./components/client/layout/header.php');
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include_once('./components/client/home.php');
                break;
            case 'shop':
                include_once('./components/client/shop.php');
                break;
            case 'product':
                include_once('./components/client/product.php');
                break;
            case 'cart':
                include_once('./components/client/cart.php');
                break;
            case 'checkout':
                include_once('./components/client/checkout.php');
                break;
            case 'blog':
                include_once('./components/client/blog.php');
                break;
            case 'single-blog':
                include_once('./components/client/single-blog.php');
                break;
            case 'contact':
                include_once('./components/client/contact.php');
                break;
            default:
                include_once('./components/client/home.php');
                break;
        }
    }
    include_once('./components/client/home.php');
    include_once('./components/client/layout/footer.php');
    ?>
    <!-- jQuery-2.2.4 js -->
    <script src="./assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="./assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="./assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="./assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="./assets/js/active.js"></script>
</body>

</html>