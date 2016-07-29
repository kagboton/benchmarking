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
        $__internal_15558331c6934d0640a05a8146ce1715f2b060b9e4275ef74d9d15e0ed39d5f8 = $this->env->getExtension("native_profiler");
        $__internal_15558331c6934d0640a05a8146ce1715f2b060b9e4275ef74d9d15e0ed39d5f8->enter($__internal_15558331c6934d0640a05a8146ce1715f2b060b9e4275ef74d9d15e0ed39d5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Vehicule/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15558331c6934d0640a05a8146ce1715f2b060b9e4275ef74d9d15e0ed39d5f8->leave($__internal_15558331c6934d0640a05a8146ce1715f2b060b9e4275ef74d9d15e0ed39d5f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a453eb3fcd0a9f87c840a07b3b08a8ae03ab70999649249a09319c0ce461bc0 = $this->env->getExtension("native_profiler");
        $__internal_1a453eb3fcd0a9f87c840a07b3b08a8ae03ab70999649249a09319c0ce461bc0->enter($__internal_1a453eb3fcd0a9f87c840a07b3b08a8ae03ab70999649249a09319c0ce461bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Liste des véhicules - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1a453eb3fcd0a9f87c840a07b3b08a8ae03ab70999649249a09319c0ce461bc0->leave($__internal_1a453eb3fcd0a9f87c840a07b3b08a8ae03ab70999649249a09319c0ce461bc0_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_131318be63f448fbeaf6582686fc055f3be7a71432c38dec07f69edad9ff93ea = $this->env->getExtension("native_profiler");
        $__internal_131318be63f448fbeaf6582686fc055f3be7a71432c38dec07f69edad9ff93ea->enter($__internal_131318be63f448fbeaf6582686fc055f3be7a71432c38dec07f69edad9ff93ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <style type=\"text/css\">
        .btn-product{
            width: 100%;
        }
    </style>


";
        
        $__internal_131318be63f448fbeaf6582686fc055f3be7a71432c38dec07f69edad9ff93ea->leave($__internal_131318be63f448fbeaf6582686fc055f3be7a71432c38dec07f69edad9ff93ea_prof);

    }

    // line 19
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_fbc8165553fd7933ede11945164551f335912f01a3bb0d1f5663d69da8415d71 = $this->env->getExtension("native_profiler");
        $__internal_fbc8165553fd7933ede11945164551f335912f01a3bb0d1f5663d69da8415d71->enter($__internal_fbc8165553fd7933ede11945164551f335912f01a3bb0d1f5663d69da8415d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        // line 20
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Filtres</h4>
        </div>
        <div class=\"panel-body\">

        </div>
    </div>

";
        
        $__internal_fbc8165553fd7933ede11945164551f335912f01a3bb0d1f5663d69da8415d71->leave($__internal_fbc8165553fd7933ede11945164551f335912f01a3bb0d1f5663d69da8415d71_prof);

    }

    // line 33
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_9801843f002958b1769a6569a56b3e07e1f7a38cd75ade4c6a0bdd310e5aba8d = $this->env->getExtension("native_profiler");
        $__internal_9801843f002958b1769a6569a56b3e07e1f7a38cd75ade4c6a0bdd310e5aba8d->enter($__internal_9801843f002958b1769a6569a56b3e07e1f7a38cd75ade4c6a0bdd310e5aba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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

        <ul class=\"pagination\">
            ";
        // line 101
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 102
            echo "                <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
                    <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicules", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </ul>

    </div>

";
        
        $__internal_9801843f002958b1769a6569a56b3e07e1f7a38cd75ade4c6a0bdd310e5aba8d->leave($__internal_9801843f002958b1769a6569a56b3e07e1f7a38cd75ade4c6a0bdd310e5aba8d_prof);

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
        return array (  252 => 106,  241 => 103,  234 => 102,  229 => 101,  220 => 94,  213 => 89,  206 => 87,  189 => 75,  183 => 72,  179 => 71,  175 => 70,  171 => 69,  161 => 64,  155 => 60,  147 => 58,  145 => 57,  138 => 52,  133 => 51,  122 => 42,  112 => 38,  108 => 36,  104 => 35,  101 => 34,  95 => 33,  79 => 20,  73 => 19,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
/* */
/*         <ul class="pagination">*/
/*             {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*             {% for p in range(1, nbPages) %}*/
/*                 <li{% if p == page %} class="active"{% endif %}>*/
/*                     <a href="{{ path('vehicules', {'page': p}) }}">{{ p }}</a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
