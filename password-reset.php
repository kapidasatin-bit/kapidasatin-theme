<?php
/* Template Name: Şifre Sıfırlama */
get_header(); ?>

<div class="container" style="max-width:400px; margin: 0 auto;">
  <h1 class="page-title">Şifre Sıfırlama</h1>
  <p class="page-desc">Şifrenizi sıfırlamak için e-posta adresinizi girin.</p>

  <form class="reset-form" action="<?php echo wp_lostpassword_url(); ?>" method="post" style="background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
    <div class="form-group" style="margin-bottom: 15px;">
      <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">E-posta</label>
      <input type="email" id="email" name="user_email" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" placeholder="E-posta adresinizi girin">
    </div>

    <button type="submit" style="background: #0073aa; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Şifre Sıfırla</button>
  </form>
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
