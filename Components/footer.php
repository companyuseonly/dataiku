

</main>

<footer class="footer">
  <!-- footer menu -->
  <div id="menu-footer-primary" class="footer-nav">
    
    <div id="" class="footer-para">
      <h5 class="bold"><b>About <?php echo $coName; ?></b></h5>
      <p class=""><?php echo $footerText; ?></p>
    </div>

    <div id=""
      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children footer-accordion-item"><span
        class="footer-label drop-label">Services</span>
      <ul class="nav-list">
        <li id="menu-item-54804" class="menu-item menu-item-type-post_type menu-item-object-page"><a
            href="<?php echo $folderPath ?>Services/Managed-Services/">Managed Services</a></li>
        <li id="menu-item-54807" class="menu-item menu-item-type-post_type menu-item-object-page"><a
            href="<?php echo $folderPath ?>Services/Program-Project-Management/">Program & Project Management</a></li>
        <li id="menu-item-54808" class="menu-item menu-item-type-post_type menu-item-object-page"><a
            href="<?php echo $folderPath ?>Services/Business-Engagement/">Business Engagement</a></li>
        <li id="menu-item-54809" class="menu-item menu-item-type-post_type menu-item-object-page"><a
            href="<?php echo $folderPath ?>Services/Technology-Delivery/">Technology Delivery</a></li>
        <li id="menu-item-54810" class="menu-item menu-item-type-post_type menu-item-object-page"><a
            href="<?php echo $folderPath ?>Services/Infrastructure-Management/">Infrastructure Management</a></li>
      </ul>
    </div>

    <div id=""
      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children footer-accordion-item"><span
        class="footer-label drop-label">Solutions</span>
      <ul class="nav-list">
        <li id="menu-item-43497" class="menu-item menu-item-type-post_type menu-item-object-page"><a
            href="<?php echo $folderPath ?>Solutions/Data-Analytics/">Data and Analytics (DNA)</a></li>
        <li id="menu-item-43498" class="menu-item menu-item-type-post_type menu-item-object-page"><a
            href="<?php echo $folderPath ?>Solutions/ERP/">ERP</a></li>
        <li id="menu-item-43499" class="menu-item menu-item-type-post_type menu-item-object-page"><a
            href="<?php echo $folderPath ?>Solutions/EPM/">EPM</a></li>
        <li id="menu-item-48920" class="menu-item menu-item-type-custom menu-item-object-custom"><a
            href="<?php echo $folderPath ?>Solutions/Digital-Transformation/">Digital Transformation</a></li>
      </ul>
    </div>

    <div id=""
      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children footer-accordion-item">
      <h6 class="footer-partner-title">Partners</h6>
      <img src="<?php echo $folderPath ?>assets/images/clients/O-Gold-Partner.png" class="img-fluid footer-partner" alt="Partners Logo">
    </div>

  </div>

  <!-- footer bottom -->
  <div class="footer-bottom">
    
    <div  class="copy">
      <span>
        Crafted by <a href="https://www.rmmindia.com/" class="crafted" target="_blank">RMM TECHNOLOGIES</a>
      </span>
    </div>

        <div class="copy">

      <p>&copy; <?php echo date('Y') . ' ' . $coNameFull ?>. All rights reserved.</p>
    </div>

    <ul class="socials">
      <?php if (!empty($fbPageLink)): ?>
      <li><a href="<?php echo $fbPageLink ?>" target="_blank" alt="facebook">
          <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10 18">
            <path fill="#1b2031" transform="translate(-83 -9291)"
              d="M92.445 9291.004l-2.334-.004c-2.622 0-4.317 1.739-4.317 4.43v2.042h-2.347a.367.367 0 00-.367.367v2.96c0 .203.164.367.367.367h2.347v7.467c0 .203.164.367.367.367h3.062a.367.367 0 00.367-.367v-7.467h2.744a.367.367 0 00.367-.367l.001-2.96a.368.368 0 00-.367-.367H89.59v-1.731c0-.832.198-1.255 1.282-1.255h1.573a.367.367 0 00.367-.367v-2.748a.367.367 0 00-.367-.367z" />
          </svg> </a></li>
      <?php endif; ?>
      <?php if (!empty($linPageUrl)): ?>
      <li><a href="<?php echo $linPageUrl ?>" target="_blank" alt="linkedIn">
          <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19 18">
            <path fill="#1b2031" transform="translate(-123 -9291)"
              d="M123.24 9308.976h4.027v-12.116h-4.028zm2.04-17.956c-1.378 0-2.28.904-2.28 2.093 0 1.163.875 2.094 2.226 2.094h.027c1.405 0 2.28-.93 2.28-2.094-.027-1.189-.875-2.093-2.253-2.093zm11.874 5.556c-2.14 0-3.096 1.177-3.631 2.002v.039h-.027c.008-.012.019-.026.027-.04v-1.717h-4.029c.055 1.138 0 12.116 0 12.116h4.03v-6.766c0-.362.027-.723.133-.982.291-.724.954-1.473 2.066-1.473 1.458 0 2.04 1.111 2.04 2.74v6.481h4.029v-6.947c0-3.721-1.988-5.453-4.638-5.453z" />
          </svg> </a></li>
      <?php endif; ?>
      <?php if (!empty($twitterPageLink)): ?>
      <li><a href="<?php echo $twitterPageLink ?>" target="_blank" alt="twitter">
          <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 21 18">
            <path fill="#1b2031" transform="translate(-172 -9291)"
              d="M192.562 9293.782c-.714.36-1.546.601-2.497.721.832-.48 1.546-1.321 1.902-2.403-.832.48-1.783.841-2.734 1.082-.832-.841-1.902-1.322-3.09-1.322-2.378 0-4.28 1.922-4.28 4.325 0 .36 0 .721.118.962-3.566-.12-6.776-1.923-8.916-4.446a4.182 4.182 0 00-.594 2.163c0 1.442.713 2.763 1.902 3.604-.713 0-1.308-.24-1.902-.48 0 2.042 1.427 3.844 3.448 4.205-.357.12-.714.12-1.19.12-.237 0-.594 0-.831-.12.594 1.682 2.14 2.884 4.041 3.004-1.426 1.201-3.328 1.802-5.35 1.802-.356 0-.712 0-1.069-.12 1.902 1.201 4.16 1.922 6.538 1.922 7.965 0 12.245-6.488 12.245-12.135v-.6a6.875 6.875 0 002.259-2.284z" />
          </svg> </a></li>
      <?php endif; ?>
      <?php if (!empty($youtubeLink)): ?>
      <li><a href="<?php echo $youtubeLink ?>" target="_blank" alt="youtube">
          <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 16">
            <path fill="#1b2031" transform="translate(-222 -9292)"
              d="M244.284 9293.542c-.632-1.123-1.317-1.33-2.712-1.408-1.393-.095-4.897-.134-7.933-.134-3.041 0-6.547.04-7.939.132-1.392.08-2.078.285-2.715 1.41-.65 1.121-.985 3.053-.985 6.454v.011c0 3.386.335 5.333.985 6.442.637 1.123 1.322 1.327 2.714 1.422 1.393.081 4.899.129 7.94.129 3.036 0 6.54-.048 7.935-.128 1.395-.095 2.08-.298 2.711-1.421.656-1.11.988-3.056.988-6.442v-.013c0-3.402-.332-5.334-.99-6.455z" />
            <path fill="#fff" transform="translate(-222 -9292)" d="M230.73 9303.64v-8l6.667 4z" />
          </svg> </a></li>
      <?php endif; ?>
    </ul>
  

  </div>
</footer>



</div>
<!-- wapper end -->

<script type="text/javascript" id="rtrar.appLocal-js-extra">
  /* <![CDATA[ */
  var rtafr = { "rules": "" };
  /* ]]> */
</script>
<script type="text/javascript" src="<?php echo $folderPath ?>assets/plugins/real-time-auto-find-and-replace/assets/js/rtafar.local2924.js?ver=1742220280" id="rtrar.appLocal-js"></script>
<script type="text/javascript" src="<?php echo $folderPath ?>assets/cdn.jsdelivr.net/npm/%40fancyapps/ui%404.0/dist/fancybox.umd.js" id="fancybox4-js"></script>
<!-- <script type="text/javascript" src="<?php echo $folderPath ?>assets/play.vidyard.com/embed/v4.js" id="play-vidyard-js"></script> -->
<script type="text/javascript" src="<?php echo $folderPath ?>assets/themes/dataiku/slice/dist/js/global.mine213.js?ver=1754311673" id="global-script-js"></script>
<script type="text/javascript" src="<?php echo $folderPath ?>assets/plugins/real-time-auto-find-and-replace/assets/js/rtafar.app.min2924.js?ver=1742220280" id="rtrar.app-js"></script>
<script type="text/javascript" src="<?php echo $folderPath ?>assets/js/hoverIntent.mind513.js?ver=1733908495" id="hoverIntent-js"></script>
<script type="text/javascript" src="<?php echo $folderPath ?>assets/plugins/megamenu/js/maxmegamenu88fb.js?ver=1742220255" id="megamenu-js"></script>
<script type="text/javascript" src="<?php echo $folderPath ?>assets/plugins/megamenu-pro/assets/public32a1.js?ver=1742220249" id="megamenu-pro-js"></script>
<!-- <script type="text/javascript" src="../www.gartner.com/peer-insights/vendor-portal/public/Widget/js/widget.js"> </script> -->
<script src="<?php echo $folderPath ?>assets/cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js" integrity="sha512-jEnuDt6jfecCjthQAJ+ed0MTVA++5ZKmlUcmDGBv2vUI/REn6FuIdixLNnQT+vKusE2hhTk2is3cFvv5wA+Sgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript" id="flying-scripts">
  const loadScriptsTimer = setTimeout(loadScripts, 5000 * 1000); const userInteractionEvents = ['click', 'mousemove', 'keydown', 'touchstart', 'touchmove', 'wheel']; userInteractionEvents.forEach(function (event) { window.addEventListener(event, triggerScriptLoader, { passive: !0 }) }); function triggerScriptLoader() { loadScripts(); clearTimeout(loadScriptsTimer); userInteractionEvents.forEach(function (event) { window.removeEventListener(event, triggerScriptLoader, { passive: !0 }) }) }
    function loadScripts() { document.querySelectorAll("script[data-type='lazy']").forEach(function (elem) { elem.setAttribute("src", elem.getAttribute("data-src")) }) }
</script>

<script data-no-minify="1" async src="<?php echo $folderPath ?>assets/plugins/rocket-lazy-load/assets/js/16.1/lazyload.min.js"></script>
<script src="<?php echo $folderPath ?>assets/js/custom.js"></script>

</body>

</html>