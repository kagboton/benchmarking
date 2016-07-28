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
        $__internal_833220da349de4a466a565c2b37e2d72d876bf00d477218993436b80ee6cd89d = $this->env->getExtension("native_profiler");
        $__internal_833220da349de4a466a565c2b37e2d72d876bf00d477218993436b80ee6cd89d->enter($__internal_833220da349de4a466a565c2b37e2d72d876bf00d477218993436b80ee6cd89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_833220da349de4a466a565c2b37e2d72d876bf00d477218993436b80ee6cd89d->leave($__internal_833220da349de4a466a565c2b37e2d72d876bf00d477218993436b80ee6cd89d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f4de46462a2d4e439698e8d10e2a1ba476b736fe4c20549e7d24adbe7c25748 = $this->env->getExtension("native_profiler");
        $__internal_1f4de46462a2d4e439698e8d10e2a1ba476b736fe4c20549e7d24adbe7c25748->enter($__internal_1f4de46462a2d4e439698e8d10e2a1ba476b736fe4c20549e7d24adbe7c25748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une commande physique  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1f4de46462a2d4e439698e8d10e2a1ba476b736fe4c20549e7d24adbe7c25748->leave($__internal_1f4de46462a2d4e439698e8d10e2a1ba476b736fe4c20549e7d24adbe7c25748_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_3b74d83f5f489d7532bc31d79b53ed6a474cadec7e3b3979e8607b8e82ed52b1 = $this->env->getExtension("native_profiler");
        $__internal_3b74d83f5f489d7532bc31d79b53ed6a474cadec7e3b3979e8607b8e82ed52b1->enter($__internal_3b74d83f5f489d7532bc31d79b53ed6a474cadec7e3b3979e8607b8e82ed52b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_3b74d83f5f489d7532bc31d79b53ed6a474cadec7e3b3979e8607b8e82ed52b1->leave($__internal_3b74d83f5f489d7532bc31d79b53ed6a474cadec7e3b3979e8607b8e82ed52b1_prof);

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
