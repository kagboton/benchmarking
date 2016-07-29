<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:add.html.twig */
class __TwigTemplate_1f8dd36ceb90e6168978874e199f737711b257208142ad14a39019b404d600be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TechnologieAfficheur:add.html.twig", 3);
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
        $__internal_f325fe8249a6fd27fab234ddc48efa2127178f46370ca498a77c011b6ab501e5 = $this->env->getExtension("native_profiler");
        $__internal_f325fe8249a6fd27fab234ddc48efa2127178f46370ca498a77c011b6ab501e5->enter($__internal_f325fe8249a6fd27fab234ddc48efa2127178f46370ca498a77c011b6ab501e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f325fe8249a6fd27fab234ddc48efa2127178f46370ca498a77c011b6ab501e5->leave($__internal_f325fe8249a6fd27fab234ddc48efa2127178f46370ca498a77c011b6ab501e5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_38dd86558f956c361fbd7478c55394405bd8f551ee8bf3a8f606f4e7eaadd98c = $this->env->getExtension("native_profiler");
        $__internal_38dd86558f956c361fbd7478c55394405bd8f551ee8bf3a8f606f4e7eaadd98c->enter($__internal_38dd86558f956c361fbd7478c55394405bd8f551ee8bf3a8f606f4e7eaadd98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_38dd86558f956c361fbd7478c55394405bd8f551ee8bf3a8f606f4e7eaadd98c->leave($__internal_38dd86558f956c361fbd7478c55394405bd8f551ee8bf3a8f606f4e7eaadd98c_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_56d1d320d53ecaf23d1c518fe812ff418fb3e17644b63149a166fbecfdbbc7a5 = $this->env->getExtension("native_profiler");
        $__internal_56d1d320d53ecaf23d1c518fe812ff418fb3e17644b63149a166fbecfdbbc7a5->enter($__internal_56d1d320d53ecaf23d1c518fe812ff418fb3e17644b63149a166fbecfdbbc7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter une technologie afficheur</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TechnologieAfficheur/form.html.twig");
        echo "

  <p>
    Cette technologie sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_56d1d320d53ecaf23d1c518fe812ff418fb3e17644b63149a166fbecfdbbc7a5->leave($__internal_56d1d320d53ecaf23d1c518fe812ff418fb3e17644b63149a166fbecfdbbc7a5_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TechnologieAfficheur/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter une technologie afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TechnologieAfficheur/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cette technologie sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
