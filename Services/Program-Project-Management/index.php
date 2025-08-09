<?php
    $folderPath = "../../";
    $pageTitle = "Program & Project Management Services";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Program & Project Management Services";

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

<section class="margin-top-160  mob8">
    <div class="container updated mob8">
        <div class="six columns right40 hero-intro">
            <h1 class="top40 font30">
                Managed Services
            </h1>
            <p class="top40 font20">
                Our Managed Services help you reduce risk, enhance compliance, and control costs with a fit-for-purpose
                approach. We integrate industry best practices, focus on stakeholder alignment, and ensure value is tracked
                and delivered faster — giving your business the stability and agility it needs to grow.
            </p>
            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquire Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">

            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/Managed-Services.jpg" alt="<?php echo $coName ?>">
            </div>

        </div>
    </div>
</section>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    Managed Services — Expertise That Scales With You
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- product-item -->
    <div class="container product-key-capability-flex padtb padlr">
        <div class="item box-shadow">
            <div class="info">
                <h3>Reduced Risk & Enhanced Compliance</h3>
                <p>Ensuring services meet strict compliance standards while minimizing operational risks.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Fixed Costs Aligned with Your Budget</h3>
                <p>Transparent pricing structure designed to fit your financial planning.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Fit for Purpose Approach</h3>
                <p>Tailored solutions aligned with your unique business objectives and operations.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Industry Best Practices Integrated with Core</h3>
                <p>Adopting proven methods to ensure reliable, high-quality service delivery.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Focus on Stakeholder Engagement/Alignment</h3>
                <p>Maintaining clear communication and alignment across all stakeholders.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Value Tracked & Realized at Greater Speed</h3>
                <p>We monitor, measure, and optimize service performance for faster business results.</p>
            </div>
        </div>
    </div>

</div>

<?php $serviceMode = "5"; include($folderPath . "Components/services.php"); ?>

<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>