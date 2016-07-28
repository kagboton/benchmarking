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
        $__internal_ec3e21271bfad0ca9b137c43a98146c8779ccc3f363e0fe9dec90d47de796b71 = $this->env->getExtension("native_profiler");
        $__internal_ec3e21271bfad0ca9b137c43a98146c8779ccc3f363e0fe9dec90d47de796b71->enter($__internal_ec3e21271bfad0ca9b137c43a98146c8779ccc3f363e0fe9dec90d47de796b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Segment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3e21271bfad0ca9b137c43a98146c8779ccc3f363e0fe9dec90d47de796b71->leave($__internal_ec3e21271bfad0ca9b137c43a98146c8779ccc3f363e0fe9dec90d47de796b71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c031c9ac53b6706a3ae2bd890da504ac14c72873be61395c43899b2d76f8491 = $this->env->getExtension("native_profiler");
        $__internal_0c031c9ac53b6706a3ae2bd890da504ac14c72873be61395c43899b2d76f8491->enter($__internal_0c031c9ac53b6706a3ae2bd890da504ac14c72873be61395c43899b2d76f8491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c031c9ac53b6706a3ae2bd890da504ac14c72873be61395c43899b2d76f8491->leave($__internal_0c031c9ac53b6706a3ae2bd890da504ac14c72873be61395c43899b2d76f8491_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_813fd87d49bc8173f92bd8ef765210e8d96bad21c99de92fe5b370f507d11ae9 = $this->env->getExtension("native_profiler");
        $__internal_813fd87d49bc8173f92bd8ef765210e8d96bad21c99de92fe5b370f507d11ae9->enter($__internal_813fd87d49bc8173f92bd8ef765210e8d96bad21c99de92fe5b370f507d11ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_813fd87d49bc8173f92bd8ef765210e8d96bad21c99de92fe5b370f507d11ae9->leave($__internal_813fd87d49bc8173f92bd8ef765210e8d96bad21c99de92fe5b370f507d11ae9_prof);

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
