<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_97bb22892d6f257cbbc2cb2dd1d5617d3201c2840c1483ee1ff683f1a4d8036a extends Twig_Template
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
        $__internal_31f0da97f958ec927436de61a40b19e44c27c59ad93a4b03061d8ee3701fef44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f0da97f958ec927436de61a40b19e44c27c59ad93a4b03061d8ee3701fef44->enter($__internal_31f0da97f958ec927436de61a40b19e44c27c59ad93a4b03061d8ee3701fef44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f0da97f958ec927436de61a40b19e44c27c59ad93a4b03061d8ee3701fef44->leave($__internal_31f0da97f958ec927436de61a40b19e44c27c59ad93a4b03061d8ee3701fef44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d4089b3a99b0a59a0b5c1e8d3c0497fcebc72f90d0bcc8086430df8094f3595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4089b3a99b0a59a0b5c1e8d3c0497fcebc72f90d0bcc8086430df8094f3595->enter($__internal_9d4089b3a99b0a59a0b5c1e8d3c0497fcebc72f90d0bcc8086430df8094f3595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d4089b3a99b0a59a0b5c1e8d3c0497fcebc72f90d0bcc8086430df8094f3595->leave($__internal_9d4089b3a99b0a59a0b5c1e8d3c0497fcebc72f90d0bcc8086430df8094f3595_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b6ca891b4d59ed4c6608de1dcf748b4b38aaa32063ac65a4dc0d1eba1a3cc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6ca891b4d59ed4c6608de1dcf748b4b38aaa32063ac65a4dc0d1eba1a3cc23->enter($__internal_2b6ca891b4d59ed4c6608de1dcf748b4b38aaa32063ac65a4dc0d1eba1a3cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b6ca891b4d59ed4c6608de1dcf748b4b38aaa32063ac65a4dc0d1eba1a3cc23->leave($__internal_2b6ca891b4d59ed4c6608de1dcf748b4b38aaa32063ac65a4dc0d1eba1a3cc23_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_743f129a7b84d1ad34df4690446e0440a18beb861b9e4ab258f1c6aef11cfbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743f129a7b84d1ad34df4690446e0440a18beb861b9e4ab258f1c6aef11cfbd3->enter($__internal_743f129a7b84d1ad34df4690446e0440a18beb861b9e4ab258f1c6aef11cfbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_743f129a7b84d1ad34df4690446e0440a18beb861b9e4ab258f1c6aef11cfbd3->leave($__internal_743f129a7b84d1ad34df4690446e0440a18beb861b9e4ab258f1c6aef11cfbd3_prof);

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
