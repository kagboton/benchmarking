<?php

/* BenchmarkingBundle:Default/ComposantAffichage:edit.html.twig */
class __TwigTemplate_dd8608dd2e25256e83fe4309e1ff505648ea74c8f525e412fea45ef5fb1b36f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/ComposantAffichage:edit.html.twig", 3);
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
        $__internal_7b5e38d1cc333dbd09e32b18f8579ef175de5f8c125cbca1833fac919af9737c = $this->env->getExtension("native_profiler");
        $__internal_7b5e38d1cc333dbd09e32b18f8579ef175de5f8c125cbca1833fac919af9737c->enter($__internal_7b5e38d1cc333dbd09e32b18f8579ef175de5f8c125cbca1833fac919af9737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5e38d1cc333dbd09e32b18f8579ef175de5f8c125cbca1833fac919af9737c->leave($__internal_7b5e38d1cc333dbd09e32b18f8579ef175de5f8c125cbca1833fac919af9737c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_baa1fdb88bac136114dda85b7e04eb743b47d17254e1d25a83a376bebc5f6c1b = $this->env->getExtension("native_profiler");
        $__internal_baa1fdb88bac136114dda85b7e04eb743b47d17254e1d25a83a376bebc5f6c1b->enter($__internal_baa1fdb88bac136114dda85b7e04eb743b47d17254e1d25a83a376bebc5f6c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_baa1fdb88bac136114dda85b7e04eb743b47d17254e1d25a83a376bebc5f6c1b->leave($__internal_baa1fdb88bac136114dda85b7e04eb743b47d17254e1d25a83a376bebc5f6c1b_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_827e8fd65e6963d30bb664944e49b5f930af1b8c94f419513ce4f1c83ca27443 = $this->env->getExtension("native_profiler");
        $__internal_827e8fd65e6963d30bb664944e49b5f930af1b8c94f419513ce4f1c83ca27443->enter($__internal_827e8fd65e6963d30bb664944e49b5f930af1b8c94f419513ce4f1c83ca27443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_827e8fd65e6963d30bb664944e49b5f930af1b8c94f419513ce4f1c83ca27443->leave($__internal_827e8fd65e6963d30bb664944e49b5f930af1b8c94f419513ce4f1c83ca27443_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/ComposantAffichage:edit.html.twig";
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
