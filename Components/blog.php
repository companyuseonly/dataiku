<?php
  if (!isset($blogMode)) {
    $blogMode = "1";
  }

  if ($blogMode == "1") {
?>

  <section class="blog-section padlr">
    <div class="container">
      <h4 class="bot20">Blogs</h4>
      <div class="blog-grid">
        <?php while ($row = $blogresult->fetch_assoc()) { ?>
          <div class="blog-card">
            <div class="blog-image">
              <img src="<?php echo $folderPath . htmlspecialchars($row['Event_Thumbnail_Image_URL']); ?>"
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
              <a href="<?php echo $folderPath ?>Blog/Details/index.php?id=<?php echo $row['ID']; ?>" class="blog-btn">Read More</a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

<?php }
  if ($blogMode == "2") {
?>

  <section class="blog-section padlr">
    <div class="container">
      <h4 class="bot20 padtb">Blogs</h4>
      <div class="blog-grid ">
        <?php
        $count = 0;
        while ($row = $blogresult->fetch_assoc()) {
          if ($count >= 3) break;
        ?>
          <div class="blog-card">
            <div class="blog-image">
              <img src="<?php echo $folderPath . htmlspecialchars($row['Event_Thumbnail_Image_URL']); ?>"
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
              <a href="<?php echo $folderPath ?>Blog/Details/index.php?id=<?php echo $row['ID']; ?>" class="blog-btn">Read More</a>
            </div>
          </div>
        <?php
          $count++;
        }
        ?>

      </div>

      <a href="<?php echo $folderPath ?>Blog/" class="blog-btn view-all" >View All</a>
    </div>
  </section>

<?php } ?>