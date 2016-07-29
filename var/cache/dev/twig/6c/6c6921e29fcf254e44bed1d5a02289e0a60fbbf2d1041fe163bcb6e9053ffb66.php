<?php

/* @Benchmarking/Default/BoiteVitesse/edit.html.twig */
class __TwigTemplate_b100e076d9c507b349088634f15051e7ed1c30cb8e7fd0e1759b9245273d5593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/BoiteVitesse/edit.html.twig", 3);
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
        $__internal_9d6a1518c90c2f30df432c116c8eb52a7017494ad5cac0b92912d29c73c3de67 = $this->env->getExtension("native_profiler");
        $__internal_9d6a1518c90c2f30df432c116c8eb52a7017494ad5cac0b92912d29c73c3de67->enter($__internal_9d6a1518c90c2f30df432c116c8eb52a7017494ad5cac0b92912d29c73c3de67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6a1518c90c2f30df432c116c8eb52a7017494ad5cac0b92912d29c73c3de67->leave($__internal_9d6a1518c90c2f30df432c116c8eb52a7017494ad5cac0b92912d29c73c3de67_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06ba415ceb6450f9ff31393d89627a7e45d621f77231e330271fac42b5bec65c = $this->env->getExtension("native_profiler");
        $__internal_06ba415ceb6450f9ff31393d89627a7e45d621f77231e330271fac42b5bec65c->enter($__internal_06ba415ceb6450f9ff31393d89627a7e45d621f77231e330271fac42b5bec65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_06ba415ceb6450f9ff31393d89627a7e45d621f77231e330271fac42b5bec65c->leave($__internal_06ba415ceb6450f9ff31393d89627a7e45d621f77231e330271fac42b5bec65c_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_f78522b85cf5810150bea7d8c330ac3aa50efdc2769d226d381684d90907077d = $this->env->getExtension("native_profiler");
        $__internal_f78522b85cf5810150bea7d8c330ac3aa50efdc2769d226d381684d90907077d->enter($__internal_f78522b85cf5810150bea7d8c330ac3aa50efdc2769d226d381684d90907077d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Modifier une boîte à vitesse</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:BoiteVitesse/form.html.twig");
        echo "

    <p>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_view", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la boîte à vitesse
      </a>
    </p>
  </div>

";
        
        $__internal_f78522b85cf5810150bea7d8c330ac3aa50efdc2769d226d381684d90907077d->leave($__internal_f78522b85cf5810150bea7d8c330ac3aa50efdc2769d226d381684d90907077d_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/BoiteVitesse/edit.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/BoiteVitesse/edit.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Modifier une boîte à vitesse</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:BoiteVitesse/form.html.twig") }}*/
/* */
/*     <p>*/
/*       <a href="{{ path('boiteVitesse_view', {'id': boiteVitesse.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la boîte à vitesse*/
/*       </a>*/
/*     </p>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
