<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_27f4b87eaeb4cc4c0b457ff3c004a3933cb2d5bc3416623943e704826e74b624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5ca813c594326a13834b0d876e6d03fb6e39afe6512fe6d5478dfa906db0a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ca813c594326a13834b0d876e6d03fb6e39afe6512fe6d5478dfa906db0a28->enter($__internal_b5ca813c594326a13834b0d876e6d03fb6e39afe6512fe6d5478dfa906db0a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b5ca813c594326a13834b0d876e6d03fb6e39afe6512fe6d5478dfa906db0a28->leave($__internal_b5ca813c594326a13834b0d876e6d03fb6e39afe6512fe6d5478dfa906db0a28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
