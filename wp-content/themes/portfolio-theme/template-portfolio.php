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
    <figure class="portfolio-grid__item effect-winston">
      <img class="portfolio-grid__item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/block-census-ireland.jpg" alt=""/>
      <figcaption class="portfolio-grid__item__content">
        <h2 class="portfolio-grid__item__content__header">Census <span>Ireland</span></h2>
        <p class="portfolio-grid__item__content__paragraph">
          <a class="portfolio-grid__item__content__link" href="#"><i class="fa fa-fw fa-star-o">Case Study</i></a>
          <a class="portfolio-grid__item__content__link" href="#"><i class="fa fa-fw fa-comments-o"></i></a>
          <a class="portfolio-grid__item__content__link" href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
        </p>
      </figcaption>
    </figure>

    <figure class="portfolio-grid__item effect-winston">
      <img class="portfolio-grid__item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/block-locomotive.jpg" alt=""/>
      <figcaption class="portfolio-grid__item__content">
        <h2 class="portfolio-grid__item__content__header">Loco<span>motive</span></h2>
        <p class="portfolio-grid__item__content__paragraph">
          <a class="portfolio-grid__item__content__link" href="#"><i class="fa fa-fw fa-star-o">Case Study</i></a>
          <a class="portfolio-grid__item__content__link" href="#"><i class="fa fa-fw fa-comments-o"></i></a>
          <a class="portfolio-grid__item__content__link" href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
        </p>
      </figcaption>
    </figure>
  </section>
</div>


<?php
/**
 * get header.php
 */
get_footer();
