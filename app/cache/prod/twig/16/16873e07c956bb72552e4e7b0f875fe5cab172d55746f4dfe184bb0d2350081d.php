<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d39c08832c4a7b79d88fbb5227461058243e16cb82b71e67a8cf92fca832c8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e461ff364f5840cb1051a687f942ea7527f588c3f3fafbfb8c1504408ad8bb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e461ff364f5840cb1051a687f942ea7527f588c3f3fafbfb8c1504408ad8bb3c->enter($__internal_e461ff364f5840cb1051a687f942ea7527f588c3f3fafbfb8c1504408ad8bb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e461ff364f5840cb1051a687f942ea7527f588c3f3fafbfb8c1504408ad8bb3c->leave($__internal_e461ff364f5840cb1051a687f942ea7527f588c3f3fafbfb8c1504408ad8bb3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ac77da0288738fffcc33f760c9481f2248a823f4728dfaa0bfba23a9d284628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac77da0288738fffcc33f760c9481f2248a823f4728dfaa0bfba23a9d284628->enter($__internal_2ac77da0288738fffcc33f760c9481f2248a823f4728dfaa0bfba23a9d284628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ac77da0288738fffcc33f760c9481f2248a823f4728dfaa0bfba23a9d284628->leave($__internal_2ac77da0288738fffcc33f760c9481f2248a823f4728dfaa0bfba23a9d284628_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb77e494f64ead1330fc9ab88999aa62bdd7c4ac0f8d0d2a4498b1a80c091b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb77e494f64ead1330fc9ab88999aa62bdd7c4ac0f8d0d2a4498b1a80c091b9f->enter($__internal_cb77e494f64ead1330fc9ab88999aa62bdd7c4ac0f8d0d2a4498b1a80c091b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb77e494f64ead1330fc9ab88999aa62bdd7c4ac0f8d0d2a4498b1a80c091b9f->leave($__internal_cb77e494f64ead1330fc9ab88999aa62bdd7c4ac0f8d0d2a4498b1a80c091b9f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d64f12bfa7e3cf0d035f32b621737e84b2611e0a5a6c7045af26d9f780266e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64f12bfa7e3cf0d035f32b621737e84b2611e0a5a6c7045af26d9f780266e61->enter($__internal_d64f12bfa7e3cf0d035f32b621737e84b2611e0a5a6c7045af26d9f780266e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d64f12bfa7e3cf0d035f32b621737e84b2611e0a5a6c7045af26d9f780266e61->leave($__internal_d64f12bfa7e3cf0d035f32b621737e84b2611e0a5a6c7045af26d9f780266e61_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
