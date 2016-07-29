<?php

/* BenchmarkingBundle:Default:Vehicule/view.html.twig */
class __TwigTemplate_f752373ba957145e2b18de280c656de77332b4bf4375d82d3da6222749a929c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default:Vehicule/view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa5380d6603226d5162879896a24a3ca0d8c6b330d6aae228fea14bf179205fd = $this->env->getExtension("native_profiler");
        $__internal_aa5380d6603226d5162879896a24a3ca0d8c6b330d6aae228fea14bf179205fd->enter($__internal_aa5380d6603226d5162879896a24a3ca0d8c6b330d6aae228fea14bf179205fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa5380d6603226d5162879896a24a3ca0d8c6b330d6aae228fea14bf179205fd->leave($__internal_aa5380d6603226d5162879896a24a3ca0d8c6b330d6aae228fea14bf179205fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58231a41bf69aa5e6eac71a5f4851a35107629de693b6c70af96f7d9d9d0f46c = $this->env->getExtension("native_profiler");
        $__internal_58231a41bf69aa5e6eac71a5f4851a35107629de693b6c70af96f7d9d9d0f46c->enter($__internal_58231a41bf69aa5e6eac71a5f4851a35107629de693b6c70af96f7d9d9d0f46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "marque", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_58231a41bf69aa5e6eac71a5f4851a35107629de693b6c70af96f7d9d9d0f46c->leave($__internal_58231a41bf69aa5e6eac71a5f4851a35107629de693b6c70af96f7d9d9d0f46c_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9716fe51bf4e43678a8a6c47e0081ae1830ca580ec1e41578c14bf083793b5b5 = $this->env->getExtension("native_profiler");
        $__internal_9716fe51bf4e43678a8a6c47e0081ae1830ca580ec1e41578c14bf083793b5b5->enter($__internal_9716fe51bf4e43678a8a6c47e0081ae1830ca580ec1e41578c14bf083793b5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <style type=\"text/css\">
        .btn-product{
            width: 100%;
        }
    </style>

";
        
        $__internal_9716fe51bf4e43678a8a6c47e0081ae1830ca580ec1e41578c14bf083793b5b5->leave($__internal_9716fe51bf4e43678a8a6c47e0081ae1830ca580ec1e41578c14bf083793b5b5_prof);

    }

    // line 20
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_133a3a59c793c12b976a075fd96545331711654bf88044c08b95004e73b20813 = $this->env->getExtension("native_profiler");
        $__internal_133a3a59c793c12b976a075fd96545331711654bf88044c08b95004e73b20813->enter($__internal_133a3a59c793c12b976a075fd96545331711654bf88044c08b95004e73b20813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 21
        echo "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "
        <p class=\"alert alert-info\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "marque", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "nom", array()), "html", null, true);
        echo "</h2>
    </div>

    <div class=\"panel-body\">
        <div class=\"container-fluid\">
            <div class=\"content-wrapper\">
                <div class=\"item-container\">
                    <div class=\"container\">
                        <div class=\"col-md-5  col-sm-6 col-xs-6 thumbnail\">
                            ";
        // line 40
        if ( !(null === $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "image", array()))) {
            // line 41
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "image", array()), "alt", array()), "html", null, true);
            echo "\" class=\"img-responsive\">
                            ";
        }
        // line 43
        echo "                        </div><!--col-md-4 col-sm-6 col-xs-6-->


                        <div class=\"col-md-3 col-md-offset-1\">
                            <div class=\"product-title\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "marque", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "nom", array()), "html", null, true);
        echo "</div>

                            <hr>

                            <div class=\"btn-group cart\">
                                <button type=\"button\" class=\"btn btn-success\">
                                    Ajouter pour comparer
                                </button>
                            </div>

                            <p>
                                ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_delete", array("id" => $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimé le véhicule</button></a>
                                ";
        }
        // line 61
        echo "                            </p>


                        </div>
                    </div>
                </div>

                <div class=\"container-fluid \">
                        <ul id=\"myTab\" class=\"nav nav-tabs nav_tabs\">

                            <li class=\"active\"><a href=\"#service-one\" data-toggle=\"tab\">DESCRIPTION</a></li>
                            <li><a href=\"#service-two\" data-toggle=\"tab\">COMPOSANTS</a></li>
                            <li><a href=\"#service-three\" data-toggle=\"tab\">FONCTIONS</a></li>

                        </ul>
                        <div id=\"myTabContent\" class=\"tab-content\">
                            <div class=\"tab-pane fade in active\" id=\"service-one\">

                                <section class=\"container\">

                                    <h4>Informations générales</h4>
                                    <table class=\"col-md-7 table-bordered table-striped table-condensed \">
                                        <tbody>
                                        <tr>
                                            <th>Marque</th>
                                            <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "marque", array()), "nom", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Modèle</th>
                                            <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "nom", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Année</th>
                                            <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "annee", array()), "html", null, true);
        echo "</td>
                                        </tr>

                                        <tr>
                                            <th>Segment</th>
                                            <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "segment", array()), "nom", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Boîte Vitesse</th>
                                            <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "boiteVitesse", array()), "nom", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Motorisation</th>
                                            <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "motorisation", array()), "nom", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Ajouté le</th>
                                            <td>";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </section>

                            </div>
                            <div class=\"tab-pane fade\" id=\"service-two\">

                                <section class=\"container\">
                                    <h4>Liste des composants</h4>

                                    <table class=\"col-md-7 table-bordered table-striped table-condensed \">

                                        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "composantsAffichage", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["composant"]) {
            // line 127
            echo "                                            <tbody>
                                                <tr >
                                                    <th colspan=\"2\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["composant"], "nomAfficheur", array()), "nom", array()), "html", null, true);
            echo "</th>
                                                </tr>
                                                ";
            // line 131
            if (($this->getAttribute($this->getAttribute($context["composant"], "nomAfficheur", array()), "nom", array()) == "Tableau de bord")) {
                // line 132
                echo "                                                <tr>
                                                    <td>Type TdB</td>
                                                    <td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["composant"], "typeTdB", array()), "nom", array()), "html", null, true);
                echo "</td>
                                                </tr>
                                                ";
            }
            // line 137
            echo "                                                <tr>
                                                    <td>Technologie afficheur</td>
                                                    <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["composant"], "technologieAfficheur", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Sous technologie afficheur</td>
                                                    <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["composant"], "sousTechnologieAfficheur", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                </tr>

                                                <tr>
                                                    <td>Taille écran</td>
                                                    <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["composant"], "tailleEcran", array()), "taille", array()), "html", null, true);
            echo "</td>
                                                </tr>
                                                <tr>
                                                    <td>Format écran</td>
                                                    <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["composant"], "formatEcran", array()), "format", array()), "html", null, true);
            echo "</td>
                                                </tr>
                                            </tbody>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                    </table>
                                </section>

                            </div>
                            <div class=\"tab-pane fade\" id=\"service-three\">

                                <section class=\"container\">
                                    <h4>Liste des fonctions</h4>
                                    <table class=\"col-md-7 table-bordered table-striped table-condensed \">
                                        ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "fonctions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fonction"]) {
            // line 166
            echo "                                            <tbody>
                                            <tr >
                                                <th colspan=\"2\">";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fonction"], "nomFonction", array()), "nom", array()), "html", null, true);
            echo "</th>
                                            </tr>

                                            <tr>
                                                <td>Activation logique</td>
                                                ";
            // line 173
            if ( !(null === $this->getAttribute($context["fonction"], "activationLogique", array()))) {
                // line 174
                echo "                                                    <td>Oui</td>
                                                ";
            } else {
                // line 176
                echo "                                                    <td>Non</td>
                                                ";
            }
            // line 178
            echo "                                            </tr>
                                            <tr>
                                                <td>Activation physique</td>
                                                ";
            // line 181
            if ( !(null === $this->getAttribute($context["fonction"], "activationPhysique", array()))) {
                // line 182
                echo "                                                    <td>Oui</td>
                                                ";
            } else {
                // line 184
                echo "                                                    <td>Non</td>
                                                ";
            }
            // line 186
            echo "                                            </tr>

                                            <tr>
                                                <td>Retour Activation</td>
                                                ";
            // line 190
            if ( !(null === $this->getAttribute($context["fonction"], "retourActivation", array()))) {
                // line 191
                echo "                                                    <td><span class=\"glyphicon glyphicon-ok\"></span></td>
                                                ";
            } else {
                // line 193
                echo "                                                    <td>Non</td>
                                                ";
            }
            // line 195
            echo "                                            </tr>


                                            </tbody>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fonction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "

                                    </table>

                                </section>


                            </div>
                        </div>
                        <hr>
                </div>
            </div>
        </div>

    </div>

";
        
        $__internal_133a3a59c793c12b976a075fd96545331711654bf88044c08b95004e73b20813->leave($__internal_133a3a59c793c12b976a075fd96545331711654bf88044c08b95004e73b20813_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default:Vehicule/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 200,  377 => 195,  373 => 193,  369 => 191,  367 => 190,  361 => 186,  357 => 184,  353 => 182,  351 => 181,  346 => 178,  342 => 176,  338 => 174,  336 => 173,  328 => 168,  324 => 166,  320 => 165,  309 => 156,  299 => 152,  292 => 148,  284 => 143,  277 => 139,  273 => 137,  267 => 134,  263 => 132,  261 => 131,  256 => 129,  252 => 127,  248 => 126,  230 => 111,  223 => 107,  216 => 103,  209 => 99,  201 => 94,  194 => 90,  187 => 86,  160 => 61,  154 => 59,  152 => 58,  136 => 47,  130 => 43,  122 => 41,  120 => 40,  106 => 31,  102 => 29,  92 => 25,  88 => 23,  84 => 22,  81 => 21,  75 => 20,  62 => 10,  56 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Vehicule/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ vehicule.marque.nom }} {{ vehicule.nom }} - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style type="text/css">*/
/*         .btn-product{*/
/*             width: 100%;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block benchmarking_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*     <div class="panel-heading">*/
/*         <h2 class="panel-title">{{ vehicule.marque.nom }} {{ vehicule.nom }}</h2>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         <div class="container-fluid">*/
/*             <div class="content-wrapper">*/
/*                 <div class="item-container">*/
/*                     <div class="container">*/
/*                         <div class="col-md-5  col-sm-6 col-xs-6 thumbnail">*/
/*                             {% if vehicule.image is not null %}*/
/*                                 <img src="{{asset(vehicule.image.webPath)}}" alt="{{ vehicule.image.alt }}" class="img-responsive">*/
/*                             {% endif %}*/
/*                         </div><!--col-md-4 col-sm-6 col-xs-6-->*/
/* */
/* */
/*                         <div class="col-md-3 col-md-offset-1">*/
/*                             <div class="product-title">{{ vehicule.marque.nom }} {{ vehicule.nom }}</div>*/
/* */
/*                             <hr>*/
/* */
/*                             <div class="btn-group cart">*/
/*                                 <button type="button" class="btn btn-success">*/
/*                                     Ajouter pour comparer*/
/*                                 </button>*/
/*                             </div>*/
/* */
/*                             <p>*/
/*                                 {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <a href="{{ path('vehicule_delete', {'id': vehicule.id}) }}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimé le véhicule</button></a>*/
/*                                 {% endif %}*/
/*                             </p>*/
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="container-fluid ">*/
/*                         <ul id="myTab" class="nav nav-tabs nav_tabs">*/
/* */
/*                             <li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>*/
/*                             <li><a href="#service-two" data-toggle="tab">COMPOSANTS</a></li>*/
/*                             <li><a href="#service-three" data-toggle="tab">FONCTIONS</a></li>*/
/* */
/*                         </ul>*/
/*                         <div id="myTabContent" class="tab-content">*/
/*                             <div class="tab-pane fade in active" id="service-one">*/
/* */
/*                                 <section class="container">*/
/* */
/*                                     <h4>Informations générales</h4>*/
/*                                     <table class="col-md-7 table-bordered table-striped table-condensed ">*/
/*                                         <tbody>*/
/*                                         <tr>*/
/*                                             <th>Marque</th>*/
/*                                             <td>{{ vehicule.marque.nom }}</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Modèle</th>*/
/*                                             <td>{{ vehicule.nom }}</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Année</th>*/
/*                                             <td>{{ vehicule.annee }}</td>*/
/*                                         </tr>*/
/* */
/*                                         <tr>*/
/*                                             <th>Segment</th>*/
/*                                             <td>{{ vehicule.segment.nom }}</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Boîte Vitesse</th>*/
/*                                             <td>{{ vehicule.boiteVitesse.nom }}</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Motorisation</th>*/
/*                                             <td>{{ vehicule.motorisation.nom }}</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Ajouté le</th>*/
/*                                             <td>{{ vehicule.date|date('d/m/Y') }}</td>*/
/*                                         </tr>*/
/* */
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </section>*/
/* */
/*                             </div>*/
/*                             <div class="tab-pane fade" id="service-two">*/
/* */
/*                                 <section class="container">*/
/*                                     <h4>Liste des composants</h4>*/
/* */
/*                                     <table class="col-md-7 table-bordered table-striped table-condensed ">*/
/* */
/*                                         {% for composant in vehicule.composantsAffichage %}*/
/*                                             <tbody>*/
/*                                                 <tr >*/
/*                                                     <th colspan="2">{{ composant.nomAfficheur.nom }}</th>*/
/*                                                 </tr>*/
/*                                                 {% if composant.nomAfficheur.nom  == "Tableau de bord" %}*/
/*                                                 <tr>*/
/*                                                     <td>Type TdB</td>*/
/*                                                     <td>{{ composant.typeTdB.nom }}</td>*/
/*                                                 </tr>*/
/*                                                 {% endif %}*/
/*                                                 <tr>*/
/*                                                     <td>Technologie afficheur</td>*/
/*                                                     <td>{{ composant.technologieAfficheur.nom }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>Sous technologie afficheur</td>*/
/*                                                     <td>{{ composant.sousTechnologieAfficheur.nom }}</td>*/
/*                                                 </tr>*/
/* */
/*                                                 <tr>*/
/*                                                     <td>Taille écran</td>*/
/*                                                     <td>{{ composant.tailleEcran.taille }}</td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <td>Format écran</td>*/
/*                                                     <td>{{ composant.formatEcran.format }}</td>*/
/*                                                 </tr>*/
/*                                             </tbody>*/
/*                                         {% endfor %}*/
/*                                     </table>*/
/*                                 </section>*/
/* */
/*                             </div>*/
/*                             <div class="tab-pane fade" id="service-three">*/
/* */
/*                                 <section class="container">*/
/*                                     <h4>Liste des fonctions</h4>*/
/*                                     <table class="col-md-7 table-bordered table-striped table-condensed ">*/
/*                                         {% for fonction in vehicule.fonctions %}*/
/*                                             <tbody>*/
/*                                             <tr >*/
/*                                                 <th colspan="2">{{ fonction.nomFonction.nom }}</th>*/
/*                                             </tr>*/
/* */
/*                                             <tr>*/
/*                                                 <td>Activation logique</td>*/
/*                                                 {% if fonction.activationLogique is not null %}*/
/*                                                     <td>Oui</td>*/
/*                                                 {% else %}*/
/*                                                     <td>Non</td>*/
/*                                                 {% endif %}*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Activation physique</td>*/
/*                                                 {% if fonction.activationPhysique is not null %}*/
/*                                                     <td>Oui</td>*/
/*                                                 {% else %}*/
/*                                                     <td>Non</td>*/
/*                                                 {% endif %}*/
/*                                             </tr>*/
/* */
/*                                             <tr>*/
/*                                                 <td>Retour Activation</td>*/
/*                                                 {% if fonction.retourActivation is not null%}*/
/*                                                     <td><span class="glyphicon glyphicon-ok"></span></td>*/
/*                                                 {% else %}*/
/*                                                     <td>Non</td>*/
/*                                                 {% endif %}*/
/*                                             </tr>*/
/* */
/* */
/*                                             </tbody>*/
/*                                         {% endfor %}*/
/* */
/* */
/*                                     </table>*/
/* */
/*                                 </section>*/
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <hr>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
