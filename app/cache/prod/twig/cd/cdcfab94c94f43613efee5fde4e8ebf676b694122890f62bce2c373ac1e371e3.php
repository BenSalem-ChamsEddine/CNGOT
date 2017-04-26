<?php

/* CNGOTBundle:Default:index.html.twig */
class __TwigTemplate_d844745bccac75db4a50f6e11a8bfccee090ed17c2c1f7e1f8dd91683eb41c53 extends Twig_Template
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
        $__internal_9fc553db52e129a19ec001f4c2bfca82574251a98215812285f6b0bcb3a782b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc553db52e129a19ec001f4c2bfca82574251a98215812285f6b0bcb3a782b2->enter($__internal_9fc553db52e129a19ec001f4c2bfca82574251a98215812285f6b0bcb3a782b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc553db52e129a19ec001f4c2bfca82574251a98215812285f6b0bcb3a782b2->leave($__internal_9fc553db52e129a19ec001f4c2bfca82574251a98215812285f6b0bcb3a782b2_prof);

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
