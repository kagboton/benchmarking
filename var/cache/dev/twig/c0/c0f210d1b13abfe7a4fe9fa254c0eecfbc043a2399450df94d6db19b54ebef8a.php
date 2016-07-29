<?php

/* @Benchmarking/Default/CommandePhysique/add.html.twig */
class __TwigTemplate_95130db7a7b1d37f78371249b37088c16f6747254d117b7931f750279bb4e557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/CommandePhysique/add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c92651ab21ccdc385a2ba0e0cf9e96f529f6a018c0715dd78e3f6b67475634c = $this->env->getExtension("native_profiler");
        $__internal_1c92651ab21ccdc385a2ba0e0cf9e96f529f6a018c0715dd78e3f6b67475634c->enter($__internal_1c92651ab21ccdc385a2ba0e0cf9e96f529f6a018c0715dd78e3f6b67475634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c92651ab21ccdc385a2ba0e0cf9e96f529f6a018c0715dd78e3f6b67475634c->leave($__internal_1c92651ab21ccdc385a2ba0e0cf9e96f529f6a018c0715dd78e3f6b67475634c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2b5d8ec616c7c9bc28b681c0c1f2b505444384ba416cfdcbd36a8b07ef75be9 = $this->env->getExtension("native_profiler");
        $__internal_d2b5d8ec616c7c9bc28b681c0c1f2b505444384ba416cfdcbd36a8b07ef75be9->enter($__internal_d2b5d8ec616c7c9bc28b681c0c1f2b505444384ba416cfdcbd36a8b07ef75be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une commande physique  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d2b5d8ec616c7c9bc28b681c0c1f2b505444384ba416cfdcbd36a8b07ef75be9->leave($__internal_d2b5d8ec616c7c9bc28b681c0c1f2b505444384ba416cfdcbd36a8b07ef75be9_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_fdae9298c94b9defcb42d9e91518adb95c2ff0cb61a7e33cf7bbb01daef12654 = $this->env->getExtension("native_profiler");
        $__internal_fdae9298c94b9defcb42d9e91518adb95c2ff0cb61a7e33cf7bbb01daef12654->enter($__internal_fdae9298c94b9defcb42d9e91518adb95c2ff0cb61a7e33cf7bbb01daef12654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter une commande physique</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:CommandePhysique/form.html.twig");
        echo "

  <p>
    Cette commande sera ajoutée directement après validation du formulaire
  </p>

";
        
        $__internal_fdae9298c94b9defcb42d9e91518adb95c2ff0cb61a7e33cf7bbb01daef12654->leave($__internal_fdae9298c94b9defcb42d9e91518adb95c2ff0cb61a7e33cf7bbb01daef12654_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/CommandePhysique/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 11,  51 => 10,  41 => 7,  35 => 6,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/views/Default/CommandePhysique/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter une commande physique  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter une commande physique</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:CommandePhysique/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cette commande sera ajoutée directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
