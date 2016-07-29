<?php

/* @Benchmarking/Default/TechnologieAfficheur/add.html.twig */
class __TwigTemplate_1db4dd1efd18af1ec0000e1e2cf672e8a6729c49dabe7c4657c2efa4ba0b0de6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TechnologieAfficheur/add.html.twig", 3);
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
        $__internal_74f66f11e1fedb66a62dc6b863c4864c7201b8bd260200f0ed2ecc6e5b2bb811 = $this->env->getExtension("native_profiler");
        $__internal_74f66f11e1fedb66a62dc6b863c4864c7201b8bd260200f0ed2ecc6e5b2bb811->enter($__internal_74f66f11e1fedb66a62dc6b863c4864c7201b8bd260200f0ed2ecc6e5b2bb811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TechnologieAfficheur/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f66f11e1fedb66a62dc6b863c4864c7201b8bd260200f0ed2ecc6e5b2bb811->leave($__internal_74f66f11e1fedb66a62dc6b863c4864c7201b8bd260200f0ed2ecc6e5b2bb811_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_deb85703581a7bbcd679372af363d8c9e4639d88112e6da7422f2fdb3a613abc = $this->env->getExtension("native_profiler");
        $__internal_deb85703581a7bbcd679372af363d8c9e4639d88112e6da7422f2fdb3a613abc->enter($__internal_deb85703581a7bbcd679372af363d8c9e4639d88112e6da7422f2fdb3a613abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_deb85703581a7bbcd679372af363d8c9e4639d88112e6da7422f2fdb3a613abc->leave($__internal_deb85703581a7bbcd679372af363d8c9e4639d88112e6da7422f2fdb3a613abc_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_cbbab743e0cfd8e87c777884da8fb5e7bed1c574866bfa9336adf09f3b8e9dea = $this->env->getExtension("native_profiler");
        $__internal_cbbab743e0cfd8e87c777884da8fb5e7bed1c574866bfa9336adf09f3b8e9dea->enter($__internal_cbbab743e0cfd8e87c777884da8fb5e7bed1c574866bfa9336adf09f3b8e9dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_cbbab743e0cfd8e87c777884da8fb5e7bed1c574866bfa9336adf09f3b8e9dea->leave($__internal_cbbab743e0cfd8e87c777884da8fb5e7bed1c574866bfa9336adf09f3b8e9dea_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TechnologieAfficheur/add.html.twig";
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
