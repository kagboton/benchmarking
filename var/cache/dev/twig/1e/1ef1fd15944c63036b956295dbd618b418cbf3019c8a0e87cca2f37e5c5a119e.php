<?php

/* BenchmarkingBundle:Default/Motorisation:add.html.twig */
class __TwigTemplate_f49262b5da880b4d5097b268ed95b5d04ed663f516c73843d7e102af511fe105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Motorisation:add.html.twig", 3);
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
        $__internal_9de50cd4db20bd8f7d0aaddbe2991ff5c094f97465fd0bea8d55ec0feeb380a7 = $this->env->getExtension("native_profiler");
        $__internal_9de50cd4db20bd8f7d0aaddbe2991ff5c094f97465fd0bea8d55ec0feeb380a7->enter($__internal_9de50cd4db20bd8f7d0aaddbe2991ff5c094f97465fd0bea8d55ec0feeb380a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Motorisation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de50cd4db20bd8f7d0aaddbe2991ff5c094f97465fd0bea8d55ec0feeb380a7->leave($__internal_9de50cd4db20bd8f7d0aaddbe2991ff5c094f97465fd0bea8d55ec0feeb380a7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_828acdb38e2a62da315d29b11d58f3cb4d6e43e483f9099435bd95aca326957b = $this->env->getExtension("native_profiler");
        $__internal_828acdb38e2a62da315d29b11d58f3cb4d6e43e483f9099435bd95aca326957b->enter($__internal_828acdb38e2a62da315d29b11d58f3cb4d6e43e483f9099435bd95aca326957b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_828acdb38e2a62da315d29b11d58f3cb4d6e43e483f9099435bd95aca326957b->leave($__internal_828acdb38e2a62da315d29b11d58f3cb4d6e43e483f9099435bd95aca326957b_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_6c9302f835fc12e294b151837c2cf6748c20caca42b21e9db493319d80d6ff6a = $this->env->getExtension("native_profiler");
        $__internal_6c9302f835fc12e294b151837c2cf6748c20caca42b21e9db493319d80d6ff6a->enter($__internal_6c9302f835fc12e294b151837c2cf6748c20caca42b21e9db493319d80d6ff6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-headin\">
    <h4 class=\"panel-title\">Ajouter une motorisation</h4>
  </div>

  <div class=\"pane-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Motorisation/form.html.twig");
        echo "
  </div>


";
        
        $__internal_6c9302f835fc12e294b151837c2cf6748c20caca42b21e9db493319d80d6ff6a->leave($__internal_6c9302f835fc12e294b151837c2cf6748c20caca42b21e9db493319d80d6ff6a_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Motorisation:add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Motorisation/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une motorisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-headin">*/
/*     <h4 class="panel-title">Ajouter une motorisation</h4>*/
/*   </div>*/
/* */
/*   <div class="pane-body">*/
/*     {{ include("BenchmarkingBundle:Default:Motorisation/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
