<?php

/* @Benchmarking/Default/FormatEcran/view.html.twig */
class __TwigTemplate_b425acb238763b35c860a4084ca703a04f86a79951f91752da93847ac1259bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/FormatEcran/view.html.twig", 3);
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
        $__internal_bfd9281cdb16442643649322ab2e0a3a2010a94d45626f0229cbff7c5d0ddde3 = $this->env->getExtension("native_profiler");
        $__internal_bfd9281cdb16442643649322ab2e0a3a2010a94d45626f0229cbff7c5d0ddde3->enter($__internal_bfd9281cdb16442643649322ab2e0a3a2010a94d45626f0229cbff7c5d0ddde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FormatEcran/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfd9281cdb16442643649322ab2e0a3a2010a94d45626f0229cbff7c5d0ddde3->leave($__internal_bfd9281cdb16442643649322ab2e0a3a2010a94d45626f0229cbff7c5d0ddde3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0c7eaf64e0dd15831b7b0d0e6ca1e18b96f1ddd17f9d5c0da5fce594daa4b46 = $this->env->getExtension("native_profiler");
        $__internal_b0c7eaf64e0dd15831b7b0d0e6ca1e18b96f1ddd17f9d5c0da5fce594daa4b46->enter($__internal_b0c7eaf64e0dd15831b7b0d0e6ca1e18b96f1ddd17f9d5c0da5fce594daa4b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un Format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b0c7eaf64e0dd15831b7b0d0e6ca1e18b96f1ddd17f9d5c0da5fce594daa4b46->leave($__internal_b0c7eaf64e0dd15831b7b0d0e6ca1e18b96f1ddd17f9d5c0da5fce594daa4b46_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_ce8983747691cbda769496d6e4a7eac1e05bb554ad0508bd00d0368dae053dbd = $this->env->getExtension("native_profiler");
        $__internal_ce8983747691cbda769496d6e4a7eac1e05bb554ad0508bd00d0368dae053dbd->enter($__internal_ce8983747691cbda769496d6e4a7eac1e05bb554ad0508bd00d0368dae053dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_ce8983747691cbda769496d6e4a7eac1e05bb554ad0508bd00d0368dae053dbd->leave($__internal_ce8983747691cbda769496d6e4a7eac1e05bb554ad0508bd00d0368dae053dbd_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FormatEcran/view.html.twig";
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
