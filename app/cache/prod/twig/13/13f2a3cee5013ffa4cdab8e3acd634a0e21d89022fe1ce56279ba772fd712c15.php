<?php

/* CNGOTBundle::layout.html.twig */
class __TwigTemplate_e5ae9ee355dbb02c9b31903fda24c5d70711d701ac3b5b6e141f26e6b7abbbe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'videoContent' => array($this, 'block_videoContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01a5944748cbd229fd7636ef4d0e611452950d032dd9c5853b7751dc7431bd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a5944748cbd229fd7636ef4d0e611452950d032dd9c5853b7751dc7431bd3e->enter($__internal_01a5944748cbd229fd7636ef4d0e611452950d032dd9c5853b7751dc7431bd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr-FR\">

    <!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
        <link rel=\"pingback\" href=\"xmlrpc.php\">
        <title>CNGOT</title>
        <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
        <link rel='dns-prefetch' href='http://s.w.org/' />
        
        
        <!-- caroussel -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/type/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <!--
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/prog/css/style.css"), "html", null, true);
        echo "assets/css/bootstrap.min.css\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/prog/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/prog/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900\" rel=\"stylesheet\">

-->

        <script type=\"text/javascript\">
            window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/2\\/72x72\\/\", \"ext\":\".png\", \"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/2\\/svg\\/\", \"svgExt\":\".svg\", \"source\":{\"concatemoji\":\"https:\\/\\/fkg-karlsruhe.de\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=4.6.1\"}};
            !function(a, b, c){function d(a){var c, d, e, f, g, h = b.createElement(\"canvas\"), i = h.getContext && h.getContext(\"2d\"), j = String.fromCharCode; if (!i || !i.fillText)return!1; switch (i.textBaseline = \"top\", i.font = \"600 32px Arial\", a){case\"flag\":return i.fillText(j(55356, 56806, 55356, 56826), 0, 0), !(h.toDataURL().length < 3e3) && (i.clearRect(0, 0, h.width, h.height), i.fillText(j(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), c = h.toDataURL(), i.clearRect(0, 0, h.width, h.height), i.fillText(j(55356, 57331, 55356, 57096), 0, 0), d = h.toDataURL(), c !== d); case\"diversity\":return i.fillText(j(55356, 57221), 0, 0), e = i.getImageData(16, 16, 1, 1).data, f = e[0] + \",\" + e[1] + \",\" + e[2] + \",\" + e[3], i.fillText(j(55356, 57221, 55356, 57343), 0, 0), e = i.getImageData(16, 16, 1, 1).data, g = e[0] + \",\" + e[1] + \",\" + e[2] + \",\" + e[3], f !== g; case\"simple\":return i.fillText(j(55357, 56835), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0]; case\"unicode8\":return i.fillText(j(55356, 57135), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0]; case\"unicode9\":return i.fillText(j(55358, 56631), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0]}return!1}function e(a){var c = b.createElement(\"script\"); c.src = a, c.type = \"text/javascript\", b.getElementsByTagName(\"head\")[0].appendChild(c)}var f, g, h, i; for (i = Array(\"simple\", \"flag\", \"unicode8\", \"diversity\", \"unicode9\"), c.supports = {everything:!0, everythingExceptFlag:!0}, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], \"flag\" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function(){c.DOMReady = !0}, c.supports.everything || (g = function(){c.readyCallback()}, b.addEventListener?(b.addEventListener(\"DOMContentLoaded\", g, !1), a.addEventListener(\"load\", g, !1)):(a.attachEvent(\"onload\", g), b.attachEvent(\"onreadystatechange\", function(){\"complete\" === b.readyState && c.readyCallback()})), f = c.source || {}, f.concatemoji?e(f.concatemoji):f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))}(window, document, window._wpemojiSettings);
        </script>
        <style type=\"text/css\">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='fkg-fonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C500%2C600%2C700%2C300%2C100%2C800%2C900%7COpen%2BSans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
        <link rel='stylesheet' id='fkg-animate-css'  href='";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/fkg/assets/css/animate.min8a54.css?ver=1.0.0"), "html", null, true);
        echo "' type='text/css' media='all' />
        <link rel='stylesheet' id='fkg-fa-css'  href='";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/fkg/assets/css/font-awesome.min474a.css?ver=4.4.0"), "html", null, true);
        echo "' type='text/css' media='all' />
        <link rel='stylesheet' id='fkg-bootstrap-css'  href='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/fkg/assets/css/bootstrap.mincce7.css?ver=4.0.0"), "html", null, true);
        echo "' type='text/css' media='all' />
        <link rel='stylesheet' id='fkg-style-css'  href='";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/fkg/style1c9b.css?ver=4.6.1"), "html", null, true);
        echo "' type='text/css' media='all' />
        <style id='fkg-style-inline-css' type='text/css'>
            #main .video-section section.hero-slideshow-wrapper{background:transparent}.hero-slideshow-wrapper:after{position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0,0,0,0.3);display:block;content:\"\"}.body-desktop .parallax-hero .hero-slideshow-wrapper:after{display:none!important}.parallax-hero .parallax-mirror:after{position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0,0,0,0.3);display:block;content:\"\"}.parallax-hero .hero-slideshow-wrapper:after{display:none!important}.parallax-hero .parallax-mirror:after{position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0,0,0,0.3);display:block;content:\"\"}a,.screen-reader-text:hover,.screen-reader-text:active,.screen-reader-text:focus,.header-social a,.fkg-menu a:hover,.fkg-menu ul li a:hover,.fkg-menu li.fkg-current-item>a,.fkg-menu ul li.current-menu-item>a,.fkg-menu>li a.menu-actived,.fkg-menu.fkg-menu-mobile li.fkg-current-item>a,.site-footer a,.site-footer .footer-social a:hover,.site-footer .btt a:hover,.highlight,#comments .comment .comment-wrapper .comment-meta .comment-time:hover,#comments .comment .comment-wrapper .comment-meta .comment-reply-link:hover,#comments .comment .comment-wrapper .comment-meta .comment-edit-link:hover,.btn-theme-primary-outline,.sidebar .widget a:hover,.section-services .service-item .service-image i,.counter_item .counter__number,.team-member .member-thumb .member-profile a:hover,.icon-background-default{color:#68c632}input[type=\"reset\"],input[type=\"submit\"],input[type=\"submit\"],.nav-links a:hover,.btn-theme-primary,.btn-theme-primary-outline:hover,.card-theme-primary,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce button.button.alt{background:#68c632}.btn-theme-primary-outline,.btn-theme-primary-outline:hover,.pricing__item:hover,.card-theme-primary,.entry-content blockquote{border-color:#68c632}.site-footer{background-color:#848484}.site-footer .footer-connect .follow-heading{color:rgba(255,255,255,0.9)}
        </style>


        <script type='text/javascript'>
            /* <![CDATA[ */
            var fkg_js_settings = {\"fkg_disable_animation\":\"\", \"fkg_disable_sticky_header\":\"\", \"fkg_vertical_align_menu\":\"\", \"hero_animation\":\"flipInX\", \"hero_speed\":\"5000\"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4"), "html", null, true);
        echo "'></script>
        <script type='text/javascript' src='";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"), "html", null, true);
        echo "'></script>
        <link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"xmlrpc0db0.php?rsd\" />
        <link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/wlwmanifest.xml"), "html", null, true);
        echo "\" /> 
        <meta name=\"generator\" content=\"WordPress 4.6.1\" />
        <link rel=\"canonical\" href=\"index.html\" />
        <link rel='shortlink' href='index.html' />
        <style type=\"text/css\">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <link rel=\"icon\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" sizes=\"32x32\" />
        <link rel=\"icon\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" sizes=\"192x192\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
        <meta name=\"msapplication-TileImage\" content=\"https://fkg-karlsruhe.de/wp-content/uploads/2016/06/cropped-FKG-Logo-512-1-270x270.png\" />


        <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>


        <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/js/mediaelement/mediaelement-and-player.min.js"), "html", null, true);
        echo "\"></script>


        <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/js/scripts.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/js/init.js"), "html", null, true);
        echo "\"></script>



        <link rel=\"stylesheet\" id=\"inspirado_core_icons-css\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/core-icons/core_style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"inspirado_main_css-css\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">






    </head>

    <body id=\"bo\" class=\"home page page-id-2 page-template page-template-template-frontpage page-template-template-frontpage-php wp-custom-logo sticky-header\">
        <div id=\"page\" class=\"hfeed site\">
            <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
            <header id=\"masthead\" class=\"site-header\" role=\"banner\">
                <div class=\"container\">
                    <div class=\"site-branding\">
                        <div class=\"site-brand-inner has-logo-img has-title has-desc\"><div class=\"site-logo-div\"><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cngot_homepage");
        echo "\" class=\"custom-logo-link\" rel=\"home\" itemprop=\"url\"><img width=\"100px\" height=\"100px\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo1.png"), "html", null, true);
        echo "\" class=\"custom-logo\" alt=\"cropped-FKG-Logo-512.png\" itemprop=\"logo\" srcset=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo1.png"), "html", null, true);
        echo "\" sizes=\"(max-width: 20px) 100vw, 20px\" /></a></div><p class=\"site-title\"><a class=\"site-text-logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cngot_homepage");
        echo "\" rel=\"home\" style=\"font-size:20px;\">Congrès du CNGOT</a></p><p class=\"site-description\">2éme édition</p></div>                </div>
                    <!-- .site-branding -->

                    <div class=\"header-right-wrapper\">
                        <a href=\"#site-navigation\" id=\"nav-toggle\">Menu<span></span></a>
                        <nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\">
                            <ul class=\"fkg-menu\">
                                <li id=\"menu-item-14\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-14\"><a href=\"index.html#about\">à propos</a></li>
                                <li id=\"menu-item-90\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-90\"><a href=\"index.html#vortraege\">Notre Programme</a></li>
                                <li id=\"menu-item-36\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-36\"><a href=\"index.html#Firmen\">Nos sponsors</a></li>
                                <li id=\"menu-item-15\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-15\"><a href=\"index.html#contact\">Nous Contacter</a></li>
                                <li id=\"menu-item-16\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-16\"><a href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></li>
                                <li id=\"menu-item-16\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-16\"><a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></li>
                                <li id=\"menu-item-16\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-16\"><img data-mfp-src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/06/tunisia.gif"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/06/tunisia.gif"), "html", null, true);
        echo "\"></li>

                            </ul>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                </div>
            </header><!-- #masthead -->

            <div id=\"content\" class=\"site-content\">
                <main id=\"main\" class=\"site-main\" role=\"main\">
                    <section id=\"hero\" class=\" \" style=\" background-image: url('";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/06/back.jpg"), "html", null, true);
        echo "');background-size: 100% 100%;\">
                        <div class=\"container\" style=\"padding-top: 10%; padding-bottom: 10%;\">
                            <div class=\"hero__content hero-content-style1\">
                                <h2 class=\"hero-large-text\">
                                    <img class=\"alignnone wp-image-10 size-full\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo-16.png"), "html", null, true);
        echo "\" alt=\"Logo full_colors\" width=\"650\" style=\" transform: translate(9%,20px);\" />
                                </h2>
                                <a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-theme-primary btn-lg\">S'inscrire</a>
                                <a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-theme-secondary btn-lg\"> Se Connecter</a>



                            </div>
                        </div>

                    </section>
                    <section id=\"about\"  class=\"section-about section-padding onepage-section\">

                        <div class=\"container\">
                            <div class=\"section-title-area\">
                                <h2 class=\"section-title\">À propos de CNGOT</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6  col-sm-12 wow slideInUp container-fluid about-images\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-sm-12\">
                                            <img data-mfp-src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/07/photo1.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/07/photo1.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-md-6 col-sm-12\">
                                            <img data-mfp-src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/07/photo2.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/07/photo2.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-md-6 col-sm-12\">
                                            <img data-mfp-src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/07/photo3.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/07/photo3.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-md-6 col-sm-12\">
                                            <img data-mfp-src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/07/photo4.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/uploads/2016/07/photo4.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6  col-sm-12 wow slideInUp\">
                                    <h5>CHERS COLLÈGUES ET AMI(E)S,</h5>
                                    <p>Nous vous annonçons l’organisation du 3 ème Congrès du Collège National de

Gynécologie-Obstétrique de Tunisie, conjointement avec le 3ème Congrès

National de l’association Tunisienne des Médecins Embryologistes, qui se

tiendront les 16 ET 17 Décembre 2016 à l’hôtel DIAR EL ANDALOUS à

SOUSSE.                                        </p>
                                    <p>La date limite de soumission des e-posters est le <strong>27 novembre 2016</strong>.</p>
                                    <p>Pour soumettre un abstract, veuillez d&#39;abord vous inscrire au congrès sur notre

site web <strong>cngot.tn</strong></p>
                                    <p>Après création de votre compte vous aurez accès à la page de soumission des

abstracts qui doivent répondre au modèle : Introduction, Matériel et Méthodes,

Résultats et Conclusions. Les travaux sélectionnés seront présentés sous forme

de posters électroniques. Les meilleurs e-posters seront sélectionnés pour

communication orale.</p>

                                </div>
                                <br><br>
                                <p>L’inscription aux ateliers et aux masterclass est obligatoire et limitée à <strong>30

participants par atelier et 60 personnes par masterclass</strong>.</p>

                            </div>
                        </div>
                    </section>
                    <section id=\"counter\"                  class=\"section-counter section-padding onepage-section\">
                        <div class=\"container\">
                            <div class=\"row\">

                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"counter_item\">
                                        <div class=\"counter__number\">
                                            <span class=\"n counter\">";
        // line 208
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))), "html", null, true);
        echo "</span>
                                        </div>
                                        <div class=\"counter_title\">Inscrits</div>
                                    </div>
                                </div>


                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"counter_item\">
                                        <div class=\"counter__number\">
                                            <span class=\"n counter\">2</span>
                                        </div>
                                        <div class=\"counter_title\">Editions</div>
                                    </div>
                                </div>


                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"counter_item\">
                                        <div class=\"counter__number\">
                                            <span class=\"n counter\">2</span>
                                        </div>
                                        <div class=\"counter_title\">Sponsors</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                                        
                                
                                        
                                        
                    <section id=\"review\"  class=\"section-review section-padding onepage-section\">

                        <div class=\"container\">
                            <div class=\"review-container wow slideInUp\">
                                <div class=\"review-quote-left\"><i class=\"fa fa-quote-left\"></i></div>
                                <div class=\"review-content\">
                                    <p>Pour le cancer du sein par exemple, entre l'apparition de la première cellule cancéreuse et le premier nodule senti par la femme ou son médecin, il se produit 8 ans et 3 mois (...) Le cancer atteint une masse de 1 milliards de cellules (soit un gramme ou 1 cm de diamètre) vers la 8ème année de son évolution c'est alors qu'il devient décelable. Mais ce stade de détection est bien trop éloigné du seuil d'irréversibilité (1 million de cellules). <strong>Il est possible d'agir bien avant</strong> : c'est le principe de la prévention active.</p>
                                    <div class=\"review-author\">André Gernez</div>
                                </div>
                                <div class=\"review-quote-right\"><i class=\"fa fa-quote-right\"></i></div>
                            </div>
                        </div>
                    </section>




<center>

\t<img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/prog.jpg"), "html", null, true);
        echo "\"  height=\"500\" width=\"900\"/>


</center>





<style>


.day-time-m {
\tpadding-bottom:70px;
\ttext-align:center;
}
.day-time-m ul {
\tpadding:0;
}
.day-time-m li {
\tborder:3px solid #000000;
\tdisplay:inline-block;
\tfont-size:20px;
\tfont-weight:300;
\tline-height:35px;
\tlist-style:outside none none;
\tmargin:0 10px;
\ttext-align:center;
\tposition:relative;
}
.day-time-m li.active, .day-time-m li:hover {
\tbackground:#68c632 none repeat scroll 0 0;
\tborder-color:#68c632;
}
.day-time-m li.active::after {
  border-color: hsl(96, 63%, 43%) hsla(0, 0%, 0%, 0) hsla(0, 0%, 0%, 0);
  border-style: solid;
  border-width: 12px;
  content: \"\";
  height: 12px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  top: 42px;
  width: 12px;
}
.day-time-m li a {
\tcolor:#000000;
\tdisplay:block;
\tpadding:3px 25px;
}
.conference-time-list {
\tborder-top:3px solid #393939;
\toverflow:hidden;
\tposition:relative;
}
.conference-time-list:nth-last-child(1) {
\tborder-bottom:3px solid #393939;
}
.conf-user-time {
\tcolor:#000000;
\tfloat:left;
\tpadding:15px;
\ttext-align:center;
\twidth:135px;
\tfont-weight:300;
}
.conf-user-time span.time {
\tdisplay:block;
\tfont-size:44px;
\tline-height:60px;
}
.time-schedule {
\tdisplay:block;
\tfont-size:20px;
\ttext-align:right;
}
.conf-user-img {
\tfloat:left;
\tpadding:29px 20px;
\twidth:100px;
}
.conf-user-info {
\tfloat:left;
\tpadding:34px 10px;
\twidth:515px;
}
.conf-user-info h5 {
\tcolor:#68c632;
\tmargin-bottom:10px;
}
.conf-user-info h6 {
  color: hsl(0, 0%, 56%);
  font-size: 16px;
  font-weight: 300;
  margin: 0 auto;
}
.conf-user-content {
\toverflow:hidden;
\tpadding-top:25px;
}
.conf-user-content p {
\tcolor:#000000;
\tfont-size:16px;
}
.conf-close {
\tbackground:#68c632 none repeat scroll 0 0;
\tborder-radius:50%;
\tcolor:#000000 !important;
\tdisplay:inline-block;
\tfont-size:31px;
\theight:52px;
\tline-height:52px;
\tposition:absolute;
\tright:23px;
\ttext-align:center;
\ttop:45px;
\twidth:52px;
\tcursor:pointer;
}
.conf-close:hover {
\tcolor:#fff;
}
.conf-close.menu-down {
\ttransform:rotate(89deg);
}


</style>


  





<!-- Schedule -->
<section id=\"schedule\" class=\"conference-schedule section-padding secondary-bg\">
  <div class=\"container\">
    <div class=\"row\"> 
      <!-- Heading -->
      <div class=\"col-md-12\">
        <div class=\"heading-sec\">
          <div class=\"section-title-area\">
                                <h2 class=\"section-title\">Notre Programme</h2>
                            </div>
        </div>
      </div>
      <!-- /Heading --> 
    </div>
    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-8 col-lg-offset-2\">
        <div class=\"day-time-m\">
          <ul data-tabs=\"tabs\">
            <li class=\"active\"><a href=\"#day1\" data-toggle=\"tab\">Jour 1</a></li>
            <li><a href=\"#day2\" data-toggle=\"tab\">Jour 2</a></li>
          </ul>
        </div>
        <div id=\"my-tab-content\" class=\"tab-content\"> 
          <!--Day 1 schedule-->
          <div class=\"tab-pane active\" id=\"day1\">
            
\t\t\t
\t\t\t<!-- Heading -->
          <div class=\"section-header \">
            <h5>Master class : 8h30 - 10h00 : en parallèle dans 4 salles</h5>
\t\t\t<span><p><strong>Master class 1</strong> : Conduite à tenir devant une hémorragie de la délivrance par atonie utérine/ Triple ligature &amp; Ligature des artères hypogastriques</p><p style=\"color:blue; text-align: right;\">Dr Chaabene Kais</p></span>
\t\t\t
\t\t\t<span><p><strong>Master class 2</strong> : Traitement coelio-chirurgical des troubles de la statique pelvienne</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Bouguizene Sassi</p></span>
\t\t\t
\t\t\t<span><p><strong>Master class 3</strong> : Astuces en coelio, hystéro et laparotomie pour aborder aisément les fibromes difficiles</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Mathlouthi Nabil &amp; Dr Gargouri Linda</p></span>
\t\t\t
\t\t\t<span><p><strong>Master class 4</strong> : Cerclage cervical : du chaud au froid</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Rzigua et col.</p></span>
          </div>
      <!-- /Heading --> 
\t\t\t
\t\t\t
\t\t\t
            <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">08:00 09:30</span> <span class=\"time-schedule\"></span> </div>
             
              <div class=\"conf-user-info\">
                <h5>Inscription</h5>
                
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">10:00 10:50</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>La macrosomir en 2016:</h5>
                <h6>pourquoi et comment?</h6>
                <a  href=\"#collapse2\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse2\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    \t\t\t
                    \t\t\t<span><p>10:00 - 10:45 : La macrosomie : Définitions &amp; Dépistage</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Khlifi Oussema.</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>10h20 - 10h40 : Peut-on prévenir la dystocie des épaules ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr. Fkih Chiraz Dr Hnifi Chokri Dr Mejri Oumayma.</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>10h40 - 10h50 : Discussion</p>
\t\t\t\t\t
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">10:50 11:10</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5> Pause café</h5>
              
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">11:20 12:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Le traitement hormonal à la loupe :</h5>
              
                <h6></h6>
                <a  href=\"#collapse6\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse6\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>11:10 - 11:35 : La contraception critères d'acceptabilité de l'OMS</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Chelly Dalenda Dr Mraihi Fethi</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>11:35 - 11:50 : Le THS : retour vers le futur ? Les nouvelles recommandations</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Kaabia Ons Dr Cherif Ons</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>11:50 - 12:00 : Discussion</p>
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">12:00 13:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>La césarienne en pratique:</h5>
              
                <h6>Renonçons aux dogmes</h6>
                <a  href=\"#collapse4\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse4\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>12:00 - 12:30 : Les nouvelles recommandations pour les temps opératoires en césarienne</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Mrazguia Chaouki Dr Farza Ines.</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>12:30 - 12:50 : La prévention per et post-césarienne des infections de la paroi.</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Khlifi Abdeljelil Dr Kraiem Sabrine</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>12:50 - 13:00 : Discussion</p>
\t\t\t\t\t
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">13:00 14:30</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5> Déjeuner / Session e-Posters</h5>
              
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">14:30 15:35</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Prise en charge en ambulatoire des GAR:</h5>
                <h6>Sortons des sentiers battus</h6>
                <a  href=\"#collapse3\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse3\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>14:30 - 14h50 : La surveillance en ambulatoire des pré-éclampsies</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Achour Radhouane Dr Slim Khedher</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>14:50 - 15:10 : La surveillance en ambulatoire des RCIU</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Lessaad Mkaouar Dr Sadok Derouiche Dr Wissal Jaafer</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>15:10 - 15:30 : La surveillance en ambulatoire des RPM</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Abouda Hessine Dr Mgdoud Khaoula Dr Arij Bouzid</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>15:30 - 15:35 : Discussion</p>
                  </div>
                </div>
              </div>
            </div>
            
            
            
\t\t\t
\t\t\t <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">15:35 16:45</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Table ronde:</h5>
              
                <h6>Le gynécologue Obstétricien de demain</h6>
                <a  href=\"#collapse7\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse7\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    
\t\t\t\t\t<span><p>15:35 - 16:00 : Le processus d'accréditation en médecine</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Mtiraoui</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>16:00 - 16:20 : La réforme du cursus du résident en GO</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Khairi Hédi Dr Ben Abid Haifa</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>16:20 - 16:45 : Discussion</p>
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t
            
\t\t\t <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">16:45 17:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Pause café / Session e-Posters</h5>
              
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t
            
            
\t\t\t <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">17:00 18:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Les prescriptions en obstétriques:</h5>
              
                <h6>Qui croire l&#39;Autorisation de Mise sur le Marché ou l&#39;Evidence Based Medecine ?</h6>
                <a  href=\"#collapse9\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse9\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>17:00 - 17:20 : Quel protocole pour la maturation cervicale et le déclanchement du travail à terme ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Ragmoun Houssem Dr Zemni Zeineb</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>17:20 - 17:40 : Quel protocole pour la prévention des HPP chez les femmes à risque ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Triki et col.</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>17:40 - 18:00 : Quel protocole de neuro-protection et pour quelles patientes ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Souilem Leila, Dr Bouchahda Rim Dr Methamem Marwa</p></span>
\t\t\t\t\t
                  </div>
                </div>
              </div>
           
          </div>
            
            
\t\t\t
\t\t\t<div class=\"section-footer \">
\t\t\t\t<h2>Ateliers ATME</h2>
\t\t\t\t
\t\t\t\t\t<div class=\"conference-time-list\">
\t\t\t\t\t\t<div class=\"conf-user-time\"> <h3>1er ATELIER :</h3> <span class=\"time-schedule\"></span> </div>
\t\t\t\t\t\t<div class=\"conf-user-info\">
\t\t\t\t\t\t\t<h5>L’ICSI : Indications, Techniques et Interprétation des Résultats</h5>
              
\t\t\t\t\t\t\t<a  href=\"#collapse20\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"collapse\" id=\"collapse20\" aria-expanded=\"false\" style=\"height: 0px;\">
\t\t\t\t\t\t\t\t<div class=\"conf-user-content\">
\t\t\t\t\t\t\t\t\t<p>14:30 - 15:00 : Accueil, présentation</p>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>15:00 - 15:30 : Analyse et Préparation du Sperme</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Mehdi M</p></span>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>15:30 - 16:00 : Les Indications de l’ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Hafhouf E</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>16:00 - 16:20 : Recueil et Manipulation des CCO /Ovocytes</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Fourati S</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>16:20 - 16:45 : ICSI : Micro-injection, Fécondation et Technique de Culture Embryonnaire</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Kacem K</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>16:45 - 17:15 : <strong>Pause Café</strong></p>

\t\t\t\t\t\t\t\t\t<span><p>17:15 - 17:35 : Développement Embryonnaire, Scoring &amp; Sélection</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Jallad S</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>17:35 - 17:55 : Comparaison des Résultats FIV /ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Kacem O</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>17:55 - 18:15 : Interprétation des Résultats de l’ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr AJINA M</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>18:15 - 18:35 : Les Facteurs Pronostiques de la Réussite de l’ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr SALLAMI A</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>18:35 - 18:55 : Démonstration en Vidéo de la technique d’ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Ben Mustapha H</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>18:55 - 19:10 : Discussion Générale et recommandations</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr AJINA M&amp; Dr ZHIOUA-SKHIRI A</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"conference-time-list\">
\t\t\t\t\t\t<div class=\"conf-user-time\"> <h3>2 ème ATELIER :</h3> <span class=\"time-schedule\"></span> </div>
\t\t\t\t\t\t<div class=\"conf-user-info\">
\t\t\t\t\t\t\t<h5>Vitrification des Embryons &amp; Ovocytes</h5>
              
\t\t\t\t\t\t\t<a  href=\"#collapse22\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"collapse\" id=\"collapse22\" aria-expanded=\"false\" style=\"height: 0px;\">
\t\t\t\t\t\t\t\t<div class=\"conf-user-content\">
\t\t\t\t\t\t\t\t\t<p>14:30 - 15:00 : Accueil, présentation</p>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>15:00 - 15:35 : Bases fondamentales de la vitrification</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr E. Mokaddem</p></span>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>15:35 - 16:05 : Aspects pratiques et critères de sucées de la vitrification ovocytaire</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr H. Elloumi</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>16:05 - 16:40 : Aspects pratiques et critères de sucées de la vitrification embryonnaires</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr A. Genoves</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>16:45 - 17:15 : <strong>Pause Café</strong></p>

\t\t\t\t\t\t\t\t\t<p>17:15 - 17:55 : vitrification des ovocytes : Atelier pratique</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>17:55 - 18:35 : vitrification des embryons : Atelier pratique</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t</div>
            
          </div>
          <!--/Day 1 schedule--> 
          
          <!--Day 2 schedule-->
          <div class=\"tab-pane\" id=\"day2\">
\t\t  
\t\t  
\t\t\t<!-- Heading -->
          <div class=\"section-header \">
            <h5>Ateliers CNGOT de 8h30 à 10h00 en parallèle dans 4 salles</h5>
\t\t\t
\t\t\t<span><p><strong>Atelier 1</strong> : Interprétation raisonnée de l'ERCF</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Sami Mahjoub Dr Kouira et col.</p></span>
\t\t\t
\t\t\t<span><p><strong>Atelier 2</strong> : Coupes obligatoires de dépistage à l'écho T2</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Bibi Dr Chelly Dr Meddeb Dr Kaabia</p></span>
\t\t\t
\t\t\t<span><p><strong>Atelier 3</strong> : Manœuvres obstétricales et accouchement instrumental</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr El Faleh R. et col.</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Ben Regaya Lassad Dr Aymen Maiez</p></span>
\t\t\t
\t\t\t<span><p><strong>Atelier 4</strong> : Biopsies et ponctions mammaires - cytologies ganglionnaires</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Bakir et col.</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Hidar S. et col.</p></span>
\t\t\t
          </div>
\t\t\t<!-- /Heading --> 
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">08:30 10:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Les anomalies spermatiques et l'infertilité masculine</h5>
                
                <a href=\"#collapse16\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse16\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  <span><p>08:00 - 08:55 : Génétique des tératozoospermies syndromiques</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Ibala S.</p></span>
\t\t\t\t  
\t\t\t\t  <p>08:55 - 09:45 : Infection du sperme et infertilité:</p>
\t\t\t\t  <span><p>08:55 - 09:20 : Point de vue de l'infectiologue</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Loussaief C.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>09:20 - 09:45 : Point de vue du biologiste :PEC d'une leucospermie chez un couple infertile</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Wolf JP.</p></span>
\t\t\t\t  
\t\t\t\t  <p>09:45 - 10:00 : Discussion</p>
\t\t\t\t  
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t  
            <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">10:00 11:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Comment endiguer l&#39;épidémie de prématurité en Tunisie ?</h5>
              
                <a  href=\"#collapse10\" data-toggle=\"collapse\" role=\"button\" class=\"conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse10\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>10:00 - 10:20 : Peut-on prédire la prématurité en 2016 ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Hachéni Feten Dr Bannour Imene</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>10:20 - 10:40 : Quel protocole de maturation pulmonaire fœtale en 2016 ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Briki Raja Dr Derwiche Mouna</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>10:40 - 11:00 : 40 SA est-il le nouveau 38 SA ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Oueslati et col.</p></span>
\t\t\t\t\t
                  </div>
                </div>
              </div>
            </div>
\t\t\t
            <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">11:00 11:15</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Pause café / Session e-Posters</h5>
                
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t
            <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">11:15 12:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Endocrinopathies et fertilité</h5>
                
                <a href=\"#collapse12\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse12\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  
\t\t\t\t  <span><p>11:15 - 11:30 : Dysthyroidies et fertilité féminine</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Khochtali I.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>11:30 - 11:50 : La metformine à toutes les sauces ?</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr El Euch</p></span>
\t\t\t\t  
\t\t\t\t  <p>11:50 - 12:00 : Discussion</p>
\t\t\t\t  
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">12:00 13:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Préservation de la fertilité féminine et cancer</h5>
                
                <a href=\"#collapse14\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse14\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  <span><p>12:00 - 12:25 : Point de vue du biologiste</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Elloumi</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>12:25 - 12:50 : Point de vue du gynécologue obstétricien</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Khrouf</p></span>
\t\t\t\t  
\t\t\t\t  <p>Discussion</p>
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">13:00 14:30</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Déjeuner / Session e-Posters</h5>
                
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">14:30 16:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>La PMA à échelle humaine ou PMA du prêt à l'emploi au sur mesure :</h5>
                
                <a href=\"#collapse17\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse17\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  <span><p>14:30 - 14:55 : Nouvelles méthodes de stimulation ovarienne en FIV</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Zhioua F</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>14:55 - 15:20 : Qualité ovocytaire et activité mitochondriale</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Wolf JP.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>15:20 - 15:45 : What are the new criteria for the selection of embryos for vitrification</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Genoves A</p></span>
\t\t\t\t  
\t\t\t\t  <p>15:45 - 16:00 : Discussion</p>
\t\t\t\t 
\t\t\t\t  
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">16:00 16:30</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Pause café / Session e-Posters</h5>
                
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">16:30 18:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Le dialogue endomètre embryon :</h5>
                
                <a href=\"#collapse19\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse19\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  
\t\t\t\t  <span><p>17:00 - 18:00 : Comment améliorer l&#39;implantation embryonnaire chez les mauvaises répondeuses</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Schelstroetc L.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>17:00 - 17:20 : Evaluation de la qualité de l'endomètre</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Kéhila M.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>17:20 - 17:45 : Préparation de l'endomètre avant TEC</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Schelstroetc L.</p></span>
\t\t\t\t  
\t\t\t\t  <p>17:45 - 18:00 : Discussion</p>
\t\t\t\t  
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">18:00 18:30</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
\t\t\t\t<h5>Clôture &amp; Distribution des prix</h5>
              </div>
            </div>
\t\t\t
\t\t\t
          </div>
          <!--/Day 2 schedule--> 
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Schedule --> 
























     
                                        
                    <section id=\"review\"  class=\"section-review section-padding onepage-section\">

                        <div class=\"container\">
                            <div class=\"review-container wow slideInUp\">
                                <div class=\"review-quote-left\"><i class=\"fa fa-quote-left\"></i></div>
                                <div class=\"review-content\">
                                    <p>Pour le cancer du sein par exemple, entre l'apparition de la première cellule cancéreuse et le premier nodule senti par la femme ou son médecin, il se produit 8 ans et 3 mois (...) Le cancer atteint une masse de 1 milliards de cellules (soit un gramme ou 1 cm de diamètre) vers la 8ème année de son évolution c'est alors qu'il devient décelable. Mais ce stade de détection est bien trop éloigné du seuil d'irréversibilité (1 million de cellules). <strong>Il est possible d'agir bien avant</strong> : c'est le principe de la prévention active.</p>
                                    <div class=\"review-author\">André Gernez</div>
                                </div>
                                <div class=\"review-quote-right\"><i class=\"fa fa-quote-right\"></i></div>
                            </div>
                        </div>
                    </section>

                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                        
                                 <section id=\"Firmen\" class=\"section-firmeninfos section-padding onepage-section\">
                                 <div class=\"section-title-area\">
                                <h2 class=\"section-title\">Nos Sponsors</h2>
                            </div>
                            <div class=\"container-title-area\" >
                                <h3 class=\"container-title\" style=\"text-align:center;\">Platinium</h3>
                            </div>
                        <div class=\"container flex-container\">
\t\t\t\t\t\t\t\t
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.merck.tn/\" >
                                    <div class=\"firma-thumbnail \">
                                                                                <img width=\"208\" height=\"100\" src=\"";
        // line 986
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/Logo_Merck.png"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"/>                                </div>

                                </a>
                                
                            </div>
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://ibsa-international.com/therapeutic-areas/humanreproduction/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 994
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/ibsa.png"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            </div>
                            <div class=\"container-title-area\" >
                                <h3 class=\"container-title\" style=\"text-align:center;\">Gold</h3>
                            </div>
\t\t\t\t\t\t\t<div class=\"container flex-container\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=https://www.ferring.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1010
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/ferring.jpg"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.sigmatau.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1020
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/sigma.jpg"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"container-title-area\" >
                                <h3 class=\"container-title\" style=\"text-align:center;\">Bronze</h3>
                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"container flex-container\" >
                            
\t\t\t\t\t\t\t
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.medisinternational.cz/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1037
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/medis.gif"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"#\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1045
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/bayer.jpg"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.dms.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1053
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/dms.png"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.hitachi-aloka.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1061
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/hitachi.jpg"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.julphar.net/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/julphar.png"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.samsung.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/samsung.png"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.pfizer.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/pfizer.png"), "html", null, true);
        echo "\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            
                        </div>
                    </section>
                                  
                                  
                                   
                                 
                                 
                                 
                                 
                                 
                                 
                                 











                                        
                               
                    ";
        // line 1118
        $this->displayBlock('videoContent', $context, $blocks);
        // line 1121
        echo "
                    
                    <!--
                    


                    <div class=\"dark-wrapper\">
                        <div class=\"container inner\">
                            <div class=\"section-title-area\">
                                <h2 class=\"section-title\">from the journal</h2>
                            </div>
                            <div class=\"divide10\"></div>
                            <div class=\"carousel-wrapper\">
                                <div class=\"carousel carousel-boxed blog\">


                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"";
        // line 1138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/images/art/b1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat9\"><span><a href=\"#\">Urban</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Parturient Commodo Aenean</a></h4>
                                            <div class=\"meta\"><span class=\"date\">14 Oct 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia odio.</p>
                                        </div>

                                    </div>

                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"";
        // line 1149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/images/art/b2.jpg"), "html", null, true);
        echo "\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat12\"><span><a href=\"#\">Still Life</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Quam Mollis Ligula Nullam</a></h4>
                                            <div class=\"meta\"><span class=\"date\">12 Nov 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus. Lorem ipsum dolor sit amet.</p>
                                        </div>

                                    </div>

                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"";
        // line 1160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/images/art/b3.jpg"), "html", null, true);
        echo "\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat5\"><span><a href=\"#\">Photography</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Tellus Bibendum Parturient</a></h4>
                                            <div class=\"meta\"><span class=\"date\">23 Dec 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor. Sed posuere consectetur est at. Duis mollis, est.</p>
                                        </div>

                                    </div>
                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"";
        // line 1170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/images/art/b4.jpg"), "html", null, true);
        echo "\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat6\"><span><a href=\"#\">Journal</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Parturient Commodo Aenean</a></h4>
                                            <div class=\"meta\"><span class=\"date\">14 Oct 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia.</p>
                                        </div>

                                    </div>

                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"";
        // line 1181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/images/art/b5.jpg"), "html", null, true);
        echo "\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat12\"><span><a href=\"#\">Still Life</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Quam Mollis Ligula Nullam</a></h4>
                                            <div class=\"meta\"><span class=\"date\">12 Nov 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus. Lorem ipsum dolor sit amet.</p>
                                        </div>

                                    </div>

                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"";
        // line 1192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/images/art/b6.jpg"), "html", null, true);
        echo "\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat3\"><span><a href=\"#\">Nature</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Tellus Bibendum Parturient</a></h4>
                                            <div class=\"meta\"><span class=\"date\">23 Dec 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor. Sed posuere consectetur est at. Duis mollis, est non.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                                        



                    <script>
// Get the modal
                        var modal = document.getElementById('myModal');
                        var team = document.getElementById('team');
// Get the button that opens the modal
                        var btn = document.getElementById(\"myBtn\");
// Get the <span> element that closes the modal
                        var span = document.getElementsByClassName(\"close\")[0];
// When the user clicks the button, open the modal
                        btn.onclick = function() {
                        modal.style.display = \"block\";
                        team.style.display = \"none\";
                        \$('body').css('overflow', 'hidden');
                        }

// When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                        modal.style.display = \"none\";
                        team.style.display = \"block\";
                        \$('body').css('overflow-y', 'auto');
                        }

// When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                        if (event.target == modal) {
                        modal.style.display = \"none\";
                        team.style.display = \"block\";
                        \$('body').css('overflow-y', 'auto');
                        }
                        }
                    </script>\t\t\t









                    <section class=\"tcvpb_section_tc section_body_fullwidth section_no_column_margin section_equalize_5 section_with_header intro_text_after\">
                        <header>
                            <div class=\"tcvpb_container section-title-area\">
                                <h2 class=\"section-title\">Notre Equipe</h2>

                                <p>Une des meilleures équipes est à votre disposition pour tout renseignement</p>
                            </div>
                        </header>
                        <div class=\"tcvpb_section_content\">
                            <div class=\"tcvpb_container\">
                                <div class=\"tcvpb_column_tc_span3\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"";
        // line 1264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc2.jpg"), "html", null, true);
        echo "\" alt=\"Anna DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">Anna DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Wordpress Developer</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                Anna DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Wordpress Developer</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"";
        // line 1276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc2.jpg"), "html", null, true);
        echo "\" alt=\"Anna DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    Won several awards for analyzing lint in Fort Walton Beach, FL. Spent high school summers marketing foreign currency in Orlando, FL. Spent a year training race cars on Wall Street. Spoke at an international conference about lecturing about mannequins in Africa. At the moment I&rsquo;m donating wooden horses in Hanford, CA. My current pet project is importing action figures in Las Vegas, NV.
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tcvpb_column_tc_span3\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"";
        // line 1305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc1.jpg"), "html", null, true);
        echo "\" alt=\"GREGORY DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">GREGORY DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Creative Director</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                GREGORY DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Creative Director</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"";
        // line 1317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc1.jpg"), "html", null, true);
        echo "\" alt=\"GREGORY DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet metus sit amet erat hendrerit condimentum&hellip;
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tcvpb_column_tc_span2\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"";
        // line 1346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc3.jpg"), "html", null, true);
        echo "\" alt=\"CHRISTOFER DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">CHRISTOFER DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Marketing Specialist</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                CHRISTOFER DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Marketing Specialist</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"";
        // line 1358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc3.jpg"), "html", null, true);
        echo "\" alt=\"CHRISTOFER DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    Lead a team supervising the production of soap scum in the government sector. Spent 2001-2004 buying and selling jump ropes in Ohio. At the moment I&rsquo;m deploying birdhouses for the government. Spent high school summers researching xylophones in West Palm Beach, FL. Had moderate success lecturing about inflatable dolls in Gainesville, FL. Spent 2001-2007 deploying junk bonds in Prescott, AZ.
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tcvpb_column_tc_span2\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"";
        // line 1387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc5.jpg"), "html", null, true);
        echo "\" alt=\"ANTONI DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">ANTONI DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Lead designer</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                ANTONI DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Lead designer</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"";
        // line 1399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc5.jpg"), "html", null, true);
        echo "\" alt=\"ANTONI DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet metus sit amet erat hendrerit condimentum&hellip;
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tcvpb_column_tc_span2\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"";
        // line 1428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc4.jpg"), "html", null, true);
        echo "\" alt=\"JESSICA DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">JESSICA DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Manager</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                JESSICA DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Manager</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"";
        // line 1440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/test/img/doc4.jpg"), "html", null, true);
        echo "\" alt=\"JESSICA DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    Spent 2002-2008 donating chess sets for farmers. Earned praised for my work managing sauerkraut for farmers. Garnered an industry award while analyzing cod in Atlantic City, NJ. Developed several new methods for buying and selling licorice in the UK. Spent the better part of the 90&rsquo;s getting to know sausage in the government sector. Was quite successful at deploying hula hoops in Washington, DC.
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>





-->









                    <section id=\"contact\"                  class=\"section-contact section-padding onepage-section\">
                        <div class=\"container\">
                            <div class=\"row\">

                                <div class=\"col-sm-3 wow slideInUp\">
                                    <br>

                                    <div class=\"address-box\">

                                        <h3>Nous Contacter</h3>

                                        <div class=\"address-contact\">
                                            <span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-2x\"></i><i class=\"fa fa-map-marker fa-stack-1x fa-inverse\"></i></span>

                                            <div class=\"address-content\">BP 40, Port El Kantaoui<br> Sousse 4089, Tunisie</div>
                                        </div>

                                        <div class=\"address-contact\">
                                            <span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-2x\"></i><i class=\"fa fa-phone fa-stack-1x fa-inverse\"></i></span>

                                            <div class=\"address-content\">(+216) 73 000 000</div>
                                        </div>

                                        <div class=\"address-contact\">
                                            <span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-2x\"></i><i class=\"fa fa-envelope-o fa-stack-1x fa-inverse\"></i></span>

                                            <div class=\"address-content\"><a href=\"mailto:fkg.&#107;arl&#115;r&#117;h&#101;&#64;&#97;&#105;&#101;&#115;ec.&#100;&#101;\">cngot2016@gmail.com</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"col-sm-3 wow slideInUp\">
                                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.828511697894!2d10.587426615264889!3d35.902215480143305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd8997a10e343f%3A0x4e16de693cd5c73e!2sIBEROSTAR+Diar+El+Andalous!5e0!3m2!1sen!2sca!4v1476482745545\" width=\"900\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t\t<h3><strong>HEBERGEMENT A L'HOTEL DIAR EL ANDALOUS :</strong></h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Prix par jour & par personne en chambre double :</strong>
\t\t\t\t\t\t\t\t\t\t</br>

\t\t\t\t\t\t\t\t\t\t· Logement et petit déjeuner : 61 DT
\t\t\t\t\t\t\t\t\t\t</br>

\t\t\t\t\t\t\t\t\t\t· Demi Pension : 65 DT
\t\t\t\t\t\t\t\t\t\t</br>

\t\t\t\t\t\t\t\t\t\t· Supplément single : 16 DT
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
                            </div>

                        </div>

                    </section>
                </main><!-- #main -->
            </div><!-- #content -->
            
            
            <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">

                <div class=\"site-info\">
                    <div class=\"container\">
                        <div class=\"btt\">
                            <a class=\"back-top-top\" href=\"#page\" title=\"Back To Top\"><i class=\"fa fa-angle-double-up wow flash\" data-wow-duration=\"2s\"></i></a>
                        </div>
                        Copyright &copy; 2016        with \t&#10084;       <span class=\"sep\"> &ndash;  </span>
                        <a href=\"#\">VeLox IT</a>            </div>
                </div>
                <!-- .site-info -->


                


            </footer><!-- #colophon -->
        </div><!-- #page -->

        <script type='text/javascript' src='";
        // line 1567
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/fkg/assets/js/plugins8a54.js?ver=1.0.0"), "html", null, true);
        echo "'></script>
        <script type='text/javascript' src='";
        // line 1568
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/fkg/assets/js/bootstrap.mincce7.js?ver=4.0.0"), "html", null, true);
        echo "'></script>
        <script type='text/javascript' src='";
        // line 1569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/themes/fkg/assets/js/theme11a8.js?ver=20120206"), "html", null, true);
        echo "'></script>
        <script type='text/javascript' src='";
        // line 1570
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/js/wp-embed.min1c9b.js?ver=4.6.1"), "html", null, true);
        echo "'></script>




        <!-- caroussel -->
        <script src=\"";
        // line 1576
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/js/jquery.min.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 1577
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 1578
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/js/plugins.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 1579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-includes/caroussel/style/js/scripts.js"), "html", null, true);
        echo "\"></script>


\t<!-- programme -->
\t
\t<script src=\"";
        // line 1584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/prog/js/jquery.min.js"), "html", null, true);
        echo "\"></script> 
\t<script src=\"";
        // line 1585
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/prog/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
\t<script src=\"";
        // line 1586
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/prog/js/interface.js"), "html", null, true);
        echo "\"></script> 
\t<script src=\"";
        // line 1587
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/wp-content/prog/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>



        <script>
                    (function(i, s, o, g, r, a, m){i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function(){
                    (i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date(); a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
                    ga('create', 'UA-84546565-1', 'auto');
                    ga('send', 'pageview');

        </script>

        
    </body >

</html>
";
        
        $__internal_01a5944748cbd229fd7636ef4d0e611452950d032dd9c5853b7751dc7431bd3e->leave($__internal_01a5944748cbd229fd7636ef4d0e611452950d032dd9c5853b7751dc7431bd3e_prof);

    }

    // line 1118
    public function block_videoContent($context, array $blocks = array())
    {
        $__internal_b23e115e7f403ecd92a6445a4bb83789a7edd4c93553f5efbeeb2c38e3cdb53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23e115e7f403ecd92a6445a4bb83789a7edd4c93553f5efbeeb2c38e3cdb53e->enter($__internal_b23e115e7f403ecd92a6445a4bb83789a7edd4c93553f5efbeeb2c38e3cdb53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoContent"));

        // line 1119
        echo "                        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CNGOTBundle:Video:liste"));
        echo "
                    ";
        
        $__internal_b23e115e7f403ecd92a6445a4bb83789a7edd4c93553f5efbeeb2c38e3cdb53e->leave($__internal_b23e115e7f403ecd92a6445a4bb83789a7edd4c93553f5efbeeb2c38e3cdb53e_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1888 => 1119,  1882 => 1118,  1856 => 1587,  1852 => 1586,  1848 => 1585,  1844 => 1584,  1836 => 1579,  1832 => 1578,  1828 => 1577,  1824 => 1576,  1815 => 1570,  1811 => 1569,  1807 => 1568,  1803 => 1567,  1673 => 1440,  1658 => 1428,  1626 => 1399,  1611 => 1387,  1579 => 1358,  1564 => 1346,  1532 => 1317,  1517 => 1305,  1485 => 1276,  1470 => 1264,  1395 => 1192,  1381 => 1181,  1367 => 1170,  1354 => 1160,  1340 => 1149,  1326 => 1138,  1307 => 1121,  1305 => 1118,  1271 => 1087,  1260 => 1079,  1249 => 1071,  1236 => 1061,  1225 => 1053,  1214 => 1045,  1203 => 1037,  1183 => 1020,  1170 => 1010,  1151 => 994,  1140 => 986,  411 => 260,  356 => 208,  306 => 163,  298 => 160,  290 => 157,  282 => 154,  261 => 136,  257 => 135,  252 => 133,  245 => 129,  229 => 118,  225 => 117,  221 => 116,  201 => 105,  183 => 90,  179 => 89,  172 => 85,  168 => 84,  162 => 81,  156 => 78,  152 => 77,  145 => 73,  141 => 72,  137 => 71,  129 => 66,  124 => 64,  120 => 63,  106 => 52,  102 => 51,  98 => 50,  94 => 49,  67 => 25,  63 => 24,  59 => 23,  53 => 20,  48 => 18,  44 => 17,  40 => 16,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"fr-FR\">

    <!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
        <link rel=\"pingback\" href=\"xmlrpc.php\">
        <title>CNGOT</title>
        <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
        <link rel='dns-prefetch' href='http://s.w.org/' />
        
        
        <!-- caroussel -->
        <link href=\"{{asset('bundles/cngot/wp-includes/caroussel/style/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('bundles/cngot/wp-includes/caroussel/style/css/plugins.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('bundles/cngot/wp-includes/caroussel/style.css')}}\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href=\"{{asset('bundles/cngot/wp-includes/caroussel/style/type/icons.css')}}\" rel=\"stylesheet\">
        
        <!--
\t<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/prog/css/style.css')}}assets/css/bootstrap.min.css\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"{{asset('bundles/cngot/wp-content/prog/css/style.css')}}\" type=\"text/css\">
\t<link href=\"{{asset('bundles/cngot/wp-content/prog/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900\" rel=\"stylesheet\">

-->

        <script type=\"text/javascript\">
            window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/2\\/72x72\\/\", \"ext\":\".png\", \"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/2\\/svg\\/\", \"svgExt\":\".svg\", \"source\":{\"concatemoji\":\"https:\\/\\/fkg-karlsruhe.de\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=4.6.1\"}};
            !function(a, b, c){function d(a){var c, d, e, f, g, h = b.createElement(\"canvas\"), i = h.getContext && h.getContext(\"2d\"), j = String.fromCharCode; if (!i || !i.fillText)return!1; switch (i.textBaseline = \"top\", i.font = \"600 32px Arial\", a){case\"flag\":return i.fillText(j(55356, 56806, 55356, 56826), 0, 0), !(h.toDataURL().length < 3e3) && (i.clearRect(0, 0, h.width, h.height), i.fillText(j(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), c = h.toDataURL(), i.clearRect(0, 0, h.width, h.height), i.fillText(j(55356, 57331, 55356, 57096), 0, 0), d = h.toDataURL(), c !== d); case\"diversity\":return i.fillText(j(55356, 57221), 0, 0), e = i.getImageData(16, 16, 1, 1).data, f = e[0] + \",\" + e[1] + \",\" + e[2] + \",\" + e[3], i.fillText(j(55356, 57221, 55356, 57343), 0, 0), e = i.getImageData(16, 16, 1, 1).data, g = e[0] + \",\" + e[1] + \",\" + e[2] + \",\" + e[3], f !== g; case\"simple\":return i.fillText(j(55357, 56835), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0]; case\"unicode8\":return i.fillText(j(55356, 57135), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0]; case\"unicode9\":return i.fillText(j(55358, 56631), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0]}return!1}function e(a){var c = b.createElement(\"script\"); c.src = a, c.type = \"text/javascript\", b.getElementsByTagName(\"head\")[0].appendChild(c)}var f, g, h, i; for (i = Array(\"simple\", \"flag\", \"unicode8\", \"diversity\", \"unicode9\"), c.supports = {everything:!0, everythingExceptFlag:!0}, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], \"flag\" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function(){c.DOMReady = !0}, c.supports.everything || (g = function(){c.readyCallback()}, b.addEventListener?(b.addEventListener(\"DOMContentLoaded\", g, !1), a.addEventListener(\"load\", g, !1)):(a.attachEvent(\"onload\", g), b.attachEvent(\"onreadystatechange\", function(){\"complete\" === b.readyState && c.readyCallback()})), f = c.source || {}, f.concatemoji?e(f.concatemoji):f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))}(window, document, window._wpemojiSettings);
        </script>
        <style type=\"text/css\">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' id='fkg-fonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C500%2C600%2C700%2C300%2C100%2C800%2C900%7COpen%2BSans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
        <link rel='stylesheet' id='fkg-animate-css'  href='{{asset('bundles/cngot/wp-content/themes/fkg/assets/css/animate.min8a54.css?ver=1.0.0')}}' type='text/css' media='all' />
        <link rel='stylesheet' id='fkg-fa-css'  href='{{asset('bundles/cngot/wp-content/themes/fkg/assets/css/font-awesome.min474a.css?ver=4.4.0')}}' type='text/css' media='all' />
        <link rel='stylesheet' id='fkg-bootstrap-css'  href='{{asset('bundles/cngot/wp-content/themes/fkg/assets/css/bootstrap.mincce7.css?ver=4.0.0')}}' type='text/css' media='all' />
        <link rel='stylesheet' id='fkg-style-css'  href='{{asset('bundles/cngot/wp-content/themes/fkg/style1c9b.css?ver=4.6.1')}}' type='text/css' media='all' />
        <style id='fkg-style-inline-css' type='text/css'>
            #main .video-section section.hero-slideshow-wrapper{background:transparent}.hero-slideshow-wrapper:after{position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0,0,0,0.3);display:block;content:\"\"}.body-desktop .parallax-hero .hero-slideshow-wrapper:after{display:none!important}.parallax-hero .parallax-mirror:after{position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0,0,0,0.3);display:block;content:\"\"}.parallax-hero .hero-slideshow-wrapper:after{display:none!important}.parallax-hero .parallax-mirror:after{position:absolute;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0,0,0,0.3);display:block;content:\"\"}a,.screen-reader-text:hover,.screen-reader-text:active,.screen-reader-text:focus,.header-social a,.fkg-menu a:hover,.fkg-menu ul li a:hover,.fkg-menu li.fkg-current-item>a,.fkg-menu ul li.current-menu-item>a,.fkg-menu>li a.menu-actived,.fkg-menu.fkg-menu-mobile li.fkg-current-item>a,.site-footer a,.site-footer .footer-social a:hover,.site-footer .btt a:hover,.highlight,#comments .comment .comment-wrapper .comment-meta .comment-time:hover,#comments .comment .comment-wrapper .comment-meta .comment-reply-link:hover,#comments .comment .comment-wrapper .comment-meta .comment-edit-link:hover,.btn-theme-primary-outline,.sidebar .widget a:hover,.section-services .service-item .service-image i,.counter_item .counter__number,.team-member .member-thumb .member-profile a:hover,.icon-background-default{color:#68c632}input[type=\"reset\"],input[type=\"submit\"],input[type=\"submit\"],.nav-links a:hover,.btn-theme-primary,.btn-theme-primary-outline:hover,.card-theme-primary,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce button.button.alt{background:#68c632}.btn-theme-primary-outline,.btn-theme-primary-outline:hover,.pricing__item:hover,.card-theme-primary,.entry-content blockquote{border-color:#68c632}.site-footer{background-color:#848484}.site-footer .footer-connect .follow-heading{color:rgba(255,255,255,0.9)}
        </style>


        <script type='text/javascript'>
            /* <![CDATA[ */
            var fkg_js_settings = {\"fkg_disable_animation\":\"\", \"fkg_disable_sticky_header\":\"\", \"fkg_vertical_align_menu\":\"\", \"hero_animation\":\"flipInX\", \"hero_speed\":\"5000\"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='{{asset('bundles/cngot/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4')}}'></script>
        <script type='text/javascript' src='{{asset('bundles/cngot/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1')}}'></script>
        <link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"xmlrpc0db0.php?rsd\" />
        <link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"{{asset('bundles/cngot/wp-includes/wlwmanifest.xml')}}\" /> 
        <meta name=\"generator\" content=\"WordPress 4.6.1\" />
        <link rel=\"canonical\" href=\"index.html\" />
        <link rel='shortlink' href='index.html' />
        <style type=\"text/css\">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <link rel=\"icon\" href=\"{{asset('bundles/cngot/logo.png')}}\" sizes=\"32x32\" />
        <link rel=\"icon\" href=\"{{asset('bundles/cngot/logo.png')}}\" sizes=\"192x192\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
        <meta name=\"msapplication-TileImage\" content=\"https://fkg-karlsruhe.de/wp-content/uploads/2016/06/cropped-FKG-Logo-512-1-270x270.png\" />


        <script type=\"text/javascript\" src=\"{{asset('bundles/cngot/wp-content/themes/test/js/jquery.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('bundles/cngot/wp-content/themes/test/js/jquery-ui.js')}}\"></script>


        <script type=\"text/javascript\" src=\"{{asset('bundles/cngot/wp-content/themes/test/js/mediaelement/mediaelement-and-player.min.js')}}\"></script>


        <script type=\"text/javascript\" src=\"{{asset('bundles/cngot/wp-content/themes/test/js/scripts.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('bundles/cngot/wp-content/themes/test/js/init.js')}}\"></script>



        <link rel=\"stylesheet\" id=\"inspirado_core_icons-css\" href=\"{{asset('bundles/cngot/wp-content/themes/test/core-icons/core_style.css')}}\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" id=\"inspirado_main_css-css\" href=\"{{asset('bundles/cngot/wp-content/themes/test/style.css')}}\" type=\"text/css\" media=\"all\">






    </head>

    <body id=\"bo\" class=\"home page page-id-2 page-template page-template-template-frontpage page-template-template-frontpage-php wp-custom-logo sticky-header\">
        <div id=\"page\" class=\"hfeed site\">
            <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
            <header id=\"masthead\" class=\"site-header\" role=\"banner\">
                <div class=\"container\">
                    <div class=\"site-branding\">
                        <div class=\"site-brand-inner has-logo-img has-title has-desc\"><div class=\"site-logo-div\"><a href=\"{{path('cngot_homepage')}}\" class=\"custom-logo-link\" rel=\"home\" itemprop=\"url\"><img width=\"100px\" height=\"100px\" src=\"{{asset('bundles/cngot/logo1.png')}}\" class=\"custom-logo\" alt=\"cropped-FKG-Logo-512.png\" itemprop=\"logo\" srcset=\"{{asset('bundles/cngot/logo1.png')}}\" sizes=\"(max-width: 20px) 100vw, 20px\" /></a></div><p class=\"site-title\"><a class=\"site-text-logo\" href=\"{{path('cngot_homepage')}}\" rel=\"home\" style=\"font-size:20px;\">Congrès du CNGOT</a></p><p class=\"site-description\">2éme édition</p></div>                </div>
                    <!-- .site-branding -->

                    <div class=\"header-right-wrapper\">
                        <a href=\"#site-navigation\" id=\"nav-toggle\">Menu<span></span></a>
                        <nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\">
                            <ul class=\"fkg-menu\">
                                <li id=\"menu-item-14\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-14\"><a href=\"index.html#about\">à propos</a></li>
                                <li id=\"menu-item-90\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-90\"><a href=\"index.html#vortraege\">Notre Programme</a></li>
                                <li id=\"menu-item-36\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-36\"><a href=\"index.html#Firmen\">Nos sponsors</a></li>
                                <li id=\"menu-item-15\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-15\"><a href=\"index.html#contact\">Nous Contacter</a></li>
                                <li id=\"menu-item-16\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-16\"><a href=\"{{path('fos_user_registration_register')}}\">S'inscrire</a></li>
                                <li id=\"menu-item-16\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-16\"><a href=\"{{path('fos_user_security_login')}}\">Se connecter</a></li>
                                <li id=\"menu-item-16\" style=\"padding-top: 2%;\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-16\"><img data-mfp-src=\"{{asset('bundles/cngot/wp-content/uploads/2016/06/tunisia.gif')}}\" src=\"{{asset('bundles/cngot/wp-content/uploads/2016/06/tunisia.gif')}}\"></li>

                            </ul>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                </div>
            </header><!-- #masthead -->

            <div id=\"content\" class=\"site-content\">
                <main id=\"main\" class=\"site-main\" role=\"main\">
                    <section id=\"hero\" class=\" \" style=\" background-image: url('{{asset('bundles/cngot/wp-content/uploads/2016/06/back.jpg')}}');background-size: 100% 100%;\">
                        <div class=\"container\" style=\"padding-top: 10%; padding-bottom: 10%;\">
                            <div class=\"hero__content hero-content-style1\">
                                <h2 class=\"hero-large-text\">
                                    <img class=\"alignnone wp-image-10 size-full\" src=\"{{asset('bundles/cngot/logo-16.png')}}\" alt=\"Logo full_colors\" width=\"650\" style=\" transform: translate(9%,20px);\" />
                                </h2>
                                <a href=\"{{path('fos_user_registration_register')}}\" class=\"btn btn-theme-primary btn-lg\">S'inscrire</a>
                                <a href=\"{{path('fos_user_security_login')}}\" class=\"btn btn-theme-secondary btn-lg\"> Se Connecter</a>



                            </div>
                        </div>

                    </section>
                    <section id=\"about\"  class=\"section-about section-padding onepage-section\">

                        <div class=\"container\">
                            <div class=\"section-title-area\">
                                <h2 class=\"section-title\">À propos de CNGOT</h2>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-lg-6  col-sm-12 wow slideInUp container-fluid about-images\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-sm-12\">
                                            <img data-mfp-src=\"{{asset('bundles/cngot/wp-content/uploads/2016/07/photo1.jpg')}}\" src=\"{{asset('bundles/cngot/wp-content/uploads/2016/07/photo1.jpg')}}\">
                                        </div>
                                        <div class=\"col-md-6 col-sm-12\">
                                            <img data-mfp-src=\"{{asset('bundles/cngot/wp-content/uploads/2016/07/photo2.jpg')}}\" src=\"{{asset('bundles/cngot/wp-content/uploads/2016/07/photo2.jpg')}}\">
                                        </div>
                                        <div class=\"col-md-6 col-sm-12\">
                                            <img data-mfp-src=\"{{asset('bundles/cngot/wp-content/uploads/2016/07/photo3.jpg')}}\" src=\"{{asset('bundles/cngot/wp-content/uploads/2016/07/photo3.jpg')}}\">
                                        </div>
                                        <div class=\"col-md-6 col-sm-12\">
                                            <img data-mfp-src=\"{{asset('bundles/cngot/wp-content/uploads/2016/07/photo4.jpg')}}\" src=\"{{asset('bundles/cngot/wp-content/uploads/2016/07/photo4.jpg')}}\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6  col-sm-12 wow slideInUp\">
                                    <h5>CHERS COLLÈGUES ET AMI(E)S,</h5>
                                    <p>Nous vous annonçons l’organisation du 3 ème Congrès du Collège National de

Gynécologie-Obstétrique de Tunisie, conjointement avec le 3ème Congrès

National de l’association Tunisienne des Médecins Embryologistes, qui se

tiendront les 16 ET 17 Décembre 2016 à l’hôtel DIAR EL ANDALOUS à

SOUSSE.                                        </p>
                                    <p>La date limite de soumission des e-posters est le <strong>27 novembre 2016</strong>.</p>
                                    <p>Pour soumettre un abstract, veuillez d&#39;abord vous inscrire au congrès sur notre

site web <strong>cngot.tn</strong></p>
                                    <p>Après création de votre compte vous aurez accès à la page de soumission des

abstracts qui doivent répondre au modèle : Introduction, Matériel et Méthodes,

Résultats et Conclusions. Les travaux sélectionnés seront présentés sous forme

de posters électroniques. Les meilleurs e-posters seront sélectionnés pour

communication orale.</p>

                                </div>
                                <br><br>
                                <p>L’inscription aux ateliers et aux masterclass est obligatoire et limitée à <strong>30

participants par atelier et 60 personnes par masterclass</strong>.</p>

                            </div>
                        </div>
                    </section>
                    <section id=\"counter\"                  class=\"section-counter section-padding onepage-section\">
                        <div class=\"container\">
                            <div class=\"row\">

                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"counter_item\">
                                        <div class=\"counter__number\">
                                            <span class=\"n counter\">{{users|length}}</span>
                                        </div>
                                        <div class=\"counter_title\">Inscrits</div>
                                    </div>
                                </div>


                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"counter_item\">
                                        <div class=\"counter__number\">
                                            <span class=\"n counter\">2</span>
                                        </div>
                                        <div class=\"counter_title\">Editions</div>
                                    </div>
                                </div>


                                <div class=\"col-sm-6 col-md-4\">
                                    <div class=\"counter_item\">
                                        <div class=\"counter__number\">
                                            <span class=\"n counter\">2</span>
                                        </div>
                                        <div class=\"counter_title\">Sponsors</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                                        
                                
                                        
                                        
                    <section id=\"review\"  class=\"section-review section-padding onepage-section\">

                        <div class=\"container\">
                            <div class=\"review-container wow slideInUp\">
                                <div class=\"review-quote-left\"><i class=\"fa fa-quote-left\"></i></div>
                                <div class=\"review-content\">
                                    <p>Pour le cancer du sein par exemple, entre l'apparition de la première cellule cancéreuse et le premier nodule senti par la femme ou son médecin, il se produit 8 ans et 3 mois (...) Le cancer atteint une masse de 1 milliards de cellules (soit un gramme ou 1 cm de diamètre) vers la 8ème année de son évolution c'est alors qu'il devient décelable. Mais ce stade de détection est bien trop éloigné du seuil d'irréversibilité (1 million de cellules). <strong>Il est possible d'agir bien avant</strong> : c'est le principe de la prévention active.</p>
                                    <div class=\"review-author\">André Gernez</div>
                                </div>
                                <div class=\"review-quote-right\"><i class=\"fa fa-quote-right\"></i></div>
                            </div>
                        </div>
                    </section>




<center>

\t<img src=\"{{asset('bundles/cngot/wp-content/prog.jpg')}}\"  height=\"500\" width=\"900\"/>


</center>





<style>


.day-time-m {
\tpadding-bottom:70px;
\ttext-align:center;
}
.day-time-m ul {
\tpadding:0;
}
.day-time-m li {
\tborder:3px solid #000000;
\tdisplay:inline-block;
\tfont-size:20px;
\tfont-weight:300;
\tline-height:35px;
\tlist-style:outside none none;
\tmargin:0 10px;
\ttext-align:center;
\tposition:relative;
}
.day-time-m li.active, .day-time-m li:hover {
\tbackground:#68c632 none repeat scroll 0 0;
\tborder-color:#68c632;
}
.day-time-m li.active::after {
  border-color: hsl(96, 63%, 43%) hsla(0, 0%, 0%, 0) hsla(0, 0%, 0%, 0);
  border-style: solid;
  border-width: 12px;
  content: \"\";
  height: 12px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  top: 42px;
  width: 12px;
}
.day-time-m li a {
\tcolor:#000000;
\tdisplay:block;
\tpadding:3px 25px;
}
.conference-time-list {
\tborder-top:3px solid #393939;
\toverflow:hidden;
\tposition:relative;
}
.conference-time-list:nth-last-child(1) {
\tborder-bottom:3px solid #393939;
}
.conf-user-time {
\tcolor:#000000;
\tfloat:left;
\tpadding:15px;
\ttext-align:center;
\twidth:135px;
\tfont-weight:300;
}
.conf-user-time span.time {
\tdisplay:block;
\tfont-size:44px;
\tline-height:60px;
}
.time-schedule {
\tdisplay:block;
\tfont-size:20px;
\ttext-align:right;
}
.conf-user-img {
\tfloat:left;
\tpadding:29px 20px;
\twidth:100px;
}
.conf-user-info {
\tfloat:left;
\tpadding:34px 10px;
\twidth:515px;
}
.conf-user-info h5 {
\tcolor:#68c632;
\tmargin-bottom:10px;
}
.conf-user-info h6 {
  color: hsl(0, 0%, 56%);
  font-size: 16px;
  font-weight: 300;
  margin: 0 auto;
}
.conf-user-content {
\toverflow:hidden;
\tpadding-top:25px;
}
.conf-user-content p {
\tcolor:#000000;
\tfont-size:16px;
}
.conf-close {
\tbackground:#68c632 none repeat scroll 0 0;
\tborder-radius:50%;
\tcolor:#000000 !important;
\tdisplay:inline-block;
\tfont-size:31px;
\theight:52px;
\tline-height:52px;
\tposition:absolute;
\tright:23px;
\ttext-align:center;
\ttop:45px;
\twidth:52px;
\tcursor:pointer;
}
.conf-close:hover {
\tcolor:#fff;
}
.conf-close.menu-down {
\ttransform:rotate(89deg);
}


</style>


  





<!-- Schedule -->
<section id=\"schedule\" class=\"conference-schedule section-padding secondary-bg\">
  <div class=\"container\">
    <div class=\"row\"> 
      <!-- Heading -->
      <div class=\"col-md-12\">
        <div class=\"heading-sec\">
          <div class=\"section-title-area\">
                                <h2 class=\"section-title\">Notre Programme</h2>
                            </div>
        </div>
      </div>
      <!-- /Heading --> 
    </div>
    <div class=\"row\">
      <div class=\"col-sm-12 col-lg-8 col-lg-offset-2\">
        <div class=\"day-time-m\">
          <ul data-tabs=\"tabs\">
            <li class=\"active\"><a href=\"#day1\" data-toggle=\"tab\">Jour 1</a></li>
            <li><a href=\"#day2\" data-toggle=\"tab\">Jour 2</a></li>
          </ul>
        </div>
        <div id=\"my-tab-content\" class=\"tab-content\"> 
          <!--Day 1 schedule-->
          <div class=\"tab-pane active\" id=\"day1\">
            
\t\t\t
\t\t\t<!-- Heading -->
          <div class=\"section-header \">
            <h5>Master class : 8h30 - 10h00 : en parallèle dans 4 salles</h5>
\t\t\t<span><p><strong>Master class 1</strong> : Conduite à tenir devant une hémorragie de la délivrance par atonie utérine/ Triple ligature &amp; Ligature des artères hypogastriques</p><p style=\"color:blue; text-align: right;\">Dr Chaabene Kais</p></span>
\t\t\t
\t\t\t<span><p><strong>Master class 2</strong> : Traitement coelio-chirurgical des troubles de la statique pelvienne</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Bouguizene Sassi</p></span>
\t\t\t
\t\t\t<span><p><strong>Master class 3</strong> : Astuces en coelio, hystéro et laparotomie pour aborder aisément les fibromes difficiles</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Mathlouthi Nabil &amp; Dr Gargouri Linda</p></span>
\t\t\t
\t\t\t<span><p><strong>Master class 4</strong> : Cerclage cervical : du chaud au froid</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Rzigua et col.</p></span>
          </div>
      <!-- /Heading --> 
\t\t\t
\t\t\t
\t\t\t
            <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">08:00 09:30</span> <span class=\"time-schedule\"></span> </div>
             
              <div class=\"conf-user-info\">
                <h5>Inscription</h5>
                
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">10:00 10:50</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>La macrosomir en 2016:</h5>
                <h6>pourquoi et comment?</h6>
                <a  href=\"#collapse2\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse2\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    \t\t\t
                    \t\t\t<span><p>10:00 - 10:45 : La macrosomie : Définitions &amp; Dépistage</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Khlifi Oussema.</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>10h20 - 10h40 : Peut-on prévenir la dystocie des épaules ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr. Fkih Chiraz Dr Hnifi Chokri Dr Mejri Oumayma.</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>10h40 - 10h50 : Discussion</p>
\t\t\t\t\t
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">10:50 11:10</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5> Pause café</h5>
              
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">11:20 12:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Le traitement hormonal à la loupe :</h5>
              
                <h6></h6>
                <a  href=\"#collapse6\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse6\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>11:10 - 11:35 : La contraception critères d'acceptabilité de l'OMS</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Chelly Dalenda Dr Mraihi Fethi</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>11:35 - 11:50 : Le THS : retour vers le futur ? Les nouvelles recommandations</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Kaabia Ons Dr Cherif Ons</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>11:50 - 12:00 : Discussion</p>
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">12:00 13:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>La césarienne en pratique:</h5>
              
                <h6>Renonçons aux dogmes</h6>
                <a  href=\"#collapse4\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse4\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>12:00 - 12:30 : Les nouvelles recommandations pour les temps opératoires en césarienne</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Mrazguia Chaouki Dr Farza Ines.</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>12:30 - 12:50 : La prévention per et post-césarienne des infections de la paroi.</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Khlifi Abdeljelil Dr Kraiem Sabrine</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>12:50 - 13:00 : Discussion</p>
\t\t\t\t\t
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">13:00 14:30</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5> Déjeuner / Session e-Posters</h5>
              
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">14:30 15:35</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Prise en charge en ambulatoire des GAR:</h5>
                <h6>Sortons des sentiers battus</h6>
                <a  href=\"#collapse3\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse3\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>14:30 - 14h50 : La surveillance en ambulatoire des pré-éclampsies</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Achour Radhouane Dr Slim Khedher</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>14:50 - 15:10 : La surveillance en ambulatoire des RCIU</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Lessaad Mkaouar Dr Sadok Derouiche Dr Wissal Jaafer</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>15:10 - 15:30 : La surveillance en ambulatoire des RPM</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Abouda Hessine Dr Mgdoud Khaoula Dr Arij Bouzid</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>15:30 - 15:35 : Discussion</p>
                  </div>
                </div>
              </div>
            </div>
            
            
            
\t\t\t
\t\t\t <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">15:35 16:45</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Table ronde:</h5>
              
                <h6>Le gynécologue Obstétricien de demain</h6>
                <a  href=\"#collapse7\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse7\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    
\t\t\t\t\t<span><p>15:35 - 16:00 : Le processus d'accréditation en médecine</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Mtiraoui</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>16:00 - 16:20 : La réforme du cursus du résident en GO</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Khairi Hédi Dr Ben Abid Haifa</p></span>
\t\t\t\t\t
\t\t\t\t\t<p>16:20 - 16:45 : Discussion</p>
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t
            
\t\t\t <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">16:45 17:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Pause café / Session e-Posters</h5>
              
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t
            
            
\t\t\t <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">17:00 18:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Les prescriptions en obstétriques:</h5>
              
                <h6>Qui croire l&#39;Autorisation de Mise sur le Marché ou l&#39;Evidence Based Medecine ?</h6>
                <a  href=\"#collapse9\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse9\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>17:00 - 17:20 : Quel protocole pour la maturation cervicale et le déclanchement du travail à terme ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Ragmoun Houssem Dr Zemni Zeineb</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>17:20 - 17:40 : Quel protocole pour la prévention des HPP chez les femmes à risque ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Triki et col.</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>17:40 - 18:00 : Quel protocole de neuro-protection et pour quelles patientes ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Souilem Leila, Dr Bouchahda Rim Dr Methamem Marwa</p></span>
\t\t\t\t\t
                  </div>
                </div>
              </div>
           
          </div>
            
            
\t\t\t
\t\t\t<div class=\"section-footer \">
\t\t\t\t<h2>Ateliers ATME</h2>
\t\t\t\t
\t\t\t\t\t<div class=\"conference-time-list\">
\t\t\t\t\t\t<div class=\"conf-user-time\"> <h3>1er ATELIER :</h3> <span class=\"time-schedule\"></span> </div>
\t\t\t\t\t\t<div class=\"conf-user-info\">
\t\t\t\t\t\t\t<h5>L’ICSI : Indications, Techniques et Interprétation des Résultats</h5>
              
\t\t\t\t\t\t\t<a  href=\"#collapse20\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"collapse\" id=\"collapse20\" aria-expanded=\"false\" style=\"height: 0px;\">
\t\t\t\t\t\t\t\t<div class=\"conf-user-content\">
\t\t\t\t\t\t\t\t\t<p>14:30 - 15:00 : Accueil, présentation</p>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>15:00 - 15:30 : Analyse et Préparation du Sperme</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Mehdi M</p></span>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>15:30 - 16:00 : Les Indications de l’ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Hafhouf E</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>16:00 - 16:20 : Recueil et Manipulation des CCO /Ovocytes</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Fourati S</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>16:20 - 16:45 : ICSI : Micro-injection, Fécondation et Technique de Culture Embryonnaire</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Kacem K</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>16:45 - 17:15 : <strong>Pause Café</strong></p>

\t\t\t\t\t\t\t\t\t<span><p>17:15 - 17:35 : Développement Embryonnaire, Scoring &amp; Sélection</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Jallad S</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>17:35 - 17:55 : Comparaison des Résultats FIV /ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Kacem O</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>17:55 - 18:15 : Interprétation des Résultats de l’ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr AJINA M</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>18:15 - 18:35 : Les Facteurs Pronostiques de la Réussite de l’ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr SALLAMI A</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>18:35 - 18:55 : Démonstration en Vidéo de la technique d’ICSI</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Ben Mustapha H</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>18:55 - 19:10 : Discussion Générale et recommandations</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr AJINA M&amp; Dr ZHIOUA-SKHIRI A</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"conference-time-list\">
\t\t\t\t\t\t<div class=\"conf-user-time\"> <h3>2 ème ATELIER :</h3> <span class=\"time-schedule\"></span> </div>
\t\t\t\t\t\t<div class=\"conf-user-info\">
\t\t\t\t\t\t\t<h5>Vitrification des Embryons &amp; Ovocytes</h5>
              
\t\t\t\t\t\t\t<a  href=\"#collapse22\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"collapse\" id=\"collapse22\" aria-expanded=\"false\" style=\"height: 0px;\">
\t\t\t\t\t\t\t\t<div class=\"conf-user-content\">
\t\t\t\t\t\t\t\t\t<p>14:30 - 15:00 : Accueil, présentation</p>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>15:00 - 15:35 : Bases fondamentales de la vitrification</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr E. Mokaddem</p></span>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>15:35 - 16:05 : Aspects pratiques et critères de sucées de la vitrification ovocytaire</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr H. Elloumi</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span><p>16:05 - 16:40 : Aspects pratiques et critères de sucées de la vitrification embryonnaires</p>
\t\t\t\t\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr A. Genoves</p></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>16:45 - 17:15 : <strong>Pause Café</strong></p>

\t\t\t\t\t\t\t\t\t<p>17:15 - 17:55 : vitrification des ovocytes : Atelier pratique</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>17:55 - 18:35 : vitrification des embryons : Atelier pratique</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t</div>
            
          </div>
          <!--/Day 1 schedule--> 
          
          <!--Day 2 schedule-->
          <div class=\"tab-pane\" id=\"day2\">
\t\t  
\t\t  
\t\t\t<!-- Heading -->
          <div class=\"section-header \">
            <h5>Ateliers CNGOT de 8h30 à 10h00 en parallèle dans 4 salles</h5>
\t\t\t
\t\t\t<span><p><strong>Atelier 1</strong> : Interprétation raisonnée de l'ERCF</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Sami Mahjoub Dr Kouira et col.</p></span>
\t\t\t
\t\t\t<span><p><strong>Atelier 2</strong> : Coupes obligatoires de dépistage à l'écho T2</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Bibi Dr Chelly Dr Meddeb Dr Kaabia</p></span>
\t\t\t
\t\t\t<span><p><strong>Atelier 3</strong> : Manœuvres obstétricales et accouchement instrumental</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr El Faleh R. et col.</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Ben Regaya Lassad Dr Aymen Maiez</p></span>
\t\t\t
\t\t\t<span><p><strong>Atelier 4</strong> : Biopsies et ponctions mammaires - cytologies ganglionnaires</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Bakir et col.</p>
\t\t\t<p style=\"color:blue; text-align: right;\">Dr Hidar S. et col.</p></span>
\t\t\t
          </div>
\t\t\t<!-- /Heading --> 
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">08:30 10:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Les anomalies spermatiques et l'infertilité masculine</h5>
                
                <a href=\"#collapse16\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse16\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  <span><p>08:00 - 08:55 : Génétique des tératozoospermies syndromiques</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Ibala S.</p></span>
\t\t\t\t  
\t\t\t\t  <p>08:55 - 09:45 : Infection du sperme et infertilité:</p>
\t\t\t\t  <span><p>08:55 - 09:20 : Point de vue de l'infectiologue</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Loussaief C.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>09:20 - 09:45 : Point de vue du biologiste :PEC d'une leucospermie chez un couple infertile</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Wolf JP.</p></span>
\t\t\t\t  
\t\t\t\t  <p>09:45 - 10:00 : Discussion</p>
\t\t\t\t  
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t  
            <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">10:00 11:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Comment endiguer l&#39;épidémie de prématurité en Tunisie ?</h5>
              
                <a  href=\"#collapse10\" data-toggle=\"collapse\" role=\"button\" class=\"conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse10\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
                    <span><p>10:00 - 10:20 : Peut-on prédire la prématurité en 2016 ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Hachéni Feten Dr Bannour Imene</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>10:20 - 10:40 : Quel protocole de maturation pulmonaire fœtale en 2016 ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Briki Raja Dr Derwiche Mouna</p></span>
\t\t\t\t\t
\t\t\t\t\t<span><p>10:40 - 11:00 : 40 SA est-il le nouveau 38 SA ?</p>
\t\t\t\t\t<p style=\"color:blue; text-align: right;\">Dr Oueslati et col.</p></span>
\t\t\t\t\t
                  </div>
                </div>
              </div>
            </div>
\t\t\t
            <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">11:00 11:15</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Pause café / Session e-Posters</h5>
                
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t
            <div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">11:15 12:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Endocrinopathies et fertilité</h5>
                
                <a href=\"#collapse12\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse12\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  
\t\t\t\t  <span><p>11:15 - 11:30 : Dysthyroidies et fertilité féminine</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Khochtali I.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>11:30 - 11:50 : La metformine à toutes les sauces ?</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr El Euch</p></span>
\t\t\t\t  
\t\t\t\t  <p>11:50 - 12:00 : Discussion</p>
\t\t\t\t  
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">12:00 13:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Préservation de la fertilité féminine et cancer</h5>
                
                <a href=\"#collapse14\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse14\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  <span><p>12:00 - 12:25 : Point de vue du biologiste</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Elloumi</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>12:25 - 12:50 : Point de vue du gynécologue obstétricien</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Khrouf</p></span>
\t\t\t\t  
\t\t\t\t  <p>Discussion</p>
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">13:00 14:30</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Déjeuner / Session e-Posters</h5>
                
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">14:30 16:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>La PMA à échelle humaine ou PMA du prêt à l'emploi au sur mesure :</h5>
                
                <a href=\"#collapse17\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse17\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  <span><p>14:30 - 14:55 : Nouvelles méthodes de stimulation ovarienne en FIV</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Zhioua F</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>14:55 - 15:20 : Qualité ovocytaire et activité mitochondriale</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Wolf JP.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>15:20 - 15:45 : What are the new criteria for the selection of embryos for vitrification</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Genoves A</p></span>
\t\t\t\t  
\t\t\t\t  <p>15:45 - 16:00 : Discussion</p>
\t\t\t\t 
\t\t\t\t  
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">16:00 16:30</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Pause café / Session e-Posters</h5>
                
              </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">16:30 18:00</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
                <h5>Le dialogue endomètre embryon :</h5>
                
                <a href=\"#collapse19\" data-toggle=\"collapse\" role=\"button\" class=\"collapsed conf-close\" aria-expanded=\"false\"> <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i> </a>
                <div role=\"tabpanel\" class=\"collapse\" id=\"collapse19\" aria-expanded=\"false\" style=\"height: 0px;\">
                  <div class=\"conf-user-content\">
\t\t\t\t  
\t\t\t\t  <span><p>17:00 - 18:00 : Comment améliorer l&#39;implantation embryonnaire chez les mauvaises répondeuses</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Schelstroetc L.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>17:00 - 17:20 : Evaluation de la qualité de l'endomètre</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Kéhila M.</p></span>
\t\t\t\t  
\t\t\t\t  <span><p>17:20 - 17:45 : Préparation de l'endomètre avant TEC</p>
\t\t\t\t  <p style=\"color:blue; text-align: right;\">Dr Schelstroetc L.</p></span>
\t\t\t\t  
\t\t\t\t  <p>17:45 - 18:00 : Discussion</p>
\t\t\t\t  
                  </div>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"conference-time-list\">
              <div class=\"conf-user-time\"> <span class=\"time\">18:00 18:30</span> <span class=\"time-schedule\"></span> </div>
              <div class=\"conf-user-info\">
\t\t\t\t<h5>Clôture &amp; Distribution des prix</h5>
              </div>
            </div>
\t\t\t
\t\t\t
          </div>
          <!--/Day 2 schedule--> 
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Schedule --> 
























     
                                        
                    <section id=\"review\"  class=\"section-review section-padding onepage-section\">

                        <div class=\"container\">
                            <div class=\"review-container wow slideInUp\">
                                <div class=\"review-quote-left\"><i class=\"fa fa-quote-left\"></i></div>
                                <div class=\"review-content\">
                                    <p>Pour le cancer du sein par exemple, entre l'apparition de la première cellule cancéreuse et le premier nodule senti par la femme ou son médecin, il se produit 8 ans et 3 mois (...) Le cancer atteint une masse de 1 milliards de cellules (soit un gramme ou 1 cm de diamètre) vers la 8ème année de son évolution c'est alors qu'il devient décelable. Mais ce stade de détection est bien trop éloigné du seuil d'irréversibilité (1 million de cellules). <strong>Il est possible d'agir bien avant</strong> : c'est le principe de la prévention active.</p>
                                    <div class=\"review-author\">André Gernez</div>
                                </div>
                                <div class=\"review-quote-right\"><i class=\"fa fa-quote-right\"></i></div>
                            </div>
                        </div>
                    </section>

                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                        
                                 <section id=\"Firmen\" class=\"section-firmeninfos section-padding onepage-section\">
                                 <div class=\"section-title-area\">
                                <h2 class=\"section-title\">Nos Sponsors</h2>
                            </div>
                            <div class=\"container-title-area\" >
                                <h3 class=\"container-title\" style=\"text-align:center;\">Platinium</h3>
                            </div>
                        <div class=\"container flex-container\">
\t\t\t\t\t\t\t\t
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.merck.tn/\" >
                                    <div class=\"firma-thumbnail \">
                                                                                <img width=\"208\" height=\"100\" src=\"{{asset('bundles/cngot/wp-content/Logo_Merck.png')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"/>                                </div>

                                </a>
                                
                            </div>
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://ibsa-international.com/therapeutic-areas/humanreproduction/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/ibsa.png')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            </div>
                            <div class=\"container-title-area\" >
                                <h3 class=\"container-title\" style=\"text-align:center;\">Gold</h3>
                            </div>
\t\t\t\t\t\t\t<div class=\"container flex-container\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=https://www.ferring.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/ferring.jpg')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.sigmatau.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/sigma.jpg')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"container-title-area\" >
                                <h3 class=\"container-title\" style=\"text-align:center;\">Bronze</h3>
                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"container flex-container\" >
                            
\t\t\t\t\t\t\t
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.medisinternational.cz/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/medis.gif')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"#\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/bayer.jpg')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.dms.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/dms.png')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.hitachi-aloka.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/hitachi.jpg')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.julphar.net/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/julphar.png')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.samsung.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/samsung.png')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            <div class=\"firma-item wow slideInUp\">
                                <a target=\"_blank\" href=\"http://www.pfizer.com/\" >
                                    <div class=\"firma-thumbnail \">
                                        <img width=\"300\" height=\"69\" src=\"{{asset('bundles/cngot/wp-content/pfizer.png')}}\" class=\"attachment-300x100x size-300x100x wp-post-image\"  />                                </div>
                                </a>
                                
                            </div>
                            
                            
                        </div>
                    </section>
                                  
                                  
                                   
                                 
                                 
                                 
                                 
                                 
                                 
                                 











                                        
                               
                    {%block videoContent %}
                        {{ render(controller('CNGOTBundle:Video:liste')) }}
                    {%endblock%}

                    
                    <!--
                    


                    <div class=\"dark-wrapper\">
                        <div class=\"container inner\">
                            <div class=\"section-title-area\">
                                <h2 class=\"section-title\">from the journal</h2>
                            </div>
                            <div class=\"divide10\"></div>
                            <div class=\"carousel-wrapper\">
                                <div class=\"carousel carousel-boxed blog\">


                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/images/art/b1.jpg')}}\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat9\"><span><a href=\"#\">Urban</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Parturient Commodo Aenean</a></h4>
                                            <div class=\"meta\"><span class=\"date\">14 Oct 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia odio.</p>
                                        </div>

                                    </div>

                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/images/art/b2.jpg')}}\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat12\"><span><a href=\"#\">Still Life</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Quam Mollis Ligula Nullam</a></h4>
                                            <div class=\"meta\"><span class=\"date\">12 Nov 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus. Lorem ipsum dolor sit amet.</p>
                                        </div>

                                    </div>

                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/images/art/b3.jpg')}}\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat5\"><span><a href=\"#\">Photography</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Tellus Bibendum Parturient</a></h4>
                                            <div class=\"meta\"><span class=\"date\">23 Dec 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor. Sed posuere consectetur est at. Duis mollis, est.</p>
                                        </div>

                                    </div>
                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/images/art/b4.jpg')}}\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat6\"><span><a href=\"#\">Journal</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Parturient Commodo Aenean</a></h4>
                                            <div class=\"meta\"><span class=\"date\">14 Oct 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient. Curabitur blandit tempus lacinia.</p>
                                        </div>

                                    </div>

                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/images/art/b5.jpg')}}\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat12\"><span><a href=\"#\">Still Life</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Quam Mollis Ligula Nullam</a></h4>
                                            <div class=\"meta\"><span class=\"date\">12 Nov 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus. Lorem ipsum dolor sit amet.</p>
                                        </div>

                                    </div>

                                    <div class=\"item post\">
                                        <figure class=\"main\"><img src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/images/art/b6.jpg')}}\" alt=\"\" /></figure>
                                        <div class=\"box text-center\">
                                            <div class=\"category cat3\"><span><a href=\"#\">Nature</a></span></div>
                                            <h4 class=\"post-title\"><a href=\"#\">Tellus Bibendum Parturient</a></h4>
                                            <div class=\"meta\"><span class=\"date\">23 Dec 2014</span><span class=\"comments\"><a href=\"#\"><i class=\"icon-chat-1\"></i> 15</a></span></div>
                                            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor. Sed posuere consectetur est at. Duis mollis, est non.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                                        



                    <script>
// Get the modal
                        var modal = document.getElementById('myModal');
                        var team = document.getElementById('team');
// Get the button that opens the modal
                        var btn = document.getElementById(\"myBtn\");
// Get the <span> element that closes the modal
                        var span = document.getElementsByClassName(\"close\")[0];
// When the user clicks the button, open the modal
                        btn.onclick = function() {
                        modal.style.display = \"block\";
                        team.style.display = \"none\";
                        \$('body').css('overflow', 'hidden');
                        }

// When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                        modal.style.display = \"none\";
                        team.style.display = \"block\";
                        \$('body').css('overflow-y', 'auto');
                        }

// When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                        if (event.target == modal) {
                        modal.style.display = \"none\";
                        team.style.display = \"block\";
                        \$('body').css('overflow-y', 'auto');
                        }
                        }
                    </script>\t\t\t









                    <section class=\"tcvpb_section_tc section_body_fullwidth section_no_column_margin section_equalize_5 section_with_header intro_text_after\">
                        <header>
                            <div class=\"tcvpb_container section-title-area\">
                                <h2 class=\"section-title\">Notre Equipe</h2>

                                <p>Une des meilleures équipes est à votre disposition pour tout renseignement</p>
                            </div>
                        </header>
                        <div class=\"tcvpb_section_content\">
                            <div class=\"tcvpb_container\">
                                <div class=\"tcvpb_column_tc_span3\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc2.jpg')}}\" alt=\"Anna DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">Anna DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Wordpress Developer</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                Anna DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Wordpress Developer</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc2.jpg')}}\" alt=\"Anna DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    Won several awards for analyzing lint in Fort Walton Beach, FL. Spent high school summers marketing foreign currency in Orlando, FL. Spent a year training race cars on Wall Street. Spoke at an international conference about lecturing about mannequins in Africa. At the moment I&rsquo;m donating wooden horses in Hanford, CA. My current pet project is importing action figures in Las Vegas, NV.
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tcvpb_column_tc_span3\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc1.jpg')}}\" alt=\"GREGORY DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">GREGORY DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Creative Director</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                GREGORY DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Creative Director</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc1.jpg')}}\" alt=\"GREGORY DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet metus sit amet erat hendrerit condimentum&hellip;
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tcvpb_column_tc_span2\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc3.jpg')}}\" alt=\"CHRISTOFER DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">CHRISTOFER DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Marketing Specialist</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                CHRISTOFER DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Marketing Specialist</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc3.jpg')}}\" alt=\"CHRISTOFER DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    Lead a team supervising the production of soap scum in the government sector. Spent 2001-2004 buying and selling jump ropes in Ohio. At the moment I&rsquo;m deploying birdhouses for the government. Spent high school summers researching xylophones in West Palm Beach, FL. Had moderate success lecturing about inflatable dolls in Gainesville, FL. Spent 2001-2007 deploying junk bonds in Prescott, AZ.
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tcvpb_column_tc_span2\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc5.jpg')}}\" alt=\"ANTONI DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">ANTONI DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Lead designer</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                ANTONI DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Lead designer</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc5.jpg')}}\" alt=\"ANTONI DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet metus sit amet erat hendrerit condimentum&hellip;
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tcvpb_column_tc_span2\">
                                    <div class=\"tcvpb_team_member \">
                                        <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc4.jpg')}}\" alt=\"JESSICA DOE\" width=\"649\" height=\"433\">
                                        <a class=\"tcvpb_team_member_link tcvpb_team_member_modal_link\" href=\"#\">
                                            <span class=\"tcvpb_team_member_name\">JESSICA DOE</span>
                                            <span class=\"tcvpb_team_member_position\">Manager</span>
                                        </a>
                                        <div class=\"tcvpb_team_member_modal\">
                                            <h4 class=\"tcvpb_team_member_name\">
                                                JESSICA DOE
                                            </h4>
                                            <p class=\"tcvpb_team_member_position\">Manager</p>
                                            <div class=\"tcvpb_container\">
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    <img src=\"{{asset('bundles/cngot/wp-content/themes/test/img/doc4.jpg')}}\" alt=\"JESSICA DOE\" width=\"649\" height=\"433\">
                                                </div>
                                                <div class=\"tcvpb_column_tc_span6\">
                                                    Spent 2002-2008 donating chess sets for farmers. Earned praised for my work managing sauerkraut for farmers. Garnered an industry award while analyzing cod in Atlantic City, NJ. Developed several new methods for buying and selling licorice in the UK. Spent the better part of the 90&rsquo;s getting to know sausage in the government sector. Was quite successful at deploying hula hoops in Washington, DC.
                                                </div>
                                            </div>
                                            <div class=\"tcvpb_team_member_modal_close\">X</div>
                                        </div>
                                        <div class=\"tcvpb_team_member_social_under\">
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-facebook\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-twitter\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-googleplus\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-pinterest\"></i>
                                            </a>
                                            <a href=\"contact.html\" target=\"_self\">
                                                <i class=\"ci_icon-instagram\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>





-->









                    <section id=\"contact\"                  class=\"section-contact section-padding onepage-section\">
                        <div class=\"container\">
                            <div class=\"row\">

                                <div class=\"col-sm-3 wow slideInUp\">
                                    <br>

                                    <div class=\"address-box\">

                                        <h3>Nous Contacter</h3>

                                        <div class=\"address-contact\">
                                            <span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-2x\"></i><i class=\"fa fa-map-marker fa-stack-1x fa-inverse\"></i></span>

                                            <div class=\"address-content\">BP 40, Port El Kantaoui<br> Sousse 4089, Tunisie</div>
                                        </div>

                                        <div class=\"address-contact\">
                                            <span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-2x\"></i><i class=\"fa fa-phone fa-stack-1x fa-inverse\"></i></span>

                                            <div class=\"address-content\">(+216) 73 000 000</div>
                                        </div>

                                        <div class=\"address-contact\">
                                            <span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-2x\"></i><i class=\"fa fa-envelope-o fa-stack-1x fa-inverse\"></i></span>

                                            <div class=\"address-content\"><a href=\"mailto:fkg.&#107;arl&#115;r&#117;h&#101;&#64;&#97;&#105;&#101;&#115;ec.&#100;&#101;\">cngot2016@gmail.com</a></div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"col-sm-3 wow slideInUp\">
                                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.828511697894!2d10.587426615264889!3d35.902215480143305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd8997a10e343f%3A0x4e16de693cd5c73e!2sIBEROSTAR+Diar+El+Andalous!5e0!3m2!1sen!2sca!4v1476482745545\" width=\"900\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t\t<h3><strong>HEBERGEMENT A L'HOTEL DIAR EL ANDALOUS :</strong></h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<strong>Prix par jour & par personne en chambre double :</strong>
\t\t\t\t\t\t\t\t\t\t</br>

\t\t\t\t\t\t\t\t\t\t· Logement et petit déjeuner : 61 DT
\t\t\t\t\t\t\t\t\t\t</br>

\t\t\t\t\t\t\t\t\t\t· Demi Pension : 65 DT
\t\t\t\t\t\t\t\t\t\t</br>

\t\t\t\t\t\t\t\t\t\t· Supplément single : 16 DT
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
                            </div>

                        </div>

                    </section>
                </main><!-- #main -->
            </div><!-- #content -->
            
            
            <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">

                <div class=\"site-info\">
                    <div class=\"container\">
                        <div class=\"btt\">
                            <a class=\"back-top-top\" href=\"#page\" title=\"Back To Top\"><i class=\"fa fa-angle-double-up wow flash\" data-wow-duration=\"2s\"></i></a>
                        </div>
                        Copyright &copy; 2016        with \t&#10084;       <span class=\"sep\"> &ndash;  </span>
                        <a href=\"#\">VeLox IT</a>            </div>
                </div>
                <!-- .site-info -->


                


            </footer><!-- #colophon -->
        </div><!-- #page -->

        <script type='text/javascript' src='{{asset('bundles/cngot/wp-content/themes/fkg/assets/js/plugins8a54.js?ver=1.0.0')}}'></script>
        <script type='text/javascript' src='{{asset('bundles/cngot/wp-content/themes/fkg/assets/js/bootstrap.mincce7.js?ver=4.0.0')}}'></script>
        <script type='text/javascript' src='{{asset('bundles/cngot/wp-content/themes/fkg/assets/js/theme11a8.js?ver=20120206')}}'></script>
        <script type='text/javascript' src='{{asset('bundles/cngot/wp-includes/js/wp-embed.min1c9b.js?ver=4.6.1')}}'></script>




        <!-- caroussel -->
        <script src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/js/jquery.min.js')}}\"></script> 
        <script src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/js/bootstrap.min.js')}}\"></script> 
        <script src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/js/plugins.js')}}\"></script> 
        <script src=\"{{asset('bundles/cngot/wp-includes/caroussel/style/js/scripts.js')}}\"></script>


\t<!-- programme -->
\t
\t<script src=\"{{asset('bundles/cngot/wp-content/prog/js/jquery.min.js')}}\"></script> 
\t<script src=\"{{asset('bundles/cngot/wp-content/prog/js/bootstrap.min.js')}}\"></script> 
\t<script src=\"{{asset('bundles/cngot/wp-content/prog/js/interface.js')}}\"></script> 
\t<script src=\"{{asset('bundles/cngot/wp-content/prog/js/jquery.countdown.min.js')}}\"></script>



        <script>
                    (function(i, s, o, g, r, a, m){i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function(){
                    (i[r].q = i[r].q || []).push(arguments)}, i[r].l = 1 * new Date(); a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
                    ga('create', 'UA-84546565-1', 'auto');
                    ga('send', 'pageview');

        </script>

        
    </body >

</html>
";
    }
}
