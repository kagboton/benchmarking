<?php

/* BenchmarkingBundle:Default/BoiteVitesse:add.html.twig */
class __TwigTemplate_f2566c1a2ebc2caaf3967a4e195fc90b9e9b33cc9dc42b1ea4a503139d76bed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/BoiteVitesse:add.html.twig", 3);
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
        $__internal_a8c3a4540266700568c67300f39f42c5a91fb2446c3137f0b07a9c1ccac1fc84 = $this->env->getExtension("native_profiler");
        $__internal_a8c3a4540266700568c67300f39f42c5a91fb2446c3137f0b07a9c1ccac1fc84->enter($__internal_a8c3a4540266700568c67300f39f42c5a91fb2446c3137f0b07a9c1ccac1fc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c3a4540266700568c67300f39f42c5a91fb2446c3137f0b07a9c1ccac1fc84->leave($__internal_a8c3a4540266700568c67300f39f42c5a91fb2446c3137f0b07a9c1ccac1fc84_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_13b8e0b3752af0398bdb0c98b183afdf7de804722f5b535f05d1907e4741f731 = $this->env->getExtension("native_profiler");
        $__internal_13b8e0b3752af0398bdb0c98b183afdf7de804722f5b535f05d1907e4741f731->enter($__internal_13b8e0b3752af0398bdb0c98b183afdf7de804722f5b535f05d1907e4741f731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_13b8e0b3752af0398bdb0c98b183afdf7de804722f5b535f05d1907e4741f731->leave($__internal_13b8e0b3752af0398bdb0c98b183afdf7de804722f5b535f05d1907e4741f731_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_1618516c7df1395668ad1f76a7de8536efd28671e57bd889df5c5302de31f011 = $this->env->getExtension("native_profiler");
        $__internal_1618516c7df1395668ad1f76a7de8536efd28671e57bd889df5c5302de31f011->enter($__internal_1618516c7df1395668ad1f76a7de8536efd28671e57bd889df5c5302de31f011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_1618516c7df1395668ad1f76a7de8536efd28671e57bd889df5c5302de31f011->leave($__internal_1618516c7df1395668ad1f76a7de8536efd28671e57bd889df5c5302de31f011_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:add.html.twig";
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
