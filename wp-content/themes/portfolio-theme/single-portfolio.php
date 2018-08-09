<?php
/**
 * Template Name: Single Portfolio
 */


/**
 * get header.php
 */
get_header();


/**
 * ACF image variables.
 */
$attachment_id = get_field( 'portfolio_image' );
$size = "full";
$image = wp_get_attachment_image_src($attachment_id, $size);

$prevPost = get_adjacent_post();
$prevThumbnail = get_field( 'portfolio_image', $prevPost->ID );
$prevImage = wp_get_attachment_image_src( $prevThumbnail, $size );
$prevTitle = get_the_title( $prevPost->ID );
$prevLink = get_the_permalink( $prevPost->ID );

$nextPost = get_adjacent_post(false, '', false);
$nextThumbnail = get_field( 'portfolio_image', $nextPost->ID );
$nextImage = wp_get_attachment_image_src( $nextThumbnail, $size );
$nextTitle = get_the_title( $nextPost->ID );
$nextLink = get_the_permalink( $nextPost->ID );


/**
 * Portfolio post loop.
 */
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="heading">
  <div class="heading-background" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url(<?php echo $image[0]; ?>) no-repeat center center; background-size: cover;">
    <div class="container container--small">
      <div class="heading-content">
        <h1 class="heading-content__title"><?php the_title(); ?></h1>
        <h2 class="heading-content__subtitle"><?php echo the_field( 'portfolio_subtitle' ); ?></h2>
      </div>
    </div>
  </div>
</section>


<section class="intro">
  <div class="container container__intro">
    <p><?php echo the_field( 'portfolio_excerpt' ); ?></p>
  </div>
</section>


<section class="main-body">
  <div class="container main-body__container">
    <div class="portfolio-options">
      <?php get_template_part( 'template-parts/single-portfolio/icon-links' ); ?>
      <span class="portfolio-options__last-item">Published: <?php the_date(); ?></span>
    </div>

    <div class="portfolio__main-body">
      <?php echo the_content(); ?>
    </div>

    <div class="portfolio-options">
      <?php get_template_part( 'template-parts/single-portfolio/icon-links' ); ?>
    </div>
  </div>
</section>


<?php
/**
 * The nextTitle (etc) are in the 'previous' class section to match the_post
 * order the projects are in on the archive-portfolio page.
 */ ?>
<section class="previous-next">
  <a href="<?php echo $nextLink; ?>" class="previous" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url(<?php echo $nextImage[0]; ?>) no-repeat center center; background-size: cover;">
    <div class="previous__content">
      <span>Previous:</span>
      <p><?php echo $nextTitle; ?></p>
    </div>
  </a>

  <a href="<?php echo $prevLink ?>" class="next" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)), url(<?php echo $prevImage[0]; ?>) no-repeat center center; background-size: cover;">
    <div class="next__content">
      <span>Next:</span>
      <p><?php echo $prevTitle; ?></p>
    </div>
  </a>
</section>


<?php
/**
 * End portfolio post loop.
 */
endwhile; endif;



/**
 * get header.php
 */
get_footer();
