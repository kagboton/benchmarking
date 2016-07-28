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
        $__internal_b56226b7b3086dd29efaf05b6c4081732c9ca5ac220ae2abaefe97c6a954cb36 = $this->env->getExtension("native_profiler");
        $__internal_b56226b7b3086dd29efaf05b6c4081732c9ca5ac220ae2abaefe97c6a954cb36->enter($__internal_b56226b7b3086dd29efaf05b6c4081732c9ca5ac220ae2abaefe97c6a954cb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TailleEcran:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56226b7b3086dd29efaf05b6c4081732c9ca5ac220ae2abaefe97c6a954cb36->leave($__internal_b56226b7b3086dd29efaf05b6c4081732c9ca5ac220ae2abaefe97c6a954cb36_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3e91307a023295f4c005940e3c15fd936b7532f4c6ee8919926d1a0ebc53b4b = $this->env->getExtension("native_profiler");
        $__internal_f3e91307a023295f4c005940e3c15fd936b7532f4c6ee8919926d1a0ebc53b4b->enter($__internal_f3e91307a023295f4c005940e3c15fd936b7532f4c6ee8919926d1a0ebc53b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f3e91307a023295f4c005940e3c15fd936b7532f4c6ee8919926d1a0ebc53b4b->leave($__internal_f3e91307a023295f4c005940e3c15fd936b7532f4c6ee8919926d1a0ebc53b4b_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_4600f06dd4a780d820e74385a140ebe9e6bb3294cd81ac91ee13fbe2c119069f = $this->env->getExtension("native_profiler");
        $__internal_4600f06dd4a780d820e74385a140ebe9e6bb3294cd81ac91ee13fbe2c119069f->enter($__internal_4600f06dd4a780d820e74385a140ebe9e6bb3294cd81ac91ee13fbe2c119069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_4600f06dd4a780d820e74385a140ebe9e6bb3294cd81ac91ee13fbe2c119069f->leave($__internal_4600f06dd4a780d820e74385a140ebe9e6bb3294cd81ac91ee13fbe2c119069f_prof);

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
