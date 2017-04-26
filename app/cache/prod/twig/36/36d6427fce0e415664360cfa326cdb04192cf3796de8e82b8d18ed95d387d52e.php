<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2753a5ebe62409c3c7f16f22c170be8d77ea887f8e9fa0876f750457abdbdba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layoutInscription.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layoutInscription.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db476ba3d0e71f35bd5a72990f6bcf951159571ee8b7db7d2a5d1a10c742db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db476ba3d0e71f35bd5a72990f6bcf951159571ee8b7db7d2a5d1a10c742db0->enter($__internal_5db476ba3d0e71f35bd5a72990f6bcf951159571ee8b7db7d2a5d1a10c742db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db476ba3d0e71f35bd5a72990f6bcf951159571ee8b7db7d2a5d1a10c742db0->leave($__internal_5db476ba3d0e71f35bd5a72990f6bcf951159571ee8b7db7d2a5d1a10c742db0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebddc358ce037eec01dd012dbd60c83b433b16b7bc2dea102b83fc3a654d79fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebddc358ce037eec01dd012dbd60c83b433b16b7bc2dea102b83fc3a654d79fd->enter($__internal_ebddc358ce037eec01dd012dbd60c83b433b16b7bc2dea102b83fc3a654d79fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ebddc358ce037eec01dd012dbd60c83b433b16b7bc2dea102b83fc3a654d79fd->leave($__internal_ebddc358ce037eec01dd012dbd60c83b433b16b7bc2dea102b83fc3a654d79fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
        return "{% extends \"FOSUserBundle::layoutInscription.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
