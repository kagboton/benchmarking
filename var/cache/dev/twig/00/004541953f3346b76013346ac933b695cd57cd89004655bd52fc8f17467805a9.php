<?php

/* BenchmarkingBundle:Default/TypeRetourActivation:edit.html.twig */
class __TwigTemplate_bff732919154ec6b61c1b26bd5c7614bd0fe5e56dcc19889c61817bbeffa246e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeRetourActivation:edit.html.twig", 3);
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
        $__internal_61a3889badcb77084bf51d00abba62ada8620c23d54f50e1c9ccc29b2f52e172 = $this->env->getExtension("native_profiler");
        $__internal_61a3889badcb77084bf51d00abba62ada8620c23d54f50e1c9ccc29b2f52e172->enter($__internal_61a3889badcb77084bf51d00abba62ada8620c23d54f50e1c9ccc29b2f52e172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeRetourActivation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61a3889badcb77084bf51d00abba62ada8620c23d54f50e1c9ccc29b2f52e172->leave($__internal_61a3889badcb77084bf51d00abba62ada8620c23d54f50e1c9ccc29b2f52e172_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d8aa7d469c9be94cbf4bf72c0c389c59fb44af94fdde16a4c6c823541973385 = $this->env->getExtension("native_profiler");
        $__internal_2d8aa7d469c9be94cbf4bf72c0c389c59fb44af94fdde16a4c6c823541973385->enter($__internal_2d8aa7d469c9be94cbf4bf72c0c389c59fb44af94fdde16a4c6c823541973385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2d8aa7d469c9be94cbf4bf72c0c389c59fb44af94fdde16a4c6c823541973385->leave($__internal_2d8aa7d469c9be94cbf4bf72c0c389c59fb44af94fdde16a4c6c823541973385_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_cb5f3d428c1673672ee46dd30c77e6c7621a09ce3a3dc6e047a4520e7a63711e = $this->env->getExtension("native_profiler");
        $__internal_cb5f3d428c1673672ee46dd30c77e6c7621a09ce3a3dc6e047a4520e7a63711e->enter($__internal_cb5f3d428c1673672ee46dd30c77e6c7621a09ce3a3dc6e047a4520e7a63711e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un retour d'activation</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig");
        echo "

  <p>
    Modification d'un retour d'activation existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_view", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au retour d'activation
    </a>
  </p>

";
        
        $__internal_cb5f3d428c1673672ee46dd30c77e6c7621a09ce3a3dc6e047a4520e7a63711e->leave($__internal_cb5f3d428c1673672ee46dd30c77e6c7621a09ce3a3dc6e047a4520e7a63711e_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeRetourActivation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeRetourActivation/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un retour d'activation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:TypeRetourActivation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un retour d'activation existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('retourActivation_view', {'id': retourActivation.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au retour d'activation*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
