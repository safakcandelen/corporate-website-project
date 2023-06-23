<?php require_once 'header.php';
 ?>
<br><br><br>
  <main id="main">


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
  

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Adresimiz:</h4>
                <p><?php echo $ayarcek['ayar_adres'] ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $ayarcek['ayar_email'] ?></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telefon numaramız:</h4>
                <p><?php echo $ayarcek['ayar_telefon'] ?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="mail.php" method="post">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Adınız" data-rule="minlen:4" data-msg="Lütfen minimum 4 karakter giriniz." />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email adresiniz" data-rule="email" data-msg="E-mail adresinizi giriniz" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" data-rule="minlen:4" data-msg="Konu minimum 4 karakter olmalı" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Mesajınızı yazın" placeholder="Mesajınız"></textarea>
                <div class="validate"></div>
              </div>
         
              <div class="text-center"><button type="submit" value="submit" id="submit" name="send">Gönder</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <div data-aos="fade-up">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48157.34992413205!2d28.793054210222074!3d41.02887945031718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa53c23acedcb%3A0x7162bd4b3e73aeb3!2zU2VyaW5vdmEgUGxhc3RpayDEsHN0b8OnIMWedWJl!5e0!3m2!1str!2str!4v1684753624496!5m2!1str!2str"   width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>