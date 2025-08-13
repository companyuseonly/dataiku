<?php
  if (!isset($blogMode)) {
      $blogMode = "1";
  }

    $blogQuery = "SELECT * FROM BLOGS_DETAILS_RMM ORDER BY Event_Date ASC";
  $result = mysqli_query($con, $blogQuery);
  
  if ($blogMode == "1") {
?>



<section class="blog-section padlr">
    <div class="container">
        <div class="blog-grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="<?php echo htmlspecialchars($row['Event_Thumbnail_Image_URL']); ?>" 
                             alt="<?php echo htmlspecialchars($row['Name']); ?>">
                        <span class="blog-date">
                            <?php echo date("d M Y", strtotime($row['Event_Date'])); ?>
                        </span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><?php echo htmlspecialchars($row['Name']); ?></h3>
                        <?php if (!empty($row['Venue'])) { ?>
                            <p class="blog-venue"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($row['Venue']); ?></p>
                        <?php } ?>
                        <p class="blog-description">
                            <?php echo htmlspecialchars(mb_strimwidth(strip_tags($row['Short_Description']), 0, 120, '...')); ?>
                        </p>
                        <a href="blog-details.php?id=<?php echo $row['ID']; ?>" class="blog-btn">Read More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>



<?php } ?>