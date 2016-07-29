<?php

/* BenchmarkingBundle:Default/FormatEcran:index.html.twig */
class __TwigTemplate_e392a94b1176af7c621372ff7897cd718b40e6aa80113e56ace5dc532a614bf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/FormatEcran:index.html.twig", 3);
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
        $__internal_2857334e59fe58cd2e332a62fda98122d02c2b53ebb47338fbb2c55867082818 = $this->env->getExtension("native_profiler");
        $__internal_2857334e59fe58cd2e332a62fda98122d02c2b53ebb47338fbb2c55867082818->enter($__internal_2857334e59fe58cd2e332a62fda98122d02c2b53ebb47338fbb2c55867082818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FormatEcran:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2857334e59fe58cd2e332a62fda98122d02c2b53ebb47338fbb2c55867082818->leave($__internal_2857334e59fe58cd2e332a62fda98122d02c2b53ebb47338fbb2c55867082818_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_829d8ef7aae3400c9b3dbf4155b6f438cf3c5d6ca94a8ba880c674af285d1195 = $this->env->getExtension("native_profiler");
        $__internal_829d8ef7aae3400c9b3dbf4155b6f438cf3c5d6ca94a8ba880c674af285d1195->enter($__internal_829d8ef7aae3400c9b3dbf4155b6f438cf3c5d6ca94a8ba880c674af285d1195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Format Ecran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_829d8ef7aae3400c9b3dbf4155b6f438cf3c5d6ca94a8ba880c674af285d1195->leave($__internal_829d8ef7aae3400c9b3dbf4155b6f438cf3c5d6ca94a8ba880c674af285d1195_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_98c063e9f1c49576b2b325a6c63bc6833beadcb621eac5bc12c859f13fa420cd = $this->env->getExtension("native_profiler");
        $__internal_98c063e9f1c49576b2b325a6c63bc6833beadcb621eac5bc12c859f13fa420cd->enter($__internal_98c063e9f1c49576b2b325a6c63bc6833beadcb621eac5bc12c859f13fa420cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_98c063e9f1c49576b2b325a6c63bc6833beadcb621eac5bc12c859f13fa420cd->leave($__internal_98c063e9f1c49576b2b325a6c63bc6833beadcb621eac5bc12c859f13fa420cd_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FormatEcran:index.html.twig";
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
