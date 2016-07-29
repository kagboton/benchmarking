<?php

/* @Benchmarking/Default/Segment/edit.html.twig */
class __TwigTemplate_662ced28862206145566e46ba4e91d0a12e918e70be9e01d15e9c5044643d938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Segment/edit.html.twig", 3);
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
        $__internal_d92c8dbff5bac13f01607351df907b84d264fa46cb0e8f51deaa53fdfb0f6a38 = $this->env->getExtension("native_profiler");
        $__internal_d92c8dbff5bac13f01607351df907b84d264fa46cb0e8f51deaa53fdfb0f6a38->enter($__internal_d92c8dbff5bac13f01607351df907b84d264fa46cb0e8f51deaa53fdfb0f6a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Segment/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92c8dbff5bac13f01607351df907b84d264fa46cb0e8f51deaa53fdfb0f6a38->leave($__internal_d92c8dbff5bac13f01607351df907b84d264fa46cb0e8f51deaa53fdfb0f6a38_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e2c41608cd17996cf7ec6674e7bbddf4c0acf3c82713c5b9fa4bd16ada97e1c = $this->env->getExtension("native_profiler");
        $__internal_5e2c41608cd17996cf7ec6674e7bbddf4c0acf3c82713c5b9fa4bd16ada97e1c->enter($__internal_5e2c41608cd17996cf7ec6674e7bbddf4c0acf3c82713c5b9fa4bd16ada97e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5e2c41608cd17996cf7ec6674e7bbddf4c0acf3c82713c5b9fa4bd16ada97e1c->leave($__internal_5e2c41608cd17996cf7ec6674e7bbddf4c0acf3c82713c5b9fa4bd16ada97e1c_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_5e99636ca29f6580f9ce2ef7aa6d55d3d672a91319d7ea6ec0632597e9fbfa30 = $this->env->getExtension("native_profiler");
        $__internal_5e99636ca29f6580f9ce2ef7aa6d55d3d672a91319d7ea6ec0632597e9fbfa30->enter($__internal_5e99636ca29f6580f9ce2ef7aa6d55d3d672a91319d7ea6ec0632597e9fbfa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier un segment</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Segment/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("segment_view", array("id" => $this->getAttribute((isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour au segment
      </a>
    </p>
  </div>


";
        
        $__internal_5e99636ca29f6580f9ce2ef7aa6d55d3d672a91319d7ea6ec0632597e9fbfa30->leave($__internal_5e99636ca29f6580f9ce2ef7aa6d55d3d672a91319d7ea6ec0632597e9fbfa30_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Segment/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Segment/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un segment - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier un segment</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Segment/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('segment_view', {'id': segment.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour au segment*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
