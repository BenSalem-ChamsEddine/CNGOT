<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_78d5cf9397689a432ca0717e2b47c0d859d813231ce51f9e4bf1c5655dd4e99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d6e0d28bd1790166e68d29928590ad213f5bac7be1914c5ee170068ffc32246c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e0d28bd1790166e68d29928590ad213f5bac7be1914c5ee170068ffc32246c->enter($__internal_d6e0d28bd1790166e68d29928590ad213f5bac7be1914c5ee170068ffc32246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e0d28bd1790166e68d29928590ad213f5bac7be1914c5ee170068ffc32246c->leave($__internal_d6e0d28bd1790166e68d29928590ad213f5bac7be1914c5ee170068ffc32246c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63ef81ae4466a235e1886897fea4b27f06b9ee80c00887323b13ebee27ce4b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ef81ae4466a235e1886897fea4b27f06b9ee80c00887323b13ebee27ce4b4b->enter($__internal_63ef81ae4466a235e1886897fea4b27f06b9ee80c00887323b13ebee27ce4b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_63ef81ae4466a235e1886897fea4b27f06b9ee80c00887323b13ebee27ce4b4b->leave($__internal_63ef81ae4466a235e1886897fea4b27f06b9ee80c00887323b13ebee27ce4b4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
