<?php

/* CNGOTBundle:Default:mail.html.twig */
class __TwigTemplate_68d5d4858f8c636edd7caee5d69bc50c0a411a0bb2511e48a7b2998f7f2a4945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'taw' => array($this, 'block_taw'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8965a44c0b7a9b391d2a2c6a59658a7d3494ad3c9ee8d093f5e5d484e6b9cbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8965a44c0b7a9b391d2a2c6a59658a7d3494ad3c9ee8d093f5e5d484e6b9cbbe->enter($__internal_8965a44c0b7a9b391d2a2c6a59658a7d3494ad3c9ee8d093f5e5d484e6b9cbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:Default:mail.html.twig"));

        // line 1
        $this->displayBlock('taw', $context, $blocks);
        
        $__internal_8965a44c0b7a9b391d2a2c6a59658a7d3494ad3c9ee8d093f5e5d484e6b9cbbe->leave($__internal_8965a44c0b7a9b391d2a2c6a59658a7d3494ad3c9ee8d093f5e5d484e6b9cbbe_prof);

    }

    public function block_taw($context, array $blocks = array())
    {
        $__internal_9610119368a7ff3f983089d13e703c60cb93122a93ed14325e0d93785a80d0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9610119368a7ff3f983089d13e703c60cb93122a93ed14325e0d93785a80d0f0->enter($__internal_9610119368a7ff3f983089d13e703c60cb93122a93ed14325e0d93785a80d0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "taw"));

        // line 2
        echo "<body> Votre demande a été envoyée avec succès </body>
";
        
        $__internal_9610119368a7ff3f983089d13e703c60cb93122a93ed14325e0d93785a80d0f0->leave($__internal_9610119368a7ff3f983089d13e703c60cb93122a93ed14325e0d93785a80d0f0_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:Default:mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{%block taw %}
<body> Votre demande a été envoyée avec succès </body>
{%endblock%}";
    }
}
