<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_66f5de117c597b8288572b5922cf296768e4bcbb291b3ab07701b510a92915ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8f781e454f97af5d145b35a1cbfdef9de2ebcf46b8a78b023e67acc238c3f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f781e454f97af5d145b35a1cbfdef9de2ebcf46b8a78b023e67acc238c3f9f->enter($__internal_a8f781e454f97af5d145b35a1cbfdef9de2ebcf46b8a78b023e67acc238c3f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a8f781e454f97af5d145b35a1cbfdef9de2ebcf46b8a78b023e67acc238c3f9f->leave($__internal_a8f781e454f97af5d145b35a1cbfdef9de2ebcf46b8a78b023e67acc238c3f9f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f50da253933040e1ca0082327e7e2b15c607a49eaeff12295be2a56a196b0a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50da253933040e1ca0082327e7e2b15c607a49eaeff12295be2a56a196b0a54->enter($__internal_f50da253933040e1ca0082327e7e2b15c607a49eaeff12295be2a56a196b0a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f50da253933040e1ca0082327e7e2b15c607a49eaeff12295be2a56a196b0a54->leave($__internal_f50da253933040e1ca0082327e7e2b15c607a49eaeff12295be2a56a196b0a54_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f3ce0c1cc899987164d5a2116b471c829154c498e3acd216891d77168d45fec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ce0c1cc899987164d5a2116b471c829154c498e3acd216891d77168d45fec8->enter($__internal_f3ce0c1cc899987164d5a2116b471c829154c498e3acd216891d77168d45fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f3ce0c1cc899987164d5a2116b471c829154c498e3acd216891d77168d45fec8->leave($__internal_f3ce0c1cc899987164d5a2116b471c829154c498e3acd216891d77168d45fec8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_090fe85d3d34d4343a08a2cae39b3777879fc430794662bc581ae9ac0ac5a3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090fe85d3d34d4343a08a2cae39b3777879fc430794662bc581ae9ac0ac5a3fd->enter($__internal_090fe85d3d34d4343a08a2cae39b3777879fc430794662bc581ae9ac0ac5a3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_090fe85d3d34d4343a08a2cae39b3777879fc430794662bc581ae9ac0ac5a3fd->leave($__internal_090fe85d3d34d4343a08a2cae39b3777879fc430794662bc581ae9ac0ac5a3fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
