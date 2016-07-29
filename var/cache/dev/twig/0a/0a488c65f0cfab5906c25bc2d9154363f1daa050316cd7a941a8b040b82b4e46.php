<?php

/* BenchmarkingBundle:Default/Famille:add.html.twig */
class __TwigTemplate_d76ba0336287f5b0c07e6c117c9bff1cd030d1cf889954a73e08d507eeec241c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Famille:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a615c871751d6fce2795e8215438993107a2954045235b2fcead9f73edaae5a = $this->env->getExtension("native_profiler");
        $__internal_6a615c871751d6fce2795e8215438993107a2954045235b2fcead9f73edaae5a->enter($__internal_6a615c871751d6fce2795e8215438993107a2954045235b2fcead9f73edaae5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Famille:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a615c871751d6fce2795e8215438993107a2954045235b2fcead9f73edaae5a->leave($__internal_6a615c871751d6fce2795e8215438993107a2954045235b2fcead9f73edaae5a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb658661b5ffba1a10ea093b1a9c507d061fc01e65e5f23b0152ed128b436af8 = $this->env->getExtension("native_profiler");
        $__internal_bb658661b5ffba1a10ea093b1a9c507d061fc01e65e5f23b0152ed128b436af8->enter($__internal_bb658661b5ffba1a10ea093b1a9c507d061fc01e65e5f23b0152ed128b436af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bb658661b5ffba1a10ea093b1a9c507d061fc01e65e5f23b0152ed128b436af8->leave($__internal_bb658661b5ffba1a10ea093b1a9c507d061fc01e65e5f23b0152ed128b436af8_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_6df89f1947120df9b88ddb428bd9472d309a844f8a2d42052bdcf62d0db3b35f = $this->env->getExtension("native_profiler");
        $__internal_6df89f1947120df9b88ddb428bd9472d309a844f8a2d42052bdcf62d0db3b35f->enter($__internal_6df89f1947120df9b88ddb428bd9472d309a844f8a2d42052bdcf62d0db3b35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4>Ajouter une famille de fonctions</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Famille/form.html.twig");
        echo "
  </div>

";
        
        $__internal_6df89f1947120df9b88ddb428bd9472d309a844f8a2d42052bdcf62d0db3b35f->leave($__internal_6df89f1947120df9b88ddb428bd9472d309a844f8a2d42052bdcf62d0db3b35f_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Famille:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Famille/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une famille - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4>Ajouter une famille de fonctions</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Famille/form.html.twig") }}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
