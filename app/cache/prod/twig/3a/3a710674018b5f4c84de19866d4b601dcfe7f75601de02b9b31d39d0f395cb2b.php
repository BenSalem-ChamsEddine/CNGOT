<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4df997b91dbe60f75a3084ad672d06d92b35ca4650e76e9a00962c54ab41c85c extends Twig_Template
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
        $__internal_cb3ea934ccb71beab758589ad842a01d313757b079314e0363ad752151034397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3ea934ccb71beab758589ad842a01d313757b079314e0363ad752151034397->enter($__internal_cb3ea934ccb71beab758589ad842a01d313757b079314e0363ad752151034397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3ea934ccb71beab758589ad842a01d313757b079314e0363ad752151034397->leave($__internal_cb3ea934ccb71beab758589ad842a01d313757b079314e0363ad752151034397_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c8b14bffd42de972a9abc1f8d0ee2d303b4a1b3e7bc50874f3e462b2bcc88fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8b14bffd42de972a9abc1f8d0ee2d303b4a1b3e7bc50874f3e462b2bcc88fc->enter($__internal_4c8b14bffd42de972a9abc1f8d0ee2d303b4a1b3e7bc50874f3e462b2bcc88fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4c8b14bffd42de972a9abc1f8d0ee2d303b4a1b3e7bc50874f3e462b2bcc88fc->leave($__internal_4c8b14bffd42de972a9abc1f8d0ee2d303b4a1b3e7bc50874f3e462b2bcc88fc_prof);

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
