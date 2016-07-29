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
        $__internal_2f603dce00e58d37078c5f46dc02aaf471698530711d49e437cf15478abb7769 = $this->env->getExtension("native_profiler");
        $__internal_2f603dce00e58d37078c5f46dc02aaf471698530711d49e437cf15478abb7769->enter($__internal_2f603dce00e58d37078c5f46dc02aaf471698530711d49e437cf15478abb7769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f603dce00e58d37078c5f46dc02aaf471698530711d49e437cf15478abb7769->leave($__internal_2f603dce00e58d37078c5f46dc02aaf471698530711d49e437cf15478abb7769_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ca397264045df99f76ee7c44ed91005b422173adfe117b726c6657793a649f = $this->env->getExtension("native_profiler");
        $__internal_68ca397264045df99f76ee7c44ed91005b422173adfe117b726c6657793a649f->enter($__internal_68ca397264045df99f76ee7c44ed91005b422173adfe117b726c6657793a649f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "marque", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicule"]) ? $context["vehicule"] : $this->getContext($context, "vehicule")), "nom", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_68ca397264045df99f76ee7c44ed91005b422173adfe117b726c6657793a649f->leave($__internal_68ca397264045df99f76ee7c44ed91005b422173adfe117b726c6657793a649f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6691825941e3eac9e54101d165df1facc31f3bf2551a82c246fae3fc502517a = $this->env->getExtension("native_profiler");
        $__internal_b6691825941e3eac9e54101d165df1facc31f3bf2551a82c246fae3fc502517a->enter($__internal_b6691825941e3eac9e54101d165df1facc31f3bf2551a82c246fae3fc502517a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <style type=\"text/css\">
        .btn-product{
            width: 100%;
        }
    </style>

";
        
        $__internal_b6691825941e3eac9e54101d165df1facc31f3bf2551a82c246fae3fc502517a->leave($__internal_b6691825941e3eac9e54101d165df1facc31f3bf2551a82c246fae3fc502517a_prof);

    }

    // line 20
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_cb00c9e8753c1d3da361c71b2baf454bbb2617af2643397bb5a8a36f64412f17 = $this->env->getExtension("native_profiler");
        $__internal_cb00c9e8753c1d3da361c71b2baf454bbb2617af2643397bb5a8a36f64412f17->enter($__internal_cb00c9e8753c1d3da361c71b2baf454bbb2617af2643397bb5a8a36f64412f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
                            <br>
                            <div>
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
        echo "                            </div>


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
        // line 159
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
        
        $__internal_cb00c9e8753c1d3da361c71b2baf454bbb2617af2643397bb5a8a36f64412f17->leave($__internal_cb00c9e8753c1d3da361c71b2baf454bbb2617af2643397bb5a8a36f64412f17_prof);

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
        return array (  281 => 159,  230 => 111,  223 => 107,  216 => 103,  209 => 99,  201 => 94,  194 => 90,  187 => 86,  160 => 61,  154 => 59,  152 => 58,  136 => 47,  130 => 43,  122 => 41,  120 => 40,  106 => 31,  102 => 29,  92 => 25,  88 => 23,  84 => 22,  81 => 21,  75 => 20,  62 => 10,  56 => 9,  42 => 6,  36 => 5,  11 => 3,);
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
/*                             <br>*/
/*                             <div>*/
/*                                 {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <a href="{{ path('vehicule_delete', {'id': vehicule.id}) }}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimé le véhicule</button></a>*/
/*                                 {% endif %}*/
/*                             </div>*/
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
