<?php

/* @Benchmarking/Default/BoiteVitesse/add.html.twig */
class __TwigTemplate_f8c89750cdb3091b06a52a61d1e32487c7a842a1fb17caa6286f6e7f527747e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/BoiteVitesse/add.html.twig", 3);
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
        $__internal_4302e3db7e4ea80e70a991791bc393ff9b906ce82f183b2d6441b310d684378a = $this->env->getExtension("native_profiler");
        $__internal_4302e3db7e4ea80e70a991791bc393ff9b906ce82f183b2d6441b310d684378a->enter($__internal_4302e3db7e4ea80e70a991791bc393ff9b906ce82f183b2d6441b310d684378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4302e3db7e4ea80e70a991791bc393ff9b906ce82f183b2d6441b310d684378a->leave($__internal_4302e3db7e4ea80e70a991791bc393ff9b906ce82f183b2d6441b310d684378a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad08f10af65fb35c76f0c2d6815fc95eea012130bf1586836c50fdc19b841eb2 = $this->env->getExtension("native_profiler");
        $__internal_ad08f10af65fb35c76f0c2d6815fc95eea012130bf1586836c50fdc19b841eb2->enter($__internal_ad08f10af65fb35c76f0c2d6815fc95eea012130bf1586836c50fdc19b841eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ad08f10af65fb35c76f0c2d6815fc95eea012130bf1586836c50fdc19b841eb2->leave($__internal_ad08f10af65fb35c76f0c2d6815fc95eea012130bf1586836c50fdc19b841eb2_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_eb0944e05c4fe13228beefc1a5453c055784c01f21b0f9b6713b791b72c69079 = $this->env->getExtension("native_profiler");
        $__internal_eb0944e05c4fe13228beefc1a5453c055784c01f21b0f9b6713b791b72c69079->enter($__internal_eb0944e05c4fe13228beefc1a5453c055784c01f21b0f9b6713b791b72c69079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Ajouter une boîte à vitesse</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:BoiteVitesse/form.html.twig");
        echo "
  </div>


";
        
        $__internal_eb0944e05c4fe13228beefc1a5453c055784c01f21b0f9b6713b791b72c69079->leave($__internal_eb0944e05c4fe13228beefc1a5453c055784c01f21b0f9b6713b791b72c69079_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/BoiteVitesse/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/BoiteVitesse/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Ajouter une boîte à vitesse</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:BoiteVitesse/form.html.twig") }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
