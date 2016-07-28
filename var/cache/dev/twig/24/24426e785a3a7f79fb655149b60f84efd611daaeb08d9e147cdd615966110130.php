<?php

/* @Benchmarking/Default/FormatEcran/index.html.twig */
class __TwigTemplate_fcddb1eecab5b35860f1bb5b397724367c81317a40d7ce19e18351dabd1c7952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/FormatEcran/index.html.twig", 3);
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
        $__internal_d24e174332bd0b28bfa8cdd75c87c5d600cb44ff72725a481c96cb2e9671fdc2 = $this->env->getExtension("native_profiler");
        $__internal_d24e174332bd0b28bfa8cdd75c87c5d600cb44ff72725a481c96cb2e9671fdc2->enter($__internal_d24e174332bd0b28bfa8cdd75c87c5d600cb44ff72725a481c96cb2e9671fdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FormatEcran/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24e174332bd0b28bfa8cdd75c87c5d600cb44ff72725a481c96cb2e9671fdc2->leave($__internal_d24e174332bd0b28bfa8cdd75c87c5d600cb44ff72725a481c96cb2e9671fdc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_441c9f2fefa5d20a293da5a97f7d754bc3974121f2e9be614eef92e55d2fa393 = $this->env->getExtension("native_profiler");
        $__internal_441c9f2fefa5d20a293da5a97f7d754bc3974121f2e9be614eef92e55d2fa393->enter($__internal_441c9f2fefa5d20a293da5a97f7d754bc3974121f2e9be614eef92e55d2fa393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Format Ecran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_441c9f2fefa5d20a293da5a97f7d754bc3974121f2e9be614eef92e55d2fa393->leave($__internal_441c9f2fefa5d20a293da5a97f7d754bc3974121f2e9be614eef92e55d2fa393_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_88764a28ff613a94d5787c2d2719d948bffe0fcbc57efa63f312964abf9ce8f7 = $this->env->getExtension("native_profiler");
        $__internal_88764a28ff613a94d5787c2d2719d948bffe0fcbc57efa63f312964abf9ce8f7->enter($__internal_88764a28ff613a94d5787c2d2719d948bffe0fcbc57efa63f312964abf9ce8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des formats d'écrans</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listFormatsEcran"]) ? $context["listFormatsEcran"] : $this->getContext($context, "listFormatsEcran")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formatEcran"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formatEcran_view", array("id" => $this->getAttribute($context["formatEcran"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["formatEcran"], "Format", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de format d'écran</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formatEcran'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("formatEcran_add");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon-chevron-left\"></i>
    Ajouter un Format d'écran
  </a>


";
        
        $__internal_88764a28ff613a94d5787c2d2719d948bffe0fcbc57efa63f312964abf9ce8f7->leave($__internal_88764a28ff613a94d5787c2d2719d948bffe0fcbc57efa63f312964abf9ce8f7_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FormatEcran/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  113 => 32,  106 => 30,  97 => 26,  93 => 25,  90 => 24,  85 => 23,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FormatEcran/index.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Format Ecran - {{ parent() }}*/
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
/*   <h2>Liste des formats d'écrans</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for formatEcran in listFormatsEcran %}*/
/*       <li>*/
/*         <a href="{{ path('formatEcran_view', {'id': formatEcran.id}) }}">*/
/*           {{ formatEcran.Format }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de format d'écran</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <a href="{{ path('formatEcran_add') }}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon-chevron-left"></i>*/
/*     Ajouter un Format d'écran*/
/*   </a>*/
/* */
/* */
/* {% endblock %}*/
/* */
