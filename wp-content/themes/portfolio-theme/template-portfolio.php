<?php
/**
 * Template Name: Portfolio
 */

/**
 * get header.php
 */
get_header(); ?>


<div class="container">
  <section class="portfolio-grid">
    <div class="grid">
      <figure class="effect-winston">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/block-census-ireland.jpg" alt=""/>
        <figcaption>
          <h2>Census <span>Ireland</span></h2>
          <p>
            <a href="#"><i class="fa fa-fw fa-star-o">Case Study</i></a>
            <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
            <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
          </p>
        </figcaption>
      </figure>
      <figure class="effect-winston">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/block-locomotive.jpg" alt=""/>
        <figcaption>
          <h2>Loco<span>motive</span></h2>
          <p>
            <a href="#"><i class="fa fa-fw fa-star-o">Case Study</i></a>
            <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
            <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
          </p>
        </figcaption>
      </figure>
    </div>
  </section>
</div>


<?php
/**
 * get header.php
 */
get_footer();
