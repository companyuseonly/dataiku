<?php
    if (!isset($menuMode)) {
        $menuMode = "1";
    }
    
    if ($menuMode == "1") {
?>

    <div>
        <header class="header new-menu-zindex">
            <div class="top-items-postion parent top10">
                <!-- <div class="languages">
                    <a class="current">en</a>
                    <ul>
                        <li>
                            <a href="<?php echo $folderPath ?>de/">de</a>
                        </li>
                        <li>
                            <a href="<?php echo $folderPath ?>ja/">ja</a>
                        </li>
                    </ul>
                </div> -->
                <nav class="main-nav overflow">
                    <div class="search-panel parent">
                        <div class="search-bar" id="scroll-search">
                            <span class="hidesearch">
                                <script data-type="lazy"
                                    data-src="data:text/javascript;base64,CiAgICAgICAgICAgICAgICAgICAgKGZ1bmN0aW9uKCkgewogICAgICAgICAgICAgICAgICAgIHZhciBjeCA9ICc3MThkNTViOGUzZDg3MDVhNic7CiAgICAgICAgICAgICAgICAgICAgdmFyIGdjc2UgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTsKICAgICAgICAgICAgICAgICAgICBnY3NlLnR5cGUgPSAndGV4dC9qYXZhc2NyaXB0JzsKICAgICAgICAgICAgICAgICAgICBnY3NlLmFzeW5jID0gdHJ1ZTsKICAgICAgICAgICAgICAgICAgICBnY3NlLnNyYyA9ICdodHRwczovL2NzZS5nb29nbGUuY29tL2NzZS5qcz9jeD0nICsgY3g7CiAgICAgICAgICAgICAgICAgICAgdmFyIHMgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnc2NyaXB0JylbMF07CiAgICAgICAgICAgICAgICAgICAgcy5wYXJlbnROb2RlLmluc2VydEJlZm9yZShnY3NlLCBzKTsKICAgICAgICAgICAgICAgICAgICB9KSgpOwogICAgICAgICAgICAgICAgICAgIA=="></script>
                                <gcse:search></gcse:search>
                            </span>
                            <div id="search-results" class="results">
                            </div>
                        </div>

                        <div id="showsearch">

                            <div class="search-bar" id="scroll-mobile">
                                <span class="showsearch">
                                    <div class="navigation-block"></div>
                                    <script data-type="lazy"
                                        data-src="data:text/javascript;base64,CiAgICAgICAgICAgICAgICAgICAgKGZ1bmN0aW9uKCkgewogICAgICAgICAgICAgICAgICAgIHZhciBjeCA9ICc3MThkNTViOGUzZDg3MDVhNic7CiAgICAgICAgICAgICAgICAgICAgdmFyIGdjc2UgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTsKICAgICAgICAgICAgICAgICAgICBnY3NlLnR5cGUgPSAndGV4dC9qYXZhc2NyaXB0JzsKICAgICAgICAgICAgICAgICAgICBnY3NlLmFzeW5jID0gdHJ1ZTsKICAgICAgICAgICAgICAgICAgICBnY3NlLnNyYyA9ICdodHRwczovL2NzZS5nb29nbGUuY29tL2NzZS5qcz9jeD0nICsgY3g7CiAgICAgICAgICAgICAgICAgICAgdmFyIHMgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnc2NyaXB0JylbMF07CiAgICAgICAgICAgICAgICAgICAgcy5wYXJlbnROb2RlLmluc2VydEJlZm9yZShnY3NlLCBzKTsKICAgICAgICAgICAgICAgICAgICB9KSgpOwogICAgICAgICAgICAgICAgICAgIHZhciBidG4yID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3NlYXJjaCcpOwogICAgICAgICAgICAgICAgICAgIGZ1bmN0aW9uIHRvZ2dsZV92aXNpYmlsaXR5KGlkKSB7CiAgICAgICAgICAgICAgICAgICAgdmFyIGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChpZCk7CiAgICAgICAgICAgICAgICAgICAgaWYoZS5zdHlsZS5kaXNwbGF5ID09ICdibG9jaycpIHsKICAgICAgICAgICAgICAgICAgICBlLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7fQogICAgICAgICAgICAgICAgICAgIGVsc2UgewogICAgICAgICAgICAgICAgICAgICBlLnN0eWxlLmRpc3BsYXkgPSAnYmxvY2snOwogICAgICAgICAgICAgICAgICAgIH07CiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coJ2NsaWNrZWQnKTsKICAgICAgICAgICAgICAgICAgICAgcmV0dXJuOwogICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICA="></script>
                                    <gcse:search></gcse:search>
                                </span>

                                <div id="search-results" class="results">
                                </div>

                            </div>

                        </div>
                        <button class="close-btn">Close</button>
                    </div>

                </nav>
                <!-- <button class="toggle-search search-position" title="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19 18">
                        <g fill="#1b2031" transform="translate(-292 -166)" class="search-svg-fill">
                            <path class="search-svg-fill"
                                d="M304.853 178.26l.257-.257a.673.673 0 0 1 .943 0l4.114 4.114a.673.673 0 0 1 0 .943l-.257.257a.673.673 0 0 1-.943 0l-4.114-4.114a.673.673 0 0 1 0-.943z" />
                            <path class="search-svg-fill"
                                d="M306.57 173.714c0-3.343-2.743-6.085-6.086-6.085-3.343 0-6.085 2.742-6.085 6.085s2.742 6.086 6.085 6.086 6.086-2.743 6.086-6.086zm1.629 0a7.682 7.682 0 0 1-7.715 7.715 7.682 7.682 0 0 1-7.714-7.715 7.682 7.682 0 0 1 7.714-7.714 7.682 7.682 0 0 1 7.715 7.714z" />
                        </g>

                    </svg> </button> -->
            </div>
            <div class="top-links top10">
                <p class="top-nav-links parent top10 nav_secondary">
                    <a href="<?php echo $folderPath ?>Contact-Us/" target="_blank">Join <?php echo $coName ?></a>
                </p>
                <!-- <p class="top-nav-links parent top10 nav_secondary">
                    <a href="<?php echo $folderPath ?>learn/" target="_self">Learning Center</a>
                </p> -->
                <!-- <p class="top-nav-links parent top10 nav_secondary">
                    <a href="<?php echo $folderPath ?>#"
                        target="_blank">Sign in</a>
                </p> -->
            </div>
        </header>
    </div>

    <div>
        <div id="mega-menu-wrap-menu-1" class="mega-menu-wrap">
            <div class="mega-menu-toggle">
                <div class="mega-toggle-blocks-left">
                    <div class='mega-toggle-block mega-logo-block mega-toggle-block-1' id='mega-toggle-block-1'><a
                            class="mega-menu-logo" href="<?php echo $folderPath ?>index.php" target="_self"><img class="mega-menu-logo mega-menu-logo-org"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                data-lazy-src="<?php echo $folderPath ?>assets/images/logo.png" /><noscript><img
                                    class="mega-menu-logo mega-menu-logo-org" src="<?php echo $folderPath ?>assets/images/logo.png" /></noscript></a></div>
                </div>
                <div class="mega-toggle-blocks-center"></div>
                <div class="mega-toggle-blocks-right">
                    <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-2' id='mega-toggle-block-2'>
                        <button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button"
                            aria-expanded="false">
                            <span class="mega-toggle-animated-box">
                                <span class="mega-toggle-animated-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <ul id="mega-menu-menu-1" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="click"
                data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0"
                data-mobile-force-width="false" data-second-click="go" data-document-click="collapse"
                data-vertical-behaviour="standard" data-breakpoint="1200" data-unbind="true" data-mobile-state="collapse_all"
                data-mobile-direction="vertical" data-hover-intent-timeout="300" data-hover-intent-interval="100"
                data-sticky-enabled="true" data-sticky-desktop="true" data-sticky-mobile="true" data-sticky-offset="0"
                data-sticky-expand="false" data-sticky-expand-mobile="true" data-sticky-transition="false"
                data-overlay-desktop="false" data-overlay-mobile="false">
                <li
                    class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-current_page_item mega-menu-item-home mega-align-bottom-left mega-menu-flyout mega-hide-on-mobile mega-menu-item-34391'
                    id='mega-menu-item-34391'><a class='mega-menu-link mega-menu-logo' href='<?php echo $folderPath ?>index.php'><img
                            class='mega-menu-logo mega-svg mega-menu-logo-org' width='100' height='60'
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%2060'%3E%3C/svg%3E"
                            data-lazy-src="<?php echo $folderPath ?>assets/images/logo.png" /><noscript><img
                                class='mega-menu-logo mega-svg mega-menu-logo-org' width='100' height='60'
                                src='<?php echo $folderPath ?>assets/images/logo.png' /></noscript></a></li>
                <!-- <li
                    class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-34511'
                    id='mega-menu-item-34511'>
                    <div class="hide-google-search">

                        <script data-type="lazy"
                            data-src="data:text/javascript;base64,DQogICAgICAgICAgICAgICAgICAgIChmdW5jdGlvbigpIHsNCiAgICAgICAgICAgICAgICAgICAgdmFyIGN4ID0gJzcxOGQ1NWI4ZTNkODcwNWE2JzsNCiAgICAgICAgICAgICAgICAgICAgdmFyIGdjc2UgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTsNCiAgICAgICAgICAgICAgICAgICAgZ2NzZS50eXBlID0gJ3RleHQvamF2YXNjcmlwdCc7DQogICAgICAgICAgICAgICAgICAgIGdjc2UuYXN5bmMgPSB0cnVlOw0KICAgICAgICAgICAgICAgICAgICBnY3NlLnNyYyA9ICdodHRwczovL2NzZS5nb29nbGUuY29tL2NzZS5qcz9jeD0nICsgY3g7DQogICAgICAgICAgICAgICAgICAgIHZhciBzID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ3NjcmlwdCcpWzBdOw0KICAgICAgICAgICAgICAgICAgICBzLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGdjc2UsIHMpOw0KICAgICAgICAgICAgICAgICAgICB9KSgpOw0KICAgICAgICAgICAgICAgICAgICB2YXIgYnRuMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZWFyY2gnKTsNCiAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gdG9nZ2xlX3Zpc2liaWxpdHkoaWQpIHsNCiAgICAgICAgICAgICAgICAgICAgdmFyIGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChpZCk7DQogICAgICAgICAgICAgICAgICAgIGlmKGUuc3R5bGUuZGlzcGxheSA9PSAnYmxvY2snKSB7DQogICAgICAgICAgICAgICAgICAgIGUuc3R5bGUuZGlzcGxheSA9ICdub25lJzt9DQogICAgICAgICAgICAgICAgICAgIGVsc2Ugew0KICAgICAgICAgICAgICAgICAgICAgZS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsNCiAgICAgICAgICAgICAgICAgICAgfTsNCiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coJ2NsaWNrZWQnKTsNCiAgICAgICAgICAgICAgICAgICAgIHJldHVybjsNCiAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICA="></script>
                        <gcse:search></gcse:search>
                        <div id="search-results" class="results">
                        </div>
                    </div>
                </li> -->

              
                <li
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-hide-arrow mega-has-icon mega-icon-right mega-close-after-click mega-disable-link mega-menu-item-34393 parent top-16-menu nav_main'
                    id='mega-menu-item-34393'><a class="dashicons-arrow-down-alt2 mega-menu-link" tabindex="0" aria-expanded="false"
                        role="button">Services<span class="mega-indicator"></span></a>
                    <ul class="mega-sub-menu">
                        <li class='mega-menu-row mega-bot-32 bot-32' id='mega-menu-34393-0'>
                            <ul class="mega-sub-menu">
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34393-0-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-2'
                                            id='mega-menu-item-custom_html-2'>
                                            <div class="textwidget custom-html-widget"><a href="<?php echo $folderPath ?>Services/">
                                                    <div class='big-heading-hover-effect big-heading-menu-link'>
                                                        <div class='sub2'>
                                                            <p>Discover <?php echo $coName ?></p>
                                                        </div>
                                                        <div class='sub'>
                                                            <p>
                                                                Where everyone can create <br />ERP, EPM, DNA & IT 
                                                                <i class="fa fa-long-arrow-right" aria-hidden="true" style=" vertical-align: middle;"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </li>
                                        <!-- <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-37629 bot-8 nav_dropdown'
                                            id='mega-menu-item-37629'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/key-capabilities/">Dataiku Key Capabilities</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38960 bot-8 nav_dropdown'
                                            id='mega-menu-item-38960'><a class="mega-menu-link" href="<?php echo $folderPath ?>product/plugins/">Plugins and
                                                Connectors</a></li>
                                        <li
                                            class='mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38962 nav_dropdown'
                                            id='mega-menu-item-38962'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/plans-and-features/">Plans and Editions</a></li> -->
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34393-0-1'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-11'
                                            id='mega-menu-item-custom_html-11'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">Build With <?php echo $coName ?> - Core Services</p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-45245 bot-8 nav_dropdown'
                                            id='mega-menu-item-45245'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>Services/Managed-Services/">Managed Services</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38958 bot-8 nav_dropdown'
                                            id='mega-menu-item-38958'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>Services/Program-Project-Management/">Program & Project Management</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-55606 bot-8 nav_dropdown'
                                            id='mega-menu-item-55606'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>Services/Business-Engagement/">Business Engagement</a></li>
                                        
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34393-0-2'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-12'
                                            id='mega-menu-item-custom_html-12'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">
                                                    <?php echo $coName ?> - Tech Services
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38967 bot-8 nav_dropdown'
                                            id='mega-menu-item-38967'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>Services/Technology-Delivery/">Technology Delivery</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-55603 bot-8 nav_dropdown'
                                            id='mega-menu-item-55603'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>Services/Infrastructure-Management/">Infrastructure Management</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='mega-menu-row mega-top-row-nav-74 top-row-nav-74' id='mega-menu-34393-1'>
                            <ul class="mega-sub-menu">
                                <li
                                    class='mega-menu-column mega-limited-boarder-1 mega-top-16 mega-bot-8 mega-menu-columns-12-of-12 mega-hide-on-mobile limited-boarder-1 top-16 bot-8'
                                    id='mega-menu-34393-1-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-10'
                                            id='mega-menu-item-custom_html-10'>
                                            <div class="textwidget custom-html-widget"> <a href="<?php echo $folderPath ?>Contact-Us/"
                                                    class="learn-more-menu nav_dropdown_feature_content">
                                                    <div style="width: 180px; float:left; height:161px; padding-right:32px; padding-bottom:32px;">
                                                        <img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                            style="width:141px;" class="lazyloaded"
                                                            data-lazy-src="<?php echo $folderPath ?>assets/images/background/demo-thumbnail.png"><noscript><img
                                                                src="<?php echo $folderPath ?>assets/images/background/demo-thumbnail.png" style="width:141px;"
                                                                class="lazyloaded"></noscript>
                                                    </div>
                                                    <div style="width: 500px; float:right; ">
                                                        <p
                                                            style="font-size:16px; font-weight:600;  padding-top:32px; margin-bottom: 0px !important; color: #666666 !important;">
                                                            Get a complete overview of our services</p>
                                                        <span></span>
                                                        <p style="font-size:18px; font-weight:600; padding-left:30px">CONTACT US</p>
                                                    </div>
                                                </a></div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-hide-arrow mega-has-icon mega-icon-right mega-close-after-click mega-disable-link mega-menu-item-34394 parent top-16-menu nav_main'
                    id='mega-menu-item-34394'><a class="dashicons-arrow-down-alt2 mega-menu-link" tabindex="0" aria-expanded="false"
                        role="button">Solutions<span class="mega-indicator"></span></a>
                    <ul class="mega-sub-menu">
                        <li class='mega-menu-row mega-bot-32 bot-32' id='mega-menu-34394-0'>
                            <ul class="mega-sub-menu"> 
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-3-of-12 left-32 top-32'
                                            id='mega-menu-item-custom_html-2'>
                                            <div class="textwidget custom-html-widget"><a href="<?php echo $folderPath ?>Services/">
                                                    <div class='big-heading-hover-effect big-heading-menu-link'>
                                                        <div class='sub2'>
                                                            <p>Solutions of <?php echo $coName ?></p>
                                                        </div>
                                                        <div class='sub'>
                                                            <p>
                                                                Where everyone can create <br />ERP, EPM, DNA & IT 
                                                                <i class="fa fa-long-arrow-right" aria-hidden="true" style=" vertical-align: middle;"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </li>
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34394-0-0'>
                                    <ul class="mega-sub-menu">
                                        
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-15'
                                            id='mega-menu-item-custom_html-15'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">
                                                    <?php echo $coName ?> For Your Industry
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38972 bot-8 nav_dropdown'
                                            id='mega-menu-item-38972'><a class="mega-menu-link" href="<?php echo $folderPath ?>Solutions/Data-Analytics/">Data and Analytics (DNA)</a>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38973 bot-8 nav_dropdown'
                                            id='mega-menu-item-38973'><a class="mega-menu-link" href="<?php echo $folderPath ?>Solutions/Digital-Transformation-Innovation/">Digital Transformation & Innovation</a></li>
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34394-0-1'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-16'
                                            id='mega-menu-item-custom_html-16'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">
                                                    <?php echo $coName ?> For Your Department
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39045 bot-8 nav_dropdown'
                                            id='mega-menu-item-39045'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>Solutions/ERP/">Enterprise Resource Planning (ERP)</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39046 bot-8 nav_dropdown'
                                            id='mega-menu-item-39046'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>Solutions/EPM/">Enterprise Performance Management (EPM)</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='mega-menu-row mega-top-row-nav-74 top-row-nav-74' id='mega-menu-34394-1'>
                            <ul class="mega-sub-menu">
                                <li
                                    class='mega-menu-column mega-limited-boarder-1 mega-top-16 mega-bot-8 mega-menu-columns-12-of-12 mega-hide-on-mobile limited-boarder-1 top-16 bot-8'
                                    id='mega-menu-34394-1-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-9'
                                            id='mega-menu-item-custom_html-9'>
                                            <div class="textwidget custom-html-widget"> <a
                                                    href="<?php echo $folderPath ?>Solutions/"
                                                    class="learn-more-menu nav_dropdown_feature_content">
                                                    <div style="width: 180px; float:left; height:161px; padding-right:32px; padding-bottom:32px;">
                                                        <img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                            class="lazyloaded" style="width:141px;"
                                                            data-lazy-src="<?php echo $folderPath ?>assets/images/background/Enable-NBO-Recommendations.png"><noscript><img
                                                                src="<?php echo $folderPath ?>assets/images/background/Enable-NBO-Recommendations.png" class="lazyloaded"
                                                                style="width:141px;"></noscript>
                                                    </div>
                                                    <div style="width: 600px; float:right; ">
                                                        <p
                                                            style="font-size:16px; font-weight:600;  padding-top:32px; margin-bottom: 0px !important; color: #666666 !important;">
                                                            Unlock actionable insights and make smarter decisions with advanced analytics. </p>
                                                        <span></span>
                                                        <p style="font-size:18px; font-weight:600; padding-left:30px">CHECK OUT THE <?php echo $coNameFullDesign ?> SOLUTION
                                                        </p>
                                                    </div>
                                                </a></div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                
                <li
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-34398 parent top-16-menu nav_main'
                    id='mega-menu-item-34398'><a class="mega-menu-link" href="<?php echo $folderPath ?>About-Us/" tabindex="0">About Us</a></li>

                <li
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-34398 parent top-16-menu nav_main'
                    id='mega-menu-item-34398'><a class="mega-menu-link" href="<?php echo $folderPath ?>Clients/" tabindex="0">Clients</a></li>
                <li
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-34398 parent top-16-menu nav_main'
                    id='mega-menu-item-34398'><a class="mega-menu-link" href="<?php echo $folderPath ?>Blog/" tabindex="0">Blog</a></li>
                <li
                    class='mega-menu-bottom-class mega-button-center mega-getstarted-line-height mega-top-40 mega-move-up mega-nav_get_started_button mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-right mega-menu-flyout mega-item-align-right mega-hide-on-mobile mega-menu-item-34399 menu-bottom-class button-center getstarted-line-height top-40 move-up nav_get_started_button'
                    id='mega-menu-item-34399'><a class="mega-menu-link" href="<?php echo $folderPath ?>Contact-Us/" tabindex="0">START
                        BUILDING</a></li>
                <li
                    class='mega-parent mega-button-center mega-nav_contact_button mega-right-28 mega-top-16-menu mega-move-up mega-contact-font-size mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-item-align-right mega-hide-on-mobile mega-menu-item-34400 parent button-center nav_contact_button right-28 top-16-menu move-up contact-font-size'
                    id='mega-menu-item-34400'><a class="mega-menu-link" href="<?php echo $folderPath ?>Contact-Us/" tabindex="0">CONTACT
                        US</a></li>
                <li
                    class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-item-align-right mega-hide-on-desktop mega-menu-item-37628'
                    id='mega-menu-item-37628'>


                    <div class="center-bottom-mobile">
                        <a href="<?php echo $folderPath ?>Contact-Us/" class="contact-us-mobile nav_contact_button">Contact Us</a>
                        <a href="<?php echo $folderPath ?>Contact-Us/" class="get-started-mobile-button nav_get_started_button">START
                            BUILDING</a>
                    </div>


                </li>
            </ul>
        </div>
    </div>

<?php } ?>