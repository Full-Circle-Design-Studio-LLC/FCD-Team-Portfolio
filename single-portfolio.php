<?php /* Template Name: Portfolio Item  */ ?>
<?php get_header(); ?>

<section class="portfolio-section">
    <img src="<? echo get_template_directory_uri(); ?>/assets/zane.jpg" alt="#"></img>
    <div class="portfolio-section__banner">
        <h1 class="text-center"><? the_title(); ?></h1>
        <div class="jump">
            <a class="jump-link letter-spacing" href="#about">
                <span>LEARN MORE</span>
            </a>
        </div>
    </div>
</section>

<section class="portfolio-section">
    <img src="<? echo get_template_directory_uri(); ?>/assets/zane.jpg" alt="#"></img>
    <div class="portfolio-section__banner">
        <h2 class="text-center">Details</h2>
        <p>Zane Huggins is a creative designer who specializes in branding and web design. He is the co-owner of Full Circle Design, an agency with members spanning four states and serving clients across the country.</p>
    </div>
</section>

<section class="portfolio-section">
    <div class="portfolio-gallery">
        <img src="<? echo get_template_directory_uri(); ?>/assets/zane.jpg">
        <img src="<? echo get_template_directory_uri(); ?>/assets/zane.jpg">
        <img src="<? echo get_template_directory_uri(); ?>/assets/zane.jpg">
        <img src="<? echo get_template_directory_uri(); ?>/assets/zane.jpg">
    </div>
    <div class="portfolio-section__banner">
        <h2 class="text-center">Details</h2>
        <p>Zane Huggins is a creative designer who specializes in branding and web design. He is the co-owner of Full Circle Design, an agency with members spanning four states and serving clients across the country.</p>
    </div>
</section>

<section class="gray-bg">
    <h2>Work With Zane</h2>
    <ul class="link-list">
        <li><a class="letter-spacing" href="#">CONSULTING</a></li>
        <li><a class="letter-spacing" href="#">AGENCY</a></li>
    </ul>
</section>

<?php get_footer(); ?>