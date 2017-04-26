<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6e048ec0254e9046b30129809f0684b3c99108d8c36d54fda34883d2234b742f extends Twig_Template
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
        $__internal_3f1e9ab172d0efbe1df4ea5db9df8dc6fad938cbb20e11f33ad5b5b88ab32056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1e9ab172d0efbe1df4ea5db9df8dc6fad938cbb20e11f33ad5b5b88ab32056->enter($__internal_3f1e9ab172d0efbe1df4ea5db9df8dc6fad938cbb20e11f33ad5b5b88ab32056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3f1e9ab172d0efbe1df4ea5db9df8dc6fad938cbb20e11f33ad5b5b88ab32056->leave($__internal_3f1e9ab172d0efbe1df4ea5db9df8dc6fad938cbb20e11f33ad5b5b88ab32056_prof);

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
