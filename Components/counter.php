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
                            alt="" data-lazy-src="<?php echo $folderPath ?>assets/uploads/2023/07/forrester-1.svg"><noscript><img
                                src="<?php echo $folderPath ?>assets/uploads/2023/07/forrester-1.svg" alt=""></noscript>
                    </div>
                    <div class="forrester-text">
                        <h3 class="updated"> The Total Economic Impact™ Of Dataiku</h3>
                        <p>A commissioned study conducted by Forrester Consulting on behalf of Dataiku.
                        </p>
                    </div>

                    <div class="forrester-statistic-list">
                        <div class="statistic-item">
                            <div class="h3">
                                <span class="statistic-num" data-speed="4500"><?php echo $reductionDA ?></span>%
                            </div>

                            <p>reduction in time spent on data analysis, extraction, and preparation.</p>
                        </div>
                        <div class="statistic-item">
                            <div class="h3">
                                <span class="statistic-num" data-speed="4500"><?php echo $reductionML ?></span>%
                            </div>

                            <p>reduction in time spent on model lifecycle activities (training, deployment, and monitoring).</p>
                        </div>
                        <div class="statistic-item">
                            <div class="h3">
                                <span class="statistic-num" data-speed="4500"><?php echo $investment ?></span>%
                            </div>

                            <p>Return on investment.</p>
                        </div>
                        <div class="statistic-item">
                            <div class="h3">
                                <span class="statistic-num" data-speed="4500"><?php echo $netpresent ?></span>M
                            </div>

                            <p>net present value over three years.</p>
                        </div>
                    </div>

                    <a class="font-white learn-more-text-only-white uppercase hp-reinforcement nav_dropdown_feature_content"
                        href="<?php echo $folderPath ?>#" target="_blank">
                        READ THE FORRESTER STUDY </a>
                </div>

                <div class="info-block">
                    <div class="info-block-bg">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="image"
                            data-lazy-src="<?php echo $folderPath ?>assets/uploads/2025/04/forrester-image-742x1024.png"><noscript>
                            <img src="<?php echo $folderPath ?>assets/uploads/2025/04/forrester-image-742x1024.png" alt="image"></noscript>
                    </div>
                    <div class="info-block-text-widget">
                        <div class="row-2025 center-xs">
                            <div class="col-xs-12">
                                <div id="myNodeContainer"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>

<?php } ?>