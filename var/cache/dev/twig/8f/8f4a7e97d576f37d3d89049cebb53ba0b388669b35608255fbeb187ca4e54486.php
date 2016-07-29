<?php

/* @Benchmarking/Default/FormatEcran/add.html.twig */
class __TwigTemplate_8e68d3f3e579584f3b980f64fd734feb124060d6251c3cbcfa42b6d86be23e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/FormatEcran/add.html.twig", 3);
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
        $__internal_3ddfb53cfcdb69889d924c7dcb17cc706695d37b44c7e422bd1762f1afc6b57f = $this->env->getExtension("native_profiler");
        $__internal_3ddfb53cfcdb69889d924c7dcb17cc706695d37b44c7e422bd1762f1afc6b57f->enter($__internal_3ddfb53cfcdb69889d924c7dcb17cc706695d37b44c7e422bd1762f1afc6b57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FormatEcran/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ddfb53cfcdb69889d924c7dcb17cc706695d37b44c7e422bd1762f1afc6b57f->leave($__internal_3ddfb53cfcdb69889d924c7dcb17cc706695d37b44c7e422bd1762f1afc6b57f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_320db501f983c89de396c161f6efa5638e4b9ca527dac4a1e4ff6844be61cf67 = $this->env->getExtension("native_profiler");
        $__internal_320db501f983c89de396c161f6efa5638e4b9ca527dac4a1e4ff6844be61cf67->enter($__internal_320db501f983c89de396c161f6efa5638e4b9ca527dac4a1e4ff6844be61cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_320db501f983c89de396c161f6efa5638e4b9ca527dac4a1e4ff6844be61cf67->leave($__internal_320db501f983c89de396c161f6efa5638e4b9ca527dac4a1e4ff6844be61cf67_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_45fa8ec3018f3021e9e06d58ee36b7ed69c9764b2e8ff5ff031b3d82d08c54c5 = $this->env->getExtension("native_profiler");
        $__internal_45fa8ec3018f3021e9e06d58ee36b7ed69c9764b2e8ff5ff031b3d82d08c54c5->enter($__internal_45fa8ec3018f3021e9e06d58ee36b7ed69c9764b2e8ff5ff031b3d82d08c54c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un format d'écran</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FormatEcran/form.html.twig");
        echo "

  <p>
    Ce format d'écran sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_45fa8ec3018f3021e9e06d58ee36b7ed69c9764b2e8ff5ff031b3d82d08c54c5->leave($__internal_45fa8ec3018f3021e9e06d58ee36b7ed69c9764b2e8ff5ff031b3d82d08c54c5_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FormatEcran/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/FormatEcran/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un format d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un format d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:FormatEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce format d'écran sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
