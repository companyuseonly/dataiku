<?php
    $folderPath = "../../";
    $pageTitle = "Business Engagement Services";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Business Engagement Services";

    include($folderPath . "Components/header.php");
?>

<div class="breadcrumbs dark bot40">
    <div class="container updated">
        <ul>
            <!-- Breadcrumb NavXT 7.4.1 -->
            <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                        title="Go to Dataiku." href="<?php echo $folderPath ?>index.php" class="home"><span
                            property="name">Home</span></a>
                    <meta property="position" content="1">
                </span></li>
            <li class="post post-page"><span property="itemListElement" typeof="ListItem"><a property="item"
                        typeof="WebPage" title="Go to Services" href="../index.php" class="post post-page"><span
                            property="name">Services</span></a>
                    <meta property="position" content="2">
                </span></li>
            <li class="post post-page current-item"><span class="post post-page current-item"><?php echo $thisPage ?></span></li>
        </ul>
    </div>
</div>

<section class="margin-top-160 mob8">
    <div class="container updated mob8">
        <div class="six columns right40 hero-intro">
            <h1 class="top40 font30">
                Business Engagement
            </h1>
            <p class="top40 font20">
                Our Business Engagement services bridge the gap between business objectives and technology execution. 
                Through stakeholder management, global requirements alignment, and structured communications, 
                we ensure collaboration is streamlined and future-state goals are clearly defined and achieved.
            </p>
            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquire Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">
            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/Business-Engagement.jpg" alt="<?php echo $coName ?>">
            </div>
        </div>
    </div>
</section>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    Business Engagement — Aligning Strategy and Execution
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- product-item -->
    <div class="container product-key-capability-flex padtb padlr">
        <div class="item box-shadow">
            <div class="info">
                <h3>Stakeholder Management</h3>
                <p>Engaging key stakeholders to ensure alignment, transparency, and ownership across initiatives.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Global Business Requirements</h3>
                <p>Capturing and consolidating business needs across regions to drive scalable and compliant solutions.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Collaboration Hub Program</h3>
                <p>Creating centralized frameworks and tools to foster cross-functional collaboration and visibility.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Program Communications</h3>
                <p>Delivering clear and consistent communication strategies to keep stakeholders informed and engaged.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Future State View</h3>
                <p>Defining a strategic vision and operating model to guide long-term transformation and planning.</p>
            </div>
        </div>
    </div>

</div>

<?php $serviceMode = "5"; include($folderPath . "Components/services.php"); ?>

<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>