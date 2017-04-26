<?php

/* CNGOTBundle:admin:addVideo.html.twig */
class __TwigTemplate_450ebc2e22049ae935fa8ea53febc7c568c68c288bae629d4db3ad6db84455a7 extends Twig_Template
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
        $__internal_f3a6bbac2a4842dff996e910efeec08acf0613dd27324f5208eca9aa7f269611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a6bbac2a4842dff996e910efeec08acf0613dd27324f5208eca9aa7f269611->enter($__internal_f3a6bbac2a4842dff996e910efeec08acf0613dd27324f5208eca9aa7f269611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:admin:addVideo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3a6bbac2a4842dff996e910efeec08acf0613dd27324f5208eca9aa7f269611->leave($__internal_f3a6bbac2a4842dff996e910efeec08acf0613dd27324f5208eca9aa7f269611_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9cb6be2553e5e4475bc17528a0d9e63648751421855c11114c379fdc5ac8524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cb6be2553e5e4475bc17528a0d9e63648751421855c11114c379fdc5ac8524->enter($__internal_b9cb6be2553e5e4475bc17528a0d9e63648751421855c11114c379fdc5ac8524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b9cb6be2553e5e4475bc17528a0d9e63648751421855c11114c379fdc5ac8524->leave($__internal_b9cb6be2553e5e4475bc17528a0d9e63648751421855c11114c379fdc5ac8524_prof);

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
