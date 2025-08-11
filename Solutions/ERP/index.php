<?php
    $folderPath = "../../";
    $pageTitle = "ERP Solutions";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "ERP Solutions";

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
                ERP Solutions
            </h1>
            <p class="top40 font20">
                Oracle’s comprehensive cloud-based ERP suite streamlines your business processes with a unified system for financials, procurement, supply chain, risk, and human capital management—helping you increase agility and respond faster to market changes.
            </p>
            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquire Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">
            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/erp.jpg" alt="<?php echo $coName ?>">
            </div>
        </div>
    </div>
</section>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    ERP Solutions — Streamlining Your Business Operations
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- product-item -->
    <div class="container product-key-capability-flex padtb padlr">
        <div class="item box-shadow">
            <div class="info">
                <h3>Financial Management</h3>
                <p>Comprehensive financial planning, budgeting, and accounting to ensure accuracy and compliance.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Procurement</h3>
                <p>Automated purchasing processes to optimize supplier relationships and control costs.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Project Portfolio Management</h3>
                <p>Effective planning and oversight of projects to maximize resource utilization and deliver value.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Risk Management</h3>
                <p>Identifying, assessing, and mitigating risks across your business processes to safeguard operations.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Supply Chain Management</h3>
                <p>End-to-end supply chain visibility and control for better inventory and distribution management.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Human Capital Management</h3>
                <p>Streamlining HR functions, talent management, and workforce planning to enhance employee engagement.</p>
            </div>
        </div>
    </div>

</div>

<div class="center-xs container-2025 mr-auto ml-auto mt-56" style="clear:both;">
    <h3 class="text-left pb-48 mobie-pl40">Explore Our Enterprise Solutions</h3>

    <!-- START SOLUTION BLOCK -->
    <div class="solution-row row-2025 start-xs middle-xs mb-64">
        <div class="col-xs-12 col-md-6">
            <img src="<?php echo $folderPath ?>assets/images/background/erp1.png" alt="Supply Chain Management" class="solution-img" />
        </div>
        <div class="col-xs-12 col-md-6 pl-64">
            <h4 class="pb-8">Supply Chain Management</h4>
            <p class="pb-16">
                Procurement, Inventory and Costing, Order Management, Logistics, Manufacturing,
                Supply Chain Planning, Maintenance, PLM and Product MDM, IoT and Blockchain, Collaboration and B2B.
            </p>
         </div>
    </div>

    <!-- Alternate layout -->
    <div class="solution-row row-2025 start-xs middle-xs reverse-columns mb-64">
        <div class="col-xs-12 col-md-6 pl-64">
            <h4 class="pb-8">Project Portfolio Management</h4>
            <p class="pb-16">
                Cost Management, Billing and Revenue, Planning and Forecasting, Management and Scheduling,
                Resource Management, Grants Management, Task Management, Mobile Task, Time and Progress.
            </p>
        </div>
        <div class="col-xs-12 col-md-6">
            <img src="<?php echo $folderPath ?>assets/images/background/erp2.png" alt="Project Portfolio Management" class="solution-img" />
        </div>
    </div>

    <div class="solution-row row-2025 start-xs middle-xs mb-64">
        <div class="col-xs-12 col-md-6">
            <img src="<?php echo $folderPath ?>assets/images/background/erp3.png" alt="Human Capital Management" class="solution-img" />
        </div>
        <div class="col-xs-12 col-md-6 pl-64">
            <h4 class="pb-8">Human Capital Management</h4>
            <p class="pb-16">
                Core HCM, HR Helpdesk, Recruit Cloud, Learn Cloud, Talent Management, Compensation,
                Time and Labour, Global Payroll, Strategic Workforce Planning.
            </p>
         </div>
    </div>

    <div class="solution-row row-2025 start-xs middle-xs reverse-columns mb-64">
        <div class="col-xs-12 col-md-6 pl-64">
            <h4 class="pb-8">Financials</h4>
            <p class="pb-16">
                General Ledger, Payables and Assets, Receivables and Collections, Expense Management,
                Bill and Credit Management, Revenue Management, Accounting Hub, Subscription Management,
                Joint Venture Management.
            </p>
         </div>
        <div class="col-xs-12 col-md-6">
            <img src="<?php echo $folderPath ?>assets/images/background/erp4.png" alt="Financials" class="solution-img" />
        </div>
    </div>

    <div class="solution-row row-2025 start-xs middle-xs mb-64">
        <div class="col-xs-12 col-md-6">
            <img src="<?php echo $folderPath ?>assets/images/background/erp5.png" alt="Procurement" class="solution-img" />
        </div>
        <div class="col-xs-12 col-md-6 pl-64">
            <h4 class="pb-8">Procurement</h4>
            <p class="pb-16">
                Supplied Qualification Management, Sourcing, Procurement Contracts, Self Service Procurement,
                Mobile Self Service Procurement, Purchasing, Supplied Portal.
            </p>
          </div>
    </div>

    <div class="solution-row row-2025 start-xs middle-xs reverse-columns mb-64">
        <div class="col-xs-12 col-md-6 pl-64">
            <h4 class="pb-8">Risk Management</h4>
            <p class="pb-16">
                Secure Role Design, Pre-Built SOD Controls, Data Privacy Controls, Access Certifications,
                Payment/Fraud Controls, Config/Audit Controls, SOX Certifications, ERM Workflows.
            </p>
         </div>
        <div class="col-xs-12 col-md-6">
            <img src="<?php echo $folderPath ?>assets/images/background/erp6.png" alt="Risk Management" class="solution-img" />
        </div>
    </div>
</div>

<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>