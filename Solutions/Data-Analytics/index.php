<?php
    $folderPath = "../../";
    $pageTitle = "Data Analytics Solutions";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Data Analytics Solutions";

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
                        typeof="WebPage" title="Go to Solutions" href="../index.php" class="post post-page"><span
                            property="name">Solutions</span></a>
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
                Data and Analytics (DNA)
            </h1>
            <p class="top40 font20">
                DNA is the largest practice at Resurgent bringing decades of experience focused on providing high value and ROI to clients in Advanced Analytics, Information Management and Big Data, Integrated and Digital Analytics, and Analytics as a Service (AaaS).
            </p>
            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquire Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">
            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/data-analytics.jpg" alt="<?php echo $coName ?>">
            </div>
        </div>
    </div>
</section>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    Data and Analytics (DNA) — Driving Data-Driven Success
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- product-item -->
    <div class="container product-key-capability-flex padtb padlr">
        <div class="item box-shadow">
            <div class="info">
                <h3>Advanced Analytics</h3>
                <p>Leveraging predictive, prescriptive, and descriptive analytics to generate actionable insights and optimize business outcomes.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Information Management and Big Data</h3>
                <p>Managing large-scale data ecosystems ensuring quality, security, accessibility, and compliance across the enterprise.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Integrated and Digital Analytics</h3>
                <p>Combining multiple data sources and advanced visualization techniques to enable comprehensive decision-making.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Analytics as a Service (AaaS)</h3>
                <p>Providing scalable, cloud-based analytics solutions to deliver flexible and cost-effective business intelligence.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Data Governance and Compliance</h3>
                <p>Ensuring data accuracy, privacy, and regulatory compliance through robust governance frameworks.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Data Visualization and Reporting</h3>
                <p>Transforming complex data sets into intuitive, interactive dashboards and reports for strategic insights.</p>
            </div>
        </div>
    </div>

</div>

<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>