<?php

/* BenchmarkingBundle:Default/CommandePhysique:view.html.twig */
class __TwigTemplate_454b6dd4f961129bb6c585397b5cdfaca112bcedf4bd881d1d5e9fdb93b97c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/CommandePhysique:view.html.twig", 3);
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
        $__internal_ae9aa248fe1eb4aeb3783ec39ae373b35dfa77740f703e9218b6253e34e9f847 = $this->env->getExtension("native_profiler");
        $__internal_ae9aa248fe1eb4aeb3783ec39ae373b35dfa77740f703e9218b6253e34e9f847->enter($__internal_ae9aa248fe1eb4aeb3783ec39ae373b35dfa77740f703e9218b6253e34e9f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9aa248fe1eb4aeb3783ec39ae373b35dfa77740f703e9218b6253e34e9f847->leave($__internal_ae9aa248fe1eb4aeb3783ec39ae373b35dfa77740f703e9218b6253e34e9f847_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fd92f0a5a2ba963910f65e363f9cc9d55c26e2cd420cfb7d85f515af2296a19 = $this->env->getExtension("native_profiler");
        $__internal_0fd92f0a5a2ba963910f65e363f9cc9d55c26e2cd420cfb7d85f515af2296a19->enter($__internal_0fd92f0a5a2ba963910f65e363f9cc9d55c26e2cd420cfb7d85f515af2296a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une commande physique - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0fd92f0a5a2ba963910f65e363f9cc9d55c26e2cd420cfb7d85f515af2296a19->leave($__internal_0fd92f0a5a2ba963910f65e363f9cc9d55c26e2cd420cfb7d85f515af2296a19_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_f199784c70848cd53b1e6aae068bbecd90448b27ec9823fafcf23ca0aed057e0 = $this->env->getExtension("native_profiler");
        $__internal_f199784c70848cd53b1e6aae068bbecd90448b27ec9823fafcf23ca0aed057e0->enter($__internal_f199784c70848cd53b1e6aae068bbecd90448b27ec9823fafcf23ca0aed057e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "nom", array()), "html", null, true);
        echo "</h2>



    <p>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("commandesPhysiques");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_edit", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier la commande
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_delete", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer la commande
        </a>
    </p>


";
        
        $__internal_f199784c70848cd53b1e6aae068bbecd90448b27ec9823fafcf23ca0aed057e0->leave($__internal_f199784c70848cd53b1e6aae068bbecd90448b27ec9823fafcf23ca0aed057e0_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/CommandePhysique:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  96 => 28,  89 => 24,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/CommandePhysique/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une commande physique - {{ parent() }}*/
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
/*   <h2>{{ commandePhysique.nom }}</h2>*/
/* */
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('commandesPhysiques') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('commandePhysique_edit', {'id': commandePhysique.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier la commande*/
/*         </a>*/
/*         <a href="{{ path('commandePhysique_delete', {'id': commandePhysique.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer la commande*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
