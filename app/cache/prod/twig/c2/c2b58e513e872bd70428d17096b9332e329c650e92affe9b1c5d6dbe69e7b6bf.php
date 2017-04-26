<?php

/* CNGOTBundle:admin:listeUsers.html.twig */
class __TwigTemplate_673f10f83d66f97b3ad827ffc94f9079da7282d2f48e607f7267a7de7059d088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CNGOTBundle:admin:layout.html.twig", "CNGOTBundle:admin:listeUsers.html.twig", 1);
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
        $__internal_0054bb244909a8cd669bf5b724770d423ad7cab9445b49989810381156ab189c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0054bb244909a8cd669bf5b724770d423ad7cab9445b49989810381156ab189c->enter($__internal_0054bb244909a8cd669bf5b724770d423ad7cab9445b49989810381156ab189c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CNGOTBundle:admin:listeUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0054bb244909a8cd669bf5b724770d423ad7cab9445b49989810381156ab189c->leave($__internal_0054bb244909a8cd669bf5b724770d423ad7cab9445b49989810381156ab189c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ba4585c6772fefdfeb00e3e8b70b30cb36bbeb119c8eecccf109bad03609a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba4585c6772fefdfeb00e3e8b70b30cb36bbeb119c8eecccf109bad03609a2a->enter($__internal_3ba4585c6772fefdfeb00e3e8b70b30cb36bbeb119c8eecccf109bad03609a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <style>
        .buttonDownload {
            display: inline-block;
            position: relative;
            padding: 10px 25px;

            background-color: #4CC713;
            color: white;

            font-family: sans-serif;
            text-decoration: none;
            font-size: 0.9em;
            text-align: center;
            text-indent: 15px;
        }

        .buttonDownload:hover {
            background-color: #333;
            color: white;
        }

        .buttonDownload:before, .buttonDownload:after {
            content: ' ';
            display: block;
            position: absolute;
            left: 15px;
            top: 52%;
        }

        /* Download box shape  */
        .buttonDownload:before {
            width: 10px;
            height: 2px;
            border-style: solid;
            border-width: 0 2px 2px;
        }

        /* Download arrow shape */
        .buttonDownload:after {
            width: 0;
            height: 0;
            margin-left: 3px;
            margin-top: -7px;

            border-style: solid;
            border-width: 4px 4px 0 4px;
            border-color: transparent;
            border-top-color: inherit;

            animation: downloadArrow 2s linear infinite;
            animation-play-state: paused;
        }

        .buttonDownload:hover:before {
            border-color: #4CC713;
        }

        .buttonDownload:hover:after {
            border-top-color: #4CC713;
            animation-play-state: running;
        }

        /* keyframes for the download icon anim */
        @keyframes downloadArrow {
            /* 0% and 0.001% keyframes used as a hackish way of having the button frozen on a nice looking frame by default */
            0% {
                margin-top: -7px;
                opacity: 1;
            }

            0.001% {
                margin-top: -15px;
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                margin-top: 0;
                opacity: 0;
            }
        }


    </style>

    <div class=\"page-content\">
        <!-- BEGIN PAGE BASE CONTENT -->

        <div class=\"row\">
            <div class=\"col-md-12\">
                <!-- Begin: life time stats -->
                <div class=\"portlet light portlet-fit portlet-datatable bordered\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"icon-settings font-green\"></i>
                            <span class=\"caption-subject font-green sbold uppercase\">Liste des utilisateur</span>
                        </div>
                        <div class=\"actions\">
                            <div class=\"btn-group\">
                                <a class=\"btn red btn-outline btn-circle\" href=\"javascript:;\" data-toggle=\"dropdown\">
                                    <span class=\"hidden-xs\"> Options </span>
                                </a>
                                <ul class=\"dropdown-menu pull-right\" id=\"sample_3_tools\">
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"0\" class=\"tool-action\">
                                            <i class=\"icon-printer\"></i> Imprimer</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"1\" class=\"tool-action\">
                                            <i class=\"icon-check\"></i> Copier</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"2\" class=\"tool-action\">
                                            <i class=\"icon-doc\"></i> PDF</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"3\" class=\"tool-action\">
                                            <i class=\"icon-paper-clip\"></i> Excel</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"4\" class=\"tool-action\">
                                            <i class=\"icon-cloud-upload\"></i> CSV</a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"5\" class=\"tool-action\">
                                            <i class=\"icon-refresh\"></i> Rafraîchir</a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"portlet-body\">
                        <div class=\"table-container\">
                            <table class=\"table table-striped table-bordered table-hover\" id=\"sample_3\">
                                <thead>
                                    <tr>
                                        <th class=\"all\"> Nom </th>
                                        <th class=\"min-phone-l\"> Prenom </th>
                                        <th class=\"min-phone-l\"> Email </th>
                                        <th class=\"min-phone-l\"> Telephone </th>
                                        <th class=\"min-phone-l\"> Niveau </th>
                                        <th class=\"min-phone-l\"> Specialite </th>
                                        <th class=\"min-phone-l\"> Secteur </th>
                                        <th class=\"min-phone-l\"> Service </th>
                                        <th class=\"min-phone-l\"> Option </th>
                                        <th class=\"min-phone-l\"> Addresse </th>
                                        <th class=\"min-phone-l\"> Ville </th>
                                        <th class=\"none\"></th>
                                        <th class=\"none\"></th>
                                        <th class=\"none\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 165
            echo "                                        ";
            if (($this->getAttribute($context["user"], "id", array()) != 1)) {
                // line 166
                echo "                                            <tr>
                                                <td> ";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telephone", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "niveau", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "specialite", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "secteur", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "service", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "options", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address", array()), "html", null, true);
                echo " </td>
                                                <td> ";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ville", array()), "html", null, true);
                echo " </td>
                                                <td>
                                                    Atelier :  
                                                    ";
                // line 180
                if (($this->getAttribute($context["user"], "ateliercngot17", array()) != null)) {
                    // line 181
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "ateliercngot17", array()), "titre", array()), "html", null, true);
                    echo "
                                                    ";
                } else {
                    // line 183
                    echo "                                                        Aucun
                                                    ";
                }
                // line 185
                echo "
                                                </td>
                                                <td>
                                                    Masterclass :  
                                                    ";
                // line 189
                if (($this->getAttribute($context["user"], "masterclass", array()) != null)) {
                    // line 190
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "masterclass", array()), "titre", array()), "html", null, true);
                    echo "
                                                    ";
                } else {
                    // line 192
                    echo "                                                        Aucun
                                                    ";
                }
                // line 194
                echo "                                                </td>

                                                <td>
                                                    ";
                // line 197
                if (($this->getAttribute($context["user"], "etat", array()) == 0)) {
                    // line 198
                    echo "
                                                        ";
                    // line 199
                    $context["apayer"] = 0;
                    // line 200
                    echo "                                                        ";
                    $context["devise"] = "";
                    // line 201
                    echo "

                                                        ";
                    // line 203
                    if (((($this->getAttribute($context["user"], "atme", array()) != null) && ($this->getAttribute($context["user"], "ateliercngot17", array()) != null)) && ($this->getAttribute($context["user"], "masterclass", array()) != null))) {
                        // line 204
                        echo "                                                            ";
                        $context["apayer"] = ((isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")) + 100);
                        // line 205
                        echo "                                                        ";
                    } elseif ((($this->getAttribute($context["user"], "atme", array()) != null) && ($this->getAttribute($context["user"], "ateliercngot17", array()) != null))) {
                        // line 206
                        echo "                                                            ";
                        $context["apayer"] = ((isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")) + 100);
                        // line 207
                        echo "                                                        ";
                    } elseif ((($this->getAttribute($context["user"], "atme", array()) != null) || (($this->getAttribute($context["user"], "ateliercngot17", array()) != null) && ($this->getAttribute($context["user"], "masterclass", array()) != null)))) {
                        // line 208
                        echo "                                                            ";
                        $context["apayer"] = ((isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")) + 50);
                        // line 209
                        echo "                                                        ";
                    } elseif (($this->getAttribute($context["user"], "masterclass", array()) != null)) {
                        // line 210
                        echo "                                                            ";
                        $context["apayer"] = ((isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")) + 50);
                        // line 211
                        echo "                                                        ";
                    }
                    // line 212
                    echo "

                                                        ";
                    // line 214
                    if (($this->getAttribute($context["user"], "options", array()) == "Médecin étranger")) {
                        // line 215
                        echo "                                                            ";
                        $context["apayer"] = ((isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")) + 150);
                        // line 216
                        echo "                                                            ";
                        $context["devise"] = " €";
                        // line 217
                        echo "                                                        ";
                    } elseif (($this->getAttribute($context["user"], "options", array()) == "Médecin tunisien")) {
                        // line 218
                        echo "                                                            ";
                        $context["apayer"] = ((isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")) + 150);
                        // line 219
                        echo "                                                            ";
                        $context["devise"] = " Dt";
                        // line 220
                        echo "                                                        ";
                    } elseif (($this->getAttribute($context["user"], "options", array()) == "Résident, sage-femme ou technicien supérieur étrangers")) {
                        // line 221
                        echo "                                                            ";
                        $context["apayer"] = ((isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")) + 70);
                        // line 222
                        echo "                                                            ";
                        $context["devise"] = " €";
                        // line 223
                        echo "                                                        ";
                    } elseif (($this->getAttribute($context["user"], "options", array()) == "Résident, sage-femme ou technicien supérieur tunisien")) {
                        // line 224
                        echo "                                                            ";
                        $context["apayer"] = ((isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")) + 70);
                        // line 225
                        echo "                                                            ";
                        $context["devise"] = " Dt";
                        // line 226
                        echo "                                                        ";
                    }
                    // line 227
                    echo "
                                                        <a type=\"button\" href=\"#myModal\"  onclick=\"calcultotal(";
                    // line 228
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, (isset($context["apayer"]) ? $context["apayer"] : $this->getContext($context, "apayer")), "html", null, true);
                    echo " )\" data-toggle=\"modal\" class=\"button\" >Voir le Récapitulatif</a>
                                                    ";
                } else {
                    // line 230
                    echo "                                                        <strong style=\"color: green;\"> Payement effectué </strong>
                                                    ";
                }
                // line 232
                echo "
                                                    <br>
                                                    <img id=\"qq\" src=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeDataUriFunction($this->getAttribute($context["user"], "salt", array())), "html", null, true);
                echo "\">

                                                    <br>
                                                    <hr/>
                                                    ";
                // line 238
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "certifcn17", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["at"]) {
                    // line 239
                    echo "                                                        <div class=\"media-body\">
                                                            <h4 class=\"media-heading\">&#34; ";
                    // line 240
                    echo twig_escape_filter($this->env, $this->getAttribute($context["at"], "titre", array()), "html", null, true);
                    echo " &#34; <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telecharger_certif_atelier", array("idUser" => $this->getAttribute($context["user"], "id", array()), "idAtelier" => $this->getAttribute($context["at"], "id", array()))), "html", null, true);
                    echo "\"><strong>telecharger</strong></a></h4>
                                                        </div
                                                        <br>
                                                        <hr/>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['at'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 245
                echo "

                                                    ";
                // line 247
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "certifmaster", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
                    // line 248
                    echo "                                                        <div class=\"media-body\">
                                                            <h4 class=\"media-heading\">&#34; ";
                    // line 249
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ma"], "titre", array()), "html", null, true);
                    echo " &#34; <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("telecharger_certif_masterclass", array("idUser" => $this->getAttribute($context["user"], "id", array()), "idMaster" => $this->getAttribute($context["ma"], "id", array()))), "html", null, true);
                    echo "\"><strong>telecharger</strong></a></h4>
                                                        </div>
                                                        <br>
                                                        <hr/>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "
                                                </td>

                                            </tr>
                                        ";
            }
            // line 259
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
            </div>
        </div>













        <div class=\"row\">
            <div class=\"col-md-12\">
                <!-- Begin: life time stats -->
                <div class=\"portlet light portlet-fit portlet-datatable bordered\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"icon-settings font-green\"></i>
                            <span class=\"caption-subject font-green sbold uppercase\">Liste des ateliers</span>
                        </div>
                        <div class=\"actions\">
                            <div class=\"btn-group\">
                                <a class=\"btn red btn-outline btn-circle\" href=\"javascript:;\" data-toggle=\"dropdown\">
                                    <span class=\"hidden-xs\"> Options </span>
                                </a>
                                <ul class=\"dropdown-menu pull-right\" id=\"sample_3_tools\">
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"0\" class=\"tool-action\">
                                            <i class=\"icon-printer\"></i> Imprimer</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"1\" class=\"tool-action\">
                                            <i class=\"icon-check\"></i> Copier</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"2\" class=\"tool-action\">
                                            <i class=\"icon-doc\"></i> PDF</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"3\" class=\"tool-action\">
                                            <i class=\"icon-paper-clip\"></i> Excel</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"4\" class=\"tool-action\">
                                            <i class=\"icon-cloud-upload\"></i> CSV</a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"5\" class=\"tool-action\">
                                            <i class=\"icon-refresh\"></i> Rafraîchir</a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"portlet-body\">
                        <div class=\"table-container\">
                            <table class=\"table table-striped table-bordered table-hover\" id=\"sample_3\">
                                <thead>
                                    <tr>
                                        <th class=\"all\"> Titre </th>
                                        <th class=\"min-phone-l\"> Catégorie </th>
                                        <th class=\"none\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["masters"]) ? $context["masters"] : $this->getContext($context, "masters")));
        foreach ($context['_seq'] as $context["_key"] => $context["mast"]) {
            // line 342
            echo "
                                        <tr>
                                            <td> ";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute($context["mast"], "titre", array()), "html", null, true);
            echo " </td>
                                            <td> Masterclass </td>
                                            <td>
                                                <a href=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atelier_ticket", array("code" => $this->getAttribute($context["mast"], "code", array()), "titre" => $this->getAttribute($context["mast"], "titre", array()))), "html", null, true);
            echo "\" class=\"buttonDownload\">Download</a>
                                            </td>

                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mast'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "




                                    ";
        // line 358
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cn17s"]) ? $context["cn17s"] : $this->getContext($context, "cn17s")));
        foreach ($context['_seq'] as $context["_key"] => $context["c17"]) {
            // line 359
            echo "
                                        <tr>
                                            <td> ";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute($context["c17"], "titre", array()), "html", null, true);
            echo " </td>
                                            <td> CNGOT 17/11/2016 </td>
                                            <td>
                                                <a href=\"";
            // line 364
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atelier_ticket", array("code" => $this->getAttribute($context["c17"], "code", array()), "titre" => $this->getAttribute($context["c17"], "titre", array()))), "html", null, true);
            echo "\" class=\"buttonDownload\">Download</a>
                                            </td>

                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c17'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        echo "
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
            </div>
        </div>





















        <!-- END PAGE BASE CONTENT -->
    </div>













    <div class=\"modal fade\" id=\"myModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h3 class=\"modal-title\">Récapitulatif de Paiement</h3>
                </div>
                <div class=\"modal-body\">
                    <h5 class=\"text-center\"></h5>
                    <div class=\"form-group\">
                        <div class=\"clearfix\"  ><center><h4 id=\"blasettotal\" >Total à Payer :</h4></center>  </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a  class=\"btn btn-warning \" data-dismiss=\"modal\">Annuler</a>
                    <a id=\"pay\" href=\"";
        // line 430
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter_abstract", array("id" => "user_id"));
        echo "\" class=\"btn btn-primary\" >Paiement effectué</a>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <script>
        function calcultotal(id, apayer) {
            var link = document.getElementById(\"pay\");
            var url = '";
        // line 441
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("payement_effectue", array("id" => "user_id"));
        echo "';
            url = url.replace(\"user_id\", id);
            link.setAttribute(\"href\", url);

            document.getElementById(\"blasettotal\").innerHTML = 'Total à Payer :  ' + apayer;
        }
    </script>









";
        
        $__internal_3ba4585c6772fefdfeb00e3e8b70b30cb36bbeb119c8eecccf109bad03609a2a->leave($__internal_3ba4585c6772fefdfeb00e3e8b70b30cb36bbeb119c8eecccf109bad03609a2a_prof);

    }

    public function getTemplateName()
    {
        return "CNGOTBundle:admin:listeUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 441,  661 => 430,  599 => 370,  587 => 364,  581 => 361,  577 => 359,  573 => 358,  566 => 353,  554 => 347,  548 => 344,  544 => 342,  540 => 341,  457 => 260,  451 => 259,  444 => 254,  431 => 249,  428 => 248,  424 => 247,  420 => 245,  407 => 240,  404 => 239,  400 => 238,  393 => 234,  389 => 232,  385 => 230,  378 => 228,  375 => 227,  372 => 226,  369 => 225,  366 => 224,  363 => 223,  360 => 222,  357 => 221,  354 => 220,  351 => 219,  348 => 218,  345 => 217,  342 => 216,  339 => 215,  337 => 214,  333 => 212,  330 => 211,  327 => 210,  324 => 209,  321 => 208,  318 => 207,  315 => 206,  312 => 205,  309 => 204,  307 => 203,  303 => 201,  300 => 200,  298 => 199,  295 => 198,  293 => 197,  288 => 194,  284 => 192,  278 => 190,  276 => 189,  270 => 185,  266 => 183,  260 => 181,  258 => 180,  252 => 177,  248 => 176,  244 => 175,  240 => 174,  236 => 173,  232 => 172,  228 => 171,  224 => 170,  220 => 169,  216 => 168,  212 => 167,  209 => 166,  206 => 165,  202 => 164,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CNGOTBundle:admin:layout.html.twig\" %}

{% block content %}

    <style>
        .buttonDownload {
            display: inline-block;
            position: relative;
            padding: 10px 25px;

            background-color: #4CC713;
            color: white;

            font-family: sans-serif;
            text-decoration: none;
            font-size: 0.9em;
            text-align: center;
            text-indent: 15px;
        }

        .buttonDownload:hover {
            background-color: #333;
            color: white;
        }

        .buttonDownload:before, .buttonDownload:after {
            content: ' ';
            display: block;
            position: absolute;
            left: 15px;
            top: 52%;
        }

        /* Download box shape  */
        .buttonDownload:before {
            width: 10px;
            height: 2px;
            border-style: solid;
            border-width: 0 2px 2px;
        }

        /* Download arrow shape */
        .buttonDownload:after {
            width: 0;
            height: 0;
            margin-left: 3px;
            margin-top: -7px;

            border-style: solid;
            border-width: 4px 4px 0 4px;
            border-color: transparent;
            border-top-color: inherit;

            animation: downloadArrow 2s linear infinite;
            animation-play-state: paused;
        }

        .buttonDownload:hover:before {
            border-color: #4CC713;
        }

        .buttonDownload:hover:after {
            border-top-color: #4CC713;
            animation-play-state: running;
        }

        /* keyframes for the download icon anim */
        @keyframes downloadArrow {
            /* 0% and 0.001% keyframes used as a hackish way of having the button frozen on a nice looking frame by default */
            0% {
                margin-top: -7px;
                opacity: 1;
            }

            0.001% {
                margin-top: -15px;
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                margin-top: 0;
                opacity: 0;
            }
        }


    </style>

    <div class=\"page-content\">
        <!-- BEGIN PAGE BASE CONTENT -->

        <div class=\"row\">
            <div class=\"col-md-12\">
                <!-- Begin: life time stats -->
                <div class=\"portlet light portlet-fit portlet-datatable bordered\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"icon-settings font-green\"></i>
                            <span class=\"caption-subject font-green sbold uppercase\">Liste des utilisateur</span>
                        </div>
                        <div class=\"actions\">
                            <div class=\"btn-group\">
                                <a class=\"btn red btn-outline btn-circle\" href=\"javascript:;\" data-toggle=\"dropdown\">
                                    <span class=\"hidden-xs\"> Options </span>
                                </a>
                                <ul class=\"dropdown-menu pull-right\" id=\"sample_3_tools\">
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"0\" class=\"tool-action\">
                                            <i class=\"icon-printer\"></i> Imprimer</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"1\" class=\"tool-action\">
                                            <i class=\"icon-check\"></i> Copier</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"2\" class=\"tool-action\">
                                            <i class=\"icon-doc\"></i> PDF</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"3\" class=\"tool-action\">
                                            <i class=\"icon-paper-clip\"></i> Excel</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"4\" class=\"tool-action\">
                                            <i class=\"icon-cloud-upload\"></i> CSV</a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"5\" class=\"tool-action\">
                                            <i class=\"icon-refresh\"></i> Rafraîchir</a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"portlet-body\">
                        <div class=\"table-container\">
                            <table class=\"table table-striped table-bordered table-hover\" id=\"sample_3\">
                                <thead>
                                    <tr>
                                        <th class=\"all\"> Nom </th>
                                        <th class=\"min-phone-l\"> Prenom </th>
                                        <th class=\"min-phone-l\"> Email </th>
                                        <th class=\"min-phone-l\"> Telephone </th>
                                        <th class=\"min-phone-l\"> Niveau </th>
                                        <th class=\"min-phone-l\"> Specialite </th>
                                        <th class=\"min-phone-l\"> Secteur </th>
                                        <th class=\"min-phone-l\"> Service </th>
                                        <th class=\"min-phone-l\"> Option </th>
                                        <th class=\"min-phone-l\"> Addresse </th>
                                        <th class=\"min-phone-l\"> Ville </th>
                                        <th class=\"none\"></th>
                                        <th class=\"none\"></th>
                                        <th class=\"none\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {% for user in users %}
                                        {% if user.id != 1 %}
                                            <tr>
                                                <td> {{user.nom}} </td>
                                                <td> {{user.prenom}} </td>
                                                <td> {{user.email}} </td>
                                                <td> {{user.telephone}} </td>
                                                <td> {{user.niveau}} </td>
                                                <td> {{user.specialite}} </td>
                                                <td> {{user.secteur}} </td>
                                                <td> {{user.service}} </td>
                                                <td> {{user.options}} </td>
                                                <td> {{user.address}} </td>
                                                <td> {{user.ville}} </td>
                                                <td>
                                                    Atelier :  
                                                    {% if (user.ateliercngot17!= null) %}
                                                        {{user.ateliercngot17.titre}}
                                                    {% else %}
                                                        Aucun
                                                    {% endif %}

                                                </td>
                                                <td>
                                                    Masterclass :  
                                                    {% if (user.masterclass!= null) %}
                                                        {{user.masterclass.titre}}
                                                    {% else %}
                                                        Aucun
                                                    {% endif %}
                                                </td>

                                                <td>
                                                    {% if user.etat == 0 %}

                                                        {% set apayer = 0 %}
                                                        {% set devise = '' %}


                                                        {% if (user.atme != null) and (user.ateliercngot17 != null) and (user.masterclass != null)  %}
                                                            {% set apayer = apayer + 100 %}
                                                        {% elseif (user.atme != null) and (user.ateliercngot17 != null) %}
                                                            {% set apayer = apayer +  100 %}
                                                        {% elseif (user.atme != null) or (user.ateliercngot17 != null) and (user.masterclass != null) %}
                                                            {% set apayer = apayer +  50 %}
                                                        {% elseif user.masterclass != null %}
                                                            {% set apayer = apayer +  50 %}
                                                        {% endif %}


                                                        {% if user.options == 'Médecin étranger'%}
                                                            {% set apayer = apayer +  150 %}
                                                            {% set devise = ' €' %}
                                                        {% elseif user.options == 'Médecin tunisien' %}
                                                            {% set apayer = apayer +  150 %}
                                                            {% set devise = ' Dt' %}
                                                        {% elseif user.options == 'Résident, sage-femme ou technicien supérieur étrangers' %}
                                                            {% set apayer = apayer +  70 %}
                                                            {% set devise = ' €' %}
                                                        {% elseif user.options == 'Résident, sage-femme ou technicien supérieur tunisien' %}
                                                            {% set apayer = apayer +  70 %}
                                                            {% set devise = ' Dt' %}
                                                        {% endif %}

                                                        <a type=\"button\" href=\"#myModal\"  onclick=\"calcultotal({{user.id}},{{apayer}} )\" data-toggle=\"modal\" class=\"button\" >Voir le Récapitulatif</a>
                                                    {% else %}
                                                        <strong style=\"color: green;\"> Payement effectué </strong>
                                                    {% endif %}

                                                    <br>
                                                    <img id=\"qq\" src=\"{{ qrcode_data_uri(user.salt)}}\">

                                                    <br>
                                                    <hr/>
                                                    {% for at in user.certifcn17 %}
                                                        <div class=\"media-body\">
                                                            <h4 class=\"media-heading\">&#34; {{at.titre}} &#34; <a href=\"{{ path('telecharger_certif_atelier',{'idUser' : user.id, 'idAtelier' : at.id}) }}\"><strong>telecharger</strong></a></h4>
                                                        </div
                                                        <br>
                                                        <hr/>
                                                    {% endfor %}


                                                    {% for ma in user.certifmaster %}
                                                        <div class=\"media-body\">
                                                            <h4 class=\"media-heading\">&#34; {{ma.titre}} &#34; <a href=\"{{ path('telecharger_certif_masterclass',{'idUser' : user.id, 'idMaster' : ma.id}) }}\"><strong>telecharger</strong></a></h4>
                                                        </div>
                                                        <br>
                                                        <hr/>
                                                    {% endfor %}

                                                </td>

                                            </tr>
                                        {% endif %}
                                    {% endfor %}



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
            </div>
        </div>













        <div class=\"row\">
            <div class=\"col-md-12\">
                <!-- Begin: life time stats -->
                <div class=\"portlet light portlet-fit portlet-datatable bordered\">
                    <div class=\"portlet-title\">
                        <div class=\"caption\">
                            <i class=\"icon-settings font-green\"></i>
                            <span class=\"caption-subject font-green sbold uppercase\">Liste des ateliers</span>
                        </div>
                        <div class=\"actions\">
                            <div class=\"btn-group\">
                                <a class=\"btn red btn-outline btn-circle\" href=\"javascript:;\" data-toggle=\"dropdown\">
                                    <span class=\"hidden-xs\"> Options </span>
                                </a>
                                <ul class=\"dropdown-menu pull-right\" id=\"sample_3_tools\">
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"0\" class=\"tool-action\">
                                            <i class=\"icon-printer\"></i> Imprimer</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"1\" class=\"tool-action\">
                                            <i class=\"icon-check\"></i> Copier</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"2\" class=\"tool-action\">
                                            <i class=\"icon-doc\"></i> PDF</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"3\" class=\"tool-action\">
                                            <i class=\"icon-paper-clip\"></i> Excel</a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"4\" class=\"tool-action\">
                                            <i class=\"icon-cloud-upload\"></i> CSV</a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"javascript:;\" data-action=\"5\" class=\"tool-action\">
                                            <i class=\"icon-refresh\"></i> Rafraîchir</a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"portlet-body\">
                        <div class=\"table-container\">
                            <table class=\"table table-striped table-bordered table-hover\" id=\"sample_3\">
                                <thead>
                                    <tr>
                                        <th class=\"all\"> Titre </th>
                                        <th class=\"min-phone-l\"> Catégorie </th>
                                        <th class=\"none\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {% for mast in masters %}

                                        <tr>
                                            <td> {{mast.titre}} </td>
                                            <td> Masterclass </td>
                                            <td>
                                                <a href=\"{{ path('atelier_ticket',{'code' : mast.code,'titre' : mast.titre}) }}\" class=\"buttonDownload\">Download</a>
                                            </td>

                                        </tr>

                                    {% endfor %}





                                    {% for c17 in cn17s %}

                                        <tr>
                                            <td> {{c17.titre}} </td>
                                            <td> CNGOT 17/11/2016 </td>
                                            <td>
                                                <a href=\"{{ path('atelier_ticket',{'code' : c17.code,'titre' : c17.titre}) }}\" class=\"buttonDownload\">Download</a>
                                            </td>

                                        </tr>

                                    {% endfor %}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
            </div>
        </div>





















        <!-- END PAGE BASE CONTENT -->
    </div>













    <div class=\"modal fade\" id=\"myModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h3 class=\"modal-title\">Récapitulatif de Paiement</h3>
                </div>
                <div class=\"modal-body\">
                    <h5 class=\"text-center\"></h5>
                    <div class=\"form-group\">
                        <div class=\"clearfix\"  ><center><h4 id=\"blasettotal\" >Total à Payer :</h4></center>  </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a  class=\"btn btn-warning \" data-dismiss=\"modal\">Annuler</a>
                    <a id=\"pay\" href=\"{{ path('accepter_abstract',{'id' : 'user_id'}) }}\" class=\"btn btn-primary\" >Paiement effectué</a>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <script>
        function calcultotal(id, apayer) {
            var link = document.getElementById(\"pay\");
            var url = '{{ path('payement_effectue',{'id' : 'user_id'}) }}';
            url = url.replace(\"user_id\", id);
            link.setAttribute(\"href\", url);

            document.getElementById(\"blasettotal\").innerHTML = 'Total à Payer :  ' + apayer;
        }
    </script>









{% endblock %}";
    }
}
