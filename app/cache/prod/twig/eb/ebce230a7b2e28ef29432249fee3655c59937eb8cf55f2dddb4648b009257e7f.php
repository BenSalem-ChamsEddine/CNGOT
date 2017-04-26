<?php

/* CNGOTBundle:user:profile.html.twig */
class __TwigTemplate_ffff060e669e31985d183482d0b45132d6ca1892395d4fe9222e72af85d8a813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'profileContent' => array($this, 'block_profileContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb464faf124dc729a4908296ab42ad23ceeaba74d32852195640709fddfe9e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb464faf124dc729a4908296ab42ad23ceeaba74d32852195640709fddfe9e65->enter($__internal_cb464faf124dc729a4908296ab42ad23ceeaba74d32852195640709fddfe9e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:user:profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>




    <!-- Mirrored from hubancreative.com/projects/templates/coco/corporate/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2016 22:21:24 GMT -->
    <head>
        <meta charset=\"UTF-8\">
        <title>CNGOT Profile</title>   
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,\">

        <!-- Base Css Files -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/fontello/css/fontello.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/animate-css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/nifty-modal/css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" /> 
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/ios7-switch/ios7-switch.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" /> 
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/pace/pace.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/sortable/sortable-theme-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-icheck/skins/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Code Highlighter for Demo -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/prettify/github.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <!-- Extra CSS Libraries Start -->
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Extra CSS Libraries End -->
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        <link rel=\"shortcut icon\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"fixed-center\">




        <div class=\"md-modal md-just-me\" id=\"logout-modal\">
            <div class=\"md-content\">
                <h3><strong>Confirmation de déconnexion</strong> </h3>
                <div>
                    <p class=\"text-center\">Vous voulez vraiment vous déconnecter ?</p>
                    <p class=\"text-center\">
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-success md-close\">Oui</a>
                        <a href=\"\" class=\"btn btn-danger md-close\">Non</a>
                    </p>
                   
                </div>
            </div>
        </div>        <!-- Modal End -->\t
        <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <div class=\"topbar-left\">
                    <div class=\"logo\">
                        <h1><a href=\"#\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a></h1>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-collapse2\">

                            <ul class=\"nav navbar-nav navbar-right top-navbar\">


                                <li class=\"dropdown iconify hide-phone\"><a href=\"#\" onclick=\"javascript:toggle_fullscreen()\"><i class=\"icon-resize-full-2\"></i></a></li>
                                <li class=\"dropdown topbar-profile\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"rounded-image topbar-profile-image\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/images/users/default-user.png"), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</strong> <i class=\"fa fa-caret-down\"></i></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"md-trigger\" data-modal=\"logout-modal\"><i class=\"icon-logout-1\"></i> Se déconnecter</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- Left Sidebar Start -->

            <!-- Left Sidebar End -->\t\t    <!-- Right Sidebar Start -->
            <!-- Right Sidebar End -->\t\t
            <!-- Start right content -->
            <div class=\"content-page\">
                <!-- ============================================================== -->
                <!-- Start Content here -->
                <!-- ============================================================== -->
                <div class=\"profile-banner\" style=\"background-image: url(";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/images/profil-pic.jpg"), "html", null, true);
        echo ");\">
                    <div class=\"col-sm-3 avatar-container\">
                        <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/images/users/default-user.png"), "html", null, true);
        echo "\" class=\"img-circle profile-avatar\" alt=\"User avatar\">
                    </div>


                </div>
                <div class=\"content\">

                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <!-- Begin user profile -->
                            <div class=\"text-center user-profile-2\">
                                <h3>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Nom", array()), "html", null, true);
        echo ", <b>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</b></h3>


                            </div><!-- End div .box-info -->
                            <!-- Begin user profile -->
                        </div><!-- End div .col-sm-4 -->

                        <div class=\"col-sm-9\">
                            <div class=\"widget widget-tabbed\">
                                <!-- Nav tab -->
                                <ul class=\"nav nav-tabs nav-justified\">
                                    <li class=\"active\"><a href=\"#my-timeline\" data-toggle=\"tab\"><i class=\"fa fa-users\"></i>  Mon Ticket </a></li>

                                    <li><a href=\"#about\" data-toggle=\"tab\"> <i class=\"fa fa-envelope\"></i>Mes abstracts</a></li>
<!--
                                    <li><a href=\"#user-activities\" data-toggle=\"tab\"><i class=\"fa fa-laptop\"></i> Plan de l'evenement</a></li>
                                    <li><a href=\"#mymessage\" data-toggle=\"tab\"><i class=\"fa fa-user\"></i> Mes Coordonnées</a></li>
-->                                </ul>
                                <!-- End nav tab -->

                                <!-- Tab panes -->
                                <div class=\"tab-content\">


                                    <!-- Tab timeline -->
                                    <div class=\"tab-pane animated active fadeInRight\" id=\"my-timeline\">
                                        <div class=\"user-profile-content\">
                                        
                                        <h4>Le contrôle des personnes préinscrites s’effectuera le jour du congrès par la lecture électronique des billets. </br>
\t\t\t\t\t\t<strong style=\"color: red;\">L’impression du billet est donc indispensable </strong> car le billet ne peut en aucun cas être lu sur un autre support (électronique, écran de téléphone mobile, écran d’ordinateur et tablette).</br></br>
\t\t\t\t\t\tConservez-le en lieu sûr et protégez-le de toute détérioration.</br>
</br>
 A bientôt.</h4>
                                        
                                        
                                            <style>
                                                .buttonDownload {
                                                    display: inline-block;
                                                    position: relative;
                                                    padding: 10px 25px;

                                                    background-color: #4CC713;
                                                    color: white;

                                                    font-family: sans-serif;
                                                    text-decoration: none;
                                                    font-size: 0.9em;
                                                    text-align: center;
                                                    text-indent: 15px;
                                                }

                                                .buttonDownload:hover {
                                                    background-color: #333;
                                                    color: white;
                                                }

                                                .buttonDownload:before, .buttonDownload:after {
                                                    content: ' ';
                                                    display: block;
                                                    position: absolute;
                                                    left: 15px;
                                                    top: 52%;
                                                }

                                                /* Download box shape  */
                                                .buttonDownload:before {
                                                    width: 10px;
                                                    height: 2px;
                                                    border-style: solid;
                                                    border-width: 0 2px 2px;
                                                }

                                                /* Download arrow shape */
                                                .buttonDownload:after {
                                                    width: 0;
                                                    height: 0;
                                                    margin-left: 3px;
                                                    margin-top: -7px;

                                                    border-style: solid;
                                                    border-width: 4px 4px 0 4px;
                                                    border-color: transparent;
                                                    border-top-color: inherit;

                                                    animation: downloadArrow 2s linear infinite;
                                                    animation-play-state: paused;
                                                }

                                                .buttonDownload:hover:before {
                                                    border-color: #4CC713;
                                                }

                                                .buttonDownload:hover:after {
                                                    border-top-color: #4CC713;
                                                    animation-play-state: running;
                                                }

                                                /* keyframes for the download icon anim */
                                                @keyframes downloadArrow {
                                                    /* 0% and 0.001% keyframes used as a hackish way of having the button frozen on a nice looking frame by default */
                                                    0% {
                                                        margin-top: -7px;
                                                        opacity: 1;
                                                    }

                                                    0.001% {
                                                        margin-top: -15px;
                                                        opacity: 0;
                                                    }

                                                    50% {
                                                        opacity: 1;
                                                    }

                                                    100% {
                                                        margin-top: 0;
                                                        opacity: 0;
                                                    }
                                                }


                                            </style>
                                            <a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_ticket", array("salt" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "salt", array()))), "html", null, true);
        echo "\" class=\"buttonDownload\">Download</a>
                                        </div><!-- End div .user-profile-content -->
                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab timeline -->


                                    <!-- Tab about -->
                                    <div class=\"tab-pane animated fadeInRight\" id=\"about\">
                                        ";
        // line 257
        if ((twig_length_filter($this->env, (isset($context["abstracts"]) ? $context["abstracts"] : $this->getContext($context, "abstracts"))) < 20)) {
            // line 258
            echo "
                                            <center>  <a href=\"";
            // line 259
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_user_video");
            echo "\" class=\"buttonDownload\">Soumettre un abstract</a></center>

                                        ";
        }
        // line 262
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abstracts"]) ? $context["abstracts"] : $this->getContext($context, "abstracts")));
        foreach ($context['_seq'] as $context["_key"] => $context["abst"]) {
            // line 263
            echo "                                            <div class=\"user-profile-content\">
                                                <hr />
                                                <center><h2> Votre Abstract 

                                                    ";
            // line 267
            if (($this->getAttribute($context["abst"], "status", array()) == 0)) {
                echo "    

                                                        est : <strong style=\"color: orange;\">  En cours de traitement</strong> 

                                                    ";
            } elseif (($this->getAttribute(            // line 271
$context["abst"], "status", array()) == 1)) {
                // line 272
                echo "                                                        a été <strong style=\"color: green;\"> Accepté </strong> 
                                                    ";
            } elseif (($this->getAttribute(            // line 273
$context["abst"], "status", array()) == 2)) {
                // line 274
                echo "                                                        a été   <strong style=\"color: red;\"> Rejeté</strong> 

                                                    ";
            }
            // line 277
            echo "                                                    </h2></center>



                                                <hr />



                                                <div class=\"row\">
                                                    <div class=\"col-sm-8\">
                                                        <h4><strong>Details de l'abstract</strong>  : ";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "titre", array()), "html", null, true);
            echo "</h4>
                                                        <div>
                                                            <strong>Introduction</strong><br>
                                                            <p>";
            // line 290
            echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "introduction", array()), "html", null, true);
            echo "</p>
                                                        </div>
                                                        <div>
                                                            <strong>Matériel et Méthodes</strong><br>
                                                            <abbr>";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "materiel", array()), "html", null, true);
            echo "</abbr>
                                                        </div>
                                                        <div>
                                                            <strong>Résultats</strong><br>
                                                            <abbr>";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "resultats", array()), "html", null, true);
            echo "</abbr>
                                                        </div>
                                                        <div>
                                                            <strong>Conclusion</strong><br>
                                                            <abbr>";
            // line 302
            echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "conclusions", array()), "html", null, true);
            echo "</abbr>
                                                        </div>

                                                    </div>
                                                        ";
            // line 306
            if (($this->getAttribute($context["abst"], "path", array()) != null)) {
                // line 307
                echo "                                                    <div >
                                                        <figure class=\"main\"><video width=\"300px\" height=\"300px\" src=\"";
                // line 308
                echo twig_escape_filter($this->env, ("/../../../upload/abstractVideo/documents/" . $this->getAttribute($context["abst"], "path", array())), "html", null, true);
                echo "\" controls=\"controls\"/></figure>
                                                    </div>
                                                    ";
            }
            // line 311
            echo "                                                </div><!-- End div .row -->
                                            </div><!-- End div .user-profile-content -->
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab about -->

                                    ";
        // line 317
        $this->displayBlock('profileContent', $context, $blocks);
        // line 321
        echo "
                                    <!-- Tab user activities -->
                                    <div class=\"tab-pane animated fadeInRight\" id=\"user-activities\">
                                        <div class=\"scroll-user-widget\">
                                            <ul class=\"media-list\">
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                            <br /><i>2 minutes ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                            <br /><i>8 minutes ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                            <br /><i>an hour ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Ari Rusmanto</strong> Added 3 products
                                                            <br /><i>3 hours ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                            <br /><i>12 hours ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Johnny Depp</strong> Updated his avatar
                                                            <br /><i>Yesterday</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                            <br /><i>2 minutes ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                            <br /><i>8 minutes ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                            <br /><i>an hour ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Ari Rusmanto</strong> Added 3 products
                                                            <br /><i>3 hours ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                            <br /><i>12 hours ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Johnny Depp</strong> Updated his avatar
                                                            <br /><i>Yesterday</i></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- End div .scroll-user-widget -->
                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab user activities -->

                                    <!-- Tab user messages -->
                                    <div class=\"tab-pane animated fadeInRight\" id=\"mymessage\">
                                        <div class=\"scroll-user-widget\">
                                            <ul class=\"media-list\">
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/2.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">John Doe</a> <small>Just now</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/1.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/5.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/4.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/3.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/2.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">John Doe</a> <small>Just now</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/1.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/5.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/4.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/img/avatar/3.html"), "html", null, true);
        echo "\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- End div .scroll-user-widget -->
                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab user messages -->
                                </div><!-- End div .tab-content -->
                            </div><!-- End div .box-info -->
                        </div>
                    </div>


                    <!-- Footer Start -->
                    <footer>
                        <center>
                        VeLox IT &copy; 2016
                        </center>
                    </footer>
                    <!-- Footer End -->\t\t\t
                </div>
                <!-- ============================================================== -->
                <!-- End content here -->
                <!-- ============================================================== -->

            </div>
            <!-- End right content -->

        </div>
        <!-- End of page -->
        <!-- the overlay modal element -->
        <div class=\"md-overlay\"></div>
        <!-- End of eoverlay modal -->
        <script>

            var resizefunc = [];
        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-detectmobile/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/ios7-switch/ios7.switch.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-blockui/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/bootstrap-bootbox/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-sparkline/jquery-sparkline.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/nifty-modal/js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/nifty-modal/js/modalEffects.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/sortable/sortable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/bootstrap-fileinput/bootstrap.file-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/bootstrap-select2/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Demo Specific JS Libraries -->
        <script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/prettify/prettify.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/js/init.js"), "html", null, true);
        echo "\"></script>
        <!-- Page Specific JS Libraries -->
        <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/libs/jquery-gmap3/gmap3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/assets/js/pages/google-maps.js"), "html", null, true);
        echo "\"></script>

    </body>

    <!-- Mirrored from hubancreative.com/projects/templates/coco/corporate/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2016 22:21:31 GMT -->
</html>";
        
        $__internal_cb464faf124dc729a4908296ab42ad23ceeaba74d32852195640709fddfe9e65->leave($__internal_cb464faf124dc729a4908296ab42ad23ceeaba74d32852195640709fddfe9e65_prof);

    }

    // line 317
    public function block_profileContent($context, array $blocks = array())
    {
        $__internal_c382313e52c65eabbc17393515e2f94ac98dac62d050651fde3ab16d0219f7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c382313e52c65eabbc17393515e2f94ac98dac62d050651fde3ab16d0219f7a9->enter($__internal_c382313e52c65eabbc17393515e2f94ac98dac62d050651fde3ab16d0219f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profileContent"));

        // line 318
        echo "

                                    ";
        
        $__internal_c382313e52c65eabbc17393515e2f94ac98dac62d050651fde3ab16d0219f7a9->leave($__internal_c382313e52c65eabbc17393515e2f94ac98dac62d050651fde3ab16d0219f7a9_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:user:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  860 => 318,  854 => 317,  841 => 562,  837 => 561,  831 => 558,  826 => 556,  820 => 553,  816 => 552,  812 => 551,  808 => 550,  804 => 549,  800 => 548,  796 => 547,  792 => 546,  788 => 545,  784 => 544,  780 => 543,  776 => 542,  772 => 541,  768 => 540,  764 => 539,  760 => 538,  756 => 537,  752 => 536,  748 => 535,  744 => 534,  740 => 533,  736 => 532,  691 => 490,  679 => 481,  667 => 472,  655 => 463,  643 => 454,  631 => 445,  619 => 436,  607 => 427,  595 => 418,  583 => 409,  493 => 321,  491 => 317,  486 => 314,  478 => 311,  472 => 308,  469 => 307,  467 => 306,  460 => 302,  453 => 298,  446 => 294,  439 => 290,  433 => 287,  421 => 277,  416 => 274,  414 => 273,  411 => 272,  409 => 271,  402 => 267,  396 => 263,  391 => 262,  385 => 259,  382 => 258,  380 => 257,  369 => 249,  242 => 127,  228 => 116,  223 => 114,  194 => 92,  178 => 79,  161 => 65,  145 => 52,  141 => 51,  137 => 50,  133 => 49,  129 => 48,  125 => 47,  121 => 46,  117 => 45,  113 => 44,  101 => 35,  96 => 33,  90 => 30,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  45 => 18,  41 => 17,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>




    <!-- Mirrored from hubancreative.com/projects/templates/coco/corporate/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2016 22:21:24 GMT -->
    <head>
        <meta charset=\"UTF-8\">
        <title>CNGOT Profile</title>   
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,\">

        <!-- Base Css Files -->
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/fontello/css/fontello.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/animate-css/animate.min.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/nifty-modal/css/component.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/magnific-popup/magnific-popup.css')}}\" rel=\"stylesheet\" /> 
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/ios7-switch/ios7-switch.css')}}\" rel=\"stylesheet\" /> 
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/pace/pace.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/sortable/sortable-theme-bootstrap.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/bootstrap-datepicker/css/datepicker.css')}}\" rel=\"stylesheet\" />
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/jquery-icheck/skins/all.css')}}\" rel=\"stylesheet\" />
        <!-- Code Highlighter for Demo -->
        <link href=\"{{asset('bundles/cngot/profile/assets/libs/prettify/github.css')}}\" rel=\"stylesheet\" />

        <!-- Extra CSS Libraries Start -->
        <link href=\"{{asset('bundles/cngot/profile/assets/css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Extra CSS Libraries End -->
        <link href=\"{{asset('bundles/cngot/profile/assets/css/style-responsive.css')}}\" rel=\"stylesheet\" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        <link rel=\"shortcut icon\" href=\"{{asset('bundles/cngot/logo.png')}}\">
        <link rel=\"apple-touch-icon\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
    </head>
    <body class=\"fixed-center\">




        <div class=\"md-modal md-just-me\" id=\"logout-modal\">
            <div class=\"md-content\">
                <h3><strong>Confirmation de déconnexion</strong> </h3>
                <div>
                    <p class=\"text-center\">Vous voulez vraiment vous déconnecter ?</p>
                    <p class=\"text-center\">
                        <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-success md-close\">Oui</a>
                        <a href=\"\" class=\"btn btn-danger md-close\">Non</a>
                    </p>
                   
                </div>
            </div>
        </div>        <!-- Modal End -->\t
        <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- Top Bar Start -->
            <div class=\"topbar\">
                <div class=\"topbar-left\">
                    <div class=\"logo\">
                        <h1><a href=\"#\"><img src=\"{{asset('bundles/cngot/logo.png')}}\" alt=\"Logo\"></a></h1>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-collapse2\">

                            <ul class=\"nav navbar-nav navbar-right top-navbar\">


                                <li class=\"dropdown iconify hide-phone\"><a href=\"#\" onclick=\"javascript:toggle_fullscreen()\"><i class=\"icon-resize-full-2\"></i></a></li>
                                <li class=\"dropdown topbar-profile\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"rounded-image topbar-profile-image\"><img src=\"{{asset('bundles/cngot/profile/images/users/default-user.png')}}\"></span> {{ app.user.nom }} <strong>{{ app.user.prenom }}</strong> <i class=\"fa fa-caret-down\"></i></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a class=\"md-trigger\" data-modal=\"logout-modal\"><i class=\"icon-logout-1\"></i> Se déconnecter</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- Left Sidebar Start -->

            <!-- Left Sidebar End -->\t\t    <!-- Right Sidebar Start -->
            <!-- Right Sidebar End -->\t\t
            <!-- Start right content -->
            <div class=\"content-page\">
                <!-- ============================================================== -->
                <!-- Start Content here -->
                <!-- ============================================================== -->
                <div class=\"profile-banner\" style=\"background-image: url({{asset('bundles/cngot/profile/images/profil-pic.jpg')}});\">
                    <div class=\"col-sm-3 avatar-container\">
                        <img src=\"{{asset('bundles/cngot/profile/images/users/default-user.png')}}\" class=\"img-circle profile-avatar\" alt=\"User avatar\">
                    </div>


                </div>
                <div class=\"content\">

                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <!-- Begin user profile -->
                            <div class=\"text-center user-profile-2\">
                                <h3>{{ app.user.Nom }}, <b>{{ app.user.prenom }}</b></h3>


                            </div><!-- End div .box-info -->
                            <!-- Begin user profile -->
                        </div><!-- End div .col-sm-4 -->

                        <div class=\"col-sm-9\">
                            <div class=\"widget widget-tabbed\">
                                <!-- Nav tab -->
                                <ul class=\"nav nav-tabs nav-justified\">
                                    <li class=\"active\"><a href=\"#my-timeline\" data-toggle=\"tab\"><i class=\"fa fa-users\"></i>  Mon Ticket </a></li>

                                    <li><a href=\"#about\" data-toggle=\"tab\"> <i class=\"fa fa-envelope\"></i>Mes abstracts</a></li>
<!--
                                    <li><a href=\"#user-activities\" data-toggle=\"tab\"><i class=\"fa fa-laptop\"></i> Plan de l'evenement</a></li>
                                    <li><a href=\"#mymessage\" data-toggle=\"tab\"><i class=\"fa fa-user\"></i> Mes Coordonnées</a></li>
-->                                </ul>
                                <!-- End nav tab -->

                                <!-- Tab panes -->
                                <div class=\"tab-content\">


                                    <!-- Tab timeline -->
                                    <div class=\"tab-pane animated active fadeInRight\" id=\"my-timeline\">
                                        <div class=\"user-profile-content\">
                                        
                                        <h4>Le contrôle des personnes préinscrites s’effectuera le jour du congrès par la lecture électronique des billets. </br>
\t\t\t\t\t\t<strong style=\"color: red;\">L’impression du billet est donc indispensable </strong> car le billet ne peut en aucun cas être lu sur un autre support (électronique, écran de téléphone mobile, écran d’ordinateur et tablette).</br></br>
\t\t\t\t\t\tConservez-le en lieu sûr et protégez-le de toute détérioration.</br>
</br>
 A bientôt.</h4>
                                        
                                        
                                            <style>
                                                .buttonDownload {
                                                    display: inline-block;
                                                    position: relative;
                                                    padding: 10px 25px;

                                                    background-color: #4CC713;
                                                    color: white;

                                                    font-family: sans-serif;
                                                    text-decoration: none;
                                                    font-size: 0.9em;
                                                    text-align: center;
                                                    text-indent: 15px;
                                                }

                                                .buttonDownload:hover {
                                                    background-color: #333;
                                                    color: white;
                                                }

                                                .buttonDownload:before, .buttonDownload:after {
                                                    content: ' ';
                                                    display: block;
                                                    position: absolute;
                                                    left: 15px;
                                                    top: 52%;
                                                }

                                                /* Download box shape  */
                                                .buttonDownload:before {
                                                    width: 10px;
                                                    height: 2px;
                                                    border-style: solid;
                                                    border-width: 0 2px 2px;
                                                }

                                                /* Download arrow shape */
                                                .buttonDownload:after {
                                                    width: 0;
                                                    height: 0;
                                                    margin-left: 3px;
                                                    margin-top: -7px;

                                                    border-style: solid;
                                                    border-width: 4px 4px 0 4px;
                                                    border-color: transparent;
                                                    border-top-color: inherit;

                                                    animation: downloadArrow 2s linear infinite;
                                                    animation-play-state: paused;
                                                }

                                                .buttonDownload:hover:before {
                                                    border-color: #4CC713;
                                                }

                                                .buttonDownload:hover:after {
                                                    border-top-color: #4CC713;
                                                    animation-play-state: running;
                                                }

                                                /* keyframes for the download icon anim */
                                                @keyframes downloadArrow {
                                                    /* 0% and 0.001% keyframes used as a hackish way of having the button frozen on a nice looking frame by default */
                                                    0% {
                                                        margin-top: -7px;
                                                        opacity: 1;
                                                    }

                                                    0.001% {
                                                        margin-top: -15px;
                                                        opacity: 0;
                                                    }

                                                    50% {
                                                        opacity: 1;
                                                    }

                                                    100% {
                                                        margin-top: 0;
                                                        opacity: 0;
                                                    }
                                                }


                                            </style>
                                            <a href=\"{{ path('download_ticket',{'salt' : app.user.salt}) }}\" class=\"buttonDownload\">Download</a>
                                        </div><!-- End div .user-profile-content -->
                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab timeline -->


                                    <!-- Tab about -->
                                    <div class=\"tab-pane animated fadeInRight\" id=\"about\">
                                        {% if abstracts|length <20 %}

                                            <center>  <a href=\"{{ path('add_user_video') }}\" class=\"buttonDownload\">Soumettre un abstract</a></center>

                                        {% endif %}
                                        {% for abst in abstracts %}
                                            <div class=\"user-profile-content\">
                                                <hr />
                                                <center><h2> Votre Abstract 

                                                    {% if abst.status == 0 %}    

                                                        est : <strong style=\"color: orange;\">  En cours de traitement</strong> 

                                                    {% elseif abst.status == 1 %}
                                                        a été <strong style=\"color: green;\"> Accepté </strong> 
                                                    {% elseif abst.status == 2 %}
                                                        a été   <strong style=\"color: red;\"> Rejeté</strong> 

                                                    {% endif %}
                                                    </h2></center>



                                                <hr />



                                                <div class=\"row\">
                                                    <div class=\"col-sm-8\">
                                                        <h4><strong>Details de l'abstract</strong>  : {{abst.titre}}</h4>
                                                        <div>
                                                            <strong>Introduction</strong><br>
                                                            <p>{{abst.introduction}}</p>
                                                        </div>
                                                        <div>
                                                            <strong>Matériel et Méthodes</strong><br>
                                                            <abbr>{{abst.materiel}}</abbr>
                                                        </div>
                                                        <div>
                                                            <strong>Résultats</strong><br>
                                                            <abbr>{{abst.resultats}}</abbr>
                                                        </div>
                                                        <div>
                                                            <strong>Conclusion</strong><br>
                                                            <abbr>{{abst.conclusions}}</abbr>
                                                        </div>

                                                    </div>
                                                        {% if abst.path != null %}
                                                    <div >
                                                        <figure class=\"main\"><video width=\"300px\" height=\"300px\" src=\"{{\"/../../../upload/abstractVideo/documents/\" ~ abst.path }}\" controls=\"controls\"/></figure>
                                                    </div>
                                                    {% endif %}
                                                </div><!-- End div .row -->
                                            </div><!-- End div .user-profile-content -->
                                        {% endfor %}
                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab about -->

                                    {% block profileContent %}


                                    {% endblock %}

                                    <!-- Tab user activities -->
                                    <div class=\"tab-pane animated fadeInRight\" id=\"user-activities\">
                                        <div class=\"scroll-user-widget\">
                                            <ul class=\"media-list\">
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                            <br /><i>2 minutes ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                            <br /><i>8 minutes ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                            <br /><i>an hour ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Ari Rusmanto</strong> Added 3 products
                                                            <br /><i>3 hours ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                            <br /><i>12 hours ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Johnny Depp</strong> Updated his avatar
                                                            <br /><i>Yesterday</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                            <br /><i>2 minutes ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                            <br /><i>8 minutes ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                            <br /><i>an hour ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Ari Rusmanto</strong> Added 3 products
                                                            <br /><i>3 hours ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                            <br /><i>12 hours ago</i></p>
                                                    </a>
                                                </li>
                                                <li class=\"media\">
                                                    <a href=\"#fakelink\">
                                                        <p><strong>Johnny Depp</strong> Updated his avatar
                                                            <br /><i>Yesterday</i></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- End div .scroll-user-widget -->
                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab user activities -->

                                    <!-- Tab user messages -->
                                    <div class=\"tab-pane animated fadeInRight\" id=\"mymessage\">
                                        <div class=\"scroll-user-widget\">
                                            <ul class=\"media-list\">
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/2.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">John Doe</a> <small>Just now</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/1.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/5.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/4.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/3.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/2.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">John Doe</a> <small>Just now</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/1.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/5.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/4.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                                <li class=\"media\">
                                                    <a class=\"pull-left\" href=\"#fakelink\">
                                                        <img class=\"media-object\" src=\"{{asset('bundles/cngot/profile/assets/img/avatar/3.html')}}\" alt=\"Avatar\">
                                                    </a>
                                                    <div class=\"media-body\">
                                                        <h4 class=\"media-heading\"><a href=\"#fakelink\">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- End div .scroll-user-widget -->
                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab user messages -->
                                </div><!-- End div .tab-content -->
                            </div><!-- End div .box-info -->
                        </div>
                    </div>


                    <!-- Footer Start -->
                    <footer>
                        <center>
                        VeLox IT &copy; 2016
                        </center>
                    </footer>
                    <!-- Footer End -->\t\t\t
                </div>
                <!-- ============================================================== -->
                <!-- End content here -->
                <!-- ============================================================== -->

            </div>
            <!-- End right content -->

        </div>
        <!-- End of page -->
        <!-- the overlay modal element -->
        <div class=\"md-overlay\"></div>
        <!-- End of eoverlay modal -->
        <script>

            var resizefunc = [];
        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery/jquery-1.11.1.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/bootstrap/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery-detectmobile/detect.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/ios7-switch/ios7.switch.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/fastclick/fastclick.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery-blockui/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/bootstrap-bootbox/bootbox.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery-sparkline/jquery-sparkline.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/nifty-modal/js/classie.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/nifty-modal/js/modalEffects.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/sortable/sortable.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/bootstrap-select/bootstrap-select.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/bootstrap-select2/select2.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}\"></script> 
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/pace/pace.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery-icheck/icheck.min.js')}}\"></script>

        <!-- Demo Specific JS Libraries -->
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/prettify/prettify.js')}}\"></script>

        <script src=\"{{asset('bundles/cngot/profile/assets/js/init.js')}}\"></script>
        <!-- Page Specific JS Libraries -->
        <script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/libs/jquery-gmap3/gmap3.min.js')}}\"></script>
        <script src=\"{{asset('bundles/cngot/profile/assets/js/pages/google-maps.js')}}\"></script>

    </body>

    <!-- Mirrored from hubancreative.com/projects/templates/coco/corporate/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2016 22:21:31 GMT -->
</html>";
    }
}
