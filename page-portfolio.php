<?php /* Template Name: Portfolio  */ ?>
<?php get_header(); ?>

<h1 class="text-center">Portfolio</h1>
<section class="section-portfolio">
    <?
    $args = array(
        'post_type' => 'portfolio'
    );
    $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a class="portfolio-item" href="<? the_permalink(); ?>">
                <? the_post_thumbnail(); ?>
                <span class="portfolio-item__title"><? the_title(); ?></span>
                <span class="portfolio-item__category"><? the_title(); ?></span>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>