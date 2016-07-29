<?php

/* BenchmarkingBundle:Default/CommandePhysique:edit.html.twig */
class __TwigTemplate_eb9981513ef17bf48d37f90ca11c56ece075fa8e390a5459f883e4a0e774fdfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/CommandePhysique:edit.html.twig", 3);
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
        $__internal_75c5a1fe0af6d994b33984429cb031da2dea51e29802a2566abd50d39442bd93 = $this->env->getExtension("native_profiler");
        $__internal_75c5a1fe0af6d994b33984429cb031da2dea51e29802a2566abd50d39442bd93->enter($__internal_75c5a1fe0af6d994b33984429cb031da2dea51e29802a2566abd50d39442bd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75c5a1fe0af6d994b33984429cb031da2dea51e29802a2566abd50d39442bd93->leave($__internal_75c5a1fe0af6d994b33984429cb031da2dea51e29802a2566abd50d39442bd93_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_573555991b3d32817b6784ebfeaed13c95bbe51c6d6551b672d8d4741136a23f = $this->env->getExtension("native_profiler");
        $__internal_573555991b3d32817b6784ebfeaed13c95bbe51c6d6551b672d8d4741136a23f->enter($__internal_573555991b3d32817b6784ebfeaed13c95bbe51c6d6551b672d8d4741136a23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une commande - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_573555991b3d32817b6784ebfeaed13c95bbe51c6d6551b672d8d4741136a23f->leave($__internal_573555991b3d32817b6784ebfeaed13c95bbe51c6d6551b672d8d4741136a23f_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_122e3a48652ce2df5500e23cd4b7979e837e1a48c2588892e2567b318828f7f7 = $this->env->getExtension("native_profiler");
        $__internal_122e3a48652ce2df5500e23cd4b7979e837e1a48c2588892e2567b318828f7f7->enter($__internal_122e3a48652ce2df5500e23cd4b7979e837e1a48c2588892e2567b318828f7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_122e3a48652ce2df5500e23cd4b7979e837e1a48c2588892e2567b318828f7f7->leave($__internal_122e3a48652ce2df5500e23cd4b7979e837e1a48c2588892e2567b318828f7f7_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/CommandePhysique:edit.html.twig";
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
