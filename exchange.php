<?php
/* Template Name: Takas */
get_header(); ?>

<div class="container" style="max-width:900px;">
  <h1 class="page-title">Takas Sistemi</h1>
  <p class="page-desc">Kapıda Satın olarak, elinizdeki ürünleri online ürünlerimizle takas edebilirsiniz. Güvenli ve hızlı bir takas deneyimi için aşağıdaki bilgileri inceleyin ve bizimle iletişime geçin.</p>

  <div class="content-section" style="margin-bottom: 30px;">
    <h2 class="section-title">Online Ürünlerimiz</h2>
    <p>Online mağazamızda bulunan ürünler ile elinizdeki cihazları takas edebilirsiniz. Aşağıda takas edilebilecek ürünlerimizi bulabilirsiniz:</p>
    <div class="product-grid" style="display: flex; flex-wrap: wrap; gap: 20px;">
      <div class="product-item" style="background: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <h3>iPhone 16 Pro</h3>
        <p>En yeni iPhone modeli ile takas yapabilirsiniz.</p>
      </div>
      <div class="product-item" style="background: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <h3>MacBook Air</h3>
        <p>MacBook Air modelleri ile takas yapabilirsiniz.</p>
      </div>
      <div class="product-item" style="background: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <h3>iPad Air</h3>
        <p>iPad Air modelleri ile takas yapabilirsiniz.</p>
      </div>
    </div>
  </div>

  <div class="content-section" style="margin-bottom: 30px;">
    <h2 class="section-title">Sıkça Sorulan Sorular</h2>
    <p>Takas sistemi ile ilgili en çok merak edilen soruların yanıtlarını aşağıda bulabilirsiniz.</p>
    <div class="faq-section" itemscope itemtype="https://schema.org/FAQPage">
      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Takas sistemi nasıl çalışır?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Elinizdeki cihazı değerlendirerek online mağazamızdaki ürünlerle takas yapabilirsiniz. Uzman ekibimiz cihazınızı değerlendirir ve takas sürecini başlatır.</p>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Hangi ürünlerle takas yapabilirim?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Telefon, tablet, laptop, akıllı saat ve oyun konsolu gibi cihazlarınızı online mağazamızdaki ürünlerle takas edebilirsiniz.</p>
        </div>
      </div>

      <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="faq-question" itemprop="name">Takas süreci ne kadar sürer?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Cihazınızın değerlendirilmesi ve takas süreci genellikle 1-2 iş günü içinde tamamlanır.</p>
        </div>
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
  .product-grid .product-item {
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
