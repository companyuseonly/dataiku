<?php
    $folderPath = "../";
    $pageTitle = "About Us";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "About Us";
    
    include($folderPath . "Components/header.php");
?>

<section data-bg="<?php echo $folderPath ?>assets/images/background/2386.jpg" class="page-title js-color-change rocket-lazyload" style="">
    <span class="overlay" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.4),rgba(0,0,0,0.2));"></span>
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <!-- Breadcrumb NavXT 7.4.1 -->
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?php echo $folderPath ?>index.php" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                    </span></li>
                <li class="post post-page current-item"><span class="post post-page current-item">About <?php echo $coName ?></span></li>
            </ul>
        </div>
    </div>
    <!--breadcrumbs-->

    <div class="container">
        <div class="holder">
            <h1 class="bot20">About <?php echo $coName ?></h1>
            <span>
                <p class="bot10">
                <p class="breadcrumb-para">Unlock the Power of Technology</p>
                </p>
            </span>

        </div>
    </div>
</section>

<div class="career-page padlr">

    <!--career-info-->
    <div class="container-fullwidth top40">
        <div class="container bot10">
            <div class="five columns top80 bot40">
                <div class="circle-green-new"></div>
                <h2 class="circle-text">Our Story</h2>
                <div class="eight columns left40">
                    <h3 class="quote-one">
                        <?php echo $coName ?> is a <br />global leader <br />in business consulting
                    </h3>
                </div>
            </div>
            <div class="seven columns pad-top-100-careers bot40">
                <p class="top80">
                <p>Founded in <?php echo $yearStarted ?>, <?php echo $coName ?> has been empowering organizations worldwide with innovative consulting, IT solutions, and enterprise applications.</p>
                <p>&nbsp;</p>
                <p>Our journey started as Leading Edge Technology Services (India) Pvt. Ltd., growing steadily to become a trusted partner to clients across Middle East, Europe, Americas, and APAC. We combine deep industry expertise with a commitment to excellence and innovation.</p>
                <p>&nbsp;</p>
                <p>At <?php echo $coName ?>, we believe in inspiring and enabling businesses to thrive by delivering tailored solutions that drive measurable impact and lasting value.</p>
                <p>&nbsp;</p>
                </p>
            </div>

        </div>
    </div>

    <!-- big numbers -->
    <div class="container-fullwidth bot40">
        <div class="container bot10">
            <div class="twelve columns top60 bot40" style="display: flex; justify-content: space-around; text-align: center; flex-wrap: wrap;">
                <div class="four columns" style="flex: 1; min-width: 200px;">
                    <p class="bot10 big-numbers-careers" style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem;">
                        <?php echo $happyclient . "+" ?> <span class="font24"></span>
                    </p>
                    <p class="bold-text center-text-screen-sm" style="font-weight: 600; margin-bottom: 0;">
                        Clients Served Worldwide
                    </p>
                </div>
                <div class="four columns" style="flex: 1; min-width: 200px;">
                    <p class="bot10 big-numbers-careers" style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem;">
                        <?php echo date("Y") - $yearStarted . "+" ?> <span class="font24"></span>
                    </p>
                    <p class="bold-text center-text-screen-sm" style="font-weight: 600; margin-bottom: 0;">
                        Years in Consulting & Technology
                    </p>
                </div>
                <div class="four columns" style="flex: 1; min-width: 200px;">
                    <p class="bot10 big-numbers-careers" style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem;">
                        <?php echo $skilledRate . "%" ?> <span class="font24"></span>
                    </p>
                    <p class="bold-text center-text-screen-sm" style="font-weight: 600; margin-bottom: 0;">
                        Skilled Rate & Repeat Business
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- big numbers -->

</div>

<section class="industry-section career-page padlr padtb">
    <div class="container">
        <!-- Industries Title -->
        <h5 class="section-subtitle ">INDUSTRIES</h5>
        <h2 class="section-title">Sectors We Serve</h2>

        <!-- Industries Buttons -->
        <div class="industry-buttons">
            <button class="industry-btn">
                <span class="industry-icon banking-icon"></span> Banking
            </button>
            <button class="industry-btn">
                <span class="industry-icon automobile-icon"></span> Automobile
            </button>
            <button class="industry-btn">
                <span class="industry-icon fmcg-icon"></span> FMCG
            </button>
            <button class="industry-btn">
                <span class="industry-icon oilgas-icon"></span> Oil & Gas
            </button>
            <button class="industry-btn">
                <span class="industry-icon insurance-icon"></span> Insurance
            </button>
            <button class="industry-btn">
                <span class="industry-icon government-icon"></span> Government
            </button>
            <button class="industry-btn">
                <span class="industry-icon healthcare-icon"></span> Healthcare
            </button>
            <button class="industry-btn">
                <span class="industry-icon realestate-icon"></span> Real Estate
            </button>
            <button class="industry-btn">
                <span class="industry-icon media-icon"></span> Media
            </button>
            <button class="industry-btn">
                <span class="industry-icon telecom-icon"></span> Telecom
            </button>
        </div>

    </div>
</section>

<?php $serviceMode = "4"; include($folderPath . "Components/services.php"); ?>

<section class="industry-section career-page padlr">
    <div class="container">
        <!-- Domain Expertise Title -->
        <h5 class="section-subtitle verticals-subtitle">VERTICALS</h5>
        <h2 class="section-title domain-title">Our Domain Expertise</h2>

        <!-- Domain Expertise Buttons -->
        <div class="domain-buttons">
            <button class="domain-btn">OPERATIONS</button>
            <button class="domain-btn">FINANCE</button>
            <button class="domain-btn">SUPPLY CHAIN</button>
            <button class="domain-btn">SALES & MARKETING</button>
            <button class="domain-btn">HUMAN RESOURCE</button>
            <button class="domain-btn">INFORMATION TECHNOLOGY</button>
        </div>
    </div>
</section>

<div class="bot60 top40 padlr">
    <div class="container">

        <div class="ten columns">
            <div class="circle-yellow-new"></div>
            <h2 class="circle-text">
                Founder's Message
            </h2>
        </div>
        <div class="two columns"></div>

        <div class="six columns">
            <div class="ten columns left40">
                <h3 class="quote-one">
                    "When I embarked on this journey, I had a dream—a dream of creating something meaningful that positively impacts the world."</h3>
                <h4 class="top20 quote-name-empower-us">— Lakshminarayanan S</h4>
            </div>
        </div>

        <div class="six columns">
            <p class="bot20">
                Today, I am proud to say that this dream has become a reality. We believe in pushing boundaries, challenging the status quo, and redefining what is possible.
                Driven by excellence and deep commitment, we deliver exceptional products and services beyond business success.
            </p>
            <p class="bot20">
                Our mission is to inspire and empower individuals, organizations, and communities. We provide innovative solutions, foster meaningful connections, and champion social and environmental responsibility to create a better future together.
            </p>
        </div>

    </div>

</div>

<?php $hookMode = "3"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>