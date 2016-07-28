<?php

/* BenchmarkingBundle:Default/TypeTdB:view.html.twig */
class __TwigTemplate_05a13bc4ecd325e6ee9d23c3aed504ecffda094a87c680602103dccd2b5000b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeTdB:view.html.twig", 3);
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
        $__internal_140622cc726a01147dccd263f16c67ddc18d3bd5ef71b419a9386773f22ea9a8 = $this->env->getExtension("native_profiler");
        $__internal_140622cc726a01147dccd263f16c67ddc18d3bd5ef71b419a9386773f22ea9a8->enter($__internal_140622cc726a01147dccd263f16c67ddc18d3bd5ef71b419a9386773f22ea9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeTdB:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_140622cc726a01147dccd263f16c67ddc18d3bd5ef71b419a9386773f22ea9a8->leave($__internal_140622cc726a01147dccd263f16c67ddc18d3bd5ef71b419a9386773f22ea9a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a5ec380c29b348899ee518ba0b137271cb6fbded7183377c18c87e64829e2a4 = $this->env->getExtension("native_profiler");
        $__internal_0a5ec380c29b348899ee518ba0b137271cb6fbded7183377c18c87e64829e2a4->enter($__internal_0a5ec380c29b348899ee518ba0b137271cb6fbded7183377c18c87e64829e2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0a5ec380c29b348899ee518ba0b137271cb6fbded7183377c18c87e64829e2a4->leave($__internal_0a5ec380c29b348899ee518ba0b137271cb6fbded7183377c18c87e64829e2a4_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_1242cfd2b20ca34b531b7ea0c88b52cfad9013f4bbaec28024211d785ebe39d8 = $this->env->getExtension("native_profiler");
        $__internal_1242cfd2b20ca34b531b7ea0c88b52cfad9013f4bbaec28024211d785ebe39d8->enter($__internal_1242cfd2b20ca34b531b7ea0c88b52cfad9013f4bbaec28024211d785ebe39d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "nom", array()), "html", null, true);
        echo "</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("typesTdB");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_edit", array("id" => $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier le type de tableau de bord
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_delete", array("id" => $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer le type de tableau de bord
        </a>
    </p>


";
        
        $__internal_1242cfd2b20ca34b531b7ea0c88b52cfad9013f4bbaec28024211d785ebe39d8->leave($__internal_1242cfd2b20ca34b531b7ea0c88b52cfad9013f4bbaec28024211d785ebe39d8_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeTdB:view.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeTdB/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un type de tableau de bord - {{ parent() }}*/
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
/*   <h2>{{ typeTdB.nom }}</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('typesTdB') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('typeTdB_edit', {'id': typeTdB.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier le type de tableau de bord*/
/*         </a>*/
/*         <a href="{{ path('typeTdB_delete', {'id': typeTdB.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer le type de tableau de bord*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
