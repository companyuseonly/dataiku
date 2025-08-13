<!doctype html>
<html lang="en-US">

<head>

    <?php
    require_once($folderPath . "Components/DBConfig.php");
    require_once($folderPath . "Components/configuration.php");
    $today = date("d-m-y");
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href="<?php echo $folderPath ?>assets/themes/dataiku/slice/dist/images/Favicon.png">

    <link rel="alternate" hreflang="en" href="index.php" />
    <link rel="alternate" hreflang="x-default" href="index.php" />
    <link rel="alternate" href="http://rmmindia.com/" hreflang="x-default" />
    <link rel="alternate" href="http://rmmindia.com/" hreflang="en-us" />
    <link rel="alternate" href="http://rmmindia.com/" hreflang="en-gb" />
    <link rel="canonical" href="http://rmmindia.com/" />


    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&amp;display=swap" rel="stylesheet">

    <!-- FONT LINKS -->
    <link rel="stylesheet" href="<?php echo $folderPath ?>assets/use.typekit.net/hbm5eto.css">

    <script data-cfasync="false" src="<?php echo $folderPath ?>assets/client-registry.mutinycdn.com/personalize/client/0c9b21a0494cfe18.js"></script>

    <!-- WT1 tracker -->
    <script type="text/javascript" data-type="lazy" data-src="data:text/javascript;base64,DQogICAgdmFyIF93dDFRID0gX3d0MVEgfHwgW107DQogICAgX3d0MVEucHVzaChbInRyYWNrUGFnZSJdKTsNCiAgIChmdW5jdGlvbigpIHsNCiAgICAgICAgdmFyIHNjcmlwdCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NjcmlwdCcpOw0KICAgICAgICBzY3JpcHQuc3JjID0gIi8vdHJhY2tlci5kYXRhaWt1LmNvbS9qcy90cmFjay5qcyI7DQogICAgICAgIHNjcmlwdC50eXBlID0gJ3RleHQvamF2YXNjcmlwdCc7DQogICAgICAgIHNjcmlwdC5hc3luYyA9ICJ0cnVlIjsNCiAgICAgICAgdmFyIHNjcmlwdDAgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgic2NyaXB0IilbMF07DQogICAgICAgIHNjcmlwdDAucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoc2NyaXB0LCBzY3JpcHQwKTsNCiAgICB9KSgpOw0K"></script>


    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <?php
    if ($thisPage == "Home") {
        $ogTitle =  $coName;
    ?>
        <title><?php echo $pageTitle . " :: " . $coName; ?></title>
    <?php } else {
        $ogTitle =  $pageTitle . " :: " . $coName . " ::";
    ?>
        <title><?php echo $pageTitle . " :: " . $coName;; ?> </title>
    <?php } ?>

    <?php
    date_default_timezone_set('Asia/Kolkata');

    $ogPageUrl = $ogImageBaseUrl . "";

    if (!isset($ogDescription)) {
        $ogDescription = "";
    }
    if (!isset($ogImage) || $ogImage == "") {
        $ogImage = $ogImageDefaultUrl;
    } else {
        $ogImage = $ogImageBaseUrl . $ogImage;
    }
    ?>

    <?php
    $blogQuery = "SELECT * FROM BLOGS_DETAILS_RMM ORDER BY Event_Date ASC";
    $blogresult = mysqli_query($con, $blogQuery);

    ?>
    <meta name="author" content="RMM TECHNOLOGIES">
    <meta name="keywords" content="<?php echo $pageMeta; ?>">
    <meta name="description" content=" <?php echo $ogDescription .  " " . $pageMetaDescription; ?>">

    <meta property="og:title" content="<?php echo $defaultOGTitle; ?>" />
    <meta property="og:description" content="<?php echo $defaultOGDescription; ?>" />
    <meta property="og:url" content="<?php echo $ogPageUrl; ?>" />
    <meta property="og:image" content="<?php echo $ogImage; ?>" />
    <meta property="og:image:secure_url" content="<?php echo $ogImage; ?>" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo $coName; ?>" />

    <link rel="canonical" href="index.php" />

    <link rel='dns-prefetch' href='http://cdn.jsdelivr.net/' />
    <link rel='dns-prefetch' href='http://cdnjs.cloudflare.com/' />
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo $folderPath ?>assets/css/dist/block-library/style.min326e.css?ver=1742220897' type='text/css' media='all' />

    <link id='classic-theme-styles-inline-css' type='text/css' href='<?php echo $folderPath ?>assets/css/classic-theme-styles-inline-css.css'>

    <link rel='stylesheet' type='text/css' id='global-styles-inline-css' href='<?php echo $folderPath ?>assets/css/global-styles-inline-css.css' media='all' />

    <link rel='stylesheet' id='dashicons-css' href='<?php echo $folderPath ?>assets/css/dashicons.minf7a6.css?ver=1733908486' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-genericons-css' href='<?php echo $folderPath ?>assets/plugins/megamenu-pro/icons/genericons/genericons/genericons4f7f.css?ver=1742220251' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-fontawesome-css' href='<?php echo $folderPath ?>assets/plugins/megamenu-pro/icons/fontawesome/css/font-awesome.min32a1.css?ver=1742220249' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-fontawesome5-css' href='<?php echo $folderPath ?>assets/plugins/megamenu-pro/icons/fontawesome5/css/all.mind222.css?ver=1742220250' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-fontawesome6-css' href='<?php echo $folderPath ?>assets/plugins/megamenu-pro/icons/fontawesome6/css/all.min4f7f.css?ver=1742220251' type='text/css' media='all' />
    <link rel='stylesheet' id='global-style-css' href='<?php echo $folderPath ?>assets/themes/dataiku/slice/dist/css/style.mine508.css?ver=1754311671' type='text/css' media='all' />

    <script type="text/javascript" src="<?php echo $folderPath ?>assets/themes/dataiku/slice/assets/js/libs/jquery.min1e93.js?ver=1744898817" id="jquery-js"></script>
    <script type="text/javascript" src="<?php echo $folderPath ?>assets/cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min0af8.js?ver=5.12.2" id="lottie-js"></script>

    <link rel="icon" href="<?php echo $folderPath; ?>assets/images/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $folderPath; ?>assets/images/logo.png" />
    <link rel="icon" href="<?php echo $folderPath ?>assets/images/logo.png" sizes="32x32" />
    <link rel="icon" href="<?php echo $folderPath ?>assets/images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo $folderPath ?>assets/images/logo.png" />

    <link rel="stylesheet" href="<?php echo $folderPath ?>assets/css/fontawesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $folderPath ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" id="wp-custom-css" href="<?php echo $folderPath ?>assets/css/custom.css" type="text/css" media="all">

    <noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
        </style>
    </noscript>

    <link rel="stylesheet" href="<?php echo $folderPath ?>assets/css/banner.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo $folderPath ?>assets/css/custom.css" type="text/css" media="all" />

</head>

<body class="">

<div id="custom-preloader">
  <span class="custom-loader"></span>
</div>

    <div class="wrapper">

        <?php $menuMode = "1";
        include($folderPath . "Components/menus.php"); ?>

        <main class="main">