<?php get_header(); ?>
<div class="container" style="max-width:900px;">
  <h1 style="font-size:2rem;font-weight:800;color:var(--primary);margin:32px 0 12px 0;">
    <?php single_cat_title(); ?> Kategorisi
  </h1>
  <?php if(category_description()): ?>
    <div class="blog-archive-desc-scroll">
      <?php echo category_description(); ?>
    </div>
  <?php endif; ?>
  <div class="blog-grid">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article class="blog-card">
        <?php if(has_post_thumbnail()): ?>
          <a href="<?php the_permalink(); ?>" class="blog-card-img-link">
            <?php the_post_thumbnail('medium', ['class'=>'blog-card-img']); ?>
          </a>
        <?php endif; ?>
        <div class="blog-card-content">
          <h2 class="blog-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="blog-card-meta">
            <span><?php the_time('d M Y'); ?></span>
          </div>
          <div class="blog-card-excerpt"><?php the_excerpt(); ?></div>
          <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="margin-top:10px;">Devamını Oku</a>
        </div>
      </article>
    <?php endwhile; else: ?>
      <p>Bu kategoride henüz içerik yok.</p>
    <?php endif; ?>
  </div>
  <div class="blog-pagination">
    <?php the_posts_pagination([ 'mid_size'=>1, 'prev_text'=>'←', 'next_text'=>'→' ]); ?>
  </div>
</div>
<?php get_footer(); ?>
