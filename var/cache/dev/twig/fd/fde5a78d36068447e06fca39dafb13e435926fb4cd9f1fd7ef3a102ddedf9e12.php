<?php

/* BenchmarkingBundle:Default/ComposantAffichage:add.html.twig */
class __TwigTemplate_2ee76fb8a49cbba2150e560d7348d6a16849eb58cb7e305cecbd59388047bb87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/ComposantAffichage:add.html.twig", 3);
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
        $__internal_eea8680f9acf9c4a56e9efcd946de57acdd962b19bbaa75fa33282b571fcbf67 = $this->env->getExtension("native_profiler");
        $__internal_eea8680f9acf9c4a56e9efcd946de57acdd962b19bbaa75fa33282b571fcbf67->enter($__internal_eea8680f9acf9c4a56e9efcd946de57acdd962b19bbaa75fa33282b571fcbf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eea8680f9acf9c4a56e9efcd946de57acdd962b19bbaa75fa33282b571fcbf67->leave($__internal_eea8680f9acf9c4a56e9efcd946de57acdd962b19bbaa75fa33282b571fcbf67_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce2ec884c8d85005afd27d3c56ecb869d3d8b7e83af93b2d1f94485858812778 = $this->env->getExtension("native_profiler");
        $__internal_ce2ec884c8d85005afd27d3c56ecb869d3d8b7e83af93b2d1f94485858812778->enter($__internal_ce2ec884c8d85005afd27d3c56ecb869d3d8b7e83af93b2d1f94485858812778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce2ec884c8d85005afd27d3c56ecb869d3d8b7e83af93b2d1f94485858812778->leave($__internal_ce2ec884c8d85005afd27d3c56ecb869d3d8b7e83af93b2d1f94485858812778_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_20d95216cc88794a4796dd38fa5df872640d2acbf8cf43c5faf5858e3dfcd211 = $this->env->getExtension("native_profiler");
        $__internal_20d95216cc88794a4796dd38fa5df872640d2acbf8cf43c5faf5858e3dfcd211->enter($__internal_20d95216cc88794a4796dd38fa5df872640d2acbf8cf43c5faf5858e3dfcd211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un composant d'affichage</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:ComposantAffichage/form.html.twig");
        echo "

  <p>
    Ce composant sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_20d95216cc88794a4796dd38fa5df872640d2acbf8cf43c5faf5858e3dfcd211->leave($__internal_20d95216cc88794a4796dd38fa5df872640d2acbf8cf43c5faf5858e3dfcd211_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/ComposantAffichage:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/ComposantAffichage/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un composant d'affichage - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un composant d'affichage</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:ComposantAffichage/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce composant sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
