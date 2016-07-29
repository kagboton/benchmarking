<?php

/* BenchmarkingBundle:Default/TypeRetourActivation:index.html.twig */
class __TwigTemplate_d0e29063689f75aa39f4523d237108c1d98e6604e7b541326ac3be412e982f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeRetourActivation:index.html.twig", 3);
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
        $__internal_6fe2e87e0f1dfdaaad499234dfe6d1bbd403fa9eb541f9e9ec56dfbe53cc7174 = $this->env->getExtension("native_profiler");
        $__internal_6fe2e87e0f1dfdaaad499234dfe6d1bbd403fa9eb541f9e9ec56dfbe53cc7174->enter($__internal_6fe2e87e0f1dfdaaad499234dfe6d1bbd403fa9eb541f9e9ec56dfbe53cc7174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeRetourActivation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fe2e87e0f1dfdaaad499234dfe6d1bbd403fa9eb541f9e9ec56dfbe53cc7174->leave($__internal_6fe2e87e0f1dfdaaad499234dfe6d1bbd403fa9eb541f9e9ec56dfbe53cc7174_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48fbc95928ede0dd949b7220382b2deba221a00f93b1ed1e8d29322a46953a83 = $this->env->getExtension("native_profiler");
        $__internal_48fbc95928ede0dd949b7220382b2deba221a00f93b1ed1e8d29322a46953a83->enter($__internal_48fbc95928ede0dd949b7220382b2deba221a00f93b1ed1e8d29322a46953a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Retour Activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_48fbc95928ede0dd949b7220382b2deba221a00f93b1ed1e8d29322a46953a83->leave($__internal_48fbc95928ede0dd949b7220382b2deba221a00f93b1ed1e8d29322a46953a83_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_be07977e912d6a97a7c9d4a17a5398516d3296d2107c85da343e520a9582bb0e = $this->env->getExtension("native_profiler");
        $__internal_be07977e912d6a97a7c9d4a17a5398516d3296d2107c85da343e520a9582bb0e->enter($__internal_be07977e912d6a97a7c9d4a17a5398516d3296d2107c85da343e520a9582bb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "
    <p class=\"alert alert-info\">
      ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </p>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Liste des retours d'activation</h4>

  </div>

  <div class=\"panel-body\">
    <ul>

      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listRetoursActivation"]) ? $context["listRetoursActivation"] : $this->getContext($context, "listRetoursActivation")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["retourActivation"]) {
            // line 28
            echo "        <li>
          <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_view", array("id" => $this->getAttribute($context["retourActivation"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["retourActivation"], "nom", array()), "html", null, true);
            echo "
          </a>
        </li>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        <li>Pas (encore !) de retour d'activation</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retourActivation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </ul>

    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("retourActivation_add");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-plus\"></i>
      Ajouter un retour d'activation
    </a>
  </div>


";
        
        $__internal_be07977e912d6a97a7c9d4a17a5398516d3296d2107c85da343e520a9582bb0e->leave($__internal_be07977e912d6a97a7c9d4a17a5398516d3296d2107c85da343e520a9582bb0e_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeRetourActivation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  117 => 36,  110 => 34,  101 => 30,  97 => 29,  94 => 28,  89 => 27,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeRetourActivation/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Retour Activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/* */
/*   {% endfor %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Liste des retours d'activation</h4>*/
/* */
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <ul>*/
/* */
/*       {% for retourActivation in listRetoursActivation %}*/
/*         <li>*/
/*           <a href="{{ path('retourActivation_view', {'id': retourActivation.id}) }}">*/
/*             {{ retourActivation.nom }}*/
/*           </a>*/
/*         </li>*/
/*       {% else %}*/
/*         <li>Pas (encore !) de retour d'activation</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/* */
/*     <a href="{{ path('retourActivation_add') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-plus"></i>*/
/*       Ajouter un retour d'activation*/
/*     </a>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
