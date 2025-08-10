<?php
    $folderPath = "../../";
    $pageTitle = "Digital Transformation Innovation";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Digital Transformation Innovation";

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
                Digital Transformation
            </h1>
            <p class="top40 font20">
                Empower your business to thrive in the digital age. We help you adopt cutting-edge technologies like AI, IoT, Blockchain, and VR/AR to innovate, optimize operations, and enhance customer experiences.
            </p>
            <div class="cta-buttons top40 bot10">
                <a class="button border secondary-btn" href="<?php echo $folderPath; ?>Contact-Us" target="_self">
                    Enquire Now
                </a>
            </div>
        </div>

        <div class="six columns top10 pad-mob80-top">
            <div class="main-button-products-heading rocket-lazyload">
                <img src="<?php echo $folderPath ?>assets/images/background/digital-transformation.jpg" alt="<?php echo $coName ?>">
            </div>
        </div>
    </div>
</section>

<div class="products-holder margin-top-160 mob8">

    <div class="container updated">
        <div class="row">
            <div class="eight columns right40">
                <h3 class="h2">
                    Digital Transformation — Navigating the Future of Business
                </h3>
            </div>
            <div class="four columns"></div>
        </div>
    </div>

    <!-- product-item -->
    <div class="container product-key-capability-flex padtb padlr">
        <div class="item box-shadow">
            <div class="info">
                <h3>Blockchain</h3>
                <p>Implementing decentralized, secure digital ledgers to enhance transparency, trust, and efficiency in transactions.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Artificial Intelligence and Machine Learning</h3>
                <p>Leveraging AI and ML to automate processes, gain predictive insights, and improve decision-making.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Internet of Things (IoT)</h3>
                <p>Connecting devices and systems for real-time data collection, monitoring, and smarter business operations.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Virtual and Augmented Reality (VR/AR)</h3>
                <p>Creating immersive digital experiences to enhance training, marketing, and product visualization.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Cloud Computing</h3>
                <p>Enabling scalable, flexible infrastructure and services to accelerate innovation and reduce IT costs.</p>
            </div>
        </div>
        <div class="item box-shadow">
            <div class="info">
                <h3>Digital Strategy and Consulting</h3>
                <p>Guiding organizations through digital transformation journeys with strategic planning and roadmap development.</p>
            </div>
        </div>
    </div>

</div>

<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>