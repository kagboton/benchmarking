<?php

/* @Benchmarking/Default/Segment/add.html.twig */
class __TwigTemplate_4756086c70b77b9463544fc2e4135ea0f2b26244c9e8828c0519c17ab767da0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Segment/add.html.twig", 3);
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
        $__internal_241b36ee4d6fb4801def70f084d6209d454cac5c8e3d5c579f184d9937b4f818 = $this->env->getExtension("native_profiler");
        $__internal_241b36ee4d6fb4801def70f084d6209d454cac5c8e3d5c579f184d9937b4f818->enter($__internal_241b36ee4d6fb4801def70f084d6209d454cac5c8e3d5c579f184d9937b4f818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Segment/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_241b36ee4d6fb4801def70f084d6209d454cac5c8e3d5c579f184d9937b4f818->leave($__internal_241b36ee4d6fb4801def70f084d6209d454cac5c8e3d5c579f184d9937b4f818_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e3e61694c05839ec5cf245f7c9ae18746f0437b155182f0e7d17fb72f89e9a8 = $this->env->getExtension("native_profiler");
        $__internal_1e3e61694c05839ec5cf245f7c9ae18746f0437b155182f0e7d17fb72f89e9a8->enter($__internal_1e3e61694c05839ec5cf245f7c9ae18746f0437b155182f0e7d17fb72f89e9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1e3e61694c05839ec5cf245f7c9ae18746f0437b155182f0e7d17fb72f89e9a8->leave($__internal_1e3e61694c05839ec5cf245f7c9ae18746f0437b155182f0e7d17fb72f89e9a8_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_5489b7c68dffe109678dbbf2b320c7b047b9ea3f243e3da240097bdecfaf544c = $this->env->getExtension("native_profiler");
        $__internal_5489b7c68dffe109678dbbf2b320c7b047b9ea3f243e3da240097bdecfaf544c->enter($__internal_5489b7c68dffe109678dbbf2b320c7b047b9ea3f243e3da240097bdecfaf544c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Ajouter un segment</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Segment/form.html.twig");
        echo "
  </div>



";
        
        $__internal_5489b7c68dffe109678dbbf2b320c7b047b9ea3f243e3da240097bdecfaf544c->leave($__internal_5489b7c68dffe109678dbbf2b320c7b047b9ea3f243e3da240097bdecfaf544c_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Segment/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Segment/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un segment - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Ajouter un segment</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Segment/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
