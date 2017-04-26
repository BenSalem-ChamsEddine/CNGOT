<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2922ffe380b0c6ca192c7e1ef826c1adced75b55aaa4c5f067b41920971e0382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_cffe093393282c0ed707ced025b79431809adb462492f914d817920a4ea800be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffe093393282c0ed707ced025b79431809adb462492f914d817920a4ea800be->enter($__internal_cffe093393282c0ed707ced025b79431809adb462492f914d817920a4ea800be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cffe093393282c0ed707ced025b79431809adb462492f914d817920a4ea800be->leave($__internal_cffe093393282c0ed707ced025b79431809adb462492f914d817920a4ea800be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2628e734047ad8fc7762cedb4e1e7d2c5a00647fe7ebaa7fafb64f56059fc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2628e734047ad8fc7762cedb4e1e7d2c5a00647fe7ebaa7fafb64f56059fc7a->enter($__internal_e2628e734047ad8fc7762cedb4e1e7d2c5a00647fe7ebaa7fafb64f56059fc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e2628e734047ad8fc7762cedb4e1e7d2c5a00647fe7ebaa7fafb64f56059fc7a->leave($__internal_e2628e734047ad8fc7762cedb4e1e7d2c5a00647fe7ebaa7fafb64f56059fc7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
