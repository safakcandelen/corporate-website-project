<?php require_once 'header.php'; 

$slidersor = $baglanti->prepare("SELECT * FROM slider");
$slidersor->execute();
$sliderler = $slidersor->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Slider Container -->
<div class="slider-container">
  <?php foreach ($sliderler as $slidercek) { ?>
    <div class="slider-item">
      <section style="background-image:url(admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>)" id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
          <h1><?php echo $slidercek['slider_baslik'] ?></h1>
          <h2><?php echo $slidercek['slider_aciklama'] ?></h2>
          <a target="_blank" href="<?php echo $slidercek['slider_link'] ?>" class="btn-get-started"><?php echo $slidercek['slider_buton'] ?></a>
        </div>
      </section>
    </div>
  <?php } ?>
</div>



  <main id="main">

  
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
<?php 

      $blogsor=$baglanti->prepare("SELECT * FROM blog order by blog_sira ASC limit 12 ");
      $blogsor->execute(array());

while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {  ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img style="height:250px" src="Admin/resimler/blog/<?php echo $blogcek['blog_resim'] ?>" class="img-fluid" alt="...">
              <div class="course-content">
               

                <h3><a href="blog-detay-<?=seo($blogcek['blog_baslik']).'-'.$blogcek['blog_id'] ?>"><?php echo $blogcek['blog_baslik'] ?></a></h3>
                <p><?php 
                     $aciklama=$blogcek['blog_aciklama'];
                     $bolaciklama=substr($aciklama, 0,50);

                       echo $bolaciklama;
                 ?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Serinova</span>
                  </div>

                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
<?php } ?>
        

        

        </div>

      </div>

  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>