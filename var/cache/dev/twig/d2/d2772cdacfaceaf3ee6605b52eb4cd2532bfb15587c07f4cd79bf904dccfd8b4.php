<?php

/* @Benchmarking/Default/Famille/edit.html.twig */
class __TwigTemplate_586e3eaa37bf33a2f2c1c56721c3d91b9c0f737a2fe4313fc50bdc667fc90ec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Famille/edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_031629433a7438d44d208c872ac32655b92b172f3d52c358735cf2ef753312a2 = $this->env->getExtension("native_profiler");
        $__internal_031629433a7438d44d208c872ac32655b92b172f3d52c358735cf2ef753312a2->enter($__internal_031629433a7438d44d208c872ac32655b92b172f3d52c358735cf2ef753312a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Famille/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031629433a7438d44d208c872ac32655b92b172f3d52c358735cf2ef753312a2->leave($__internal_031629433a7438d44d208c872ac32655b92b172f3d52c358735cf2ef753312a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_582791e319ccaabde80972c67040cca523de1166e8f2a84be10c6a13d8504286 = $this->env->getExtension("native_profiler");
        $__internal_582791e319ccaabde80972c67040cca523de1166e8f2a84be10c6a13d8504286->enter($__internal_582791e319ccaabde80972c67040cca523de1166e8f2a84be10c6a13d8504286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_582791e319ccaabde80972c67040cca523de1166e8f2a84be10c6a13d8504286->leave($__internal_582791e319ccaabde80972c67040cca523de1166e8f2a84be10c6a13d8504286_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_8c482ada6205be3ed5af5532079d95bb180020688967eb16b49e2826e6b94b77 = $this->env->getExtension("native_profiler");
        $__internal_8c482ada6205be3ed5af5532079d95bb180020688967eb16b49e2826e6b94b77->enter($__internal_8c482ada6205be3ed5af5532079d95bb180020688967eb16b49e2826e6b94b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "  <div class=\"panel-heading\">
    <h4>Modifier une famille de fonctions</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 15
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Famille/form.html.twig");
        echo "


    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_view", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la famille
      </a>
    </p>
  </div>

";
        
        $__internal_8c482ada6205be3ed5af5532079d95bb180020688967eb16b49e2826e6b94b77->leave($__internal_8c482ada6205be3ed5af5532079d95bb180020688967eb16b49e2826e6b94b77_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Famille/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  64 => 15,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Famille/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une famille - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/*   <div class="panel-heading">*/
/*     <h4>Modifier une famille de fonctions</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Famille/form.html.twig") }}*/
/* */
/* */
/*     <p>*/
/*       <a href="{{ path('famille_view', {'id': famille.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la famille*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
