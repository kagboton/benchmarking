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
        $__internal_72294c0a28b71c0a0c2150e84d7146371252adddcb77472a7148fa59e8e48c4b = $this->env->getExtension("native_profiler");
        $__internal_72294c0a28b71c0a0c2150e84d7146371252adddcb77472a7148fa59e8e48c4b->enter($__internal_72294c0a28b71c0a0c2150e84d7146371252adddcb77472a7148fa59e8e48c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TechnologieAfficheur/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72294c0a28b71c0a0c2150e84d7146371252adddcb77472a7148fa59e8e48c4b->leave($__internal_72294c0a28b71c0a0c2150e84d7146371252adddcb77472a7148fa59e8e48c4b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6bbe48940c734fb9a799ba0e4e86022b16a9bd93413977d042d61204de3c066 = $this->env->getExtension("native_profiler");
        $__internal_b6bbe48940c734fb9a799ba0e4e86022b16a9bd93413977d042d61204de3c066->enter($__internal_b6bbe48940c734fb9a799ba0e4e86022b16a9bd93413977d042d61204de3c066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b6bbe48940c734fb9a799ba0e4e86022b16a9bd93413977d042d61204de3c066->leave($__internal_b6bbe48940c734fb9a799ba0e4e86022b16a9bd93413977d042d61204de3c066_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_83701a0e2872c6113749204441a358830fbb8d60e5ab5cc3078a679081ade551 = $this->env->getExtension("native_profiler");
        $__internal_83701a0e2872c6113749204441a358830fbb8d60e5ab5cc3078a679081ade551->enter($__internal_83701a0e2872c6113749204441a358830fbb8d60e5ab5cc3078a679081ade551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_83701a0e2872c6113749204441a358830fbb8d60e5ab5cc3078a679081ade551->leave($__internal_83701a0e2872c6113749204441a358830fbb8d60e5ab5cc3078a679081ade551_prof);

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
