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
        $__internal_914f9e44604cbc78e9a850b46ec0f4621d0c59613647cefbd96328cc688eacb9 = $this->env->getExtension("native_profiler");
        $__internal_914f9e44604cbc78e9a850b46ec0f4621d0c59613647cefbd96328cc688eacb9->enter($__internal_914f9e44604cbc78e9a850b46ec0f4621d0c59613647cefbd96328cc688eacb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_914f9e44604cbc78e9a850b46ec0f4621d0c59613647cefbd96328cc688eacb9->leave($__internal_914f9e44604cbc78e9a850b46ec0f4621d0c59613647cefbd96328cc688eacb9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2194d4eada6d70258c2390e7a8baa0445c860970a72694aa2fa435f66e4b96dd = $this->env->getExtension("native_profiler");
        $__internal_2194d4eada6d70258c2390e7a8baa0445c860970a72694aa2fa435f66e4b96dd->enter($__internal_2194d4eada6d70258c2390e7a8baa0445c860970a72694aa2fa435f66e4b96dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Mazda - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2194d4eada6d70258c2390e7a8baa0445c860970a72694aa2fa435f66e4b96dd->leave($__internal_2194d4eada6d70258c2390e7a8baa0445c860970a72694aa2fa435f66e4b96dd_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c5f408290f8d3286d21d2ab50215a517bab01dfec25d5be5183977b4644cfff = $this->env->getExtension("native_profiler");
        $__internal_5c5f408290f8d3286d21d2ab50215a517bab01dfec25d5be5183977b4644cfff->enter($__internal_5c5f408290f8d3286d21d2ab50215a517bab01dfec25d5be5183977b4644cfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <style type=\"text/css\">
        .btn-product{
            width: 100%;
        }
    </style>


";
        
        $__internal_5c5f408290f8d3286d21d2ab50215a517bab01dfec25d5be5183977b4644cfff->leave($__internal_5c5f408290f8d3286d21d2ab50215a517bab01dfec25d5be5183977b4644cfff_prof);

    }

    // line 21
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_427771d8cf9f35a34b78d24a4e732ee9a7850a0536a7ce1727e3047564f081ad = $this->env->getExtension("native_profiler");
        $__internal_427771d8cf9f35a34b78d24a4e732ee9a7850a0536a7ce1727e3047564f081ad->enter($__internal_427771d8cf9f35a34b78d24a4e732ee9a7850a0536a7ce1727e3047564f081ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 22
        echo "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "
        <p class=\"alert alert-info\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">Mazda 3</h2>
    </div>

    <div class=\"panel-body\">
        <div class=\"container-fluid\">
            <div class=\"content-wrapper\">
                <div class=\"item-container\">
                    <div class=\"container\">
                        <div class=\"col-md-5  col-sm-6 col-xs-6 thumbnail\">

                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/mazda3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">

                        </div><!--col-md-4 col-sm-6 col-xs-6-->


                        <div class=\"col-md-3 col-md-offset-1\">
                            <div class=\"product-title\">Mazda 3</div>
                            <div class=\"product-desc\">Ceci est un message de test </div>
                            <hr>

                            <div class=\"btn-group cart\">
                                <button type=\"button\" class=\"btn btn-success\">
                                    Ajouter pour comparer
                                </button>
                            </div>

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
                                            <td>Mazda</td>
                                        </tr>
                                        <tr>
                                            <th>Modèle</th>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <th>Année</th>
                                            <td>2011</td>
                                        </tr>

                                        <tr>
                                            <th>Segment</th>
                                            <td>B0</td>
                                        </tr>
                                        <tr>
                                            <th>Boîte Vitesse</th>
                                            <td>Automatique</td>
                                        </tr>
                                        <tr>
                                            <th>Motorisation</th>
                                            <td>Themique</td>
                                        </tr>
                                        <tr>
                                            <th>Ajouté le</th>
                                            <td>27/06/2016</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </section>

                            </div>
                            <div class=\"tab-pane fade\" id=\"service-two\">

                                <section class=\"container\">
                                    <h4>Liste des composants</h4>
                                    <table class=\"col-md-7 table-bordered table-striped table-condensed \">
                                        <tbody>
                                            <tr >
                                                <th colspan=\"2\">Tableau de bord</th>
                                            </tr>
                                            <tr>
                                                <td>Type TdB</td>
                                                <td>Full TFT</td>
                                            </tr>
                                            <tr>
                                                <td>Technologie afficheur</td>
                                                <td>TFT Couleur</td>
                                            </tr>
                                            <tr>
                                                <td>Sous technologie afficheur</td>
                                                <td>Normally Black</td>
                                            </tr>

                                            <tr>
                                                <td>Taille écran</td>
                                                <td>4\"</td>
                                            </tr>
                                            <tr>
                                                <td>Format écran</td>
                                                <td>16/9</td>
                                            </tr>

                                        </tbody>

                                        <tbody>
                                        <tr >
                                            <th colspan=\"2\">Ecran central</th>
                                        </tr>
                                        <tr>
                                            <td>Type TdB</td>
                                            <td>Full TFT</td>
                                            <td rowspan=\"5\"><a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/mazda3.jpg"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/mazda3_mini.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"></a></td>
                                        </tr>
                                        <tr>
                                            <td>Technologie afficheur</td>
                                            <td>TFT Couleur</td>
                                        </tr>
                                        <tr>
                                            <td>Sous technologie afficheur</td>
                                            <td>Normally Black</td>
                                        </tr>

                                        <tr>
                                            <td>Taille écran</td>
                                            <td>4\"</td>
                                        </tr>
                                        <tr>
                                            <td>Format écran</td>
                                            <td>16/9</td>
                                        </tr>
                                        </tbody>

                                        <tbody>
                                        <tr >
                                            <th colspan=\"2\">HUD</th>
                                        </tr>
                                        <tr>
                                            <td>Type TdB</td>
                                            <td>Full TFT</td>
                                        </tr>
                                        <tr>
                                            <td>Technologie afficheur</td>
                                            <td>TFT Couleur</td>
                                        </tr>
                                        <tr>
                                            <td>Sous technologie afficheur</td>
                                            <td>Normally Black</td>
                                        </tr>

                                        <tr>
                                            <td>Taille écran</td>
                                            <td>2\"</td>
                                        </tr>
                                        <tr>
                                            <td>Format écran</td>
                                            <td>4/3</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </section>

                            </div>
                            <div class=\"tab-pane fade\" id=\"service-three\">

                                <section class=\"container\">
                                    <h4>Liste des fonctions</h4>
                                    <table class=\"col-md-7 table-bordered table-striped table-condensed \">
                                        <tbody>
                                            <tr >
                                                <th colspan=\"2\">Limiteur de vitesse</th>
                                            </tr>
                                            <tr>
                                                <td>Activation logique</td>
                                                <td>Oui</td>
                                            </tr>
                                            <tr>
                                                <td>Activation physique</td>
                                                <td>Oui</td>
                                            </tr>
                                            <tr>
                                                <td>Retour Activation</td>
                                                <td>Oui</td>
                                            </tr>
                                        </tbody>


                                        <tbody>
                                            <tr >
                                                <th colspan=\"2\">Stabilisateur de trajectoire</th>
                                            </tr>
                                            <tr>
                                                <td>Activation logique</td>
                                                <td>Oui</td>
                                            </tr>
                                            <tr>
                                                <td>Activation physique</td>
                                                <td>Oui</td>
                                            </tr>
                                            <tr>
                                                <td>Retour Activation</td>
                                                <td>Oui</td>
                                            </tr>
                                        </tbody>
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
        
        $__internal_427771d8cf9f35a34b78d24a4e732ee9a7850a0536a7ce1727e3047564f081ad->leave($__internal_427771d8cf9f35a34b78d24a4e732ee9a7850a0536a7ce1727e3047564f081ad_prof);

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
        return array (  227 => 153,  113 => 42,  99 => 30,  89 => 26,  85 => 24,  81 => 23,  78 => 22,  72 => 21,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Vehicule/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Mazda - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <style type="text/css">*/
/*         .btn-product{*/
/*             width: 100%;*/
/*         }*/
/*     </style>*/
/* */
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
/*         <h2 class="panel-title">Mazda 3</h2>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         <div class="container-fluid">*/
/*             <div class="content-wrapper">*/
/*                 <div class="item-container">*/
/*                     <div class="container">*/
/*                         <div class="col-md-5  col-sm-6 col-xs-6 thumbnail">*/
/* */
/*                             <img src="{{ asset('img/benchmarking/voitures/mazda3.jpg') }}" class="img-responsive">*/
/* */
/*                         </div><!--col-md-4 col-sm-6 col-xs-6-->*/
/* */
/* */
/*                         <div class="col-md-3 col-md-offset-1">*/
/*                             <div class="product-title">Mazda 3</div>*/
/*                             <div class="product-desc">Ceci est un message de test </div>*/
/*                             <hr>*/
/* */
/*                             <div class="btn-group cart">*/
/*                                 <button type="button" class="btn btn-success">*/
/*                                     Ajouter pour comparer*/
/*                                 </button>*/
/*                             </div>*/
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
/*                                             <td>Mazda</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Modèle</th>*/
/*                                             <td>3</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Année</th>*/
/*                                             <td>2011</td>*/
/*                                         </tr>*/
/* */
/*                                         <tr>*/
/*                                             <th>Segment</th>*/
/*                                             <td>B0</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Boîte Vitesse</th>*/
/*                                             <td>Automatique</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Motorisation</th>*/
/*                                             <td>Themique</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <th>Ajouté le</th>*/
/*                                             <td>27/06/2016</td>*/
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
/*                                     <table class="col-md-7 table-bordered table-striped table-condensed ">*/
/*                                         <tbody>*/
/*                                             <tr >*/
/*                                                 <th colspan="2">Tableau de bord</th>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Type TdB</td>*/
/*                                                 <td>Full TFT</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Technologie afficheur</td>*/
/*                                                 <td>TFT Couleur</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Sous technologie afficheur</td>*/
/*                                                 <td>Normally Black</td>*/
/*                                             </tr>*/
/* */
/*                                             <tr>*/
/*                                                 <td>Taille écran</td>*/
/*                                                 <td>4"</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Format écran</td>*/
/*                                                 <td>16/9</td>*/
/*                                             </tr>*/
/* */
/*                                         </tbody>*/
/* */
/*                                         <tbody>*/
/*                                         <tr >*/
/*                                             <th colspan="2">Ecran central</th>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>Type TdB</td>*/
/*                                             <td>Full TFT</td>*/
/*                                             <td rowspan="5"><a href="{{ asset('img/benchmarking/voitures/mazda3.jpg') }}"><img src="{{ asset('img/benchmarking/voitures/mazda3_mini.jpg') }}" class="img-responsive"></a></td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>Technologie afficheur</td>*/
/*                                             <td>TFT Couleur</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>Sous technologie afficheur</td>*/
/*                                             <td>Normally Black</td>*/
/*                                         </tr>*/
/* */
/*                                         <tr>*/
/*                                             <td>Taille écran</td>*/
/*                                             <td>4"</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>Format écran</td>*/
/*                                             <td>16/9</td>*/
/*                                         </tr>*/
/*                                         </tbody>*/
/* */
/*                                         <tbody>*/
/*                                         <tr >*/
/*                                             <th colspan="2">HUD</th>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>Type TdB</td>*/
/*                                             <td>Full TFT</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>Technologie afficheur</td>*/
/*                                             <td>TFT Couleur</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>Sous technologie afficheur</td>*/
/*                                             <td>Normally Black</td>*/
/*                                         </tr>*/
/* */
/*                                         <tr>*/
/*                                             <td>Taille écran</td>*/
/*                                             <td>2"</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td>Format écran</td>*/
/*                                             <td>4/3</td>*/
/*                                         </tr>*/
/*                                         </tbody>*/
/*                                     </table>*/
/* */
/*                                 </section>*/
/* */
/*                             </div>*/
/*                             <div class="tab-pane fade" id="service-three">*/
/* */
/*                                 <section class="container">*/
/*                                     <h4>Liste des fonctions</h4>*/
/*                                     <table class="col-md-7 table-bordered table-striped table-condensed ">*/
/*                                         <tbody>*/
/*                                             <tr >*/
/*                                                 <th colspan="2">Limiteur de vitesse</th>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Activation logique</td>*/
/*                                                 <td>Oui</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Activation physique</td>*/
/*                                                 <td>Oui</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Retour Activation</td>*/
/*                                                 <td>Oui</td>*/
/*                                             </tr>*/
/*                                         </tbody>*/
/* */
/* */
/*                                         <tbody>*/
/*                                             <tr >*/
/*                                                 <th colspan="2">Stabilisateur de trajectoire</th>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Activation logique</td>*/
/*                                                 <td>Oui</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Activation physique</td>*/
/*                                                 <td>Oui</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>Retour Activation</td>*/
/*                                                 <td>Oui</td>*/
/*                                             </tr>*/
/*                                         </tbody>*/
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
