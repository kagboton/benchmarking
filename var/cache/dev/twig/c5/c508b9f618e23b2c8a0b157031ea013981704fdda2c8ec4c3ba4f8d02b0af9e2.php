<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:edit.html.twig */
class __TwigTemplate_2acb496440b20bb737b10f1cecc50f34fdad2e72fc39c14e345b10624e445240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TechnologieAfficheur:edit.html.twig", 3);
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
        $__internal_d32e9f12016fa89078e6003c9da28dea17e080492ffe5751ca67bc428d9370c3 = $this->env->getExtension("native_profiler");
        $__internal_d32e9f12016fa89078e6003c9da28dea17e080492ffe5751ca67bc428d9370c3->enter($__internal_d32e9f12016fa89078e6003c9da28dea17e080492ffe5751ca67bc428d9370c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32e9f12016fa89078e6003c9da28dea17e080492ffe5751ca67bc428d9370c3->leave($__internal_d32e9f12016fa89078e6003c9da28dea17e080492ffe5751ca67bc428d9370c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aa121428abb98c2fb6e8da02aa6208084e6ebdcaa4a35cadd49a6698fe19e2b = $this->env->getExtension("native_profiler");
        $__internal_3aa121428abb98c2fb6e8da02aa6208084e6ebdcaa4a35cadd49a6698fe19e2b->enter($__internal_3aa121428abb98c2fb6e8da02aa6208084e6ebdcaa4a35cadd49a6698fe19e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3aa121428abb98c2fb6e8da02aa6208084e6ebdcaa4a35cadd49a6698fe19e2b->leave($__internal_3aa121428abb98c2fb6e8da02aa6208084e6ebdcaa4a35cadd49a6698fe19e2b_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_4441a1c9734b958ceb23288b4da08deb0eb9efabef3b1a131bc85c47f9b70f81 = $this->env->getExtension("native_profiler");
        $__internal_4441a1c9734b958ceb23288b4da08deb0eb9efabef3b1a131bc85c47f9b70f81->enter($__internal_4441a1c9734b958ceb23288b4da08deb0eb9efabef3b1a131bc85c47f9b70f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier une technologie afficheur</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TechnologieAfficheur/form.html.twig");
        echo "

  <p>
    Modification d'une technologie afficheur déjà existante.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_view", array("id" => $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la technologie afficheur
    </a>
  </p>

";
        
        $__internal_4441a1c9734b958ceb23288b4da08deb0eb9efabef3b1a131bc85c47f9b70f81->leave($__internal_4441a1c9734b958ceb23288b4da08deb0eb9efabef3b1a131bc85c47f9b70f81_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TechnologieAfficheur/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier une technologie afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TechnologieAfficheur/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'une technologie afficheur déjà existante.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('technologieAfficheur_view', {'id': technologieAfficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la technologie afficheur*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
