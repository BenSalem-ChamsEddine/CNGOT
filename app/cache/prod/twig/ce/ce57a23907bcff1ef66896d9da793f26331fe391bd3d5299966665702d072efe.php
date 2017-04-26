<?php

/* CNGOTBundle:admin:listeAbstract.html.twig */
class __TwigTemplate_7de988a6ef37aa62c048f05c5badd780da14e4b2c5c576ce32cf1e8c77f1cecb extends Twig_Template
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
        $__internal_3e63c956b7e3759ff69200e0c69dba5f6abdc40d076a59beed007664766896a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e63c956b7e3759ff69200e0c69dba5f6abdc40d076a59beed007664766896a8->enter($__internal_3e63c956b7e3759ff69200e0c69dba5f6abdc40d076a59beed007664766896a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:admin:listeAbstract.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e63c956b7e3759ff69200e0c69dba5f6abdc40d076a59beed007664766896a8->leave($__internal_3e63c956b7e3759ff69200e0c69dba5f6abdc40d076a59beed007664766896a8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a8f764c5ece368886a09ab92cfae2130e96f41bf268dd50ed6f512d648ece6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f764c5ece368886a09ab92cfae2130e96f41bf268dd50ed6f512d648ece6ce->enter($__internal_a8f764c5ece368886a09ab92cfae2130e96f41bf268dd50ed6f512d648ece6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abstracts"]) ? $context["abstracts"] : $this->getContext($context, "abstracts")));
        foreach ($context['_seq'] as $context["_key"] => $context["abst"]) {
            // line 41
            echo "                                    ";
            if (($this->getAttribute($context["abst"], "status", array()) == 0)) {
                echo "    
                                    
                                    <tr>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "nom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "prenom", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "email", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "niveau", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "secteur", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["abst"], "user", array()), "service", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "categorie", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "auteur1", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "auteur2", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "auteur3", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "titre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "introduction", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "materiel", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "resultats", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["abst"], "conclusions", array()), "html", null, true);
                echo "</td>
                                        <td>
                                        
                                        
                                        ";
                // line 62
                if (($this->getAttribute($context["abst"], "path", array()) != null)) {
                    // line 63
                    echo "                                                        <figure class=\"main\"><video width=\"300px\" height=\"300px\" src=\"";
                    echo twig_escape_filter($this->env, ("/../../../upload/abstractVideo/documents/" . $this->getAttribute($context["abst"], "path", array())), "html", null, true);
                    echo "\" controls=\"controls\"/></figure>
                                                    ";
                }
                // line 65
                echo "
                                        
                                        
                                        </td>
                                        <td><HR><a class=\"btn btn-sm green btn-outline filter-submit margin-bottom\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter_abstract", array("id" => $this->getAttribute($context["abst"], "id", array()))), "html", null, true);
                echo "\">accepter</a> / <a class=\"btn btn-sm red btn-outline filter-cancel\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rejeter_abstract", array("id" => $this->getAttribute($context["abst"], "id", array()))), "html", null, true);
                echo "\">rejeter</a><HR>
                                        
                                        <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telecharger_abstract", array("id" => $this->getAttribute($context["abst"], "id", array()))), "html", null, true);
                echo "\" class=\"buttonDownload\">Telecharger en PDF</a>
                                        
                                        </td>
                                    </tr>
                                    ";
            }
            // line 76
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
                                        <td>
                                        \t <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telecharger_abstract_poster", array("id" => $this->getAttribute($context["abst"], "id", array()))), "html", null, true);
                echo "\" class=\"buttonDownload\">Telecharger le e-poster</a>
                                        </td>
                                    </tr>
                                    ";
            }
            // line 139
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        


    </div>

";
        
        $__internal_a8f764c5ece368886a09ab92cfae2130e96f41bf268dd50ed6f512d648ece6ce->leave($__internal_a8f764c5ece368886a09ab92cfae2130e96f41bf268dd50ed6f512d648ece6ce_prof);

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
        return array (  298 => 140,  292 => 139,  285 => 135,  279 => 132,  273 => 128,  267 => 126,  265 => 125,  259 => 122,  255 => 121,  251 => 120,  247 => 119,  243 => 118,  239 => 117,  235 => 116,  228 => 113,  224 => 112,  187 => 77,  181 => 76,  173 => 71,  166 => 69,  160 => 65,  154 => 63,  152 => 62,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  97 => 46,  93 => 45,  89 => 44,  82 => 41,  78 => 40,  40 => 4,  34 => 3,  11 => 1,);
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
                                        <td>
                                        \t <a href=\"{{ path('telecharger_abstract_poster',{'id' : abst.id}) }}\" class=\"buttonDownload\">Telecharger le e-poster</a>
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
