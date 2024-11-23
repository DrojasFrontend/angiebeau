<?php 
/* 
Template Name: Cartagena
*/
get_header(); 
?>

  <main class="section__main">

    <!-- SECTION PLACES -->
    <?php get_template_part('template-parts/section', 'places'); ?>
    <!-- SECTION PLACES -->

    <!-- SECTION 4 -->
    <?php get_template_part('template-parts/section', 'cartagena-2'); ?>
    <!-- SECTION 4 -->

    <!-- SECTION 5 -->
    <?php get_template_part('template-parts/section', 'mapa'); ?>
    <!-- SECTION 5 -->

  </main>

<?php 
get_footer(); 
?>
