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
        $__internal_76556e37647f26771abef0f858d5902c7b060350987d5e340f769b1dee657a3f = $this->env->getExtension("native_profiler");
        $__internal_76556e37647f26771abef0f858d5902c7b060350987d5e340f769b1dee657a3f->enter($__internal_76556e37647f26771abef0f858d5902c7b060350987d5e340f769b1dee657a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76556e37647f26771abef0f858d5902c7b060350987d5e340f769b1dee657a3f->leave($__internal_76556e37647f26771abef0f858d5902c7b060350987d5e340f769b1dee657a3f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c0c5aa1112abe2ff3479527ed4b742b46c2ed548aef2c7259ad10e8b823f54d = $this->env->getExtension("native_profiler");
        $__internal_0c0c5aa1112abe2ff3479527ed4b742b46c2ed548aef2c7259ad10e8b823f54d->enter($__internal_0c0c5aa1112abe2ff3479527ed4b742b46c2ed548aef2c7259ad10e8b823f54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c0c5aa1112abe2ff3479527ed4b742b46c2ed548aef2c7259ad10e8b823f54d->leave($__internal_0c0c5aa1112abe2ff3479527ed4b742b46c2ed548aef2c7259ad10e8b823f54d_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_a81c40e4b668698741f7afbd542aac3de2853ddc35b2680bf007bf023f0d8dc1 = $this->env->getExtension("native_profiler");
        $__internal_a81c40e4b668698741f7afbd542aac3de2853ddc35b2680bf007bf023f0d8dc1->enter($__internal_a81c40e4b668698741f7afbd542aac3de2853ddc35b2680bf007bf023f0d8dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_a81c40e4b668698741f7afbd542aac3de2853ddc35b2680bf007bf023f0d8dc1->leave($__internal_a81c40e4b668698741f7afbd542aac3de2853ddc35b2680bf007bf023f0d8dc1_prof);

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
