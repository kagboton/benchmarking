<?php

/* BenchmarkingBundle:Default/SousTechnologieAfficheur:add.html.twig */
class __TwigTemplate_a25b55f518956f93d8757e7deb888f570cebf1d562b8c638b7f941f826296601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/SousTechnologieAfficheur:add.html.twig", 3);
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
        $__internal_a44c05f2d0c134bdd5383d5093bcbc9818771ac142292d59a44bb05a8b49a095 = $this->env->getExtension("native_profiler");
        $__internal_a44c05f2d0c134bdd5383d5093bcbc9818771ac142292d59a44bb05a8b49a095->enter($__internal_a44c05f2d0c134bdd5383d5093bcbc9818771ac142292d59a44bb05a8b49a095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a44c05f2d0c134bdd5383d5093bcbc9818771ac142292d59a44bb05a8b49a095->leave($__internal_a44c05f2d0c134bdd5383d5093bcbc9818771ac142292d59a44bb05a8b49a095_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_df4138b15b6a879d31520960da04a344b5d040685ea6c020f790760694087bc9 = $this->env->getExtension("native_profiler");
        $__internal_df4138b15b6a879d31520960da04a344b5d040685ea6c020f790760694087bc9->enter($__internal_df4138b15b6a879d31520960da04a344b5d040685ea6c020f790760694087bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_df4138b15b6a879d31520960da04a344b5d040685ea6c020f790760694087bc9->leave($__internal_df4138b15b6a879d31520960da04a344b5d040685ea6c020f790760694087bc9_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_fc8383006eb8d737205e61a6f83bfd2c6634aeb2c228b003d7ab2cda613d0a22 = $this->env->getExtension("native_profiler");
        $__internal_fc8383006eb8d737205e61a6f83bfd2c6634aeb2c228b003d7ab2cda613d0a22->enter($__internal_fc8383006eb8d737205e61a6f83bfd2c6634aeb2c228b003d7ab2cda613d0a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter une sous technologie afficheur</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:SousTechnologieAfficheur/form.html.twig");
        echo "

  <p>
    Cette sous technologie sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_fc8383006eb8d737205e61a6f83bfd2c6634aeb2c228b003d7ab2cda613d0a22->leave($__internal_fc8383006eb8d737205e61a6f83bfd2c6634aeb2c228b003d7ab2cda613d0a22_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/SousTechnologieAfficheur:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/SousTechnologieAfficheur/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une sous technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter une sous technologie afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:SousTechnologieAfficheur/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cette sous technologie sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
