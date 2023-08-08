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

  <link rel="canonical" href="http://www.solinda.com.mx/proyecto_transportador-cabeza-motor.php?lang=es">
  <link rel="alternate" hreflang="en" href="http://www.solinda.com.mx/proyecto_transportador-cabeza-motor.php?lang=en">

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
      <div class="wrapper-hero__project-each">
        <section class="page-hero" class="about-hero image-as-background" style="background-image: url('/img/projects/transportador-cabeza-motor/solinda_transportador-cabeza-motor_cover.jpg');">
            <div class="container">
              <h6 class="animate fadeInLeft delay-400"><span class="dash">—</span><?php echo $lang['Proyecto']?></h6>
              <h2 class="hero-title animate fadeInLeft delay-600"><?php echo $lang['Transportador de Cabeza de Motor Fuera de Horno']?></h2>
            </div>
            <!--<a href="#about" class="btn_scroll">Show me more</a>-->
        </section>
      </div>

      <div class="wrapper-project__cover-info animate fadeInLeft delay-800">
        <ul class="project__tags">
          <div class="project__tags__bg"></div>
          <div class="project__tags__inner">
            <li class="project__tag" style="">
              <div class="project__tag__name"><?php echo $lang['Cliente']?></div>
              <div class="project__tag__value"><?php echo $lang['Empresa Canadiense']?></div>
            </li>
            <li class="project__tag" style="">
              <div class="project__tag__name"><?php echo $lang['A&ntildeo']?></div>
              <div class="project__tag__value">2021</div>
            </li>
          </div>
        </ul>
      </div>


      <!-- END HERO -->

      <div class="project-each__page">    
      
      <div class="project-each__lg-img-wrapper">
        <div class="container">
          <span class="mask-fadein notViewed animBlock item_4" data-position="in"">
            <img src="/img/projects/transportador-cabeza-motor/solinda_transportador-cabeza-motor_cover.jpg" class="img-regular img-fluid" alt="">
          </span>
        </div>
      </div>

      <!--Cover Paragraph-->
      <section class="project-each__paragraph">
        <div class="container">
          <div class="column_container ">
            <div class="col">  
                  <span class="mask notViewed animBlock item_1 label-line" data-position="up"></span>
                  <p class="item_2 rich-paragraph"><?php echo $lang['El equipo de Solinda se encargó de la fabricación de este sistema de conveyors para uno de nuestros clientes canadiense.']?></p></br></br>
                  <p class="item_2"><b><?php echo $lang['Conveyor de entrada:']?></b><?php echo $lang[' tiene una medida de 2 mts de largo x 7 metros de ancho x 0.75 mts de alto, con estructura de PTR y/o canal de 3” con ajuste a medidas comerciales nacionales. Para la nivelación del sistema fueron utilizados espárragos de ¾ con plato giratorio de ajuste; además, para la nivelación y el ajuste de ángulo en las patas del conveyor fueron incorporados rodillos de tracción por medio de sprocket marca Makitech, modelo KR484010s-350w, seleccionado a consideración de tiempo y costo. La fuerza es transmitida desde motores marca Sumitomo y cadena tipo Tsubaki. La estación de localización incorpora cilindros marca SMC modelo MGPM32 y sistema de elevación con cilindro SMC mod CDNA2F40, controlados por electroválvulas SMC mod VQC. Como medida de seguridad, incorpora una guarda de lámina calibre 12 en zona de carga y guardas en las zonas bajas para evitar atrapamiento.']?></p></br></br>
                  <p class="item_2"><b><?php echo $lang['Buffer estático:']?></b><?php echo $lang[' de 2.2 mts de largo x 0.9 mts de ancho x 0.82 metros de alto, con estructura de PTR y/o canal de 3” con ajuste a medidas comerciales nacionales. Para la nivelación fueron incorporados espárragos de ¾ con plato giratorio de ajuste, nivelación y ajuste de ángulo en patas de conveyor, se integran 10 nidos de localización en acero 1018 pavonados con pines de localización con cromo duro para colocación de la pieza.']?></p></br></br>
                  <p class="item_2"><b><?php echo $lang['Conveyor de Salida OK:']?></b><?php echo $lang[' de 2.18 mts de largo x .5 mts de ancho x 1.5 mts de alto, con estructura de PTR y/o canal de 3” y con ajuste a medidas comerciales nacionales. Para la nivelación fueron utilizados espárragos de ¾ con plato giratorio de ajuste, nivelación y ajuste de ángulo en patas de conveyor, se integraron rodillos de tracción por medio de sprocket marca Makitech modelo KR484010s-350w, seleccionados a consideración de tiempo y costo. Fuerza transmitida desde motores marca Sumitomo y cadena tipo TSUBAKI. Como medida de seguridad, incluye una guarda de lámina calibre 12 en zona de carga.']?></p></br></br>
                  <p class="item_2"><b><?php echo $lang['Conveyor NG:']?></b><?php echo $lang[' de 2 mts de largo x 0.5 mts de ancho x 1.5 mts de alto, con estructura de PTR y/o canal de 3” con ajuste a medidas comerciales nacionales. Para la nivelación fueron incorporados espárragos de ¾ con plato giratorio de ajuste, para nivelación y ajuste de ángulo en patas de conveyor fueron integrados rodillos locos. Este conveyor emplea gravedad para su funcionamiento, y por ende, no fue incorporado ningún elemento eléctrico o neumático.']?></p></br></br>
                  <p class="item_2"><b><?php echo $lang['Conveyor Retry:']?></b><?php echo $lang[' de 1.37 mts de largo x 0.47 mts de ancho x 1 m de alto, con estructura de PTR y/o canal de 3” y con ajuste a medidas comerciales nacionales. Para la nivelación fueron utilizados espárragos de ¾ con plato giratorio de ajuste, para nivelación y ajuste de ángulo en patas de conveyor, integra un sistema tipo cajón por seguridad, movimiento sobre guías y carros lineales marca THK . Además, incorpora un sistema activado por medio de cilindro neumático SMC modelo MK2TB63, así como sensores de detección marca OMRON, y por último, electroválvulas y manifold de la marca SMC modelo VQ7.']?></p></br></br>
                </div>
            </div> 
        </div> 
      </section>


      <div class="project-each__info-img-wrapper">
        <div class="container">
          <span class="mask-fadein notViewed animBlock item_4" data-position="in"">
            <img src="/img/projects/transportador-cabeza-motor/solinda_transportador-cabeza-motor-01.jpg" alt="">
          </span>
        </div>
      </div>

      <div class="project-each__info-img-wrapper">
        <div class="container">
          <span class="mask-fadein notViewed animBlock item_2" data-position="in"">
            <img src="/img/projects/transportador-cabeza-motor/solinda__conveyor-llantas-rines-02.jpg" class="img-regular img-fluid" alt="">
          </span>
        </div>
      </div>

      <div class="project-each__info-img-wrapper">
        <div class="container">
          <span class="mask-fadein notViewed animBlock item_4" data-position="in"">
            <img src="/img/projects/transportador-cabeza-motor/solinda__conveyor-llantas-rines-03.jpg" class="img-regular img-fluid" alt="">
          </span>
        </div>
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
  <script type="text/javascript" src="js/hero-effect.js"></script>
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