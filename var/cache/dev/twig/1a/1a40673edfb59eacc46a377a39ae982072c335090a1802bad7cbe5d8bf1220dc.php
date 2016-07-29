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
        $__internal_fac4eaca52e78493ebe6b61a3ed82bd6bbb1deb5ef4870c7aa801b309760d404 = $this->env->getExtension("native_profiler");
        $__internal_fac4eaca52e78493ebe6b61a3ed82bd6bbb1deb5ef4870c7aa801b309760d404->enter($__internal_fac4eaca52e78493ebe6b61a3ed82bd6bbb1deb5ef4870c7aa801b309760d404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FonctionExistante:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac4eaca52e78493ebe6b61a3ed82bd6bbb1deb5ef4870c7aa801b309760d404->leave($__internal_fac4eaca52e78493ebe6b61a3ed82bd6bbb1deb5ef4870c7aa801b309760d404_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81f9acbfe8245e2e37d422a251b4bfecc4796d5ca14ec2f9cce8399cdfa3f570 = $this->env->getExtension("native_profiler");
        $__internal_81f9acbfe8245e2e37d422a251b4bfecc4796d5ca14ec2f9cce8399cdfa3f570->enter($__internal_81f9acbfe8245e2e37d422a251b4bfecc4796d5ca14ec2f9cce8399cdfa3f570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_81f9acbfe8245e2e37d422a251b4bfecc4796d5ca14ec2f9cce8399cdfa3f570->leave($__internal_81f9acbfe8245e2e37d422a251b4bfecc4796d5ca14ec2f9cce8399cdfa3f570_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_3fef7fef9703a4a40cc2ef377f67d3b3c5cec815d54f789fc5ed04d8c8fca82c = $this->env->getExtension("native_profiler");
        $__internal_3fef7fef9703a4a40cc2ef377f67d3b3c5cec815d54f789fc5ed04d8c8fca82c->enter($__internal_3fef7fef9703a4a40cc2ef377f67d3b3c5cec815d54f789fc5ed04d8c8fca82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_3fef7fef9703a4a40cc2ef377f67d3b3c5cec815d54f789fc5ed04d8c8fca82c->leave($__internal_3fef7fef9703a4a40cc2ef377f67d3b3c5cec815d54f789fc5ed04d8c8fca82c_prof);

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
