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

  <link rel="canonical" href="http://www.solinda.com.mx/contacto.php?lang=es">
  <link rel="alternate" hreflang="en" href="http://www.solinda.com.mx/contacto.php?lang=en">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style_home.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="quform/themes/light/light.css" />


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
        
      <div id="contact-page">    
        <section id="stats">
          <div class="container">
            <div class="column_container">
              <div class="row">
                <div class="col col-md-6">  
                  <span class="animate fadeInLeft delay-400"><h6 class=""><span class="dash">—</span><?php echo $lang['Contacto']?></h6></span>
                  <h2 class=" hero-title animate fadeInLeft delay-400">
                  <?php echo $lang['Contáctanos para tu próximo ']?><span class="highlight"><?php echo $lang['proyecto']?></span>
                  </h2>
                  <p class="animate fadeInLeft delay-600"><?php echo $lang['Hablemos de tu próximo proyecto. Estaremos felices de atenderte y revisar las soluciones que podemos darte.']?></p>
                </div>
                <div class="col col-md-5 col-md-offset-1 ">
                  <span class="animate fadeInLeft delay-800">
                    <div>
                      <img src="/img/contact/solinda_c_001.jpg" alt="" class="img-contact img-fluid">
                    </div>
                  </span>
                </div>
              </div> 
          </div>
        </section>

        <div id="services_">
          <div class="container">
            <div class="column_container">
              <div class="row">
                <div class="col col-md-4">
                  <span class="mask notViewed animBlock" data-position="up"><h4 class="item_1"><?php echo $lang['Teléfono']?></h4></span>
                  <span class="mask-fadein notViewed animBlock item_4" data-position="in">
                    <p>(+52) 449 153 02 66 </br> ext. 111</p>
                  </span>
                </div>
                <div class="col col-md-4">
                  <span class="mask notViewed animBlock" data-position="up"><h4 class="item_2">Mail</h4></span>
                  <span class="mask-fadein notViewed animBlock item_5" data-position="in">
                    <p>po@solinda.com.mx</p>
                  </span>
                </div>
                <div class="col col-md-4">
                  <span class="mask notViewed animBlock" data-position="up"><h4 class="item_3"><?php echo $lang['Contacto']?></h4></span>
                  <span class="mask-fadein notViewed animBlock item_6" data-position="in">
                    <p class="contact__position">General Manager</p>
                    <p>Ing. Víctor González Cervantes</p>
                    </br>
                    <p class="contact__person-mail"><a href="#">victor.gonzalez@solinda.com.mx</a></p>
                  </span>
                  </br>
                  <span class="mask-fadein notViewed animBlock item_6 marg-to" data-position="in">
                    <p class="contact__position">Production Manager</p>
                    <p>Ing. Christian González</p>
                    </br>
                    <p class="contact__person-mail"><a href="#">christian.gonzalez@solinda.com.mx</a></p>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="services_">
          <div class="container marg-bott">
            <div class="column_container">
              <div class="row">
                <div class="col col-md-4">
                  <span class="mask notViewed animBlock" data-position="up"><h4 class="item_1"><?php echo $lang['Ubicación']?></h4></span>
                  <span class="mask-fadein notViewed animBlock item_4" data-position="in">
                    <p><?php echo $lang['Calle Málaga #202 Esq. San Emilion']?></br>
                      Arboledas de Paso Blanco</br>
                      Jesús María, Ags. México</br>
                      CP 20907</p>
                  </span>
                </div>
                <div class="col col-md-4">
                  <span class="mask-fadein notViewed animBlock item_5" data-position="in">
                    <div class="cta_container">
                      <a class="cta2" href="https://www.google.com/maps/place/Solinda+SA+de+CV/@21.9609377,-102.2984698,15z/data=!4m2!3m1!1s0x0:0x7a56ea6eabb29403?sa=X&ved=2ahUKEwiVn83Wt_3yAhXRMX0KHf6IBWEQ_BJ6BAhXEAU" title="discover" target="_blank">
                        <span><?php echo $lang['Ubicarnos en Maps']?></span>
                        <i class="arrow right"></i>
                      </a>
                    </div>
                  </span>
                </div>
                <div class="col col-md-4">
                  <span class="mask notViewed animBlock" data-position="up"><h4 class="item_3">Let's Connect</h4></span>
                  <span class="mask-fadein notViewed animBlock item_6" data-position="in">
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
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section id="formulario_contacto">
          <div class="container">

            <div class="column_container">
              <div class="row">
                <div class="col col-md-6">  
                  <span class="mask notViewed animBlock item_1 label-line" data-position="up"><h6 class=""><span class="dash">—</span><?php echo $lang['Enviarnos Mensaje']?></h6></span>
                  <h3 class="item_2">
                  <?php echo $lang['Quedemos en ']?><span class="highlight"><?php echo $lang['Contacto']?></span>
                  </h3>
                  <p class="item_2"><?php echo $lang['Puedes llenar el formulario para mandarnos un correo. Un miembro de nuestro equipo se pondrá en contacto lo antes posible.']?></p>
                </div>
              </div> 
          
              <div class="row">
                <div class="contact-form__wrapper">
                <!--Start Formulario de Contacto-->
                <div class="quform-outer ">
                  <form class="quform" action="quform/process.php" method="post" enctype="multipart/form-data">
          
                      <div class="quform-inner">
                          <div class="quform-elements">
          
                              <!-- Begin 2 column Group -->
                              <div class="quform-group-wrap quform-group-style-plain quform-group-alignment-left">
                                  <div class="quform-group-elements">
          
                                      <div class="quform-group-row quform-group-row-2cols">
          
                                          <!-- Begin Text input element -->
                                          <div class="quform-element quform-element-text">
                                              <div class="quform-spacer">
                                                  <label for="name"><?php echo $lang['Nombre Completo']?><span class="quform-required">*</span></label>
                                                  <div class="quform-input">
                                                      <input id="name" type="text" name="name" />
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- End Text input element -->
          
                                          <!-- Begin Text input element -->
                                          <div class="quform-element quform-element-text">
                                              <div class="quform-spacer">
                                                  <label for="email">Mail<span class="quform-required">*</span></label>
                                                  <div class="quform-input">
                                                      <input id="email" type="text" name="email" />
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- End Text input element -->
          
                                      </div>
          
                                  </div>
                              </div>
                              <!-- End 2 column Group -->

                              <!-- Begin 2 column Group 2-->
                              <div class="quform-group-wrap quform-group-style-plain quform-group-alignment-left">
                                <div class="quform-group-elements">
        
                                    <div class="quform-group-row quform-group-row-2cols">
        
                                        <!-- Begin Text input element -->
                                        <div class="quform-element quform-element-text">
                                            <div class="quform-spacer">
                                                <label for="phone"><?php echo $lang['Celular']?><span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input id="phone" type="text" name="phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->
        
                                        <!-- Begin Text input element -->
                                        <div class="quform-element quform-element-text">
                                            <div class="quform-spacer">
                                                <label for="title"><?php echo $lang['Asunto']?><span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input id="title" type="text" name="title" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->
        
                                    </div>
        
                                </div>
                              </div>
                              <!-- End 2 column Group 2 -->
          
                              <!-- Begin Textarea element -->
                              <div class="quform-element quform-element-textarea quform-huge">
                                  <div class="quform-spacer">
                                      <label for="message"><?php echo $lang['Mensaje']?> <span class="quform-required">*</span></label>
                                      <div class="quform-input">
                                          <textarea id="message" name="message" class="quform-textarea"></textarea>
                                      </div>
                                  </div>
                              </div>
                              <!-- End Textarea element -->

                              <!-- Begin Upload element -->
                              <div class="quform-element quform-element-file">
                                <div class="quform-spacer">
                                    <label for="upload"><?php echo $lang['Archivo']?> </label>
                                    <div class="quform-input">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <input class="upload-element" id="upload" type="file" name="upload" />
                                        <p class="quform-description"><?php echo $lang['Extensiones de archivo permitidas:']?> .jpg, .jpeg, .png, .docx, .xlsx, .pptx, .pdf.  <?php echo $lang['Tamaño máximo']?> 10MB.</p>
                                    </div>
                                </div>
                              </div>
                              <!-- End Upload element -->

                              <!-- Begin reCAPTCHA v2 element -->
                              <div class="quform-element quform-element-recaptcha">
                                <div class="quform-spacer">
                                    <label><?php echo $lang['Captcha']?> <span class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <div class="g-recaptcha" data-sitekey="6LeiLq8cAAAAADMYqFCUoTbpqTdOi3wKGxy9vtzk"></div>
                                        <noscript>
                                          <div>
                                            <div style="width: 302px; height: 422px; position: relative;">
                                              <div style="width: 302px; height: 422px; position: absolute;">
                                                <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LeiLq8cAAAAADMYqFCUoTbpqTdOi3wKGxy9vtzk"
                                                        frameborder="0" scrolling="no"
                                                        style="width: 302px; height:422px; border-style: none;">
                                                </iframe>
                                              </div>
                                            </div>
                                            <div style="width: 300px; height: 60px; border-style: none;
                                                          bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                                                          background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                                              <textarea name="g-recaptcha-response"
                                                          class="g-recaptcha-response"
                                                          style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                                                                  margin: 10px 25px; padding: 0px; resize: none;"></textarea>
                                            </div>
                                          </div>
                                        </noscript>
                                    </div>
                                </div>
                              </div>
                              <!-- End reCAPTCHA v2 element -->
            
                              <!-- Begin Submit button -->
                              <div class="quform-submit">
                                  <div class="quform-submit-inner">
                                      <button type="submit"><span><em><?php echo $lang['Enviar Mensaje']?><i class="arrow right"></i></em></span></button>
                                  </div>
                                  <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                              </div>
                              <!-- End Submit button -->
                        </div>
                    </div>
                  </form>
                </div>
                <!--End Formulario de Contacto-->
                </div>
              </div>
            
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
  
  <!--<script type="text/javascript" src="quform/js/jquery-3.5.1.min.js"></script>-->
  <script type="text/javascript" src="quform/js/plugins.js"></script>
  <script type="text/javascript" src="quform/js/scripts.js"></script>
  <script type="text/javascript" src="/js/slider.js"></script>

  <!--Google ReCAPTCHA Script-->
  <script>
    window.QuformRecaptchaLoaded = function () {
        if (window.grecaptcha && window.jQuery) {
            jQuery('.g-recaptcha').each(function () {
                var $recaptcha = jQuery(this);

                if ($recaptcha.is(':empty')) {
                    $recaptcha.data('recaptcha-id', grecaptcha.render($recaptcha[0]));
                }
            });
        }
    };
  </script>
  <script src="https://www.google.com/recaptcha/api.js?onload=QuformRecaptchaLoaded&render=explicit" async defer></script>
  <!--End Google ReCAPTCHA-->
  
  

  
</body>
</html>