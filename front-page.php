<?php
/**
 * Custom Homepage Template for FloBites V2
 */
get_header(); ?>

<main class="flobites-v2-wrapper">

    <!-- =====================
         HERO SECTION
    ====================== -->
    <section class="hero">

        <!-- Left: text content -->
        <div class="hero__content hero-text-content">
            <h1 class="hero__heading">
                <span class="hero__word--fredoka">Your </span><span class="hero__word--fredoka hero__word--accent">cycle's </span><span class="hero__word--lora">new</span>
                <br>
                <span class="hero__word--fredoka">best friend.</span>
            </h1>
            <p class="hero__subtext">FloBites is a seed and millet-based bar designed to nourish your body with period week in mind, naturally.</p>
            <div class="hero__actions">
                <a href="#" class="hero__btn hero__btn--primary">Buy Now</a>
                <a href="#" class="hero__btn hero__btn--outline">Explore Flo</a>
            </div>
        </div>

        <!-- The Single Combined Image -->
        <img 
            src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/hero-product.png" 
            class="hero-product-image" 
            alt="Flo Bites Daily Seed + Millet Bar"
        >

    </section>

    <!-- =====================
         PROBLEM SECTION (Pink Cut-Off Layer)
    ====================== -->
    <section class="problem-section">
        <!-- This section now acts as the pink layer that overlaps the pouch -->
        <div class="problem-section-inner">
            <!-- Column 1: Battery -->
            <div class="problem-card">
             <img src="http://flobites-local.local/wp-content/uploads/2026/05/battery.png" alt="Mid-Cycle Slump">
                <h3 class="problem-heading">Mid-Cycle Slump</h3>
                <p class="problem-text">Feeling drained when you should be thriving?<br>We get the hormonal shifts that cause energy dips.</p>
            </div>

            <!-- Column 2: Cravings -->
            <div class="problem-card">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/cravings.png" alt="Intense Cravings">
                <h3 class="problem-heading">Intense Cravings</h3>
                <p class="problem-text">Late-night sweet hunts? What if you found a way to<br>satisfy your cravings the period-positive way?</p>
            </div>

            <!-- Column 3: Discomfort -->
            <div class="problem-card">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/discomfort.png" alt="Monthly Discomfort">
                <h3 class="problem-heading">Monthly Discomfort</h3>
                <p class="problem-text">Mood swings and bloating feeling "normal" around your<br>period? Nature has a better way.</p>
            </div>
        </div>
    </section>

    <section class="simple-nutrition-section">
        <div class="simple-nutrition-container">
            <!-- Left Column: Image -->
            <div class="nutrition-image-col">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/women-eating.png" alt="Woman enjoying a FloBites bar" class="nutrition-img">
            </div>
            <!-- Right Column: Content -->
            <div class="nutrition-content-col">
                <h2 class="nutrition-heading"><span class="flo-accent-span">Period Week</span> Nutrition,<br>Made Simple.</h2>
                <p class="nutrition-paragraph">Seed cycling is a powerful ritual for hormone balance, but it's hard to stay consistent. We've simplified the science into a delicious, daily snack bar that does the heavy lifting for you.</p>
                <a href="#" class="nutrition-primary-btn">Get Yours Today</a>
                <a href="#" class="nutrition-secondary-link">EXPLORE INGREDIENTS &rarr;</a>
            </div>
        </div>
    </section>

    <section class="super-seeds-section">
    <div class="super-seeds-container">
        <h2 class="super-seeds-main-heading">The Super Seeds Formula</h2>

        <div class="seeds-grid">
            <!-- Flax -->
            <div class="seed-card">
                <div class="seed-benefits">
                    <span>hormone balancing & anti-inflammatory</span>
                    <span>vitamin b6 & b9</span>
                </div>
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/flax-seeds.png" alt="Flax seeds" class="seed-img">
                <h3 class="seed-title">Flax seeds</h3>
                <p class="seed-desc">Helps balance estrogen levels, supporting smoother cycle transitions.</p>
            </div>

            <!-- Pumpkin -->
            <div class="seed-card">
                <div class="seed-benefits">
                    <span>Supports hormones & immunity</span>
                    <span>Zinc & Magnesium</span>
                </div>
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/pumpkin-seeds.png" alt="Pumpkin seeds" class="seed-img">
                <h3 class="seed-title">Pumpkin seeds</h3>
                <p class="seed-desc">Rich in <strong>magnesium</strong>, helps reduce PMS symptoms and supports <strong>hormone balance</strong>.</p>
            </div>

            <!-- Sunflower -->
            <div class="seed-card">
                <div class="seed-benefits">
                    <span>skin & hair support</span>
                    <span>vitamin E & healthy fats</span>
                </div>
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/sunflower-seeds.png" alt="Sunflower seeds" class="seed-img">
                <h3 class="seed-title">Sunflower seeds</h3>
                <p class="seed-desc">Supports estrogen balance and helps ease mood swings during your cycle.</p>
            </div>

            <!-- Sesame -->
            <div class="seed-card">
                <div class="seed-benefits">
                    <span>bone health support</span>
                    <span>calcium, copper & iron</span>
                </div>
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/sesame-seeds.png" alt="Sesame seeds" class="seed-img">
                <h3 class="seed-title">Sesame seeds</h3>
                <p class="seed-desc">Promotes progesterone production, helping regulate your menstrual cycle.</p>
            </div>
        </div>
    </div>
</section>

<section class="ingredient-purpose-section">
    <!-- Title Image -->
    <div class="purpose-header">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/Where-Every-Ingredient-Serves-a-Purpose.png" alt="Where Every Ingredient Serves a Purpose" class="purpose-title-img">
    </div>

    <!-- The Visual Equation -->
    <div class="purpose-equation-container">

        <!-- Part 1: The Super Seeds Circle -->
        <div class="equation-part circle-group">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/Ellipse-1.png" alt="White Circle" class="base-circle">
            <!-- Text inside circle -->
            <div class="circle-center-text">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/4.png" alt="4" class="text-4">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/super-seeds.png" alt="super seeds" class="text-super-seeds">
            </div>
            <!-- Seeds around the perimeter -->
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/sesame-top.png" class="floating-seed seed-top">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/chia-top.png" class="floating-seed seed-right">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/sunflower-top.png" class="floating-seed seed-bottom">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/pumpkin-top.png" class="floating-seed seed-left">
        </div>

        <!-- Plus Sign -->
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/unnamed-file-1.png" alt="Plus" class="math-symbol main-plus">

        <!-- Part 2: Ragi & Minerals -->
        <div class="equation-part ragi-group">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/ragi-millets-1.png" alt="ragi millets" class="ragi-title-img">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/ragi-millets.png" alt="Ragi Millets" class="ragi-main-img">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/unnamed-file-1.png" alt="Plus" class="math-symbol small-plus">
            <div class="minerals-row">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/fe.png" alt="Iron" class="mineral-img">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/mg.png" alt="Magnesium" class="mineral-img">
            </div>
        </div>

        <!-- Equals Sign -->
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/unnamed-file.png" alt="Equals" class="math-symbol main-equals">

        <!-- Part 3: Outcome -->
        <div class="equation-part outcome-group">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/outcome.png" alt="FloBites Bars" class="outcome-img">
        </div>

    </div>

    <!-- CTA Button -->
    <div class="purpose-footer">
        <a href="/shop">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/Button.png" alt="Get Yours Today" class="purpose-btn-img">
        </a>
    </div>
</section>

<section class="cycle-balance-section">
    <h2 class="cycle-main-heading">THE Cycle of <span class="flo-accent-span">Balance</span></h2>

    <div class="cycle-diagram-container">
        <!-- Center Infinity Shape -->
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/Union.png" alt="Infinity Cycle" class="cycle-union-img">

        <!-- Floating Heart Icon -->
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/heart.png" alt="Heart" class="cycle-heart-icon">

        <!-- Left: Eat -->
        <div class="cycle-block block-left">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/Eat.png" alt="Eat" class="cycle-header-img">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/eat-text.png" alt="Eat Description" class="cycle-text-img">
        </div>

        <!-- Bottom: Nourish -->
        <div class="cycle-block block-bottom">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/Nourish.png" alt="Nourish" class="cycle-header-img">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/nourish-text.png" alt="Nourish Description" class="cycle-text-img">
        </div>

        <!-- Right: Feel Better -->
        <div class="cycle-block block-right">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/Feel-Better.png" alt="Feel Better" class="cycle-header-img">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/fell-better-text.png" alt="Feel Better Description" class="cycle-text-img">
        </div>
    </div>
</section>

<section class="buy-collection-section">
    <h2 class="collection-main-heading"><span class="bold-sans">Buy the</span> Collection</h2>

    <div class="collection-cards-wrapper">

        <!-- Card 1: THE Combo 6 -->
        <div class="flo-product-card">
            <div class="card-image-container">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/combo6.png" alt="THE Combo 6">
            </div>
            <div class="card-content">
                <div class="card-header-row">
                    <h3 class="card-title">THE Combo 6</h3>
                    <div class="card-price-box">
                        <span class="pack-size">Pack of 6</span>
                        <span class="price-amt">399/-</span>
                    </div>
                </div>
                <p class="card-description">A tasteful mix of jaggery and dark chocolate bars</p>
                <div class="card-bottom-row">
                    <ul class="card-bullets">
                        <li>Goodness of Millets with Jaggery and Dark Chocolate</li>
                        <li>THE Super Seeds Formula</li>
                    </ul>
                    <button class="flo-add-cart-btn">ADD TO CART</button>
                </div>
            </div>
        </div>

        <!-- Card 2: THE Dark Indulgence -->
        <div class="flo-product-card">
            <div class="card-image-container">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/dark-indulgence.png" alt="THE Dark Indulgence">
            </div>
            <div class="card-content">
                <div class="card-header-row">
                    <h3 class="card-title">THE Dark Indulgence</h3>
                    <div class="card-price-box">
                        <span class="pack-size">Pack of 6</span>
                        <span class="price-amt">449/-</span>
                    </div>
                </div>
                <p class="card-description">The ultimate cravings pack, infused with dark chocolate</p>
                <div class="card-bottom-row">
                    <ul class="card-bullets">
                        <li>Goodness of Millets and Dark Chocolate</li>
                        <li>THE Super Seeds Formula</li>
                    </ul>
                    <button class="flo-add-cart-btn">ADD TO CART</button>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="benefits-image-section">
    <div class="benefits-container">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/Frame-29.png" alt="FloBites Benefits and Features" class="benefits-full-img">
    </div>
</section>

<section class="stories-section">
    <h2 class="stories-heading">Real Stories, Real Relief</h2>

    <div class="video-grid-container">
        <!-- Video Placeholder 1 -->
        <div class="video-placeholder">
            <div class="play-icon-overlay"></div>
        </div>

        <!-- Video Placeholder 2 -->
        <div class="video-placeholder">
            <div class="play-icon-overlay"></div>
        </div>

        <!-- Video Placeholder 3 -->
        <div class="video-placeholder">
            <div class="play-icon-overlay"></div>
        </div>

        <!-- Video Placeholder 4 -->
        <div class="video-placeholder">
            <div class="play-icon-overlay"></div>
        </div>
    </div>

    <div class="stories-btn-container">
        <a href="#" class="flo-primary-btn-pink">Get Yours Today</a>
    </div>
</section>

<!-- TEMPORARY PLACEHOLDER SECTION -->
<section class="placeholder-section">
    <h3>[ Future Section Placeholder ]</h3>
</section>

<!-- FREQUENTLY ASKED QUESTIONS SECTION -->
<section class="faq-section">
    <!-- Floating Background Images -->
    <div class="faq-bg-container">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/thinking.png" class="faq-bg-img img-1" alt="">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/thinking.png" class="faq-bg-img img-2" alt="">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/found.png" class="faq-bg-img img-3" alt="">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/found.png" class="faq-bg-img img-4" alt="">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/idea.png" class="faq-bg-img img-5" alt="">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/idea.png" class="faq-bg-img img-6" alt="">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/thumbsup.png" class="faq-bg-img img-7" alt="">
        <img src="http://flobites-local.local/wp-content/uploads/2026/05/thumbsup.png" class="faq-bg-img img-8" alt="">
    </div>

    <div class="faq-content-wrapper">
        <h2 class="faq-heading">Frequently Asked Questions</h2>

        <div class="faq-accordion">
            <details class="faq-item">
                <summary>What is Flo Bites? <span class="faq-arrow">▼</span></summary>
                <div class="faq-answer"><p>Answer coming soon...</p></div>
            </details>

            <details class="faq-item">
                <summary>Is Flo Bites backed by research? <span class="faq-arrow">▼</span></summary>
                <div class="faq-answer"><p>Answer coming soon...</p></div>
            </details>

            <details class="faq-item">
                <summary>Seed Cycling vs Flo Bites — What's the Difference? <span class="faq-arrow">▼</span></summary>
                <div class="faq-answer"><p>Answer coming soon...</p></div>
            </details>

            <details class="faq-item">
                <summary>Can Flo Bites replace supplements? <span class="faq-arrow">▼</span></summary>
                <div class="faq-answer"><p>Answer coming soon...</p></div>
            </details>

            <details class="faq-item">
                <summary>Is Flo Bites only for period week? <span class="faq-arrow">▼</span></summary>
                <div class="faq-answer"><p>Answer coming soon...</p></div>
            </details>

            <details class="faq-item">
                <summary>Who should avoid Flo Bites? <span class="faq-arrow">▼</span></summary>
                <div class="faq-answer"><p>Answer coming soon...</p></div>
            </details>

            <details class="faq-item">
                <summary>How should Flo Bites be consumed? <span class="faq-arrow">▼</span></summary>
                <div class="faq-answer"><p>Answer coming soon...</p></div>
            </details>
        </div>
    </div>
</section>

<section class="more-about-section">
    <div class="more-about-container">

        <!-- Header Row -->
        <div class="more-about-header">
            <h2 class="more-about-title">More About Flo</h2>
            <a href="https://www.cureus.com/articles/472757-role-of-functional-foods-and-nutraceutical-compounds-in-alleviating-polycystic-ovary-syndrome-a-narrative-review#!/" class="view-all-link" target="_blank" rel="noopener noreferrer">VIEW ALL BLOGS</a>
        </div>

        <!-- Peach Blog Banner Box -->
        <div class="blog-banner-box">
            <div class="blog-banner-content">
                <h3 class="blog-banner-text">Did you know that functional foods can reduce PCOS?<br>Here's what you should know</h3>
                <a href="#" class="blog-read-btn">Read Blog</a>
            </div>
            <div class="blog-banner-image">
                <img src="http://flobites-local.local/wp-content/uploads/2026/05/blog-sec.png" alt="PCOS and Functional Foods">
            </div>
        </div>

    </div>
</section>

<section class="cta-banner-section">
    <div class="cta-banner-content">
        <h2 class="cta-heading">Give your cycle the<br>care it needs. Now.</h2>
        <p class="cta-subheading">Join 10,000+ women who snack with purpose.</p>
        <a href="#" class="cta-buy-btn">BUY NOW</a>
    </div>
</section>

</main>

<?php get_footer(); ?>