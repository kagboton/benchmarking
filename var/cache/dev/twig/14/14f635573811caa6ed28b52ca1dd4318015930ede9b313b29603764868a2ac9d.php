<?php

/* BenchmarkingBundle:Default/AfficheurExistant:add.html.twig */
class __TwigTemplate_c4423780c16a6239ab316a72ab03d282c50b30ca00c44b21feac607edbf05ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/AfficheurExistant:add.html.twig", 3);
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
        $__internal_9af6b8e9ca61b34c2b6e794238b87c55858daeae2304542e390c71d9481aee66 = $this->env->getExtension("native_profiler");
        $__internal_9af6b8e9ca61b34c2b6e794238b87c55858daeae2304542e390c71d9481aee66->enter($__internal_9af6b8e9ca61b34c2b6e794238b87c55858daeae2304542e390c71d9481aee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/AfficheurExistant:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af6b8e9ca61b34c2b6e794238b87c55858daeae2304542e390c71d9481aee66->leave($__internal_9af6b8e9ca61b34c2b6e794238b87c55858daeae2304542e390c71d9481aee66_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b7414165a0822af242bc0716dd5de1b660c0ac5df03cd4729f8e7f6ef3eaae2 = $this->env->getExtension("native_profiler");
        $__internal_2b7414165a0822af242bc0716dd5de1b660c0ac5df03cd4729f8e7f6ef3eaae2->enter($__internal_2b7414165a0822af242bc0716dd5de1b660c0ac5df03cd4729f8e7f6ef3eaae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un afficheur  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2b7414165a0822af242bc0716dd5de1b660c0ac5df03cd4729f8e7f6ef3eaae2->leave($__internal_2b7414165a0822af242bc0716dd5de1b660c0ac5df03cd4729f8e7f6ef3eaae2_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_17d117f3dce9b205b98a32dc251c58c236b4f1968808211cd5e8d1c67cbb4cbc = $this->env->getExtension("native_profiler");
        $__internal_17d117f3dce9b205b98a32dc251c58c236b4f1968808211cd5e8d1c67cbb4cbc->enter($__internal_17d117f3dce9b205b98a32dc251c58c236b4f1968808211cd5e8d1c67cbb4cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un affficheur</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:AfficheurExistant/form.html.twig");
        echo "

  <p>
    Cet afficheur sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_17d117f3dce9b205b98a32dc251c58c236b4f1968808211cd5e8d1c67cbb4cbc->leave($__internal_17d117f3dce9b205b98a32dc251c58c236b4f1968808211cd5e8d1c67cbb4cbc_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/AfficheurExistant:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/AfficheurExistant/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un afficheur  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un affficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:AfficheurExistant/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cet afficheur sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
