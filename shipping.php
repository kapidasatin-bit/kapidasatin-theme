<?php
/* Template Name: Nakliye */
get_header(); ?>

<div class="container" style="max-width:900px;">
  <h1 class="page-title">Nakliye Hizmetlerimiz</h1>
  <p class="page-desc">Kapıda Satın olarak, Türkiye'nin 81 ilinde nakit satın alım hizmeti sunuyoruz. İstanbul içinde 1 saat içinde nakit alım, Türkiye genelinde ise kapıda satın kurye hizmetimiz ile aynı gün alım hizmeti sağlıyoruz. Güvenli ve hızlı bir satış deneyimi için bizimle iletişime geçin.</p>

  <div class="content-section" style="margin-bottom: 30px;">
    <h2 class="section-title">Sıkça Sorulan Sorular</h2>
    <p>Kapıda Satın nakliye hizmetleri ile ilgili en çok merak edilen soruların yanıtlarını aşağıda bulabilirsiniz.</p>
    <div class="faq-section" itemscope itemtype="https://schema.org/FAQPage">
      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Nakliye hizmeti nasıl çalışır?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Kapıda Satın, cihazınızı kapınızdan alır ve nakit ödemenizi aynı gün gerçekleştirir. İstanbul içinde 1 saat içinde alım yapılmaktadır.</p>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Kurye hizmeti ücretli mi?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Hayır, Türkiye genelinde kurye hizmetimiz ücretsizdir.</p>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Türkiye'nin hangi illerinde hizmet veriyorsunuz?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Kapıda Satın, Türkiye'nin 81 ilinde hizmet vermektedir.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="content-section" style="margin-bottom: 30px;">
    <h2 class="section-title">Müşteri Yorumları</h2>
    <p>Müşterilerimizin Kapıda Satın nakliye hizmetleri ile ilgili deneyimlerini aşağıda bulabilirsiniz.</p>
    <div class="testimonial-grid" style="display: flex; flex-wrap: wrap; gap: 20px;">
      <div class="testimonial-item" style="background: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <p>"Kurye çok hızlı geldi, cihazımı değerinde sattım."</p>
        <span>- Mehmet D.</span>
      </div>
      <div class="testimonial-item" style="background: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <p>"İstanbul içinde 1 saat içinde nakit alım yapıldı, çok memnun kaldım!"</p>
        <span>- Ayşe K.</span>
      </div>
    </div>
  </div>
</div>

<style>
  .page-desc {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
  }
  .section-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 15px;
  }
  .content-section {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }
  .faq-section .faq-item {
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 15px;
  }
  .faq-question {
    font-size: 1.2rem;
    font-weight: bold;
    cursor: pointer;
    margin-bottom: 10px;
  }
  .faq-answer {
    display: none;
    font-size: 1rem;
    color: #555;
  }
  .faq-item.active .faq-answer {
    display: block;
  }
  .testimonial-grid .testimonial-item {
    flex: 1 1 300px;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      question.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  });
</script>

<?php get_footer(); ?>
