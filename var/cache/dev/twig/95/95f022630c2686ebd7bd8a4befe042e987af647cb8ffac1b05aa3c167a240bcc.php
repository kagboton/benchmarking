<?php

/* @Benchmarking/Default/TypeRetourActivation/index.html.twig */
class __TwigTemplate_433f4e975e82c7c7cb339f7e634a733ae8dfa6829a235e5dece50f585bceb6bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeRetourActivation/index.html.twig", 3);
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
        $__internal_767043cd635bb9cbdf1fcded3f117b48500c8c1a37a1d1125d5013bfd51b59ff = $this->env->getExtension("native_profiler");
        $__internal_767043cd635bb9cbdf1fcded3f117b48500c8c1a37a1d1125d5013bfd51b59ff->enter($__internal_767043cd635bb9cbdf1fcded3f117b48500c8c1a37a1d1125d5013bfd51b59ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767043cd635bb9cbdf1fcded3f117b48500c8c1a37a1d1125d5013bfd51b59ff->leave($__internal_767043cd635bb9cbdf1fcded3f117b48500c8c1a37a1d1125d5013bfd51b59ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92b1bc1dde3ebdf2a663e41d8dee39781da405062a7cf272070a60445dc38040 = $this->env->getExtension("native_profiler");
        $__internal_92b1bc1dde3ebdf2a663e41d8dee39781da405062a7cf272070a60445dc38040->enter($__internal_92b1bc1dde3ebdf2a663e41d8dee39781da405062a7cf272070a60445dc38040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Retour Activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_92b1bc1dde3ebdf2a663e41d8dee39781da405062a7cf272070a60445dc38040->leave($__internal_92b1bc1dde3ebdf2a663e41d8dee39781da405062a7cf272070a60445dc38040_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5cfa93be71e1b1a7208b374db323bd9f86488bf1fdf65556a8800b8dd4f7de81 = $this->env->getExtension("native_profiler");
        $__internal_5cfa93be71e1b1a7208b374db323bd9f86488bf1fdf65556a8800b8dd4f7de81->enter($__internal_5cfa93be71e1b1a7208b374db323bd9f86488bf1fdf65556a8800b8dd4f7de81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_5cfa93be71e1b1a7208b374db323bd9f86488bf1fdf65556a8800b8dd4f7de81->leave($__internal_5cfa93be71e1b1a7208b374db323bd9f86488bf1fdf65556a8800b8dd4f7de81_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeRetourActivation/index.html.twig";
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
