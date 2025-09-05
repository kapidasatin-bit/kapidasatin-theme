<?php
/* Template Name: Giriş */
get_header(); ?>

<div class="container" style="max-width:400px; margin: 0 auto;">
  <h1 class="page-title">Giriş Yap</h1>
  <p class="page-desc">Hesabınıza giriş yapın veya yeni bir hesap oluşturun.</p>

  <form class="login-form" action="<?php echo wp_login_url(); ?>" method="post" style="background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
    <div class="form-group" style="margin-bottom: 15px;">
      <label for="username" style="display: block; margin-bottom: 5px; font-weight: bold;">Kullanıcı Adı</label>
      <input type="text" id="username" name="log" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" placeholder="Kullanıcı adınızı girin">
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
      <label for="password" style="display: block; margin-bottom: 5px; font-weight: bold;">Şifre</label>
      <input type="password" id="password" name="pwd" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" placeholder="Şifrenizi girin">
    </div>

    <button type="submit" style="background: #0073aa; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Giriş Yap</button>
  </form>

  <div class="register-section" style="margin-top: 20px; text-align: center;">
    <p>Hesabınız yok mu? <a href="<?php echo wp_registration_url(); ?>" style="color: #0073aa; text-decoration: none;">Kayıt Ol</a></p>
  </div>
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
