<?php
// Ensure responsive design for all sections
get_header(); ?>

<section class="page-content">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="page-body">
      <?php
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>