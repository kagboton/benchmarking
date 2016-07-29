<?php

/* BenchmarkingBundle:Default/TailleEcran:add.html.twig */
class __TwigTemplate_6c3babd28893d018022a2dedc934ec191ce0cf1ee5edb02af4fae0cca394a153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TailleEcran:add.html.twig", 3);
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
        $__internal_2829ac87807754b3932659e3f780ba153f4b195c541bc24d3bc3ea6803d0e824 = $this->env->getExtension("native_profiler");
        $__internal_2829ac87807754b3932659e3f780ba153f4b195c541bc24d3bc3ea6803d0e824->enter($__internal_2829ac87807754b3932659e3f780ba153f4b195c541bc24d3bc3ea6803d0e824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TailleEcran:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2829ac87807754b3932659e3f780ba153f4b195c541bc24d3bc3ea6803d0e824->leave($__internal_2829ac87807754b3932659e3f780ba153f4b195c541bc24d3bc3ea6803d0e824_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_328775901b3537061d2a28d99eb51240d3b893c48817e93eaf65f205a17d64ba = $this->env->getExtension("native_profiler");
        $__internal_328775901b3537061d2a28d99eb51240d3b893c48817e93eaf65f205a17d64ba->enter($__internal_328775901b3537061d2a28d99eb51240d3b893c48817e93eaf65f205a17d64ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_328775901b3537061d2a28d99eb51240d3b893c48817e93eaf65f205a17d64ba->leave($__internal_328775901b3537061d2a28d99eb51240d3b893c48817e93eaf65f205a17d64ba_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_1ad8397c3cdbf719590e35ac2604b75d45c9c940e567fd30a48d85b6992c6c5f = $this->env->getExtension("native_profiler");
        $__internal_1ad8397c3cdbf719590e35ac2604b75d45c9c940e567fd30a48d85b6992c6c5f->enter($__internal_1ad8397c3cdbf719590e35ac2604b75d45c9c940e567fd30a48d85b6992c6c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter une taille d'écran</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TailleEcran/form.html.twig");
        echo "

  <p>
    Cette taille d'écran sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_1ad8397c3cdbf719590e35ac2604b75d45c9c940e567fd30a48d85b6992c6c5f->leave($__internal_1ad8397c3cdbf719590e35ac2604b75d45c9c940e567fd30a48d85b6992c6c5f_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TailleEcran:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/TailleEcran/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une taille d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter une taille d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TailleEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cette taille d'écran sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
