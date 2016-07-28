<?php

/* BenchmarkingBundle:Default/CommandePhysique:edit.html.twig */
class __TwigTemplate_eb9981513ef17bf48d37f90ca11c56ece075fa8e390a5459f883e4a0e774fdfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/CommandePhysique:edit.html.twig", 3);
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
        $__internal_9b75fcc77da0d2709da83f0c2520db38f02161e541f2c1c21dc7f1366cd2ddd3 = $this->env->getExtension("native_profiler");
        $__internal_9b75fcc77da0d2709da83f0c2520db38f02161e541f2c1c21dc7f1366cd2ddd3->enter($__internal_9b75fcc77da0d2709da83f0c2520db38f02161e541f2c1c21dc7f1366cd2ddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b75fcc77da0d2709da83f0c2520db38f02161e541f2c1c21dc7f1366cd2ddd3->leave($__internal_9b75fcc77da0d2709da83f0c2520db38f02161e541f2c1c21dc7f1366cd2ddd3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a335a9cc180278d487471c0999437b80fdcaae938eb6c38a832dc659b8a0cb88 = $this->env->getExtension("native_profiler");
        $__internal_a335a9cc180278d487471c0999437b80fdcaae938eb6c38a832dc659b8a0cb88->enter($__internal_a335a9cc180278d487471c0999437b80fdcaae938eb6c38a832dc659b8a0cb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une commande - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a335a9cc180278d487471c0999437b80fdcaae938eb6c38a832dc659b8a0cb88->leave($__internal_a335a9cc180278d487471c0999437b80fdcaae938eb6c38a832dc659b8a0cb88_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_2bba82fbdcc021181ec5932b9daa7bf2bb0d3d6d188ffb1144e87ef5bb7b7b3c = $this->env->getExtension("native_profiler");
        $__internal_2bba82fbdcc021181ec5932b9daa7bf2bb0d3d6d188ffb1144e87ef5bb7b7b3c->enter($__internal_2bba82fbdcc021181ec5932b9daa7bf2bb0d3d6d188ffb1144e87ef5bb7b7b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une commande physique</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:CommandePhysique/form.html.twig");
        echo "

  <p>
    Modification d'une commande physique déjà existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_view", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la commande
    </a>
  </p>

";
        
        $__internal_2bba82fbdcc021181ec5932b9daa7bf2bb0d3d6d188ffb1144e87ef5bb7b7b3c->leave($__internal_2bba82fbdcc021181ec5932b9daa7bf2bb0d3d6d188ffb1144e87ef5bb7b7b3c_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/CommandePhysique:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/CommandePhysique/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une commande - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une commande physique</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:CommandePhysique/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une commande physique déjà existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('commandePhysique_view', {'id': commandePhysique.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la commande*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
