<?php

/* CNGOTBundle:Default:index.html.twig */
class __TwigTemplate_0c2d1256eb6f59e6868d5b8e32ea816f542465f7983fbd4c9040e92b5e014205 extends Twig_Template
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
        $__internal_02bb4c42130f860d2bfae441291327bbcb7a2b42fe9cc6f1eb723abc0d8523fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bb4c42130f860d2bfae441291327bbcb7a2b42fe9cc6f1eb723abc0d8523fc->enter($__internal_02bb4c42130f860d2bfae441291327bbcb7a2b42fe9cc6f1eb723abc0d8523fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02bb4c42130f860d2bfae441291327bbcb7a2b42fe9cc6f1eb723abc0d8523fc->leave($__internal_02bb4c42130f860d2bfae441291327bbcb7a2b42fe9cc6f1eb723abc0d8523fc_prof);

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
