<?php
  include "php/config.php";
?>

<!DOCTYPE html>
<html lang="<?php echo $lang['language']?>"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- Primary Meta Tags -->
  <title><?php echo $lang['title']?></title>
  <meta name="title" content="<?php echo $lang['title']?>">
  <meta name="keywords" content="Solinda, soluciones, industria, Aguascalientes, México, USA, Canadá, automatización, dispositivos, automation, devices, ingeniería, engineering, refacciones, componentes, components, metrología, laboratorio de metrología, metrology, metrology lab, racks, industry, comercial, commercial, experiencia, experience "/>
  <meta name="description" content="<?php echo $lang['meta_description']?>">

  <link rel="canonical" href="http://www.solinda.com.mx/servicio_dispositivos-herramientas.php?lang=es">
  <link rel="alternate" hreflang="en" href="http://www.solinda.com.mx/servicio_dispositivos-herramientas.php?lang=en">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style_home.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/714ce38695.js" crossorigin="anonymous"></script>

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159543246-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159543246-1');
  </script>

  
<!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '298599091673461');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=298599091673461&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
  
</head>

<body style="" >

  <div class="grid-design">
    <div class="container">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </div>

  <div id="wrapper">
    <!-- HEADER -->
    <div id="wrapper_header" class="">
      <header id="header">
        <div class="container">
          <a href="/" class="logo">
            <img src="img/logo_solinda.svg" class="static" alt="Solinda SA de CV">
            <span class="iso"></span>
          </a>
          <div class="wrapper_menu">
            <div class="menu_contact">
              <a href="contacto.php"><?php echo $lang['Contacto']?><i class="arrow right"></i></a>
            </div>
            <div class="menu_language">
              <ul class="lang">
                <li>
                  <a href="index.php?lang=es" >Es</a>
                  <a href="index.php?lang=en" class="off">Eng</a>
                </li>
              </ul>
            </div>
            <nav>
              <div id="toggle_m_nav" href="#">
                <div id="m_nav_menu" class="m_nav">
                  <div class="m_nav_ham" id="m_ham_1"></div>
                  <div class="m_nav_ham" id="m_ham_2"></div>
                </div>
              </div>
              <span class="nav_wrapper" id="m_nav_container">
                <ul class="navbar">
                  <li class="link-1">
                    <a class="scrollTo fade" href="index.php"><?php echo $lang['Inicio']?></a>
                  </li>
                  <li class="link-2">
                    <a class="scrollTo fade" href="nosotros.php"><?php echo $lang['Nosotros']?></a>
                  </li>
                  <li class="link-3">
                    <a class="scrollTo fade" href="servicios.php"><?php echo $lang['Servicios']?></a>
                  </li>
                  <li class="link-4"><a href="proyectos.php" class="fade"><?php echo $lang['Proyectos']?></a>
                  </li>
                  <li class="link-5">
                    <a class="scrollToContact fade" href="contacto.php"><?php echo $lang['Contacto']?></a>
                  </li>
                  <li class="link-6">
                    <a class="scrollToContact fade" href="business_areas.php"><?php echo $lang['Business Areas']?></a>
                  </li>
                </ul>
                <ul class="social animate">
                  <li>
                    <a href="https://www.instagram.com/solindaags/" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://es-la.facebook.com/SolindaAgs/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="https://mx.linkedin.com/company/solinda-sa-de-cv" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </span>
            </nav>
          </div>
        </div>
      </header>
    </div>
    <!--END HEADER -->

    
      <div class="main-content">
        <!-- HERO -->
        <div class="wrapper-hero__service-each">
          <section class="page-hero" class="about-hero image-as-background">
              <div class="container text-center">
                <h6 class="animate fadeInLeft delay-400"><?php echo $lang['Servicios']?></h6>
                <h2 class="hero-title animate fadeInLeft delay-600"><?php echo $lang['Dispositivos']?></h2>
              </div>
              <!--<a href="#about" class="btn_scroll">Show me more</a>-->
          </section>
        </div>
        <!-- END HERO -->
        <div class="service-each__hero-img">
          <div class="container">
            <span class="animate fadeInLeft delay-800">
              <img src="/img/service-each/devices/solinda_devices_cover.jpg" class="img-fluid" alt="">
            </span>
          </div>
        </div>
        

        <div id="service-automation-page">    
        
        <!--<div class="service-page-cover-img animate fadeInLeft delay-800">
          <div class="container">
            <img src="/img/img-home.jpg" alt="">
          </div>
        </div>-->

          <section class="service-each-paragraph">
            <div class="container">
              <div class="column_container">
                <div class="col">
                  <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><?php echo $lang['Dispositivos']?></h6></span>
                  <p class="item_2 service__cover-paragraph">
                    <?php echo $lang['En ']?> <span class="highlight"><?php echo $lang['Solinda']?></span><?php echo $lang[', nuestra especialidad es manufacturar checking fixtures, gauges y jigs.']?>
                  </p>
                  <p class="item_2"><?php echo $lang['Somos expertos en fabricar dispositivos para una gran variedad de aplicaciones en la mejora de procesos de la industria. En Solinda, nuestra especialidad es manufacturar checking fixtures, gauges y jigs para inspección de calidad de partes manufacturadas principalmente para la industria automotriz. Nuestra capacidad garantiza resultados de precisión y tiempos competentes de entrega.']?>
                </div>
              </div> 
            </div> 
          </section>


          <div class="slider">
            <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
              <!-- Slides -->
  
            <div class="swiper-slide"><img src="/img/service-each/devices/solinda_devices_s01.jpg" alt="Solinda" class="img-fluid"></div>
            <div class="swiper-slide"><img src="/img/service-each/devices/solinda_devices_s02.jpg" alt="Solinda" class="img-fluid"></div>
            <div class="swiper-slide"><img src="/img/service-each/devices/solinda_devices_s03.jpg" alt="Solinda" class="img-fluid"></div>
            <div class="swiper-slide"><img src="/img/service-each/devices/solinda_devices_s04.jpg" alt="Solinda" class="img-fluid"></div>
            <div class="swiper-slide"><img src="/img/service-each/devices/solinda_devices_s05.jpg" alt="Solinda" class="img-fluid"></div>
            
  
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            </div>
          </div>

          <section class="service-each__info-section">
          <!--Img Right-->
          <div class="service-each__info">
            <div class="container">
              <div class="column_container">
                <div class="row">
                  <div class="col col-md-5 ">  
                    <span class="mask notViewed animBlock item_1 label-line" data-position="up"></span>
                    <h3 class="item_2 service-each__subtitle"><?php echo $lang['Ingeniería']?></h3>
                    
                    <span class="mask-fadein item_2 notViewed animBlock" data-position="in"><p class="item_3"><?php echo $lang['Nuestro departamento de ingeniería se encarga de analizar cada proyecto para determinar el proceso adecuado de acuerdo con las especificaciones de los cliente, para después elaborar la propuesta a través de nuestro software especializado.']?></p>
                    </span>
                    
                  </div>
                  <div class="col col-md-6 col-md-offset-1">
                    <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                      <div class="service-each__img item_3" style="background-image:url('/img/service-each/devices/solinda_devices_03.jpg');"></div>
                    </span>
                  </div>
                </div>
              </div> 
            </div> 
          </div>

          <!--Img Left-->
          <div class="service-each__info">
            <div class="container">
              <div class="column_container">
                <div class="row">
                  <div class="col col-md-6">  
                    <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                      <div class="service-each__img " style="background-image:url(/img/service-each/devices/solinda_devices_02.jpg);"></div>
                    </span>
                  </div>
                  <div class="col col-md-5 col-md-offset-1">
                    <span class="mask notViewed animBlock item_1 label-line" data-position="up"></span>
                    <span class="mask-fadein item_2 notViewed animBlock" data-position="in">
                      <h3 class="service-each__subtitle"> 
                        <?php echo $lang['Fabricación']?>
                      </h3>
                    </span>
                    <span class="mask-fadein item_2 notViewed animBlock" data-position="in"><p class="item_5"><?php echo $lang['Manufacturamos cada pieza nosotros mismos en nuestra planta, gracias a nuestros numerosos centros de maquinado CNC de alta velocidad y nuestra maquinaria de última tecnología.']?>  </p>
                    </span>
                  </div>
                </div>
              </div> 
            </div> 
          </div>

          <!--Img Right-->
          <div class="service-each__info">
            <div class="container">
              <div class="column_container">
                <div class="row">
                  <div class="col col-md-5 ">  
                    <span class="mask notViewed animBlock item_1 label-line" data-position="up"></span>
                    <h3 class="item_2 service-each__subtitle">
                      <?php echo $lang['Verificación']?>
                    </h3>
                    <span class="mask-fadein item_3 notViewed animBlock" data-position="in"><p class="item_2"><?php echo $lang['Cada dispositivo que elaboramos, así como cada pieza que fabricamos, es verificado en nuestro laboratorio de metrología certificado para cumplir con cada estándar requerido por nuestros cliente.']?></p></span>
                    <br><br><br>
                  </div>
                  <div class="col col-md-6 col-md-offset-1">
                    <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                      <div class="service-each__img item_3" style="background-image:url('/img/service-each/devices/solinda_devices_01.jpg');"></div>
                    </span>
                  </div>
                </div>
              </div> 
            </div> 
          </div>

          <!--Img Left-->

          </div>

        <section class="see-projects_cta">
            <div class="container">
              <div class="column_container">
                <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Experiencia Comprobada']?></h6></span>
                <h3 class="item_2 service-each__subtitle">
                <?php echo $lang['Nuestros proyectos demuestran ']?><span class="highlight"><?php echo $lang['experiencia']?></span>
                </h3>
              
                <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                  <div class="cta_container">
                    <a class="cta" href="proyectos.php" title="discover" target="_self">
                      <span><?php echo $lang['Ver Proyectos']?></span><i class="arrow right"></i>
                    </a>
                  </div>
                </span>
              </div>
            </div>
        </section>


        <section id="contact_cta">
          <div class="container">
            <div class="column_container">
              <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Tenemos la Solución']?></h6></span>
              <h3 class="item_2">
              <?php echo $lang['Hablemos de las ']?><span class="highlight"><?php echo $lang['soluciones']?></span>
              </br><?php echo $lang['que podemos ofrecerte']?>
              </h3>
            
              <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                <div class="cta_container">
                  <a class="cta" href="contacto.php" title="discover" target="_self">
                    <span><?php echo $lang['Contactarnos']?></span><i class="arrow right"></i>
                  </a>
                </div>
              </span>
            </div>
          </div>
        </section>
        
      </div>
    </div>

    <footer id="footer">
        <div class="container">
          <div id="footer__inner">
            <div id="footer__logo"><a href="/" class="logo">
              <img src="img/logo_solinda.svg" class="static" alt="Solinda SA de CV">
              <span class="iso"></span>
            </a></div>
        
            <ul id="footer__pages">
              <li class="footer__page" id="footer__page--home">
                <a class="footer__page__title" href="/"><?php echo $lang['Inicio']?></a>
                <ul class="footer__page__sections"></ul>
              </li>
              <li class="footer__page" id="footer__page--about">
                <a class="footer__page__title" href="/nosotros.php"><?php echo $lang['Nosotros']?></a>
                <ul class="footer__page__sections"></ul>
              </li>
              <li class="footer__page" id="footer__page--services">
                <a class="footer__page__title" href="/servicios.php"><?php echo $lang['Servicios']?></a>
                <ul class="footer__page__sections">
                  <li class="footer__page__section">
                    <a class="footer__page__section__title" href="/servicio_automatizacion.php"><?php echo $lang['Automatización']?></a>
                  </li>                                             
                  <li class="footer__page__section">
                    <a class="footer__page__section__title" href="/servicio_dispositivos-herramientas.php"><?php echo $lang['Dispositivos']?></a>
                  </li>                                      
                  <li class="footer__page__section">
                    <a class="footer__page__section__title" href="/servicio_metrologia-ingenieria-inversa.php"><?php echo $lang['Metrología']?></a>
                  </li>                                        
                  <li class="footer__page__section">
                    <a class="footer__page__section__title" href="/servicio_refaccionamiento.php"><?php echo $lang['Refaccionamiento']?></a>
                  </li>                                       
                  <li class="footer__page__section">
                    <a class="footer__page__section__title" href="/servicio_racks.php"><?php echo $lang['Racks']?></a>
                  </li>
                </ul>
              </li>
              <li class="footer__page" id="footer__page--projects">
                <a class="footer__page__title" href="/proyectos.php"><?php echo $lang['Proyectos']?></a>
                <ul class="footer__page__sections"></ul>
              </li>
              <li class="footer__page" id="footer__page--contact">
                <a class="footer__page__title" href="/contacto.php"><?php echo $lang['Contacto']?></a>
                <ul class="footer__page__sections"></ul>
              </li>
            </ul>
        
            <div id="footer__contact">
              <strong>Solinda S.A. de C.V.</strong>
              <br><?php echo $lang['Calle Málaga #202 Esq. San Emilion']?>
              <br>Arboledas de Paso Blanco,
              <br>Jesús María, Aguascalientes.
              <br>CP 20907 
              </br>
              <br><strong>po@solinda.com.mx</strong>
              </br>
              <br><strong>(+52) 449 153 02 66 ext. 111</strong>
            </div>

            <div id="footer__social">
              <ul class="social">
                <li>
                  <a href="https://www.instagram.com/solindaags/" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://es-la.facebook.com/SolindaAgs/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="https://mx.linkedin.com/company/solinda-sa-de-cv" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
        
            <div id="footer__bottom"><!--
              <div id="footer__copyright">2021 Solinda S.A de C.V. All Rights Reserved.</div>
            -->
            </div>
          </div>
        </div>
    </footer>
    
    <span class="notViewed animBlock" data-position="left" style="visibility:hidden;position:absolute;bottom:-50px;"></span>
  </div>


  <!--
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
  </script>
  -->
  
  <script src="js/jquery.waypoints.min.js"></script>
  <script type="text/javascript" src="js/nav.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/scrollview.js"></script>
  <script type="text/javascript" src="js/projects-lazyload.js"></script>
  <!--<script type="text/javascript" src="js/hero-effect.js"></script>-->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      slidesPerView: "auto",
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script type="text/javascript" src="/js/slider.js"></script>
  
  

  
</body>
</html>