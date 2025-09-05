<?php
/* Template Name: Hemen Ürün Sat */
get_header(); ?>

<div class="container" style="max-width:900px;">
  <h1 class="page-title">Hemen Ürün Sat</h1>
  <p class="page-desc">Cihazınızı hızlı ve güvenli bir şekilde satmak için aşağıdaki formu doldurun. Uzman ekibimiz en kısa sürede sizinle iletişime geçecektir.</p>

  <div class="image-section" style="display: flex; gap: 20px; margin-bottom: 30px;">
    <div class="image-item">
      <img src="https://www.kapidasatin.com/wp-content/uploads/2025/07/Cagri-Merkezi-Alim-Satim-Kapida-Satin.png" alt="Çağrı Merkezi" style="width: 100%; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
    </div>
    <div class="image-item">
      <img src="https://www.kapidasatin.com/wp-content/uploads/2025/07/Cagri-Merkezi-Alim-Satim-Kapida-Satin-1.png" alt="WhatsApp" style="width: 100%; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
    </div>
  </div>

  <form class="sell-form" action="" method="post" style="background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
    <h2 class="form-title" style="font-size: 1.5rem; margin-bottom: 20px;">Cihaz Satış Formu</h2>

    <div class="form-group" style="margin-bottom: 15px;">
      <label for="product-type" style="display: block; margin-bottom: 5px; font-weight: bold;">Satın Aldığımız Ürünler</label>
      <select id="product-type" name="product-type" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
        <option value="phone">Telefon</option>
        <option value="tablet">Tablet</option>
        <option value="laptop">Laptop</option>
        <option value="smartwatch">Akıllı Saat</option>
        <option value="console">Oyun Konsolu</option>
      </select>
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
      <label for="device-info" style="display: block; margin-bottom: 5px; font-weight: bold;">Cihaz Bilgileri</label>
      <textarea id="device-info" name="device-info" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" placeholder="Cihaz marka, model ve durum bilgilerini yazınız."></textarea>
    </div>

    <div class="form-group" style="margin-bottom: 15px;">
      <label for="contact-info" style="display: block; margin-bottom: 5px; font-weight: bold;">İletişim Bilgileri</label>
      <input type="text" id="contact-info" name="contact-info" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" placeholder="Ad Soyad ve Telefon Numaranızı yazınız.">
    </div>

    <button type="submit" style="background: #0073aa; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Gönder</button>
  </form>
</div>

<style>
  .page-desc {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
  }
</style>

<?php get_footer(); ?>
