<?php

/* BenchmarkingBundle:Default/BoiteVitesse:edit.html.twig */
class __TwigTemplate_6945216ed3ee52f04920212eabc98c18a8862b3fd22b8be68ac484688bbab652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/BoiteVitesse:edit.html.twig", 3);
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
        $__internal_3a39c9164d0e63411fb0c98e8c023f18beb8212b23b6d2409d986a94cf07f28f = $this->env->getExtension("native_profiler");
        $__internal_3a39c9164d0e63411fb0c98e8c023f18beb8212b23b6d2409d986a94cf07f28f->enter($__internal_3a39c9164d0e63411fb0c98e8c023f18beb8212b23b6d2409d986a94cf07f28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a39c9164d0e63411fb0c98e8c023f18beb8212b23b6d2409d986a94cf07f28f->leave($__internal_3a39c9164d0e63411fb0c98e8c023f18beb8212b23b6d2409d986a94cf07f28f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a55fa455bbdb8ff4bfbecd4519e4d580b90030fa3b01566f130497dc652a86d6 = $this->env->getExtension("native_profiler");
        $__internal_a55fa455bbdb8ff4bfbecd4519e4d580b90030fa3b01566f130497dc652a86d6->enter($__internal_a55fa455bbdb8ff4bfbecd4519e4d580b90030fa3b01566f130497dc652a86d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a55fa455bbdb8ff4bfbecd4519e4d580b90030fa3b01566f130497dc652a86d6->leave($__internal_a55fa455bbdb8ff4bfbecd4519e4d580b90030fa3b01566f130497dc652a86d6_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_9a44ac0caa9f9fc16655f19346c749f3ccb7e77e62e4dd5df2f82905e365cec6 = $this->env->getExtension("native_profiler");
        $__internal_9a44ac0caa9f9fc16655f19346c749f3ccb7e77e62e4dd5df2f82905e365cec6->enter($__internal_9a44ac0caa9f9fc16655f19346c749f3ccb7e77e62e4dd5df2f82905e365cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_9a44ac0caa9f9fc16655f19346c749f3ccb7e77e62e4dd5df2f82905e365cec6->leave($__internal_9a44ac0caa9f9fc16655f19346c749f3ccb7e77e62e4dd5df2f82905e365cec6_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:edit.html.twig";
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
