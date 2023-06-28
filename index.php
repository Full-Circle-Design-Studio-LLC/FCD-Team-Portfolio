<?php /* Template Name: Home  */ ?>
<?php get_header(); ?>

<section class="hero-section">
    <img class="hero-img" src="<? echo get_template_directory_uri(); ?>/assets/zane.jpg" alt="">
    <div class="jump">
        <a class="jump-link letter-spacing" href="#about">
            <span>ENTER SITE</span>
        </a>
    </div>
</section>

<section id="about" class="about-section">
    <img class="about-img" src="<? echo get_template_directory_uri(); ?>/assets/zane.jpg" alt="headshot of Zane Huggins">
    <h2>About Zane</h2>
    <? the_content(); ?>
    <ul class="link-list mt-50">
        <li><a class="letter-spacing" href="#">VIEW RESUME</a></li>
    </ul>
</section>

<section>
    <h2 class="text-center">Featured Work</h2>
    <div class="carousel" data-slick='{"dots": true, "autoplay": true, "autoplaySpeed": 3500}'>
    <?
    $args = array(
        'post_type' => 'portfolio'
    );
    $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a class="carousel__slide" href="<? the_permalink(); ?>">
                <? the_post_thumbnail('full', ['class' => 'carousel-image']); ?>
                <h3 class="text-center"><? the_title(); ?></h3>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
    <ul class="link-list">
        <li><a class="letter-spacing" href="<? echo get_site_url(); ?>/portfolio">VIEW PORTFOLIO</a></li>
    </ul>
</section>

<section class="gray-bg">
    <h2>Work With Zane</h2>
    <ul class="link-list">
        <li><a class="letter-spacing" href="#">CONSULTING</a></li>
        <li><a class="letter-spacing" href="#">AGENCY</a></li>
    </ul>
</section>

<?php get_footer(); ?>