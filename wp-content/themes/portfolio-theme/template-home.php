<?php
/**
 * Template Name: Home
 */

/**
 * get header.php
 */
get_header();


/**
 * Portfolio CPT args.
 */
$args = array(
	'post_type'		=> 'portfolio',
  'posts_per_page' => 5,
);

$portfolioItem = new WP_Query( $args ); ?>


<section class="landing">
  <div class="landing-background scroll-point">
    <div class="landing-content">
      <h1><?php echo the_field( 'home_landing_title' ); ?></h1>
      <h2><?php echo the_field( 'home_landing_subtitle' ); ?></h2>
    </div>
  </div>
</section>

<section class="portfolio" id="portfolio">

  <?php if( $portfolioItem->have_posts() ):
    while( $portfolioItem->have_posts() ) : $portfolioItem->the_post();

      $attachment_id = get_field( 'portfolio_image' );
      $size = "full";
      $image = wp_get_attachment_image_src($attachment_id, $size);?>

      <div class="portfolio-background scroll-point" style="background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url('<?php echo $image[0]; ?>'); no-repeat center center; background-size: cover;">
      </div>

    <?php endwhile; ?>
  <?php endif; ?>

  <div class="portfolio-content">
    <div class="portfolio-content--left">
      <ul>

        <?php if( $portfolioItem->have_posts() ):
          while( $portfolioItem->have_posts() ) : $portfolioItem->the_post(); $postnum++; ?>

            <li class="project--<?php echo $postnum; ?>">
              <h3 class="project--<?php echo $postnum; ?>__title"><?php the_title(); ?></h3>
              <h4 class="project--<?php echo $postnum; ?>__subtitle"><?php echo the_field( 'portfolio_subtitle' ); ?></h4>
            </li>

          <?php endwhile; ?>
        <?php endif; ?>

        <a href="<?php echo site_url(); ?>/portfolio"><li class="project-title--view-all">View All Projects</li></a>
      </ul>
    </div>

    <div class="portfolio-content--right">
      <div class="project-description">

        <?php if( $portfolioItem->have_posts() ):
          $postnum = 0;
          while( $portfolioItem->have_posts() ) : $portfolioItem->the_post(); $postnum++; ?>

            <div class="project--<?php echo $postnum; ?>__description">
              <p><?php echo the_field( 'portfolio_excerpt' ); ?></p>
              <a href="<?php the_permalink(); ?>">
                <button class="button">View Project</button>
              </a>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>


<?php
/**
 * get footer.php
 */
get_footer();
