<?php

/* FOSUserBundle::layoutInscription.html.twig */
class __TwigTemplate_5b99e054a49512427a772e0dbd74ebbf7ef9b43faea16dbdabd427631f2fabbb extends Twig_Template
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
        $__internal_b608ccb76729d6b056f4a99495e23328600ab0ed94c793f2b4b0c135425674fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b608ccb76729d6b056f4a99495e23328600ab0ed94c793f2b4b0c135425674fe->enter($__internal_b608ccb76729d6b056f4a99495e23328600ab0ed94c793f2b4b0c135425674fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layoutInscription.html.twig"));

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
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CNGOTBundle:Admin:index"));
                echo "
    ";
            } else {
                // line 7
                echo "        ";
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
    <html  lang=\"fr\">
        <head>
            <meta charset=\"UTF-8\"> 
            <title>CNGOT Inscription</title>
            <meta http-equiv=\"Content-Type\" content=\"text/html\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/register/css/default.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        </head>
        <body> 




            ";
            // line 30
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
                // line 31
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 32
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 33
                        echo "                        <div class=\"flash-";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "\">
                            ";
                        // line 34
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                        </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            ";
            }
            // line 39
            echo "
            <div>
                ";
            // line 41
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 43
            echo "            </div>
        </body>
    </html>

";
        }
        
        $__internal_b608ccb76729d6b056f4a99495e23328600ab0ed94c793f2b4b0c135425674fe->leave($__internal_b608ccb76729d6b056f4a99495e23328600ab0ed94c793f2b4b0c135425674fe_prof);

    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32e731ce559cf18fd752ae54441e1b955c517c1e0699bd2bdae7dcb2a4cc27d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e731ce559cf18fd752ae54441e1b955c517c1e0699bd2bdae7dcb2a4cc27d2->enter($__internal_32e731ce559cf18fd752ae54441e1b955c517c1e0699bd2bdae7dcb2a4cc27d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 42
        echo "                ";
        
        $__internal_32e731ce559cf18fd752ae54441e1b955c517c1e0699bd2bdae7dcb2a4cc27d2->leave($__internal_32e731ce559cf18fd752ae54441e1b955c517c1e0699bd2bdae7dcb2a4cc27d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layoutInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  126 => 41,  114 => 43,  112 => 41,  108 => 39,  105 => 38,  99 => 37,  90 => 34,  85 => 33,  80 => 32,  75 => 31,  73 => 30,  60 => 20,  50 => 12,  45 => 9,  39 => 7,  33 => 5,  31 => 4,  28 => 3,  26 => 2,  23 => 1,);
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
    <html  lang=\"fr\">
        <head>
            <meta charset=\"UTF-8\"> 
            <title>CNGOT Inscription</title>
            <meta http-equiv=\"Content-Type\" content=\"text/html\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('bundles/cngot/register/css/default.css')}}\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
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
