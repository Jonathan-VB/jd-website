<?php
/**
 * Template Name: About
 */


/**
 * get header.php
 */
get_header();


/**
 * ACF image variables
 */
$attachment_id = get_field( 'about_me_profile_image' );
$size = "full";
$image = wp_get_attachment_image_src( $attachment_id, $size );
$alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>


<section class="about">
  <div class="about-background">
    <div class="container">
      <div class="about-content">
        <div class="about-content--left">
          <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt; ?>" />

          <?php echo the_field( 'about_me_description' ); ?>

        </div>

        <div class="about-content--right">
          <h1><?php echo the_field( 'about_me_form_title' ); ?></h1>

          <?php get_template_part( 'template-parts/options/contact-links' ); ?>

          <?php echo do_shortcode( '[contact-form-7 id="81" title="Contact form 1"]' ); ?>

          <div class="form-submission--success">
            <p>THANK YOU FOR YOUR SUBMISSION! I WILL GET BACK TO YOU AS SOON AS I CAN :)</p>
          </div>

          <div class="form-submission--fail">
            <p>OOPS... LOOKS LIKE SOMETHING WENT WRONG :(</p>
            <p>PLEASE TRY AGAIN LATER!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
/**
 * get header.php
 */
get_footer();
