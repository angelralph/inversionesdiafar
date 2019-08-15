<!DOCTYPE html>
<html lang="es">
<head>
        <link rel="stylesheet" href="owl/owl.carousel.min.css">
        <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <title>Inversiones Diafar</title>
</head>
<body>


  <a id="whatsapp" href="https://api.whatsapp.com/send?phone=584264066715"><img src="imagenes/whatsapp.png" ></a> 

  <header>
<div class="menu">
    <div class="contenedor">
  
    <p class="logo">Inversiones Diafar</p>
    <img class="menu-icon" src="imagenes/menu.png" >
    <nav>
        <ul>
            <li><a href="#sobre-mi">Sobre Nosotros</a></li>
            <li><a href="#productos">Nuestros productos</a></li>
            <li><a href="#contacto">Contacto </a></li>
        </ul>


    </nav>
    
    </div>
</div>

<div id="contenedor-titulo-flex" class="contenedor">
    <div class="contenedor-titulo">
        <h1>Inversiones Diafar</h1>
        <h2>Productos para el Cuidado Personal</h2>

        <a href="#productos1">Ver Productos</a>
    </div>
</div>

    </header>


<main>
<section id="sobre-mi">
                <div class="contenedor">
                  <div class="h3">
                  <h3>Sobre Nosotros</h3>
                  </div>
                  <div class="contenedor-sobremi">
                    <div class="computadoras">
                      <img src="imagenes/cosmeticos.jpg">
                    </div>
                    <div class="texto">
                      <p> En Inversiones Diafar contamos con una gran variedad de productos para el uso y cuidado personal, donde podrás encontrar maquillajes de excelentes marcas, cremas para el cuerpo, jabones de baño, entre otros.<p>
                      <p>Tenemos una gran experiencia en los productos que vendemos, estámos a la vanguardia al contar con mercancia de la mejor calidad para nuestros clientes,</p>
                      <p>!Date un capricho! O dáselo a otra persona. Todo el mundo merece verse bien.</p>
                  
                    </div>
                  </div>
                </div>
        </section>          
 

<section id="productos">

<div id="productos1" class="contenedor">
 <h3>Nuestros Productos</h3>

 <div class="contenedor-productos">
<div class="maquillajes">
  <h4>Productos de Maquillaje</h4>
  <img src="imagenes/cosmetics.png" alt="Imagen de maquillaje">
  <a href="productos.html">Ver mas</a>
</div>
<div class="cremas">
  <h4>Productos para el cuerpo</h4>
  <img src="imagenes/cream.png" alt="imagen de productos para el cuerpo">
  <a href="#productos">Ver mas</a>
</div>
<div class="cabello">
  <h4>Productos para el cabello</h4>
<img src="imagenes/shampoo2.png" alt="Imagen de productos para el cabello">
<a href="#productos">Ver mas</a>
</div>
 
 </div>

</div>

</section>
<section id="que-esperas">
  <div class="contenedor">
    <h3>Somos tienda Física ubicada en Caracas.</h3>
    <a href="https://goo.gl/maps/aohV9VvxnYJtbm8f6" target="_blank">¡Consiguenos!</a>
  </div>
</section>


<section id="contacto">
  <?php
      if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>

      <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>

      <?php
      } else{
      ?>
  <div class="contenedor">
    <h3>Contacto</h3>
    <form action="envio-formulario.php" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Nombre" name="nombre" required>
      <input type="email" placeholder="Email" name="email" required>
      <textarea placeholder="Mensaje" name="mensaje" required></textarea>
      <input type="submit" value="ENVIAR MENSAJE">
    </form>
          <?php } ?>


    <div class="contacto-info">
      <div class="mail"><img src="imagenes/mail-icon.png" >inversionesdiafar@gmail.com</div>
      <div class="whatsapp"><img src="imagenes/whatsapp-icon.png">+584264066715</div>
    </div>


  </div>
</section>

</main>

<footer>
  <div class="contenedor">
  <div class="redes" id="instagram-bar">
          <div>
              <img id="instagramlogo"  src="imagenes/instagram.svg" >

          </div>
          <div>
            <a href="https://www.instagram.com/inversiones_diafar.c.a/" target="_blank">
              <p class="fuerte">¡Siguenos en instagram!</p>  <p>Echa un vistazo.</p>
              <img id="instagram-arrow"src="imagenes/whitearrow.png" alt="">
            </a>
          </div> 
  </div>
    <div class="parrafo">
      <p class="derechos">© 2019 Angel Useche | Diseñador Web. Todos los derechos reservados</p>
    </div>
  </div>
</footer>


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script>
<script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    </script>



    <script>
    
    $(document).ready(function(){

      $(window).scroll(function(){ 
        scroll = $(window).scrollTop();
        if (scroll > 100) {
          $(".menu").css({"position":"fixed"});
          $(".menu").css({"width":"100%"});
          $(".menu").css({"top":"0"});
          $(".menu").css({"background":"#fff"});
          $(".menu nav").css({"background":"#fff"});
          $(".menu a").css({"color": "#9932cc"});
          $(".logo").css({"color":" #9932cc"});
          $(".menu").css({"box-shadow": "rgba (0, 0, 0, 0.22) 6px 1px 1px"});
          $(".menu").css({"z-index":"100"});
        } else{
          /*cuando no hay scroll o el scroll sube */

          $(".menu").css({"position":"relative"});
          $(".menu").css({"background":"transparent"});
          $(".menu nav").css({"background":"transparent"});
          $(".menu").css({"box-shadow":"0 0 0"});
          $(".menu a").css({"color":"#fff"});
          $(".logo").css({"color":"#fff"});

        }


      })

      $(".menu-icon").click(function(){
        $("header nav").slideToggle();/*esta funcion hace que el menu aparezca deslizandoce hacia abajo y desaparezca deslizandose hacia arriba, tambien tenemos slideDown y slideUp*/ 


      })
    })

    </script>




</body>
</html>