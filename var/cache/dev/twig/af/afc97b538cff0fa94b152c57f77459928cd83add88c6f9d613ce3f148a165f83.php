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
        $__internal_684a0d66f7d4cbe611646caa3a5406a6a12c1326dc349206b95edda0cf237d19 = $this->env->getExtension("native_profiler");
        $__internal_684a0d66f7d4cbe611646caa3a5406a6a12c1326dc349206b95edda0cf237d19->enter($__internal_684a0d66f7d4cbe611646caa3a5406a6a12c1326dc349206b95edda0cf237d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_684a0d66f7d4cbe611646caa3a5406a6a12c1326dc349206b95edda0cf237d19->leave($__internal_684a0d66f7d4cbe611646caa3a5406a6a12c1326dc349206b95edda0cf237d19_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a47a3e95db9332a2523078b3c0135adf69833177408dc1784cb89b5085440eff = $this->env->getExtension("native_profiler");
        $__internal_a47a3e95db9332a2523078b3c0135adf69833177408dc1784cb89b5085440eff->enter($__internal_a47a3e95db9332a2523078b3c0135adf69833177408dc1784cb89b5085440eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a47a3e95db9332a2523078b3c0135adf69833177408dc1784cb89b5085440eff->leave($__internal_a47a3e95db9332a2523078b3c0135adf69833177408dc1784cb89b5085440eff_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_799b739a1fc5ebba3feffdec193766c14b66aec735db6845675d6f0adb1ed445 = $this->env->getExtension("native_profiler");
        $__internal_799b739a1fc5ebba3feffdec193766c14b66aec735db6845675d6f0adb1ed445->enter($__internal_799b739a1fc5ebba3feffdec193766c14b66aec735db6845675d6f0adb1ed445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_799b739a1fc5ebba3feffdec193766c14b66aec735db6845675d6f0adb1ed445->leave($__internal_799b739a1fc5ebba3feffdec193766c14b66aec735db6845675d6f0adb1ed445_prof);

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
