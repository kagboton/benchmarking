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
        $__internal_6d99c4b788f53c8b5f5f2959e752113a5acfc595fc42cb1d199d2e5596ac7a7e = $this->env->getExtension("native_profiler");
        $__internal_6d99c4b788f53c8b5f5f2959e752113a5acfc595fc42cb1d199d2e5596ac7a7e->enter($__internal_6d99c4b788f53c8b5f5f2959e752113a5acfc595fc42cb1d199d2e5596ac7a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d99c4b788f53c8b5f5f2959e752113a5acfc595fc42cb1d199d2e5596ac7a7e->leave($__internal_6d99c4b788f53c8b5f5f2959e752113a5acfc595fc42cb1d199d2e5596ac7a7e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3758121f7252ef8a09608c9e05c3d53064e7ee4dd8821d59879d7071513a2718 = $this->env->getExtension("native_profiler");
        $__internal_3758121f7252ef8a09608c9e05c3d53064e7ee4dd8821d59879d7071513a2718->enter($__internal_3758121f7252ef8a09608c9e05c3d53064e7ee4dd8821d59879d7071513a2718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3758121f7252ef8a09608c9e05c3d53064e7ee4dd8821d59879d7071513a2718->leave($__internal_3758121f7252ef8a09608c9e05c3d53064e7ee4dd8821d59879d7071513a2718_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_c2fd23d65c970dc505a1a0e99c639dfb645d54a0f3298dc98a2004b9e80af0f1 = $this->env->getExtension("native_profiler");
        $__internal_c2fd23d65c970dc505a1a0e99c639dfb645d54a0f3298dc98a2004b9e80af0f1->enter($__internal_c2fd23d65c970dc505a1a0e99c639dfb645d54a0f3298dc98a2004b9e80af0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_c2fd23d65c970dc505a1a0e99c639dfb645d54a0f3298dc98a2004b9e80af0f1->leave($__internal_c2fd23d65c970dc505a1a0e99c639dfb645d54a0f3298dc98a2004b9e80af0f1_prof);

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
