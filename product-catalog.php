<?php
/* Template Name: Ürün Katalog */
get_header(); ?>

<div class="container" style="max-width:1200px;">
  <h1 class="page-title">Ürün Katalog</h1>
  <div class="product-grid">
    <?php
    $products = get_posts(['post_type' => 'product', 'post_status' => 'publish']);
    foreach ($products as $product) {
      $price = get_post_meta($product->ID, 'price', true);
      $tags = get_post_meta($product->ID, 'tags', true);
      $letgo_link = get_post_meta($product->ID, 'letgo_link', true);
      $sahibinden_link = get_post_meta($product->ID, 'sahibinden_link', true);
      $colors = get_post_meta($product->ID, 'colors', true);
      ?>
      <div class="product-card">
        <h2 class="product-title"><?php echo esc_html($product->post_title); ?></h2>
        <p class="product-price">Fiyat: <?php echo esc_html($price); ?> TL</p>
        <p class="product-tags">Etiketler: <?php echo esc_html($tags); ?></p>
        <p class="product-links">
          <?php if ($letgo_link): ?><a href="<?php echo esc_url($letgo_link); ?>" target="_blank">Letgo İlanı</a><?php endif; ?>
          <?php if ($sahibinden_link): ?><a href="<?php echo esc_url($sahibinden_link); ?>" target="_blank">Sahibinden İlanı</a><?php endif; ?>
        </p>
        <p class="product-colors">Renk Seçenekleri: <?php echo esc_html($colors); ?></p>
      </div>
      <?php
    }
    ?>
  </div>
</div>

<?php get_footer(); ?>