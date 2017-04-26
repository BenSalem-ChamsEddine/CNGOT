<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e3c11f7fd6d039048da2fb002cb8a89a671564a9af74eb27745155c4cec2685b extends Twig_Template
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
        $__internal_5788347973cf936e6e52d2ec5920d62d464d701473b3eded4892bb4e46b15fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5788347973cf936e6e52d2ec5920d62d464d701473b3eded4892bb4e46b15fdd->enter($__internal_5788347973cf936e6e52d2ec5920d62d464d701473b3eded4892bb4e46b15fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5788347973cf936e6e52d2ec5920d62d464d701473b3eded4892bb4e46b15fdd->leave($__internal_5788347973cf936e6e52d2ec5920d62d464d701473b3eded4892bb4e46b15fdd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a025b88e08329ef80463d55400c7d19dd5c2487fe4574e32d1b7bdd467724c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a025b88e08329ef80463d55400c7d19dd5c2487fe4574e32d1b7bdd467724c0->enter($__internal_4a025b88e08329ef80463d55400c7d19dd5c2487fe4574e32d1b7bdd467724c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4a025b88e08329ef80463d55400c7d19dd5c2487fe4574e32d1b7bdd467724c0->leave($__internal_4a025b88e08329ef80463d55400c7d19dd5c2487fe4574e32d1b7bdd467724c0_prof);

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
