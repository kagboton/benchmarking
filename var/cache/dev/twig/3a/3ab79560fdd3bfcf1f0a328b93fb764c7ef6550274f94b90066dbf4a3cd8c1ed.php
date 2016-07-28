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
        $__internal_5932ac3ec0633c87b3771b87831ecd55261d60482038db4f221c8defb38b02a9 = $this->env->getExtension("native_profiler");
        $__internal_5932ac3ec0633c87b3771b87831ecd55261d60482038db4f221c8defb38b02a9->enter($__internal_5932ac3ec0633c87b3771b87831ecd55261d60482038db4f221c8defb38b02a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Famille:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5932ac3ec0633c87b3771b87831ecd55261d60482038db4f221c8defb38b02a9->leave($__internal_5932ac3ec0633c87b3771b87831ecd55261d60482038db4f221c8defb38b02a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b317a22278813a9a43d2069e4f6e015d5909530985b92f939ef4f7c1aa8ac42 = $this->env->getExtension("native_profiler");
        $__internal_0b317a22278813a9a43d2069e4f6e015d5909530985b92f939ef4f7c1aa8ac42->enter($__internal_0b317a22278813a9a43d2069e4f6e015d5909530985b92f939ef4f7c1aa8ac42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0b317a22278813a9a43d2069e4f6e015d5909530985b92f939ef4f7c1aa8ac42->leave($__internal_0b317a22278813a9a43d2069e4f6e015d5909530985b92f939ef4f7c1aa8ac42_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_f94dc50a103bd7fcf9f31de203c5fea9591f151b931aed37af77a8560da7b752 = $this->env->getExtension("native_profiler");
        $__internal_f94dc50a103bd7fcf9f31de203c5fea9591f151b931aed37af77a8560da7b752->enter($__internal_f94dc50a103bd7fcf9f31de203c5fea9591f151b931aed37af77a8560da7b752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_f94dc50a103bd7fcf9f31de203c5fea9591f151b931aed37af77a8560da7b752->leave($__internal_f94dc50a103bd7fcf9f31de203c5fea9591f151b931aed37af77a8560da7b752_prof);

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
