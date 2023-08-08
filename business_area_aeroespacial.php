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

  <link rel="canonical" href="http://www.solinda.com.mx/business_area_aeroespacial.php?lang=es">
  <link rel="alternate" hreflang="en" href="http://www.solinda.com.mx/business_area_aeroespacial.php?lang=en">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style_home.css">
  <link rel="stylesheet" href="css/style23.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

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
      <div class="wrapper-hero__project-each">
        <section class="page-hero" class="about-hero image-as-background" style="background-image: url('/img/business-areas/aeroespacial/solinda_business-area-aeroespacial.jpg');">
            <div class="container">
              <h6 class="animate fadeInLeft delay-400"><span class="dash">—</span><?php echo $lang['Business Areas']?></h6>
              <h2 class=" uppercase text-white margin-two-top accent-font animate fadeInLeft delay-600"><?php echo $lang['Aeroespacial']?></h2>
            </div>
        </section>
      </div>
      <!-- END HERO -->

      

      <div class="bg-white"> 

        <section id="business-areas-page" class="text-left">
          <div class="grid-container-sol section padding-6-rem-bottom margin-three-top animation-parent">
            <div>
              <span class="mask notViewed animBlock " data-position="up"><h6 class=""><?php echo $lang['Excelencia para la Industria Aeroespacial']?></h6></span>
              <div class="item_2">
                <h3 class= "margin-20px-top">
                  <?php echo $lang['Solinda es la única empresa en el Bajío de México que ostenta la ']?><span class="highlight"><?php echo $lang['Certificación AS9100D']?></span><?php echo $lang[', la certificación de gestión de calidad para la Industria Aeroespacial']?>
                </h3>
                <p class="rich-paragraph"><?php echo $lang['Además de poseer el reconocimiento de la certificación AS9100D, nuestra iniciativa innovadora y nuestros exigente estándares de calidad nos han abierto las puertas del mercado internacional y logrado la atención de clientes como Collins Aerospace y General Electric.']?> 
                </br>
                </br>
                <?php echo $lang['Conocemos la importancia de la exactitud en las industrias de alto calibre como la Industria Aeroespacial, así que ya sea que requieran nuestros servicios en un maquinado de precisión milimétrica o en un proyecto de automatización de alta exigencia, estamos siempre listos para entregar la calidad de excelencia que la industria necesita.']?> 
                </p>
                </br>
              </div>
            </div>
            <div>
                <span class="mask notViewed animBlock" data-position="up"></span>
                <div class="item_2">
                  <img src="/img/business-areas/aeroespacial/solinda_aeroespacial-1.jpg" style="width: clamp(230px, 22vw + 1rem, 350px);" alt="Solinda"/>
                </div>
            </div>
          </div>
        </section>

        <div class="slider">
          <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="https://placehold.it/1000x670" alt="Solinda" class="img-fluid"></div>
              <div class="swiper-slide"><img src="https://placehold.it/1000x670" alt="Solinda" class="img-fluid"></div>
              <div class="swiper-slide"><img src="https://placehold.it/1000x670" alt="Solinda" class="img-fluid"></div>
              <div class="swiper-slide"><img src="https://placehold.it/1000x670" alt="Solinda" class="img-fluid"></div>
              <div class="swiper-slide"><img src="https://placehold.it/1000x670" alt="Solinda" class="img-fluid"></div>
              <div class="swiper-slide"><img src="https://placehold.it/1000x670" alt="Solinda" class="img-fluid"></div>
              <div class="swiper-slide"><img src="https://placehold.it/1000x670" alt="Solinda" class="img-fluid"></div>
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
                    <h3 class="item_2 service-each__subtitle"><?php echo $lang['Tenemos la Certificación Aeroespacial ']?><span class="highlight"><?php echo $lang['AS9100D']?></span></h3>
                    
                    <span class="mask-fadein item_2 notViewed animBlock" data-position="in"><p class="item_3"><?php echo $lang['Solinda es la única empresa en Aguascalientes, y de hecho, es la única empresa en todo el Bajío mexicano en poseer el prestigioso reconocimiento de la certificación AS9100D, certificación de calidad para la Industria Aeroespacial.']?></p>                  
                    </span>
                    
                  </div>
                  <div class="col col-md-6 col-md-offset-1">
                    <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                      <div class="service-each__img item_3" style="background-image:url('/img/business-areas/aeroespacial/solinda_aeroespacial-certificacion.jpg');"></div>
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
                      <div class="service-each__img " style="background-image:url(/img/business-areas/aeroespacial/solinda_aeroespacial-femia.jpg);"></div>
                    </span>
                  </div>
                  <div class="col col-md-5 col-md-offset-1">
                    <span class="mask notViewed animBlock item_1 label-line" data-position="up"></span>
                    <span class="mask-fadein item_2 notViewed animBlock" data-position="in">
                      <h3 class="service-each__subtitle"> 
                      <?php echo $lang['Pertenecemos a ']?><span class="highlight"><?php echo $lang['FEMIA, la Federación Mexicana de la Industria Aeroespacial']?></span>
                      </h3>
                    </span>
                    <span class="mask-fadein item_2 notViewed animBlock" data-position="in"><p class="item_5"><?php echo $lang['Solinda es miembro de FEMIA, la asociación empresarial más importante de México dentro del sector aeroespacial. La excelencia de nuestro trabajo nos posiciona como líderes del sector y aliados estratégicos en la industria aeroespacial.']?></p>
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
                    <?php echo $lang['Somos participantes de ']?><span class="highlight"><?php echo $lang['FAMEX']?></span><?php echo $lang[', la Feria Aeroespacial más importante de México']?>
                    </h3>
                    <span class="mask-fadein item_3 notViewed animBlock" data-position="in"><p class="item_2"><?php echo $lang['Solinda ha sido partícipe de La Feria Aeroespacial México, la cual es organizada por la mismísima Secretaría de la Defensa Nacional a través de la Fuerza Aérea Mexicana. México se ha convertido en uno de los más importantes epicentros del sector aeroespacial y Solinda se ha posicionado como aliado fundamental de la industria aeroespacial.']?></p></span>
                    <br><br><br>
                  </div>
                  <div class="col col-md-6 col-md-offset-1">
                    <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                      <div class="service-each__img item_3" style="background-image:url('/img/business-areas/aeroespacial/solinda_aeroespacial-famex.jpg');"></div>
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
                      <div class="service-each__img " style="background-image:url(/img/business-areas/aeroespacial/solinda_aeroespacial-capacidad.jpg);"></div>
                    </span>
                  </div>
                  <div class="col col-md-5 col-md-offset-1">
                    <span class="mask notViewed animBlock item_1 label-line" data-position="up"></span>
                    <span class="mask-fadein item_2 notViewed animBlock" data-position="in">
                      <h3 class="service-each__subtitle"> 
                      <?php echo $lang['Servicios de Máxima Calidad para la ']?><span class="highlight"><?php echo $lang['Industria Aeroespacial']?></span>
                      </h3>
                    </span>
                    <span class="mask-fadein item_2 notViewed animBlock" data-position="in"><p class="item_5"><?php echo $lang['Con nuestros más de 10 años de experiencia, 32 máquinas CNC, laboratorio de metrología así como nuestras otras certificaciones ISO 9001-2008, ISO 9001-2015 e ISO-17025, somos expertos en sobrepasar las expectativas de nuestros clientes cumpliendo milimétricamente sus requerimientos. Nuestras especialidades son:']?></p>
                      <ul class="info__list">
                        <li class="info__list-item"><?php echo $lang['Corte láser']?></li>
                        <li class="info__list-item"><?php echo $lang['Doblez CNC de 1m y hasta 3m']?></li>
                        <li class="info__list-item"><?php echo $lang['Maquinado CNC']?></li>
                        <li class="info__list-item"><?php echo $lang['Soldadura']?></li>
                        <li class="info__list-item"><?php echo $lang['ABB']?></li>
                        <li class="info__list-item"><?php echo $lang['Inspección por Líquidos Penetrantes']?></li>
                      </ul>
                    </span>
                  </div>
                </div>
              </div> 
            </div> 
          </div>
        </section>

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