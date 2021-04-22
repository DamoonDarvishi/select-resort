<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Selected Solutions</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- selected solutions Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/element.css">

</head>

<body>


    <?php
    if (!isset($_GET["page"])) {
        // H O M E 
        include 'pages/first.php';
    } else {
        $content = $_GET["page"];
        switch ($content):
                // A B O U T
            case "about":
                include "pages/about.php";
                break;
                // S E R V I C E S
            case "services":
                if (isset($_GET["item"])) {
                    $item = $_GET["item"];
                    switch ($item):
                        case "details":
                            include "pages/service-details.php";
                            break;
                        default:
                            include "pages/services.php";
                    endswitch;
                } else {
                    include "pages/services.php";
                    break;
                }
                break;
                // F E A T U R E S
            case "features":
                if (isset($_GET["item"])) {
                    $item = $_GET["item"];
                    switch ($item):
                        case "details":
                            include "pages/feature-details.php";
                            break;
                        default:
                            include "pages/features.php";
                    endswitch;
                } else {
                    include "pages/features.php";
                    break;
                }
                break;
                // P O R T F O L I O
            case "portfolio":
                if (isset($_GET["item"])) {
                    $item = $_GET["item"];
                    switch ($item):
                        case "details":
                            include "pages/portfolio-details.php";
                            break;
                        default:
                            include "pages/portfolio.php";
                    endswitch;
                } else {
                    include "pages/portfolio.php";
                    break;
                }
                break;
                // P R I C I N G 
            case "pricing":
                include "pages/pricing.php";
                break;
                // T Y P O G R A P H Y
            case "typography":
                include "pages/typography.php";
                break;
                // A P P
            case "app":
                include "pages/app.php";
                break;
                // B L O G
            case "blog":
                if (isset($_GET["item"])) {
                    $item = $_GET["item"];
                    switch ($item):
                        case "details":
                            include "pages/blog-details.php";
                            break;
                        default:
                            include "pages/blog.php";
                    endswitch;
                } else {
                    include "pages/blog.php";
                    break;
                }
                break;
                // E L E M E N T
            case "element":
                include "pages/elements.php";
                break;
                // C O N T A C T
            case "contact":
                include "pages/contact.php";
                break;
            default:
                header("Location: /");
        endswitch;
    }
    ?>


    <!-- ======= Footer ======= -->
    <?php include 'components/footer/footer.php' ?>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Selected Solutions Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- <script src="components/sliders/revealingSlider.js"></script> -->
    <script>
    console.log("home");
    </script>
</body>

</html>