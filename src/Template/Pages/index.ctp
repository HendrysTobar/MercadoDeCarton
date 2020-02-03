<?php
$this->layout = false;
$cakeDescription = 'Mercado de Cartón';
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
        <?= $cakeDescription ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <!-- 
    //////////////////////////////////////////////////////

    FREE TEMPLATE 
    DESIGNED & DEVELOPED by free-template.co
      
    Website:    https://free-template.co
    Facebook:   https://www.facebook.com/FreeDashTemplate.co
    Twitter:    https://twitter.com/Free_Templateco

    //////////////////////////////////////////////////////
    -->

    <link rel="shortcut icon" href="ftco-32x32.png">
    
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Cargando...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="./" class="text-uppercase">Mercado de Cartón</a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#user-section" class="nav-link">Usuarios</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">                  
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section custom-owl-carousel" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mr-auto" data-aos="fade-up">

            <div class="owl-carousel slide-one-item-alt-text">
              <div class="slide-text">
                <h1>Compra y Venta de Cartas de Magic:The Gathering</h1>
                <p class="mb-5">En Mercado de Cartón tendrás acceso a compradores y vendedores de toda latinoamérica. Publica tus cartas, busca en nuestra base de datos lo que necesitas</p>
                <p><a href="/Users/login" class="btn btn-outline-light py-3 px-5">Comienza</a></p>
              </div>              
            </div>

          </div>
          <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">
                        
            <div class="owl-carousel slide-one-item-alt">
              <img src="images/img_1.jpg" alt="" class="img-fluid">
              <img src="images/img_2.jpg" alt="" class="img-fluid">
              <img src="images/img_3.jpg" alt="" class="img-fluid">
              <img src="images/img_4.jpg" alt="" class="img-fluid">
            </div>

            <div class="owl-custom-direction">
              <a href="#" class="custom-prev"><span class="icon-keyboard_arrow_left"></span></a>
              <a href="#" class="custom-next"><span class="icon-keyboard_arrow_right"></span></a>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section section-1">
      
    
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mr-auto mb-5"  data-aos="fade-up">
            <div class="mb-5">
              <h2 class="section-title">¿No sabes dónde publicar tus cartas para vender y ganar dinero?</h2>
              <p>Con MercadoDeCarton.com tendrás la oportunidad de publicar tus cartas en un mercado latinoamericano.</p>
              <p class="mb-5"> Ya no volverás a tener cartas llenándose de polvo, busca y encuentra compradores y vendedores en tu idioma</p>

              <ul class="ul-check list-unstyled success">
                <li>Publica tus cartas</li>
                <li>Encuentra compradores</li>
                <li>Busca lo que necesitas</li>
              </ul>
            </div>            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-2" id="user-section" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Inscríbete Ahora</h2>
            <p>Aquí podrás inscribirte para acceder a nuestros servicios, publicar tus cartas y contactar con vendedores</p>
            <p><a href="<?= $this->Url->build(["controller" => "Users","action" => "add"])?>" class="btn btn-outline-dark py-3 px-5">Inscríbete</a></p>
          </div>
        </div>

      </div>
        



      
  
     
    <footer class="footer-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Acerca de Nosotros</h3>
            <p>Mercado de Cartón.com es una empresa de origen Colombiano, registrada ante la Cámara de Comercio del Cauca. Las marcas, logos y nombres usados en este sitio son propiedad de sus respectivos dueños. Mercao de Cartón utilza estos recursos como herraminenta publicitaria de un mercado secundario de cartas del Juego Magic: the Gathering</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section" class="smoothscroll">Home</a></li>
              <li><a href="#user-section" class="smoothscroll">Usuarios</a></li>              
              <li><a href="" class="smoothscroll">Ofrecer Cartas</a></li>
            </ul>
          </div>

          

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
          <small class="block">&copy; <script>document.write(new Date().getFullYear());</script> <strong>Expert</strong> One Page Free Template. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://free-template.co/" target="_blank">Free-Template.co</a></small> 
          </p>
            
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
    
  <!-- Google Ads -->
<style>.adsense_fixed{position:fixed;bottom:-10px;width:100%;z-index:999999999999}.adsense_content{width:720px;margin:0 auto;position:relative;background:#fff}.adsense_btn_close,.adsense_btn_info{font-size:12px;color:#fff;height:20px;width:20px;vertical-align:middle;text-align:center;background:#000;top:0;left: 0; margin-left:-20px;position:absolute;z-index:99999999;font-family:Georgia;cursor:pointer;line-height:18px}.adsense_btn_info{left:0;display:none;font-family:Georgia;font-style:italic}.adsense_btn_close{display:block;left:0}.adsense_info_content{display:none;width:260px;height:340px;position:absolute;top:-360px;left:-24px;background:rgba(255,255,255,.95);font-size:14px;padding:20px;font-family:Arial;border-radius:4px;-webkit-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);-moz-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);box-shadow:0 1px 26px -2px rgba(0,0,0,.3)}.adsense_info_content:after{content:'';position:absolute;left:25px;top:100%;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #fff;clear:both}.adsense_info_content #adsense_h3{color:#000;margin:0;font-size:18px!important;font-family:Arial!important;margin-bottom:20px!important}.adsense_info_content .adsense_p{color:#888;font-size:13px!important;line-height:20px;font-family:Arial!important;margin-bottom:20px!important}.adsense_fh5co-team{color:#000;font-style:italic}</style><div class=adsense_fixed><div class=adsense_content><span class=adsense_btn_close title="Hide Ads">x</span><script async src=//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js></script><ins class=adsbygoogle data-ad-client=ca-pub-9294834522530836 data-ad-slot=4203474109 style=display:inline-block;width:728px;height:90px></ins><script>(adsbygoogle=window.adsbygoogle||[]).push({})</script><script>$(function(){$(".adsense_btn_close").click(function(){$(this).closest(".adsense_fixed").css("display","none")}),$(".adsense_btn_info").click(function(){$(".adsense_info_content").is(":visible")?$(".adsense_info_content").css("display","none"):$(".adsense_info_content").css("display","block")})})</script></div></div>
<!-- END ads -->

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-109084231-1', 'auto');
  ga('send', 'pageview');
</script>
  </body>
</html>