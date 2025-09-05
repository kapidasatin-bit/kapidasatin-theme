<?php /* Template Name: Hakkımızda */ get_header(); ?>

<section class="section" id="hakkimizda">
  <div class="container" style="max-width:1100px;">
    <h2 style="font-size:1.5rem;font-weight:700;color:#222;margin-bottom:12px;">Kapıda Satın’a Hoş Geldiniz</h2>
    <p style="font-size:1.08rem;color:#444;margin-bottom:32px;"><strong>Kapıda Satın</strong>, elektronik ürünlerinizi değerinde, hızlı ve güvenli şekilde nakde çevirmek isteyenler için kurulmuş profesyonel bir alım platformudur. Türkiye genelinde sunduğumuz <strong>kapıdan alım</strong> hizmeti sayesinde şubeye gitmeden, <em>aynı gün ödeme</em> ile işleminizi tamamlayın.</p>
    <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;">
      <div style="flex:1 1 260px;min-width:220px;background:#fff;border-radius:18px;box-shadow:0 2px 16px rgba(0,0,0,0.06);padding:32px 20px 24px 20px;text-align:center;">
        <div style="margin-bottom:12px;">
          <svg width="36" height="36" fill="none" stroke="#e74c3c" stroke-width="2" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="96"/><circle cx="128" cy="104" r="24"/><path d="M128,128v40"/></svg>
        </div>
        <div style="font-weight:700;font-size:1.08rem;">Hizmet Bölgelerimiz</div>
        <div style="color:#555;font-size:1rem;margin:10px 0 18px 0;">Türkiye genelinde kapıdan alım ve aynı gün ödeme.</div>
        <a href="<?php echo esc_url( home_url('/hizmet-bolgeleri') ); ?>" class="btn btn-outline">Detaylı Bilgi</a>
      </div>
      <div style="flex:1 1 260px;min-width:220px;background:#fff;border-radius:18px;box-shadow:0 2px 16px rgba(0,0,0,0.06);padding:32px 20px 24px 20px;text-align:center;">
        <div style="margin-bottom:12px;">
          <svg width="36" height="36" fill="none" stroke="#0073aa" stroke-width="2" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="40" y="56" width="176" height="120" rx="16"/><polyline points="40 96 128 152 216 96"/></svg>
        </div>
        <div style="font-weight:700;font-size:1.08rem;">İletişim Bilgilerimiz</div>
        <div style="color:#555;font-size:1rem;margin:10px 0 18px 0;">Bize ulaşmak için iletişim kanallarımızı kullanabilirsiniz.</div>
        <a href="<?php echo esc_url( home_url('/iletisim') ); ?>" class="btn btn-outline">İletişim</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>