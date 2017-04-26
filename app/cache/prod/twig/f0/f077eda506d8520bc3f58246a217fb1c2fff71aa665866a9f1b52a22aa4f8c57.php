<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_31cd4e87f79a2e25f98a8b432274f8f67a33e63b1ed7c41127fe33369945127a extends Twig_Template
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
        $__internal_a8c76c3e2d86f726f1825160949e61323314e706327e1249e1e3d059d6316f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c76c3e2d86f726f1825160949e61323314e706327e1249e1e3d059d6316f8b->enter($__internal_a8c76c3e2d86f726f1825160949e61323314e706327e1249e1e3d059d6316f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c76c3e2d86f726f1825160949e61323314e706327e1249e1e3d059d6316f8b->leave($__internal_a8c76c3e2d86f726f1825160949e61323314e706327e1249e1e3d059d6316f8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8ddfc19db230138c96aa93b4681b673c7386a5454ca0240efcb0119b5588ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ddfc19db230138c96aa93b4681b673c7386a5454ca0240efcb0119b5588ab3->enter($__internal_e8ddfc19db230138c96aa93b4681b673c7386a5454ca0240efcb0119b5588ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_e8ddfc19db230138c96aa93b4681b673c7386a5454ca0240efcb0119b5588ab3->leave($__internal_e8ddfc19db230138c96aa93b4681b673c7386a5454ca0240efcb0119b5588ab3_prof);

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
