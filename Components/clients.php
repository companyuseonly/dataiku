<?php
    if (!isset($clientMode)) {
        $clientMode = "1";
    }
    // Single query to fetch all active clients
    $clientQuery = "SELECT * FROM CLIENTS_RMM WHERE Is_Active = 1 ORDER BY Group_ID, Display_Order ASC";
    $clientResult = mysqli_query($con, $clientQuery);
    
    // Group clients by Group_ID
    $clientsByGroup = [];
    $allClients = [];
    while ($client = mysqli_fetch_assoc($clientResult)) {
        $clientsByGroup[$client['Group_ID']][] = $client;
        $allClients[] = $client; // For mobile slider
    }
    if ($clientMode == "1") {
?>

    <div class="center-xs container-2025 mr-auto ml-auto hide-tab-mobile">
        <div class="row-2025 center-xs mt-48">
            <div class="col-xs-10 pt-16">
                <div class="row-2025 center-xs">
                    <div class="col-xs-8" style="display:block; z-index: 2;">
                        <!-- Three links; only one is active at a time -->
                        <p class="font-14 mobie-pb64">
                            Trusted by <a href="#/" class="animated-link active">Customers</a>, <a href="#/"
                                class="animated-link">Partners</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="center-xs container-2025 mr-auto ml-auto hide-tab-mobile">
        <!-- Container for image groups -->
        <div class="image-container center-xs">

            <div class="image-group active" id="group1" style="display: block; opacity: 1;">
                <section class="center-xs">
                    <div class="mr-auto ml-auto center-xs" style="display: flex;">
                        <div class="row-2025 center-xs m-0 p-0 between-xs">
                            <?php
                            if (isset($clientsByGroup[1])) {
                                foreach ($clientsByGroup[1] as $client) {
                            ?>
                                    <div class="col-xs start-xs max-width-30">
                                        <span>
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                alt="" style="max-width: none;" class="logo-width-mobile"
                                                data-lazy-src="<?php echo $folderPath . $client['Client_Image_URL']; ?>" />
                                            <noscript>
                                                <img src="<?php echo $folderPath . $client['Client_Image_URL']; ?>"
                                                    alt="" style="max-width: none;" class="logo-width-mobile" />
                                            </noscript>
                                        </span>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>

            <div class="image-group" id="group2">
                <section class="mt-0 pt-0">
                    <div class="container-2025 mr-auto ml-auto between-xs" style="display: flex;">
                        <div class="row-2025 center-xs m-0 p-0">
                            <?php
                            if (isset($clientsByGroup[2])) {
                                foreach ($clientsByGroup[2] as $client) {
                            ?>
                                    <div class="col-xs max-width-30">
                                        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                            alt="" style="max-width: none;" class="logo-width-mobile"
                                            data-lazy-src="<?php echo $folderPath . $client['Client_Image_URL']; ?>" />
                                        <noscript>
                                            <img src="<?php echo $folderPath . $client['Client_Image_URL']; ?>"
                                                alt="" style="max-width: none;" class="logo-width-mobile" />
                                        </noscript>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>

            <div class="image-group" id="group3">
                <section class="mt-0 pt-0">
                    <div class="mr-auto ml-auto between-xs" style="display: flex;">
                        <div class="row-2025 center-xs m-0 p-0 around-xs">
                            <?php
                            if (isset($clientsByGroup[3])) {
                                foreach ($clientsByGroup[3] as $client) {
                            ?>
                                    <div class="col-xs max-width-30">
                                        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                            alt="" style="max-width: none;" class="logo-width-mobile"
                                            data-lazy-src="<?php echo $folderPath . $client['Client_Image_URL']; ?>" />
                                        <noscript>
                                            <img src="<?php echo $folderPath . $client['Client_Image_URL']; ?>"
                                                alt="" style="max-width: none;" class="logo-width-mobile" />
                                        </noscript>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <section class="customer-logos stack-tabs">
        <div class="container-2025 ml-auto mr-auto">
            <div class="slider">
                <?php
                foreach ($allClients as $client) {
                ?>
                    <div class="slide">
                        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                            alt=""
                            style="height:150px; width:175px;"
                            data-lazy-src="<?php echo $folderPath . $client['Client_Image_URL']; ?>" />
                        <noscript>
                            <img src="<?php echo $folderPath . $client['Client_Image_URL']; ?>"
                                alt=""
                                style="height:150px; width:175px;" />
                        </noscript>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

<?php } ?>