<?php
/* Template Name: Yardım */
get_header(); ?>

<div class="container" style="max-width:900px;">
  <h1 class="page-title">Yardım</h1>
  <p class="page-desc">Kapıda Satın ile ilgili sorularınız mı var? Aşağıda en çok merak edilen konularla ilgili detaylı bilgileri bulabilirsiniz. Daha fazla bilgi için bizimle iletişime geçmekten çekinmeyin.</p>

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
        <h3 class="faq-question" itemprop="name">Kurye hizmeti ücretli mi?</h3>
        <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Hayır, Türkiye genelinde kurye hizmetimiz ücretsizdir.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="content-section" style="margin-bottom: 30px;">
    <h2 class="section-title">İletişim</h2>
    <p>Yardım almak için bizimle iletişime geçebilirsiniz:</p>
    <ul style="list-style: none; padding-left: 0;">
      <li><strong>E-posta:</strong> <a href="mailto:iletisim@kapidasatin.com">iletisim@kapidasatin.com</a></li>
      <li><strong>Telefon:</strong> <a href="tel:05540202000">0554 020 20 00</a></li>
      <li><strong>WhatsApp:</strong> <a href="https://wa.me/905540202000" target="_blank" rel="noopener">0554 020 20 00</a></li>
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
