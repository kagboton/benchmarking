<?php

/* @Benchmarking/Default/AfficheurExistant/view.html.twig */
class __TwigTemplate_977b359d2ce0e26b2917508c65e3d3cbd4606f9ad343f6af926ffafddc47c3d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/AfficheurExistant/view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fcf8af55b543e75a6892ece84c3960ec1ddf673887ba316a89cbefb2f27cc34 = $this->env->getExtension("native_profiler");
        $__internal_0fcf8af55b543e75a6892ece84c3960ec1ddf673887ba316a89cbefb2f27cc34->enter($__internal_0fcf8af55b543e75a6892ece84c3960ec1ddf673887ba316a89cbefb2f27cc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/AfficheurExistant/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fcf8af55b543e75a6892ece84c3960ec1ddf673887ba316a89cbefb2f27cc34->leave($__internal_0fcf8af55b543e75a6892ece84c3960ec1ddf673887ba316a89cbefb2f27cc34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac95dd74c93748444e047de5d25476aae7a2845882670ec79f02759b96a49740 = $this->env->getExtension("native_profiler");
        $__internal_ac95dd74c93748444e047de5d25476aae7a2845882670ec79f02759b96a49740->enter($__internal_ac95dd74c93748444e047de5d25476aae7a2845882670ec79f02759b96a49740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ac95dd74c93748444e047de5d25476aae7a2845882670ec79f02759b96a49740->leave($__internal_ac95dd74c93748444e047de5d25476aae7a2845882670ec79f02759b96a49740_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_25eb041dc3a3c2bc53f6891d201ea822beddba68870cb81a3adcbdf172f9699b = $this->env->getExtension("native_profiler");
        $__internal_25eb041dc3a3c2bc53f6891d201ea822beddba68870cb81a3adcbdf172f9699b->enter($__internal_25eb041dc3a3c2bc53f6891d201ea822beddba68870cb81a3adcbdf172f9699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "
        <p class=\"alert alert-info\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
  <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "nom", array()), "html", null, true);
        echo "</h2>

    <div class=\"well\">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "description", array()), "html", null, true);
        echo "
    </div>



    <p>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("afficheurs");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_edit", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'afficheur
        </a>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_delete", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'afficheur
        </a>
    </p>


";
        
        $__internal_25eb041dc3a3c2bc53f6891d201ea822beddba68870cb81a3adcbdf172f9699b->leave($__internal_25eb041dc3a3c2bc53f6891d201ea822beddba68870cb81a3adcbdf172f9699b_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/AfficheurExistant/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  103 => 32,  96 => 28,  87 => 22,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/AfficheurExistant/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un afficheur - {{ parent() }}*/
/* {% endblock %}*/
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
/*   <h2>{{ afficheur.nom }}</h2>*/
/* */
/*     <div class="well">*/
/*         {{ afficheur.description }}*/
/*     </div>*/
/* */
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('afficheurs') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('afficheur_edit', {'id': afficheur.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier l'afficheur*/
/*         </a>*/
/*         <a href="{{ path('afficheur_delete', {'id': afficheur.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer l'afficheur*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
