<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_68d966a82e3ea41f4fd59ab4973969cda08903273ba70fadd3efd6f70c87c99d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f21ec0685e75d77888a40ea4b73b5632363fc357e1bb2fb123a69bd4eb6fa8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21ec0685e75d77888a40ea4b73b5632363fc357e1bb2fb123a69bd4eb6fa8de->enter($__internal_f21ec0685e75d77888a40ea4b73b5632363fc357e1bb2fb123a69bd4eb6fa8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f21ec0685e75d77888a40ea4b73b5632363fc357e1bb2fb123a69bd4eb6fa8de->leave($__internal_f21ec0685e75d77888a40ea4b73b5632363fc357e1bb2fb123a69bd4eb6fa8de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8660bd901e6e84e691c5d2ac13e994d7746050f8206595bc8fa337efebb9143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8660bd901e6e84e691c5d2ac13e994d7746050f8206595bc8fa337efebb9143->enter($__internal_b8660bd901e6e84e691c5d2ac13e994d7746050f8206595bc8fa337efebb9143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_b8660bd901e6e84e691c5d2ac13e994d7746050f8206595bc8fa337efebb9143->leave($__internal_b8660bd901e6e84e691c5d2ac13e994d7746050f8206595bc8fa337efebb9143_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
