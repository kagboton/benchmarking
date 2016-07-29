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
        $__internal_1a153ed084ff9e5c3b8bb319d13f9a0b94b04f1f88c07dbb148d0a45d02fe874 = $this->env->getExtension("native_profiler");
        $__internal_1a153ed084ff9e5c3b8bb319d13f9a0b94b04f1f88c07dbb148d0a45d02fe874->enter($__internal_1a153ed084ff9e5c3b8bb319d13f9a0b94b04f1f88c07dbb148d0a45d02fe874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a153ed084ff9e5c3b8bb319d13f9a0b94b04f1f88c07dbb148d0a45d02fe874->leave($__internal_1a153ed084ff9e5c3b8bb319d13f9a0b94b04f1f88c07dbb148d0a45d02fe874_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae4aa4ac13f7bdfd3181a3b38b7a1e28ebdef661b927607c0ba7268c01757b9b = $this->env->getExtension("native_profiler");
        $__internal_ae4aa4ac13f7bdfd3181a3b38b7a1e28ebdef661b927607c0ba7268c01757b9b->enter($__internal_ae4aa4ac13f7bdfd3181a3b38b7a1e28ebdef661b927607c0ba7268c01757b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ae4aa4ac13f7bdfd3181a3b38b7a1e28ebdef661b927607c0ba7268c01757b9b->leave($__internal_ae4aa4ac13f7bdfd3181a3b38b7a1e28ebdef661b927607c0ba7268c01757b9b_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_7e71bb605c7144004541ec0bf6e16c7203bfd5031abdefbf11038427576ba16e = $this->env->getExtension("native_profiler");
        $__internal_7e71bb605c7144004541ec0bf6e16c7203bfd5031abdefbf11038427576ba16e->enter($__internal_7e71bb605c7144004541ec0bf6e16c7203bfd5031abdefbf11038427576ba16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_7e71bb605c7144004541ec0bf6e16c7203bfd5031abdefbf11038427576ba16e->leave($__internal_7e71bb605c7144004541ec0bf6e16c7203bfd5031abdefbf11038427576ba16e_prof);

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
