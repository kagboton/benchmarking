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
        $__internal_04b971d8ffc248607473220380b2550bbfbff4f1a23bc3f1117b6df54ec46a28 = $this->env->getExtension("native_profiler");
        $__internal_04b971d8ffc248607473220380b2550bbfbff4f1a23bc3f1117b6df54ec46a28->enter($__internal_04b971d8ffc248607473220380b2550bbfbff4f1a23bc3f1117b6df54ec46a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b971d8ffc248607473220380b2550bbfbff4f1a23bc3f1117b6df54ec46a28->leave($__internal_04b971d8ffc248607473220380b2550bbfbff4f1a23bc3f1117b6df54ec46a28_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75c00cbb17da127184f7ea7b52b6fdc79cb3f5e2498803b178a53171c3c60ae2 = $this->env->getExtension("native_profiler");
        $__internal_75c00cbb17da127184f7ea7b52b6fdc79cb3f5e2498803b178a53171c3c60ae2->enter($__internal_75c00cbb17da127184f7ea7b52b6fdc79cb3f5e2498803b178a53171c3c60ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Liste des véhicules - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_75c00cbb17da127184f7ea7b52b6fdc79cb3f5e2498803b178a53171c3c60ae2->leave($__internal_75c00cbb17da127184f7ea7b52b6fdc79cb3f5e2498803b178a53171c3c60ae2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71516c867d446703d7c2d059b3fdc9b256cc43272895a582a758e62022a5a38e = $this->env->getExtension("native_profiler");
        $__internal_71516c867d446703d7c2d059b3fdc9b256cc43272895a582a758e62022a5a38e->enter($__internal_71516c867d446703d7c2d059b3fdc9b256cc43272895a582a758e62022a5a38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <style type=\"text/css\">
        .btn-product{
            width: 100%;
        }
    </style>


";
        
        $__internal_71516c867d446703d7c2d059b3fdc9b256cc43272895a582a758e62022a5a38e->leave($__internal_71516c867d446703d7c2d059b3fdc9b256cc43272895a582a758e62022a5a38e_prof);

    }

    // line 19
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_a1340634178fb97dd12c604a77f591b5888b7cde21d696f5feae44ce78825b43 = $this->env->getExtension("native_profiler");
        $__internal_a1340634178fb97dd12c604a77f591b5888b7cde21d696f5feae44ce78825b43->enter($__internal_a1340634178fb97dd12c604a77f591b5888b7cde21d696f5feae44ce78825b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        // line 20
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Filtres</h4>
        </div>
        <div class=\"panel-body\">

        </div>
    </div>

";
        
        $__internal_a1340634178fb97dd12c604a77f591b5888b7cde21d696f5feae44ce78825b43->leave($__internal_a1340634178fb97dd12c604a77f591b5888b7cde21d696f5feae44ce78825b43_prof);

    }

    // line 33
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_912f0de18b19966fcc7ef360445728c9b776a76d053928cfd23e60cdb8fde068 = $this->env->getExtension("native_profiler");
        $__internal_912f0de18b19966fcc7ef360445728c9b776a76d053928cfd23e60cdb8fde068->enter($__internal_912f0de18b19966fcc7ef360445728c9b776a76d053928cfd23e60cdb8fde068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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

                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listVehicules"]) ? $context["listVehicules"] : $this->getContext($context, "listVehicules")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicule"]) {
            // line 52
            echo "
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail panel panel-default\" >


                            ";
            // line 57
            if ( !(null === $this->getAttribute($context["vehicule"], "image", array()))) {
                // line 58
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["vehicule"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "image", array()), "alt", array()), "html", null, true);
                echo "\" class=\"img-responsive\">
                            ";
            }
            // line 60
            echo "
                            <div class=\"caption\">
                                <div class=\"row panel-heading\">
                                    <div class=\"col-md-12 col-xs-6 \">
                                        <h3 class=\"panel-title\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "marque", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehicule"], "nom", array()), "html", null, true);
            echo "</h3>
                                    </div>
                                </div>

                                <div class=\"panel-body\">
                                    <p>Segment: ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "segment", array()), "nom", array()), "html", null, true);
            echo "</p>
                                    <p>Motorisation: ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "motorisation", array()), "nom", array()), "html", null, true);
            echo "</p>
                                    <p>Boîte à Vitesse: ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "boiteVitesse", array()), "nom", array()), "html", null, true);
            echo "</p>
                                    <p>Ajouté le: ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vehicule"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicule_view", array("id" => $this->getAttribute($context["vehicule"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-product\"><span class=\"\"></span> Détails </a>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <a href=\"#\" class=\"btn btn-success btn-product\"><span class=\"\"></span> Comparer </a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "                    <li class=\"alert alert-info\">Aucune voiture n'a encore été ajoutée</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "

            </div>

        </div>
        <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("vehicule_add");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter un véhicule
        </a>
    </div>

";
        
        $__internal_912f0de18b19966fcc7ef360445728c9b776a76d053928cfd23e60cdb8fde068->leave($__internal_912f0de18b19966fcc7ef360445728c9b776a76d053928cfd23e60cdb8fde068_prof);

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
        return array (  220 => 94,  213 => 89,  206 => 87,  189 => 75,  183 => 72,  179 => 71,  175 => 70,  171 => 69,  161 => 64,  155 => 60,  147 => 58,  145 => 57,  138 => 52,  133 => 51,  122 => 42,  112 => 38,  108 => 36,  104 => 35,  101 => 34,  95 => 33,  79 => 20,  73 => 19,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
/* */
/*                 {% for vehicule in listVehicules %}*/
/* */
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail panel panel-default" >*/
/* */
/* */
/*                             {% if vehicule.image is not null %}*/
/*                                 <img src="{{asset(vehicule.image.webPath)}}" alt="{{ vehicule.image.alt }}" class="img-responsive">*/
/*                             {% endif %}*/
/* */
/*                             <div class="caption">*/
/*                                 <div class="row panel-heading">*/
/*                                     <div class="col-md-12 col-xs-6 ">*/
/*                                         <h3 class="panel-title">{{ vehicule.marque.nom }} {{ vehicule.nom }}</h3>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="panel-body">*/
/*                                     <p>Segment: {{ vehicule.segment.nom }}</p>*/
/*                                     <p>Motorisation: {{ vehicule.motorisation.nom }}</p>*/
/*                                     <p>Boîte à Vitesse: {{ vehicule.boiteVitesse.nom }}</p>*/
/*                                     <p>Ajouté le: {{ vehicule.date|date('d/m/Y') }}</p>*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-6">*/
/*                                             <a href="{{ path('vehicule_view', {'id': vehicule.id}) }}" class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                         </div>*/
/*                                         <div class="col-md-6">*/
/*                                             <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                 {% else %}*/
/*                     <li class="alert alert-info">Aucune voiture n'a encore été ajoutée</li>*/
/*                 {% endfor %}*/
/* */
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
