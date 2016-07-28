<?php

/* @Benchmarking/Default/Marque/add.html.twig */
class __TwigTemplate_753225c3cda0cd3df20ecfc361f0b0a3cc46b18560a620f163a599c66f0bdd07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Marque/add.html.twig", 3);
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
        $__internal_b7068f9223200e2c9e120afcc0d5d9d31cb69ea03ba2d33af08bc5dcd8b02b60 = $this->env->getExtension("native_profiler");
        $__internal_b7068f9223200e2c9e120afcc0d5d9d31cb69ea03ba2d33af08bc5dcd8b02b60->enter($__internal_b7068f9223200e2c9e120afcc0d5d9d31cb69ea03ba2d33af08bc5dcd8b02b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Marque/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7068f9223200e2c9e120afcc0d5d9d31cb69ea03ba2d33af08bc5dcd8b02b60->leave($__internal_b7068f9223200e2c9e120afcc0d5d9d31cb69ea03ba2d33af08bc5dcd8b02b60_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ce39269fb33f81c68eb51adb24367d65690eafb6ef4cbecb853ee72070756b8 = $this->env->getExtension("native_profiler");
        $__internal_0ce39269fb33f81c68eb51adb24367d65690eafb6ef4cbecb853ee72070756b8->enter($__internal_0ce39269fb33f81c68eb51adb24367d65690eafb6ef4cbecb853ee72070756b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0ce39269fb33f81c68eb51adb24367d65690eafb6ef4cbecb853ee72070756b8->leave($__internal_0ce39269fb33f81c68eb51adb24367d65690eafb6ef4cbecb853ee72070756b8_prof);

    }

    // line 10
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_f4b049c8d97bcd4c461d036ea2f5007c82ba12892c4b344d832cb2532d24f757 = $this->env->getExtension("native_profiler");
        $__internal_f4b049c8d97bcd4c461d036ea2f5007c82ba12892c4b344d832cb2532d24f757->enter($__internal_f4b049c8d97bcd4c461d036ea2f5007c82ba12892c4b344d832cb2532d24f757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 11
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Ajouter une marque</h4>
  </div>

  <div class=\"panel-body\">
    ";
        // line 17
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:Marque/form.html.twig");
        echo "
  </div>

";
        
        $__internal_f4b049c8d97bcd4c461d036ea2f5007c82ba12892c4b344d832cb2532d24f757->leave($__internal_f4b049c8d97bcd4c461d036ea2f5007c82ba12892c4b344d832cb2532d24f757_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Marque/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/Marque/add.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une marque - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Ajouter une marque</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     {{ include("BenchmarkingBundle:Default:Marque/form.html.twig") }}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
