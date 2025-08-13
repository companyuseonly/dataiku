<?php
    $folderPath = "../../";
    $pageTitle = "Blog Details";
    $pageMeta = "";
    $pageDescription = "";
    $thisPage = "Blog Details";

    include($folderPath . "Components/header.php");

    try {
        if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
            throw new Exception("Invalid blog ID");
        }
        $id = (int) $_GET['id'];

        // Convert all blogs into an array for reuse
        $blogs = [];
        while ($row = mysqli_fetch_assoc($blogresult)) {
            if (empty($row['IsDelete']) || $row['IsDelete'] == 0) {
                $blogs[] = $row;
            }
        }

        // Find current blog
        $blog = null;
        foreach ($blogs as $b) {
            if ((int)$b['ID'] === $id) {
                $blog = $b;
                break;
            }
        }

        usort($blogs, fn($a, $b) => strtotime($a['Event_Date']) <=> strtotime($b['Event_Date']));

        $prevId = null;
        $nextId = null;

        foreach ($blogs as $index => $b) {
            if ((int)$b['ID'] === $id) {
                if (isset($blogs[$index - 1])) {
                    $prevId = $blogs[$index - 1]['ID'];
                }
                if (isset($blogs[$index + 1])) {
                    $nextId = $blogs[$index + 1]['ID'];
                }
                break;
            }
        }

        if (!$blog) {
            throw new Exception("Blog post not found");
        }

        // Get recent blogs excluding current one (latest first)
        $recentBlogs = array_filter($blogs, fn($b) => (int)$b['ID'] !== $id);
        usort($recentBlogs, fn($a, $b) => strtotime($b['Event_Date']) <=> strtotime($a['Event_Date']));
        $recentBlogs = array_slice($recentBlogs, 0, 5);
    } catch (Exception $e) {
        echo "<style>.blog-layout { display: none; }</style>";
        echo "<div class='alert alert-danger'><p>Error: " . $e->getMessage() . "</p><h5>Oops! Something went wrong </h5><a class='btn btn-danger' href='" . $folderPath . "index.php'>Go Back to Home Page</a> </div>";
    }
?>

<section data-bg="<?php echo $folderPath ?>assets/images/background/2148404536.jpg" class="page-title js-color-change rocket-lazyload" style="">
    <span class="overlay" style="background-image: linear-gradient(180deg,rgba(0,0,0,0.4),rgba(0,0,0,0.2));"></span>
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <!-- Breadcrumb NavXT 7.4.1 -->
                <li class="home"><span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to Home." href="<?php echo $folderPath ?>index.php" class="home">
                    <span property="name">Home</span>
                </a>
                        <meta property="position" content="1">
                    </span>
                </li>
                <li class="home"><span property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" title="Go to Blogs." href="../index.php" class="home">
                    <span property="name">Blogs</span>
                </a>
                        <meta property="position" content="1">
                    </span>
                </li>
                <li class="post post-page current-item"><span class="post post-page current-item"></span><?php echo htmlspecialchars($blog['Name']); ?></li>
            </ul>
        </div>
    </div>
    <!--breadcrumbs-->

    <div class="container">
        <div class="holder">
            <h1 class="bot20"><?php echo htmlspecialchars($blog['Name']); ?></h1>
            <span>
                <p class="bot10">
                </p>
            </span>

        </div>
    </div>
</section>

<div class="blog-layout">
    <div class="blog-details-container">
        <div class="blog-details-image">
            <img src="<?php echo $folderPath . htmlspecialchars($blog['Detail_Image_URL']); ?>"
                alt="<?php echo htmlspecialchars($blog['Name']); ?>">
        </div>
        <div class="blog-details-meta">
            <i class="fas fa-calendar-alt"></i> <?php echo date("d M Y", strtotime($blog['Event_Date'])); ?>
            &nbsp; | &nbsp;
            <i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($blog['Venue']); ?>
        </div>
        <h1 class="blog-details-title"><?php echo htmlspecialchars($blog['Name']); ?></h1>
        <div class="blog-details-description">
            <?php echo $blog['Description']; ?>
        </div>
    </div>

    <aside class="blog-sidebar">
        <h3>Recent Blogs</h3>
        <?php foreach ($recentBlogs as $recent) { ?>
            <div class="recent-blog">
                <a href="<?php echo $folderPath; ?>Blog/Details/index.php?id=<?php echo $recent['ID']; ?>">
                    <img src="<?php echo $folderPath . htmlspecialchars($recent['Event_Thumbnail_Image_URL']); ?>"
                        alt="<?php echo htmlspecialchars($recent['Name']); ?>">
                </a>
                <div>
                    <a class="recent-blog-title"
                        href="<?php echo $folderPath; ?>Blog/Details/index.php?id=<?php echo $recent['ID']; ?>">
                        <?php echo htmlspecialchars($recent['Name']); ?>
                    </a>
                    <div class="recent-blog-date">
                        <?php echo date("d M Y", strtotime($recent['Event_Date'])); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </aside>

    <div class="blog-nav">
        <a href="<?php echo $prevId ? $folderPath . 'Blog/Details/index.php?id=' . $prevId : '#'; ?>"
            class="btn <?php echo $prevId ? 'btn-primary' : 'btn-muted'; ?> prev-blog">
            Previous
        </a>

        <a href="<?php echo $nextId ? $folderPath . 'Blog/Details/index.php?id=' . $nextId : '#'; ?>"
            class="btn <?php echo $nextId ? 'btn-primary' : 'btn-muted'; ?> next-blog">
            Next
        </a>
    </div>

</div>

<?php include($folderPath . "Components/footer.php"); ?>