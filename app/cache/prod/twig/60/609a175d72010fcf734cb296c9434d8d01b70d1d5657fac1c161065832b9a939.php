<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_21bb4511b2843ea184852faf51c64c1e1e70ea10c3c1e13b4560c72cad3487f8 extends Twig_Template
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
        $__internal_be5b5b7cd0c6448b856109582d8ecee3cfe3e2a7518ad73c242063245ef6e5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5b5b7cd0c6448b856109582d8ecee3cfe3e2a7518ad73c242063245ef6e5b2->enter($__internal_be5b5b7cd0c6448b856109582d8ecee3cfe3e2a7518ad73c242063245ef6e5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_be5b5b7cd0c6448b856109582d8ecee3cfe3e2a7518ad73c242063245ef6e5b2->leave($__internal_be5b5b7cd0c6448b856109582d8ecee3cfe3e2a7518ad73c242063245ef6e5b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b0e24a16aec2228cf98472d836c5605ca66e4b38bf9464e5278d1ec35e760640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e24a16aec2228cf98472d836c5605ca66e4b38bf9464e5278d1ec35e760640->enter($__internal_b0e24a16aec2228cf98472d836c5605ca66e4b38bf9464e5278d1ec35e760640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b0e24a16aec2228cf98472d836c5605ca66e4b38bf9464e5278d1ec35e760640->leave($__internal_b0e24a16aec2228cf98472d836c5605ca66e4b38bf9464e5278d1ec35e760640_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ae0a4287767960379a4dd77be1846892fb9c64a4eec7948a25f2cd6757685245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0a4287767960379a4dd77be1846892fb9c64a4eec7948a25f2cd6757685245->enter($__internal_ae0a4287767960379a4dd77be1846892fb9c64a4eec7948a25f2cd6757685245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ae0a4287767960379a4dd77be1846892fb9c64a4eec7948a25f2cd6757685245->leave($__internal_ae0a4287767960379a4dd77be1846892fb9c64a4eec7948a25f2cd6757685245_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c2fd52aa1305e94aef69a7588d59762ff8004956f54fe437573e534f6db25e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fd52aa1305e94aef69a7588d59762ff8004956f54fe437573e534f6db25e2f->enter($__internal_c2fd52aa1305e94aef69a7588d59762ff8004956f54fe437573e534f6db25e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c2fd52aa1305e94aef69a7588d59762ff8004956f54fe437573e534f6db25e2f->leave($__internal_c2fd52aa1305e94aef69a7588d59762ff8004956f54fe437573e534f6db25e2f_prof);

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
