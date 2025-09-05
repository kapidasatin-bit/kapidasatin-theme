<?php /* Template Name: İletişim */ get_header(); ?>

<section class="contact-section">
  <div class="container contact-grid">
    <div class="contact-info">
      <h2>Çağrı Merkezi</h2>
      <div class="contact-info-group">
        <span>Pazartesi - Cuma | 09:00 - 18:00</span>
        <div class="contact-phone">0554 020 20 00</div>
      </div>
      <h3>Whatsapp Destek Hattı</h3>
      <div class="contact-info-group">
        <span>Hafta içi | 08:30 - 18:00</span>
        <div class="contact-phone">0538 412 50 48</div>
      </div>
     
    </div>
    <div class="contact-form-area">
      <form class="contact-form" method="post" action="">
        <div class="form-row">
          <div class="form-group">
            <input type="text" name="first_name" placeholder="Adınız *" required>
          </div>
          <div class="form-group">
            <input type="text" name="last_name" placeholder="Soyadınız *" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <input type="email" name="email" placeholder="E-Posta Adresiniz *" required>
          </div>
          <div class="form-group">
            <input type="text" name="phone" placeholder="Telefon *" required>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" rows="4" placeholder="Mesajınız *" required></textarea>
        </div>
        <div class="form-row align-center">
          <div class="form-group" style="flex:1;">
            <input type="checkbox" name="privacy" required> <span style="font-size:0.97em;"> <a href="#">Gizlilik Politikası'nı</a> Okudum ve Kabul Ediyorum.</span>
          </div>
        </div>
        <div class="form-row">
          <button type="submit" class="btn-main green">Gönder</button>
          <button type="reset" class="btn-main dark">Temizle</button>
        </div>
      </form>
    </div>
  </div>
</section>

<style>
.contact-section {
  padding: 48px 0 32px 0;
  background: #fff;
}
.contact-grid {
  display: flex;
  gap: 48px;
  align-items: flex-start;
  justify-content: space-between;
  flex-wrap: wrap;
}
.contact-info {
  flex: 1 1 320px;
  min-width: 280px;
  max-width: 420px;
  color: #222;
}
.contact-info h2 {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 10px;
}
.contact-info h3, .contact-info h4 {
  font-size: 1.15rem;
  font-weight: 600;
  margin: 18px 0 6px 0;
}
.contact-info-group {
  margin-bottom: 18px;
}
.contact-phone {
  font-size: 2rem;
  font-weight: 700;
  margin: 4px 0 0 0;
}
.contact-address {
  font-size: 1.01rem;
  color: #444;
  margin-bottom: 10px;
}
.contact-apps {
  display: flex;
  gap: 12px;
  margin-bottom: 18px;
}
.contact-socials {
  display: flex;
  gap: 12px;
  margin-top: 8px;
}
.contact-form-area {
  flex: 2 1 420px;
  min-width: 320px;
  max-width: 600px;
  background: #fafbfc;
  border-radius: 14px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.06);
  padding: 32px 24px 24px 24px;
}
.contact-form {
  width: 100%;
}
.form-row {
  display: flex;
  gap: 16px;
  margin-bottom: 18px;
}
.form-row.align-center {
  align-items: center;
}
.form-group {
  flex: 1;
  display: flex;
  flex-direction: column;
}
.form-group input,
.form-group textarea {
  width: 100%;
  padding: 12px 10px;
  border: 1.5px solid #d1d5db;
  border-radius: 7px;
  font-size: 1.05rem;
  margin-bottom: 0;
  background: #fff;
  transition: border 0.2s;
}
.form-group input:focus,
.form-group textarea:focus {
  border-color: #22c55e;
  outline: none;
}
.form-group textarea {
  min-height: 90px;
  resize: vertical;
}
.btn-main {
  padding: 12px 0;
  border: none;
  border-radius: 7px;
  font-size: 1.1rem;
  font-weight: 700;
  cursor: pointer;
  flex: 1;
  margin-right: 8px;
  transition: background 0.2s, color 0.2s;
}
.btn-main.green {
  background: #22c55e;
  color: #fff;
}
.btn-main.green:hover {
  background: #16a34a;
}
.btn-main.dark {
  background: #222;
  color: #fff;
  margin-right: 0;
}
.btn-main.dark:hover {
  background: #444;
}
@media (max-width: 900px) {
  .contact-grid {
    flex-direction: column;
    gap: 24px;
  }
  .contact-form-area {
    padding: 18px 6px 12px 6px;
  }
}
</style>

<?php get_footer(); ?>
