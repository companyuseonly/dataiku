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

<?php
  }
  if ($hookMode == "2") {
?>

  <section class="in-line-survey-section pad-mob48-top margin-top-80">

    <div class="container updated">
      <div class="in-line-survey-inner">
        <div class="in-line-survey-bg-demo">
          <picture class="hide-mobile">
            <source class="hide-mobile" media="(max-width:768px)"
              srcset="<?php echo $folderPath ?>assets/uploads/2023/10/demo-min.png">
            <img class="parallax-bg hide-mobile" data-scroll-speed="15"
              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
              alt="" data-lazy-src="<?php echo $folderPath ?>assets/uploads/2023/10/demo-min.png"><noscript><img
                class="parallax-bg hide-mobile" data-scroll-speed="15"
                src="<?php echo $folderPath ?>assets/uploads/2023/10/demo-min.png" alt=""></noscript>
          </picture>
          <picture class="hide-desktop">
            <source class="hide-mobile hide-desktop" media="(max-width:768px)"
              srcset="<?php echo $folderPath ?>assets/uploads/2023/10/demo-mobile-min.png">
            <img class="parallax-bg hide-desktop" data-scroll-speed="15"
              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
              alt=""
              data-lazy-src="<?php echo $folderPath ?>assets/uploads/2023/10/demo-mobile-min.png"><noscript><img
                class="parallax-bg hide-desktop" data-scroll-speed="15"
                src="<?php echo $folderPath ?>assets/uploads/2023/10/demo-mobile-min.png" alt=""></noscript>
          </picture>

        </div>
        <div class="in-line-survey-content">
          <div class="in-line-survey-media-demo">

          </div>
          <div class="in-line-survey-text">
            <h3> Watch a Demo </h3>
            <p>Discover Dataiku&#039;s end to end capabilities by exploring a real life use case
              around environmental impact - in just 13 minutes.</p>
            <div class="buttons-holder">
              <a href="<?php echo $folderPath ?>dataiku-demo/" target="_self" class="button medium"> WATCH
                NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  }
  if ($hookMode == "3") {
?>

<section class="footer-cta-section margin-top-80 has-animation">
                <div class="container updated">
                    <div class="footer-cta-inner">
                        <div class="footer-cta-media"
                            data-src-path="<?php echo $folderPath ?>assets/themes/dataiku/slice/dist/json/footer_1.json">
                        </div>
                        <div class="footer-cta-text">
                            <h3>Ready to Dive In? Start Your Free Trial Today</h3>
                            <div class="buttons-holder">

                                <a href="<?php echo $folderPath ?>get-started/" target="_self" class="button medium">Get Started</a>

                                <a href="<?php echo $folderPath ?>home/contact-us/" target="_self"
                                    class="white button medium">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
</section>

<?php } ?>