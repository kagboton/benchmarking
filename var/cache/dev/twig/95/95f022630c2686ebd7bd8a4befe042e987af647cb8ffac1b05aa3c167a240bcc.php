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
        $__internal_040f41881fe7919b0b47ca183addbd6b47f807c66814a00fd0ce6098811be5d6 = $this->env->getExtension("native_profiler");
        $__internal_040f41881fe7919b0b47ca183addbd6b47f807c66814a00fd0ce6098811be5d6->enter($__internal_040f41881fe7919b0b47ca183addbd6b47f807c66814a00fd0ce6098811be5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040f41881fe7919b0b47ca183addbd6b47f807c66814a00fd0ce6098811be5d6->leave($__internal_040f41881fe7919b0b47ca183addbd6b47f807c66814a00fd0ce6098811be5d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfe5e81e5e81db6b77738b87ff4331eb70ea703dc85896ceca55ca312c394b82 = $this->env->getExtension("native_profiler");
        $__internal_bfe5e81e5e81db6b77738b87ff4331eb70ea703dc85896ceca55ca312c394b82->enter($__internal_bfe5e81e5e81db6b77738b87ff4331eb70ea703dc85896ceca55ca312c394b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Retour Activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bfe5e81e5e81db6b77738b87ff4331eb70ea703dc85896ceca55ca312c394b82->leave($__internal_bfe5e81e5e81db6b77738b87ff4331eb70ea703dc85896ceca55ca312c394b82_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_23133d520520a9d285b8c1cbe3a425881673589b7e5f19f6ec196e5f7fd5c882 = $this->env->getExtension("native_profiler");
        $__internal_23133d520520a9d285b8c1cbe3a425881673589b7e5f19f6ec196e5f7fd5c882->enter($__internal_23133d520520a9d285b8c1cbe3a425881673589b7e5f19f6ec196e5f7fd5c882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
  <h2>Liste des retours d'activation</h2>

  <ul>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listRetoursActivation"]) ? $context["listRetoursActivation"] : $this->getContext($context, "listRetoursActivation")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["retourActivation"]) {
            // line 24
            echo "      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_view", array("id" => $this->getAttribute($context["retourActivation"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["retourActivation"], "nom", array()), "html", null, true);
            echo "
        </a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) de retour d'activation</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retourActivation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>

  <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("retourActivation_add");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon-chevron-left\"></i>
    Ajouter un retour d'activation
  </a>

";
        
        $__internal_23133d520520a9d285b8c1cbe3a425881673589b7e5f19f6ec196e5f7fd5c882->leave($__internal_23133d520520a9d285b8c1cbe3a425881673589b7e5f19f6ec196e5f7fd5c882_prof);

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
        return array (  117 => 34,  113 => 32,  106 => 30,  97 => 26,  93 => 25,  90 => 24,  85 => 23,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/*   <h2>Liste des retours d'activation</h2>*/
/* */
/*   <ul>*/
/* */
/*     {% for retourActivation in listRetoursActivation %}*/
/*       <li>*/
/*         <a href="{{ path('retourActivation_view', {'id': retourActivation.id}) }}">*/
/*           {{ retourActivation.nom }}*/
/*         </a>*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) de retour d'activation</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <a href="{{ path('retourActivation_add') }}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon-chevron-left"></i>*/
/*     Ajouter un retour d'activation*/
/*   </a>*/
/* */
/* {% endblock %}*/
/* */
