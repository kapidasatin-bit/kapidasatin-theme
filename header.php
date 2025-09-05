<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- SEO Meta Tags -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url( home_url('/') ); ?>">
  <meta property="og:image" content="<?php echo esc_url( get_theme_file_uri('assets/hero.png') ); ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
  <meta name="twitter:image" content="<?php echo esc_url( get_theme_file_uri('assets/hero.png') ); ?>">

  <!-- Schema.org Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?php bloginfo('name'); ?>",
    "url": "<?php echo esc_url( home_url('/') ); ?>",
    "logo": "https://www.kapidasatin.com/wp-content/uploads/2025/07/kapida-satin-logo-renkli.png",
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+908502551839",
      "contactType": "customer service",
      "areaServed": "TR",
      "availableLanguage": ["Turkish"]
    }],
    "sameAs": [
      "https://www.facebook.com/kapidasatin",
      "https://www.instagram.com/kapidasatin",
      "https://www.youtube.com/@kapidasatin"
    ]
  }
  </script>
</head>
<body <?php body_class(); ?>>
<div class="top-header" style="background-color: #1a1a3d; color: #fff; padding: 10px 0;">
  <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
    <div class="top-header-left">
      <span>Nerede olduğunuz değil ne sattığınız önemli</span>
    </div>
    <div class="top-header-right" style="display: flex; gap: 20px;">
      <span>0850 255 18 39</span>
      <a href="#" style="color: #fff; text-decoration: none;">Sizi Arayalım</a>
    </div>
  </div>
</div>

<div class="top-campaign-bar">
  <div class="campaign-content">
    <span class="campaign-text">💻 Laptop sat, %30 daha fazla kazan!</span>
    <span class="campaign-timer" id="campaign-timer">Kampanya bitimine: 00:00:00</span>
    <div class="campaign-popup">
      <div class="campaign-popup-title">Laptop Satışında %30 Ek Kazanç!</div>
      <div class="campaign-popup-desc">Sadece bu kampanya süresince laptopunu sat, %30 daha fazla kazan! Hemen teklif al, fırsatı kaçırma.</div>
      <img src="/wp-content/uploads/campaign-laptop.jpg" alt="Kampanya görseli" class="campaign-popup-img" />
    </div>
  </div>
</div>
<script>
// Geri sayım için kampanya bitiş zamanı (örnek: bugün gece 23:59:59)
(function() {
  var end = new Date();
  end.setHours(23,59,59,999);
  function updateTimer() {
    var now = new Date();
    var diff = end - now;
    if (diff < 0) diff = 0;
    var h = String(Math.floor(diff/1000/60/60)).padStart(2,'0');
    var m = String(Math.floor(diff/1000/60)%60).padStart(2,'0');
    var s = String(Math.floor(diff/1000)%60).padStart(2,'0');
    document.getElementById('campaign-timer').textContent = 'Kampanya bitimine: ' + h + ':' + m + ':' + s;
  }
  updateTimer();
  setInterval(updateTimer, 1000);
})();
</script>
<header class="main-header">
  <div class="container header-flex">
    <div class="logo">
      <a href="/">
        <img src="https://www.kapidasatin.com/wp-content/uploads/2025/07/kapida-satin-logo-renkli.png" alt="Kapıda Satın Logo" style="height: 48px; width: auto; display: block;">
      </a>
    </div>
    <!-- Masaüstü Menü -->
    <nav class="main-nav desktop-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container' => false,
          'items_wrap' => '<ul>%3$s</ul>',
          'depth' => 1,
          'link_before' => '',
          'link_after' => ''
        ));
      ?>
    </nav>
    <div class="header-buttons desktop-nav">
      <a href="giris-yap" class="btn-outline">Giriş Yap</a>
      <a href="#" class="btn-main">Ücretsiz E-Ticaret Siteni Aç</a>
    </div>
    <!-- Mobil Menü Toggle -->
    <button class="mobile-menu-toggle" aria-label="Menüyü Aç/Kapat">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </button>
  </div>
  <!-- Mobil Menü -->
  <nav class="main-nav mobile-nav">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container' => false,
        'items_wrap' => '<ul>%3$s</ul>',
        'depth' => 1,
        'link_before' => '',
        'link_after' => ''
      ));
    ?>
    <div class="header-buttons">
      <a href="giris-yap" class="btn-outline">Giriş Yap</a>
      <a href="#" class="btn-main">Ücretsiz E-Ticaret Siteni Aç</a>
    </div>
  </nav>
</header>
<script>
// Mobil menü aç/kapat
document.addEventListener('DOMContentLoaded', function() {
  var toggle = document.querySelector('.mobile-menu-toggle');
  var mobileNav = document.querySelector('.main-nav.mobile-nav');
  toggle.addEventListener('click', function() {
    mobileNav.classList.toggle('open');
    toggle.classList.toggle('open');
  });
});
</script>
<style>
.header-flex {
  display: flex;
  align-items: center;
  justify-content: space-between;
  min-height: 64px;
}
.logo img {
  height: 48px;
  width: auto;
  display: block;
}
.main-nav {
  display: flex;
  align-items: center;
}
.main-nav ul {
  display: flex;
  gap: 32px;
  list-style: none;
  margin: 0;
  padding: 0;
}
.header-buttons {
  display: flex;
  gap: 10px;
}
.btn-outline {
  text-decoration: none;
  padding: 10px 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  color: #222;
  background: #fff;
  font-weight: 600;
  transition: background 0.2s, color 0.2s;
}
.btn-outline:hover {
  background: #eaf6fb;
  color: #0073aa;
}
.btn-main {
  text-decoration: none;
  padding: 10px 20px;
  background-color: #000;
  color: #fff;
  border-radius: 5px;
  font-weight: 600;
  transition: background 0.2s;
}
.btn-main:hover {
  background: #0073aa;
}
.mobile-menu-toggle {
  display: none;
  flex-direction: column;
  justify-content: center;
  width: 40px;
  height: 40px;
  background: none;
  border: none;
  cursor: pointer;
  margin-left: 16px;
  z-index: 1001;
}
.mobile-menu-toggle .bar {
  width: 28px;
  height: 3px;
  background: #222;
  margin: 4px 0;
  border-radius: 2px;
  transition: 0.3s;
}
.main-nav.mobile-nav {
  display: none;
  flex-direction: column;
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background: #fff;
  box-shadow: 0 2px 16px rgba(0,0,0,0.07);
  z-index: 1000;
  padding: 18px 0 12px 0;
}
.main-nav.mobile-nav.open {
  display: flex;
}
@media (max-width: 900px) {
  .desktop-nav {
    display: none !important;
  }
  .mobile-menu-toggle {
    display: flex;
  }
  .main-nav.mobile-nav {
    display: none;
  }
}
@media (min-width: 901px) {
  .mobile-nav, .mobile-menu-toggle {
    display: none !important;
  }
}
</style>
<main class="site-main container">