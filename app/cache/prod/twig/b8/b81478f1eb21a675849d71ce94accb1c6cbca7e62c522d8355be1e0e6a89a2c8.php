<?php

/* CNGOTBundle:admin:layout.html.twig */
class __TwigTemplate_68dbb7bb21be10663315213c2c50f6e24440ce3ff8ed20202ebfa631248fb591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bae0181253fe65652f226b89f3276b983acbd2d0cba3d591dc7ba626eade35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bae0181253fe65652f226b89f3276b983acbd2d0cba3d591dc7ba626eade35c->enter($__internal_4bae0181253fe65652f226b89f3276b983acbd2d0cba3d591dc7ba626eade35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:admin:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->



    <head>
        <meta charset=\"utf-8\" />
        <title>CNGOT Admin</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <!-- BEGIN LAYOUT FIRST STYLES -->
            <link href=\"http://fonts.googleapis.com/css?family=Oswald:400,300,700\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/layouts/layout5/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/layouts/layout5/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"icon\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" sizes=\"32x32\" />
        <link rel=\"icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" sizes=\"192x192\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
    
    
    </head>
    <!-- END HEAD -->

    <body class=\"page-header-fixed page-sidebar-closed-hide-logo\">
        <!-- BEGIN CONTAINER -->
        <div class=\"wrapper\">
            <!-- BEGIN HEADER -->
            <header class=\"page-header\">
                <nav class=\"navbar mega-menu\" role=\"navigation\">
                    <div class=\"container-fluid\">
                        <div class=\"clearfix navbar-fixed-top\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"toggle-icon\">
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </span>
                            </button>
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            <a id=\"index\" class=\"page-logo\" href=\"#\">
                                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"> </a>
                            <!-- END LOGO -->

                            <!-- BEGIN TOPBAR ACTIONS -->
                            <div class=\"topbar-actions\">
                                <!-- BEGIN USER PROFILE -->
                                <div class=\"btn-group-img btn-group\">
                                    <button type=\"button\" class=\"btn btn-sm md-skip dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <span>Hi, ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</span>
                                        <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/profile/images/users/default-user.png"), "html", null, true);
        echo "\" alt=\"\"> </button>
                                    <ul class=\"dropdown-menu-v2\" role=\"menu\">
                                        <li>
                                            <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                                <i class=\"icon-key\"></i> Se déconnecter </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END USER PROFILE -->
                            </div>
                            <!-- END TOPBAR ACTIONS -->
                        </div>
                        <!-- BEGIN HEADER MENU -->
                        <div class=\"nav-collapse collapse navbar-collapse navbar-responsive-collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"dropdown dropdown-fw dropdown-fw-disabled  active open selected\">
                                    <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
        echo "\" class=\"text-uppercase\">
                                        <i class=\"icon-home\"></i> Utilisateurs </a>

                                </li>
                                <li class=\"dropdown dropdown-fw dropdown-fw-disabled  \">
                                    <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_abstract");
        echo "\" class=\"text-uppercase\">
                                        <i class=\"icon-puzzle\"></i> Abstracts </a>
                                </li>
                                <li class=\"dropdown dropdown-fw dropdown-fw-disabled  \">
                                    <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_video");
        echo "\" class=\"text-uppercase\">
                                        <i class=\"icon-briefcase\"></i> Videos </a>
                                </li>

                            </ul>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!--/container-->
                </nav>
            </header>
            <!-- END HEADER -->
            <div class=\"container-fluid\">







                ";
        // line 120
        $this->displayBlock('content', $context, $blocks);
        // line 122
        echo "












                <!-- BEGIN FOOTER -->
                <p class=\"copyright\"> 2016 &copy; 
                    <a target=\"_blank\" href=\"#\">VeLox IT</a> &nbsp;&nbsp;
                </p>
                <a href=\"#index\" class=\"go2top\">
                    <i class=\"icon-arrow-up\"></i>
                </a>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->


        <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<script src=\"../assets/global/plugins/ie8.fix.min.js\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "../\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/radar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/themes/light.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/themes/patterns.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/themes/chalk.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/ammap/ammap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/amcharts/amstockcharts/amstock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/horizontal-timeline/horizontal-timeline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/pages/scripts/dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/layouts/layout5/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->







        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/pages/scripts/table-datatables-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->






        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/admin/assets/pages/scripts/table-datatables-responsive.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>




        <!-- Google Code for Universal Analytics -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-37564768-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- End -->

        <!-- Google Tag Manager -->
        <noscript><iframe src=\"http://www.googletagmanager.com/ns.html?id=GTM-W276BJ\"
                          height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-W276BJ');</script>
        <!-- End -->
    </body>



    <!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2016 20:30:07 GMT -->
</html>";
        
        $__internal_4bae0181253fe65652f226b89f3276b983acbd2d0cba3d591dc7ba626eade35c->leave($__internal_4bae0181253fe65652f226b89f3276b983acbd2d0cba3d591dc7ba626eade35c_prof);

    }

    // line 120
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c8aef9469471feffe2016909484adb5ebca0792bdd3462347b254b052f3923c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8aef9469471feffe2016909484adb5ebca0792bdd3462347b254b052f3923c->enter($__internal_1c8aef9469471feffe2016909484adb5ebca0792bdd3462347b254b052f3923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 121
        echo "                ";
        
        $__internal_1c8aef9469471feffe2016909484adb5ebca0792bdd3462347b254b052f3923c->leave($__internal_1c8aef9469471feffe2016909484adb5ebca0792bdd3462347b254b052f3923c_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 121,  510 => 120,  459 => 229,  448 => 221,  441 => 217,  437 => 216,  432 => 214,  427 => 212,  414 => 202,  410 => 201,  406 => 200,  400 => 197,  394 => 194,  388 => 191,  384 => 190,  380 => 189,  376 => 188,  372 => 187,  368 => 186,  364 => 185,  360 => 184,  356 => 183,  352 => 182,  348 => 181,  344 => 180,  340 => 179,  336 => 178,  332 => 177,  328 => 176,  324 => 175,  320 => 174,  316 => 173,  312 => 172,  308 => 171,  304 => 170,  300 => 169,  296 => 168,  292 => 167,  288 => 166,  284 => 165,  280 => 164,  276 => 163,  272 => 162,  266 => 159,  262 => 158,  258 => 157,  254 => 156,  250 => 155,  246 => 154,  212 => 122,  210 => 120,  187 => 100,  180 => 96,  172 => 91,  156 => 78,  150 => 75,  146 => 74,  135 => 66,  106 => 40,  102 => 39,  98 => 38,  93 => 36,  89 => 35,  83 => 32,  79 => 31,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  55 => 22,  51 => 21,  47 => 20,  43 => 19,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>

<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->



    <head>
        <meta charset=\"utf-8\" />
        <title>CNGOT Admin</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <!-- BEGIN LAYOUT FIRST STYLES -->
            <link href=\"http://fonts.googleapis.com/css?family=Oswald:400,300,700\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"{{asset('bundles/cngot/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/global/plugins/morris/morris.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{asset('bundles/cngot/admin/assets/global/css/components.min.css')}}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/global/css/plugins.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"{{asset('bundles/cngot/admin/assets/layouts/layout5/css/layout.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{asset('bundles/cngot/admin/assets/layouts/layout5/css/custom.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"icon\" href=\"{{asset('bundles/cngot/logo.png')}}\" sizes=\"32x32\" />
        <link rel=\"icon\" href=\"{{asset('bundles/cngot/logo.png')}}\" sizes=\"192x192\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
    
    
    </head>
    <!-- END HEAD -->

    <body class=\"page-header-fixed page-sidebar-closed-hide-logo\">
        <!-- BEGIN CONTAINER -->
        <div class=\"wrapper\">
            <!-- BEGIN HEADER -->
            <header class=\"page-header\">
                <nav class=\"navbar mega-menu\" role=\"navigation\">
                    <div class=\"container-fluid\">
                        <div class=\"clearfix navbar-fixed-top\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"toggle-icon\">
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </span>
                            </button>
                            <!-- End Toggle Button -->
                            <!-- BEGIN LOGO -->
                            <a id=\"index\" class=\"page-logo\" href=\"#\">
                                <img src=\"{{asset('bundles/cngot/logo.png')}}\" alt=\"Logo\"> </a>
                            <!-- END LOGO -->

                            <!-- BEGIN TOPBAR ACTIONS -->
                            <div class=\"topbar-actions\">
                                <!-- BEGIN USER PROFILE -->
                                <div class=\"btn-group-img btn-group\">
                                    <button type=\"button\" class=\"btn btn-sm md-skip dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                        <span>Hi, {{app.user.nom}}</span>
                                        <img src=\"{{asset('bundles/cngot/profile/images/users/default-user.png')}}\" alt=\"\"> </button>
                                    <ul class=\"dropdown-menu-v2\" role=\"menu\">
                                        <li>
                                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                                <i class=\"icon-key\"></i> Se déconnecter </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END USER PROFILE -->
                            </div>
                            <!-- END TOPBAR ACTIONS -->
                        </div>
                        <!-- BEGIN HEADER MENU -->
                        <div class=\"nav-collapse collapse navbar-collapse navbar-responsive-collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"dropdown dropdown-fw dropdown-fw-disabled  active open selected\">
                                    <a href=\"{{ path('admin_users') }}\" class=\"text-uppercase\">
                                        <i class=\"icon-home\"></i> Utilisateurs </a>

                                </li>
                                <li class=\"dropdown dropdown-fw dropdown-fw-disabled  \">
                                    <a href=\"{{ path('admin_abstract') }}\" class=\"text-uppercase\">
                                        <i class=\"icon-puzzle\"></i> Abstracts </a>
                                </li>
                                <li class=\"dropdown dropdown-fw dropdown-fw-disabled  \">
                                    <a href=\"{{ path('add_video') }}\" class=\"text-uppercase\">
                                        <i class=\"icon-briefcase\"></i> Videos </a>
                                </li>

                            </ul>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!--/container-->
                </nav>
            </header>
            <!-- END HEADER -->
            <div class=\"container-fluid\">







                {% block content %}
                {% endblock %}













                <!-- BEGIN FOOTER -->
                <p class=\"copyright\"> 2016 &copy; 
                    <a target=\"_blank\" href=\"#\">VeLox IT</a> &nbsp;&nbsp;
                </p>
                <a href=\"#index\" class=\"go2top\">
                    <i class=\"icon-arrow-up\"></i>
                </a>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->


        <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<script src=\"../assets/global/plugins/ie8.fix.min.js\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jquery.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/js.cookie.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jquery.blockui.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/moment.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/morris/morris.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/morris/raphael-min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/counterup/jquery.waypoints.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/counterup/jquery.counterup.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/amcharts.js')}}../\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/serial.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/pie.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/radar.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/themes/light.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/ammap/ammap.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/amcharts/amstockcharts/amstock.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/flot/jquery.flot.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/flot/jquery.flot.resize.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/flot/jquery.flot.categories.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jquery.sparkline.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{asset('bundles/cngot/admin/assets/global/scripts/app.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{asset('bundles/cngot/admin/assets/pages/scripts/dashboard.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"{{asset('bundles/cngot/admin/assets/layouts/layout5/scripts/layout.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/layouts/global/scripts/quick-sidebar.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/layouts/global/scripts/quick-nav.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->







        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"{{asset('bundles/cngot/admin/assets/global/scripts/datatable.js')}}\" type=\"text/javascript\"></script>

        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/datatables/datatables.min.js')}}\" type=\"text/javascript\"></script>

        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{asset('bundles/cngot/admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{asset('bundles/cngot/admin/assets/pages/scripts/table-datatables-buttons.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->






        <script src=\"{{asset('bundles/cngot/admin/assets/pages/scripts/table-datatables-responsive.min.js')}}\" type=\"text/javascript\"></script>




        <!-- Google Code for Universal Analytics -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-37564768-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- End -->

        <!-- Google Tag Manager -->
        <noscript><iframe src=\"http://www.googletagmanager.com/ns.html?id=GTM-W276BJ\"
                          height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-W276BJ');</script>
        <!-- End -->
    </body>



    <!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2016 20:30:07 GMT -->
</html>";
    }
}
