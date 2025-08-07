
<!doctype html>
<html lang="en-US">

<head>
    
    <?php
        // require_once($folderPath . "Components/DBConfig.php");
        require_once($folderPath . "Components/configuration.php");
        $today = date("d-m-y");
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href="<?php echo $folderPath ?>assets/themes/dataiku/slice/dist/images/Favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&amp;display=swap" rel="stylesheet">


    <!-- FONT LINKS -->
    <link rel="stylesheet" href="<?php echo $folderPath ?>assets/use.typekit.net/hbm5eto.css">

    <!-- Links for Hubspot forms do not remove  -->
    <script charset="utf-8" type="text/javascript" src="<?php echo $folderPath ?>assets/js.hsforms.net/forms/v2.js"></script>

    <!-- OneTrust Cookies Consent Notice start for dataiku.com -->
    <script src="<?php echo $folderPath ?>assets/cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="0192ae34-7aea-7fb2-9a5c-e0dfdcb82f96"></script>
    <script type="text/javascript">
        function OptanonWrapper() {}
    </script>

    <script data-cfasync="false" src="<?php echo $folderPath ?>assets/client-registry.mutinycdn.com/personalize/client/0c9b21a0494cfe18.js"></script>

    <!-- WT1 tracker -->
    <script type="text/javascript" data-type="lazy" data-src="data:text/javascript;base64,DQogICAgdmFyIF93dDFRID0gX3d0MVEgfHwgW107DQogICAgX3d0MVEucHVzaChbInRyYWNrUGFnZSJdKTsNCiAgIChmdW5jdGlvbigpIHsNCiAgICAgICAgdmFyIHNjcmlwdCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NjcmlwdCcpOw0KICAgICAgICBzY3JpcHQuc3JjID0gIi8vdHJhY2tlci5kYXRhaWt1LmNvbS9qcy90cmFjay5qcyI7DQogICAgICAgIHNjcmlwdC50eXBlID0gJ3RleHQvamF2YXNjcmlwdCc7DQogICAgICAgIHNjcmlwdC5hc3luYyA9ICJ0cnVlIjsNCiAgICAgICAgdmFyIHNjcmlwdDAgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgic2NyaXB0IilbMF07DQogICAgICAgIHNjcmlwdDAucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoc2NyaXB0LCBzY3JpcHQwKTsNCiAgICB9KSgpOw0K"></script>


    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel="alternate" hreflang="en" href="index.html" />
    <link rel="alternate" hreflang="de" href="de/index.html" />
    <link rel="alternate" hreflang="ja" href="ja/index.html" />
    <link rel="alternate" hreflang="x-default" href="index.html" />
    <title><?php echo $thisPage . "::" . $coName ?></title>

    <meta name="description" content="Build, deploy, and manage data, analytics, and AI projects, realizing your Everyday AI vision with The Universal AI Platform™" />
    <link rel="canonical" href="index.html" />

    <link rel='dns-prefetch' href='http://cdn.jsdelivr.net/' />
    <link rel='dns-prefetch' href='http://play.vidyard.com/' />
    <link rel='dns-prefetch' href='http://cdnjs.cloudflare.com/' />
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo $folderPath ?>assets/css/dist/block-library/style.min326e.css?ver=1742220897' type='text/css' media='all' />

    <link id='classic-theme-styles-inline-css' type='text/css' href='<?php echo $folderPath ?>assets/css/classic-theme-styles-inline-css.css'  >

    <link rel='stylesheet' type='text/css' id='global-styles-inline-css' href='<?php echo $folderPath ?>assets/css/global-styles-inline-css.css' media='all' />

    <link rel='stylesheet' id='dashicons-css' href='<?php echo $folderPath ?>assets/css/dashicons.minf7a6.css?ver=1733908486' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-genericons-css' href='<?php echo $folderPath ?>assets/plugins/megamenu-pro/icons/genericons/genericons/genericons4f7f.css?ver=1742220251' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-fontawesome-css' href='<?php echo $folderPath ?>assets/plugins/megamenu-pro/icons/fontawesome/css/font-awesome.min32a1.css?ver=1742220249' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-fontawesome5-css' href='<?php echo $folderPath ?>assets/plugins/megamenu-pro/icons/fontawesome5/css/all.mind222.css?ver=1742220250' type='text/css' media='all' />
    <link rel='stylesheet' id='megamenu-fontawesome6-css' href='<?php echo $folderPath ?>assets/plugins/megamenu-pro/icons/fontawesome6/css/all.min4f7f.css?ver=1742220251' type='text/css' media='all' />
    <link rel='stylesheet' id='global-style-css' href='<?php echo $folderPath ?>assets/themes/dataiku/slice/dist/css/style.mine508.css?ver=1754311671' type='text/css' media='all' />

    <script type="text/javascript" src="<?php echo $folderPath ?>assets/themes/dataiku/slice/assets/js/libs/jquery.min1e93.js?ver=1744898817" id="jquery-js"></script>
    <script type="text/javascript" src="<?php echo $folderPath ?>assets/cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min0af8.js?ver=5.12.2" id="lottie-js"></script>
    <meta name="generator" content="WPML ver:4.7.1 stt:1,3,28;" />
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <link rel="icon" href="wp-content/uploads/2019/11/cropped-Dataiku_logo_circle-1-scaled-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="<?php echo $folderPath ?>assets/uploads/2019/11/cropped-Dataiku_logo_circle-1-scaled-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo $folderPath ?>assets/uploads/2019/11/cropped-Dataiku_logo_circle-1-scaled-1-180x180.png" />

    <link rel="stylesheet" id="wp-custom-css" href="<?php echo $folderPath ?>assets/css/custom.css" type="text/css" media="all">

    <!-- Segment Tracking Code -->
    <script data-type="lazy" data-src="data:text/javascript;base64,DQogICFmdW5jdGlvbigpe3ZhciBhbmFseXRpY3M9d2luZG93LmFuYWx5dGljcz13aW5kb3cuYW5hbHl0aWNzfHxbXTtpZighYW5hbHl0aWNzLmluaXRpYWxpemUpaWYoYW5hbHl0aWNzLmludm9rZWQpd2luZG93LmNvbnNvbGUmJmNvbnNvbGUuZXJyb3ImJmNvbnNvbGUuZXJyb3IoIlNlZ21lbnQgc25pcHBldCBpbmNsdWRlZCB0d2ljZS4iKTtlbHNle2FuYWx5dGljcy5pbnZva2VkPSEwO2FuYWx5dGljcy5tZXRob2RzPVsidHJhY2tTdWJtaXQiLCJ0cmFja0NsaWNrIiwidHJhY2tMaW5rIiwidHJhY2tGb3JtIiwicGFnZXZpZXciLCJpZGVudGlmeSIsInJlc2V0IiwiZ3JvdXAiLCJ0cmFjayIsInJlYWR5IiwiYWxpYXMiLCJkZWJ1ZyIsInBhZ2UiLCJvbmNlIiwib2ZmIiwib24iXTthbmFseXRpY3MuZmFjdG9yeT1mdW5jdGlvbih0KXtyZXR1cm4gZnVuY3Rpb24oKXt2YXIgZT1BcnJheS5wcm90b3R5cGUuc2xpY2UuY2FsbChhcmd1bWVudHMpO2UudW5zaGlmdCh0KTthbmFseXRpY3MucHVzaChlKTtyZXR1cm4gYW5hbHl0aWNzfX07Zm9yKHZhciB0PTA7dDxhbmFseXRpY3MubWV0aG9kcy5sZW5ndGg7dCsrKXt2YXIgZT1hbmFseXRpY3MubWV0aG9kc1t0XTthbmFseXRpY3NbZV09YW5hbHl0aWNzLmZhY3RvcnkoZSl9YW5hbHl0aWNzLmxvYWQ9ZnVuY3Rpb24odCxlKXt2YXIgbj1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCJzY3JpcHQiKTtuLnR5cGU9InRleHQvamF2YXNjcmlwdCI7bi5hc3luYz0hMDtuLnNyYz0iaHR0cHM6Ly9jZG4uc2VnbWVudC5jb20vYW5hbHl0aWNzLmpzL3YxLyIrdCsiL2FuYWx5dGljcy5taW4uanMiO3ZhciBhPWRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCJzY3JpcHQiKVswXTthLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKG4sYSk7YW5hbHl0aWNzLl9sb2FkT3B0aW9ucz1lfTthbmFseXRpY3MuU05JUFBFVF9WRVJTSU9OPSI0LjEuMCI7DQogIGFuYWx5dGljcy5sb2FkKCJ5M0Q1dEhaU29wUmtYa3dpaDY0Q1RhV1NmckhDa3V6VCIpOw0KICBhbmFseXRpY3MucGFnZSgpOw0KICB9fSgpOw0K"></script>


    <noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
        </style>
    </noscript>

    <link rel="stylesheet" href="assets/css/custom.css" type="text/css" media="all" />

</head>

<body class="">
<div class="wrapper">

<?php $menuMode = "1"; include($folderPath . "Components/menus.php"); ?>

<main class="main">