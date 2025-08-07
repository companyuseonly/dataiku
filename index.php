<?php
$folderPath = "";
$pageTitle = "Dataiku | The Universal AI Platform™ ";
$pageMeta = "";
$pageDescription = "";
$thisPage = "Dataiku | The Universal AI Platform™ ";

include($folderPath . "Components/header.php");
?>

<section class="with-banner" >
    <div data-bg="<?php echo $folderPath ?>assets/uploads/2025/06/desktop-1-min.png"
        class="center-xs container-2025 mr-auto ml-auto mt-108 hide-tab-mobile rocket-lazyload"
        style="  background-size: cover; background-position: center; background-repeat: no-repeat; height: 300px;">
        <div class="row-2025 center-xs">
            <div class="col-xs-12 pt-16 mt-108">
                <div class="row-2025 center-xs">
                    <div class="col-xs-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-bg="<?php echo $folderPath ?>assets/uploads/2025/06/Mobile-1-min.png"
        class="center-xs container-2025 mr-auto ml-auto mt-80 stack-tabs rocket-lazyload"
        style="  background-size: cover; background-position: center; background-repeat: no-repeat; height: 250px; ">
        <div class="row-2025 center-xs  mt-104">
            <div class="col-xs-12 pt-16 mt-104">
                <div class="row-2025 center-xs">
                    <div class="col-xs-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="center-xs container-2025 mr-auto ml-auto">
    <div class="row-2025 center-xs">
        <div class="col-xs-10 pt-16 mt-56">
            <div class="row-2025 center-xs">
                <div class="col-xs-10">
                    <h1 class="pb-16 pt-16 font-64 pt-24">
                        The Universal AI Platform™<br />
                        for Orchestrating Enterprise AI </h1>
                </div>
            </div>
            <p>Unlock the creation of analytics, models, & agents that people trust — with the control you need to
                scale.</p>

            <div class="row-2025 center-xs mb-24 mt-40">
                <div class="col-xs-6">

                    <div id="link-one">
                        <img class="vidyard-player-embed" data-uuid="rFW4SfsabR7C8PGUeHoV6N" data-v="4" data-type="lightbox">
                        </img>
                    </div>
                    <a href="#/"
                        class="button dataiku-new-2025-button mr-16 font-18 mob-header-buttons-solid hp-header-main nav_dropdown_feature_content"
                        onclick="launchLightbox('rFW4SfsabR7C8PGUeHoV6N')">See it in Action</a>

                    <a class="learn-more-text-only uppercase ml-16 mob-header-buttons hp-header-second"
                        href="<?php echo $folderPath ?>product/get-started/" target="_self">Start Building</a>

                </div>
            </div>

        </div>
    </div>
</div>

<?php $clientMode = "1"; include($folderPath . "Components/clients.php"); ?>

<div class="center-xs container-2025 mr-auto ml-auto mt-48 mb-24 pb-24">
    <div class="row-2025-special">
        <div class="col-xs">
            <div class="row-2025-special">
                <a data-bg="<?php echo $folderPath ?>assets/uploads/2025/04/Teal-1.png"
                    href="<?php echo $folderPath ?>#" target="_blank"
                    class="col-xs p-24 custom-bg three-cta-hover hp-ctas nav_dropdown_feature_content light-text-cta rocket-lazyload"
                    style="  text-align: left; background-repeat: no-repeat; background-position: center; background-size: cover; display: flex; flex-direction: column;">
                    <p class="pb-16"> Dataiku Is a Leader for the Fourth Time</p>
                    <span class="learn-more-home uppercase" href="<?php echo $folderPath ?>#"
                        target="_blank">
                        <span class="icon2"></span>Get the Gartner Report </span>
                </a>
            </div>
        </div>
        <div class="col-xs">
            <div class="row-2025-special">
                <a data-bg="<?php echo $folderPath ?>assets/uploads/2025/04/Yellow.png"
                    href="<?php echo $folderPath ?>stories/detail/rolls-royce/" target="_self"
                    class="col-xs p-24 custom-bg three-cta-hover hp-ctas nav_dropdown_feature_content dark-text-cta rocket-lazyload"
                    style="  text-align: left; background-repeat: no-repeat; background-position: center; background-size: cover; display: flex; flex-direction: column;">
                    <p class="pb-16"> Transforming Rolls-Royce Operations</p>
                    <span class="learn-more-home-dark uppercase" href="<?php echo $folderPath ?>stories/detail/rolls-royce/"
                        target="_self">
                        <span class="icon2"></span>SEE HOW: DATAIKU + DELOITTE </span>
                </a>
            </div>
        </div>
        <div class="col-xs">
            <div class="row-2025-special">
                <a data-bg="<?php echo $folderPath ?>assets/uploads/2025/04/Teal-2.png"
                    href="<?php echo $folderPath ?>#" target="_blank"
                    class="col-xs p-24 custom-bg three-cta-hover hp-ctas nav_dropdown_feature_content light-text-cta rocket-lazyload"
                    style="  text-align: left; background-repeat: no-repeat; background-position: center; background-size: cover; display: flex; flex-direction: column;">
                    <p class="pb-16"> Building Agentic Applications at Scale</p>
                    <span class="learn-more-home uppercase" href="<?php echo $folderPath ?>#"
                        target="_blank">
                        <span class="icon2"></span>READ THE O’REILLY TECH GUIDE </span>
                </a>
            </div>
        </div>
    </div>
</div>

<?php $serviceMode = "1"; include($folderPath . "Components/services.php"); ?>
<?php $serviceMode = "2"; include($folderPath . "Components/services.php"); ?>
<?php $serviceMode = "3"; include($folderPath . "Components/services.php"); ?>
<?php $counterMode = "1"; include($folderPath . "Components/counter.php"); ?>
<?php $testimonialMode = "1"; include($folderPath . "Components/testimonial.php"); ?>
<?php $blogMode = "1"; include($folderPath . "Components/blog.php"); ?>
<?php $hookMode = "1"; include($folderPath . "Components/hooks.php"); ?>



<?php include($folderPath . "Components/footer.php"); ?>