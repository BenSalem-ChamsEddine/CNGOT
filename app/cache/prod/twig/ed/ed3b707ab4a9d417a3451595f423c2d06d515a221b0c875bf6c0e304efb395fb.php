<?php

/* CNGOTBundle:video:listVideo.html.twig */
class __TwigTemplate_eaabe3dc2c7768cc016ec51857c18fb5b7c1191bfdff00e4178fb9aed2cc1471 extends Twig_Template
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
        $__internal_37798871ebd74c2a97b49ef76be571ab592b07da71cccfaaf741659e2d76bca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37798871ebd74c2a97b49ef76be571ab592b07da71cccfaaf741659e2d76bca6->enter($__internal_37798871ebd74c2a97b49ef76be571ab592b07da71cccfaaf741659e2d76bca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:video:listVideo.html.twig"));

        // line 1
        $this->displayBlock('videoContent', $context, $blocks);
        
        $__internal_37798871ebd74c2a97b49ef76be571ab592b07da71cccfaaf741659e2d76bca6->leave($__internal_37798871ebd74c2a97b49ef76be571ab592b07da71cccfaaf741659e2d76bca6_prof);

    }

    public function block_videoContent($context, array $blocks = array())
    {
        $__internal_df4c2bcd8eedfbf46b296948ba17c5d6406eb635d658d03f77e655e0aad664ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4c2bcd8eedfbf46b296948ba17c5d6406eb635d658d03f77e655e0aad664ab->enter($__internal_df4c2bcd8eedfbf46b296948ba17c5d6406eb635d658d03f77e655e0aad664ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoContent"));

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
        
        $__internal_df4c2bcd8eedfbf46b296948ba17c5d6406eb635d658d03f77e655e0aad664ab->leave($__internal_df4c2bcd8eedfbf46b296948ba17c5d6406eb635d658d03f77e655e0aad664ab_prof);

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
