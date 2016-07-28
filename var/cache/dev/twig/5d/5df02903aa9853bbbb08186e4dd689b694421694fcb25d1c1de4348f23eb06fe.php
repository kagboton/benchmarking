<?php

/* BenchmarkingBundle:Default/CommandePhysique:add.html.twig */
class __TwigTemplate_ecfe6f736be7307e0809c2aaa2af35e92cb2b054c3f781be1371874d5a9b1f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/CommandePhysique:add.html.twig", 3);
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
        $__internal_090963cb6d5fe1451a60a063600ffba98b6b604f8a420c00962a3af1a6840aef = $this->env->getExtension("native_profiler");
        $__internal_090963cb6d5fe1451a60a063600ffba98b6b604f8a420c00962a3af1a6840aef->enter($__internal_090963cb6d5fe1451a60a063600ffba98b6b604f8a420c00962a3af1a6840aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090963cb6d5fe1451a60a063600ffba98b6b604f8a420c00962a3af1a6840aef->leave($__internal_090963cb6d5fe1451a60a063600ffba98b6b604f8a420c00962a3af1a6840aef_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ed1b1c2a6132be4610c2eca836cccdc6b6d7b836c396414c321ee71fdfaeb18 = $this->env->getExtension("native_profiler");
        $__internal_1ed1b1c2a6132be4610c2eca836cccdc6b6d7b836c396414c321ee71fdfaeb18->enter($__internal_1ed1b1c2a6132be4610c2eca836cccdc6b6d7b836c396414c321ee71fdfaeb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une commande physique  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1ed1b1c2a6132be4610c2eca836cccdc6b6d7b836c396414c321ee71fdfaeb18->leave($__internal_1ed1b1c2a6132be4610c2eca836cccdc6b6d7b836c396414c321ee71fdfaeb18_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_6ab2063faab85c749826fb4467e937135f17bfcd905c07b94d8e97c2991cf35e = $this->env->getExtension("native_profiler");
        $__internal_6ab2063faab85c749826fb4467e937135f17bfcd905c07b94d8e97c2991cf35e->enter($__internal_6ab2063faab85c749826fb4467e937135f17bfcd905c07b94d8e97c2991cf35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_6ab2063faab85c749826fb4467e937135f17bfcd905c07b94d8e97c2991cf35e->leave($__internal_6ab2063faab85c749826fb4467e937135f17bfcd905c07b94d8e97c2991cf35e_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/CommandePhysique:add.html.twig";
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
