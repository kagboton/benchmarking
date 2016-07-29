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
        $__internal_c5a89c56921da792f6fe8142055a1070bd399b16f98e1c84df52d4f0df26168d = $this->env->getExtension("native_profiler");
        $__internal_c5a89c56921da792f6fe8142055a1070bd399b16f98e1c84df52d4f0df26168d->enter($__internal_c5a89c56921da792f6fe8142055a1070bd399b16f98e1c84df52d4f0df26168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5a89c56921da792f6fe8142055a1070bd399b16f98e1c84df52d4f0df26168d->leave($__internal_c5a89c56921da792f6fe8142055a1070bd399b16f98e1c84df52d4f0df26168d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_20baf0095c0bb1f3479bdbfade27703b45fc58cae20329621ed9358a20f13e4d = $this->env->getExtension("native_profiler");
        $__internal_20baf0095c0bb1f3479bdbfade27703b45fc58cae20329621ed9358a20f13e4d->enter($__internal_20baf0095c0bb1f3479bdbfade27703b45fc58cae20329621ed9358a20f13e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter une commande physique  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_20baf0095c0bb1f3479bdbfade27703b45fc58cae20329621ed9358a20f13e4d->leave($__internal_20baf0095c0bb1f3479bdbfade27703b45fc58cae20329621ed9358a20f13e4d_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_0561a7aa96e4f07ab3d932a2ad41f63100501c25482b22d3029453af823c9ae9 = $this->env->getExtension("native_profiler");
        $__internal_0561a7aa96e4f07ab3d932a2ad41f63100501c25482b22d3029453af823c9ae9->enter($__internal_0561a7aa96e4f07ab3d932a2ad41f63100501c25482b22d3029453af823c9ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_0561a7aa96e4f07ab3d932a2ad41f63100501c25482b22d3029453af823c9ae9->leave($__internal_0561a7aa96e4f07ab3d932a2ad41f63100501c25482b22d3029453af823c9ae9_prof);

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
