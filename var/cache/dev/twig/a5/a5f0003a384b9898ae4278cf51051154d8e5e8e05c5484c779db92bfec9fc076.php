<?php

/* @Benchmarking/Default/CommandePhysique/edit.html.twig */
class __TwigTemplate_f8bf6c5d50be73fc1f5c49f60e4cea3aaba7ce19d62e50ee1b49f326c5e02b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/CommandePhysique/edit.html.twig", 3);
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
        $__internal_afa06e1ec08e883e2f87c9f446eacfea27243e4a4ba5c9c4bccc491649d3a7b0 = $this->env->getExtension("native_profiler");
        $__internal_afa06e1ec08e883e2f87c9f446eacfea27243e4a4ba5c9c4bccc491649d3a7b0->enter($__internal_afa06e1ec08e883e2f87c9f446eacfea27243e4a4ba5c9c4bccc491649d3a7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa06e1ec08e883e2f87c9f446eacfea27243e4a4ba5c9c4bccc491649d3a7b0->leave($__internal_afa06e1ec08e883e2f87c9f446eacfea27243e4a4ba5c9c4bccc491649d3a7b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb4d5b488b7a010da71a105db22c9b9ef8e9023c98656b620f633ae1bda55ea6 = $this->env->getExtension("native_profiler");
        $__internal_bb4d5b488b7a010da71a105db22c9b9ef8e9023c98656b620f633ae1bda55ea6->enter($__internal_bb4d5b488b7a010da71a105db22c9b9ef8e9023c98656b620f633ae1bda55ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une commande - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bb4d5b488b7a010da71a105db22c9b9ef8e9023c98656b620f633ae1bda55ea6->leave($__internal_bb4d5b488b7a010da71a105db22c9b9ef8e9023c98656b620f633ae1bda55ea6_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_27f9f51fac0436a568149285edbabfae6dcdea52b15e42648f2b0b3a4995c71c = $this->env->getExtension("native_profiler");
        $__internal_27f9f51fac0436a568149285edbabfae6dcdea52b15e42648f2b0b3a4995c71c->enter($__internal_27f9f51fac0436a568149285edbabfae6dcdea52b15e42648f2b0b3a4995c71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une commande physique</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:CommandePhysique/form.html.twig");
        echo "

  <p>
    Modification d'une commande physique déjà existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_view", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la commande
    </a>
  </p>

";
        
        $__internal_27f9f51fac0436a568149285edbabfae6dcdea52b15e42648f2b0b3a4995c71c->leave($__internal_27f9f51fac0436a568149285edbabfae6dcdea52b15e42648f2b0b3a4995c71c_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/CommandePhysique/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/CommandePhysique/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une commande - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une commande physique</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:CommandePhysique/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une commande physique déjà existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('commandePhysique_view', {'id': commandePhysique.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la commande*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
