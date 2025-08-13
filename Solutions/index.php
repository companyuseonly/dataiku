<?php
    $folderPath = "../";
    $pageTitle = "Solutions";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Solutions";

    include($folderPath . "Components/header.php");
?>

<section data-bg="<?php echo $folderPath ?>assets/images/background/2149241213.jpg" class="page-title js-color-change rocket-lazyload">
    <span class="overlay"></span>
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <!-- Breadcrumb NavXT 7.4.1 -->
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?php echo $folderPath ?>index.php" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span></li>
                <li class="post post-page current-item"><span class="post post-page current-item"><?php echo $coName . " " . $thisPage ?></span></li>
            </ul>
        </div>
    </div>
    <!--breadcrumbs-->

    <div class="container">
        <div class="holder">
            <h1 class="bot20"><?php echo $thisPage ?></h1>
        </div>
    </div>
</section>

<section class="margin-top-160 mob8">
    <div class="container updated mob8">
        <div class="six columns right40 hero-intro">
            <h1 class="top40 font30">
                Our Solutions
            </h1>
            <p class="top40 font20">
    RESURGENT offers expert solutions in data analytics, cloud-based ERP, enterprise performance management, and digital transformation technologies like AI, IoT, and blockchain to help businesses improve efficiency, agility, and growth.
            </p>

            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquiry Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">

            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/2150041849.jpg" alt="RESURGENT">
            </div>

        </div>
    </div>
</section>

<div class="padtb"></div>

<?php $serviceMode = "1"; include($folderPath . "Components/services.php"); ?>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    Our Solutions Offerings
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- Data and Analytics (DNA) -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/data.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Solutions/Data-Analytics/">Data and Analytics (DNA)</a>
                    </h3>
                    <p>Delivering advanced analytics, big data management, integrated and digital analytics, and Analytics as a Service (AaaS) to maximize business value and ROI.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Solutions/Data-Analytics/" target="_self">
                        <span class="icon"></span>
                        Learn More About Data and Analytics
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ERP -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/erp.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Solutions/ERP/">ERP</a>
                    </h3>
                    <p>Oracle cloud suite delivering seamless processes and a single source of truth for financials, supply chain, procurement, project management, risk, and human capital management.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Solutions/ERP/" target="_self">
                        <span class="icon"></span>
                        Learn More About ERP
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- EPM -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/epm.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Solutions/EPM/">EPM</a>
                    </h3>
                    <p>Enterprise Performance Management covering planning, budgeting, forecasting, financial consolidation, profitability analysis, and narrative reporting.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Solutions/EPM/" target="_self">
                        <span class="icon"></span>
                        Learn More About EPM
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Digital Transformation -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/digitaltrasform.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Solutions/Digital-Transformation/">Digital Transformation</a>
                    </h3>
                    <p>Helping enterprises embrace blockchain, AI/ML, IoT, and VR/AR to innovate business models, products, services, and customer experiences.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Solutions/Digital-Transformation/" target="_self">
                        <span class="icon"></span>
                        Learn More About Digital Transformation
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $hookMode = "2"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>