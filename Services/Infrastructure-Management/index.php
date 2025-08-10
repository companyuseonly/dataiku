<?php
    $folderPath = "../../";
    $pageTitle = "Infrastructure Management Services";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Infrastructure Management Services";

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
                Infrastructure Management
            </h1>
            <p class="top40 font20">
                Our Infrastructure Management services ensure a robust, scalable, and secure foundation for your 
                enterprise systems. From readiness assessments to disaster recovery, we manage end-to-end infrastructure 
                needs — enabling operational continuity, faster deployment, and long-term performance.
            </p>
            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquire Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">
            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/Infrastructure-Management.jpg" alt="<?php echo $coName ?>">
            </div>
        </div>
    </div>
</section>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    Infrastructure Management — Enabling Scalable and Secure Operations
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- product-item -->
    <div class="container product-key-capability-flex padtb padlr">
        <div class="item box-shadow">
            <div class="info">
                <h3>Environment Management</h3>
                <p>Provisioning and maintaining stable, isolated environments for development, testing, and production.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Readiness Assessment</h3>
                <p>Evaluating infrastructure preparedness to ensure seamless project execution and go-live success.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Infrastructure Build</h3>
                <p>Designing, provisioning, and configuring the hardware and software components required for scalable systems.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Disaster Recovery</h3>
                <p>Implementing failover strategies and recovery processes to ensure business continuity under any circumstances.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Instance Management</h3>
                <p>Controlling and maintaining multiple instances across environments to support performance and security needs.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Service Introduction</h3>
                <p>Seamless transition of new or updated services into production with minimal disruption to users.</p>
            </div>
        </div>
    </div>

</div>

<?php $serviceMode = "5"; include($folderPath . "Components/services.php"); ?>

<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>