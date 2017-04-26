<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_abe05ea31f04d09017f9952829813dc6346666f19e3e6dd3f03a448431bfd511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_bd741fbe9901e6a8994ff2d99c02c3a174c01480e3ac109610b51cf16bcb6c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd741fbe9901e6a8994ff2d99c02c3a174c01480e3ac109610b51cf16bcb6c87->enter($__internal_bd741fbe9901e6a8994ff2d99c02c3a174c01480e3ac109610b51cf16bcb6c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd741fbe9901e6a8994ff2d99c02c3a174c01480e3ac109610b51cf16bcb6c87->leave($__internal_bd741fbe9901e6a8994ff2d99c02c3a174c01480e3ac109610b51cf16bcb6c87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_753ee453fe2725f2c9d235a6359912448298da6a7bebe8375ade7c09b2b9849a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753ee453fe2725f2c9d235a6359912448298da6a7bebe8375ade7c09b2b9849a->enter($__internal_753ee453fe2725f2c9d235a6359912448298da6a7bebe8375ade7c09b2b9849a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_753ee453fe2725f2c9d235a6359912448298da6a7bebe8375ade7c09b2b9849a->leave($__internal_753ee453fe2725f2c9d235a6359912448298da6a7bebe8375ade7c09b2b9849a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
