<?php

/* CNGOTBundle:admin:addVideo.html.twig */
class __TwigTemplate_cc813631d8d678f665b036b7d04d13878ba3f92dccbee65ba89b2c5a489352eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CNGOTBundle:admin:layout.html.twig", "CNGOTBundle:admin:addVideo.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CNGOTBundle:admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a313ee85b2054416fb5ab4d696514e67f7e15d218f692163be093d496fd6eaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a313ee85b2054416fb5ab4d696514e67f7e15d218f692163be093d496fd6eaa9->enter($__internal_a313ee85b2054416fb5ab4d696514e67f7e15d218f692163be093d496fd6eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:admin:addVideo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a313ee85b2054416fb5ab4d696514e67f7e15d218f692163be093d496fd6eaa9->leave($__internal_a313ee85b2054416fb5ab4d696514e67f7e15d218f692163be093d496fd6eaa9_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_529b214cd6595ebb75b73a765f7781db0f1f120933c515dd3774113460d9a851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529b214cd6595ebb75b73a765f7781db0f1f120933c515dd3774113460d9a851->enter($__internal_529b214cd6595ebb75b73a765f7781db0f1f120933c515dd3774113460d9a851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "





    <!DOCTYPE>
    <html>

        <head>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <style>#success_message{ display: none;}</style>
        </head>
        <body>

            <div class=\"container\">
                <form class=\"well form-horizontal\" action=\"#\" ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method=\"post\"  id=\"contact_form\">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Ajouter video</legend>

                        <!-- Text input-->

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\">Titre</label>  
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre"))));
        // line 35
        echo "
                                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->


                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\">Description</label>  
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control"))));
        echo "
                                        ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\">Date</label>  
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control"))));
        echo "
                                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\">Joindre une vidéo (au format mp4 seulment)</label>  
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-globe\"></i></span>
                                        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control", "value" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(null))));
        echo "
                                        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>

                        ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                        <!-- Success message -->
                        <div class=\"alert alert-success\" role=\"alert\" id=\"success_message\">Success <i class=\"glyphicon glyphicon-thumbs-up\"></i> Thanks for contacting us, we will get back to you shortly.</div>

                        <!-- Button -->
                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\"></label>
                            <div class=\"col-md-4\">
                                <button type=\"submit\" class=\"btn btn-warning\" >Soumettre <span class=\"glyphicon glyphicon-send\"></span></button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div><!-- /.container -->

    </body>
</html>









";
        
        $__internal_529b214cd6595ebb75b73a765f7781db0f1f120933c515dd3774113460d9a851->leave($__internal_529b214cd6595ebb75b73a765f7781db0f1f120933c515dd3774113460d9a851_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:admin:addVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 77,  133 => 72,  129 => 71,  117 => 62,  113 => 61,  99 => 50,  95 => 49,  79 => 36,  76 => 35,  74 => 34,  58 => 21,  40 => 5,  34 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CNGOTBundle:admin:layout.html.twig\" %}


{% block content %}






    <!DOCTYPE>
    <html>

        <head>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <style>#success_message{ display: none;}</style>
        </head>
        <body>

            <div class=\"container\">
                <form class=\"well form-horizontal\" action=\"#\" {{ form_enctype(form) }}  method=\"post\"  id=\"contact_form\">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Ajouter video</legend>

                        <!-- Text input-->

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\">Titre</label>  
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                        {{ form_widget(form.titre, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'Titre'|trans} }) }}
                                        {{ form_errors(form.titre) }}
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->


                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\">Description</label>  
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                        {{ form_widget(form.description, { 'attr': {'class': \"form-control\"|trans} }) }}
                                        {{ form_errors(form.description) }}
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->

                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\">Date</label>  
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                        {{ form_widget(form.date, { 'attr': {'class': \"form-control\"|trans} }) }}
                                        {{ form_errors(form.date) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\">Joindre une vidéo (au format mp4 seulment)</label>  
                            <div class=\"col-md-4 inputGroupContainer\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-globe\"></i></span>
                                        {{ form_widget(form.file, { 'attr': {'class': \"form-control\",'value': null |trans} }) }}
                                        {{ form_errors(form.file) }}
                                </div>
                            </div>
                        </div>

                        {{ form_rest(form) }}

                        <!-- Success message -->
                        <div class=\"alert alert-success\" role=\"alert\" id=\"success_message\">Success <i class=\"glyphicon glyphicon-thumbs-up\"></i> Thanks for contacting us, we will get back to you shortly.</div>

                        <!-- Button -->
                        <div class=\"form-group\">
                            <label class=\"col-md-4 control-label\"></label>
                            <div class=\"col-md-4\">
                                <button type=\"submit\" class=\"btn btn-warning\" >Soumettre <span class=\"glyphicon glyphicon-send\"></span></button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div><!-- /.container -->

    </body>
</html>









{% endblock %}    ";
    }
}
