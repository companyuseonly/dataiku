<?php
if (!isset($hookMode)) {
    $hookMode = "1";
}

if ($hookMode == "1") {
?>

  <section class="mt-104">
    <div data-bg="<?php echo $folderPath ?>assets/uploads/2025/04/0_21.png"
      class="container updated ml-auto mr-auto rocket-lazyload"
      style=" background-size: cover; background-position: center; background-repeat: no-repeat;">

      <div class="row-2025 center-xs">
        <div class="col-xs-8 pt-80 pb-80">
          <h2 class="pb-8 pt-16 white-font">Ready to Start Building? <br />Get Your Free Trial Today</h2>
          <div class="row-2025 center-xs mb-40 mt-24">
            <div class="col-xs-6">

              <a class="button dataiku-new-2025-button-white font-18 hp-footer-main nav_dropdown_feature_content"
                href="<?php echo $folderPath ?>product/get-started/" target="_self">Start building </a>

              <a class="learn-more-text-only-white uppercase pl-16 hp-footer-second nav_dropdown_feature_content"
                href="<?php echo $folderPath ?>home/contact-us/" target="_self">Get in touch </a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php } ?>