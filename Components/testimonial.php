<?php
  if (!isset($testimonialMode)) {
    $testimonialMode = "1";
  }

  // Single query to fetch all active testimonials
  $testimonialQuery = "SELECT * FROM TESTIMONIALS_RMM WHERE Is_Active = 1 ORDER BY Display_Order ASC";
  $testimonialResult = mysqli_query($con, $testimonialQuery);

  // Store all testimonials in array
  $testimonials = [];
  while ($testimonial = mysqli_fetch_assoc($testimonialResult)) {
      $testimonials[] = $testimonial;
  }
  
  if ($testimonialMode == "1") {
?>

<section class="customer-testimonal margin-top-80">
    <div class="container updated slider">
        <div class="slider">
            <?php foreach($testimonials as $testimonial) { ?>
                <div class="slide">
                    <div class="container slider-background-padding">
                        <div class="two columns" style="text-align:center;">
                            <span style="padding-top:16px; display: block; text-align: center;">
                                <svg width="54" height="40" viewbox="0 0 54 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.22576e-06 19.9731V36.8957C3.22576e-06 37.719 0.363212 38.5086 1.00973 39.0908C1.65625 39.673 2.53311 40 3.44743 40H18.7015C19.6134 39.9928 20.4856 39.6635 21.1304 39.0828C21.7752 38.5022 22.141 37.7168 22.149 36.8957V23.1599C22.149 22.3366 21.7858 21.547 21.1392 20.9648C20.4927 20.3826 19.6159 20.0556 18.7015 20.0556H10.9525C10.7612 20.0528 10.5726 20.0141 10.3989 19.9419C10.2252 19.8696 10.0702 19.7655 9.94381 19.6362C9.81742 19.5069 9.72244 19.3552 9.66497 19.1908C9.6075 19.0265 9.58881 18.8532 9.61009 18.682C9.96221 16.1034 11.2773 13.7091 13.3395 11.8921C15.4017 10.0751 18.0885 8.94325 20.9591 8.68231C21.2995 8.6558 21.6175 8.5184 21.8534 8.29586C22.0893 8.07333 22.2269 7.78095 22.2405 7.47355V1.21001C22.2407 1.04654 22.204 0.884735 22.1328 0.734382C22.0616 0.584029 21.9572 0.448248 21.826 0.335256C21.6948 0.222264 21.5395 0.134406 21.3696 0.0769961C21.1996 0.0195863 21.0185 -0.00618089 20.8371 0.00124951C15.1931 0.316003 9.89488 2.55751 6.02295 6.26867C2.15102 9.97982 -0.00304264 14.8811 3.22576e-06 19.9731ZM53.9995 7.39114V1.21001C53.9997 1.04654 53.9631 0.884735 53.8919 0.734382C53.8206 0.584029 53.7162 0.448248 53.5851 0.335256C53.4539 0.222264 53.2986 0.134406 53.1286 0.0769961C52.9587 0.0195863 52.7775 -0.00618089 52.5962 0.00124951C46.9521 0.316003 41.6539 2.55751 37.782 6.26867C33.9101 9.97982 31.756 14.8811 31.7591 19.9731V36.8957C31.767 37.7168 32.1328 38.5022 32.7776 39.0828C33.4224 39.6635 34.2946 39.9928 35.2065 40H50.4606C51.3724 39.9928 52.2447 39.6635 52.8895 39.0828C53.5343 38.5022 53.9001 37.7168 53.908 36.8957V23.1599C53.908 22.3366 53.5448 21.547 52.8983 20.9648C52.2518 20.3826 51.3749 20.0556 50.4606 20.0556H42.7115C42.5202 20.0528 42.3317 20.0141 42.158 19.9419C41.9843 19.8696 41.8293 19.7655 41.7029 19.6362C41.5765 19.5069 41.4815 19.3552 41.424 19.1908C41.3666 19.0265 41.3479 18.8532 41.3691 18.682C41.7213 16.1034 43.0363 13.7091 45.0985 11.8921C47.1607 10.0751 49.8476 8.94325 52.7182 8.68231C53.0742 8.65443 53.405 8.50531 53.6431 8.26539C53.8812 8.02546 54.0087 7.7128 53.9995 7.39114Z"
                                        fill="#00B2A9" />
                                </svg>
                            </span>
                            <span style="width:110px; height:110px; display: inline-block; text-align:center;">
                                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                     alt="<?php echo htmlspecialchars($testimonial['Company_Name']); ?>" 
                                     data-lazy-src="<?php echo $folderPath . $testimonial['Company_Logo_URL']; ?>" />
                                <noscript>
                                    <img src="<?php echo $folderPath . $testimonial['Company_Logo_URL']; ?>"
                                         alt="<?php echo htmlspecialchars($testimonial['Company_Name']); ?>" />
                                </noscript>
                            </span>
                        </div>
                        <div class="ten columns left40">
                            <p class="slider-text-quote">
                                <?php echo htmlspecialchars($testimonial['Testimonial_Quote']); ?>
                            </p>
                            <?php if (!empty($testimonial['Company_Name'])) { ?>
                                <p class="top10 quote-name-position-new">
                                    <?php echo htmlspecialchars($testimonial['Company_Name']); ?>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php } ?>