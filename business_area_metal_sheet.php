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

  <link rel="canonical" href="http://www.solinda.com.mx/business_area_metal_sheet.php?lang=es">
  <link rel="alternate" hreflang="en" href="http://www.solinda.com.mx/business_area_metal_sheet.php?lang=en">

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
        <section class="page-hero" class="about-hero image-as-background" style="background-image: url('/img/business-areas/SOLINDA_business-areas-metalsheet.jpg');">
            <div class="container">
              <h6 class="animate fadeInLeft delay-400"><span class="dash">—</span><?php echo $lang['Business Areas']?></h6>
              <h2 class=" uppercase text-white margin-two-top accent-font animate fadeInLeft delay-600"><?php echo $lang['Sheet Metal']?></h2>
            </div>
        </section>
      </div>
      <!-- END HERO -->

    
      <div class="bg-white"> 
        <section id="business-areas-page" class="text-left">
          <div class="grid-container-sol section padding-6-rem-bottom margin-three-top animation-parent">
            <div>
              <span class="mask notViewed animBlock " data-position="up"><h6 class=""><?php echo $lang['Sheet Metal']?></h6></span>
              <div class="item_2">
                <h3 class= margin-20px-top>
                  <?php echo $lang['+36 máquinas CNC, +85 personas en nuestro equipo, +10 años en el ramo, así como las certificaciones  certificaciones AS9100D, ISO 9001-2008, ISO 9001-2015 e ISO-17025 comprueban nuestra ']?><span class="highlight"><?php echo $lang['calidad.']?></span>
                </h3>
                <p class="rich-paragraph"><?php echo $lang['En nuestras modernas instalaciones inauguradas en 2020, contamos con una inigualable capacidad de maquinaria y equipo de técnicos especializados en sheet metal. Tenemos las certificaciones ISO 9001-2009 y ISO 9001-2015. En Solinda, garantizamos el cumplimiento de los más estrictos estándares de calidad y los más rigurosos requerimientos, por lo que nuestros clientes nos consideran el mejor aliado. Además, tenemos nuestro propio laboratorio de metrología certificado.']?></p>
                </br>
                <ul class="info__list" >
                  <li class="info__list-item"><?php echo $lang['Corte Láser CNC']?></li>
                  <li class="info__list-item"><?php echo $lang['Doblez CNC de 1mt y hasta 3mts']?></li>
                  <li class="info__list-item"><?php echo $lang['Pintura']?></li>
                  <li class="info__list-item"><?php echo $lang['Soldadura']?></li>
                  <li class="info__list-item"><?php echo $lang['Brackets, guardas, metal box']?></li>
                </ul>
              </div>
            </div>
            <div>
                <span class="mask notViewed animBlock" data-position="up"></span>
                <div class="item_2">
                  <img src="/img/business-areas/sheetmetal/solinda_sheetmetal1.jpg" style="width: clamp(230px, 22vw + 1rem, 350px);" alt="Solinda"/>
                </div>
            </div>
          </div>
        </section>
      </div>

      <div class="c-logo-grid">
        <div class="container">
          <div class="grid">
            <div class="shot ">
              <span class="mask-fadein notViewed animBlock item_1" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="/img/business-areas/automotriz/solinda-cert00.svg" alt=""></div>
              </span>
            </div>
            <div class="shot ">
              <span class="mask-fadein notViewed animBlock item_2" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="/img/business-areas/automotriz/solinda-cert01.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_3" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="/img/business-areas/automotriz/solinda-cert02.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_4" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="/img/business-areas/automotriz/solinda-cert03.svg" alt=""></div>
              </span>
            </div>
          </div>
        </div>  
      </div>

        <div class="slider margin-seventeen-bottom">
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