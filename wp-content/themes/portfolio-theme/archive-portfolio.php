<?php
/**
 * Template Name: Portfolio
 */

/**
 * get header.php
 */
get_header();


/**
 * Portfolio CPT args.
 */
$args = array(
  'post_type' => 'portfolio',
);

$portfolioItem = new WP_Query( $args )?>


<div class="container">
  <section class="portfolio-grid">

    <?php if( $portfolioItem->have_posts() ): while( $portfolioItem->have_posts() ) : $portfolioItem->the_post();
      // Image ACF variables
      $attachment_id = get_field( 'portfolio_image' );
      $size = "full";
      $image = wp_get_attachment_image_src($attachment_id, $size);?>

      <a class="portfolio-grid__item" href="<?php the_permalink(); ?>" title="Portfolio grid link to the <?php the_title(); ?> project page">
        <img class="portfolio-grid__item__image" src="<?php echo $image[0]; ?>" alt="The featured image for the <?php the_title(); ?> project"/>
        <figcaption class="portfolio-grid__item__content">
          <h2 class="portfolio-grid__item__content__header"><?php the_title(); ?></h2>
          <h3 class="portfolio-grid__item__content__subheader"><?php echo the_field( 'portfolio_subtitle' ); ?></h3>
          <p class="portfolio-grid__item__content__paragraph">
            <span class="portfolio-grid__item__content__link"><i class="fa fa-fw fa-star-o">Case Study</i></span>
          </p>
        </figcaption>
      </a>

    <?php endwhile;  endif; ?>

  </section>
</div>


<?php
/**
 * get footer.php
 */
get_footer();
