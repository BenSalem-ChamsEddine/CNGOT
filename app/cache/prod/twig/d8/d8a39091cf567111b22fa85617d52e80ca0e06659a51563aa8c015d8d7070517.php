<?php

/* CNGOTBundle:video:listVideo.html.twig */
class __TwigTemplate_ae1419251a0ff86feec144f085f66be0c2333170c6290a327cbc1e810f834699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'videoContent' => array($this, 'block_videoContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_256f004662eaf10b41837f11ebbb05981757a8b9134d13f306259ead6458b54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256f004662eaf10b41837f11ebbb05981757a8b9134d13f306259ead6458b54d->enter($__internal_256f004662eaf10b41837f11ebbb05981757a8b9134d13f306259ead6458b54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:video:listVideo.html.twig"));

        // line 1
        $this->displayBlock('videoContent', $context, $blocks);
        
        $__internal_256f004662eaf10b41837f11ebbb05981757a8b9134d13f306259ead6458b54d->leave($__internal_256f004662eaf10b41837f11ebbb05981757a8b9134d13f306259ead6458b54d_prof);

    }

    public function block_videoContent($context, array $blocks = array())
    {
        $__internal_e40ffd4c584f9564624cef793137f6e13d03b29522ad3d04a47bb81cc43f9fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40ffd4c584f9564624cef793137f6e13d03b29522ad3d04a47bb81cc43f9fef->enter($__internal_e40ffd4c584f9564624cef793137f6e13d03b29522ad3d04a47bb81cc43f9fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoContent"));

        // line 2
        echo "
    ";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos"))) > 0)) {
            // line 4
            echo "
        <div class=\"dark-wrapper\">
            <div class=\"container inner\">
                <div class=\"section-title-area\">
                    <h2 class=\"section-title\">Nos Videos</h2>
                </div>
                <div class=\"divide10\"></div>
                <div class=\"carousel-wrapper\">
                    <div class=\"carousel carousel-boxed blog\">





                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 19
                echo "                            <div class=\"item post\">
                                <figure class=\"main\"><video src=\"";
                // line 20
                echo twig_escape_filter($this->env, ("/../../../upload/uploads/documents/" . $this->getAttribute($context["i"], "path", array())), "html", null, true);
                echo "\" controls=\"controls\"/></figure>
                                <div class=\"box text-center\">
                                    <h4 class=\"post-title\"><a href=\"#\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "titre", array()), "html", null, true);
                echo "</a></h4>
                                    <div class=\"meta\"><span class=\"date\"><i class=\"fa fa-clock-o\"></i>&nbsp;";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</span></div>
                                    <p><i class=\"icon-chat-1\"></i>&nbsp;&nbsp;";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", array()), "html", null, true);
                echo "</p>
                                </div>
                                <!-- /.box --> 

                            </div>
                            <!-- /.post -->
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "



                    </div>
                    <!--/.carousel --> 
                </div>
                <!--/.carousel-wrapper --> 
            </div>
            <!--/.container --> 

        </div> 
    ";
        }
        
        $__internal_e40ffd4c584f9564624cef793137f6e13d03b29522ad3d04a47bb81cc43f9fef->leave($__internal_e40ffd4c584f9564624cef793137f6e13d03b29522ad3d04a47bb81cc43f9fef_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:video:listVideo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  76 => 24,  72 => 23,  68 => 22,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block videoContent %}

    {% if videos|length > 0 %}

        <div class=\"dark-wrapper\">
            <div class=\"container inner\">
                <div class=\"section-title-area\">
                    <h2 class=\"section-title\">Nos Videos</h2>
                </div>
                <div class=\"divide10\"></div>
                <div class=\"carousel-wrapper\">
                    <div class=\"carousel carousel-boxed blog\">





                        {%for i in videos | reverse %}
                            <div class=\"item post\">
                                <figure class=\"main\"><video src=\"{{ \"/../../../upload/uploads/documents/\" ~ i.path }}\" controls=\"controls\"/></figure>
                                <div class=\"box text-center\">
                                    <h4 class=\"post-title\"><a href=\"#\">{{i.titre}}</a></h4>
                                    <div class=\"meta\"><span class=\"date\"><i class=\"fa fa-clock-o\"></i>&nbsp;{{i.date|date('Y-m-d')}}</span></div>
                                    <p><i class=\"icon-chat-1\"></i>&nbsp;&nbsp;{{ i.description }}</p>
                                </div>
                                <!-- /.box --> 

                            </div>
                            <!-- /.post -->
                        {%endfor%}




                    </div>
                    <!--/.carousel --> 
                </div>
                <!--/.carousel-wrapper --> 
            </div>
            <!--/.container --> 

        </div> 
    {% endif %}
{% endblock %}";
    }
}
