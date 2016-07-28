<?php

/* @Benchmarking/Default/ComposantAffichage/edit.html.twig */
class __TwigTemplate_20914f08a0d9cecc1adbe1defb335bf24f3c42be0c95a6637bfd6e52c1045416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/ComposantAffichage/edit.html.twig", 3);
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
        $__internal_8262f16a5354e1f1edcc18e5fc6fa1bdc0f3f4cac9b3dce5e05ce2733e6a3c1f = $this->env->getExtension("native_profiler");
        $__internal_8262f16a5354e1f1edcc18e5fc6fa1bdc0f3f4cac9b3dce5e05ce2733e6a3c1f->enter($__internal_8262f16a5354e1f1edcc18e5fc6fa1bdc0f3f4cac9b3dce5e05ce2733e6a3c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/ComposantAffichage/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8262f16a5354e1f1edcc18e5fc6fa1bdc0f3f4cac9b3dce5e05ce2733e6a3c1f->leave($__internal_8262f16a5354e1f1edcc18e5fc6fa1bdc0f3f4cac9b3dce5e05ce2733e6a3c1f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c470d7d32359d04ac3099db8f015b007d3bcb1d99f60aa0c6f58033b83413d6c = $this->env->getExtension("native_profiler");
        $__internal_c470d7d32359d04ac3099db8f015b007d3bcb1d99f60aa0c6f58033b83413d6c->enter($__internal_c470d7d32359d04ac3099db8f015b007d3bcb1d99f60aa0c6f58033b83413d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c470d7d32359d04ac3099db8f015b007d3bcb1d99f60aa0c6f58033b83413d6c->leave($__internal_c470d7d32359d04ac3099db8f015b007d3bcb1d99f60aa0c6f58033b83413d6c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_ec3a6c235374a601292f7936a24835585a252e282b51584e1b61aaca2ee36397 = $this->env->getExtension("native_profiler");
        $__internal_ec3a6c235374a601292f7936a24835585a252e282b51584e1b61aaca2ee36397->enter($__internal_ec3a6c235374a601292f7936a24835585a252e282b51584e1b61aaca2ee36397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un composant d'affichage</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:ComposantAffichage/form.html.twig");
        echo "

  <p>
    Modification d'un composant d'affichage déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_view", array("id" => $this->getAttribute((isset($context["composantAffichag"]) ? $context["composantAffichag"] : $this->getContext($context, "composantAffichag")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au composant
    </a>
  </p>

";
        
        $__internal_ec3a6c235374a601292f7936a24835585a252e282b51584e1b61aaca2ee36397->leave($__internal_ec3a6c235374a601292f7936a24835585a252e282b51584e1b61aaca2ee36397_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/ComposantAffichage/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/ComposantAffichage/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un composant d'affichage - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un composant d'affichage</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:ComposantAffichage/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un composant d'affichage déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('composantAffichage_view', {'id': composantAffichag.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au composant*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
