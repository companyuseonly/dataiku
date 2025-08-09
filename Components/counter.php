<?php
    if (!isset($counterMode)) {
        $counterMode = "1";
    }
    
    if ($counterMode == "1") {
?>

    <div class="forrester-section has-animation none none">

        <div class="center-start container-2025 mr-auto ml-auto">
            <div class="forrester-outer">
               <div class="forrester-inner">
    <div class="forrester-svg">
        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
            alt="" data-lazy-src="<?php echo $folderPath ?>assets/uploads/2025/08/resurgent-icon.svg">
        <noscript><img src="<?php echo $folderPath ?>assets/uploads/2025/08/resurgent-icon.svg" alt=""></noscript>
    </div>
    <div class="forrester-text">
        <h3 class="updated"> What We’ve Achieved</h3>
        <p>Over two decades of delivering technology and consulting excellence across industries worldwide.</p>
    </div>

    <div class="forrester-statistic-list">
        <div class="statistic-item">
            <div class="h3">
                <span class="statistic-num" data-speed="4500"><?php echo date("Y") - $yearStarted; ?></span>
            </div>
            <p>Years in technology and consulting.</p>
        </div>
        <div class="statistic-item">
            <div class="h3">
                <span class="statistic-num" data-speed="4500"><?php echo $happyclient; ?></span>
            </div>
            <p>Clients served – direct and through principals.</p>
        </div>
        <div class="statistic-item">
            <div class="h3">
                <span class="statistic-num" data-speed="4500"><?php echo $skilledRate; ?>%</span>
            </div>
            <p>Skilled rate and repeat business from satisfied clients.</p>
        </div>
        <div class="statistic-item">
            <div class="h3">
                <span class="statistic-num" data-speed="4500"><?php echo $expertise; ?></span>
            </div>
            <p>Masters in technology expertise on our team.</p>
        </div>
    </div>

    <a class="font-white learn-more-text-only-white uppercase hp-reinforcement nav_dropdown_feature_content"
        href="<?php echo $folderPath ?>about-us/" target="_self">
        LEARN MORE ABOUT US </a>
</div>


                <div class="info-block">
                    <div class="">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="image"
                            data-lazy-src="<?php echo $folderPath ?>assets/uploads/2025/04/forrester-image-742x1024.png"><noscript>
                            <img src="<?php echo $folderPath ?>assets/uploads/2025/04/forrester-image-742x1024.png" alt="image"></noscript>
                    </div>
                </div>

            </div>
        </div>
        
    </div>

<?php } ?>