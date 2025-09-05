<?php get_header(); ?>
<div class="container" style="display:flex;gap:32px;">
  <aside class="post-sidebar" style="flex:0 0 260px;">
    <h2 class="sidebar-title">İçindekiler</h2>
    <ul class="post-toc">
      <?php
        $content = apply_filters('the_content', get_the_content());
        preg_match_all('/<h([2-4])>(.*?)<\/h\1>/', $content, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
          echo '<li class="toc-item toc-level-' . $match[1] . '"><a href="#' . sanitize_title($match[2]) . '">' . $match[2] . '</a></li>';
        }
      ?>
    </ul>
  </aside>
  <main class="post-main" style="flex:1;">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article class="single-post">
        <?php if(has_post_thumbnail()): ?>
          <div class="single-post-thumbnail">
            <?php the_post_thumbnail('large', ['class'=>'single-post-img']); ?>
          </div>
        <?php endif; ?>
        <h1 class="single-post-title"> <?php the_title(); ?> </h1>
        <div class="single-post-meta">
          <span class="author">Yazar: <?php the_author(); ?></span>
          <span class="date"> | <?php the_time('d M Y'); ?></span>
        </div>
        <div class="single-post-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; endif; ?>

    <section class="related-posts">
      <h2 class="related-posts-title">Benzer Yazılar</h2>
      <div class="related-posts-grid">
        <?php
          $current_post_id = get_the_ID();
          $current_category = get_the_category();
          $category_id = $current_category[0]->cat_ID;

          $related_posts = new WP_Query([
            'cat' => $category_id,
            'post__not_in' => [$current_post_id],
            'posts_per_page' => 3
          ]);

          if($related_posts->have_posts()):
            while($related_posts->have_posts()): $related_posts->the_post(); ?>
              <article class="related-post">
                <a href="<?php the_permalink(); ?>" class="related-post-link">
                  <?php if(has_post_thumbnail()): ?>
                    <div class="related-post-thumbnail">
                      <?php the_post_thumbnail('medium', ['class'=>'related-post-img']); ?>
                    </div>
                  <?php endif; ?>
                  <h3 class="related-post-title"> <?php the_title(); ?> </h3>
                </a>
              </article>
            <?php endwhile;
          else:
            echo '<p>Bu kategoride başka yazı bulunmamaktadır.</p>';
          endif;
          wp_reset_postdata();
        ?>
      </div>
    </section>
  </main>
</div>
<?php get_footer(); ?>
