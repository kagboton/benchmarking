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
        $__internal_ceff472d791e5206ebf51d0690248d42c1d016a0831bc673ff0eca35d086e433 = $this->env->getExtension("native_profiler");
        $__internal_ceff472d791e5206ebf51d0690248d42c1d016a0831bc673ff0eca35d086e433->enter($__internal_ceff472d791e5206ebf51d0690248d42c1d016a0831bc673ff0eca35d086e433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Motorisation:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceff472d791e5206ebf51d0690248d42c1d016a0831bc673ff0eca35d086e433->leave($__internal_ceff472d791e5206ebf51d0690248d42c1d016a0831bc673ff0eca35d086e433_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1de03bf6c73473f40b10791f3edf02a674cad999dbcf326653aa61cfab367355 = $this->env->getExtension("native_profiler");
        $__internal_1de03bf6c73473f40b10791f3edf02a674cad999dbcf326653aa61cfab367355->enter($__internal_1de03bf6c73473f40b10791f3edf02a674cad999dbcf326653aa61cfab367355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1de03bf6c73473f40b10791f3edf02a674cad999dbcf326653aa61cfab367355->leave($__internal_1de03bf6c73473f40b10791f3edf02a674cad999dbcf326653aa61cfab367355_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_b62a47dc505f15c0712696507b460640a9327b4db240dd28919d931b8336e0bb = $this->env->getExtension("native_profiler");
        $__internal_b62a47dc505f15c0712696507b460640a9327b4db240dd28919d931b8336e0bb->enter($__internal_b62a47dc505f15c0712696507b460640a9327b4db240dd28919d931b8336e0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_b62a47dc505f15c0712696507b460640a9327b4db240dd28919d931b8336e0bb->leave($__internal_b62a47dc505f15c0712696507b460640a9327b4db240dd28919d931b8336e0bb_prof);

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
