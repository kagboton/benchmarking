<?php

/* BenchmarkingBundle:Default/FonctionExistante:edit.html.twig */
class __TwigTemplate_51eae6737252441c54e6e663aeaa0691b5daf8fd82f72ee488b802f887bb8745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/FonctionExistante:edit.html.twig", 3);
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
        $__internal_abbe48ae49a1b782a392bd686fc404434ce0a9b34e913ac610d137cebe856af6 = $this->env->getExtension("native_profiler");
        $__internal_abbe48ae49a1b782a392bd686fc404434ce0a9b34e913ac610d137cebe856af6->enter($__internal_abbe48ae49a1b782a392bd686fc404434ce0a9b34e913ac610d137cebe856af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FonctionExistante:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abbe48ae49a1b782a392bd686fc404434ce0a9b34e913ac610d137cebe856af6->leave($__internal_abbe48ae49a1b782a392bd686fc404434ce0a9b34e913ac610d137cebe856af6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_811b0c59e91a4c603d726cccc3d296863e88cae635105445966827e1a432475d = $this->env->getExtension("native_profiler");
        $__internal_811b0c59e91a4c603d726cccc3d296863e88cae635105445966827e1a432475d->enter($__internal_811b0c59e91a4c603d726cccc3d296863e88cae635105445966827e1a432475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_811b0c59e91a4c603d726cccc3d296863e88cae635105445966827e1a432475d->leave($__internal_811b0c59e91a4c603d726cccc3d296863e88cae635105445966827e1a432475d_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_933cd2a944c5773caae6c68e77273f2fd239cc6e7d857827f2c3b7f8c113ffc0 = $this->env->getExtension("native_profiler");
        $__internal_933cd2a944c5773caae6c68e77273f2fd239cc6e7d857827f2c3b7f8c113ffc0->enter($__internal_933cd2a944c5773caae6c68e77273f2fd239cc6e7d857827f2c3b7f8c113ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une fonction</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:FonctionExistante/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_view", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la fonction
      </a>
    </p>
  </div>


";
        
        $__internal_933cd2a944c5773caae6c68e77273f2fd239cc6e7d857827f2c3b7f8c113ffc0->leave($__internal_933cd2a944c5773caae6c68e77273f2fd239cc6e7d857827f2c3b7f8c113ffc0_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FonctionExistante:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 16,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FonctionExistante/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une fonction - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une fonction</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:FonctionExistante/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('fonction_view', {'id': fonction.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la fonction*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
