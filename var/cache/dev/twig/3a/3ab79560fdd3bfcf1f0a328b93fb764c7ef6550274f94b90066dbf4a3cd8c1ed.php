<?php

/* BenchmarkingBundle:Default/Famille:edit.html.twig */
class __TwigTemplate_0b1499094e70f018d3f702732c9a0066bd9c5c86e8fad43a92b34ffebf626390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Famille:edit.html.twig", 3);
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
        $__internal_26cc3cf6e88dc0fb8f1a9809952c17c789f3181a69c1e89c19397db0e4d1ecf2 = $this->env->getExtension("native_profiler");
        $__internal_26cc3cf6e88dc0fb8f1a9809952c17c789f3181a69c1e89c19397db0e4d1ecf2->enter($__internal_26cc3cf6e88dc0fb8f1a9809952c17c789f3181a69c1e89c19397db0e4d1ecf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Famille:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26cc3cf6e88dc0fb8f1a9809952c17c789f3181a69c1e89c19397db0e4d1ecf2->leave($__internal_26cc3cf6e88dc0fb8f1a9809952c17c789f3181a69c1e89c19397db0e4d1ecf2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d008b722298aa4853b1b565cad800c57197a2ee4806b15442b365660eabf5943 = $this->env->getExtension("native_profiler");
        $__internal_d008b722298aa4853b1b565cad800c57197a2ee4806b15442b365660eabf5943->enter($__internal_d008b722298aa4853b1b565cad800c57197a2ee4806b15442b365660eabf5943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d008b722298aa4853b1b565cad800c57197a2ee4806b15442b365660eabf5943->leave($__internal_d008b722298aa4853b1b565cad800c57197a2ee4806b15442b365660eabf5943_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_4b5ad652e69efa5b0b68d964138c607623caebd56c0ed3b122db3c5d03c0f73b = $this->env->getExtension("native_profiler");
        $__internal_4b5ad652e69efa5b0b68d964138c607623caebd56c0ed3b122db3c5d03c0f73b->enter($__internal_4b5ad652e69efa5b0b68d964138c607623caebd56c0ed3b122db3c5d03c0f73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_4b5ad652e69efa5b0b68d964138c607623caebd56c0ed3b122db3c5d03c0f73b->leave($__internal_4b5ad652e69efa5b0b68d964138c607623caebd56c0ed3b122db3c5d03c0f73b_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Famille:edit.html.twig";
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
