<?php
/* Template Name: Müşteri Değerlendirmeleri */
get_header(); ?>

<div class="container" style="max-width:900px;">
  <h1 class="page-title">Müşteri Değerlendirmeleri</h1>
  <form method="post" action="" class="review-form">
    <div class="form-group">
      <label for="name">Adınız:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
      <label for="surname">Soyadınız:</label>
      <input type="text" id="surname" name="surname" required>
    </div>

    <div class="form-group">
      <label for="email">E-posta Adresiniz:</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="rating">Değerlendirme:</label>
      <div class="rating-stars">
        <input type="radio" id="star5" name="rating" value="5" required><label for="star5" title="5 yıldız"><i class="fas fa-star"></i></label>
        <input type="radio" id="star4" name="rating" value="4" required><label for="star4" title="4 yıldız"><i class="fas fa-star"></i></label>
        <input type="radio" id="star3" name="rating" value="3" required><label for="star3" title="3 yıldız"><i class="fas fa-star"></i></label>
        <input type="radio" id="star2" name="rating" value="2" required><label for="star2" title="2 yıldız"><i class="fas fa-star"></i></label>
        <input type="radio" id="star1" name="rating" value="1" required><label for="star1" title="1 yıldız"><i class="fas fa-star"></i></label>
      </div>
    </div>

    <div class="form-group">
      <label for="comment">Yorumunuz:</label>
      <textarea id="comment" name="comment" required></textarea>
    </div>

    <button type="submit" class="btn">Gönder</button>
  </form>

  <div class="reviews">
    <h2 class="reviews-title">Onaylanmış Değerlendirmeler</h2>
    <?php
    // Onaylanmış yorumları göster
    $reviews = get_posts(['post_type' => 'customer_review', 'post_status' => 'publish']);
    foreach ($reviews as $review) {
      echo '<div class="review">';
      echo '<h3 class="review-author">' . esc_html(get_post_meta($review->ID, 'name', true)) . ' ' . esc_html(get_post_meta($review->ID, 'surname', true)) . '</h3>';
      echo '<div class="review-stars">';
      $rating = intval(get_post_meta($review->ID, 'rating', true));
      for ($i = 1; $i <= 5; $i++) {
        echo $i <= $rating ? '<i class="fas fa-star filled"></i>' : '<i class="far fa-star"></i>';
      }
      echo '</div>';
      echo '<p class="review-comment">' . esc_html(get_post_meta($review->ID, 'comment', true)) . '</p>';
      echo '</div>';
    }
    ?>
  </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['rating'], $_POST['comment'])) {
    $post_id = wp_insert_post([
        'post_type' => 'customer_review',
        'post_status' => 'pending',
        'post_title' => sanitize_text_field($_POST['name'] . ' ' . $_POST['surname']),
    ]);

    if ($post_id) {
        update_post_meta($post_id, 'name', sanitize_text_field($_POST['name']));
        update_post_meta($post_id, 'surname', sanitize_text_field($_POST['surname']));
        update_post_meta($post_id, 'email', sanitize_email($_POST['email']));
        update_post_meta($post_id, 'rating', intval($_POST['rating']));
        update_post_meta($post_id, 'comment', sanitize_textarea_field($_POST['comment']));
    }
}
?>