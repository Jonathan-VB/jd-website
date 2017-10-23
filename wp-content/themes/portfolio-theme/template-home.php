<?php
/**
 * Template Name: Home
 */

/**
 * get header.php
 */
get_header();


// args
$args = array(
	'post_type'		=> 'portfolio',
  'posts_per_page' => 2,
);

// query
$the_query = new WP_Query( $args );

 ?>


<section class="landing">
  <div class="landing-background scroll-point">
    <div class="landing-content">
      <h1><?php echo the_field( 'home_landing_title' ); ?></h1>
      <h2><?php echo the_field( 'home_landing_subtitle' ); ?></h2>
    </div>
  </div>
</section>

<section class="portfolio" id="portfolio">
  <div class="portfolio-background scroll-point" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-census-ireland.jpg'); no-repeat center center; background-size: cover;">
  </div>

  <div class="portfolio-background scroll-point" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-selfie-app.jpg'); no-repeat center center; background-size: cover;">
  </div>

  <div class="portfolio-background scroll-point" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-valkyrie.jpg'); no-repeat center center; background-size: cover;">
  </div>

  <div class="portfolio-background scroll-point" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-bootstrap-newspaper.jpg'); no-repeat center center; background-size: cover;">
  </div>

  <div class="portfolio-background scroll-point" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-keep-them-safe.jpg'); no-repeat center center; background-size: cover;">
  </div>

  <div class="portfolio-content">
    <div class="portfolio-content--left">
      <ul>

      <?php if( $the_query->have_posts() ): ?>
	        <?php while( $the_query->have_posts() ) : $the_query->the_post();
          $postnum++;?>
            <li class="project--<?php echo $postnum; ?>">
              <h3 class="project--<?php echo $postnum; ?>__title"><?php the_title(); ?></h3>
              <h4 class="project--<?php echo $postnum; ?>__subtitle"><?php echo the_field('portfolio_subtitle'); ?></h4>
            </li>
          <?php endwhile; ?>
      <?php endif; ?>


        <!-- <li class="project--2">
          <h3 class="project--2__title">Selfie App</h3>
          <h4 class="project--2__subtitle">JavaScript &amp; HTML5 Canvas App</h4>
        </li> -->
        <li class="project--3">
          <h3 class="project--3__title">Valkyrie</h3>
          <h4 class="project--3__subtitle">JavaScript &amp; HTML5 Canvas Game</h4>
        </li>
        <li class="project--4">
          <h3 class="project--4__title">Bootstrap Newspaper</h3>
          <h4 class="project--4__subtitle">Web Design Concepts Using Bootstrap</h4>
        </li>
        <li class="project--5">
          <h3 class="project--5__title">Restful API Games List</h3>
          <h4 class="project--5__subtitle">MongoDB, Node.js &amp; Backbone.js</h4>
        </li>
        <a href="<?php echo site_url(); ?>/portfolio"><li class="project-title--view-all">View All Projects</li></a>
      </ul>
    </div>

    <div class="portfolio-content--right">
      <div class="project-description">
        <div class="project--1__description">
          <p>Census Ireland is a web application that allows users to dynamically interact with data being displayed on a map of Ireland.</p>
          <button class="button">View Case Study</button>
        </div>
        <div class="project--2__description">
          <p>The selfie app allows users to take a photo from the video stream and edit the photo using a drawing function, frames and filters. Once the user is done editing their photo they can upload it to a server.</p>
          <button class="button">View Case Study</button>
        </div>
        <div class="project--3__description">
          <p>A HTML5/JavaScript canvas game was created that allowed users to control Valkyrie, a flying turtle, with the aim of avoiding oncoming missiles.</p>
          <button class="button">View Case Study</button>
        </div>
        <div class="project--4__description">
          <p>The objective of this project was to create a news website with a home page and article page. The design doesn’t use any images, videos or colour which meant design techniques were established to show contrast between the sites different sections.</p>
          <button class="button">View Case Study</button>
        </div>
        <div class="project--5__description">
          <p>Keep Them Safe is a website created to help teach parents/guardians how to protect their children from online dangers. Users can access and leave comments on forums and view, add, edit, remove articles and videos, depending on the user's privilage level on the site.</p>
          <button class="button">View Case Study</button>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
/**
 * get footer.php
 */
get_footer();
