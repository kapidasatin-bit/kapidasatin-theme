<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="entry">
        <?php the_excerpt(); ?>
      </div>
    </article>
  <?php endwhile; ?>
  <div class="pagination">
    <?php the_posts_pagination(); ?>
  </div>
<?php else : ?>
  <p>İçerik bulunamadı.</p>
<?php endif; ?>

<?php get_footer(); ?>
