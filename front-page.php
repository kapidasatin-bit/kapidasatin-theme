

<?php /* Template Name: Ana Sayfa */ get_header(); ?>

<!-- SEO Meta Tags -->
<meta name="description" content="Kapıda Satın ile elektronik cihazlarınızı değerinde, hızlı ve güvenli şekilde nakite çevirin. Türkiye genelinde aynı gün ödeme ve ücretsiz kurye hizmeti!" />
<meta property="og:title" content="Kapıda Satın - Elektroniklerini Değerinde Sat" />
<meta property="og:description" content="Elektronik cihazlarınızı kapınızdan alıyor, değerinde nakit ödüyoruz. Hemen teklif alın!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo esc_url( home_url('/') ); ?>" />
<meta property="og:image" content="<?php echo esc_url( get_theme_file_uri('assets/hero.png') ); ?>" />

<!-- Üst Bilgi Barı -->

<div class="featured-section">
  <?php
    wp_nav_menu(array(
      'theme_location' => 'quick-menu',
      'container' => false,
      'items_wrap' => '%3$s',
      'depth' => 1,
      'walker' => new class extends Walker_Nav_Menu {
        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
          $output .= '<div class="featured-item" id="menu-item-' . $item->ID . '"><a href="' . $item->url . '">' . $item->title . '</a></div>';
        }
      }
    ));
  ?>
</div>

<!-- Ürünlerinizi Değerinde Satmanın En Kolay Yolu -->
<section class="featured-products">
  <div class="container">
   
    <!-- Minimal Animated Card Slider (Mobile Friendly & Horizontal) -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
      .swiper-container {
        width: 100%;
        padding-bottom: 24px;
      }
      .swiper-slide.product-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        padding: 18px 8px;
        min-width: 120px;
        max-width: 160px;
        margin: 0 auto;
      }
      .swiper-slide.product-card img {
        width: 64px;
        height: 64px;
        object-fit: contain;
        margin-bottom: 10px;
      }
      .swiper-slide.product-card h5 {
        font-size: 1rem;
        margin: 0;
        text-align: center;
      }
      @media (max-width: 640px) {
        .swiper-container {
          padding-bottom: 16px;
        }
        .swiper-slide.product-card {
          min-width: 110px;
          max-width: 130px;
          padding: 12px 4px;
        }
        .swiper-slide.product-card img {
          width: 48px;
          height: 48px;
        }
        .swiper-slide.product-card h5 {
          font-size: 0.95rem;
        }
      }
    </style>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide product-card">
          <img src="https://www.efesbilisim.com/wp-content/uploads/2023/10/Laptop.png" alt="Laptop">
          <h5>Laptop</h5>
        </div>
        <div class="swiper-slide product-card">
          <img src="https://www.efesbilisim.com/wp-content/uploads/2023/10/Laptop.png" alt="Cep Telefonu">
          <h5>Cep Telefonu</h5>
        </div>
        <div class="swiper-slide product-card">
          <img src="https://www.efesbilisim.com/wp-content/uploads/2023/10/Laptop.png" alt="Oyun Konsolu">
          <h5>Oyun Konsolu</h5>
        </div>
        <div class="swiper-slide product-card">
          <img src="https://www.efesbilisim.com/wp-content/uploads/2023/10/Laptop.png" alt="Tablet">
          <h5>Tablet</h5>
        </div>
        <div class="swiper-slide product-card">
          <img src="https://www.efesbilisim.com/wp-content/uploads/2023/10/Laptop.png" alt="Monitör">
          <h5>Monitör</h5>
        </div>
        <div class="swiper-slide product-card">
          <img src="https://www.efesbilisim.com/wp-content/uploads/2023/10/Laptop.png" alt="Akıllı Saat">
          <h5>Akıllı Saat</h5>
        </div>
        <div class="swiper-slide product-card">
          <img src="https://www.efesbilisim.com/wp-content/uploads/2023/10/Laptop.png" alt="Fotoğraf Makinesi">
          <h5>Fotoğraf Makinesi</h5>
        </div>
      </div>
    </div>  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false
        },
        slidesPerView: 1,
        spaceBetween: 16,
        breakpoints: {
          640: {
            slidesPerView: 2
          },
          1024: {
            slidesPerView: 5
          }
        }
      });
    </script>

    
  </div>
  

  
</section>

 <!-- Benzersiz Avantajlar Alanı -->
<section class="unique-advantages">
  <div class="container">
    <h2>Benzersiz Avantajlar</h2>
    <p>İkas’ta beklenmedik ücretler yok. Sınırsız ürün, web site trafiği ve dil seçeneği ile hiçbir ek ücret ödemeden tüm dünyaya satış yapın.</p>
    <div class="advantages-grid">
      <div class="advantage-card">
        <h3>Sınırsız E-İhracat</h3>
        <p>Sınırsız dil ve para birimleriyle satış yapın, ödeme alın ve tüm dünyaya mikro-ihracat yapın.</p>
        <div class="advantage-imgs">
          <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=120&q=80" alt="Tahta Vazo" class="adv-img" style="width:60px; border-radius:8px;">
          <span class="adv-label">woodgoods.co/tr</span>
        </div>
        <div class="adv-globe" style="margin:18px auto 0 auto; width:90px; height:60px;">
          <svg viewBox="0 0 90 60" width="90" height="60"><ellipse cx="45" cy="30" rx="44" ry="28" fill="none" stroke="#6c63ff" stroke-width="1"/><ellipse cx="45" cy="30" rx="44" ry="14" fill="none" stroke="#6c63ff" stroke-width="1"/><ellipse cx="45" cy="30" rx="44" ry="7" fill="none" stroke="#6c63ff" stroke-width="1"/></svg>
        </div>
        <div class="adv-price">Tahta Vazo ₺1200</div>
        <a href="#" class="btn btn-outline">Keşfet</a>
      </div>
      <div class="advantage-card">
        <h3>7/24 Teknik Destek</h3>
        <p>Türkiye’nin en yüksek müşteri memnuniyetine sahip e-ticaret altyapısı her zaman yanınızda.</p>
        <div class="adv-chat" style="background:#f7f8fa; border-radius:10px; padding:12px; margin:18px 0;">
          <div style="display:flex; align-items:center; gap:8px;">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profil" style="width:32px; height:32px; border-radius:50%;">
            <span style="background:#fff; border-radius:8px; padding:6px 12px; font-size:0.97rem;">İyi akşamlar!<br>Size nasıl yardımcı olabilirim?</span>
          </div>
          <div style="font-size:0.85rem; color:#888; margin-top:6px;">Pazar, 01:29</div>
        </div>
        <a href="#" class="btn btn-outline">Keşfet</a>
      </div>
      <div class="advantage-card">
        <h3>Geçişi Dert Etmeyin</h3>
        <p>Başka bir altyapıdan ikas’a geçmek istediğinizde, destek ekibimiz sizinle beraber.</p>
        <div class="adv-img" style="margin:24px auto 18px auto; width:80px; height:60px; background:#f7f8fa; border-radius:12px; display:flex; align-items:center; justify-content:center;">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none"><rect x="8" y="12" width="32" height="24" rx="4" fill="#e0e7ff"/><path d="M24 20v8m0 0l-4-4m4 4l4-4" stroke="#6c63ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <a href="#" class="btn btn-outline">Keşfet</a>
      </div>
          <a href="#" class="btn btn-primary" style="float:right; margin-bottom:24px;">E-Ticarete Ücretsiz Başlayın</a>

    </div>
  </div>
</section>

<!-- Footer Menüsü -->
<footer class="site-footer">
  <div class="container">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => false,
        'menu_class' => 'footer-list',
      ));
    ?>
  </div>
</footer>

<?php get_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/cufon/1.09i/cufon-yui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cufon/1.09i/fonts/NewsGothic.font.js"></script>
<script>
  Cufon.replace('#cufon-title', { fontFamily: 'News Gothic' });
</script>