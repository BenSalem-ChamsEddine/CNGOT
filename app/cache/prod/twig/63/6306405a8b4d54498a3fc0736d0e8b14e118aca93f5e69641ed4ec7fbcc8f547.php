<?php

/* CNGOTBundle:Default:mobile.html.twig */
class __TwigTemplate_fc065e9eed78f9608742db3d392a5496ce1ea1d5c0538848de62daccaf71c33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a355b3a28637d2ce190d0171bc40d9207c045f1b77f20c4dedae9e9b8fd7227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a355b3a28637d2ce190d0171bc40d9207c045f1b77f20c4dedae9e9b8fd7227->enter($__internal_8a355b3a28637d2ce190d0171bc40d9207c045f1b77f20c4dedae9e9b8fd7227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:Default:mobile.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<!-- Mirrored from demo.templateocean.com/premium/template/kane/layout-style-two/dark/image-bg/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 14:37:02 GMT -->
<head>
<meta charset=\"UTF-8\">
<meta name=\"description\" content=\"Responsive Bootstrap App Landing Page Template\">
<meta name=\"keywords\" content=\"Kane, Bootstrap, Landing page, Template, App, Mobile\">
<meta name=\"author\" content=\"Mizanur Rahman\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<!-- SITE TITLE -->
<title>CNGOT Mobile Apps</title>

<!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
<link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/img/cngot.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/img/cngot.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/img/cngot.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/img/cngot.png"), "html", null, true);
        echo "\">

<!-- =========================
     STYLESHEETS   
============================== -->
<!-- BOOTSTRAP -->
<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/bootstrap.min.css"), "html", null, true);
        echo "\">

<!-- FONT ICONS -->
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/assets/elegant-icons/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/assets/app-icons/styles.css"), "html", null, true);
        echo "\">
<!--[if lte IE 7]><script src=\"lte-ie7.js\"></script><![endif]-->

<!-- WEB FONTS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>

<!-- CAROUSEL AND LIGHTBOX -->
<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/owl.theme.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/nivo-lightbox.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/nivo_themes/default/default.css"), "html", null, true);
        echo "\">

<!-- ANIMATIONS -->
<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/animate.min.css"), "html", null, true);
        echo "\">

<!-- CUSTOM STYLESHEETS -->
<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/styles.css"), "html", null, true);
        echo "\">

<!-- COLORS | CURRENTLY USED DIFFERENTLY TO SWITCH FOR DEMO. IN ORIGINAL FILE ALL COLORS LINK IS COMMENTED EXCEPT BLUE -->
<link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/colors/blue.css"), "html", null, true);
        echo "\" title=\"blue\">
<link rel=\"alternate stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/colors/green.css"), "html", null, true);
        echo "\" title=\"green\">
<link rel=\"alternate stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/colors/orange.css"), "html", null, true);
        echo "\" title=\"orange\">
<link rel=\"alternate stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/colors/purple.css"), "html", null, true);
        echo "\" title=\"purple\">
<link rel=\"alternate stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/colors/slate.css"), "html", null, true);
        echo "\" title=\"slate\">
<link rel=\"alternate stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/colors/yellow.css"), "html", null, true);
        echo "\" title=\"yellow\">
<link rel=\"alternate stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/colors/red.css"), "html", null, true);
        echo "\" title=\"red\">
<link rel=\"alternate stylesheet\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/colors/blue-munsell.css"), "html", null, true);
        echo "\" title=\"blue-munsell\">

<!-- RESPONSIVE FIXES -->
<link rel=\"stylesheet\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/css/responsive.css"), "html", null, true);
        echo "\">

<!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
<link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/demo/demo.css"), "html", null, true);
        echo "\">


<!--[if lt IE 9]>
\t\t\t<script src=\"js/html5shiv.js\"></script>
\t\t\t<script src=\"js/respond.min.js\"></script>
<![endif]-->

<!-- JQUERY -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), "html", null, true);
        echo "\"></script>

</head>

<body>


<!-- =========================
     HEADER   
============================== -->
<header class=\"header\" data-stellar-background-ratio=\"0.5\" id=\"home\">

<!-- COLOR OVER IMAGE -->
<div class=\"color-overlay\">\t

\t
\t
\t<!-- CONTAINER -->
\t<div class=\"container\">
\t\t
\t\t

\t\t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/img/cngot.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t
\t\t<div class=\"row home-contents\">
\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t
\t\t\t\t<!-- HEADING AND BUTTONS -->
\t\t\t\t<div class=\"intro-section\">
\t\t\t\t\t
\t\t\t\t\t<!-- WELCOM MESSAGE -->
\t\t\t\t\t<h1 class=\"intro\">Cette application est destinée aux participants du 3 ème Congrès du CNGOT.</h1>
\t\t\t\t\t<h5>Android App available on Play Store</h5>
\t\t\t\t\t
\t\t\t\t\t<!-- BUTTON -->
\t\t\t\t\t<div class=\"buttons\" id=\"download-button\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.ionicframework.cngotaroussi2016&hl=fr\" class=\"btn btn-default btn-lg standard-button\"><i class=\"icon-app-download\"></i>Download ANDROID App</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"buttons\" id=\"download-button\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" class=\"btn byline btn-lg standard-button\"><i class=\"icon-app-download\"></i>Download IOS App</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- /END BUTTONS -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- /END HEADNING AND BUTTONS -->
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col-md-6 col-sm-6 hidden-xs\">
\t\t\t    
\t\t\t    <!-- PHONE IMAGE WILL BE HIDDEN IN TABLET PORTRAIT AND MOBILE-->
\t\t\t    <div class=\"phone-image\">
\t\t\t    <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/img/cngot 2016.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t    </div>
\t\t\t    
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<!-- /END ROW -->
\t\t
\t</div>
\t<!-- /END CONTAINER -->
</div>
<!-- /END COLOR OVERLAY -->
</header>
<!-- /END HEADER -->




<!-- =========================
     BRIEF RIGHT SECTION 
============================== -->

<div class=\"container\">
\t
\t<div class=\"row\">
\t\t
\t\t<!-- BRIEF -->
\t\t<div class=\"col-md-6 left-align wow fadeInLeft animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t\t
\t\t\t
\t\t\t
\t\t\t<!-- WELCOM MESSAGE -->
\t\t\t\t\t<h1 class=\"intro\">Cette application est destinée aux organisateurs du 3 ème Congrès du CNGOT.</h1>
\t\t\t\t\t</br>
\t\t\t\t\t<h5>Android App available on Play Store</h5>
\t\t\t\t\t</br>
\t\t\t
\t\t\t
\t\t\t\t\t<!-- BUTTON -->
\t\t\t\t\t<div class=\"buttons\" id=\"download-button\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=veloxit.cngotpro&hl=fr\" class=\"btn btn-default btn-lg standard-button\"><i class=\"icon-app-download\"></i>Download App</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<!-- /ENDBRIEF -->
\t\t
\t\t<!-- PHONES IMAGE -->
\t\t<div class=\"col-md-6 wow fadeInRight animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t\t<div class=\"phone-image\">
\t\t\t\t<img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/img/cngot pro.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t\t<!-- /END PHONES IMAGE -->
\t\t
\t</div>
\t<!-- /END ROW -->
\t
</div>
<!-- /END CONTAINER -->

<!-- /END SECTION -->


<!-- =========================
     BRIEF LEFT SECTION WITH VIDEO 
============================== -->
<section class=\"app-brief deep-dark-bg\" id=\"brief1\">

<div class=\"container\">
\t
\t<div class=\"row\">
\t\t
\t\t<!-- PHONES IMAGE -->
\t\t<div class=\"col-md-6 wow fadeInRight animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t\t<div class=\"video-container\">
\t\t\t\t
                <!--
\t\t\t\t<div class=\"video\">
\t\t\t\t\t
\t\t\t\t\t<iframe src=\"//player.vimeo.com/video/88902745?byline=0&amp;portrait=0&amp;color=ffffff\" width=\"600\" height=\"338\" frameborder=\"0\" allowfullscreen>
\t\t\t\t\t</iframe> 
\t\t\t\t</div>
\t\t\t\t-->
\t\t\t\t
\t\t\t\t<div class=\"video\">
\t\t\t\t\t<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/J0IF_chMGCk\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t\t
\t\t<!-- RIGHT SIDE WITH BRIEF -->
\t\t<div class=\"col-md-6 left-align wow fadeInLeft animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t\t
\t\t\t<!-- SECTION TITLE -->
\t\t\t<h2 class=\"white-text\">By VELOX IT</h2>
\t\t\t</br>
\t\t\t<div class=\"colored-line-left\">
\t\t\t</div>
\t\t\t\t\t\t</br>

\t\t\t
\t\t\t<h3>
\t\t\t\tThe source for computing and technology

\t\t\t</h3>
\t\t\t
\t\t\t
\t\t</div>
\t\t<!-- /END RIGHT BRIEF -->
\t\t
\t</div>
\t<!-- /END ROW -->
\t
</div>
<!-- /END CONTAINER -->

</section>
<!-- /END SECTION -->


<!-- /END TESTIMONIALS SECTION -->




<!-- =========================
     SCREENSHOTS
============================== -->
<section class=\"screenshots deep-dark-bg\" id=\"screenshot-section\">

<div class=\"color-overlay\">


<div class=\"container\">
\t
\t<!-- SECTION HEADER -->
\t<div class=\"section-header wow fadeIn animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t
\t\t<!-- SECTION TITLE -->
\t\t<h2 class=\"white-text\">Screenshots</h2>
\t\t
\t\t<div class=\"colored-line\">
\t\t</div>
\t\t<div class=\"section-description\">
\t\t\t© copyright 2016, Developed by Velox IT. Privacy Policy | Terms and Conditions
\t\t</div>
\t\t<div class=\"colored-line\">
\t\t</div>
\t\t
\t</div>
\t<!-- /END SECTION HEADER -->
\t
\t<div class=\"row wow bounceIn animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t
\t\t<div id=\"screenshots\" class=\"owl-carousel owl-theme\">
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/imgcapture.png"), "html", null, true);
        echo "\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/imgcapture.png"), "html", null, true);
        echo "\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/imgcapture.png"), "html", null, true);
        echo "\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/imgcapture.png"), "html", null, true);
        echo "\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/imgcapture.png"), "html", null, true);
        echo "\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/imgcapture.png"), "html", null, true);
        echo "\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/imgcapture.png"), "html", null, true);
        echo "\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/imgcapture8.png"), "html", null, true);
        echo "\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<!-- /END SCREENSHOTS -->
\t\t
\t</div>
\t<!-- /END ROW -->
\t
</div>
<!-- /END CONTAINER -->

</section>
<!-- /END SCREENSHOTS SECTION -->



<!-- /END PRICING TABLE SECTION -->




\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t


<!-- =========================
     FOOTER 
============================== -->
<footer>

\t<!-- COPYRIGHT TEXT -->
\t<p class=\"copyright\">
\t\t© copyright 2016, Developed by Velox IT. Privacy Policy | Terms and Conditions
\t</p>


<!-- /END CONTAINER -->
 
</footer>
<!-- /END FOOTER -->


<!-- =========================
     SCRIPTS 
============================== -->

<script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/jquery.localScroll.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/simple-expand.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/retina-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/jquery.nav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/matchMedia.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/js/custom.js"), "html", null, true);
        echo "\"></script>

<!-- =========================================================
     STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
============================================================== -->
<script type=\"text/javascript\" src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/demo/styleswitcher.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/mobile-app/demo/demo.js"), "html", null, true);
        echo "\"></script>


</div>


</body>

<!-- Mirrored from demo.templateocean.com/premium/template/kane/layout-style-two/dark/image-bg/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 14:37:31 GMT -->
</html>";
        
        $__internal_8a355b3a28637d2ce190d0171bc40d9207c045f1b77f20c4dedae9e9b8fd7227->leave($__internal_8a355b3a28637d2ce190d0171bc40d9207c045f1b77f20c4dedae9e9b8fd7227_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:Default:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 389,  561 => 388,  553 => 383,  549 => 382,  545 => 381,  541 => 380,  537 => 379,  533 => 378,  529 => 377,  525 => 376,  521 => 375,  517 => 374,  513 => 373,  509 => 372,  505 => 371,  501 => 370,  497 => 369,  445 => 320,  438 => 316,  431 => 312,  424 => 308,  417 => 304,  410 => 300,  403 => 296,  396 => 292,  282 => 181,  228 => 130,  189 => 94,  164 => 72,  152 => 63,  146 => 60,  140 => 57,  136 => 56,  132 => 55,  128 => 54,  124 => 53,  120 => 52,  116 => 51,  112 => 50,  106 => 47,  100 => 44,  94 => 41,  90 => 40,  86 => 39,  82 => 38,  72 => 31,  68 => 30,  62 => 27,  53 => 21,  49 => 20,  45 => 19,  41 => 18,  22 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">

<!-- Mirrored from demo.templateocean.com/premium/template/kane/layout-style-two/dark/image-bg/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 14:37:02 GMT -->
<head>
<meta charset=\"UTF-8\">
<meta name=\"description\" content=\"Responsive Bootstrap App Landing Page Template\">
<meta name=\"keywords\" content=\"Kane, Bootstrap, Landing page, Template, App, Mobile\">
<meta name=\"author\" content=\"Mizanur Rahman\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<!-- SITE TITLE -->
<title>CNGOT Mobile Apps</title>

<!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
<link rel=\"icon\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/img/cngot.png')}}\">
<link rel=\"apple-touch-icon\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/img/cngot.png')}}\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/img/cngot.png')}}\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/img/cngot.png')}}\">

<!-- =========================
     STYLESHEETS   
============================== -->
<!-- BOOTSTRAP -->
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/bootstrap.min.css')}}\">

<!-- FONT ICONS -->
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/assets/elegant-icons/style.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/assets/app-icons/styles.css')}}\">
<!--[if lte IE 7]><script src=\"lte-ie7.js\"></script><![endif]-->

<!-- WEB FONTS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>

<!-- CAROUSEL AND LIGHTBOX -->
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/owl.theme.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/owl.carousel.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/nivo-lightbox.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/nivo_themes/default/default.css')}}\">

<!-- ANIMATIONS -->
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/animate.min.css')}}\">

<!-- CUSTOM STYLESHEETS -->
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/styles.css')}}\">

<!-- COLORS | CURRENTLY USED DIFFERENTLY TO SWITCH FOR DEMO. IN ORIGINAL FILE ALL COLORS LINK IS COMMENTED EXCEPT BLUE -->
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/colors/blue.css')}}\" title=\"blue\">
<link rel=\"alternate stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/colors/green.css')}}\" title=\"green\">
<link rel=\"alternate stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/colors/orange.css')}}\" title=\"orange\">
<link rel=\"alternate stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/colors/purple.css')}}\" title=\"purple\">
<link rel=\"alternate stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/colors/slate.css')}}\" title=\"slate\">
<link rel=\"alternate stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/colors/yellow.css')}}\" title=\"yellow\">
<link rel=\"alternate stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/colors/red.css')}}\" title=\"red\">
<link rel=\"alternate stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/colors/blue-munsell.css')}}\" title=\"blue-munsell\">

<!-- RESPONSIVE FIXES -->
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/css/responsive.css')}}\">

<!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/mobile-app/demo/demo.css')}}\">


<!--[if lt IE 9]>
\t\t\t<script src=\"js/html5shiv.js\"></script>
\t\t\t<script src=\"js/respond.min.js\"></script>
<![endif]-->

<!-- JQUERY -->
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}\"></script>

</head>

<body>


<!-- =========================
     HEADER   
============================== -->
<header class=\"header\" data-stellar-background-ratio=\"0.5\" id=\"home\">

<!-- COLOR OVER IMAGE -->
<div class=\"color-overlay\">\t

\t
\t
\t<!-- CONTAINER -->
\t<div class=\"container\">
\t\t
\t\t

\t\t<img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img/cngot.png')}}\" class=\"img-responsive\" alt=\"\">
\t\t
\t\t<div class=\"row home-contents\">
\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t
\t\t\t\t<!-- HEADING AND BUTTONS -->
\t\t\t\t<div class=\"intro-section\">
\t\t\t\t\t
\t\t\t\t\t<!-- WELCOM MESSAGE -->
\t\t\t\t\t<h1 class=\"intro\">Cette application est destinée aux participants du 3 ème Congrès du CNGOT.</h1>
\t\t\t\t\t<h5>Android App available on Play Store</h5>
\t\t\t\t\t
\t\t\t\t\t<!-- BUTTON -->
\t\t\t\t\t<div class=\"buttons\" id=\"download-button\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=com.ionicframework.cngotaroussi2016&hl=fr\" class=\"btn btn-default btn-lg standard-button\"><i class=\"icon-app-download\"></i>Download ANDROID App</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"buttons\" id=\"download-button\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" class=\"btn byline btn-lg standard-button\"><i class=\"icon-app-download\"></i>Download IOS App</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- /END BUTTONS -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- /END HEADNING AND BUTTONS -->
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col-md-6 col-sm-6 hidden-xs\">
\t\t\t    
\t\t\t    <!-- PHONE IMAGE WILL BE HIDDEN IN TABLET PORTRAIT AND MOBILE-->
\t\t\t    <div class=\"phone-image\">
\t\t\t    <img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img/cngot 2016.png')}}\" class=\"img-responsive\" alt=\"\">
\t\t\t    </div>
\t\t\t    
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<!-- /END ROW -->
\t\t
\t</div>
\t<!-- /END CONTAINER -->
</div>
<!-- /END COLOR OVERLAY -->
</header>
<!-- /END HEADER -->




<!-- =========================
     BRIEF RIGHT SECTION 
============================== -->

<div class=\"container\">
\t
\t<div class=\"row\">
\t\t
\t\t<!-- BRIEF -->
\t\t<div class=\"col-md-6 left-align wow fadeInLeft animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t\t
\t\t\t
\t\t\t
\t\t\t<!-- WELCOM MESSAGE -->
\t\t\t\t\t<h1 class=\"intro\">Cette application est destinée aux organisateurs du 3 ème Congrès du CNGOT.</h1>
\t\t\t\t\t</br>
\t\t\t\t\t<h5>Android App available on Play Store</h5>
\t\t\t\t\t</br>
\t\t\t
\t\t\t
\t\t\t\t\t<!-- BUTTON -->
\t\t\t\t\t<div class=\"buttons\" id=\"download-button\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"https://play.google.com/store/apps/details?id=veloxit.cngotpro&hl=fr\" class=\"btn btn-default btn-lg standard-button\"><i class=\"icon-app-download\"></i>Download App</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<!-- /ENDBRIEF -->
\t\t
\t\t<!-- PHONES IMAGE -->
\t\t<div class=\"col-md-6 wow fadeInRight animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t\t<div class=\"phone-image\">
\t\t\t\t<img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img/cngot pro.png')}}\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t\t<!-- /END PHONES IMAGE -->
\t\t
\t</div>
\t<!-- /END ROW -->
\t
</div>
<!-- /END CONTAINER -->

<!-- /END SECTION -->


<!-- =========================
     BRIEF LEFT SECTION WITH VIDEO 
============================== -->
<section class=\"app-brief deep-dark-bg\" id=\"brief1\">

<div class=\"container\">
\t
\t<div class=\"row\">
\t\t
\t\t<!-- PHONES IMAGE -->
\t\t<div class=\"col-md-6 wow fadeInRight animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t\t<div class=\"video-container\">
\t\t\t\t
                <!--
\t\t\t\t<div class=\"video\">
\t\t\t\t\t
\t\t\t\t\t<iframe src=\"//player.vimeo.com/video/88902745?byline=0&amp;portrait=0&amp;color=ffffff\" width=\"600\" height=\"338\" frameborder=\"0\" allowfullscreen>
\t\t\t\t\t</iframe> 
\t\t\t\t</div>
\t\t\t\t-->
\t\t\t\t
\t\t\t\t<div class=\"video\">
\t\t\t\t\t<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/J0IF_chMGCk\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t\t
\t\t<!-- RIGHT SIDE WITH BRIEF -->
\t\t<div class=\"col-md-6 left-align wow fadeInLeft animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t\t
\t\t\t<!-- SECTION TITLE -->
\t\t\t<h2 class=\"white-text\">By VELOX IT</h2>
\t\t\t</br>
\t\t\t<div class=\"colored-line-left\">
\t\t\t</div>
\t\t\t\t\t\t</br>

\t\t\t
\t\t\t<h3>
\t\t\t\tThe source for computing and technology

\t\t\t</h3>
\t\t\t
\t\t\t
\t\t</div>
\t\t<!-- /END RIGHT BRIEF -->
\t\t
\t</div>
\t<!-- /END ROW -->
\t
</div>
<!-- /END CONTAINER -->

</section>
<!-- /END SECTION -->


<!-- /END TESTIMONIALS SECTION -->




<!-- =========================
     SCREENSHOTS
============================== -->
<section class=\"screenshots deep-dark-bg\" id=\"screenshot-section\">

<div class=\"color-overlay\">


<div class=\"container\">
\t
\t<!-- SECTION HEADER -->
\t<div class=\"section-header wow fadeIn animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t
\t\t<!-- SECTION TITLE -->
\t\t<h2 class=\"white-text\">Screenshots</h2>
\t\t
\t\t<div class=\"colored-line\">
\t\t</div>
\t\t<div class=\"section-description\">
\t\t\t© copyright 2016, Developed by Velox IT. Privacy Policy | Terms and Conditions
\t\t</div>
\t\t<div class=\"colored-line\">
\t\t</div>
\t\t
\t</div>
\t<!-- /END SECTION HEADER -->
\t
\t<div class=\"row wow bounceIn animated\" data-wow-offset=\"10\" data-wow-duration=\"1.5s\">
\t\t
\t\t<div id=\"screenshots\" class=\"owl-carousel owl-theme\">
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img\\capture\\1.png')}}\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img\\capture\\2.png')}}\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img\\capture\\3.png')}}\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img\\capture\\4.png')}}\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img\\capture\\5.png')}}\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img\\capture\\6.png')}}\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img\\capture\\7.png')}}\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"shot\">
\t\t\t\t<a href=\"\" data-lightbox-gallery=\"screenshots-gallery\"><img src=\"{{asset('bundles/cngot/wp-content/mobile-app/img\\capture\\8.png')}}\" alt=\"Screenshot\"></a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<!-- /END SCREENSHOTS -->
\t\t
\t</div>
\t<!-- /END ROW -->
\t
</div>
<!-- /END CONTAINER -->

</section>
<!-- /END SCREENSHOTS SECTION -->



<!-- /END PRICING TABLE SECTION -->




\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t


<!-- =========================
     FOOTER 
============================== -->
<footer>

\t<!-- COPYRIGHT TEXT -->
\t<p class=\"copyright\">
\t\t© copyright 2016, Developed by Velox IT. Privacy Policy | Terms and Conditions
\t</p>


<!-- /END CONTAINER -->
 
</footer>
<!-- /END FOOTER -->


<!-- =========================
     SCRIPTS 
============================== -->

<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/smoothscroll.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/jquery.scrollTo.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/jquery.localScroll.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/owl.carousel.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/nivo-lightbox.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/simple-expand.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/wow.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/jquery.stellar.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/retina-1.1.0.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/jquery.nav.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/matchMedia.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/jquery.ajaxchimp.min.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/jquery.fitvids.js')}}\"></script>
<script src=\"{{asset('bundles/cngot/wp-content/mobile-app/js/custom.js')}}\"></script>

<!-- =========================================================
     STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
============================================================== -->
<script type=\"text/javascript\" src=\"{{asset('bundles/cngot/wp-content/mobile-app/demo/styleswitcher.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('bundles/cngot/wp-content/mobile-app/demo/demo.js')}}\"></script>


</div>


</body>

<!-- Mirrored from demo.templateocean.com/premium/template/kane/layout-style-two/dark/image-bg/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Dec 2016 14:37:31 GMT -->
</html>";
    }
}
