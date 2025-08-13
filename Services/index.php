<?php
    $folderPath = "../";
    $pageTitle = "Services";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Services";

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
                Discover <?php echo $coName ?> Services
            </h1>
            <p class="top40 font20">
                We offer a comprehensive range of services including Managed Services, Program & Project Management,
                Business Engagement, Technology Delivery, and Infrastructure Management — all designed to
                reduce risk, enhance compliance, and deliver value at greater speed.
            </p>
            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquiry Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">

            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/2150041849.jpg" alt="<?php echo $coName ?>">
            </div>

        </div>
    </div>
</section>

<div class="padtb"></div>

<?php $serviceMode = "2"; include($folderPath . "Components/services.php"); ?>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    Our Service Offerings
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- Managed Services -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/managed-services.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Services/Managed-Services/">Managed Services</a>
                    </h3>
                    <p>Reduced risk, enhanced compliance, and fixed costs aligned with your budget. Our fit-for-purpose approach integrates industry best practices while focusing on stakeholder engagement to deliver value faster.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Services/Managed-Services/" target="_self">
                        <span class="icon"></span>
                        Learn More About Managed Services
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Program & Project Management -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/PPM.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Services/Program-Project-Management/">Program & Project Management</a>
                    </h3>
                    <p>From project planning to quality management, we ensure issue and risk tracking, benefit realization, and smooth delivery — keeping your programs on schedule and within budget.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Services/Program-Project-Management/" target="_self">
                        <span class="icon"></span>
                        Learn More About Program & Project Management
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Engagement -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/business-engagement.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Services/Business-Engagement/">Business Engagement</a>
                    </h3>
                    <p>We manage stakeholder relationships, align global business requirements, and deliver effective communications, ensuring smooth collaboration and a clear vision for the future.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Services/Business-Engagement/" target="_self">
                        <span class="icon"></span>
                        Learn More About Business Engagement
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Technology Delivery -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/technology-delivery.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Services/Technology-Delivery/">Technology Delivery</a>
                    </h3>
                    <p>We deliver optimized performance through process rationalization, solution governance, and agile methodologies — ensuring your technology investments deliver measurable business value.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Services/Technology-Delivery/" target="_self">
                        <span class="icon"></span>
                        Learn More About Technology Delivery
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Infrastructure Management -->
    <div class="product-key-capability">
        <div class="holder content pad-mob16-top">
            <div data-bg="<?php echo $folderPath ?>assets/images/background/infrastructure-management.jpg" class="image bg-radius rocket-lazyload"></div>
            <div class="text box-shadow mob8 pad-mob16-bot">
                <div class="info mob16 pad-mob16">
                    <h3>
                        <a href="<?php echo $folderPath ?>Services/Infrastructure-Management/">Infrastructure Management</a>
                    </h3>
                    <p>We provide environment setup, readiness assessments, disaster recovery, and service introductions — ensuring your infrastructure is always reliable, secure, and ready for growth.</p>
                    <a class="learn-more uppercase" href="<?php echo $folderPath ?>Services/Infrastructure-Management/" target="_self">
                        <span class="icon"></span>
                        Learn More About Infrastructure Management
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $hookMode = "2"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>