<?php 
/* 
Template Name: Home
*/
get_header(); 
?>

  <main class="section__main">
    <!-- SECTION 1 -->
    <?php get_template_part('template-parts/section', '1'); ?>
    <!-- SECTION 1 -->

    <!-- SECTION 2 -->
    <?php get_template_part('template-parts/section', '2'); ?>
    <!-- SECTION 2 -->

    <!-- SECTION 3 -->
     <?php get_template_part('template-parts/section', '3'); ?>
    <!-- SECTION 3 -->

    <!-- SECTION 4 -->
    <?php get_template_part('template-parts/section', 'cartagena'); ?>
    <!-- SECTION 4 -->

    <!-- SECTION 5 -->
    <?php get_template_part('template-parts/section', 'mapa'); ?>
    <!-- SECTION 5 -->
  </main>

<?php 
get_footer(); 
?>
