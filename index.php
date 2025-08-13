<?php
    $folderPath = "";
    $pageTitle = "Home";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Home";

    include($folderPath . "Components/header.php");
?>

<?php $bannerMode = "1"; include($folderPath . "Components/banner.php"); ?>

<div class="center-xs container-2025 mr-auto ml-auto">
    <div class="row-2025 center-xs">
        <div class="col-xs-10 pt-16 mt-56">
            <div class="row-2025 center-xs">
                <div class="col-xs-10">
                    <h1 class="pb-16 pt-16 font-64 pt-24">
                        <?php echo $introText ?>
                </div>
            </div>
            <p> <?php echo $intropara ?></p>

            <div class="row-2025 center-xs mb-24 mt-40">
                <div class="col-xs-6">

                    <div id="link-one">
                        <img class="vidyard-player-embed" data-uuid="rFW4SfsabR7C8PGUeHoV6N" data-v="4" data-type="lightbox">
                        </img>
                    </div>
                    <a href="<?php echo $folderPath ?>Solutions/"
                        class="button dataiku-new-2025-button mr-16 font-18 mob-header-buttons-solid hp-header-main nav_dropdown_feature_content">Explore Our Solutions</a>

                    <a class="learn-more-text-only uppercase ml-16 mob-header-buttons hp-header-second"
                        href="<?php echo $folderPath ?>Contact-Us/" target="_self">Work With Us</a>

                </div>
            </div>

        </div>
    </div>
</div>

<?php $clientMode = "1"; include($folderPath . "Components/clients.php"); ?>

<?php $serviceMode = "5"; include($folderPath . "Components/services.php"); ?>
<?php $serviceMode = "1"; include($folderPath . "Components/services.php"); ?>
<?php $serviceMode = "2"; include($folderPath . "Components/services.php"); ?>
<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>
<?php $counterMode = "1"; include($folderPath . "Components/counter.php"); ?>
<?php $testimonialMode = "1"; include($folderPath . "Components/testimonial.php"); ?>
<?php $blogMode = "2"; include($folderPath . "Components/blog.php"); ?>
<?php $hookMode = "1"; include($folderPath . "Components/hooks.php"); ?>

<?php include($folderPath . "Components/footer.php"); ?>