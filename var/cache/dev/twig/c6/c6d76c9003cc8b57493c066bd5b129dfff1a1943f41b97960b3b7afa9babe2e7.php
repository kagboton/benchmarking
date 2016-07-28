<?php

/* BenchmarkingBundle:Default:TypeRetourActivation/view.html.twig */
class __TwigTemplate_4d89e3b7de2da89ccf171adbc7fbf6ecd90a3ce5e9385df2dcac42f5dcdde4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default:TypeRetourActivation/view.html.twig", 3);
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
        $__internal_c4cea75602c6fe5f638e1f19dac2553fe330bb439c937c05394c236a1319e4e2 = $this->env->getExtension("native_profiler");
        $__internal_c4cea75602c6fe5f638e1f19dac2553fe330bb439c937c05394c236a1319e4e2->enter($__internal_c4cea75602c6fe5f638e1f19dac2553fe330bb439c937c05394c236a1319e4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:TypeRetourActivation/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4cea75602c6fe5f638e1f19dac2553fe330bb439c937c05394c236a1319e4e2->leave($__internal_c4cea75602c6fe5f638e1f19dac2553fe330bb439c937c05394c236a1319e4e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c93c3de5fee12d30406fb69d833ba1110451f015fbc9d74cf41294b3b63a6b7 = $this->env->getExtension("native_profiler");
        $__internal_4c93c3de5fee12d30406fb69d833ba1110451f015fbc9d74cf41294b3b63a6b7->enter($__internal_4c93c3de5fee12d30406fb69d833ba1110451f015fbc9d74cf41294b3b63a6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c93c3de5fee12d30406fb69d833ba1110451f015fbc9d74cf41294b3b63a6b7->leave($__internal_4c93c3de5fee12d30406fb69d833ba1110451f015fbc9d74cf41294b3b63a6b7_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_554a771c4d06c23a87e48395d1b510017dd8fc8dd9047abe948c3c0f020108f3 = $this->env->getExtension("native_profiler");
        $__internal_554a771c4d06c23a87e48395d1b510017dd8fc8dd9047abe948c3c0f020108f3->enter($__internal_554a771c4d06c23a87e48395d1b510017dd8fc8dd9047abe948c3c0f020108f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "nom", array()), "html", null, true);
        echo "</h2>



    <p>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("retoursActivation");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_edit", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier le retour d'activation
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_delete", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer le retour d'activation
        </a>
    </p>


";
        
        $__internal_554a771c4d06c23a87e48395d1b510017dd8fc8dd9047abe948c3c0f020108f3->leave($__internal_554a771c4d06c23a87e48395d1b510017dd8fc8dd9047abe948c3c0f020108f3_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default:TypeRetourActivation/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  96 => 28,  89 => 24,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeRetourActivation/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*   <h2>{{ retourActivation.nom }}</h2>*/
/* */
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('retoursActivation') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('retourActivation_edit', {'id': retourActivation.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier le retour d'activation*/
/*         </a>*/
/*         <a href="{{ path('retourActivation_delete', {'id': retourActivation.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer le retour d'activation*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
