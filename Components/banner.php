<?php
    if (!isset($bannerMode)) {
        $bannerMode = "1";
    }

    $query = "SELECT * FROM BANNERS_RMM WHERE Status='Active' ORDER BY Display_Order ASC";
    $result = mysqli_query($con, $query);
    $slides = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $totalSlides = count($slides);

    if ($bannerMode == "1") {
?>

    <div class="hero-slider-container">
        <div class="hero-slider-wrapper" id="heroSliderWrapper">
            <?php
            $slideIndex = 0;
            foreach ($slides as $row):
            ?>
                <div class="hero-slide <?php echo $slideIndex === 0 ? 'active' : ''; ?>"
                    style="background-image: url('<?php echo $folderPath . htmlspecialchars($row['Detail_Image_URL']); ?>')"
                    data-slide="<?php echo $slideIndex; ?>">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <h1 class="hero-title"><?php echo htmlspecialchars($row['Name']); ?></h1>
                        <p class="hero-subtitle"><?php echo htmlspecialchars($row['SubTitle']); ?></p>
                        <?php if (!empty($row['Link']) && !empty($row['Link_Text'])): ?>
                            <a href="<?php echo $folderPath . htmlspecialchars($row['Link']); ?>" class="hero-btn">
                                <?php echo htmlspecialchars($row['Link_Text']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                $slideIndex++;
            endforeach;
            ?>
        </div>

        <button class="hero-nav hero-prev" id="heroPrev">&#10094;</button>
        <button class="hero-nav hero-next" id="heroNext">&#10095;</button>

        <div class="hero-indicators" id="heroIndicators">
            <?php for ($i = 0; $i < $totalSlides; $i++): ?>
                <div class="hero-dot <?php echo $i === 0 ? 'active' : ''; ?>" data-slide="<?php echo $i; ?>"></div>
            <?php endfor; ?>
        </div>

        <div class="hero-progress" id="heroProgress"></div>
    </div>

    <script>
        class HeroSlider {
            constructor() {
                this.currentSlide = 0;
                this.totalSlides = <?php echo $totalSlides; ?>;
                this.autoPlayInterval = 6000;
                this.autoPlayTimer = null;
                this.isTransitioning = false;

                this.wrapper = document.getElementById('heroSliderWrapper');
                this.slides = document.querySelectorAll('.hero-slide');
                this.prevBtn = document.getElementById('heroPrev');
                this.nextBtn = document.getElementById('heroNext');
                this.indicators = document.querySelectorAll('.hero-dot');
                this.progress = document.getElementById('heroProgress');

                this.init();
            }

            init() {
                this.bindEvents();
                this.startAutoPlay();
                this.updateProgress();
            }

            bindEvents() {
                this.prevBtn.addEventListener('click', () => this.prevSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());

                this.indicators.forEach((dot, index) => {
                    dot.addEventListener('click', () => this.goToSlide(index));
                });

                // Pause autoplay on hover
                this.wrapper.parentElement.addEventListener('mouseenter', () => this.pauseAutoPlay());
                this.wrapper.parentElement.addEventListener('mouseleave', () => this.startAutoPlay());

                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') this.prevSlide();
                    if (e.key === 'ArrowRight') this.nextSlide();
                });
            }

            goToSlide(index) {
                if (this.isTransitioning || index === this.currentSlide) return;

                this.isTransitioning = true;

                // Remove active class from current slide
                this.slides[this.currentSlide].classList.remove('active');
                this.indicators[this.currentSlide].classList.remove('active');

                // Update current slide
                this.currentSlide = index;

                // Add active class to new slide
                this.slides[this.currentSlide].classList.add('active');
                this.indicators[this.currentSlide].classList.add('active');

                // Reset transition lock after animation completes
                setTimeout(() => {
                    this.isTransitioning = false;
                }, 800);

                this.restartAutoPlay();
                this.updateProgress();
            }

            nextSlide() {
                const nextIndex = (this.currentSlide + 1) % this.totalSlides;
                this.goToSlide(nextIndex);
            }

            prevSlide() {
                const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                this.goToSlide(prevIndex);
            }

            startAutoPlay() {
                this.autoPlayTimer = setInterval(() => {
                    this.nextSlide();
                }, this.autoPlayInterval);

                this.updateProgress();
            }

            pauseAutoPlay() {
                if (this.autoPlayTimer) {
                    clearInterval(this.autoPlayTimer);
                    this.autoPlayTimer = null;
                }
            }

            restartAutoPlay() {
                this.pauseAutoPlay();
                this.startAutoPlay();
            }

            updateProgress() {
                this.progress.style.width = '0%';

                const progressTimer = setInterval(() => {
                    if (!this.autoPlayTimer) {
                        clearInterval(progressTimer);
                        return;
                    }

                    const elapsed = Date.now() - this.progressStartTime;
                    const percentage = (elapsed / this.autoPlayInterval) * 100;

                    if (percentage >= 100) {
                        this.progress.style.width = '100%';
                        clearInterval(progressTimer);
                    } else {
                        this.progress.style.width = percentage + '%';
                    }
                }, 100);

                this.progressStartTime = Date.now();
            }
        }

        // Initialize slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            new HeroSlider();
        });
    </script>

<?php } ?>