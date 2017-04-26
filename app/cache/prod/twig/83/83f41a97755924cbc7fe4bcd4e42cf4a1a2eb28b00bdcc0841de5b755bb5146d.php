<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_fc12f760ec84fe93bb51cb92994abb51f440dd544b7524036baed58d8664870e extends Twig_Template
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
        $__internal_22aa7cf3471cb9073c6e0fe515551299406e1aebd2fb9fd6ada1ddedb413916d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22aa7cf3471cb9073c6e0fe515551299406e1aebd2fb9fd6ada1ddedb413916d->enter($__internal_22aa7cf3471cb9073c6e0fe515551299406e1aebd2fb9fd6ada1ddedb413916d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "<div class=\"body\"></div>
\t\t<div class=\"grad\"></div>
\t\t<div class=\"header\">
\t\t\t<div>CNGOT login</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"login\">
                                
\t\t\t\t<input type=\"text\" placeholder=\"username\"  id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"><br>
\t\t\t\t
                                
                                <input type=\"password\" placeholder=\"password\" id=\"password\" name=\"_password\" required=\"required\"><br>
                                
                                
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t</div>
   
</form>




  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
";
        
        $__internal_22aa7cf3471cb9073c6e0fe515551299406e1aebd2fb9fd6ada1ddedb413916d->leave($__internal_22aa7cf3471cb9073c6e0fe515551299406e1aebd2fb9fd6ada1ddedb413916d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  68 => 26,  58 => 19,  48 => 11,  42 => 9,  40 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
<div class=\"body\"></div>
\t\t<div class=\"grad\"></div>
\t\t<div class=\"header\">
\t\t\t<div>CNGOT login</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"login\">
                                
\t\t\t\t<input type=\"text\" placeholder=\"username\"  id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"><br>
\t\t\t\t
                                
                                <input type=\"password\" placeholder=\"password\" id=\"password\" name=\"_password\" required=\"required\"><br>
                                
                                
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
\t\t\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\">
\t\t</div>
   
</form>




  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
";
    }
}
