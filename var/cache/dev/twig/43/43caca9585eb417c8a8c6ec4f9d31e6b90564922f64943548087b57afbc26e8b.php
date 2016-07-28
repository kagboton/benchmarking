<?php

/* BenchmarkingBundle:Default/FonctionExistante:add.html.twig */
class __TwigTemplate_0b858aa42113c4505daf4b6744bda6d2ee7c38cb3c512b41f05c0f42870c0c7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/FonctionExistante:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f7c1e318c18b8f84f0e83290a93b969878810246d4eaa511c72b67e184c05aa = $this->env->getExtension("native_profiler");
        $__internal_7f7c1e318c18b8f84f0e83290a93b969878810246d4eaa511c72b67e184c05aa->enter($__internal_7f7c1e318c18b8f84f0e83290a93b969878810246d4eaa511c72b67e184c05aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FonctionExistante:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f7c1e318c18b8f84f0e83290a93b969878810246d4eaa511c72b67e184c05aa->leave($__internal_7f7c1e318c18b8f84f0e83290a93b969878810246d4eaa511c72b67e184c05aa_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c791a6b55ed1786e401ffe12ed40f79d1f260d94b3e6882d96e6e9d9395f095 = $this->env->getExtension("native_profiler");
        $__internal_3c791a6b55ed1786e401ffe12ed40f79d1f260d94b3e6882d96e6e9d9395f095->enter($__internal_3c791a6b55ed1786e401ffe12ed40f79d1f260d94b3e6882d96e6e9d9395f095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3c791a6b55ed1786e401ffe12ed40f79d1f260d94b3e6882d96e6e9d9395f095->leave($__internal_3c791a6b55ed1786e401ffe12ed40f79d1f260d94b3e6882d96e6e9d9395f095_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_3cb55bafdbcf43460ad568e161819d7e90c038a451607e6ff186c86011a147a8 = $this->env->getExtension("native_profiler");
        $__internal_3cb55bafdbcf43460ad568e161819d7e90c038a451607e6ff186c86011a147a8->enter($__internal_3cb55bafdbcf43460ad568e161819d7e90c038a451607e6ff186c86011a147a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h2 class=\"panel-title\">Ajouter une fonction</h2>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FonctionExistante/form.html.twig");
        echo "
  </div>


";
        
        $__internal_3cb55bafdbcf43460ad568e161819d7e90c038a451607e6ff186c86011a147a8->leave($__internal_3cb55bafdbcf43460ad568e161819d7e90c038a451607e6ff186c86011a147a8_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FonctionExistante:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/FonctionExistante/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une fonction - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h2 class="panel-title">Ajouter une fonction</h2>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:FonctionExistante/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
