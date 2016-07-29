<?php

/* @Benchmarking/Default/TailleEcran/edit.html.twig */
class __TwigTemplate_2e92d4674b3de43d28e3a452c9f13493c642b048a033dbcb21765b3824c6f98a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TailleEcran/edit.html.twig", 3);
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
        $__internal_3e2530ec2ba94e6545502e5dd5d91e728999a8cfca95d397898336fa0e9e96db = $this->env->getExtension("native_profiler");
        $__internal_3e2530ec2ba94e6545502e5dd5d91e728999a8cfca95d397898336fa0e9e96db->enter($__internal_3e2530ec2ba94e6545502e5dd5d91e728999a8cfca95d397898336fa0e9e96db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2530ec2ba94e6545502e5dd5d91e728999a8cfca95d397898336fa0e9e96db->leave($__internal_3e2530ec2ba94e6545502e5dd5d91e728999a8cfca95d397898336fa0e9e96db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39d256827324088fac71081cfbfe4950893fa9f2f368ad63b03b9054b59dd392 = $this->env->getExtension("native_profiler");
        $__internal_39d256827324088fac71081cfbfe4950893fa9f2f368ad63b03b9054b59dd392->enter($__internal_39d256827324088fac71081cfbfe4950893fa9f2f368ad63b03b9054b59dd392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39d256827324088fac71081cfbfe4950893fa9f2f368ad63b03b9054b59dd392->leave($__internal_39d256827324088fac71081cfbfe4950893fa9f2f368ad63b03b9054b59dd392_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_b8a4ca6aafc6f576c8cde978ea294ebb182561230a603ec96ab15d787e62ae85 = $this->env->getExtension("native_profiler");
        $__internal_b8a4ca6aafc6f576c8cde978ea294ebb182561230a603ec96ab15d787e62ae85->enter($__internal_b8a4ca6aafc6f576c8cde978ea294ebb182561230a603ec96ab15d787e62ae85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une taille d'écran</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TailleEcran/form.html.twig");
        echo "

  <p>
    Modification d'une taille d'écran déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_view", array("id" => $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la taille d'écran
    </a>
  </p>

";
        
        $__internal_b8a4ca6aafc6f576c8cde978ea294ebb182561230a603ec96ab15d787e62ae85->leave($__internal_b8a4ca6aafc6f576c8cde978ea294ebb182561230a603ec96ab15d787e62ae85_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TailleEcran/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TailleEcran/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une taille d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une taille d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TailleEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une taille d'écran déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('tailleEcran_view', {'id': tailleEcran.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la taille d'écran*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
