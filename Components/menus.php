<?php
    if (!isset($menuMode)) {
        $menuMode = "1";
    }
    
    if ($menuMode == "1") {
?>

    <div>
        <header class="header new-menu-zindex">
            <div class="top-items-postion parent top10">
                <div class="languages">
                    <a class="current">en</a>
                    <ul>
                        <li>
                            <a href="<?php echo $folderPath ?>de/">de</a>
                        </li>
                        <li>
                            <a href="<?php echo $folderPath ?>ja/">ja</a>
                        </li>
                    </ul>
                </div>
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
                <button class="toggle-search search-position" title="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19 18">
                        <g fill="#1b2031" transform="translate(-292 -166)" class="search-svg-fill">
                            <path class="search-svg-fill"
                                d="M304.853 178.26l.257-.257a.673.673 0 0 1 .943 0l4.114 4.114a.673.673 0 0 1 0 .943l-.257.257a.673.673 0 0 1-.943 0l-4.114-4.114a.673.673 0 0 1 0-.943z" />
                            <path class="search-svg-fill"
                                d="M306.57 173.714c0-3.343-2.743-6.085-6.086-6.085-3.343 0-6.085 2.742-6.085 6.085s2.742 6.086 6.085 6.086 6.086-2.743 6.086-6.086zm1.629 0a7.682 7.682 0 0 1-7.715 7.715 7.682 7.682 0 0 1-7.714-7.715 7.682 7.682 0 0 1 7.714-7.714 7.682 7.682 0 0 1 7.715 7.714z" />
                        </g>

                    </svg> </button>
            </div>
            <div class="top-links top10">
                <p class="top-nav-links parent top10 nav_secondary">
                    <a href="<?php echo $folderPath ?>careers/" target="_blank">Join Dataiku</a>
                </p>
                <p class="top-nav-links parent top10 nav_secondary">
                    <a href="<?php echo $folderPath ?>learn/" target="_self">Learning Center</a>
                </p>
                <p class="top-nav-links parent top10 nav_secondary">
                    <a href="<?php echo $folderPath ?>#"
                        target="_blank">Sign in</a>
                </p>
            </div>
        </header>
    </div>

    <div>
        <div id="mega-menu-wrap-menu-1" class="mega-menu-wrap">
            <div class="mega-menu-toggle">
                <div class="mega-toggle-blocks-left">
                    <div class='mega-toggle-block mega-logo-block mega-toggle-block-1' id='mega-toggle-block-1'><a
                            class="mega-menu-logo" href="<?php echo $folderPath ?>index.php" target="_self"><img class="mega-menu-logo"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                data-lazy-src="<?php echo $folderPath ?>assets/uploads/2025/04/DKU_LOGO_Teal.svg" /><noscript><img
                                    class="mega-menu-logo" src="<?php echo $folderPath ?>assets/uploads/2025/04/DKU_LOGO_Teal.svg" /></noscript></a></div>
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
                    id='mega-menu-item-34391'><a class='mega-menu-link mega-menu-logo' href='index.html'><img
                            class='mega-menu-logo mega-svg' width='100' height='60'
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%2060'%3E%3C/svg%3E"
                            data-lazy-src="<?php echo $folderPath ?>assets/uploads/2025/04/DKU_LOGO_Teal.svg" /><noscript><img
                                class='mega-menu-logo mega-svg' width='100' height='60'
                                src='<?php echo $folderPath ?>assets/uploads/2025/04/DKU_LOGO_Teal.svg' /></noscript></a></li>
                <li
                    class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-34511'
                    id='mega-menu-item-34511'>
                    <div class="hide-google-search">


                        <script data-type="lazy"
                            data-src="data:text/javascript;base64,DQogICAgICAgICAgICAgICAgICAgIChmdW5jdGlvbigpIHsNCiAgICAgICAgICAgICAgICAgICAgdmFyIGN4ID0gJzcxOGQ1NWI4ZTNkODcwNWE2JzsNCiAgICAgICAgICAgICAgICAgICAgdmFyIGdjc2UgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTsNCiAgICAgICAgICAgICAgICAgICAgZ2NzZS50eXBlID0gJ3RleHQvamF2YXNjcmlwdCc7DQogICAgICAgICAgICAgICAgICAgIGdjc2UuYXN5bmMgPSB0cnVlOw0KICAgICAgICAgICAgICAgICAgICBnY3NlLnNyYyA9ICdodHRwczovL2NzZS5nb29nbGUuY29tL2NzZS5qcz9jeD0nICsgY3g7DQogICAgICAgICAgICAgICAgICAgIHZhciBzID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ3NjcmlwdCcpWzBdOw0KICAgICAgICAgICAgICAgICAgICBzLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKGdjc2UsIHMpOw0KICAgICAgICAgICAgICAgICAgICB9KSgpOw0KICAgICAgICAgICAgICAgICAgICB2YXIgYnRuMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZWFyY2gnKTsNCiAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gdG9nZ2xlX3Zpc2liaWxpdHkoaWQpIHsNCiAgICAgICAgICAgICAgICAgICAgdmFyIGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChpZCk7DQogICAgICAgICAgICAgICAgICAgIGlmKGUuc3R5bGUuZGlzcGxheSA9PSAnYmxvY2snKSB7DQogICAgICAgICAgICAgICAgICAgIGUuc3R5bGUuZGlzcGxheSA9ICdub25lJzt9DQogICAgICAgICAgICAgICAgICAgIGVsc2Ugew0KICAgICAgICAgICAgICAgICAgICAgZS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJzsNCiAgICAgICAgICAgICAgICAgICAgfTsNCiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coJ2NsaWNrZWQnKTsNCiAgICAgICAgICAgICAgICAgICAgIHJldHVybjsNCiAgICAgICAgICAgICAgICAgICAgfQ0KICAgICAgICAgICAgICAgICAgICA="></script>
                        <gcse:search></gcse:search>
                        <div id="search-results" class="results">
                        </div>
                    </div>
                </li>
                <li
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-hide-arrow mega-has-icon mega-icon-right mega-close-after-click mega-disable-link mega-menu-item-34393 parent top-16-menu nav_main'
                    id='mega-menu-item-34393'><a class="dashicons-arrow-down-alt2 mega-menu-link" tabindex="0" aria-expanded="false"
                        role="button">Product<span class="mega-indicator"></span></a>
                    <ul class="mega-sub-menu">
                        <li class='mega-menu-row mega-bot-32 bot-32' id='mega-menu-34393-0'>
                            <ul class="mega-sub-menu">
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34393-0-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-2'
                                            id='mega-menu-item-custom_html-2'>
                                            <div class="textwidget custom-html-widget"><a href="<?php echo $folderPath ?>product/">
                                                    <div class='big-heading-hover-effect big-heading-menu-link'>
                                                        <div class='sub2'>
                                                            <p>Discover Dataiku</p>
                                                        </div>
                                                        <div class='sub'>
                                                            <p>
                                                                Where everyone can create <br />and consume AI
                                                                <i class="fa fa-long-arrow-right" aria-hidden="true" style=" vertical-align: middle;"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </li>
                                        <li
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
                                                href="<?php echo $folderPath ?>product/plans-and-features/">Plans and Editions</a></li>
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34393-0-1'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-11'
                                            id='mega-menu-item-custom_html-11'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">Build With Dataiku</p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-45245 bot-8 nav_dropdown'
                                            id='mega-menu-item-45245'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/key-capabilities/genai-and-agents/">GenAI & Agents</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38958 bot-8 nav_dropdown'
                                            id='mega-menu-item-38958'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/key-capabilities/machine-learning/">Machine Learning</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-55606 bot-8 nav_dropdown'
                                            id='mega-menu-item-55606'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/key-capabilities/analytics-and-insights/">Analytics & Insights</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38957 bot-8 nav_dropdown'
                                            id='mega-menu-item-38957'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/key-capabilities/data-prep-for-ai/">Data Prep for AI</a></li>
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34393-0-2'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-12'
                                            id='mega-menu-item-custom_html-12'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">
                                                    Deploy &amp; Monitor With Dataiku
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38967 bot-8 nav_dropdown'
                                            id='mega-menu-item-38967'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/key-capabilities/ai-governance/">AI Governance</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-55603 bot-8 nav_dropdown'
                                            id='mega-menu-item-55603'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/key-capabilities/ai-engineering-operations/">AI Engineering Operations</a>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-55604 bot-8 nav_dropdown'
                                            id='mega-menu-item-55604'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/key-capabilities/ai-ecosystem/">AI Ecosystem</a></li>
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
                                            <div class="textwidget custom-html-widget"> <a href="<?php echo $folderPath ?>product/dataiku-demo/"
                                                    class="learn-more-menu nav_dropdown_feature_content">
                                                    <div style="width: 180px; float:left; height:161px; padding-right:32px; padding-bottom:32px;">
                                                        <img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                            style="width:141px;" class="lazyloaded"
                                                            data-lazy-src="<?php echo $folderPath ?>assets/uploads/2023/10/demo-thumbnail.png"><noscript><img
                                                                src="<?php echo $folderPath ?>assets/uploads/2023/10/demo-thumbnail.png" style="width:141px;"
                                                                class="lazyloaded"></noscript>
                                                    </div>
                                                    <div style="width: 500px; float:right; ">
                                                        <p
                                                            style="font-size:16px; font-weight:600;  padding-top:32px; margin-bottom: 0px !important; color: #666666 !important;">
                                                            Get An End-to-End Demo of Dataiku in 13 Minutes</p>
                                                        <span></span>
                                                        <p style="font-size:18px; font-weight:600; padding-left:30px">ACCESS DEMO NOW</p>
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
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34394-0-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-15'
                                            id='mega-menu-item-custom_html-15'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">
                                                    Dataiku For Your Industry
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38972 bot-8 nav_dropdown'
                                            id='mega-menu-item-38972'><a class="mega-menu-link" href="<?php echo $folderPath ?>solutions/banking/">Banking</a>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38973 bot-8 nav_dropdown'
                                            id='mega-menu-item-38973'><a class="mega-menu-link" href="<?php echo $folderPath ?>solutions/life-sciences/">Life
                                                Sciences</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38974 bot-8 nav_dropdown'
                                            id='mega-menu-item-38974'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>solutions/manufacturing/">Manufacturing</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39243 bot-8 nav_dropdown'
                                            id='mega-menu-item-39243'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>solutions/telecommunications/">Telecommunications</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38976 bot-8 nav_dropdown'
                                            id='mega-menu-item-38976'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>solutions/insurance/">Insurance</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38977 bot-8 nav_dropdown'
                                            id='mega-menu-item-38977'><a class="mega-menu-link" href="<?php echo $folderPath ?>solutions/retail-cpg/">Retail &
                                                CPG</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39244 bot-8 nav_dropdown'
                                            id='mega-menu-item-39244'><a class="mega-menu-link" href="<?php echo $folderPath ?>solutions/public-sector/">Public
                                                Sector</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-38979 bot-8 nav_dropdown'
                                            id='mega-menu-item-38979'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>solutions/utilities-energy/">Utilities & Energy</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39245 bot-8 nav_dropdown'
                                            id='mega-menu-item-39245'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>solutions/healthcare/">Healthcare</a></li>
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34394-0-1'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-16'
                                            id='mega-menu-item-custom_html-16'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">
                                                    Dataiku For Your Department
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39045 bot-8 nav_dropdown'
                                            id='mega-menu-item-39045'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>solutions/marketing/">Marketing</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39046 bot-8 nav_dropdown'
                                            id='mega-menu-item-39046'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>solutions/supply-chain-logistics/">Logistics & Supply Chain</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39047 bot-8 nav_dropdown'
                                            id='mega-menu-item-39047'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>solutions/finance-audit/">Finance & Audit</a></li>
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34394-0-2'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-13'
                                            id='mega-menu-item-custom_html-13'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">Dataiku Offers for Every Team
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-47306 bot-8 nav_dropdown'
                                            id='mega-menu-item-47306'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/dataiku-for-analytics/">Dataiku for Data Analytics</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-47307 bot-8 nav_dropdown'
                                            id='mega-menu-item-47307'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>product/dataiku-for-ai-ml/">Dataiku for AI & Machine Learning</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-47308 bot-8 nav_dropdown'
                                            id='mega-menu-item-47308'><a class="mega-menu-link" href="<?php echo $folderPath ?>product/">Dataiku for Enterprise
                                                AI</a></li>
                                        <li
                                            class='mega-bot-8 mega-top-16 mega-nav_dropdown mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-43097 bot-8 top-16 nav_dropdown'
                                            id='mega-menu-item-43097'><a class="mega-menu-link" href="<?php echo $folderPath ?>solutions/catalog/">Dataiku
                                                Solutions Catalog</a></li>
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
                                                    href="<?php echo $folderPath ?>solutions/catalog/next-best-offer-for-banking/"
                                                    class="learn-more-menu nav_dropdown_feature_content">
                                                    <div style="width: 180px; float:left; height:161px; padding-right:32px; padding-bottom:32px;">
                                                        <img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                            class="lazyloaded" style="width:141px;"
                                                            data-lazy-src="<?php echo $folderPath ?>assets/uploads/2024/10/Enable-NBO-Recommendations.png"><noscript><img
                                                                src="<?php echo $folderPath ?>assets/uploads/2024/10/Enable-NBO-Recommendations.png" class="lazyloaded"
                                                                style="width:141px;"></noscript>
                                                    </div>
                                                    <div style="width: 600px; float:right; ">
                                                        <p
                                                            style="font-size:16px; font-weight:600;  padding-top:32px; margin-bottom: 0px !important; color: #666666 !important;">
                                                            Easily tailor marketing strategies for maximum ROI with this plug-and-play template. </p>
                                                        <span></span>
                                                        <p style="font-size:18px; font-weight:600; padding-left:30px">CHECK OUT THE DATAIKU SOLUTION
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
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-hide-arrow mega-has-icon mega-icon-right mega-close-after-click mega-disable-link mega-menu-item-34395 parent top-16-menu nav_main'
                    id='mega-menu-item-34395'><a class="dashicons-arrow-down-alt2 mega-menu-link" tabindex="0" aria-expanded="false"
                        role="button">Stories<span class="mega-indicator"></span></a>
                    <ul class="mega-sub-menu">
                        <li class='mega-menu-row mega-bot-32 bot-32' id='mega-menu-34395-0'>
                            <ul class="mega-sub-menu">
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-6-of-12 left-32 top-32'
                                    id='mega-menu-34395-0-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-7'
                                            id='mega-menu-item-custom_html-7'>
                                            <div class="textwidget custom-html-widget"><a href="<?php echo $folderPath ?>stories/">
                                                    <div class='big-heading-hover-effect big-heading-menu-link'>
                                                        <div class='sub2'>
                                                            <p> Dataiku Customer Stories
                                                            </p>
                                                        </div>
                                                        <div class='sub'>
                                                            <p>
                                                                See Everyday AI in Action
                                                                <i class="fa fa-long-arrow-right" aria-hidden="true" style=" vertical-align: middle;"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </li>
                                    </ul>
                                </li>
                                <li
                                    class='mega-menu-column mega-left-32 mega-top-32 mega-right-32 mega-menu-columns-6-of-12 left-32 top-32 right-32'
                                    id='mega-menu-34395-0-1'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-14'
                                            id='mega-menu-item-custom_html-14'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">Watch a Web Series
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-55623 bot-8 nav_dropdown'
                                            id='mega-menu-item-55623'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>stories/dataiku-conference-live/">The Dataiku Conference Live</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-56844 bot-8 nav_dropdown'
                                            id='mega-menu-item-56844'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>stories/generative-ai-bootcamp-a-web-series-by-dataiku/">Generative AI Bootcamp
                                                Live</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-34720 bot-8 nav_dropdown'
                                            id='mega-menu-item-34720'><a class="mega-menu-link" href="<?php echo $folderPath ?>stories/ai-and-us/">AI and
                                                Us</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-53760 bot-8 nav_dropdown'
                                            id='mega-menu-item-53760'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>stories/product-days-a-web-series-by-dataiku/">Dataiku Product Days</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-54773 bot-8 nav_dropdown'
                                            id='mega-menu-item-54773'><a class="mega-menu-link" href="<?php echo $folderPath ?>stories/ai-governance/">AI
                                                Governance Live</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='mega-menu-row mega-top-row-nav-74 top-row-nav-74' id='mega-menu-34395-1'>
                            <ul class="mega-sub-menu">
                                <li
                                    class='mega-menu-column mega-limited-boarder-2 mega-top-16 mega-bot-8 mega-menu-columns-12-of-12 mega-hide-on-mobile limited-boarder-2 top-16 bot-8'
                                    id='mega-menu-34395-1-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-8'
                                            id='mega-menu-item-custom_html-8'>
                                            <div class="textwidget custom-html-widget"> <a href="<?php echo $folderPath ?>stories/detail/prologis/"
                                                    class="learn-more-menu nav_dropdown_feature_content">
                                                    <div style="width: 180px; float:left; height:161px; padding-right:32px; padding-bottom:32px;">
                                                        <img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                            class="lazyloaded" style="width:141px;"
                                                            data-lazy-src="<?php echo $folderPath ?>assets/uploads/2025/04/prologis.jpg"><noscript><img
                                                                src="<?php echo $folderPath ?>assets/uploads/2025/04/prologis.jpg" class="lazyloaded"
                                                                style="width:141px;"></noscript>
                                                    </div>
                                                    <div style="width: 500px; float:right; ">
                                                        <p
                                                            style="font-size:16px; font-weight:600;  padding-top:32px; margin-bottom: 0px !important; color: #666666 !important;">
                                                            Prologis Productionalized 12x More AI &amp; ML Projects</p>
                                                        <span></span>
                                                        <p style="font-size:18px; font-weight:600; padding-left:30px">SEE HOW THEY DID IT WITH DATAIKU
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
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-hide-arrow mega-has-icon mega-icon-right mega-close-after-click mega-disable-link mega-menu-item-34396 parent top-16-menu nav_main'
                    id='mega-menu-item-34396'><a class="dashicons-arrow-down-alt2 mega-menu-link" tabindex="0" aria-expanded="false"
                        role="button">Company<span class="mega-indicator"></span></a>
                    <ul class="mega-sub-menu">
                        <li class='mega-menu-row mega-bot-32 mega-bot-mobile-72 bot-32 bot-mobile-72' id='mega-menu-34396-0'>
                            <ul class="mega-sub-menu">
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-4-of-12 left-32 top-32'
                                    id='mega-menu-34396-0-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-5'
                                            id='mega-menu-item-custom_html-5'>
                                            <div class="textwidget custom-html-widget"><a href="<?php echo $folderPath ?>careers/">
                                                    <div class='big-heading-hover-effect big-heading-menu-link'>
                                                        <div class='sub2'>
                                                            <p> Join Dataiku</p>
                                                        </div>
                                                        <div class='sub'>
                                                            <p>
                                                                We're hiring, join the adventure
                                                                <i class="fa fa-long-arrow-right" aria-hidden="true" style=" vertical-align: middle;"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39052 bot-8 nav_dropdown'
                                            id='mega-menu-item-39052'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>company/engineering/">Engineering at Dataiku</a></li>
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-64 mega-top-16 mega-menu-columns-4-of-12 left-64 top-16'
                                    id='mega-menu-34396-0-1'>
                                    <ul class="mega-sub-menu">
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-34716 bot-8 nav_dropdown'
                                            id='mega-menu-item-34716'><a class="mega-menu-link" href="<?php echo $folderPath ?>company/">About Dataiku</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39053 bot-8 nav_dropdown'
                                            id='mega-menu-item-39053'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>company/customers/">Customers</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-48919 bot-8 nav_dropdown'
                                            id='mega-menu-item-48919'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>stories/detail/industry-analyst-recognition/">Analyst Recognition</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39054 bot-8 nav_dropdown'
                                            id='mega-menu-item-39054'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>company/dataiku-for-the-future/">Dataiku for the Future</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39055 bot-8 nav_dropdown'
                                            id='mega-menu-item-39055'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>company/all-press-releases/">Press Releases</a></li>
                                        <li
                                            class='mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-39235 nav_dropdown'
                                            id='mega-menu-item-39235'><a class="mega-menu-link" href="<?php echo $folderPath ?>company/media-kit/">Media
                                                Kit</a></li>
                                    </ul>
                                </li>
                                <li
                                    class='mega-menu-column mega-left-32 mega-top-32 mega-right-32 mega-menu-columns-4-of-12 left-32 top-32 right-32'
                                    id='mega-menu-34396-0-2'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-30'
                                            id='mega-menu-item-custom_html-30'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">Meet Dataiku at an Event</p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-47556 bot-8 nav_dropdown'
                                            id='mega-menu-item-47556'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>company/events/join-a-live-demo-of-dataiku/">Live Dataiku Demos</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-59950 bot-8 nav_dropdown'
                                            id='mega-menu-item-59950'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>company/events/the-dataiku-summit-events/">Dataiku Summit</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-41951 bot-8 nav_dropdown'
                                            id='mega-menu-item-41951'><a class="mega-menu-link" href="<?php echo $folderPath ?>company/events/">Events
                                                Calendar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='mega-menu-row mega-top-row-nav-74 top-row-nav-74' id='mega-menu-34396-1'>
                            <ul class="mega-sub-menu">
                                <li
                                    class='mega-menu-column mega-limited-boarder-2 mega-top-16 mega-menu-columns-12-of-12 mega-hide-on-mobile limited-boarder-2 top-16'
                                    id='mega-menu-34396-1-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-6'
                                            id='mega-menu-item-custom_html-6'>
                                            <div class="textwidget custom-html-widget"> <a href="<?php echo $folderPath ?>#"
                                                    class="learn-more-menu nav_dropdown_feature_content" target="_blank">
                                                    <div style="width: 180px; float:left; height:161px; padding-right:32px; padding-bottom:32px;">
                                                        <img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                            class="lazyloaded" style="width:141px;"
                                                            data-lazy-src="<?php echo $folderPath ?>assets/uploads/2025/05/GARTNER25NAV-1.png"><noscript><img
                                                                src="<?php echo $folderPath ?>assets/uploads/2025/05/GARTNER25NAV-1.png" class="lazyloaded"
                                                                style="width:141px;"></noscript>
                                                    </div>
                                                    <div style="width: 600px; float:right; ">
                                                        <p
                                                            style="font-size:16px; font-weight:600;  padding-top:32px; margin-bottom: 0px !important; color: #666666 !important;">
                                                            The 2025 Gartner Magic Quadrant for Data Science and ML Platforms</p>
                                                        <span></span>
                                                        <p style="font-size:18px; font-weight:600; padding-left:30px">GET A COMPLIMENTARY COPY</p>
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
                    class='mega-parent mega-top-16-menu mega-nav_main mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-hide-arrow mega-has-icon mega-icon-right mega-close-after-click mega-disable-link mega-menu-item-34397 parent top-16-menu nav_main'
                    id='mega-menu-item-34397'><a class="dashicons-arrow-down-alt2 mega-menu-link" tabindex="0" aria-expanded="false"
                        role="button">Partners<span class="mega-indicator"></span></a>
                    <ul class="mega-sub-menu">
                        <li class='mega-menu-row mega-bot-32 mega-bot-mobile-72 bot-32 bot-mobile-72' id='mega-menu-34397-0'>
                            <ul class="mega-sub-menu">
                                <li class='mega-menu-column mega-left-32 mega-top-32 mega-menu-columns-5-of-12 left-32 top-32'
                                    id='mega-menu-34397-0-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-3'
                                            id='mega-menu-item-custom_html-3'>
                                            <div class="textwidget custom-html-widget"><a href="<?php echo $folderPath ?>partners/">
                                                    <div class='big-heading-hover-effect big-heading-menu-link'>
                                                        <div class='sub2'>
                                                            <p> Find a Dataiku Partner</p>
                                                        </div>
                                                        <div class='sub'>
                                                            <p>
                                                                Work with our expert Partners
                                                                <i class="fa fa-long-arrow-right" aria-hidden="true" style=" vertical-align: middle;"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-34479 bot-8 nav_dropdown'
                                            id='mega-menu-item-34479'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>partners/indexf6b5.php?filter%5Bpartners-type%5D=service-partners,analytics-consultants,value-added-resellers">Service
                                                Partners</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-34480 bot-8 nav_dropdown'
                                            id='mega-menu-item-34480'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>partners/index3751.php?filter%5Bpartners-type%5D=technology-alliance">Technology
                                                Alliances</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-56427 bot-8 nav_dropdown'
                                            id='mega-menu-item-56427'><a class="mega-menu-link" href="<?php echo $folderPath ?>partner-with-dataiku/">Partner
                                                With Dataiku</a></li>
                                    </ul>
                                </li>
                                <li class='mega-menu-column mega-left-64 mega-top-32 mega-menu-columns-6-of-12 left-64 top-32'
                                    id='mega-menu-34397-0-1'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-17'
                                            id='mega-menu-item-custom_html-17'>
                                            <div class="textwidget custom-html-widget">
                                                <p class="no-click-title">Featured Partners
                                                </p>
                                            </div>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-47666 bot-8 nav_dropdown'
                                            id='mega-menu-item-47666'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>partners/turn-the-business-into-ai-builders-with-dataiku-aws/">AWS</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-partners mega-menu-item-53229 bot-8 nav_dropdown'
                                            id='mega-menu-item-53229'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>partners/databricks/">Databricks</a></li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-partners mega-menu-item-53230 bot-8 nav_dropdown'
                                            id='mega-menu-item-53230'><a class="mega-menu-link" href="<?php echo $folderPath ?>partners/deloitte/">Deloitte</a>
                                        </li>
                                        <li
                                            class='mega-bot-8 mega-nav_dropdown mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-partners mega-menu-item-39058 bot-8 nav_dropdown'
                                            id='mega-menu-item-39058'><a class="mega-menu-link"
                                                href="<?php echo $folderPath ?>partners/snowflake/">Snowflake</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='mega-menu-row mega-top-row-nav-74 top-row-nav-74' id='mega-menu-34397-1'>
                            <ul class="mega-sub-menu">
                                <li
                                    class='mega-menu-column mega-limited-boarder-2 mega-top-16 mega-menu-columns-12-of-12 mega-hide-on-mobile limited-boarder-2 top-16'
                                    id='mega-menu-34397-1-0'>
                                    <ul class="mega-sub-menu">
                                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-4'
                                            id='mega-menu-item-custom_html-4'>
                                            <div class="textwidget custom-html-widget"> <a href="<?php echo $folderPath ?>stories/detail/rolls-royce/"
                                                    class="learn-more-menu nav_dropdown_feature_content">
                                                    <div style="width: 180px; float:left; height:161px; padding-right:32px; padding-bottom:32px;">
                                                        <img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                            class="lazyloaded" style="width:141px;"
                                                            data-lazy-src="<?php echo $folderPath ?>assets/uploads/2025/04/image1.png"><noscript><img
                                                                src="<?php echo $folderPath ?>assets/uploads/2025/04/image1.png" class="lazyloaded"
                                                                style="width:141px;"></noscript>
                                                    </div>
                                                    <div style="width: 400px; float:right; ">
                                                        <p
                                                            style="font-size:16px; font-weight:600;  padding-top:32px; margin-bottom: 0px !important; color: #666666 !important;">
                                                            Dataiku + Deloitte Boost Rolls-Royce’s Efficiency </p>
                                                        <span></span>
                                                        <p style="font-size:18px; font-weight:600; padding-left:30px">DISCOVER THE FULL STORY</p>
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
                    id='mega-menu-item-34398'><a class="mega-menu-link" href="<?php echo $folderPath ?>#" tabindex="0">Blog</a></li>
                <li
                    class='mega-menu-bottom-class mega-button-center mega-getstarted-line-height mega-top-40 mega-move-up mega-nav_get_started_button mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-right mega-menu-flyout mega-item-align-right mega-hide-on-mobile mega-menu-item-34399 menu-bottom-class button-center getstarted-line-height top-40 move-up nav_get_started_button'
                    id='mega-menu-item-34399'><a class="mega-menu-link" href="<?php echo $folderPath ?>product/get-started/" tabindex="0">START
                        BUILDING</a></li>
                <li
                    class='mega-parent mega-button-center mega-nav_contact_button mega-right-28 mega-top-16-menu mega-move-up mega-contact-font-size mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-item-align-right mega-hide-on-mobile mega-menu-item-34400 parent button-center nav_contact_button right-28 top-16-menu move-up contact-font-size'
                    id='mega-menu-item-34400'><a class="mega-menu-link" href="<?php echo $folderPath ?>home/contact-us/" tabindex="0">CONTACT
                        US</a></li>
                <li
                    class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-item-align-right mega-hide-on-desktop mega-menu-item-37628'
                    id='mega-menu-item-37628'>


                    <div class="center-bottom-mobile">
                        <a href="<?php echo $folderPath ?>home/contact-us/" class="contact-us-mobile nav_contact_button">Contact Us</a>
                        <a href="<?php echo $folderPath ?>product/get-started/" class="get-started-mobile-button nav_get_started_button">START
                            BUILDING</a>
                    </div>


                </li>
            </ul>
        </div>
    </div>

<?php } ?>