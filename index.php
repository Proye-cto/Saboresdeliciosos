
<?php
include ('app/config.php');
include ('layout/parte1.php');

?>

  <!-- ======= Primera Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <!-- Primera Columna -->
            <div class="col-lg-8 d-flex align-items-center">
                <div>
                    <h1>Bienvenido a <span>Sabores Deliciosos</span></h1>
                    <h2>¡Ofreciendo excelente comida durante más de 10 años!</h2>
                    <div class="btns">
                        <a href="<?php echo $URL;?>/Menu.php" class="btn-menu animated fadeInUp scrollto">Nuestro Menú</a>
                        <a href="<?php echo $URL;?>/reservas.php" class="btn-book animated fadeInUp scrollto">Reservar mesa</a>
                    </div>
                </div>
            </div>
            <!-- Segunda Columna -->
<div class="col-lg-4 d-flex align-items-center">
    <div class="hero-header"> <!-- Asegúrate de que el contenedor tiene la clase hero-header -->
        <img class="img-fluid" src="Public/img/menu/plato.png" alt="">
        <div class="btns">
            <!-- Otros elementos aquí -->
        </div>
    </div>
</div>

        </div>
    </div>
</section><!-- End Section -->







    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Sobre Nosotros</h2>
          <p>Sabores Deliciosos: Un Festín para tus Sentidos</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="Public/img/res-1.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            
            <p class="fst-italic">
            En Sabores Deliciosos, ofrecemos una experiencia culinaria única, cuidando cada detalle para brindarte los placeres más dignos y memorables.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Atención Personalizada: Nos dedicamos a cuidar a cada comensal, asegurándonos de que sus deseos y preferencias sean siempre atendidos.</li>
              <li><i class="bi bi-check-circle"></i> Placer Culinario: Cada plato está diseñado para maximizar el sabor y la satisfacción, convirtiendo cada comida en un momento especial.</li>
              <li><i class="bi bi-check-circle"></i>Bienestar Integral: Creemos que el placer y el bienestar van de la mano, por eso cada detalle está pensado para ofrecer una experiencia completa y agradable. </li>
            </ul>
            <p>
            Ven y disfruta de una experiencia gastronómica donde el sabor y la satisfacción se encuentran en cada bocado.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galería</h2>
          <p>Algunas fotos de nuestro restaurante</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Public/img/gallery/galeria-1.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Public/img/gallery/galeria-1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Public/img/gallery/galeria-2.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Public/img/gallery/galeria-2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Public/img/gallery/galeria-3.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Public/img/gallery/galeria-3.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Public/img/gallery/galeria-4.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Public/img/gallery/galeria-4.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Public/img/gallery/galeria-5.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Public/img/gallery/galeria-5.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Public/img/gallery/galeria-6.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Public/img/gallery/galeria-6.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Public/img/gallery/galeria-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Public/img/gallery/galeria-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Public/img/gallery/galeria-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="Public/img/gallery/galeria-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <div style="display: flex; align-items: center;">
    <img src="Public/images/iconos/chef.png" width="50" height="50" class="img-fluid" alt="">
    <h2 style="margin-left: 10px;" >Chefs</h2>

        </div>
        <p margin-left: 60px;>Nuestros Chefs Profesionales</p>
</div>
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="Public/img/chefs/chef-1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Luis Molina</h4>
                  <span>Jefe de Cocina</span>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="Public/img/chefs/chef-2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Karina López</h4>
                  <span>Repostera</span>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="Public/img/chefs/chef-3.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Roberto Muñoz</h4>
                  <span>Cocinero</span>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
        <div style="display: flex; align-items: center;">
    <img src="Public/images/iconos/testimonio.png" width="50" height="50" class="img-fluid" alt="">
    <h2 style="margin-left: 10px;" >Testimonios</h2>

        </div>
        <p margin-left: 70px;>Lo que dicen sobre nosotros</p>
</div>
      

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Sabores Deliciosos se ha convertido en mi restaurante favorito. La atención al cliente es impecable y cada plato que he probado es una obra de arte culinaria. Me encanta cómo se preocupan por los detalles y hacen que cada visita sea especial. ¡Definitivamente, lo recomiendo!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="Public/img/testimonials/testimonio-1.png" class="testimonial-img" alt="">
                <h3> Javier Gomez</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Fui a Sabores Deliciosos para celebrar mi aniversario y la experiencia superó todas nuestras expectativas. El ambiente es acogedor, el personal es amable y atento, y la comida es simplemente espectacular. Los sabores son auténticos y cada bocado es una delicia. ¡Volveremos pronto!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="Public/img/testimonials/testimonio-2.png" class="testimonial-img" alt="">
                <h3> Ana Martínez</h3>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Desde que descubrí Sabores Deliciosos, no puedo dejar de ir. Tienen una gran variedad de platillos y todos son exquisitos. Además, el sistema de reservas es muy conveniente, lo cual es perfecto para mis planes de última hora. Me encanta la atmósfera del lugar, siempre me siento bienvenida."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="Public/img/testimonials/testimonio-3.png" class="testimonial-img" alt="">
                <h3> Laura Fernandez</h3>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Fui la semana pasada realice una reserva para ir a el restaurante sabores deliciosos y la atencion fue demasido satisfactoria y la comida como el nombre del restaurante tenia un sabor delicioso , totalmente lo recomiendo es un lugar  amplio ,limpio elegante  y agradable para toda mi familia "
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="Public/img/testimonials/testimonio-4.png" class="testimonial-img" alt="">
                <h3>Brandon Flores</h3>

              </div>
            </div><!-- End testimonial item -->



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    
    <!-- ======= Ubicacion Seccion ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <div style="display: flex; align-items: center;">
    <img src="Public/images/iconos/ubicacion.png" width="50" height="50" class="img-fluid" alt="">
    <h2 style="margin-left: 10px;">Ubicación</h2>
</div>
<p style="margin-left: 60px;">Encuentranos en </p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22030.555574283026!2d-98.2809980081804!3d19.22916478334355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfdb73b7b10445%3A0x1acfb151638ce925!2sUniversidad%20Polit%C3%A9cnica%20de%20Tlaxcala!5e0!3m2!1ses-419!2smx!4v1715541257517!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">


          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php

include ('layout/parte2.php');
?>
