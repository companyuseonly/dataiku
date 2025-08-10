<?php
    $folderPath = "../../";
    $pageTitle = "Technology Delivery Services";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Technology Delivery Services";

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
                Technology Delivery
            </h1>
            <p class="top40 font20">
                Our Technology Delivery services focus on streamlining systems, applying industry best practices, and 
                executing solutions with precision. We ensure governance, performance optimization, and agile-driven 
                execution — helping your business achieve faster, scalable outcomes with minimal disruption.
            </p>
            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquire Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">
            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/Technology-Delivery.jpg" alt="<?php echo $coName ?>">
            </div>
        </div>
    </div>
</section>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    Technology Delivery — Scalable Execution, Measurable Outcomes
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- product-item -->
    <div class="container product-key-capability-flex padtb padlr">
        <div class="item box-shadow">
            <div class="info">
                <h3>Industry Best Practices Delivery</h3>
                <p>Leveraging proven frameworks and methodologies to ensure consistent, high-quality implementations.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Existing Process and System Rationalization</h3>
                <p>Analyzing and optimizing current processes and technologies to eliminate redundancy and enhance efficiency.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Solution Governance</h3>
                <p>Ensuring adherence to standards, security, and oversight through comprehensive solution governance models.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Adherence to Approach</h3>
                <p>Delivering solutions in line with predefined architectures, frameworks, and strategic guidelines.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Optimized Performance</h3>
                <p>Designing and implementing solutions to maximize system uptime, scalability, and responsiveness.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Agile Methodologies</h3>
                <p>Driving iterative, collaborative, and adaptive development cycles for faster and more flexible delivery.</p>
            </div>
        </div>
    </div>

</div>

<?php $serviceMode = "5"; include($folderPath . "Components/services.php"); ?>

<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>