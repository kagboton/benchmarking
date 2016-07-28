<?php

/* BenchmarkingBundle:Default/FormatEcran:add.html.twig */
class __TwigTemplate_eaecd75e1b0a81dd384f590719522bba97f2eec605e4566cb79ac56557799881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/FormatEcran:add.html.twig", 3);
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
        $__internal_273ed7581ddd4110bdecda3fce19d04d931c1317084325cec6f7b23e6e31dce4 = $this->env->getExtension("native_profiler");
        $__internal_273ed7581ddd4110bdecda3fce19d04d931c1317084325cec6f7b23e6e31dce4->enter($__internal_273ed7581ddd4110bdecda3fce19d04d931c1317084325cec6f7b23e6e31dce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FormatEcran:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_273ed7581ddd4110bdecda3fce19d04d931c1317084325cec6f7b23e6e31dce4->leave($__internal_273ed7581ddd4110bdecda3fce19d04d931c1317084325cec6f7b23e6e31dce4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_712a5c81f455e6a13582e58366a83ed6757ef2abdec9edebb6352500d91e557e = $this->env->getExtension("native_profiler");
        $__internal_712a5c81f455e6a13582e58366a83ed6757ef2abdec9edebb6352500d91e557e->enter($__internal_712a5c81f455e6a13582e58366a83ed6757ef2abdec9edebb6352500d91e557e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_712a5c81f455e6a13582e58366a83ed6757ef2abdec9edebb6352500d91e557e->leave($__internal_712a5c81f455e6a13582e58366a83ed6757ef2abdec9edebb6352500d91e557e_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_c6b609669f5da3cdcdc3501e52f9aeec4b27328194a2e89201b182b20f404945 = $this->env->getExtension("native_profiler");
        $__internal_c6b609669f5da3cdcdc3501e52f9aeec4b27328194a2e89201b182b20f404945->enter($__internal_c6b609669f5da3cdcdc3501e52f9aeec4b27328194a2e89201b182b20f404945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un format d'écran</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FormatEcran/form.html.twig");
        echo "

  <p>
    Ce format d'écran sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_c6b609669f5da3cdcdc3501e52f9aeec4b27328194a2e89201b182b20f404945->leave($__internal_c6b609669f5da3cdcdc3501e52f9aeec4b27328194a2e89201b182b20f404945_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FormatEcran:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/FormatEcran/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un format d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un format d'écran</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:FormatEcran/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Ce format d'écran sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
