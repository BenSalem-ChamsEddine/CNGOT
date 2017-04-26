<?php

/* CNGOTBundle:user:addAbstractVideo.html.twig */
class __TwigTemplate_d843e4f09ba4b0c83ebbebe3690c49be7394d655b150fdc490d6348e5fc5c436 extends Twig_Template
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
        $__internal_f018ab0dab72290c51b7aa5a80402c9d8cc2f0b575ebb4ef89dd6ac137f5834b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f018ab0dab72290c51b7aa5a80402c9d8cc2f0b575ebb4ef89dd6ac137f5834b->enter($__internal_f018ab0dab72290c51b7aa5a80402c9d8cc2f0b575ebb4ef89dd6ac137f5834b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:user:addAbstractVideo.html.twig"));

        // line 1
        echo "<!DOCTYPE>
<html>

    <head>
         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <style>#success_message{ display: none;}</style>
        <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" sizes=\"32x32\" />
        <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" sizes=\"192x192\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/cngot/logo.png"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <div class=\"container\">
            <form class=\"well form-horizontal\" action=\"#\" ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  method=\"post\"  id=\"contact_form\">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Soumettre un abstract</legend>

                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Titre</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Titre"))));
        // line 28
        echo "
                                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->


                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Categorie</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control"))));
        echo "
                                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Premier auteur</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur1", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Premier auteur"))));
        // line 55
        echo "
                                    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur1", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Deuxième auteur</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur2", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deuxième auteur"))));
        // line 68
        echo "
                                    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur2", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Troisième auteur</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur3", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Troisième auteur"))));
        // line 81
        echo "
                                    ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur3", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <!-- Select Basic -->

                    <div class=\"form-group\"> 
                        <label class=\"col-md-4 control-label\">Institution</label>
                        <div class=\"col-md-4 selectContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-list\"></i></span>
                                    ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "institution", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("institution"))));
        // line 94
        echo "
                                    ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "institution", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\" >Introduction</label> 
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                    ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Introduction"))));
        // line 108
        echo "
                                    ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'errors');
        echo "                        </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Matériel et Méthodes </label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
                                    ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Matériel et Méthodes"))));
        // line 120
        echo "
                                    ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiel", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Résultats</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
                                    ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultats", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Résultats"))));
        // line 135
        echo "
                                    ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resultats", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Conclusions</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    ";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conclusions", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Conclusions"))));
        // line 149
        echo "
                                    ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conclusions", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Joindre une vidéo (au format mp4 seulment)</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-globe\"></i></span>
                                    ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control", "value" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(null))));
        echo "
                                    ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>

";
        // line 168
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
        
        $__internal_f018ab0dab72290c51b7aa5a80402c9d8cc2f0b575ebb4ef89dd6ac137f5834b->leave($__internal_f018ab0dab72290c51b7aa5a80402c9d8cc2f0b575ebb4ef89dd6ac137f5834b_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:user:addAbstractVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 168,  261 => 163,  257 => 162,  242 => 150,  239 => 149,  237 => 148,  222 => 136,  219 => 135,  217 => 134,  201 => 121,  198 => 120,  196 => 119,  183 => 109,  180 => 108,  178 => 107,  163 => 95,  160 => 94,  158 => 93,  144 => 82,  141 => 81,  139 => 80,  125 => 69,  122 => 68,  120 => 67,  106 => 56,  103 => 55,  101 => 54,  87 => 43,  83 => 42,  67 => 29,  64 => 28,  62 => 27,  46 => 14,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE>
<html>

    <head>
         <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <style>#success_message{ display: none;}</style>
        <link rel=\"icon\" href=\"{{asset('bundles/cngot/logo.png')}}\" sizes=\"32x32\" />
        <link rel=\"icon\" href=\"{{asset('bundles/cngot/logo.png')}}\" sizes=\"192x192\" />
        <link rel=\"apple-touch-icon-precomposed\" href=\"{{asset('bundles/cngot/logo.png')}}\" />
    </head>
    <body>

        <div class=\"container\">
            <form class=\"well form-horizontal\" action=\"#\" {{ form_enctype(form) }}  method=\"post\"  id=\"contact_form\">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Soumettre un abstract</legend>

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
                        <label class=\"col-md-4 control-label\">Categorie</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    {{ form_widget(form.categorie, { 'attr': {'class': \"form-control\"|trans} }) }}
                                    {{ form_errors(form.categorie) }}
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Premier auteur</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    {{ form_widget(form.auteur1, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'Premier auteur'|trans} }) }}
                                    {{ form_errors(form.auteur1) }}
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Deuxième auteur</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    {{ form_widget(form.auteur2, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'Deuxième auteur'|trans} }) }}
                                    {{ form_errors(form.auteur2) }}
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Troisième auteur</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    {{ form_widget(form.auteur3, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'Troisième auteur'|trans} }) }}
                                    {{ form_errors(form.auteur3) }}
                            </div>
                        </div>
                    </div>
                    <!-- Select Basic -->

                    <div class=\"form-group\"> 
                        <label class=\"col-md-4 control-label\">Institution</label>
                        <div class=\"col-md-4 selectContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-list\"></i></span>
                                    {{ form_widget(form.institution, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'institution'|trans} }) }}
                                    {{ form_errors(form.institution) }}
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\" >Introduction</label> 
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                    {{ form_widget(form.introduction, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'Introduction'|trans} }) }}
                                    {{ form_errors(form.introduction) }}                        </div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Matériel et Méthodes </label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
                                    {{ form_widget(form.materiel, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'Matériel et Méthodes'|trans} }) }}
                                    {{ form_errors(form.materiel) }}
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Résultats</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\"></i></span>
                                    {{ form_widget(form.resultats, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'Résultats'|trans} }) }}
                                    {{ form_errors(form.resultats) }}
                            </div>
                        </div>
                    </div>

                    <!-- Text input-->

                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\">Conclusions</label>  
                        <div class=\"col-md-4 inputGroupContainer\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-home\"></i></span>
                                    {{ form_widget(form.conclusions, { 'attr': {'class': \"form-control\",
                                                            'placeholder': 'Conclusions'|trans} }) }}
                                    {{ form_errors(form.conclusions) }}
                            </div>
                        </div>
                    </div>


                    <!-- Text input-->
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


";
    }
}
