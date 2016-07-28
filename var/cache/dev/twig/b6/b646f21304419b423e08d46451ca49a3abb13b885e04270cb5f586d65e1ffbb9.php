<?php

/* BenchmarkingBundle:Default:Vehicule/index.html.twig */
class __TwigTemplate_ac532ac5836c5e8de03727cfa6d7f31b3e42c70602031c7f764ac2e4fd541921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default:Vehicule/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'side_menu' => array($this, 'block_side_menu'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce9599288b8344e6bc1a3d658012dc00fec7061e4d108aefd274e2a9f265c8d7 = $this->env->getExtension("native_profiler");
        $__internal_ce9599288b8344e6bc1a3d658012dc00fec7061e4d108aefd274e2a9f265c8d7->enter($__internal_ce9599288b8344e6bc1a3d658012dc00fec7061e4d108aefd274e2a9f265c8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce9599288b8344e6bc1a3d658012dc00fec7061e4d108aefd274e2a9f265c8d7->leave($__internal_ce9599288b8344e6bc1a3d658012dc00fec7061e4d108aefd274e2a9f265c8d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cd6d7ae6fbfe7a8e08900b6c24c818d1a1ec55a937bb46fcfcd134c3ca642bd = $this->env->getExtension("native_profiler");
        $__internal_0cd6d7ae6fbfe7a8e08900b6c24c818d1a1ec55a937bb46fcfcd134c3ca642bd->enter($__internal_0cd6d7ae6fbfe7a8e08900b6c24c818d1a1ec55a937bb46fcfcd134c3ca642bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Liste des véhicules - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0cd6d7ae6fbfe7a8e08900b6c24c818d1a1ec55a937bb46fcfcd134c3ca642bd->leave($__internal_0cd6d7ae6fbfe7a8e08900b6c24c818d1a1ec55a937bb46fcfcd134c3ca642bd_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca740bbaa5e829805f0954b557d2d51fb137b5e9794d5edea05b7b40254de1f0 = $this->env->getExtension("native_profiler");
        $__internal_ca740bbaa5e829805f0954b557d2d51fb137b5e9794d5edea05b7b40254de1f0->enter($__internal_ca740bbaa5e829805f0954b557d2d51fb137b5e9794d5edea05b7b40254de1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <style type=\"text/css\">
        .btn-product{
            width: 100%;
        }
    </style>


";
        
        $__internal_ca740bbaa5e829805f0954b557d2d51fb137b5e9794d5edea05b7b40254de1f0->leave($__internal_ca740bbaa5e829805f0954b557d2d51fb137b5e9794d5edea05b7b40254de1f0_prof);

    }

    // line 19
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_d4b7e4f1bb98b3ec1a528f13a7c1acd6c726c1ed74952accf58bc13cfea03359 = $this->env->getExtension("native_profiler");
        $__internal_d4b7e4f1bb98b3ec1a528f13a7c1acd6c726c1ed74952accf58bc13cfea03359->enter($__internal_d4b7e4f1bb98b3ec1a528f13a7c1acd6c726c1ed74952accf58bc13cfea03359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        // line 20
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Filtres</h4>
        </div>
        <div class=\"panel-body\">

        </div>
    </div>

";
        
        $__internal_d4b7e4f1bb98b3ec1a528f13a7c1acd6c726c1ed74952accf58bc13cfea03359->leave($__internal_d4b7e4f1bb98b3ec1a528f13a7c1acd6c726c1ed74952accf58bc13cfea03359_prof);

    }

    // line 33
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5a3e49a30e803f5915cfa860797fc3a64fa7b6dcce3eebb992ceb5ff7b55a6db = $this->env->getExtension("native_profiler");
        $__internal_5a3e49a30e803f5915cfa860797fc3a64fa7b6dcce3eebb992ceb5ff7b55a6db->enter($__internal_5a3e49a30e803f5915cfa860797fc3a64fa7b6dcce3eebb992ceb5ff7b55a6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 34
        echo "
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 36
            echo "
        <p class=\"alert alert-info\">
            ";
            // line 38
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">Liste des véhicules</h2>
    </div>

    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" >
                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/mazda3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"caption\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-xs-6\">
                                    <h3>Mazda 3</h3>
                                </div>
                            </div>
                            <p>Motorisation: Thermique</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("vehicule_view", array("id" => 1));
        echo "\" class=\"btn btn-primary btn-product\"><span class=\"\"></span> Détails </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"#\" class=\"btn btn-success btn-product\"><span class=\"\"></span> Comparer </a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" >
                        <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/mercedes_classeC.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"caption\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-xs-6\">
                                    <h3>Mercedes Classe C</h3>
                                </div>
                            </div>
                            <p>Motorisation: Essence</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a class=\"btn btn-primary btn-product\"><span class=\"\"></span> Détails </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"#\" class=\"btn btn-success btn-product\"><span class=\"\"></span> Comparer </a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" >
                        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/skoda_octavia.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"caption\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-xs-6\">
                                    <h3>Skoda Octavia</h3>
                                </div>
                            </div>
                            <p>Motorisation: Thermique</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a class=\"btn btn-primary btn-product\"><span class=\"\"></span> Détails </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"#\" class=\"btn btn-success btn-product\"><span class=\"\"></span> Comparer </a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" >
                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/volkswagen_passat.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"caption\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-xs-6\">
                                    <h3>Volkswagen Passat</h3>
                                </div>
                            </div>
                            <p>Motorisation: Diesel</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a class=\"btn btn-primary btn-product\"><span class=\"\"></span> Détails </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"#\" class=\"btn btn-success btn-product\"><span class=\"\"></span> Comparer </a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" >
                        <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/ford_focus.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"caption\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-xs-6\">
                                    <h3>Ford Focus</h3>
                                </div>
                            </div>
                            <p>Motorisation: Thermique</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a class=\"btn btn-primary btn-product\"><span class=\"\"></span> Détails </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"#\" class=\"btn btn-success btn-product\"><span class=\"\"></span> Comparer </a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" >
                        <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/citroen_c4_cactus.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"caption\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-xs-6\">
                                    <h3>Citroën C4 Cactus</h3>
                                </div>
                            </div>
                            <p>Motorisation: Thermique</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a class=\"btn btn-primary btn-product\"><span class=\"\"></span> Détails </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"#\" class=\"btn btn-success btn-product\"><span class=\"\"></span> Comparer </a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" >
                        <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/benchmarking/voitures/peugeot_301.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
                        <div class=\"caption\">
                            <div class=\"row\">
                                <div class=\"col-md-12 col-xs-6\">
                                    <h3>Peugeot 301</h3>
                                </div>
                            </div>
                            <p>Motorisation: Thermique</p>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a class=\"btn btn-primary btn-product\"><span class=\"\"></span> Détails </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"#\" class=\"btn btn-success btn-product\"><span class=\"\"></span> Comparer </a></div>
                            </div>

                            <p> </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <a href=\"";
        // line 212
        echo $this->env->getExtension('routing')->getPath("vehicule_add");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter un véhicule
        </a>
    </div>

";
        
        $__internal_5a3e49a30e803f5915cfa860797fc3a64fa7b6dcce3eebb992ceb5ff7b55a6db->leave($__internal_5a3e49a30e803f5915cfa860797fc3a64fa7b6dcce3eebb992ceb5ff7b55a6db_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default:Vehicule/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 212,  291 => 188,  265 => 165,  239 => 142,  213 => 119,  187 => 96,  162 => 74,  147 => 62,  134 => 52,  122 => 42,  112 => 38,  108 => 36,  104 => 35,  101 => 34,  95 => 33,  79 => 20,  73 => 19,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Vehicule/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Liste des véhicules - {{ parent() }}*/
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
/* {% block side_menu %}*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h4 class="panel-title">Filtres</h4>*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*         </div>*/
/*     </div>*/
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
/*         <h2 class="panel-title">Liste des véhicules</h2>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="thumbnail" >*/
/*                         <img src="{{ asset('img/benchmarking/voitures/mazda3.jpg') }}" class="img-responsive">*/
/*                         <div class="caption">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 col-xs-6">*/
/*                                     <h3>Mazda 3</h3>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p>Motorisation: Thermique</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="{{ path('vehicule_view', {'id': 1}) }}" class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                             </div>*/
/* */
/*                             <p> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="thumbnail" >*/
/*                         <img src="{{ asset('img/benchmarking/voitures/mercedes_classeC.jpg') }}" class="img-responsive">*/
/*                         <div class="caption">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 col-xs-6">*/
/*                                     <h3>Mercedes Classe C</h3>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p>Motorisation: Essence</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <a class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                             </div>*/
/* */
/*                             <p> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="thumbnail" >*/
/*                         <img src="{{ asset('img/benchmarking/voitures/skoda_octavia.jpg') }}" class="img-responsive">*/
/*                         <div class="caption">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 col-xs-6">*/
/*                                     <h3>Skoda Octavia</h3>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p>Motorisation: Thermique</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <a class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                             </div>*/
/* */
/*                             <p> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="thumbnail" >*/
/*                         <img src="{{ asset('img/benchmarking/voitures/volkswagen_passat.jpg') }}" class="img-responsive">*/
/*                         <div class="caption">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 col-xs-6">*/
/*                                     <h3>Volkswagen Passat</h3>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p>Motorisation: Diesel</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <a class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                             </div>*/
/* */
/*                             <p> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="thumbnail" >*/
/*                         <img src="{{ asset('img/benchmarking/voitures/ford_focus.jpg') }}" class="img-responsive">*/
/*                         <div class="caption">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 col-xs-6">*/
/*                                     <h3>Ford Focus</h3>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p>Motorisation: Thermique</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <a class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                             </div>*/
/* */
/*                             <p> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="thumbnail" >*/
/*                         <img src="{{ asset('img/benchmarking/voitures/citroen_c4_cactus.jpg') }}" class="img-responsive">*/
/*                         <div class="caption">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 col-xs-6">*/
/*                                     <h3>Citroën C4 Cactus</h3>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p>Motorisation: Thermique</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <a class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                             </div>*/
/* */
/*                             <p> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-md-4">*/
/*                     <div class="thumbnail" >*/
/*                         <img src="{{ asset('img/benchmarking/voitures/peugeot_301.jpg') }}" class="img-responsive">*/
/*                         <div class="caption">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 col-xs-6">*/
/*                                     <h3>Peugeot 301</h3>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <p>Motorisation: Thermique</p>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <a class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                             </div>*/
/* */
/*                             <p> </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <a href="{{ path('vehicule_add') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-plus"></i>*/
/*             Ajouter un véhicule*/
/*         </a>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
