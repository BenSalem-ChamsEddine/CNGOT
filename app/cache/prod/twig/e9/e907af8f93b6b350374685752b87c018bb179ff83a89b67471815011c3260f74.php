<?php

/* CNGOTBundle:Default:index.html.twig */
class __TwigTemplate_4d664b84bec89408a81118417f0038696b10c6e8f810f10af19a0c624b5de1df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CNGOTBundle::layout.html.twig", "CNGOTBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CNGOTBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d364b2598aca00c2805797966f7a792be4172adb9d6967e82428518920d2c734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d364b2598aca00c2805797966f7a792be4172adb9d6967e82428518920d2c734->enter($__internal_d364b2598aca00c2805797966f7a792be4172adb9d6967e82428518920d2c734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d364b2598aca00c2805797966f7a792be4172adb9d6967e82428518920d2c734->leave($__internal_d364b2598aca00c2805797966f7a792be4172adb9d6967e82428518920d2c734_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CNGOTBundle::layout.html.twig\" %}
";
    }
}
