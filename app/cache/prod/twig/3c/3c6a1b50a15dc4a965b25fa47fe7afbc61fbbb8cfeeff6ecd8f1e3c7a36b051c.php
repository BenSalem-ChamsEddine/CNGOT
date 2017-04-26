<?php

/* CNGOTBundle:admin:listeAbstract.html.twig */
class __TwigTemplate_8e8b122b459f1f7c38970ca134e459bb325009128a098f433c41a8ff48c7729c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CNGOTBundle:admin:layout.html.twig", "CNGOTBundle:admin:listeAbstract.html.twig", 1);
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
        $__internal_1348858722eed85a3c88b1a042cf290d4ef4f9e74b2b81d5b1fe32b6dd9cbe07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1348858722eed85a3c88b1a042cf290d4ef4f9e74b2b81d5b1fe32b6dd9cbe07->enter($__internal_1348858722eed85a3c88b1a042cf290d4ef4f9e74b2b81d5b1fe32b6dd9cbe07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:admin:listeAbstract.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1348858722eed85a3c88b1a042cf290d4ef4f9e74b2b81d5b1fe32b6dd9cbe07->leave($__internal_1348858722eed85a3c88b1a042cf290d4ef4f9e74b2b81d5b1fe32b6dd9cbe07_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_52dc329803403121883edc875fd321b1f531bb4e2e35f7b8b0a13b7ff4bb948d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dc329803403121883edc875fd321b1f531bb4e2e35f7b8b0a13b7ff4bb948d->enter($__internal_52dc329803403121883edc875fd321b1f531bb4e2e35f7b8b0a13b7ff4bb948d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"page-content\">


        <div class=\"row\">
            <div class=\"col-md-12\">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class=\"portlet box blue\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"fa fa-globe\"></i> Les abstracts en attente  </div>
                        <div class=\"tools\"> </div>
                    </div>
                    <div class=\"portlet-body\">
                        <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"sample_4\">
                            <thead>
                                <tr>
                                    <th class=\"all\">Nom</th>
                                    <th class=\"min-phone-l\">Prenom</th>
                                    <th class=\"min-tablet\">Email</th>
                                    <th class=\"min-tablet\">Niveau</th>
                                    <th class=\"min-tablet\">Secteur</th>
                                    <th class=\"min-tablet\">Service</th>
                                    <th class=\"min-tablet\">Categorie</th>
                                    <th class=\"min-tablet\">Auteur</th>
                                    <th class=\"min-tablet\">Auteur 2</th>
                                    <th class=\"min-tablet\">Auteur 3</th>
                                    <th class=\"none\"><strong>Titre:</strong></br></th>
                                    <th class=\"none\"><strong>Introduction:</strong></br></th>
                                    <th class=\"none\"><strong>Description:</strong></br></th>
                                    <th class=\"none\"><strong>Resultat:</strong></br></th>
                                    <th class=\"none\"><strong>Conclusion:</strong></br></th>
                                    <th class=\"none\"></th>
                                    <th class=\"none\"></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abstracts"]) ? $context["abstracts"] : $this->getContext($context, "abstracts")));
        foreach ($context['_seq'] as $context["_key"] => $context["abst"]) {
            // line 42
            echo "                                    ";
            if (($this->getAttribute($context["abst"], "status", array()) == 0)) {
                echo "    
                                    
                                    <tr>
                                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "nom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "email", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "niveau", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "secteur", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "service", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "categorie", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "auteur1", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "auteur2", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "auteur3", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "titre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "introduction", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "materiel", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "resultats", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "conclusions", array()), "html", null, true);
                echo "</td>
                                        <td>
                                        
                                        
                                        ";
                // line 63
                if (($this->getAttribute($context["abst"], "path", array()) != null)) {
                    // line 64
                    echo "                                                        <figure class=\"main\"><video width=\"300px\" height=\"300px\" src=\"";
                    echo twig_escape_filter($this->env, ("/../../../upload/abstractVideo/documents/" . $this->getAttribute($context["abst"], "path", array())), "html", null, true);
                    echo "\" controls=\"controls\"/></figure>
                                                    ";
                }
                // line 66
                echo "
                                        
                                        
                                        </td>
                                        <td><HR><a class=\"btn btn-sm green btn-outline filter-submit margin-bottom\" href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter_abstract", array("id" => $this->getAttribute($context["abst"], "id", array()))), "html", null, true);
                echo "\">accepter</a> / <a class=\"btn btn-sm red btn-outline filter-cancel\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rejeter_abstract", array("id" => $this->getAttribute($context["abst"], "id", array()))), "html", null, true);
                echo "\">rejeter</a><HR>
                                        
                                        <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telecharger_abstract", array("id" => $this->getAttribute($context["abst"], "id", array()))), "html", null, true);
                echo "\" class=\"buttonDownload\">Telecharger en PDF</a>
                                        
                                        </td>
                                    </tr>
                                    ";
            }
            // line 77
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        

        <div class=\"row\">
            <div class=\"col-md-12\">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class=\"portlet box green\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"fa fa-globe\"></i> Les abstracts acceptés</div>
                    </div>
                    <div class=\"portlet-body\">
                        <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"sample_2\" >
                            <thead>
                                <tr>
                                    <th class=\"all\">Nom</th>
                                    <th class=\"min-phone-l\">Prenom</th>
                                    <th class=\"min-tablet\">Titre</th>
                                    <th class=\"none\">Introduction</th>
                                    <th class=\"none\">Description</th>
                                    <th class=\"none\">Resultat</th>
                                    <th class=\"desktop\">Conclusion</th>
                                    <th class=\"none\"></th>
                                    <th class=\"none\"></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abstracts"]) ? $context["abstracts"] : $this->getContext($context, "abstracts")));
        foreach ($context['_seq'] as $context["_key"] => $context["abst"]) {
            // line 113
            echo "                                    ";
            if (($this->getAttribute($context["abst"], "status", array()) == 1)) {
                echo "    
                                    
                                    <tr>
                                        <td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "nom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "titre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "introduction", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "materiel", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "resultats", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "conclusions", array()), "html", null, true);
                echo "</td>
                                        <td>
                                        
                                        ";
                // line 125
                if (($this->getAttribute($context["abst"], "path", array()) != null)) {
                    // line 126
                    echo "                                                        <figure class=\"main\"><video width=\"300px\" height=\"300px\" src=\"";
                    echo twig_escape_filter($this->env, ("/../../../upload/abstractVideo/documents/" . $this->getAttribute($context["abst"], "path", array())), "html", null, true);
                    echo "\" controls=\"controls\"/></figure>
                                                    ";
                }
                // line 128
                echo "
                                        
                                        </td>
                                        <td>
                                        \t <a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telecharger_abstract", array("id" => $this->getAttribute($context["abst"], "id", array()))), "html", null, true);
                echo "\" class=\"buttonDownload\">Telecharger en PDF</a>
                                        </td>
                                    </tr>
                                    ";
            }
            // line 136
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        


    </div>

";
        
        $__internal_52dc329803403121883edc875fd321b1f531bb4e2e35f7b8b0a13b7ff4bb948d->leave($__internal_52dc329803403121883edc875fd321b1f531bb4e2e35f7b8b0a13b7ff4bb948d_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:admin:listeAbstract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 137,  286 => 136,  279 => 132,  273 => 128,  267 => 126,  265 => 125,  259 => 122,  255 => 121,  251 => 120,  247 => 119,  243 => 118,  239 => 117,  235 => 116,  228 => 113,  224 => 112,  188 => 78,  182 => 77,  174 => 72,  167 => 70,  161 => 66,  155 => 64,  153 => 63,  146 => 59,  142 => 58,  138 => 57,  134 => 56,  130 => 55,  126 => 54,  122 => 53,  118 => 52,  114 => 51,  110 => 50,  106 => 49,  102 => 48,  98 => 47,  94 => 46,  90 => 45,  83 => 42,  79 => 41,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CNGOTBundle:admin:layout.html.twig\" %}

{% block content %}
    <div class=\"page-content\">


        <div class=\"row\">
            <div class=\"col-md-12\">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class=\"portlet box blue\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"fa fa-globe\"></i> Les abstracts en attente  </div>
                        <div class=\"tools\"> </div>
                    </div>
                    <div class=\"portlet-body\">
                        <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"sample_4\">
                            <thead>
                                <tr>
                                    <th class=\"all\">Nom</th>
                                    <th class=\"min-phone-l\">Prenom</th>
                                    <th class=\"min-tablet\">Email</th>
                                    <th class=\"min-tablet\">Niveau</th>
                                    <th class=\"min-tablet\">Secteur</th>
                                    <th class=\"min-tablet\">Service</th>
                                    <th class=\"min-tablet\">Categorie</th>
                                    <th class=\"min-tablet\">Auteur</th>
                                    <th class=\"min-tablet\">Auteur 2</th>
                                    <th class=\"min-tablet\">Auteur 3</th>
                                    <th class=\"none\"><strong>Titre:</strong></br></th>
                                    <th class=\"none\"><strong>Introduction:</strong></br></th>
                                    <th class=\"none\"><strong>Description:</strong></br></th>
                                    <th class=\"none\"><strong>Resultat:</strong></br></th>
                                    <th class=\"none\"><strong>Conclusion:</strong></br></th>
                                    <th class=\"none\"></th>
                                    <th class=\"none\"></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {% for abst in abstracts %}
                                    {% if abst.status == 0 %}    
                                    
                                    <tr>
                                        <td>{{abst.user.nom}}</td>
                                        <td>{{abst.user.prenom}}</td>
                                        <td>{{abst.user.email}}</td>
                                        <td>{{abst.user.niveau}}</td>
                                        <td>{{abst.user.secteur}}</td>
                                        <td>{{abst.user.service}}</td>
                                        <td>{{abst.categorie}}</td>
                                        <td>{{abst.auteur1}}</td>
                                        <td>{{abst.auteur2}}</td>
                                        <td>{{abst.auteur3}}</td>
                                        <td>{{abst.titre}}</td>
                                        <td>{{abst.introduction}}</td>
                                        <td>{{abst.materiel}}</td>
                                        <td>{{abst.resultats}}</td>
                                        <td>{{abst.conclusions}}</td>
                                        <td>
                                        
                                        
                                        {% if abst.path != null %}
                                                        <figure class=\"main\"><video width=\"300px\" height=\"300px\" src=\"{{\"/../../../upload/abstractVideo/documents/\" ~ abst.path }}\" controls=\"controls\"/></figure>
                                                    {% endif %}

                                        
                                        
                                        </td>
                                        <td><HR><a class=\"btn btn-sm green btn-outline filter-submit margin-bottom\" href=\"{{ path('accepter_abstract',{'id' : abst.id}) }}\">accepter</a> / <a class=\"btn btn-sm red btn-outline filter-cancel\" href=\"{{ path('rejeter_abstract',{'id' : abst.id}) }}\">rejeter</a><HR>
                                        
                                        <a href=\"{{ path('telecharger_abstract',{'id' : abst.id}) }}\" class=\"buttonDownload\">Telecharger en PDF</a>
                                        
                                        </td>
                                    </tr>
                                    {% endif %}
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        

        <div class=\"row\">
            <div class=\"col-md-12\">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class=\"portlet box green\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"fa fa-globe\"></i> Les abstracts acceptés</div>
                    </div>
                    <div class=\"portlet-body\">
                        <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"sample_2\" >
                            <thead>
                                <tr>
                                    <th class=\"all\">Nom</th>
                                    <th class=\"min-phone-l\">Prenom</th>
                                    <th class=\"min-tablet\">Titre</th>
                                    <th class=\"none\">Introduction</th>
                                    <th class=\"none\">Description</th>
                                    <th class=\"none\">Resultat</th>
                                    <th class=\"desktop\">Conclusion</th>
                                    <th class=\"none\"></th>
                                    <th class=\"none\"></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {% for abst in abstracts %}
                                    {% if abst.status == 1 %}    
                                    
                                    <tr>
                                        <td>{{abst.user.nom}}</td>
                                        <td>{{abst.user.prenom}}</td>
                                        <td>{{abst.titre}}</td>
                                        <td>{{abst.introduction}}</td>
                                        <td>{{abst.materiel}}</td>
                                        <td>{{abst.resultats}}</td>
                                        <td>{{abst.conclusions}}</td>
                                        <td>
                                        
                                        {% if abst.path != null %}
                                                        <figure class=\"main\"><video width=\"300px\" height=\"300px\" src=\"{{\"/../../../upload/abstractVideo/documents/\" ~ abst.path }}\" controls=\"controls\"/></figure>
                                                    {% endif %}

                                        
                                        </td>
                                        <td>
                                        \t <a href=\"{{ path('telecharger_abstract',{'id' : abst.id}) }}\" class=\"buttonDownload\">Telecharger en PDF</a>
                                        </td>
                                    </tr>
                                    {% endif %}
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        


    </div>

{% endblock %}
";
    }
}
