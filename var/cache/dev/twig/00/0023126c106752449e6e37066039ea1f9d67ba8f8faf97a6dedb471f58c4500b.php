<?php

/* BenchmarkingBundle:Default/Segment:edit.html.twig */
class __TwigTemplate_9f0c8d83632afaa5e8cc3b469f0d357117523336fe6de930e6b1eb76aa85032b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Segment:edit.html.twig", 3);
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
        $__internal_ac53743128795eb458eaff18d05f14801db6449ca79322ca7258bd8d91a970cc = $this->env->getExtension("native_profiler");
        $__internal_ac53743128795eb458eaff18d05f14801db6449ca79322ca7258bd8d91a970cc->enter($__internal_ac53743128795eb458eaff18d05f14801db6449ca79322ca7258bd8d91a970cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Segment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac53743128795eb458eaff18d05f14801db6449ca79322ca7258bd8d91a970cc->leave($__internal_ac53743128795eb458eaff18d05f14801db6449ca79322ca7258bd8d91a970cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a22843c849e9df7248f4a0df44a2fdeee8b38684d339d60b395ad9ea16518fe1 = $this->env->getExtension("native_profiler");
        $__internal_a22843c849e9df7248f4a0df44a2fdeee8b38684d339d60b395ad9ea16518fe1->enter($__internal_a22843c849e9df7248f4a0df44a2fdeee8b38684d339d60b395ad9ea16518fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a22843c849e9df7248f4a0df44a2fdeee8b38684d339d60b395ad9ea16518fe1->leave($__internal_a22843c849e9df7248f4a0df44a2fdeee8b38684d339d60b395ad9ea16518fe1_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_1645e6c0b35d04586ccbebabe17989f20b8f1087c44ad1f6a3d983685b315835 = $this->env->getExtension("native_profiler");
        $__internal_1645e6c0b35d04586ccbebabe17989f20b8f1087c44ad1f6a3d983685b315835->enter($__internal_1645e6c0b35d04586ccbebabe17989f20b8f1087c44ad1f6a3d983685b315835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_1645e6c0b35d04586ccbebabe17989f20b8f1087c44ad1f6a3d983685b315835->leave($__internal_1645e6c0b35d04586ccbebabe17989f20b8f1087c44ad1f6a3d983685b315835_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Segment:edit.html.twig";
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
