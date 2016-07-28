<?php

/* BenchmarkingBundle:Default/Localisation:add.html.twig */
class __TwigTemplate_4c1c9235909450fb2cf8d6f14031df3cba3be9b42d1f3836dce7e3cd79f6327a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/Localisation:add.html.twig", 3);
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
        $__internal_683f4f9bd653036733f136fddcdc612d5aa602ed918b570424081e32a9e6285a = $this->env->getExtension("native_profiler");
        $__internal_683f4f9bd653036733f136fddcdc612d5aa602ed918b570424081e32a9e6285a->enter($__internal_683f4f9bd653036733f136fddcdc612d5aa602ed918b570424081e32a9e6285a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Localisation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_683f4f9bd653036733f136fddcdc612d5aa602ed918b570424081e32a9e6285a->leave($__internal_683f4f9bd653036733f136fddcdc612d5aa602ed918b570424081e32a9e6285a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_45e62327d76a1cd3d636d3804dba5feefbe5e31e1e3df265ec16ef399562d53e = $this->env->getExtension("native_profiler");
        $__internal_45e62327d76a1cd3d636d3804dba5feefbe5e31e1e3df265ec16ef399562d53e->enter($__internal_45e62327d76a1cd3d636d3804dba5feefbe5e31e1e3df265ec16ef399562d53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_45e62327d76a1cd3d636d3804dba5feefbe5e31e1e3df265ec16ef399562d53e->leave($__internal_45e62327d76a1cd3d636d3804dba5feefbe5e31e1e3df265ec16ef399562d53e_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5a616b730f00d470096fc174d24cff647283b3dfce6252c0f81ea8affb780840 = $this->env->getExtension("native_profiler");
        $__internal_5a616b730f00d470096fc174d24cff647283b3dfce6252c0f81ea8affb780840->enter($__internal_5a616b730f00d470096fc174d24cff647283b3dfce6252c0f81ea8affb780840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter une localisation</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Localisation/form.html.twig");
        echo "

  <p>
    Cette localisation sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_5a616b730f00d470096fc174d24cff647283b3dfce6252c0f81ea8affb780840->leave($__internal_5a616b730f00d470096fc174d24cff647283b3dfce6252c0f81ea8affb780840_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Localisation:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/Localisation/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une localisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter une localisation</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:Localisation/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cette localisation sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
