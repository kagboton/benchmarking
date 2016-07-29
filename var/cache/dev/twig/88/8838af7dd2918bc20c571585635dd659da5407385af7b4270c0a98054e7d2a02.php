<?php

/* @Benchmarking/Default/ComposantAffichage/view.html.twig */
class __TwigTemplate_18b9c3f5010cd1526225e58c39472ee6f7a3333b335b754eec88a767f71624a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/ComposantAffichage/view.html.twig", 3);
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
        $__internal_86d839ac75590056e478f59845464c6f42f84790e46182efc3be37eeaef3c5ff = $this->env->getExtension("native_profiler");
        $__internal_86d839ac75590056e478f59845464c6f42f84790e46182efc3be37eeaef3c5ff->enter($__internal_86d839ac75590056e478f59845464c6f42f84790e46182efc3be37eeaef3c5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d839ac75590056e478f59845464c6f42f84790e46182efc3be37eeaef3c5ff->leave($__internal_86d839ac75590056e478f59845464c6f42f84790e46182efc3be37eeaef3c5ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1193389601830f3f77338c24a70c2a009b9ea41e44edb7281d02899456a3e5c0 = $this->env->getExtension("native_profiler");
        $__internal_1193389601830f3f77338c24a70c2a009b9ea41e44edb7281d02899456a3e5c0->enter($__internal_1193389601830f3f77338c24a70c2a009b9ea41e44edb7281d02899456a3e5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1193389601830f3f77338c24a70c2a009b9ea41e44edb7281d02899456a3e5c0->leave($__internal_1193389601830f3f77338c24a70c2a009b9ea41e44edb7281d02899456a3e5c0_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_d464b94f04b62011c8a5cc3a5e4667a31f806aa3e6f83d442412a8ba4df45d76 = $this->env->getExtension("native_profiler");
        $__internal_d464b94f04b62011c8a5cc3a5e4667a31f806aa3e6f83d442412a8ba4df45d76->enter($__internal_d464b94f04b62011c8a5cc3a5e4667a31f806aa3e6f83d442412a8ba4df45d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "nom", array()), "html", null, true);
        echo "</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("composantsAffichage");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_edit", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier le composant
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_delete", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer le composant
        </a>
    </p>


";
        
        $__internal_d464b94f04b62011c8a5cc3a5e4667a31f806aa3e6f83d442412a8ba4df45d76->leave($__internal_d464b94f04b62011c8a5cc3a5e4667a31f806aa3e6f83d442412a8ba4df45d76_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/ComposantAffichage/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  95 => 27,  88 => 23,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Fonction/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un composant d'affichage - {{ parent() }}*/
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
/*   <h2>{{ composantAffichage.nom }}</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('composantsAffichage') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('composantAffichage_edit', {'id': composantAffichage.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier le composant*/
/*         </a>*/
/*         <a href="{{ path('composantAffichage_delete', {'id': composantAffichage.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer le composant*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
