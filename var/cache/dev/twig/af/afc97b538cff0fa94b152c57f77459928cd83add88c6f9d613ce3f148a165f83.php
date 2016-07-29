<?php

/* @Benchmarking/Default/ComposantAffichage/add.html.twig */
class __TwigTemplate_fabbdda541561067e346a0d6697a36c950c7686eb44fb6ed58b61b3be934abe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/ComposantAffichage/add.html.twig", 3);
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
        $__internal_d9a572bc579674f08f562e79665d21cc2e5bea1593a57ba1d081f7c3a57439d4 = $this->env->getExtension("native_profiler");
        $__internal_d9a572bc579674f08f562e79665d21cc2e5bea1593a57ba1d081f7c3a57439d4->enter($__internal_d9a572bc579674f08f562e79665d21cc2e5bea1593a57ba1d081f7c3a57439d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a572bc579674f08f562e79665d21cc2e5bea1593a57ba1d081f7c3a57439d4->leave($__internal_d9a572bc579674f08f562e79665d21cc2e5bea1593a57ba1d081f7c3a57439d4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_87ba9e157edd6815cf321677fd99a3f2997fadddb934e8a4abeffc15a995e799 = $this->env->getExtension("native_profiler");
        $__internal_87ba9e157edd6815cf321677fd99a3f2997fadddb934e8a4abeffc15a995e799->enter($__internal_87ba9e157edd6815cf321677fd99a3f2997fadddb934e8a4abeffc15a995e799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_87ba9e157edd6815cf321677fd99a3f2997fadddb934e8a4abeffc15a995e799->leave($__internal_87ba9e157edd6815cf321677fd99a3f2997fadddb934e8a4abeffc15a995e799_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_01641bdacbb9c8c89a8766768c329438f45084c3b9b9f1c3e9feecdd6dfd5195 = $this->env->getExtension("native_profiler");
        $__internal_01641bdacbb9c8c89a8766768c329438f45084c3b9b9f1c3e9feecdd6dfd5195->enter($__internal_01641bdacbb9c8c89a8766768c329438f45084c3b9b9f1c3e9feecdd6dfd5195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_01641bdacbb9c8c89a8766768c329438f45084c3b9b9f1c3e9feecdd6dfd5195->leave($__internal_01641bdacbb9c8c89a8766768c329438f45084c3b9b9f1c3e9feecdd6dfd5195_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/ComposantAffichage/add.html.twig";
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
