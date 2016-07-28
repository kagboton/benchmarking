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
        $__internal_b1e9da6ca9dda5e1379cd63192c814031aceb1f18a67dd591ad88134903f42d0 = $this->env->getExtension("native_profiler");
        $__internal_b1e9da6ca9dda5e1379cd63192c814031aceb1f18a67dd591ad88134903f42d0->enter($__internal_b1e9da6ca9dda5e1379cd63192c814031aceb1f18a67dd591ad88134903f42d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e9da6ca9dda5e1379cd63192c814031aceb1f18a67dd591ad88134903f42d0->leave($__internal_b1e9da6ca9dda5e1379cd63192c814031aceb1f18a67dd591ad88134903f42d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ea4dc2a937fd13126193c016a1ed73b0535f8abbca11b311c3ed039aaf1b68 = $this->env->getExtension("native_profiler");
        $__internal_d8ea4dc2a937fd13126193c016a1ed73b0535f8abbca11b311c3ed039aaf1b68->enter($__internal_d8ea4dc2a937fd13126193c016a1ed73b0535f8abbca11b311c3ed039aaf1b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une commande - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d8ea4dc2a937fd13126193c016a1ed73b0535f8abbca11b311c3ed039aaf1b68->leave($__internal_d8ea4dc2a937fd13126193c016a1ed73b0535f8abbca11b311c3ed039aaf1b68_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_9b46d0ef6a88a97291b77aeefb610f0088d81134de00f945ac6e4c77670ddedf = $this->env->getExtension("native_profiler");
        $__internal_9b46d0ef6a88a97291b77aeefb610f0088d81134de00f945ac6e4c77670ddedf->enter($__internal_9b46d0ef6a88a97291b77aeefb610f0088d81134de00f945ac6e4c77670ddedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_9b46d0ef6a88a97291b77aeefb610f0088d81134de00f945ac6e4c77670ddedf->leave($__internal_9b46d0ef6a88a97291b77aeefb610f0088d81134de00f945ac6e4c77670ddedf_prof);

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
