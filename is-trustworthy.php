<?php
/* Template Name: Kapıda Satın Güvenilir mi? */
get_header(); ?>

<div class="container" style="max-width:900px;">
  <h1 class="page-title">Kapıda Satın Güvenilir mi?</h1>
  <p class="page-desc">Kapıda Satın, elektronik cihazlarınızı güvenle satabileceğiniz bir platformdur. Güvenli ödeme, hızlı işlem ve müşteri memnuniyeti ile Türkiye'nin 81 ilinde hizmet vermekteyiz. Müşterilerimizin memnuniyeti bizim için en önemli önceliktir.</p>

  <div class="content-section" style="margin-bottom: 30px;">
    <h2 class="section-title">Sıkça Sorulan Sorular</h2>
    <p>Kapıda Satın ile ilgili en çok merak edilen soruların yanıtlarını aşağıda bulabilirsiniz.</p>
    <div class="faq-section" itemscope itemtype="https://schema.org/FAQPage">
      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Kapıda Satın nasıl çalışır?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Kapıda Satın, cihazınızı satmak için teklif almanızı ve cihazınızı güvenle satmanızı sağlar. Uzman ekibimiz cihazınızı değerlendirir ve hızlı ödeme yapar.</p>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Ödeme nasıl yapılır?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Cihazınız kontrol edildikten sonra aynı gün banka hesabınıza ödeme yapılır.</p>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Kapıda Satın güvenilir mi?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Evet, Kapıda Satın müşterilerimizin güvenliğini ön planda tutar. Tüm süreç boyunca uzman ekibimiz size destek olur.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="content-section" style="margin-bottom: 30px;">
    <h2 class="section-title">Müşteri Yorumları</h2>
    <p>Müşterilerimizin Kapıda Satın ile ilgili deneyimlerini aşağıda bulabilirsiniz.</p>
    <div class="testimonial-grid" style="display: flex; flex-wrap: wrap; gap: 20px;">
      <div class="testimonial-item" style="background: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <p>"Çok hızlı ve güvenli bir hizmet, aynı gün ödeme aldım!"</p>
        <span>- Ayşe K.</span>
      </div>
      <div class="testimonial-item" style="background: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <p>"Kurye çok hızlı geldi, cihazımı değerinde sattım."</p>
        <span>- Mehmet D.</span>
      </div>
    </div>
  </div>

  <div class="content-section" style="margin-bottom: 30px;">
    <h2 class="section-title">Satın Aldığımız Ürünler</h2>
    <p>Kapıda Satın olarak aşağıdaki ürünleri satın alıyoruz:</p>
    <ul style="list-style: disc; padding-left: 20px;">
      <li>Telefon</li>
      <li>Tablet</li>
      <li>Laptop</li>
      <li>Akıllı Saat</li>
      <li>Oyun Konsolu</li>
    </ul>
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
