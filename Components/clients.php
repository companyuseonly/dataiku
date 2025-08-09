<?php
if (!isset($clientMode)) {
    $clientMode = "1";
}
// Single query to fetch all active clients
$clientQuery = "SELECT * FROM CLIENTS_RMM WHERE Is_Active = 1 ORDER BY Display_Order ASC";
$clientResult = mysqli_query($con, $clientQuery);

$allClients = [];
while ($client = mysqli_fetch_assoc($clientResult)) {
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
                            Trusted by Our <u>Clients</u>
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
                        <div class="row-2025 center-xs m-0 p-0 between-xs padtb">
                            <div class="container-2025 ml-auto mr-auto customer-logos ">
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

<?php }
if ($clientMode == "2") {
?>

    <div class="center-xs container-2025 mr-auto ml-auto">
        <div class="row-2025 center-xs mt-48">
            <div class="col-xs-10 pt-16">
                <di class="row-2025 center-xs">
                    <div class="col-xs-8" style="display:block; z-index: 2;">
                        <!-- <h4>Our Clients & Partners</h4> -->
                        <h4 class="">
                            Trusted by Our Clients
                        </h4>
                        <p>Direct and Through Principals</p>
                    </div>
            </div>
        </div>
    </div>

    <!-- client logos -->
    <div class="clientpartners-wrapper">
        <div class="marquee-wrapper">
            <div class="clientpartners">
                <?php
                foreach ($allClients as $client) { ?>
                    <img src="<?php echo $folderPath . $client['Client_Image_URL']; ?>" alt="">
                <?php }
                foreach ($allClients as $client) { ?>
                    <img src="<?php echo $folderPath . $client['Client_Image_URL']; ?>" alt="">
                <?php } ?>
            </div>
        </div>

        <div class="marquee-wrapper">
            <div class="clientpartners reverse">
                <?php
                $descClients = array_reverse($allClients);
                foreach ($descClients as $client) { ?>
                    <img src="<?php echo $folderPath . $client['Client_Image_URL']; ?>" alt="">
                <?php }
                foreach ($descClients as $client) { ?>
                    <img src="<?php echo $folderPath . $client['Client_Image_URL']; ?>" alt="">
                <?php } ?>
            </div>
        </div>
    </div>

<?php } ?>