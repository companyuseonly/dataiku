<?php
    $folderPath = "../";
    $pageTitle = "Contact Us";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Contact Us";
    
    if (!empty($_SESSION['form_status'])) {
        echo "<div style='padding:10px; background:#f0f0f0; margin-bottom:15px;'>" . htmlspecialchars($_SESSION['form_status']) . "</div>";
        unset($_SESSION['form_status']);
    }
    
    include($folderPath . "Components/header.php");
?>

<section data-bg="<?php echo $folderPath ?>assets/images/background/4256.jpg" class="page-title js-color-change rocket-lazyload" style="">
    <span class="overlay" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.4),rgba(0,0,0,0.2));"></span>
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <!-- Breadcrumb NavXT 7.4.1 -->
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to <?php echo $coName ?>." href="<?php echo $folderPath ?>index.php" class="home"><span property="name"><?php echo $coName ?></span></a>
                        <meta property="position" content="1">
                    </span></li>
                <li class="post post-page current-item"><span class="post post-page current-item"><?php echo $thisPage ?></span></li>
            </ul>
        </div>
    </div>
    <!--breadcrumbs-->

    <div class="container">
        <div class="holder">
            <h1 class="bot20"><?php echo $thisPage ?></h1>
            <span style="font-size: 25px !important; line-height: 35px;">
                <!-- <p class="bot10">
                <p>Unlock the Power of Technology</p>
                </p> -->
            </span>

        </div>
    </div>
</section>

<section class="reach-us-section">
    <!-- Header -->
    <div class="section-header">
        <h2>Reach Us</h2>
        <p>Get in touch with our global offices</p>
    </div>

    <!-- Office Locations -->
    <div class="offices-container">
        <div class="office-card">
            <div class="map-wrapper">
                <iframe src="<?php echo $mapLocation1 ?>"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="office-info">
                <h5>India</h5>
                <address>
                    <p><?php echo $mapAddress1 ?></p>
                </address>
            </div>
        </div>

        <div class="office-card">
            <div class="map-wrapper">
                <iframe src="<?php echo $mapLocation2 ?>"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="office-info">
                <h5>UAE</h5>
                <address>
                    <p><?php echo $mapAddress2 ?></p>
                </address>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-form-section">
        <h3>Get In Touch</h3>
        <form id="contactForm" class="contact-form" action="<?php echo $folderPath ?>assets/php/contact.php" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" required placeholder="Your name">
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required placeholder="Your email">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Your phone number">
                </div>
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" required placeholder="Subject">
                </div>
            </div>

            <div class="form-group full-width">
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="6" required placeholder="What services do you want?"></textarea>
            </div>

            <button type="submit" class="submit-button">
                <span class="button-text">Send Message</span>
            </button>
        </form>
    </div>
    
    <!-- Contact Information -->
    <div class="contact-info-section">
        <div class="contact-details">
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-phone"></i></div>
                <p><?php echo $contactPh1 ?></p>
                <p>|</p>
                <p><?php echo $contactPh2 ?></p>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                <div class="contact-content">
                    <p><?php echo $contactEmail1 ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include($folderPath . "Components/footer.php"); ?>