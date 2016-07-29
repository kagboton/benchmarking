<?php

/* @Benchmarking/Default/Marque/edit.html.twig */
class __TwigTemplate_96f17329d39f5afea7420f662fde9e10a27e433d1e6ccf69c6e5f1e52587dd0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBunlde::layout.html.twig", "@Benchmarking/Default/Marque/edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBunlde::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf075f84aafb512bccecd1d58a0282144c0f5f9d33df66b817700abff7fc4189 = $this->env->getExtension("native_profiler");
        $__internal_cf075f84aafb512bccecd1d58a0282144c0f5f9d33df66b817700abff7fc4189->enter($__internal_cf075f84aafb512bccecd1d58a0282144c0f5f9d33df66b817700abff7fc4189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Marque/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf075f84aafb512bccecd1d58a0282144c0f5f9d33df66b817700abff7fc4189->leave($__internal_cf075f84aafb512bccecd1d58a0282144c0f5f9d33df66b817700abff7fc4189_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64a3bd513e31a08ad5fbc6d1e0088d91f3289f78591beca660df7ec5abec98dd = $this->env->getExtension("native_profiler");
        $__internal_64a3bd513e31a08ad5fbc6d1e0088d91f3289f78591beca660df7ec5abec98dd->enter($__internal_64a3bd513e31a08ad5fbc6d1e0088d91f3289f78591beca660df7ec5abec98dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_64a3bd513e31a08ad5fbc6d1e0088d91f3289f78591beca660df7ec5abec98dd->leave($__internal_64a3bd513e31a08ad5fbc6d1e0088d91f3289f78591beca660df7ec5abec98dd_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_91b111a097126341c4a22baf0f28304a0fa7d54ab22267c43733a4387a40d6ef = $this->env->getExtension("native_profiler");
        $__internal_91b111a097126341c4a22baf0f28304a0fa7d54ab22267c43733a4387a40d6ef->enter($__internal_91b111a097126341c4a22baf0f28304a0fa7d54ab22267c43733a4387a40d6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une marque</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Marque/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_view", array("id" => $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la marque
      </a>
    </p>
  </div>

";
        
        $__internal_91b111a097126341c4a22baf0f28304a0fa7d54ab22267c43733a4387a40d6ef->leave($__internal_91b111a097126341c4a22baf0f28304a0fa7d54ab22267c43733a4387a40d6ef_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Marque/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Marque/edit.html.twig #}*/
/* */
/* {% extends "AdminBunlde::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une marque - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une marque</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Marque/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('marque_view', {'id': marque.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la marque*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
