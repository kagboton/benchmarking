<?php

/* @Benchmarking/Default/Vehicule/index.html.twig */
class __TwigTemplate_9e8fefa407303238465b174e22957addea44baff39ea2c93daf6da7d7fddcb80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/Vehicule/index.html.twig", 3);
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
        $__internal_585e192f33caab0f9dbc8cd86fde36b08cf5d116157d61074751a72fe30bbe68 = $this->env->getExtension("native_profiler");
        $__internal_585e192f33caab0f9dbc8cd86fde36b08cf5d116157d61074751a72fe30bbe68->enter($__internal_585e192f33caab0f9dbc8cd86fde36b08cf5d116157d61074751a72fe30bbe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Vehicule/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585e192f33caab0f9dbc8cd86fde36b08cf5d116157d61074751a72fe30bbe68->leave($__internal_585e192f33caab0f9dbc8cd86fde36b08cf5d116157d61074751a72fe30bbe68_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e71555b2fccf597a687f482cbb9c60d042e32fcd432abcc7f84e61a35648d689 = $this->env->getExtension("native_profiler");
        $__internal_e71555b2fccf597a687f482cbb9c60d042e32fcd432abcc7f84e61a35648d689->enter($__internal_e71555b2fccf597a687f482cbb9c60d042e32fcd432abcc7f84e61a35648d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Liste des véhicules - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e71555b2fccf597a687f482cbb9c60d042e32fcd432abcc7f84e61a35648d689->leave($__internal_e71555b2fccf597a687f482cbb9c60d042e32fcd432abcc7f84e61a35648d689_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff343182cec7aaf7605b7eb43ae7db16e5c36010b3e6fc82e6f4faea68262be7 = $this->env->getExtension("native_profiler");
        $__internal_ff343182cec7aaf7605b7eb43ae7db16e5c36010b3e6fc82e6f4faea68262be7->enter($__internal_ff343182cec7aaf7605b7eb43ae7db16e5c36010b3e6fc82e6f4faea68262be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <style type=\"text/css\">
        .btn-product{
            width: 100%;
        }
    </style>


";
        
        $__internal_ff343182cec7aaf7605b7eb43ae7db16e5c36010b3e6fc82e6f4faea68262be7->leave($__internal_ff343182cec7aaf7605b7eb43ae7db16e5c36010b3e6fc82e6f4faea68262be7_prof);

    }

    // line 19
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_de570d85a99ea13eaf19d5abcfe7afdc3791e0ff318a9ed673d65894ada59c08 = $this->env->getExtension("native_profiler");
        $__internal_de570d85a99ea13eaf19d5abcfe7afdc3791e0ff318a9ed673d65894ada59c08->enter($__internal_de570d85a99ea13eaf19d5abcfe7afdc3791e0ff318a9ed673d65894ada59c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        // line 20
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Filtres</h4>
        </div>
        <div class=\"panel-body\">

        </div>
    </div>

";
        
        $__internal_de570d85a99ea13eaf19d5abcfe7afdc3791e0ff318a9ed673d65894ada59c08->leave($__internal_de570d85a99ea13eaf19d5abcfe7afdc3791e0ff318a9ed673d65894ada59c08_prof);

    }

    // line 33
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_d9919b62347eb1f5dd70f44ec74a59268f084f0a5b4f14576181e163fa378902 = $this->env->getExtension("native_profiler");
        $__internal_d9919b62347eb1f5dd70f44ec74a59268f084f0a5b4f14576181e163fa378902->enter($__internal_d9919b62347eb1f5dd70f44ec74a59268f084f0a5b4f14576181e163fa378902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
                        <div class=\"thumbnail\" >

                            ";
            // line 56
            if ( !(null === $this->getAttribute($context["vehicule"], "image", array()))) {
                // line 57
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "image", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "image", array()), "alt", array()), "html", null, true);
                echo "\" class=\"img-responsive\">
                            ";
            }
            // line 59
            echo "
                            <div class=\"caption\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-xs-6\">
                                        <h3>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehicule"], "marque", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehicule"], "nom", array()), "html", null, true);
            echo "</h3>
                                    </div>
                                </div>
                                <p>Motorisation: Thermique</p>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <a href=\"";
            // line 69
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

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                    <li class=\"alert alert-info\">Aucune voiture n'a encore été ajoutée</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "

            </div>

        </div>
        <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("vehicule_add");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter un véhicule
        </a>
    </div>

";
        
        $__internal_d9919b62347eb1f5dd70f44ec74a59268f084f0a5b4f14576181e163fa378902->leave($__internal_d9919b62347eb1f5dd70f44ec74a59268f084f0a5b4f14576181e163fa378902_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Vehicule/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  195 => 83,  188 => 81,  171 => 69,  160 => 63,  154 => 59,  146 => 57,  144 => 56,  138 => 52,  133 => 51,  122 => 42,  112 => 38,  108 => 36,  104 => 35,  101 => 34,  95 => 33,  79 => 20,  73 => 19,  59 => 10,  53 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
/*                         <div class="thumbnail" >*/
/* */
/*                             {% if vehicule.image is not null %}*/
/*                                 <img src="{{ vehicule.image.url }}" alt="{{ vehicule.image.alt }}" class="img-responsive">*/
/*                             {% endif %}*/
/* */
/*                             <div class="caption">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12 col-xs-6">*/
/*                                         <h3>{{ vehicule.marque.nom }} {{ vehicule.nom }}</h3>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <p>Motorisation: Thermique</p>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-6">*/
/*                                         <a href="{{ path('vehicule_view', {'id': 1}) }}" class="btn btn-primary btn-product"><span class=""></span> Détails </a>*/
/*                                     </div>*/
/*                                     <div class="col-md-6">*/
/*                                         <a href="#" class="btn btn-success btn-product"><span class=""></span> Comparer </a></div>*/
/*                                 </div>*/
/* */
/*                                 <p> </p>*/
/*                             </div>*/
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
