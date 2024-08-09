
<?php
include ('app/config.php');
include ('layout/parte1.php');

?>
<br>
<br>
<br>
<br>
<br>
  
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
        <div style="display: flex; align-items: center;">
    <img src="Public/images/iconos/menu.png" width="50" height="50" class="img-fluid" alt="">
    <h2 style="margin-left: 10px;" >Menú</h2>
        
</div>
          <p>Consulta Nuestro Delicioso Menú</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-starters">Entradas</li>
              <li data-filter=".filter-salads">Ensaladas</li>
              <li data-filter=".filter-desserts">Postres</li>
              <li data-filter=".filter-drinks">Bebidas</li>

            </ul>
          </div>
        </div>



    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">


    
<div class="col-lg-6 menu-item filter-desserts">
  <img src="Public/img/menu/flan.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Flan </a><span>$40. MXN</span>
  </div>
  <div class="menu-ingredients">
    Suave y cremoso flan de huevo y caramelo.
  </div>
</div>


<div class="col-lg-6 menu-item filter-desserts">
  <img src="Public/img/menu/tarta.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Tarta de Queso</a><span>$135.15 MXN</span>
  </div>
  <div class="menu-ingredients">
    Queso crema, azúcar, huevos, vainilla, base de galleta
  </div>
</div>

<div class="col-lg-6 menu-item filter-starters">
  <img src="Public/img/menu/chile.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Chiles en Nogada</a><span>$180.00 MXN</span>
  </div>
  <div class="menu-ingredients">
  Chiles rellenos de picadillo, bañados en salsa de nuez.
  </div>
</div>

      <div class="col-lg-6 menu-item filter-starters">
        <img src="Public/img/menu/enchiladas.png" class="menu-img" alt="">
        <div class="menu-content">
          <a>Enchiladas Suizas</a><span>$120.00 MXN</span>
        </div>
        <div class="menu-ingredients">
        Tortillas rellenas de pollo, bañadas en salsa verde y gratinadas con queso.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <img src="Public/img/menu/tostadas.png" class="menu-img" alt="">
        <div class="menu-content">
          <a >Tostadas de Tinga</a><span>$65.00 MXN</span>
        </div>
        <div class="menu-ingredients">
        Crujientes tostadas con tinga de pollo y aguacate.
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-salads">
        <img src="Public/img/menu/greek-salad.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a>Ensalada Griega</a><span>$169.15 MXN</span>
        </div>
        <div class="menu-ingredients">
          Espinacas frescas, lechuga romana crujiente, tomates y aceitunas griegas
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-salads">
        <img src="Public/img/menu/spinach-salad.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a>Ensalada de Espinacas</a><span>$169.15 MXN</span>
        </div>
        <div class="menu-ingredients">
          Espinacas frescas con champiñones, huevo duro y vinagreta tibia de tocino
        </div>
      </div>

      <div class="col-lg-6 menu-item filter-starters">
        <img src="Public/img/menu/pozole.png" class="menu-img" alt="">
        <div class="menu-content">
          <a >Pozole</a><span>$90.00 MXN</span>
        </div>
        <div class="menu-ingredients">
        Tradicional caldo de maíz con carne de cerdo y guarniciones.
        </div>
      </div>


      <div class="col-lg-6 menu-item filter-desserts">
  <img src="Public/img/menu/churros.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Churros con Chocolate</a><span>$50.00 MXN</span>
  </div>
  <div class="menu-ingredients">
Churros crujientes con salsa de chocolate caliente
  </div>
</div>

<div class="col-lg-6 menu-item filter-desserts">
  <img src="Public/img/menu/arroz.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Arroz con Leche</a><span>$30.00 MXN</span>
  </div>
  <div class="menu-ingredients">
  Un postre dulce y cremoso de arroz cocido en leche, endulzado con azúcar y canela.
  </div>
</div>

<div class="col-lg-6 menu-item filter-drinks">
  <img src="Public/img/menu/cafe.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Café</a><span>$50.00 MXN</span>
  </div>
  <div class="menu-ingredients">
    Granos de café, agua
  </div>
</div>

<div class="col-lg-6 menu-item filter-drinks">
  <img src="Public/img/menu/jamaica.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Agua de Jamaica</a><span>$45.00 MXN</span>
  </div>
  <div class="menu-ingredients">
  Refrescante bebida de flor de jamaica.
  </div>
</div>

<div class="col-lg-6 menu-item filter-drinks">
  <img src="Public/img/menu/margarita.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Margarita Clásica</a><span>$80.00 MXN</span>
  </div>
  <div class="menu-ingredients">
  Cóctel clásico de tequila con limón y sal
  </div>
</div>

<div class="col-lg-6 menu-item filter-drinks">
  <img src="Public/img/menu/horchata.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Agua de Horchata</a><span>$25.00 MXN</span>
  </div>
  <div class="menu-ingredients">
  Refrescante bebida de arroz con canela.
  </div>
</div>
<div class="col-lg-6 menu-item filter-starters">
  <img src="Public/img/menu/Filete.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Filete de Res</a><span>$250.00 MXN</span>
  </div>
  <div class="menu-ingredients">
    Filete de res, sal, pimienta, mantequilla, ajo, romero
  </div>
</div>

<div class="col-lg-6 menu-item filter-starters">
  <img src="Public/img/menu/chilaquiles.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>chilaquiles Rojos</a><span>$70.00 MXN</span>
  </div>
  <div class="menu-ingredients">
  Totopos bañados en salsa roja y acompañados de pollo y queso.

$70.00
  </div>
</div>

<div class="col-lg-6 menu-item filter-starters">
  <img src="Public/img/menu/Tacos.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Tacos de Cochinita Pibil</a><span>$80.00 MXN</span>
  </div>
  <div class="menu-ingredients">
  Tacos de cerdo marinado en achiote y especias.
  </div>
</div>

<div class="col-lg-6 menu-item filter-starters">
  <img src="Public/img/menu/pasta.png" class="menu-img" alt="">
  <div class="menu-content">
    <a>Pasta Alfredo</a><span>$170.00 MXN</span>
  </div>
  <div class="menu-ingredients">
    Pasta, crema, mantequilla, ajo, queso parmesano, perejil
  </div>
</div>

    </div>
  </div>
</section><!-- End Menu Section -->




  <?php

include ('layout/parte2.php');
?>
