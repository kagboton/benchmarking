<?php

/* @Benchmarking/Default/FonctionExistante/index.html.twig */
class __TwigTemplate_d615a02c4605711ec598679b2df8a7968201dd76f60d191300de1569717ba003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/FonctionExistante/index.html.twig", 3);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dcc19c5c6a6971fd01efafbc81320d4a9e967b0cbaed644e9f207bfcfdaf888 = $this->env->getExtension("native_profiler");
        $__internal_0dcc19c5c6a6971fd01efafbc81320d4a9e967b0cbaed644e9f207bfcfdaf888->enter($__internal_0dcc19c5c6a6971fd01efafbc81320d4a9e967b0cbaed644e9f207bfcfdaf888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FonctionExistante/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dcc19c5c6a6971fd01efafbc81320d4a9e967b0cbaed644e9f207bfcfdaf888->leave($__internal_0dcc19c5c6a6971fd01efafbc81320d4a9e967b0cbaed644e9f207bfcfdaf888_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_7668b16e73e18e6ca5d4c253de17cd9f270dd0b9badd5ff10730c7e36e0d5244 = $this->env->getExtension("native_profiler");
        $__internal_7668b16e73e18e6ca5d4c253de17cd9f270dd0b9badd5ff10730c7e36e0d5244->enter($__internal_7668b16e73e18e6ca5d4c253de17cd9f270dd0b9badd5ff10730c7e36e0d5244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8f2c0fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8f2c0fa_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8f2c0fa_accordion-multiview_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "8f2c0fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8f2c0fa") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8f2c0fa.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_7668b16e73e18e6ca5d4c253de17cd9f270dd0b9badd5ff10730c7e36e0d5244->leave($__internal_7668b16e73e18e6ca5d4c253de17cd9f270dd0b9badd5ff10730c7e36e0d5244_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e044220128a3cb089adaa4ffbd0d2d98b5d2e52fb3737f0a31cb196de1ab5e6 = $this->env->getExtension("native_profiler");
        $__internal_8e044220128a3cb089adaa4ffbd0d2d98b5d2e52fb3737f0a31cb196de1ab5e6->enter($__internal_8e044220128a3cb089adaa4ffbd0d2d98b5d2e52fb3737f0a31cb196de1ab5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "  Fonctions - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8e044220128a3cb089adaa4ffbd0d2d98b5d2e52fb3737f0a31cb196de1ab5e6->leave($__internal_8e044220128a3cb089adaa4ffbd0d2d98b5d2e52fb3737f0a31cb196de1ab5e6_prof);

    }

    // line 15
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_34a241526c63dddf01082dd4ed5ef38048fb8a312aef7a31a4c17ee0742c36c3 = $this->env->getExtension("native_profiler");
        $__internal_34a241526c63dddf01082dd4ed5ef38048fb8a312aef7a31a4c17ee0742c36c3->enter($__internal_34a241526c63dddf01082dd4ed5ef38048fb8a312aef7a31a4c17ee0742c36c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 16
        echo "
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "
    <p class=\"alert alert-info\">
      ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </p>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\">Liste des fonctions par famille</h4>
    </div>

   <div class=\"panel-body\">

       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-sm-3 col-md-5\">
                   <div class=\"panel-group\" id=\"accordion\">
                       ";
        // line 35
        $context["myVal"] = 1;
        // line 36
        echo "                       ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listFamilles"]) ? $context["listFamilles"] : $this->getContext($context, "listFamilles")));
        foreach ($context['_seq'] as $context["_key"] => $context["famille"]) {
            // line 37
            echo "                           <div class=\"panel panel-default\">
                               <div class=\"panel-heading\">
                                   <h4 class=\"panel-title\">
                                       <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")), "html", null, true);
            echo "\">
                                           ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["famille"], "nom", array()), "html", null, true);
            echo "
                                           <span class=\"caret\"></span>
                                       </a>
                                   </h4>
                               </div>
                               <div id=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                                   <ul class=\"list-group\">
                                       ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listFonctions"]) ? $context["listFonctions"] : $this->getContext($context, "listFonctions")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["fonction"]) {
                // line 49
                echo "                                           ";
                if (($this->getAttribute($context["famille"], "nom", array()) == $this->getAttribute($this->getAttribute($context["fonction"], "famille", array()), "nom", array()))) {
                    // line 50
                    echo "                                               <li class=\"list-group-item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_view", array("id" => $this->getAttribute($context["fonction"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fonction"], "nom", array()), "html", null, true);
                    echo "</a></li>
                                           ";
                }
                // line 52
                echo "                                       ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 53
                echo "                                           <li>Pas (encore !) de fonctions</li>
                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fonction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                   </ul>
                               </div>
                           </div>
                           ";
            // line 58
            $context["myVal"] = ((isset($context["myVal"]) ? $context["myVal"] : $this->getContext($context, "myVal")) + 1);
            // line 59
            echo "                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['famille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                   </div>
               </div>
           </div>
       </div>

       <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fonction_add");
        echo "\" class=\"btn btn-default\">
           <i class=\"glyphicon glyphicon-plus\"></i>
           Ajouter une fonction
       </a>

   </div>

";
        
        $__internal_34a241526c63dddf01082dd4ed5ef38048fb8a312aef7a31a4c17ee0742c36c3->leave($__internal_34a241526c63dddf01082dd4ed5ef38048fb8a312aef7a31a4c17ee0742c36c3_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FonctionExistante/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 65,  192 => 60,  186 => 59,  184 => 58,  179 => 55,  172 => 53,  167 => 52,  159 => 50,  156 => 49,  151 => 48,  146 => 46,  138 => 41,  134 => 40,  129 => 37,  124 => 36,  122 => 35,  109 => 24,  99 => 20,  95 => 18,  91 => 17,  88 => 16,  82 => 15,  72 => 12,  66 => 11,  47 => 7,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FonctionExistante/index.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block stylesheet %}*/
/*     {% stylesheets 'bundles/admin/css/accordion-multiview.css' filter='cssrewrite, scssphp'%}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*   Fonctions - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/* */
/*   {% endfor %}*/
/* */
/*     <div class="panel-heading">*/
/*         <h4 class="panel-title">Liste des fonctions par famille</h4>*/
/*     </div>*/
/* */
/*    <div class="panel-body">*/
/* */
/*        <div class="container">*/
/*            <div class="row">*/
/*                <div class="col-sm-3 col-md-5">*/
/*                    <div class="panel-group" id="accordion">*/
/*                        {% set myVal = 1 %}*/
/*                        {% for famille in listFamilles %}*/
/*                            <div class="panel panel-default">*/
/*                                <div class="panel-heading">*/
/*                                    <h4 class="panel-title">*/
/*                                        <a data-toggle="collapse" data-parent="#accordion" href="#{{ myVal }}">*/
/*                                            {{ famille.nom }}*/
/*                                            <span class="caret"></span>*/
/*                                        </a>*/
/*                                    </h4>*/
/*                                </div>*/
/*                                <div id="{{ myVal }}" class="panel-collapse collapse">*/
/*                                    <ul class="list-group">*/
/*                                        {% for fonction in listFonctions %}*/
/*                                            {% if famille.nom == fonction.famille.nom  %}*/
/*                                                <li class="list-group-item"><a href="{{ path('fonction_view', {'id': fonction.id}) }}">{{ fonction.nom }}</a></li>*/
/*                                            {% endif %}*/
/*                                        {% else %}*/
/*                                            <li>Pas (encore !) de fonctions</li>*/
/*                                        {% endfor %}*/
/*                                    </ul>*/
/*                                </div>*/
/*                            </div>*/
/*                            {% set myVal = myVal + 1 %}*/
/*                        {% endfor %}*/
/*                    </div>*/
/*                </div>*/
/*            </div>*/
/*        </div>*/
/* */
/*        <a href="{{ path('fonction_add') }}" class="btn btn-default">*/
/*            <i class="glyphicon glyphicon-plus"></i>*/
/*            Ajouter une fonction*/
/*        </a>*/
/* */
/*    </div>*/
/* */
/* {% endblock %}*/
/* */
