<?php
  if (!isset($hookMode)) {
    $hookMode = "1";
  }
  
  if ($hookMode == "1") {
?>

  <section class="mt-104">
    <div data-bg="<?php echo $folderPath ?>assets/images/background/0_21.png"
      class="container updated ml-auto mr-auto rocket-lazyload"
      style=" background-size: cover; background-position: center; background-repeat: no-repeat;">

      <div class="row-2025 center-xs">
        <div class="col-xs-8 pt-80 pb-80">
          <h2 class="pb-8 pt-16 white-font">Ready to Start Building? <br />Get Started with <?php echo $coName; ?></h2>
          <div class="row-2025 center-xs mb-40 mt-24">
            <div class="col-xs-6">

              <a class="button dataiku-new-2025-button-white font-18 hp-footer-main nav_dropdown_feature_content"
                href="<?php echo $folderPath ?>Contact-Us/" target="_self">Start building </a>

              <a class="learn-more-text-only-white uppercase pl-16 hp-footer-second nav_dropdown_feature_content"
                href="<?php echo $folderPath ?>Solutions/" target="_self">View Our Solutions </a>

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
              srcset="<?php echo $folderPath ?>assets/images/background/demo-min.png">
            <img class="parallax-bg hide-mobile" data-scroll-speed="15"
              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
              alt="" data-lazy-src="<?php echo $folderPath ?>assets/images/background/demo-min.png"><noscript><img
                class="parallax-bg hide-mobile" data-scroll-speed="15"
                src="<?php echo $folderPath ?>assets/images/background/demo-min.png" alt=""></noscript>
          </picture>
          <picture class="hide-desktop">
            <source class="hide-mobile hide-desktop" media="(max-width:768px)"
              srcset="<?php echo $folderPath ?>assets/images/background/demo-mobile-min.png">
            <img class="parallax-bg hide-desktop" data-scroll-speed="15"
              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
              alt=""
              data-lazy-src="<?php echo $folderPath ?>assets/images/background/demo-mobile-min.png"><noscript><img
                class="parallax-bg hide-desktop" data-scroll-speed="15"
                src="<?php echo $folderPath ?>assets/images/background/demo-mobile-min.png" alt=""></noscript>
          </picture>

        </div>
        <div class="in-line-survey-content">
          <div class="in-line-survey-media-demo">

          </div>
          <div class="in-line-survey-text">
            <h3> Enquiry Our Services </h3>
            <p>Discover how our Managed Services, Program & Project Management, Business Engagement, Technology Delivery, and Infrastructure Management can help your business achieve greater efficiency, reduced risks, and measurable results.</p>
            <div class="buttons-holder">
              <a href="<?php echo $folderPath ?>Contact-Us/" target="_self" class="button medium">
                Contact Us Now
              </a>
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

            <a href="<?php echo $folderPath ?>Contact-Us/" target="_self" class="button medium">Get Started</a>

            <a href="<?php echo $folderPath ?>Contact-Us/" target="_self"
              class="white button medium">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  }
  if ($hookMode == "4") {
?>

  <section class="in-line-survey-section pad-mob48-top margin-top-80">

    <div class="container updated">
      <div class="in-line-survey-inner">
        <div class="in-line-survey-bg-demo">
          <picture class="hide-mobile">
            <source class="hide-mobile" media="(max-width:768px)"
              srcset="<?php echo $folderPath ?>assets/images/background/banner-AIML.png">
            <img class="parallax-bg hide-mobile" data-scroll-speed="15"
              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
              alt="" data-lazy-src="<?php echo $folderPath ?>assets/images/background/banner-AIML.png"><noscript><img
                class="parallax-bg hide-mobile" data-scroll-speed="15"
                src="<?php echo $folderPath ?>assets/images/background/banner-AIML.png" alt=""></noscript>
          </picture>
          <picture class="hide-desktop">
            <source class="hide-mobile hide-desktop" media="(max-width:768px)"
              srcset="<?php echo $folderPath ?>assets/images/background/banner-AIML-copy.png">
            <img class="parallax-bg hide-desktop" data-scroll-speed="15"
              src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
              alt="" data-lazy-src="<?php echo $folderPath ?>assets/images/background/banner-AIML-copy.png"><noscript><img
                class="parallax-bg hide-desktop" data-scroll-speed="15"
                src="<?php echo $folderPath ?>assets/images/background/banner-AIML-copy.png" alt=""></noscript>
          </picture>

        </div>
        <div class="in-line-survey-content">
          <div class="in-line-survey-media-demo">

          </div>
          <div class="in-line-survey-text">
            <h3> Try Dataiku </h3>
            <p>Time is a data science team’s most precious resource, so what are you waiting for? Start your
              14-day free trial of Dataiku.</p>
            <div class="buttons-holder">
              <a href="<?php echo $folderPath ?>Contact-Us" target="_blank" class="button medium"> Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php } ?>