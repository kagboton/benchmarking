<?php

/* @Benchmarking/Default/Motorisation/edit.html.twig */
class __TwigTemplate_72a45cf44b765867e93a5ae1d8fef10ea260393b247df55fee2dd92e9111d259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Motorisation/edit.html.twig", 3);
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
        $__internal_1d5b625a465637fc30bd53149c218647f64aa182da572cc86ff93f0aff96c173 = $this->env->getExtension("native_profiler");
        $__internal_1d5b625a465637fc30bd53149c218647f64aa182da572cc86ff93f0aff96c173->enter($__internal_1d5b625a465637fc30bd53149c218647f64aa182da572cc86ff93f0aff96c173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Motorisation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5b625a465637fc30bd53149c218647f64aa182da572cc86ff93f0aff96c173->leave($__internal_1d5b625a465637fc30bd53149c218647f64aa182da572cc86ff93f0aff96c173_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22f28a567487050f781020c5208bb2d54b7b96597b7ddb81caba576822874701 = $this->env->getExtension("native_profiler");
        $__internal_22f28a567487050f781020c5208bb2d54b7b96597b7ddb81caba576822874701->enter($__internal_22f28a567487050f781020c5208bb2d54b7b96597b7ddb81caba576822874701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_22f28a567487050f781020c5208bb2d54b7b96597b7ddb81caba576822874701->leave($__internal_22f28a567487050f781020c5208bb2d54b7b96597b7ddb81caba576822874701_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_6e19291314c496183bdd83f039ab4fab6fffcc0118f6b392316becaee459fd74 = $this->env->getExtension("native_profiler");
        $__internal_6e19291314c496183bdd83f039ab4fab6fffcc0118f6b392316becaee459fd74->enter($__internal_6e19291314c496183bdd83f039ab4fab6fffcc0118f6b392316becaee459fd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une motorisation</h4>
  </div>


  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Motorisation/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motorisation_view", array("id" => $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la motorisation
      </a>
    </p>
  </div>

";
        
        $__internal_6e19291314c496183bdd83f039ab4fab6fffcc0118f6b392316becaee459fd74->leave($__internal_6e19291314c496183bdd83f039ab4fab6fffcc0118f6b392316becaee459fd74_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Motorisation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Motorisation/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une motorisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une motorisation</h4>*/
/*   </div>*/
/* */
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Motorisation/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('motorisation_view', {'id': motorisation.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la motorisation*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
