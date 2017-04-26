<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_feedeeb0781b6d66d7c595459cb4c37cd684a7b954e1438483904b3d146522ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77941ad06dad63444baaf35fa7177d8419a0ae62f1822f588d4ad05ee0e7d2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77941ad06dad63444baaf35fa7177d8419a0ae62f1822f588d4ad05ee0e7d2ee->enter($__internal_77941ad06dad63444baaf35fa7177d8419a0ae62f1822f588d4ad05ee0e7d2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            echo "                
                ";
            // line 4
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 5
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CNGOTBundle:Admin:index"));
                echo "
                ";
            } else {
                // line 7
                echo "                    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CNGOTBundle:Default:userHome"));
                echo "
                ";
            }
            // line 9
            echo "                
                
            ";
        } else {
            // line 12
            echo "

<!DOCTYPE html>
<html>

<head>

  <meta charset=\"UTF-8\">

  <title>CNGOT - Login Page</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
\tmargin: 0;
\tpadding: 0;
\tbackground: #fff;

\tcolor: #fff;
\tfont-family: Arial;
\tfont-size: 12px;
}

.body{
\tposition: absolute;
\ttop: -20px;
\tleft: -20px;
\tright: -40px;
\tbottom: -40px;
\twidth: auto;
\theight: auto;
\tbackground-image: url(https://thumbs.dreamstime.com/z/science-medical-blue-background-30204851.jpg);
\tbackground-size: cover;
\t-webkit-filter: blur(5px);
\tz-index: 0;
}

.grad{
\tposition: absolute;
\ttop: -20px;
\tleft: -20px;
\tright: -40px;
\tbottom: -40px;
\twidth: auto;
\theight: auto;
\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
\tz-index: 1;
\topacity: 0.7;
}

.header{
\tposition: absolute;
\ttop: calc(50% - 35px);
\tleft: calc(50% - 255px);
\tz-index: 2;
}

.header div{
\tfloat: left;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 35px;
\tfont-weight: 200;
}

.header div span{
\tcolor: #5379fa !important;
}

.login{
\tposition: absolute;
\ttop: calc(50% - 75px);
\tleft: calc(50% - 50px);
\theight: 150px;
\twidth: 350px;
\tpadding: 10px;
\tz-index: 2;
}

.login input[type=text]{
\twidth: 250px;
\theight: 30px;
\tbackground: transparent;
\tborder: 1px solid rgba(255,255,255,0.6);
\tborder-radius: 2px;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 4px;
}

.login input[type=password]{
\twidth: 250px;
\theight: 30px;
\tbackground: transparent;
\tborder: 1px solid rgba(255,255,255,0.6);
\tborder-radius: 2px;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 4px;
\tmargin-top: 10px;
}

.login input[type=submit]{
\twidth: 260px;
\theight: 35px;
\tbackground: #fff;
\tborder: 1px solid #fff;
\tcursor: pointer;
\tborder-radius: 2px;
\tcolor: #a18d6c;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 6px;
\tmargin-top: 10px;
}

.login input[type=submit]:hover{
\topacity: 0.8;
}

.login input[type=submit]:active{
\topacity: 0.6;
}

.login input[type=text]:focus{
\toutline: none;
\tborder: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
\toutline: none;
\tborder: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
\toutline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/login/js/prefixfree.min.js"), "html", null, true);
            echo "\"></script>

</head>
    <body>


        ";
            // line 172
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
                // line 173
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 174
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 175
                        echo "                    <div class=\"flash-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">
                        ";
                        // line 176
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "        ";
            }
            // line 181
            echo "
        <div>
            ";
            // line 183
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 185
            echo "        </div>
    </body>
</html>
 ";
        }
        
        $__internal_77941ad06dad63444baaf35fa7177d8419a0ae62f1822f588d4ad05ee0e7d2ee->leave($__internal_77941ad06dad63444baaf35fa7177d8419a0ae62f1822f588d4ad05ee0e7d2ee_prof);

    }

    // line 183
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d40c245ade13485cae3d310278e38085568d3a53d58b55f7c214d30e7066684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d40c245ade13485cae3d310278e38085568d3a53d58b55f7c214d30e7066684->enter($__internal_2d40c245ade13485cae3d310278e38085568d3a53d58b55f7c214d30e7066684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 184
        echo "            ";
        
        $__internal_2d40c245ade13485cae3d310278e38085568d3a53d58b55f7c214d30e7066684->leave($__internal_2d40c245ade13485cae3d310278e38085568d3a53d58b55f7c214d30e7066684_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 184,  267 => 183,  256 => 185,  254 => 183,  250 => 181,  247 => 180,  241 => 179,  232 => 176,  227 => 175,  222 => 174,  217 => 173,  215 => 172,  206 => 166,  50 => 12,  45 => 9,  39 => 7,  33 => 5,  31 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                
                {% if is_granted('ROLE_ADMIN') %}
                    {{ render(controller('CNGOTBundle:Admin:index')) }}
                {% else %}
                    {{ render(controller('CNGOTBundle:Default:userHome')) }}
                {% endif %}
                
                
            {% else %}


<!DOCTYPE html>
<html>

<head>

  <meta charset=\"UTF-8\">

  <title>CNGOT - Login Page</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
\tmargin: 0;
\tpadding: 0;
\tbackground: #fff;

\tcolor: #fff;
\tfont-family: Arial;
\tfont-size: 12px;
}

.body{
\tposition: absolute;
\ttop: -20px;
\tleft: -20px;
\tright: -40px;
\tbottom: -40px;
\twidth: auto;
\theight: auto;
\tbackground-image: url(https://thumbs.dreamstime.com/z/science-medical-blue-background-30204851.jpg);
\tbackground-size: cover;
\t-webkit-filter: blur(5px);
\tz-index: 0;
}

.grad{
\tposition: absolute;
\ttop: -20px;
\tleft: -20px;
\tright: -40px;
\tbottom: -40px;
\twidth: auto;
\theight: auto;
\tbackground: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
\tz-index: 1;
\topacity: 0.7;
}

.header{
\tposition: absolute;
\ttop: calc(50% - 35px);
\tleft: calc(50% - 255px);
\tz-index: 2;
}

.header div{
\tfloat: left;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 35px;
\tfont-weight: 200;
}

.header div span{
\tcolor: #5379fa !important;
}

.login{
\tposition: absolute;
\ttop: calc(50% - 75px);
\tleft: calc(50% - 50px);
\theight: 150px;
\twidth: 350px;
\tpadding: 10px;
\tz-index: 2;
}

.login input[type=text]{
\twidth: 250px;
\theight: 30px;
\tbackground: transparent;
\tborder: 1px solid rgba(255,255,255,0.6);
\tborder-radius: 2px;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 4px;
}

.login input[type=password]{
\twidth: 250px;
\theight: 30px;
\tbackground: transparent;
\tborder: 1px solid rgba(255,255,255,0.6);
\tborder-radius: 2px;
\tcolor: #fff;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 4px;
\tmargin-top: 10px;
}

.login input[type=submit]{
\twidth: 260px;
\theight: 35px;
\tbackground: #fff;
\tborder: 1px solid #fff;
\tcursor: pointer;
\tborder-radius: 2px;
\tcolor: #a18d6c;
\tfont-family: 'Exo', sans-serif;
\tfont-size: 16px;
\tfont-weight: 400;
\tpadding: 6px;
\tmargin-top: 10px;
}

.login input[type=submit]:hover{
\topacity: 0.8;
}

.login input[type=submit]:active{
\topacity: 0.6;
}

.login input[type=text]:focus{
\toutline: none;
\tborder: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
\toutline: none;
\tborder: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
\toutline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src=\"{{asset('bundles/cngot/login/js/prefixfree.min.js')}}\"></script>

</head>
    <body>


        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
 {% endif %}";
    }
}
