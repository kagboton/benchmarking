<?php

/* BenchmarkingBundle:Default/FormatEcran:view.html.twig */
class __TwigTemplate_b762c2cab938f8150ad087ad9cec5d1598b0513b0e03f3c61751caff1da3207d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/FormatEcran:view.html.twig", 3);
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
        $__internal_b968704ea767fffe5f4adfcbf472088dbe468716eb4b33726daa86e6fddedf1b = $this->env->getExtension("native_profiler");
        $__internal_b968704ea767fffe5f4adfcbf472088dbe468716eb4b33726daa86e6fddedf1b->enter($__internal_b968704ea767fffe5f4adfcbf472088dbe468716eb4b33726daa86e6fddedf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FormatEcran:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b968704ea767fffe5f4adfcbf472088dbe468716eb4b33726daa86e6fddedf1b->leave($__internal_b968704ea767fffe5f4adfcbf472088dbe468716eb4b33726daa86e6fddedf1b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9240f334d8e54d9e9dc5c2180a3040b865e7dafc341d8849d8e6fafbd39292b = $this->env->getExtension("native_profiler");
        $__internal_d9240f334d8e54d9e9dc5c2180a3040b865e7dafc341d8849d8e6fafbd39292b->enter($__internal_d9240f334d8e54d9e9dc5c2180a3040b865e7dafc341d8849d8e6fafbd39292b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un Format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d9240f334d8e54d9e9dc5c2180a3040b865e7dafc341d8849d8e6fafbd39292b->leave($__internal_d9240f334d8e54d9e9dc5c2180a3040b865e7dafc341d8849d8e6fafbd39292b_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_2c60c9c669b6c37cb027c67ce08ea26bf8dca9ce6c8836d29f928b98d9f2c7e8 = $this->env->getExtension("native_profiler");
        $__internal_2c60c9c669b6c37cb027c67ce08ea26bf8dca9ce6c8836d29f928b98d9f2c7e8->enter($__internal_2c60c9c669b6c37cb027c67ce08ea26bf8dca9ce6c8836d29f928b98d9f2c7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formatEcran"]) ? $context["formatEcran"] : $this->getContext($context, "formatEcran")), "Format", array()), "html", null, true);
        echo "</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("formatsEcran");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formatEcran_edit", array("id" => $this->getAttribute((isset($context["formatEcran"]) ? $context["formatEcran"] : $this->getContext($context, "formatEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier le Format d'écran
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formatEcran_delete", array("id" => $this->getAttribute((isset($context["formatEcran"]) ? $context["formatEcran"] : $this->getContext($context, "formatEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer le Format d'écran
        </a>
    </p>


";
        
        $__internal_2c60c9c669b6c37cb027c67ce08ea26bf8dca9ce6c8836d29f928b98d9f2c7e8->leave($__internal_2c60c9c669b6c37cb027c67ce08ea26bf8dca9ce6c8836d29f928b98d9f2c7e8_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FormatEcran:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  95 => 27,  88 => 23,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FormatEcran/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un Format d'écran - {{ parent() }}*/
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
/*   <h2>{{ formatEcran.Format }}</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('formatsEcran') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('formatEcran_edit', {'id': formatEcran.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier le Format d'écran*/
/*         </a>*/
/*         <a href="{{ path('formatEcran_delete', {'id': formatEcran.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer le Format d'écran*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
