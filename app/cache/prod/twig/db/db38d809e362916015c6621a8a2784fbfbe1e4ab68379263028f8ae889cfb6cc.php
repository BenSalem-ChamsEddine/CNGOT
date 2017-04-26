<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_56554abd0789cf09ce03441a915e95c0987ad3fd9e23422bbb4191cb1e3b6b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6212fc258daccdab83e5904a23aecc07efc91d6c1cc1c387c101e57a99accb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6212fc258daccdab83e5904a23aecc07efc91d6c1cc1c387c101e57a99accb41->enter($__internal_6212fc258daccdab83e5904a23aecc07efc91d6c1cc1c387c101e57a99accb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6212fc258daccdab83e5904a23aecc07efc91d6c1cc1c387c101e57a99accb41->leave($__internal_6212fc258daccdab83e5904a23aecc07efc91d6c1cc1c387c101e57a99accb41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b458f82f7e593f8600dcec9839df8038dde4f2e02573f0323554ffb519d2e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b458f82f7e593f8600dcec9839df8038dde4f2e02573f0323554ffb519d2e02->enter($__internal_4b458f82f7e593f8600dcec9839df8038dde4f2e02573f0323554ffb519d2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_4b458f82f7e593f8600dcec9839df8038dde4f2e02573f0323554ffb519d2e02->leave($__internal_4b458f82f7e593f8600dcec9839df8038dde4f2e02573f0323554ffb519d2e02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
