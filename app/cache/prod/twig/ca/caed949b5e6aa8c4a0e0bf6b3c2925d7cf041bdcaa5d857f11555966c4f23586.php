<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9721a0228c13c274ca652d7c324c46bd5708614f38817d3567d14c4f9934f95c extends Twig_Template
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
        $__internal_f1ff97b7d06277c83373f899a39be341fab86abc0057607baa6120dce54f51d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ff97b7d06277c83373f899a39be341fab86abc0057607baa6120dce54f51d5->enter($__internal_f1ff97b7d06277c83373f899a39be341fab86abc0057607baa6120dce54f51d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ff97b7d06277c83373f899a39be341fab86abc0057607baa6120dce54f51d5->leave($__internal_f1ff97b7d06277c83373f899a39be341fab86abc0057607baa6120dce54f51d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_010c804aade77a44f57065122beed19976f5d3908036c517b0a69c88153255e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010c804aade77a44f57065122beed19976f5d3908036c517b0a69c88153255e2->enter($__internal_010c804aade77a44f57065122beed19976f5d3908036c517b0a69c88153255e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_010c804aade77a44f57065122beed19976f5d3908036c517b0a69c88153255e2->leave($__internal_010c804aade77a44f57065122beed19976f5d3908036c517b0a69c88153255e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_52b34dfccd6a7a8a29a0b2651477e7988107acbcac25a1b70730c3f7ffcca845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b34dfccd6a7a8a29a0b2651477e7988107acbcac25a1b70730c3f7ffcca845->enter($__internal_52b34dfccd6a7a8a29a0b2651477e7988107acbcac25a1b70730c3f7ffcca845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_52b34dfccd6a7a8a29a0b2651477e7988107acbcac25a1b70730c3f7ffcca845->leave($__internal_52b34dfccd6a7a8a29a0b2651477e7988107acbcac25a1b70730c3f7ffcca845_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e06fbfb07a629fda99508e045a32ab95c5a0139f7c9f55e30abcc207c833aac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06fbfb07a629fda99508e045a32ab95c5a0139f7c9f55e30abcc207c833aac3->enter($__internal_e06fbfb07a629fda99508e045a32ab95c5a0139f7c9f55e30abcc207c833aac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e06fbfb07a629fda99508e045a32ab95c5a0139f7c9f55e30abcc207c833aac3->leave($__internal_e06fbfb07a629fda99508e045a32ab95c5a0139f7c9f55e30abcc207c833aac3_prof);

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
