<?php
/* Template Name: Hesabım */
get_header(); ?>

<div class="container" style="max-width:900px;">
  <h1 class="page-title">Hesabım</h1>
  <p class="page-desc">Hesap bilgilerinizi görüntüleyebilir ve düzenleyebilirsiniz.</p>

  <?php if (is_user_logged_in()) : ?>
    <div class="account-info" style="background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
      <h2>Hoş Geldiniz, <?php echo wp_get_current_user()->display_name; ?>!</h2>
      <p>E-posta: <?php echo wp_get_current_user()->user_email; ?></p>
      <a href="<?php echo wp_logout_url(); ?>" style="color: #0073aa; text-decoration: none;">Çıkış Yap</a>
    </div>
  <?php else : ?>
    <p>Hesabınıza giriş yapmanız gerekiyor. <a href="<?php echo wp_login_url(); ?>" style="color: #0073aa; text-decoration: none;">Giriş Yap</a></p>
  <?php endif; ?>
</div>

<style>
  .page-title {
    text-align: center;
    font-size: 1.8rem;
    margin-bottom: 15px;
  }
  .page-desc {
    text-align: center;
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 20px;
  }
</style>

<?php get_footer(); ?>
