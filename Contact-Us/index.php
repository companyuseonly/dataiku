<?php
    $folderPath = "../";
    $pageTitle = "Contact Us";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Contact Us";
    
    include($folderPath . "Components/header.php");
?>

<section data-bg="<?php echo $folderPath ?>assets/images/background/2386.jpg" class="page-title js-color-change rocket-lazyload" style="">
    <span class="overlay" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.4),rgba(0,0,0,0.2));"></span>
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <!-- Breadcrumb NavXT 7.4.1 -->
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to <?php echo $coName ?>." href="<?php echo $folderPath ?>index.php" class="home"><span property="name"><?php echo $coName ?></span></a>
                        <meta property="position" content="1">
                    </span></li>
                <li class="post post-page current-item"><span class="post post-page current-item"><?php echo $thisPage ?></span></li>
            </ul>
        </div>
    </div>
    <!--breadcrumbs-->

    <div class="container">
        <div class="holder">
            <h1 class="bot20"><?php echo $thisPage ?></h1>
            <span style="font-size: 25px !important; line-height: 35px;">
                <!-- <p class="bot10">
                <p>Unlock the Power of Technology</p>
                </p> -->
            </span>

        </div>
    </div>
</section>


<?php include($folderPath . "Components/footer.php"); ?>