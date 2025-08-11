<?php
    $folderPath = "../../";
    $pageTitle = "EPM Solutions";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "EPM Solutions";

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
        <!-- Left Content: Text -->
        <div class="six columns right40 hero-intro">
            <h1 class="top40 font30">
                EPM Solutions
            </h1>
            <p class="top40 font20">
                Enterprise Performance Management, Business Intelligence, and Reporting. EPM encompasses the processes of planning, measuring, and optimizing business results for enterprise organizations.
            </p>

            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquire Now
                </a>
            </div>
        </div>

        <!-- Right Content: Image -->
        <div class="six columns top10 pad-mob80-top">
            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/epm.jpg" alt="EPM Solutions">
            </div>
        </div>
    </div>
</section>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    EPM Solutions — Driving Strategic Financial Performance
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <div class="container product-key-capability-flex padtb padlr">
        <div class="item box-shadow">
            <div class="info">
                <h3>Planning, Budgeting and Forecasting</h3>
                <p>Deliver accurate and agile financial plans that align with your strategic business goals.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Financial Consolidation and Close</h3>
                <p>Accelerate the financial close process while ensuring compliance and transparency.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Account Reconciliations</h3>
                <p>Automate reconciliations to reduce errors, save time, and improve audit readiness.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Profitability and Cost Management</h3>
                <p>Gain insight into cost structures and profitability to support smarter decisions.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Narrative Reporting</h3>
                <p>Combine data with context-driven narratives for enhanced internal and external reporting.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Enterprise Data Integration</h3>
                <p>Unify and streamline data from multiple sources for more accurate and consistent reporting.</p>
            </div>
        </div>
    </div>

</div>

<div class="center-xs container-2025 mr-auto ml-auto mt-56" style="clear:both;">
    <h3 class="text-left pb-48 mobie-pl40">Explore Our EPM Solutions</h3>

    <!-- EPM On-Premise -->
    <div class="solution-row row-2025 start-xs middle-xs mb-64">
        <div class="col-xs-12 col-md-6">
            <img src="<?php echo $folderPath ?>assets/images/background/epm1.png" alt="EPM On-Premise" class="solution-img" />
        </div>
        <div class="col-xs-12 col-md-6 pl-64">
            <h4 class="pb-8">Oracle EPM/BI On-Premise</h4>
            <p class="pb-16">
                Oracle Hyperion Essbase, Planning, Financial Management, Strategic Finance, Profitability & Cost Management,
                Financial Close Management, Account Reconciliation Manager, Data Relationship Management, Tax Provision,
                Financial Reporting, Disclosure Management, Shared Services, FDMEE/FDQM, ODI, and OBIEE.
            </p>
        </div>
    </div>

    <!-- EPM Cloud -->
    <div class="solution-row row-2025 start-xs middle-xs reverse-columns mb-64">
        <div class="col-xs-12 col-md-6 pl-64">
            <h4 class="pb-8">Oracle EPM/BI Cloud</h4>
            <p class="pb-16">
                Enterprise Planning Cloud (EPBCS/PBCS), Financial Consolidation and Close (FCCS), Profitability and Cost Management Cloud (PCMCS),
                Analytics Cloud (OACS), Autonomous Analytics Cloud (OAACS), Account Reconciliation Cloud (ARCS),
                Tax Reporting Cloud (HTRCS), Enterprise Data Management Cloud (EDMC), Performance Reporting Cloud (EPRCS),
                Cloud Data Management (DM), BI Cloud (BICS), and Identity Cloud (IDCS).
            </p>
        </div>
        <div class="col-xs-12 col-md-6">
            <img src="<?php echo $folderPath ?>assets/images/background/epm2.png" alt="EPM Cloud" class="solution-img" />
        </div>
    </div>
</div>

<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>