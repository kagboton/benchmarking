<?php

/* @Benchmarking/Default/Localisation/edit.html.twig */
class __TwigTemplate_0f6feb431c167e53f0956e5e0fb412fdb4e5e3649892c21bbed7bbd15f557824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/Localisation/edit.html.twig", 3);
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
        $__internal_fd204a1e71ff4eb89dfdb789ed7dd4af47a16df6838ca20d5698a8542a6102e1 = $this->env->getExtension("native_profiler");
        $__internal_fd204a1e71ff4eb89dfdb789ed7dd4af47a16df6838ca20d5698a8542a6102e1->enter($__internal_fd204a1e71ff4eb89dfdb789ed7dd4af47a16df6838ca20d5698a8542a6102e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Localisation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd204a1e71ff4eb89dfdb789ed7dd4af47a16df6838ca20d5698a8542a6102e1->leave($__internal_fd204a1e71ff4eb89dfdb789ed7dd4af47a16df6838ca20d5698a8542a6102e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_007f1afe79431babec00aa30a0ebd0b6b4c2a95d5bb2030afd30de522337607a = $this->env->getExtension("native_profiler");
        $__internal_007f1afe79431babec00aa30a0ebd0b6b4c2a95d5bb2030afd30de522337607a->enter($__internal_007f1afe79431babec00aa30a0ebd0b6b4c2a95d5bb2030afd30de522337607a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_007f1afe79431babec00aa30a0ebd0b6b4c2a95d5bb2030afd30de522337607a->leave($__internal_007f1afe79431babec00aa30a0ebd0b6b4c2a95d5bb2030afd30de522337607a_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_27d914d6fdce6ecdc584791c045eb0641fa60d8856543dd4c0d024c61bff606b = $this->env->getExtension("native_profiler");
        $__internal_27d914d6fdce6ecdc584791c045eb0641fa60d8856543dd4c0d024c61bff606b->enter($__internal_27d914d6fdce6ecdc584791c045eb0641fa60d8856543dd4c0d024c61bff606b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une localisation</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Localisation/form.html.twig");
        echo "

  <p>
    Modification d'une localisation déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_view", array("id" => $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la localisation
    </a>
  </p>

";
        
        $__internal_27d914d6fdce6ecdc584791c045eb0641fa60d8856543dd4c0d024c61bff606b->leave($__internal_27d914d6fdce6ecdc584791c045eb0641fa60d8856543dd4c0d024c61bff606b_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Localisation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Localisation/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une localisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une localisation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:Localisation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une localisation déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('localisation_view', {'id': localisation.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la localisation*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
