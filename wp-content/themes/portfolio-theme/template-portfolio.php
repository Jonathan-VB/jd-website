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
    <a class="portfolio-grid__item" href="#">
      <img class="portfolio-grid__item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/block-census-ireland.jpg" alt=""/>
      <figcaption class="portfolio-grid__item__content">
        <h2 class="portfolio-grid__item__content__header">Census Ireland</h2>
        <h3 class="portfolio-grid__item__content__subheader">Data Visualisation using Tableau</h3>
        <p class="portfolio-grid__item__content__paragraph">
          <span class="portfolio-grid__item__content__link" href="#"><i class="fa fa-fw fa-star-o">Case Study</i></span>
        </p>
      </figcaption>
    </a>

    <a class="portfolio-grid__item" href="#">
      <img class="portfolio-grid__item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/block-locomotive.jpg" alt=""/>
      <figcaption class="portfolio-grid__item__content">
        <h2 class="portfolio-grid__item__content__header">Locomotive</h2>
        <h3 class="portfolio-grid__item__content__subheader">Data Visualisation using Tableau</h3>
        <p class="portfolio-grid__item__content__paragraph">
          <span class="portfolio-grid__item__content__link"><i class="fa fa-fw fa-star-o">Case Study</i></span>
        </p>
      </figcaption>
    </a>
  </section>
</div>


<?php
/**
 * get header.php
 */
get_footer();
