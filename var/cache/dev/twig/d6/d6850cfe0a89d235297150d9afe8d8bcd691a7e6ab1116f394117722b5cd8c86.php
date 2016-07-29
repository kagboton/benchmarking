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
        $__internal_0f99b8526d3b48c4c5673f736401a32e9a7f3be54ae6b6a05a68adef51a6ede8 = $this->env->getExtension("native_profiler");
        $__internal_0f99b8526d3b48c4c5673f736401a32e9a7f3be54ae6b6a05a68adef51a6ede8->enter($__internal_0f99b8526d3b48c4c5673f736401a32e9a7f3be54ae6b6a05a68adef51a6ede8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/SousTechnologieAfficheur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f99b8526d3b48c4c5673f736401a32e9a7f3be54ae6b6a05a68adef51a6ede8->leave($__internal_0f99b8526d3b48c4c5673f736401a32e9a7f3be54ae6b6a05a68adef51a6ede8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4792fb86b8fb30190d021d823bd88c2b9761b4b53dd70dfbde0a9cc805730a0c = $this->env->getExtension("native_profiler");
        $__internal_4792fb86b8fb30190d021d823bd88c2b9761b4b53dd70dfbde0a9cc805730a0c->enter($__internal_4792fb86b8fb30190d021d823bd88c2b9761b4b53dd70dfbde0a9cc805730a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4792fb86b8fb30190d021d823bd88c2b9761b4b53dd70dfbde0a9cc805730a0c->leave($__internal_4792fb86b8fb30190d021d823bd88c2b9761b4b53dd70dfbde0a9cc805730a0c_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_ff871968dd2ea2edc7b06ee2a03e47a612142cd50b206c7d737b5d731b67a39a = $this->env->getExtension("native_profiler");
        $__internal_ff871968dd2ea2edc7b06ee2a03e47a612142cd50b206c7d737b5d731b67a39a->enter($__internal_ff871968dd2ea2edc7b06ee2a03e47a612142cd50b206c7d737b5d731b67a39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_ff871968dd2ea2edc7b06ee2a03e47a612142cd50b206c7d737b5d731b67a39a->leave($__internal_ff871968dd2ea2edc7b06ee2a03e47a612142cd50b206c7d737b5d731b67a39a_prof);

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
