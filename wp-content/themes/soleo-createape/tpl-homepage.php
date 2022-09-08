<?php
/**
* Template Name: Home Page*
*
*/
get_header(); ?>

<!-- Display ACF for Hero Section -->
<?php 
  if( have_rows('homepage') ):
    // loop through the rows of data
    while ( have_rows('homepage') ) : the_row(); 
?>


<!-- Hero Sections  -->
<?php if( get_row_layout() == 'hero_section' ): ?>
<!-- Get template part for hero section -->
<?php get_template_part('homepage-parts/section','hero' ) ?>

<?php endif; ?>
<!-- End Hero Sections -->

<!-- Info Section with 3 Columns -->
<?php if( get_row_layout() == 'section_with_info_and_3_columns' ): ?>
<!-- Get template part for hero section -->
<?php get_template_part('homepage-parts/section','infowith3columns' ) ?>

<?php endif; ?>

<?php 
  endwhile;
  endif; 
?>