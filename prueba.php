

<?php
include ('app/config.php');
include ('layout/parte1.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores Deliciosos </title>
    
    <!-- Enlaces a Google Fonts -->
    <!-- Para títulos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&display=swap" rel="stylesheet">

    <!-- Para textos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <!-- Para anuncios -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Comfortaa:wght@300..700&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    
</head>
<body>
<section>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="public/images/slider4.jpg" height="650px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="public/images/slider3.jpg" height="650px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="public/images/slider4.jpg" height="650px" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
    <div class="reservar-button-container">
      <a href="<?php echo $URL;?>/reservas.php" class="btn btn-primary" style="width: 100%; background-color: #FD7E14; color: #ffffff; font-family: 'Ibarra Real Nova', serif; border: none; outline: none;" >Reservar</a>
    </div>
  </div>
</section>

<style>
  .reservar-button-container {
    position: absolute;
    bottom: 50px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    color: #FD7E14; 
  }
</style>




<section class="info">
  <div id=info>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <br>
        <center>
          <img src="public/images/estrellaAcerca.png" width="70%" style="margin-top: 20px;">
        </center>
      </div>
      <div class="col-md-6 col-sm-12">
        <br><br>
        <center>
          <h1 style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Acerca de Sabores Deliciosos</h1>
        </center>
        <br>
        <p style="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #59554e">
          En Sabores Deliciosos, nos dedicamos a ofrecer una experiencia culinaria excepcional, donde cada plato está preparado con pasión y dedicación. Nuestro equipo de chefs y personal de servicio está altamente capacitado y tiene una amplia experiencia en la creación y presentación de una variada selección de platos que deleitan todos los paladares. Nos apasiona la gastronomía y nos esforzamos por crear un ambiente cálido y acogedor para que cada visita a nuestro restaurante sea memorable y satisfactoria. En Sabores Deliciosos, cada comida es una celebración de sabores auténticos y una experiencia única para nuestros clientes.
        </p>
        <br>
        <!--<a href="" class="btn btn-outline-primary">Más sobre nosotros</a>-->
      </div>
    </div>
  </div>
  </div>
</section>

  <section class="our-services">
    <div id="our-services">
    <div class="container" >
      <div class="row">
            <div class="col-sm-12">
              <br><br>
              <h1> <b style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Nuestros Servicios</b> </h1>
              <br><br>
            </div>
            <div class="row"> 
              <div class="col-md-4 zoomP">
                <div class="card">
                <img src="public/galeria/imagen12.png"   height="225px" class="card-img-top" alt="...">
                <div class="card-body">
                  <center><h5 class="card-title" style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Platillos</h5></center>
                  <p class="card-text"style="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #59554e">Nuestra variada carta incluye una selección de platillos que combinan ingredientes frescos y de alta calidad. Desde entradas deliciosas hasta postres irresistibles, cada plato está diseñado para deleitar tus sentidos y ofrecerte una experiencia culinaria inigualable.</p>
                  <!--Iconos de bootstrap<a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
              <br>
            </div>
              <div class="col-md-4">
                <div class="card" >
                <img src="public/galeria/imagen12.png" height="225px" class="card-img-top" alt="...">
                <div class="card-body">
                  <center><h5 class="card-title" style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Reservas</h5></center>
                  <p class="card-text" style="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #59554e">En Sabores Deliciosos, ofrecemos un sistema de reservas fácil y conveniente para asegurar que siempre tengas una mesa esperándote. Ya sea para una cena íntima o una celebración especial, puedes hacer tu reserva en línea o por teléfono.</p>
<!--Iconos de bootstrap<a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
              <br>
            </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="public/galeria/imagen12.png" height="225px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <center><h5 class="card-title" style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Horarios</h5></center>
                    <p class="card-text" style="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #59554e">Para tu comodidad, nuestro restaurante está abierto durante toda la semana con horarios extendidos. Consulta nuestros horarios de apertura y cierre para planificar tu visita y disfrutar de una experiencia gastronómica sin prisas.</p>
<!--Iconos de bootstrap<a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div>
                <br>
              </div>

              </div>
            </div>
            </div>
      </div>
    </div>
  </div>
</section>


  <section class="gallery">
    <div id="gallery">
    <div class="container">
      <br><br>
      <h1><b style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Galería</b></h1>
      <br><br>
      <div class="row">
        <div class="col-md-4 zoomP">
          <center>
             <img src="public/galeria/imagen2.jpg" width="100%" height="350px">
               <br> <br>
            </center>

        </div>
        <div class="col-md-8 zoomP">
          <center>
            <img src="public/galeria/imagen10.png"width="100%" height="350px">
            <br><br>
            </center>
        </div>
        <div class="row">
          <div class="col-md-4 zoomP">
            <center>
              <img src="public/galeria/imagen7.png"width="100%" height="350px">
              <br><br>
              </center>
          </div>
          <div class="col-md-4 zoomP">
            <center>
              <img src="public/galeria/imagen5.png"width="100%" height="350px">
              <br><br>
              </center>
          </div>
          <div class="col-md-4 zoomP">
            <center>
              <img src="public/galeria/imagen8.png"width="100%" height="350px">
              <br><br>
              </center>
          </div>

        </div>
    </div>
    <br><br>
    </div>
    </div>
        </section>


      <section class="clientes">
        <div id="clientes">
        <div class="container">
          <br><br>
          <h1 style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Nuestros Clientes</h1><br><br>
          <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card" >
                        <img src="https://cdn.theforkmanager.com/static/styles/blog_article_header_image/public/2020-03/1-recibir-clientes-anticiparte-necesidades-restaurante_0.jpg?itok=PhSUOck3" height="225px" class="card-img-top" alt="...">
                        <div class="card-body">
                          <!--<h5 class="card-title">Card title</h5>-->
                          <p class="card-text"  style="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #59554e">"Sabores Deliciosos se ha convertido en mi restaurante favorito. La atención al cliente es impecable y cada plato que he probado es una obra de arte culinaria. Me encanta cómo se preocupan por los detalles y hacen que cada visita sea especial. ¡Definitivamente, lo recomiendo!" <br><br> <a style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">- Ana Martínez</a></p>

                        </div>
                      </div>
                      <br>
                    </div>
                    <div class="col-md-4">
                      <div class="card" >
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-6CZOIX72rLBS6DK9vRAAUqZAyhfEsXMYHg&s" height="225px" class="card-img-top" alt="...">
                        <div class="card-body">
                          <!--<h5 class="card-title">texto</h5>-->
                          <p class="card-text"  style="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #59554e">"Fui a Sabores Deliciosos para celebrar mi aniversario y la experiencia superó todas nuestras expectativas. El ambiente es acogedor, el personal es amable y atento, y la comida es simplemente espectacular. Los sabores son auténticos y cada bocado es una delicia. ¡Volveremos pronto!" <br><br> <a style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">- Javier Gomez</a></p>

                        </div>
                      </div>
                      <br>
                    </div>
                    <div class="col-md-4">
                      <div class="card" >
                        <img src="https://res.cloudinary.com/restaurant-pe-v2/images/f_auto,q_auto/v1607524749/reputacion-1/reputacion-1.jpg?_i=AA" height="225px" class="card-img-top" alt="...">
                        <div class="card-body">
                          <!--<h5 class="card-title">Card title</h5>-->
                          <p class="card-text" style="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #59554e">"Desde que descubrí Sabores Deliciosos, no puedo dejar de ir. Tienen una gran variedad de platillos y todos son exquisitos. Además, el sistema de reservas es muy conveniente, lo cual es perfecto para mis planes de última hora. Me encanta la atmósfera del lugar, siempre me siento bienvenida." <br><br> <a style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">- Laura Fernandez</a></p>

                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>
                </div>
               <!-- <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card" >
                        <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100190.jpg?t=st=1715528897~exp=1715532497~hmac=f02488677258b8656cb05acd1f1f56f7c9b51805cd45a265e15d4d5f4f03e6b4&w=996" height="225px" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>
                      </div>
                      <br>
                    </div>
                    <div class="col-md-4">
                      <div class="card" >
                        <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100190.jpg?t=st=1715528897~exp=1715532497~hmac=f02488677258b8656cb05acd1f1f56f7c9b51805cd45a265e15d4d5f4f03e6b4&w=996" height="225px" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>
                      </div>
                      <br>
                    </div>
                    <div class="col-md-4">
                      <div class="card" >
                        <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100190.jpg?t=st=1715528897~exp=1715532497~hmac=f02488677258b8656cb05acd1f1f56f7c9b51805cd45a265e15d4d5f4f03e6b4&w=996" height="225px" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>
                      </div>
                      <br>
                    </div>
                  </div>
                </div>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>

      </section> --> 
      <section class="map">
  <div class="container">
    <br><br>
    <h1 style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Ubicación</h1><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22030.555574283026!2d-98.2809980081804!3d19.22916478334355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfdb73b7b10445%3A0x1acfb151638ce925!2sUniversidad%20Polit%C3%A9cnica%20de%20Tlaxcala!5e0!3m2!1ses-419!2smx!4v1715541257517!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
<br>
<br>

</body>  
          <?php
          
          include ('layout/parte2.php');

          include ('admin/layout/mensaje.php'); ?>
