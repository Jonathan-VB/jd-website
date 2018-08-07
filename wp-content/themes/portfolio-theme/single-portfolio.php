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

  <!-- <span class="divider__circle--white"></span> -->
</section>

<section class="main-body">
  <div class="container main-body__container">
    <div class="portfolio-options">
      <!-- <a href="#">Back Page
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"width="30px" height="30px">
          <g>
            <path d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124    c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844    L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412    c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008    c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788    C492,219.198,479.172,207.418,464.344,207.418z" fill="#111"/>
          </g>
        </svg>
      </a> -->
      <?php if( get_field('project_link') ): ?>

        <a href="<?php echo the_field('project_link'); ?>" target="_blank" rel="noopener noreferrer" title="Link to the demo for the <?php the_title(); ?> project">Demo
          <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 388.2 388.201">
            <g>
              <path d="M381.299,209.457c-0.578-2.01-1.785-3.783-3.442-5.062c-14.076-10.851-28.529-16.818-42.853-18.164     c0,0-1.908-0.307-6.504-0.307c-4.598,0-6.941,0.299-6.941,0.299c-13.812,1.629-27.643,7.711-41.215,18.172     c-1.658,1.277-2.864,3.053-3.442,5.062c-6.662,23.091-8.439,45.242-5.597,69.711c2.513,21.63,8.472,43.341,15.425,67.442     c0.579,2.011,1.786,3.785,3.442,5.062c10.658,8.217,24.482,12.739,38.926,12.739c14.444,0,28.271-4.522,38.929-12.737     c1.657-1.277,2.864-3.054,3.444-5.063c6.953-24.104,12.912-45.812,15.425-67.441     C389.738,254.699,387.961,232.546,381.299,209.457z M337.701,249.556c0,4.751-3.853,8.602-8.603,8.602s-8.6-3.851-8.6-8.602     v-35.875c0-4.75,3.85-8.603,8.6-8.603s8.603,3.853,8.603,8.603V249.556z" fill="#111"/>
              <path d="M263.645,341.357h-15.51l-12.8-43.521h26.126c-0.816-4.665-1.514-9.327-2.059-14.008     c-1.648-14.195-1.847-27.68-0.576-40.992H30V50.857h310v123.237c10.1,1.013,20.131,3.962,30,8.795V35.857c0-8.284-6.717-15-15-15     H15c-8.284,0-15,6.716-15,15v246.979c0,8.285,6.716,15,15,15h119.664l-12.799,43.521h-15.508c-3.938,0-7.131,3.192-7.131,7.13     v11.726c0,3.938,3.193,7.131,7.131,7.131h157.288c3.938,0,7.13-3.192,7.13-7.131v-11.726     C270.773,344.549,267.582,341.357,263.645,341.357z" fill="#111"/>
            </g>
          </svg>
        </a>

      <?php endif; ?>

      <?php if( get_field('github_link') ): ?>

        <a href="https://github.com/Jonathan-VB<?php echo the_field('github_link'); ?>" target="_blank" rel="noopener noreferrer" title="Link to the Github page where the <?php the_title(); ?> project is stored">Github
          <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 438.536 438.536">
            <g>
              <path d="M414.41,24.123C398.326,8.042,378.964,0,356.309,0H82.225C59.577,0,40.208,8.042,24.123,24.123    C8.042,40.207,0,59.576,0,82.225v274.088c0,22.65,8.042,42.017,24.123,58.098c16.084,16.084,35.454,24.126,58.102,24.126h63.953    c4.184,0,7.327-0.144,9.42-0.424c2.092-0.288,4.184-1.526,6.279-3.717c2.096-2.187,3.14-5.376,3.14-9.562    c0-0.568-0.05-7.046-0.144-19.417c-0.097-12.375-0.144-22.176-0.144-29.41l-6.567,1.143c-4.187,0.76-9.469,1.095-15.846,0.999    c-6.374-0.096-12.99-0.76-19.841-1.998c-6.855-1.239-13.229-4.093-19.13-8.562c-5.898-4.477-10.085-10.328-12.56-17.559    l-2.856-6.571c-1.903-4.373-4.899-9.229-8.992-14.554c-4.093-5.332-8.232-8.949-12.419-10.852l-1.999-1.428    c-1.331-0.951-2.568-2.098-3.711-3.429c-1.141-1.335-1.997-2.669-2.568-3.997c-0.571-1.335-0.097-2.43,1.427-3.289    c1.524-0.855,4.281-1.279,8.28-1.279l5.708,0.855c3.808,0.76,8.516,3.042,14.134,6.851c5.614,3.806,10.229,8.754,13.846,14.843    c4.38,7.806,9.657,13.75,15.846,17.843c6.184,4.097,12.419,6.143,18.699,6.143s11.704-0.476,16.274-1.424    c4.565-0.954,8.848-2.385,12.847-4.288c1.713-12.751,6.377-22.559,13.988-29.41c-10.848-1.143-20.602-2.854-29.265-5.14    c-8.658-2.286-17.605-5.995-26.835-11.136c-9.234-5.14-16.894-11.512-22.985-19.13c-6.09-7.618-11.088-17.61-14.987-29.978    c-3.901-12.375-5.852-26.652-5.852-42.829c0-23.029,7.521-42.637,22.557-58.814c-7.044-17.32-6.379-36.732,1.997-58.242    c5.52-1.714,13.706-0.428,24.554,3.855c10.85,4.286,18.794,7.951,23.84,10.992c5.046,3.042,9.089,5.614,12.135,7.71    c17.705-4.949,35.976-7.423,54.818-7.423c18.841,0,37.115,2.474,54.821,7.423l10.849-6.852c7.426-4.57,16.18-8.757,26.269-12.562    c10.088-3.806,17.795-4.854,23.127-3.14c8.562,21.51,9.328,40.922,2.279,58.241c15.036,16.179,22.559,35.786,22.559,58.815    c0,16.18-1.951,30.505-5.852,42.969c-3.898,12.467-8.939,22.463-15.13,29.981c-6.184,7.519-13.894,13.843-23.124,18.986    c-9.232,5.137-18.178,8.853-26.84,11.132c-8.661,2.286-18.414,4.004-29.263,5.147c9.891,8.562,14.839,22.072,14.839,40.538v68.238    c0,3.237,0.472,5.852,1.424,7.851c0.958,1.998,2.478,3.374,4.571,4.141c2.102,0.76,3.949,1.235,5.571,1.424    c1.622,0.191,3.949,0.287,6.995,0.287h63.953c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102    V82.225C438.533,59.576,430.491,40.204,414.41,24.123z" fill="#111"/>
            </g>
          </svg>
        </a>

      <?php endif; ?>

      <?php if( get_field('download_link') ): ?>

        <a href="<?php echo get_field( 'download_link' ); ?>" download title="Download button for the <?php the_title(); ?> project's files">Download
          <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 73.169 73.169">
            <g>
              <path d="M68.912,62.662H4.257C1.906,62.662,0,64.58,0,66.957c0,2.369,1.906,4.287,4.257,4.287h64.655     c2.352,0,4.257-1.918,4.257-4.287C73.169,64.58,71.264,62.662,68.912,62.662z M32.723,51.461     c0.793,0.948,1.955,1.505,3.188,1.526h0.071c1.208,0,2.362-0.519,3.17-1.429L57.49,30.965c1.136-1.278,1.406-3.113,0.691-4.678     c-0.719-1.558-2.302-2.521-3.99-2.482l-5.17,0.158V6.22c0-2.369-1.906-4.295-4.258-4.295h-16.45     c-1.128,0-2.211,0.451-3.012,1.256c-0.798,0.805-1.249,1.903-1.249,3.039l0.004,17.743l-5.122-0.158     c-1.67-0.045-3.23,0.902-3.96,2.422c-0.733,1.521-0.508,3.34,0.571,4.634L32.723,51.461z" fill="#111"/>
            </g>
          </svg>
        </a>

      <?php endif; ?>

      <span class="portfolio-options__last-item">Published: <?php the_date(); ?></span>

    </div>

    <div class="portfolio__main-body">
      <?php echo the_content(); ?>
    </div>

    <div class="portfolio-options">
      <!-- <a href="#">Back Page
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"width="30px" height="30px">
          <g>
            <path d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124    c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844    L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412    c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008    c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788    C492,219.198,479.172,207.418,464.344,207.418z" fill="#111"/>
          </g>
        </svg>
      </a> -->
      <?php if( get_field('project_link') ): ?>

        <a href="<?php echo the_field('project_link'); ?>" target="_blank" rel="noopener noreferrer" title="Link to the demo for the <?php the_title(); ?> project">Demo
          <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 388.2 388.201">
            <g>
              <path d="M381.299,209.457c-0.578-2.01-1.785-3.783-3.442-5.062c-14.076-10.851-28.529-16.818-42.853-18.164     c0,0-1.908-0.307-6.504-0.307c-4.598,0-6.941,0.299-6.941,0.299c-13.812,1.629-27.643,7.711-41.215,18.172     c-1.658,1.277-2.864,3.053-3.442,5.062c-6.662,23.091-8.439,45.242-5.597,69.711c2.513,21.63,8.472,43.341,15.425,67.442     c0.579,2.011,1.786,3.785,3.442,5.062c10.658,8.217,24.482,12.739,38.926,12.739c14.444,0,28.271-4.522,38.929-12.737     c1.657-1.277,2.864-3.054,3.444-5.063c6.953-24.104,12.912-45.812,15.425-67.441     C389.738,254.699,387.961,232.546,381.299,209.457z M337.701,249.556c0,4.751-3.853,8.602-8.603,8.602s-8.6-3.851-8.6-8.602     v-35.875c0-4.75,3.85-8.603,8.6-8.603s8.603,3.853,8.603,8.603V249.556z" fill="#111"/>
              <path d="M263.645,341.357h-15.51l-12.8-43.521h26.126c-0.816-4.665-1.514-9.327-2.059-14.008     c-1.648-14.195-1.847-27.68-0.576-40.992H30V50.857h310v123.237c10.1,1.013,20.131,3.962,30,8.795V35.857c0-8.284-6.717-15-15-15     H15c-8.284,0-15,6.716-15,15v246.979c0,8.285,6.716,15,15,15h119.664l-12.799,43.521h-15.508c-3.938,0-7.131,3.192-7.131,7.13     v11.726c0,3.938,3.193,7.131,7.131,7.131h157.288c3.938,0,7.13-3.192,7.13-7.131v-11.726     C270.773,344.549,267.582,341.357,263.645,341.357z" fill="#111"/>
            </g>
          </svg>
        </a>

      <?php endif; ?>

      <?php if( get_field('github_link') ): ?>

        <a href="https://github.com/Jonathan-VB<?php echo the_field('github_link'); ?>" target="_blank" rel="noopener noreferrer" title="Link to the Github page where the <?php the_title(); ?> project is stored">Github
          <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 438.536 438.536">
            <g>
              <path d="M414.41,24.123C398.326,8.042,378.964,0,356.309,0H82.225C59.577,0,40.208,8.042,24.123,24.123    C8.042,40.207,0,59.576,0,82.225v274.088c0,22.65,8.042,42.017,24.123,58.098c16.084,16.084,35.454,24.126,58.102,24.126h63.953    c4.184,0,7.327-0.144,9.42-0.424c2.092-0.288,4.184-1.526,6.279-3.717c2.096-2.187,3.14-5.376,3.14-9.562    c0-0.568-0.05-7.046-0.144-19.417c-0.097-12.375-0.144-22.176-0.144-29.41l-6.567,1.143c-4.187,0.76-9.469,1.095-15.846,0.999    c-6.374-0.096-12.99-0.76-19.841-1.998c-6.855-1.239-13.229-4.093-19.13-8.562c-5.898-4.477-10.085-10.328-12.56-17.559    l-2.856-6.571c-1.903-4.373-4.899-9.229-8.992-14.554c-4.093-5.332-8.232-8.949-12.419-10.852l-1.999-1.428    c-1.331-0.951-2.568-2.098-3.711-3.429c-1.141-1.335-1.997-2.669-2.568-3.997c-0.571-1.335-0.097-2.43,1.427-3.289    c1.524-0.855,4.281-1.279,8.28-1.279l5.708,0.855c3.808,0.76,8.516,3.042,14.134,6.851c5.614,3.806,10.229,8.754,13.846,14.843    c4.38,7.806,9.657,13.75,15.846,17.843c6.184,4.097,12.419,6.143,18.699,6.143s11.704-0.476,16.274-1.424    c4.565-0.954,8.848-2.385,12.847-4.288c1.713-12.751,6.377-22.559,13.988-29.41c-10.848-1.143-20.602-2.854-29.265-5.14    c-8.658-2.286-17.605-5.995-26.835-11.136c-9.234-5.14-16.894-11.512-22.985-19.13c-6.09-7.618-11.088-17.61-14.987-29.978    c-3.901-12.375-5.852-26.652-5.852-42.829c0-23.029,7.521-42.637,22.557-58.814c-7.044-17.32-6.379-36.732,1.997-58.242    c5.52-1.714,13.706-0.428,24.554,3.855c10.85,4.286,18.794,7.951,23.84,10.992c5.046,3.042,9.089,5.614,12.135,7.71    c17.705-4.949,35.976-7.423,54.818-7.423c18.841,0,37.115,2.474,54.821,7.423l10.849-6.852c7.426-4.57,16.18-8.757,26.269-12.562    c10.088-3.806,17.795-4.854,23.127-3.14c8.562,21.51,9.328,40.922,2.279,58.241c15.036,16.179,22.559,35.786,22.559,58.815    c0,16.18-1.951,30.505-5.852,42.969c-3.898,12.467-8.939,22.463-15.13,29.981c-6.184,7.519-13.894,13.843-23.124,18.986    c-9.232,5.137-18.178,8.853-26.84,11.132c-8.661,2.286-18.414,4.004-29.263,5.147c9.891,8.562,14.839,22.072,14.839,40.538v68.238    c0,3.237,0.472,5.852,1.424,7.851c0.958,1.998,2.478,3.374,4.571,4.141c2.102,0.76,3.949,1.235,5.571,1.424    c1.622,0.191,3.949,0.287,6.995,0.287h63.953c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102    V82.225C438.533,59.576,430.491,40.204,414.41,24.123z" fill="#111"/>
            </g>
          </svg>
        </a>

      <?php endif; ?>

      <?php if( get_field('download_link') ): ?>

        <a href="<?php echo the_field('download_link'); ?>">Download
          <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 73.169 73.169" title="Download button for the <?php the_title(); ?> project's files">
            <g>
              <path d="M68.912,62.662H4.257C1.906,62.662,0,64.58,0,66.957c0,2.369,1.906,4.287,4.257,4.287h64.655     c2.352,0,4.257-1.918,4.257-4.287C73.169,64.58,71.264,62.662,68.912,62.662z M32.723,51.461     c0.793,0.948,1.955,1.505,3.188,1.526h0.071c1.208,0,2.362-0.519,3.17-1.429L57.49,30.965c1.136-1.278,1.406-3.113,0.691-4.678     c-0.719-1.558-2.302-2.521-3.99-2.482l-5.17,0.158V6.22c0-2.369-1.906-4.295-4.258-4.295h-16.45     c-1.128,0-2.211,0.451-3.012,1.256c-0.798,0.805-1.249,1.903-1.249,3.039l0.004,17.743l-5.122-0.158     c-1.67-0.045-3.23,0.902-3.96,2.422c-0.733,1.521-0.508,3.34,0.571,4.634L32.723,51.461z" fill="#111"/>
            </g>
          </svg>
        </a>

      <?php endif; ?>

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
