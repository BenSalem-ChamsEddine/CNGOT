<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_66609c45d68dfd173383eb4bd045c75f151251d670f016b5f7e00b59f4623a22 extends Twig_Template
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
        $__internal_5e030625802c6c2973c3095ffe6dbd26fff179a47c91d6d31116fe2eeead6935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e030625802c6c2973c3095ffe6dbd26fff179a47c91d6d31116fe2eeead6935->enter($__internal_5e030625802c6c2973c3095ffe6dbd26fff179a47c91d6d31116fe2eeead6935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "





<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"register\">

    <div id=\"baniere\">

        <div id=\"baniere_droite\">
            <h1>Inscription gratuite</h1>
            <fieldset class=\"row1\">
                <legend style=\"font-weight:bold; font-size:20px;\">Details Du Compte
                </legend>
                <p>
                    <label style=\"font-size:  13px;\">
                        Nom d'utilisateur<span class=\"req\">*</span>
                    </label>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Email <span class=\"req\">*</span>
                    </label>
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                </p>

                <p>
                    <label style=\"font-size:  13px;\">Mot De Passe<span class=\"req\">*</span>
                    </label>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Confirmation Mot De Passe<span class=\"req\">*</span>
                    </label>
                    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                </p>

            </fieldset>
            <fieldset class=\"row2\">
                <legend style=\"font-weight:bold; font-size:20px;\">Details Personnels
                </legend>
                <p>
                    <label style=\"font-size:  13px;\">Nom <span class=\"req\">*</span>
                    </label>

                    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Prenom *
                    </label>

                    ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Niveau *
                    </label>

                    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Specialite *
                    </label>

                    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "specialite", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Secteur *
                    </label>

                    ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secteur", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secteur", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Service *
                    </label>

                    ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "service", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Addresse *
                    </label>

                    ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Ville *
                    </label>

                    ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Code postal *
                    </label>

                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostal", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostal", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Pays *
                    </label>

                    ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\" >Telephone *
                    </label>

                    ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form-control input-lg ", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                </p>
                <div style=\"display: none;\">
                    <p >

                        <label style=\"font-size:  13px;\">
                            roles<span class=\"req\">*</span>
                        </label>
                        ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control input-lg ", "value" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ROLE_USER", array(), "FOSUserBundle"))));
        echo "
                        ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors');
        echo "
                    </p>
                </div>
             </fieldset>
            <fieldset class=\"row3\">
                <legend style=\"font-weight:bold; font-size:20px;\">Autres Informations
                </legend>

                <p>
                    <label style=\"font-size:  13px;\">Option *
                    </label>
                    ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options", array()), 'widget', array("attr" => array("class" => "form-control", "onchange" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("changeoption(\$(this).val());", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Masterclass 
                    </label>
                    ";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterclass", array()), 'widget', array("attr" => array("class" => "form-control", "onchange" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("changemasterclass(\$(this).val());", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterclass", array()), 'errors');
        echo "
                </p>
                <p style=\"display: none;\">
                    <label style=\"font-size:  13px;\">ATME du 16/12/2016 de 14h à 18h
                    </label>
                    ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "atme", array()), 'widget', array("attr" => array("class" => "form-control", "onchange" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("changeatme(\$(this).val());", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "atme", array()), 'errors');
        echo "
                </p>
                <p style=\"display: none;\">
                    <label style=\"font-size:  13px;\">ateliers CNGOT du 16/12/2016: 
                    </label>
                    ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ateliercngot16", array()), 'widget', array("attr" => array("class" => "form-control", "onchange" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("changecngot16(\$(this).val());", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ateliercngot16", array()), 'errors');
        echo "
                </p>
                <p>
                    <label style=\"font-size:  13px;\">ateliers CNGOT du 17/12/2016: 
                    </label>
                    ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ateliercngot17", array()), 'widget', array("attr" => array("class" => "form-control", "onchange" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("changecngot17(\$(this).val());", array(), "FOSUserBundle"))));
        echo "
                    ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ateliercngot17", array()), 'errors');
        echo "
                </p>
<br><br><br><br><br><br>
            </fieldset>
                
        </div>
        <div></div>
        <div id=\"baniere_gauche\">

            <p><FONT size=\"4\" style=\"color: black;\"> <B>Frais d&#39;inscription</B><br>

                • Tarifs d&#39;inscription aux 2 congrès selon la catégorie d&#39;inscription<br>

                Médecin tunisien 150 Dinars tunisiens<br>

                Médecin étranger 150 €<br>

                Résidents tunisiens 70 dinars tunisiens<br>

                Résidents étrangers 70 €<br>

                Sages-femmes &amp; techniciens supérieurs tunisiens 70 dinars tunisiens<br>

                Sages-femmes &amp; techniciens supérieurs étrangers 70 €<br>
\t\t
\t\t<br>
                <B>NB :</B><br>

                * Il faut obligatoirement s&#39;inscrire au congrès pour bénéficier des ateliers<br>

                * L&#39;inscription n&#39;est validée que par le payement en espèce ou en chèque des frais d&#39;inscription

                sur place les 16 et 17 décembre 2016.<br>

                * Les bons de commande ne sont pas acceptés.<br>

                * L&#39;inscription donne droit aux pauses café et aux déjeuners des 16 et 17 décembre 2016 ainsi

                qu&#39;à l&#39;application CNGOT2016.<br>

               <br>

                • Tarifs d&#39;inscription à un atelier + masterclass du CNGOT<br>

                50 dinars tunisiens pour un atelier + une masterclass pour les participants tunisiens<br>

                50 € par atelier pour un atelier + une masterclass pour les participants étrangers</FONT></p>
        </div>
    </div>
                <a type=\"button\" href=\"#myModal\"  onclick=\"calcultotal()\" data-toggle=\"modal\" class=\"button\" >Voir le Récapitulatif</a>
    <div class=\"modal fade\" id=\"myModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h3 class=\"modal-title\">Récapitulatif de Paiement</h3>
                </div>
                <div class=\"modal-body\">
                    <h5 class=\"text-center\"></h5>
                    <table class=\"table table-striped\" id=\"tblGrid\">
                        <thead id=\"tblHead\">
                            <tr>
                                <th>Details</th>
                                <th class=\"text-right\">Prix</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td id=\"blasetoption\">Médecin tunisien</td>
                                <td class=\"text-right\" id=\"soumoption\">150</td>
                            </tr>
                            <tr id=\"trmasterclass\" ><td id=\"blasetmasterclass\">sdf</td>
                                <td class=\"text-right\" id=\"soummasterclass\">50</td>
                            </tr>
                            <tr id=\"tratme\"><td id=\"blasetatme\"></td>
                                <td class=\"text-right\" id=\"soumatme\">50</td>
                            </tr>
                            <tr style=\"display: none;\"  id=\"trcngot16\"><td id=\"blasetcngot16\"></td>
                                <td class=\"text-right\" id=\"soumcngot16\">50</td>
                            </tr>
                            <tr id=\"trcngot17\"><td id=\"blasetcngot17\"></td>
                                <td class=\"text-right\" id=\"soumcngot17\">50</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"form-group\">
                        <div class=\"clearfix\"  id=\"blasettotal\">Total à Payer :  </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    ";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    <button type=\"button\" class=\"btn btn-warning \" data-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



</form>

<script>


    \$(document).ready(function () {
        var master = document.getElementById('trmasterclass');
        var atm = document.getElementById('tratme');
        var cn16 = document.getElementById('trcngot16');
        var cn17 = document.getElementById('trcngot17');
        master.style.display = 'none';
        atm.style.display = 'none';
        cn16.style.display = 'none';
        cn17.style.display = 'none';

    });


    var option = true;
    var masterclass = false;
    var atme = false;
    var cngot16 = false;
    var cngot17 = false;
    var optionmed = \"\";
    var devise = \" Dt\";



    function changeoption(Text) {
        optionmed = Text;
        document.getElementById(\"blasetoption\").innerHTML = Text;

        if (optionmed === \"Résident, sage-femme ou technicien supérieur tunisien\" || optionmed === \"Résident, sage-femme ou technicien supérieur étrangers\") {
            document.getElementById(\"soumoption\").innerHTML = '80';
        } else {
            document.getElementById(\"soumoption\").innerHTML = '150';
        }
        
        if (optionmed === \"Résident, sage-femme ou technicien supérieur tunisien\" || optionmed === \"Médecin tunisien\") {
            devise=\" Dt\";
        }else{
            devise=\" €\";
        }
    }
    function changemasterclass(Text) {
        if (Text !== null && Text !==\"\" ) {
            masterclass = true;
            document.getElementById('trmasterclass').style.display = 'block';
        } else {
            masterclass = false;
            document.getElementById('trmasterclass').style.display = 'none';
        }

        switch (Text)
        {
            case \"1\":
                document.getElementById(\"blasetmasterclass\").innerHTML = \"Conduite à tenir devant une hémorragie de la délivrance par atonie utérine/ Triple ligature & Ligature des artères hypogastriques\";
                break;
            case \"2\":
                document.getElementById(\"blasetmasterclass\").innerHTML = \"Traitement coelio-chirurgical des troubles de la statique pelvienne\";
                break;
            case \"3\":
                document.getElementById(\"blasetmasterclass\").innerHTML = \"L'hysterectomie par voie basse et TOP\";
                break;
            case \"4\":
                document.getElementById(\"blasetmasterclass\").innerHTML = \"Cerclage cervical : du chaud au froid\";
                break;
            default:
                document.getElementById(\"blasetmasterclass\").innerHTML = '';
                break;
        }



    }
    function changeatme(Text) {
        if (Text !== null && Text !== \"\") {
            atme = true;
            document.getElementById('tratme').style.display = 'block';
        } else {
            atme = false;
            document.getElementById('tratme').style.display = 'none';
        }
        
        
        
        switch (Text)
        {
            case \"1\":
                document.getElementById(\"blasetatme\").innerHTML = \"L'ICSI : Indications, techniques et interprétation des résultats\";
                break;
            case \"2\":
                document.getElementById(\"blasetatme\").innerHTML = \"Vitrification des ovocytes & des embryons\";
                break;
            default:
                document.getElementById(\"blasetatme\").innerHTML = '';
                break;
        }
        
        
    }
    function changecngot16(Text) {
     /*   if (Text !== null && Text !== \"\") {
            cngot16 = true;
            document.getElementById('trcngot16').style.display = 'block';
        } else {
            cngot16 = false;
            document.getElementById('trcngot16').style.display = 'none';
        }
        
        switch (Text)
        {
            case \"1\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"Interprétation raisonnée de l'ERCF\";
                break;
            case \"2\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"Dépistage échographique des anomalies du cerveau fœtal\";
                break;
            case \"3\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"PMA : Les ponctions ovocytaires et les transferts embryonnaires dans les règles de l'art\";
                break;
            case \"4\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"Manœuvres obstétricales et accouchement instrumental\";
                break;
            case \"5\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"Biopsies et ponctions mammaires - cytologies ganglionnaires\";
                break;
            default:
                document.getElementById(\"blasetcngot16\").innerHTML = '';
                break;
        }
        */
    }
    function changecngot17(Text) {
        if (Text !== null && Text !== \"\") {
            cngot17 = true;
            document.getElementById('trcngot17').style.display = 'block';
        } else {
            cngot17 = false;
            document.getElementById('trcngot17').style.display = 'none';
        }

        switch (Text)
        {
            case \"1\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"Interprétation raisonnée de l'ERCF\";
                break;
            case \"2\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"Dépistage échographique des anomalies du cerveau fœtal\";
                break;
            case \"3\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"PMA : Les ponctions ovocytaires et les transferts embryonnaires dans les règles de l'art\";
                break;
            case \"4\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"Manœuvres obstétricales et accouchement instrumental\";
                break;
            case \"5\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"Biopsies et ponctions mammaires - cytologies ganglionnaires\";
                break;
            default:
                document.getElementById(\"blasetcngot17\").innerHTML = '';
                break;
        }

    }


    function calcultotal() {
        var total = 0;
        var tt = 0;
        if (option) {
            if (optionmed === \"Résident, sage-femme ou technicien supérieur tunisien\") {
                total += 70;
            } else if (optionmed === \"Résident, sage-femme ou technicien supérieur étrangers\") {
                total += 70;
            } else {
                total += 150;
            }
        }
         if (cngot17  && masterclass ){
            tt= 50;
        }
       else if ( masterclass ){
            tt= 50;
        }else if ( cngot17){
            tt= 50;
        }
\ttotal+=tt;

        document.getElementById(\"blasettotal\").innerHTML = 'Total à Payer :' + total+ devise;
    }
</script>



";
        
        $__internal_5e030625802c6c2973c3095ffe6dbd26fff179a47c91d6d31116fe2eeead6935->leave($__internal_5e030625802c6c2973c3095ffe6dbd26fff179a47c91d6d31116fe2eeead6935_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 257,  318 => 168,  314 => 167,  306 => 162,  302 => 161,  294 => 156,  290 => 155,  282 => 150,  278 => 149,  270 => 144,  266 => 143,  252 => 132,  248 => 131,  237 => 123,  233 => 122,  224 => 116,  220 => 115,  211 => 109,  207 => 108,  198 => 102,  194 => 101,  185 => 95,  181 => 94,  172 => 88,  168 => 87,  159 => 81,  155 => 80,  146 => 74,  142 => 73,  133 => 67,  129 => 66,  120 => 60,  116 => 59,  107 => 53,  103 => 52,  89 => 41,  85 => 40,  77 => 35,  73 => 34,  64 => 28,  60 => 27,  52 => 22,  48 => 21,  30 => 8,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}






<form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"register\">

    <div id=\"baniere\">

        <div id=\"baniere_droite\">
            <h1>Inscription gratuite</h1>
            <fieldset class=\"row1\">
                <legend style=\"font-weight:bold; font-size:20px;\">Details Du Compte
                </legend>
                <p>
                    <label style=\"font-size:  13px;\">
                        Nom d'utilisateur<span class=\"req\">*</span>
                    </label>
                    {{ form_widget(form.username, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.username) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Email <span class=\"req\">*</span>
                    </label>
                    {{ form_widget(form.email, { 'attr': {'class': 'form-control input-lg ' |trans} }) }}
                    {{ form_errors(form.email) }}
                </p>

                <p>
                    <label style=\"font-size:  13px;\">Mot De Passe<span class=\"req\">*</span>
                    </label>
                    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.plainPassword.first) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Confirmation Mot De Passe<span class=\"req\">*</span>
                    </label>
                    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.plainPassword.second) }}
                </p>

            </fieldset>
            <fieldset class=\"row2\">
                <legend style=\"font-weight:bold; font-size:20px;\">Details Personnels
                </legend>
                <p>
                    <label style=\"font-size:  13px;\">Nom <span class=\"req\">*</span>
                    </label>

                    {{ form_widget(form.nom, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.nom) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Prenom *
                    </label>

                    {{ form_widget(form.prenom, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.prenom) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Niveau *
                    </label>

                    {{ form_widget(form.niveau, { 'attr': {'class': 'form-control '|trans } }) }}
                    {{ form_errors(form.niveau) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Specialite *
                    </label>

                    {{ form_widget(form.specialite, { 'attr': {'class': 'form-control'|trans } }) }}
                    {{ form_errors(form.specialite  ) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Secteur *
                    </label>

                    {{ form_widget(form.secteur, { 'attr': {'class': 'form-control'|trans } }) }}
                    {{ form_errors(form.secteur) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Service *
                    </label>

                    {{ form_widget(form.service, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.service) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Addresse *
                    </label>

                    {{ form_widget(form.address, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.address) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Ville *
                    </label>

                    {{ form_widget(form.ville, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.ville) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Code postal *
                    </label>

                    {{ form_widget(form.codepostal, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.codepostal) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Pays *
                    </label>

                    {{ form_widget(form.pays, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.pays) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\" >Telephone *
                    </label>

                    {{ form_widget(form.telephone, { 'attr': {'class': 'form-control input-lg '|trans } }) }}
                    {{ form_errors(form.telephone) }}
                </p>
                <div style=\"display: none;\">
                    <p >

                        <label style=\"font-size:  13px;\">
                            roles<span class=\"req\">*</span>
                        </label>
                        {{ form_widget(form.roles, { 'attr': {'class': 'form-control input-lg ', 'value':'ROLE_USER'|trans } }) }}
                        {{ form_errors(form.roles) }}
                    </p>
                </div>
             </fieldset>
            <fieldset class=\"row3\">
                <legend style=\"font-weight:bold; font-size:20px;\">Autres Informations
                </legend>

                <p>
                    <label style=\"font-size:  13px;\">Option *
                    </label>
                    {{ form_widget(form.options, { 'attr': {'class': 'form-control','onchange' : 'changeoption(\$(this).val());'|trans } }) }}
                    {{ form_errors(form.options) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">Masterclass 
                    </label>
                    {{ form_widget(form.masterclass, { 'attr': {'class': 'form-control','onchange' : 'changemasterclass(\$(this).val());'|trans } }) }}
                    {{ form_errors(form.masterclass) }}
                </p>
                <p style=\"display: none;\">
                    <label style=\"font-size:  13px;\">ATME du 16/12/2016 de 14h à 18h
                    </label>
                    {{ form_widget(form.atme, { 'attr': {'class': 'form-control','onchange' : 'changeatme(\$(this).val());'|trans } }) }}
                    {{ form_errors(form.atme) }}
                </p>
                <p style=\"display: none;\">
                    <label style=\"font-size:  13px;\">ateliers CNGOT du 16/12/2016: 
                    </label>
                    {{ form_widget(form.ateliercngot16, { 'attr': {'class': 'form-control','onchange' : 'changecngot16(\$(this).val());'|trans } }) }}
                    {{ form_errors(form.ateliercngot16) }}
                </p>
                <p>
                    <label style=\"font-size:  13px;\">ateliers CNGOT du 17/12/2016: 
                    </label>
                    {{ form_widget(form.ateliercngot17, { 'attr': {'class': 'form-control','onchange' : 'changecngot17(\$(this).val());'|trans } }) }}
                    {{ form_errors(form.ateliercngot17) }}
                </p>
<br><br><br><br><br><br>
            </fieldset>
                
        </div>
        <div></div>
        <div id=\"baniere_gauche\">

            <p><FONT size=\"4\" style=\"color: black;\"> <B>Frais d&#39;inscription</B><br>

                • Tarifs d&#39;inscription aux 2 congrès selon la catégorie d&#39;inscription<br>

                Médecin tunisien 150 Dinars tunisiens<br>

                Médecin étranger 150 €<br>

                Résidents tunisiens 70 dinars tunisiens<br>

                Résidents étrangers 70 €<br>

                Sages-femmes &amp; techniciens supérieurs tunisiens 70 dinars tunisiens<br>

                Sages-femmes &amp; techniciens supérieurs étrangers 70 €<br>
\t\t
\t\t<br>
                <B>NB :</B><br>

                * Il faut obligatoirement s&#39;inscrire au congrès pour bénéficier des ateliers<br>

                * L&#39;inscription n&#39;est validée que par le payement en espèce ou en chèque des frais d&#39;inscription

                sur place les 16 et 17 décembre 2016.<br>

                * Les bons de commande ne sont pas acceptés.<br>

                * L&#39;inscription donne droit aux pauses café et aux déjeuners des 16 et 17 décembre 2016 ainsi

                qu&#39;à l&#39;application CNGOT2016.<br>

               <br>

                • Tarifs d&#39;inscription à un atelier + masterclass du CNGOT<br>

                50 dinars tunisiens pour un atelier + une masterclass pour les participants tunisiens<br>

                50 € par atelier pour un atelier + une masterclass pour les participants étrangers</FONT></p>
        </div>
    </div>
                <a type=\"button\" href=\"#myModal\"  onclick=\"calcultotal()\" data-toggle=\"modal\" class=\"button\" >Voir le Récapitulatif</a>
    <div class=\"modal fade\" id=\"myModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h3 class=\"modal-title\">Récapitulatif de Paiement</h3>
                </div>
                <div class=\"modal-body\">
                    <h5 class=\"text-center\"></h5>
                    <table class=\"table table-striped\" id=\"tblGrid\">
                        <thead id=\"tblHead\">
                            <tr>
                                <th>Details</th>
                                <th class=\"text-right\">Prix</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td id=\"blasetoption\">Médecin tunisien</td>
                                <td class=\"text-right\" id=\"soumoption\">150</td>
                            </tr>
                            <tr id=\"trmasterclass\" ><td id=\"blasetmasterclass\">sdf</td>
                                <td class=\"text-right\" id=\"soummasterclass\">50</td>
                            </tr>
                            <tr id=\"tratme\"><td id=\"blasetatme\"></td>
                                <td class=\"text-right\" id=\"soumatme\">50</td>
                            </tr>
                            <tr style=\"display: none;\"  id=\"trcngot16\"><td id=\"blasetcngot16\"></td>
                                <td class=\"text-right\" id=\"soumcngot16\">50</td>
                            </tr>
                            <tr id=\"trcngot17\"><td id=\"blasetcngot17\"></td>
                                <td class=\"text-right\" id=\"soumcngot17\">50</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"form-group\">
                        <div class=\"clearfix\"  id=\"blasettotal\">Total à Payer :  </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    {{ form_rest(form) }}
                    <button type=\"button\" class=\"btn btn-warning \" data-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



</form>

<script>


    \$(document).ready(function () {
        var master = document.getElementById('trmasterclass');
        var atm = document.getElementById('tratme');
        var cn16 = document.getElementById('trcngot16');
        var cn17 = document.getElementById('trcngot17');
        master.style.display = 'none';
        atm.style.display = 'none';
        cn16.style.display = 'none';
        cn17.style.display = 'none';

    });


    var option = true;
    var masterclass = false;
    var atme = false;
    var cngot16 = false;
    var cngot17 = false;
    var optionmed = \"\";
    var devise = \" Dt\";



    function changeoption(Text) {
        optionmed = Text;
        document.getElementById(\"blasetoption\").innerHTML = Text;

        if (optionmed === \"Résident, sage-femme ou technicien supérieur tunisien\" || optionmed === \"Résident, sage-femme ou technicien supérieur étrangers\") {
            document.getElementById(\"soumoption\").innerHTML = '80';
        } else {
            document.getElementById(\"soumoption\").innerHTML = '150';
        }
        
        if (optionmed === \"Résident, sage-femme ou technicien supérieur tunisien\" || optionmed === \"Médecin tunisien\") {
            devise=\" Dt\";
        }else{
            devise=\" €\";
        }
    }
    function changemasterclass(Text) {
        if (Text !== null && Text !==\"\" ) {
            masterclass = true;
            document.getElementById('trmasterclass').style.display = 'block';
        } else {
            masterclass = false;
            document.getElementById('trmasterclass').style.display = 'none';
        }

        switch (Text)
        {
            case \"1\":
                document.getElementById(\"blasetmasterclass\").innerHTML = \"Conduite à tenir devant une hémorragie de la délivrance par atonie utérine/ Triple ligature & Ligature des artères hypogastriques\";
                break;
            case \"2\":
                document.getElementById(\"blasetmasterclass\").innerHTML = \"Traitement coelio-chirurgical des troubles de la statique pelvienne\";
                break;
            case \"3\":
                document.getElementById(\"blasetmasterclass\").innerHTML = \"L'hysterectomie par voie basse et TOP\";
                break;
            case \"4\":
                document.getElementById(\"blasetmasterclass\").innerHTML = \"Cerclage cervical : du chaud au froid\";
                break;
            default:
                document.getElementById(\"blasetmasterclass\").innerHTML = '';
                break;
        }



    }
    function changeatme(Text) {
        if (Text !== null && Text !== \"\") {
            atme = true;
            document.getElementById('tratme').style.display = 'block';
        } else {
            atme = false;
            document.getElementById('tratme').style.display = 'none';
        }
        
        
        
        switch (Text)
        {
            case \"1\":
                document.getElementById(\"blasetatme\").innerHTML = \"L'ICSI : Indications, techniques et interprétation des résultats\";
                break;
            case \"2\":
                document.getElementById(\"blasetatme\").innerHTML = \"Vitrification des ovocytes & des embryons\";
                break;
            default:
                document.getElementById(\"blasetatme\").innerHTML = '';
                break;
        }
        
        
    }
    function changecngot16(Text) {
     /*   if (Text !== null && Text !== \"\") {
            cngot16 = true;
            document.getElementById('trcngot16').style.display = 'block';
        } else {
            cngot16 = false;
            document.getElementById('trcngot16').style.display = 'none';
        }
        
        switch (Text)
        {
            case \"1\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"Interprétation raisonnée de l'ERCF\";
                break;
            case \"2\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"Dépistage échographique des anomalies du cerveau fœtal\";
                break;
            case \"3\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"PMA : Les ponctions ovocytaires et les transferts embryonnaires dans les règles de l'art\";
                break;
            case \"4\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"Manœuvres obstétricales et accouchement instrumental\";
                break;
            case \"5\":
                document.getElementById(\"blasetcngot16\").innerHTML = \"Biopsies et ponctions mammaires - cytologies ganglionnaires\";
                break;
            default:
                document.getElementById(\"blasetcngot16\").innerHTML = '';
                break;
        }
        */
    }
    function changecngot17(Text) {
        if (Text !== null && Text !== \"\") {
            cngot17 = true;
            document.getElementById('trcngot17').style.display = 'block';
        } else {
            cngot17 = false;
            document.getElementById('trcngot17').style.display = 'none';
        }

        switch (Text)
        {
            case \"1\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"Interprétation raisonnée de l'ERCF\";
                break;
            case \"2\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"Dépistage échographique des anomalies du cerveau fœtal\";
                break;
            case \"3\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"PMA : Les ponctions ovocytaires et les transferts embryonnaires dans les règles de l'art\";
                break;
            case \"4\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"Manœuvres obstétricales et accouchement instrumental\";
                break;
            case \"5\":
                document.getElementById(\"blasetcngot17\").innerHTML = \"Biopsies et ponctions mammaires - cytologies ganglionnaires\";
                break;
            default:
                document.getElementById(\"blasetcngot17\").innerHTML = '';
                break;
        }

    }


    function calcultotal() {
        var total = 0;
        var tt = 0;
        if (option) {
            if (optionmed === \"Résident, sage-femme ou technicien supérieur tunisien\") {
                total += 70;
            } else if (optionmed === \"Résident, sage-femme ou technicien supérieur étrangers\") {
                total += 70;
            } else {
                total += 150;
            }
        }
         if (cngot17  && masterclass ){
            tt= 50;
        }
       else if ( masterclass ){
            tt= 50;
        }else if ( cngot17){
            tt= 50;
        }
\ttotal+=tt;

        document.getElementById(\"blasettotal\").innerHTML = 'Total à Payer :' + total+ devise;
    }
</script>



";
    }
}
