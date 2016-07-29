<?php

/* @Benchmarking/Default/TypeTdB/edit.html.twig */
class __TwigTemplate_dc7c09b7f80c3431928cae8b1708c85b1903c99050d73db09ef76c44f7428498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeTdB/edit.html.twig", 3);
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
        $__internal_0d0c3bda9c4ed3314e43c767a871b9b6c70f31c3dea2424a9d2b285cb2c9205b = $this->env->getExtension("native_profiler");
        $__internal_0d0c3bda9c4ed3314e43c767a871b9b6c70f31c3dea2424a9d2b285cb2c9205b->enter($__internal_0d0c3bda9c4ed3314e43c767a871b9b6c70f31c3dea2424a9d2b285cb2c9205b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeTdB/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d0c3bda9c4ed3314e43c767a871b9b6c70f31c3dea2424a9d2b285cb2c9205b->leave($__internal_0d0c3bda9c4ed3314e43c767a871b9b6c70f31c3dea2424a9d2b285cb2c9205b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd3763925da0a43bc528ebfcb1853233c0b68ea4c8a7212e60a0d6a282b3ab53 = $this->env->getExtension("native_profiler");
        $__internal_cd3763925da0a43bc528ebfcb1853233c0b68ea4c8a7212e60a0d6a282b3ab53->enter($__internal_cd3763925da0a43bc528ebfcb1853233c0b68ea4c8a7212e60a0d6a282b3ab53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cd3763925da0a43bc528ebfcb1853233c0b68ea4c8a7212e60a0d6a282b3ab53->leave($__internal_cd3763925da0a43bc528ebfcb1853233c0b68ea4c8a7212e60a0d6a282b3ab53_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_c25051d73fbea33aa58b3bb333b7f7cfe1716dd302d8deecdb47e9e7d63dd1af = $this->env->getExtension("native_profiler");
        $__internal_c25051d73fbea33aa58b3bb333b7f7cfe1716dd302d8deecdb47e9e7d63dd1af->enter($__internal_c25051d73fbea33aa58b3bb333b7f7cfe1716dd302d8deecdb47e9e7d63dd1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un type de tableau de bord</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeTdB/form.html.twig");
        echo "

  <p>
    Modification d'un type de tableau de bord déjà existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_view", array("id" => $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au type de tableau de bord
    </a>
  </p>

";
        
        $__internal_c25051d73fbea33aa58b3bb333b7f7cfe1716dd302d8deecdb47e9e7d63dd1af->leave($__internal_c25051d73fbea33aa58b3bb333b7f7cfe1716dd302d8deecdb47e9e7d63dd1af_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeTdB/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeTdB/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un type de tableau de bord - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un type de tableau de bord</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeTdB/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un type de tableau de bord déjà existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('typeTdB_view', {'id': typeTdB.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au type de tableau de bord*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
