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

  <link rel="canonical" href="http://www.solinda.com.mx/index.php?lang=es">
  <link rel="alternate" hreflang="en" href="http://www.solinda.com.mx/index.php?lang=en">

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="Solinda — Automatización">
  <meta itemprop="description" content="Solinda es una empresa líder en sistemas automatizados para la industria automotriz.">
  <meta itemprop="image" content="url('/img/og/solinda_socialcard.jpg)">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://solinda.com.mx/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Solinda — Automatización">
  <meta property="og:description" content="Solinda es una empresa líder en sistemas automatizados para la industria automotriz.">
  <meta property="og:image" content="url('/img/og/solinda_socialcard.jpg)">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Solinda — Automatización">
  <meta name="twitter:description" content="Solinda es una empresa líder en sistemas automatizados para la industria automotriz.">
  <meta name="twitter:image" content="url('/img/og/solinda_socialcard.jpg)">


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
      <section id="hero" class="hero-home"">
        <div class="hero__img-cover" style="background-image: url('/img/hero__cover.jpg')";>

        
        <div class="container viewed" data-position="up">
            <div class="text_middle">
              <h1 class="animate fadeInLeft delay-400 h6-hero-descriptive"><span class="dash">—</span><?php echo $lang['Somos Solinda']?></h1>
              <span class="words_cont animate fadeInLeft delay-400">
                <h1><?php echo $lang['Lideramos el Futuro de la Automatización']?></h1>
              </span>
              <div class="hero-new-paragraph-container">
                <span class="hero-new-paragraph animate fadeInLeft delay-400">
                  <?php echo $lang['Somos líderes en el futuro de la automatización y a partir del año 2022, la empresa se planteó el objetivo de ampliar sus alcances e identificó al sector aerospacial como la oportunidad de potencializar nuestra organización ante los cambios en la industria a nivel global.']?>
                </span>
              </div>
            </div>
            <div class="cta_container animate fadeInLeft delay-800">
              <a class="cta" href="nosotros.php" title="discover" target="_self">
                <span><?php echo $lang['Quiénes Somos']?></span>
                <i class="arrow right"></i>
              </a>
            </div>
          <!--<span class="img_hero">
            <source src="video/hh-video.mp4" type="video/mp4">
            <video autoplay="" muted="" playsinline="" webkit-playsinline="" loop="" id="myVideo" poster="img/hero-video-placeholder@2x.jpg">
              <source src="video/hh-video.webm" type="video/webm">
              <source src="video/hh-video.ogv" type="video/ogv">
            </video>
          </span>-->
          <div class="wrap-logos-hero animate fadeInLeft delay-800">
            <!--<div class="image img-logos-hero">
              <img class="img-logo-hero" alt="" data-sizes="auto" data-src="img/hero-logo-1.svg" data-srcset="" src="img/hero-logo-1.svg" >
            </div>-->
            <!--<div class="image img-logos-hero">
              <img class="img-logo-hero" alt="" data-sizes="auto" data-src="img/hero-logo-1.svg" data-srcset="" src="img/hero-logo-2.svg" >
            </div>-->
            <!--<div class="image img-logos-hero">
              <img class="img-logo-hero" alt="" data-sizes="auto" data-src="img/hero-logo-1.svg" data-srcset="" src="img/hero-logo-3.svg" >
            </div>-->

            <div class="image img-logos-hero">
              <img class="img-logo-hero" alt="" data-sizes="auto" data-src="img/hero-logo-1.svg" data-srcset="" src="img/hero-logo-1_1.svg" >
            </div>
            <div class="image img-logos-hero">
              <img class="img-logo-hero" alt="" data-sizes="auto" data-src="img/hero-logo-1.svg" data-srcset="" src="img/hero-logo-2_2.svg" >
            </div>
            <div class="image img-logos-hero">
              <img class="img-logo-hero" alt="" data-sizes="auto" data-src="img/hero-logo-1.svg" data-srcset="" src="img/hero-logo-4.svg" >
            </div>
          </div>
          <!--<a href="#about" class="btn_scroll">Show me more</a>-->
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

        </div>
      </section>

      <section id="about">
        <div class="container">
          <div class="column_container">
            <div class="row">
              <div class="col col-md-6">  
                <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Experiencia Comprobada']?></h6></span>
                <h3 class="item_2">
                <?php echo $lang['Con 10 años de experiencia, en ']?><span class="highlight"><?php echo $lang['Solinda']?></span><?php echo $lang[' nos hemos convertido en una empresa líder en sistemas automatizados, dispositivos y componentes para la Industria Automotriz.']?>
                <br><br>
                <?php echo $lang['Recientemente logramos la certificación de la norma AS9100D para incursionar en la industria aeroespacial; es un orgullo y un gran compromiso ser la única empresa certificada en esta norma en todo el estado de Aguascalientes.']?>
                </h3>
                <div class="item_2 cta_container">
                  <a class="cta" href="nosotros.php" title="discover" target="_self">
                    <span><?php echo $lang['Más sobre Nosotros']?></span>
                    <i class="arrow right"></i>
                  </a>
                </div>
              </div>
              <div class="col col-md-5 col-md-offset-1 ">
                <span class="mask-fadein item_4 notViewed animBlock" data-position="in">
                  <div class="video-corp">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0Jufz3ACgK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  </div>
                </span>
              </div>
            </div> 
          </div> 
        </div> 
      </section>

      <div class="home-pic">
        <img src="/img/img-home.jpg" alt="" class="img-home img-fluid">
      </div>

      <!-- <section id="certifications">
        <div class="container">
          <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Certificaciones']?></h6></span>
          <h3 class="item_2">
          <?php echo $lang['Nuestra Calidad está ']?><span class="highlight"><?php echo $lang['Certificada']?></span>
          </h3>
        </div> 
      </section>

      <div id="certifications-grid">
        <div class="container">
          <span class="mask notViewed animBlock item_1" data-position="up">
            <div class="grid-flex-cert">
              <div class="grid-item">
                <span class="mask-fadein notViewed animBlock item_1" data-position="in">
                <a href="#" class="cert">
                  <div class="cert-text">
                    <h4 class="item_1">ISO 9001:2015</h4>
                    <p><?php echo $lang['Certificación de Gestión de Calidad']?></p>
                  </div>
                  <img src="/img/iso9001intera.svg" alt="ISO 9001:2015" class=" img-fluid">
                  
                      
                </a>
                </span>  
              </div>
            
            
              <div class="grid-item"><span class="mask-fadein notViewed animBlock item_2" data-position="in">
                <a href="#" class="cert">
                  <div class="cert-text">
                    <h4 class="item_1">AS9100D</h4>
                    <p><?php echo $lang['Certificación de Calidad Aeroespacial']?></p>
                  </div>
                  <img src="/img/as9100D.svg" alt="AS9100D" class=" img-fluid">
                  
                </a></span>
              </div>
            
            
              <div class="grid-item"><span class="mask-fadein notViewed animBlock item_3" data-position="in">
                <a href="#" class="cert">
                  <div class="cert-text">
                    <h4 class="item_1"><?php echo $lang['Círculo de Proveedores']?></h4>
                    <p><?php echo $lang['Distintivo Plata']?></p>
                  </div>
                  <img src="/img/cert-circulo-proveedores.svg" alt="Círculo de Proveedores" class=" img-fluid">
                  <a href="/img/Solinda__Circulo-de-Proveedores-Certification.tiff" target="_blank"><?php echo $lang['Ver Certificado']?><i class="arrow right"></i></a>
                </a> </span>
              </div>
             
           
              

            </div>
          </span> 
        </div>
      </div> -->

      <section id="certifications">
        <div class="container">
          <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Business Areas']?></h6></span>
          <h3 class="item_2">
          <?php echo $lang['Nuestras ']?><span class="highlight"><?php echo $lang['Divisones Empresariales']?></span>
          </h3>
        </div> 
      </section>

      <section id="business_areas" class="margin-twenty-bottom">
        <div class="container_">
          <div class="ba_slider outside-box-right">
            <!-- start Business Areas Slider -->
            <div class="swiper baSwiper swiper-container">
              <div class="swiper-wrapper">
                <!-- start interactive banner item -->
                <div class="swiper-slide interactive-banners-style-07 text-left">
                  <div class="interactive-banners-box bg-dark border-radius-6px">
                    <div class="interactive-banners-box-image">
                      <img src="/img/business-areas/SOLINDA_business-areas-aerospace.jpg" alt=""/>
                      <div class="overlay-bg bg-gradient-dark-transparent-horizontal"></div>
                    </div>
                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                      <div class="accent-font uppercase text-white margin-10px-bottom title-extra-small">Aeroespacial</div>
                      <div class="main-font text-extra-medium text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">Descripción</div>
                      <div class="ba_slide__cert-logo flex">
                        <img src="/img/solinda-cert2023-01.svg" alt="">
                        <img src="/img/solinda-cert2023-03.svg" alt="">
                        <img src="/img/solinda-cert2023-04.svg" alt="">
                      </div>
                      <a href="/business_area_aeroespacial.php" class="btn btn__style01 btn-fancy btn-very-small margin-15px-top">Saber Más</a>
                    </div>
                  </div>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="swiper-slide interactive-banners-style-07 text-left">
                  <div class="interactive-banners-box bg-dark border-radius-6px">
                    <div class="interactive-banners-box-image">
                      <img src="/img/business-areas/SOLINDA_business-areas-automotive.jpg" alt=""/>
                      <div class="overlay-bg bg-gradient-dark-transparent-horizontal"></div>
                    </div>
                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                      <div class="accent-font uppercase text-white margin-10px-bottom title-extra-small">Automotriz</div>
                      <div class="main-font text-extra-medium text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">Descripción</div>
                      <div class="ba_slide__cert-logo flex">
                        <img src="/img/solinda-cert2023-03.svg" alt="">
                        <img src="/img/solinda-cert2023-02.svg" alt="">
                        <img src="/img/solinda-cert2023-04.svg" alt="">
                      </div>
                      <a href="/business_area_automotriz.php" class="btn btn__style01 btn-fancy btn-very-small   margin-15px-top">Saber Más</a>
                    </div>
                  </div>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="swiper-slide interactive-banners-style-07 text-left">
                  <div class="interactive-banners-box bg-dark border-radius-6px">
                    <div class="interactive-banners-box-image">
                      <img src="/img/business-areas/SOLINDA_business-areas-metalsheet.jpg" alt=""/>
                      <div class="overlay-bg bg-gradient-dark-transparent-horizontal"></div>
                    </div>
                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                      <div class="accent-font uppercase text-white margin-10px-bottom title-extra-small">Sheet Metal</div>
                      <div class="main-font text-extra-medium text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">Descripción</div>
                      <div class="ba_slide__cert-logo flex">
                        <img src="/img/solinda-cert2023-01.svg" alt="">
                        <img src="/img/solinda-cert2023-03.svg" alt="">
                        <img src="/img/solinda-cert2023-04.svg" alt="">
                      </div>
                      <a href="/business_area_metal_sheet.php" class="btn btn__style01 btn-fancy btn-very-small   margin-15px-top">Saber Más</a>
                    </div>
                  </div>
                </div>
                <!-- end interactive banner item -->
                <!-- start interactive banner item -->
                <div class="swiper-slide interactive-banners-style-07 text-left">
                  <div class="interactive-banners-box bg-dark border-radius-6px">
                    <div class="interactive-banners-box-image">
                      <img src="/img/business-areas/SOLINDA_business-areas-racks.jpg" alt=""/>
                      <div class="overlay-bg bg-gradient-dark-transparent-horizontal"></div>
                    </div>
                    <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                      <div class="accent-font uppercase text-white margin-10px-bottom title-extra-small">Racks</div>
                      <div class="main-font text-extra-medium text-white margin-15px-bottom w-60 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">Descripción</div>
                      <div class="ba_slide__cert-logo flex">
                        <img src="/img/solinda-cert2023-01.svg" alt="">
                        <img src="/img/solinda-cert2023-03.svg" alt="">
                        <img src="/img/solinda-cert2023-04.svg" alt="">
                      </div>
                      <a href="/business_area_racks.php" class="btn btn__style01 btn-fancy btn-very-small   margin-15px-top">Saber Más</a>
                    </div>
                  </div>
                </div>
                <!-- end interactive banner item -->
              </div>
            </div>
            <!-- end Business Areas Slider -->
          </div>
        </div>
      </section>
      
      <div class="slider">
        <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><img src="/img/Solinda-img-01.jpg" alt="Solinda" class="img-fluid"></div>
          <div class="swiper-slide"><img src="/img/Solinda-img-02.jpg" alt="Solinda" class="img-fluid"></div>
          <div class="swiper-slide"><img src="/img/Solinda-img-03.jpg" alt="Solinda" class="img-fluid"></div>
          <div class="swiper-slide"><img src="/img/Solinda-img-04.jpg" alt="Solinda" class="img-fluid"></div>
          <div class="swiper-slide"><img src="/img/Solinda-img-05.jpg" alt="Solinda" class="img-fluid"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        </div>
      </div>

      <section id="stats">
        <div class="container">
          <div class="column_container">
            <div class="row">
              <div class="col col-md-6">  
                <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Resultados en N&uacutemeros']?></h6></span>
                <h3 class="item_2">
                <?php echo $lang['Sobrepasando expectativas, Solinda es sinónimo de ']?><span class="highlight"><?php echo $lang['calidad']?></span>
                </h3>
                <p class="item_2"><?php echo $lang['En Solinda estamos siempre un paso adelante, listos para cualquier reto. Somos empresa líder en nuestro ramo y tenemos presencia global ya que todos los días trabajamos duro por entregar resultados que sobrepasen las expectativas.']?></p>
              </div>
              <div class="col col-md-5 col-md-offset-1 ">
                <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                  <div class="home-stats">
                    <ul>
                      <li>
                        <span class="number" data-count="10">9</span>
                        <span class="label-stat"><?php echo $lang['A&ntildeos como Empresa']?></span>
                      </li>
                      <li>
                        <span class="number" data-count="4.4">4.4M</span>
                        <span class="label-stat"><?php echo $lang['USD Ventas Anuales']?></span>
                      </li>
                      <li>
                        <span class="number" data-count="4">4K</span>
                        <span class="label-stat"><?php echo $lang['M2 de Instalaciones']?></span>
                      </li>
                      <li>
                        <span class="number" data-count="35">+35</span>
                        <span class="label-stat"><?php echo $lang['Máquinas propias']?></span>
                      </li>
                    </ul>
                  </div>
                </span>
              </div>
            </div> 
          </div> 
        </div> 
      </section>

      <section id="services_hover">
        <div class="front-industries">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 slide-block">
                <div class="block-inner red-border-left primary" delay-index="2">
                  <div class="industries-text">
                    <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Servicios']?></h6></span>
                    <h3 class="item_2"><?php echo $lang['Servicio completo para la ']?><span class="highlight"><?php echo $lang['industria']?></span></h3>
                    <p class="mask-fadein item_3 notViewed animBlock" data-position="in"><?php echo $lang['Tenemos capacidad para dar soluciones confiables a nuestros clientes de manera integral. Por esto y más nos hemos convertido en un referente de innovación y liderazgo, siempre listos para estar a la vanguardia.']?></p>
                  </div>
                  <div class="cta_container mask-fadein item_3 notViewed animBlock" data-position="in">
                    <a class="cta2" href="servicios.php" title="discover" target="_self">
                      <span><?php echo $lang['Saber más']?></span>
                      <i class="arrow right"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-lg-offset-2">
                  <nav class="nav-industries">
                    <ul> 
                      <li> 
                        <a href="servicio_automatizacion.php" class="touch-hover"> <span class="num">01. </span><?php echo $lang['Automatización']?></a> 
                        <div class="img img-w-4x-grid img-w-grid-right lazy-loaded" data-lazy-src="url(/img/solinda_service_automatizacion_1800.jpg" data-lazy-src-mob="url(/img/solinda_service_automatizacion_1200.jpg" style="background-image: url(/img/solinda_service_automatizacion_1800.jpg);">
                        </div>
                      </li>
                      <li> 
                        <a href="servicio_dispositivos-herramientas.php" class="touch-hover">  <span class="num">02. </span><?php echo $lang['Dispositivos']?></a> 
                        <div class="img img-w-4x-grid img-w-grid-right lazy-loaded" data-lazy-src="/img/solinda_service_dispositivos_1800.jpg" data-lazy-src-mob="/img/solinda_service_dispositivos_1200.jpg" style="background-image: url(/img/solinda_service_dispositivos_1800.jpg);"></div>
                      </li>
                      <li> 
                        <a href="servicio_refaccionamiento.php" class="touch-hover">  <span class="num">03. </span><?php echo $lang['Refaccionamiento']?></a> 
                        <div class="img img-w-4x-grid img-w-grid-right lazy-loaded" data-lazy-src="/img/solinda_service_refaccionamiento_1800.jpg" data-lazy-src-mob="/img/solinda_service_refaccionamiento_1200.jpg" style="background-image: url(/img/solinda_service_refaccionamiento_1800.jpg);"></div>
                      </li>
                      <li> 
                        <a href="servicio_racks.php" class="touch-hover"><span class="num">04. </span><?php echo $lang['Racks']?></a>
                        <div class="img img-w-4x-grid img-w-grid-right lazy-loaded" data-lazy-src="/img/solinda_service_racks_1800.jpg" data-lazy-src-mob="/img/solinda_service_racks_1200.jpg" style="background-image: url(/img/solinda_service_racks_1800.jpg);"></div>
                        </li>
                      <li> 
                        <a href="servicio_metrologia-ingenieria-inversa.php" class="touch-hover"><span class="num">05. </span><?php echo $lang['Metrología']?></a> 
                        <div class="img img-w-4x-grid img-w-grid-right lazy-loaded" data-lazy-src="/img/solinda_service_metrologia_1800.jpg" data-lazy-src-mob="/img/solinda_service_metrologia_1200.jpg" style="background-image: url(/img/solinda_service_metrologia_1800.jpg);"></div>
                      </li>
                    </ul>
                  </nav>
              </div>
            </div>
          </div>
        </div> 
      </section>

      <section id="projects">
        <div class="container">
          <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Proyectos']?></h6></span>
          <h3 class="item_2">
            <?php echo $lang['Nuestra experiencia respalda ']?></br><?php echo $lang[' nuestros ']?><span class="highlight"><?php echo $lang['resultados']?></span>
          </h3>
          <div class="column_container">
            <div class="row">
              <ul class="projects-list">
                <li class="card">
                  <a class="card-image .is-loaded" href="/proyecto_cabina-inspeccion-3d.php" target="_blank" style="background-image: url(/img/projects/solinda_cabina-3d-100.jpg);" data-image-full="/img/projects/solinda_cabina-3d-500.jpg">
                    <img src="url(/img/projects/solinda_cabina-3d-100.jpg)" alt="Solinda — Cabina de Inspección 3D" />
                  </a>
                  <a class="card-description" href="/proyecto_cabina-inspeccion-3d.php" target="_blank">
                    <h6 class="client">2021</h6>
                    <span class="project_title"><?php echo $lang['Cabina de Inspección 3D']?></span>
                  </a>
                  <div class="cta_container">
                    <a class="cta2" href="/proyecto_cabina-inspeccion-3d.php" title="Ver Proyecto" target="_self">
                      <span><?php echo $lang['Ver Proyecto']?></span>
                      <i class="arrow right"></i>
                    </a>
                  </div>
                </li>

                <li class="card">
                  <a class="card-image .is-loaded" href="/proyecto_conveyor-llantas-rines-empresa-japonesa.php" target="_blank" style="background-image: url(/img/projects/solinda_conveyor-llantas-rines-empresa-japonesa-100.jpg);" data-image-full="/img/projects/solinda_conveyor-llantas-rines-empresa-japonesa-500.jpg">
                    <img src="url(/img/projects/solinda_conveyor-llantas-rines-empresa-japonesa-100.jpg)" alt="Solinda — Conveyor de Llantas y Rines para Empresa Japonesa" />
                  </a>
                  <a class="card-description" href="proyecto_conveyor-llantas-rines-empresa-japonesa.php" target="_blank">
                    <h6 class="client">2021</h6>
                    <span class="project_title"><?php echo $lang['Conveyor de Llantas y Rines para Empresa Japonesa']?></span>
                  </a>
                  <div class="cta_container">
                    <a class="cta2" href="/proyecto_conveyor-llantas-rines-empresa-japonesa.php" title="Ver Proyecto" target="_self">
                      <span><?php echo $lang['Ver Proyecto']?></span>
                      <i class="arrow right"></i>
                    </a>
                  </div>
                </li>

                <li class="card">
                  <a class="card-image .is-loaded" href="/proyecto_ensamble-clip-corte.php" target="_blank" style="background-image: url(/img/projects/solinda_ensamble-clip-corte-colada-100.jpg);" data-image-full="/img/projects/solinda_ensamble-clip-corte-colada-500.jpg">
                    <img src="url(/img/projects/solinda_ensamble-clip-corte-colada-100)" alt="Solinda — Ensamble de Clips y Corte de Colada" />
                  </a>
                  <a class="card-description" href="/proyecto_ensamble-clip-corte.php" target="_blank">
                    <h6 class="client">2021</h6>
                    <span class="project_title"><?php echo $lang['Ensamble de Clips y Corte de Colada para Empresa Americana']?></span>
                  </a>
                  <div class="cta_container">
                    <a class="cta2" href="proyecto_ensamble-clip-corte.php" title="Ver Proyecto" target="_self">
                      <span><?php echo $lang['Ver Proyecto']?></span>
                      <i class="arrow right"></i>
                    </a>
                  </div>
                </li>
                <li class="card">
                  <a class="card-image .is-loaded" href="/proyecto_transportador-cabeza-motor.php" target="_blank" style="background-image: url(/img/projects/solinda_transportador-cabeza-motor-100.jpg);" data-image-full="/img/projects/solinda_transportador-cabeza-motor-500.jpg"">
                    <img src="url(/img/projects/solinda_transportador-cabeza-motor-100.jpg)" alt="Solinda — Transportador de Cabeza de Motor fuera de Horno" />
                  </a>
                  <a class="card-description" href="/proyecto_transportador-cabeza-motor.php" target="_blank">
                    <h6 class="client">2021</h6>
                    <span class="project_title"><?php echo $lang['Transportador de Cabeza de Motor Fuera de Horno']?></span>
                  </a>
                  <div class="cta_container">
                    <a class="cta2" href="/proyecto_transportador-cabeza-motor.php" title="Ver Proyecto" target="_self">
                      <span><?php echo $lang['Ver Proyecto']?></span>
                      <i class="arrow right"></i>
                    </a>
                  </div>
                </li>
                 
              </ul>
            </div>
          </div>
        </div> 
      </section>

      <section id="machinery">
        <div class="container">
          <div class="column_container">
            <div class="row">
              <div class="col col-md-6">  
                <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Maquinaria']?></h6></span>
                <h3 class="item_2">
                  <?php echo $lang['Trabajamos con Maquinaria ']?></br><span class="highlight"> <?php echo $lang['Cutting-Edge']?> </span>
                </h3>
                <p class="mask-fadein item_3 notViewed animBlock" data-position="in"><?php echo $lang['En nuestra planta, contamos con máquinas de última generación y alta precisión tanto en nuestro departamento de Refaccionado como en nuestra área de Metrología.']?></p>
              </div>
              <div class="col col-md-5 col-md-offset-1 ">
                <span class="mask-fadein item_3 notViewed animBlock" data-position="in">
                  <div class="cta_container">
                  <a class="cta" href="nosotros.php#machinery_about" title="discover" target="_self">
                    <span><?php echo $lang['Saber Más']?></span>
                    <i class="arrow right"></i>
                  </a>
                </div>
                </span>
              </div>
            </div>
          </div>
          <div class="column_container">
            <div class="col machinery-img mask-fadein notViewed animBlock item_4" data-position="in"">
              <img src="/img/home__img-machinery.jpg" alt="">
            </div>
          </div> 
        </div> 
      </section>

      <section id="clients">
        <div class="container">
          <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Clientes']?></h6></span>
          <h3 class="item_2">
            <?php echo $lang['Estas Empresas ']?></br><?php echo $lang['Confían en ']?><span class="highlight"><?php echo $lang['Solinda']?></span>
          </h3>
        </div>
      </section>

      <div class="c-logo-grid">
        <div class="container">
          <div class="grid">
            <div class="shot ">
              <span class="mask-fadein notViewed animBlock item_1" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/flexngate.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_2" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/nissan.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_3" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/antolin.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_4" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/compas.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_5" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/jatco.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_6" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/mazda.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_7" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/unipres.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_8" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/honda.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_9" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/eaton.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_10" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/donaldson.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_11" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/oshkosh.svg" alt=""></div>
              </span>
            </div>
            <div class="shot">
              <span class="mask-fadein notViewed animBlock item_12" data-position="in">
                <div class="clients-logo-square"><img class="img-fluid" src="img/clients-logo/denso.svg" alt=""></div>
              </span>
            </div>
          </div>
        </div>  
      </div>

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
              <br>Jesús María, Ags. México.
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

    </div>

    <span class="notViewed animBlock" data-position="left" style="visibility:hidden;position:absolute;bottom:-50px;"></span>
  </div>

  
  <script src="js/jquery.waypoints.min.js"></script>
  <script type="text/javascript" src="js/nav.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/scrollview.js"></script>
  <script type="text/javascript" src="js/projects-lazyload.js"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".baSwiper", {
      slidesPerView: 1,
      loop: true,
      spaceBetween: 30,
      centeredSlides: false,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      keyboard: { 
        enabled: true, 
        onlyInViewport: true,
      },
      breakpoints: {
        768:{
          slidesPerView: 2,
        },
      },
    });
  </script>

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