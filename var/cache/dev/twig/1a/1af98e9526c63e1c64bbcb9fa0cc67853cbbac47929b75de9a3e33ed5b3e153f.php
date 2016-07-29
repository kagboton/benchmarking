<?php

/* @Benchmarking/Default/AfficheurExistant/add.html.twig */
class __TwigTemplate_3755c13bebfb6a316bda96be6d1257d41476698e5f5f670438021edbde20e86e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/AfficheurExistant/add.html.twig", 3);
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
        $__internal_1b4398ce1d27aadc38ac340bddf664ce8f5c3b16bfe112ac82f50fd5b6dad9c5 = $this->env->getExtension("native_profiler");
        $__internal_1b4398ce1d27aadc38ac340bddf664ce8f5c3b16bfe112ac82f50fd5b6dad9c5->enter($__internal_1b4398ce1d27aadc38ac340bddf664ce8f5c3b16bfe112ac82f50fd5b6dad9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/AfficheurExistant/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b4398ce1d27aadc38ac340bddf664ce8f5c3b16bfe112ac82f50fd5b6dad9c5->leave($__internal_1b4398ce1d27aadc38ac340bddf664ce8f5c3b16bfe112ac82f50fd5b6dad9c5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5ecbb2486c8af569b2d17362aea180d8a84606c924505276fe59f0963a9bd9d = $this->env->getExtension("native_profiler");
        $__internal_b5ecbb2486c8af569b2d17362aea180d8a84606c924505276fe59f0963a9bd9d->enter($__internal_b5ecbb2486c8af569b2d17362aea180d8a84606c924505276fe59f0963a9bd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un afficheur  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b5ecbb2486c8af569b2d17362aea180d8a84606c924505276fe59f0963a9bd9d->leave($__internal_b5ecbb2486c8af569b2d17362aea180d8a84606c924505276fe59f0963a9bd9d_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_87165f2c48169f4c68568f7ff3b9042c449a27c369f80e18c0acb9d7056e02dc = $this->env->getExtension("native_profiler");
        $__internal_87165f2c48169f4c68568f7ff3b9042c449a27c369f80e18c0acb9d7056e02dc->enter($__internal_87165f2c48169f4c68568f7ff3b9042c449a27c369f80e18c0acb9d7056e02dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 11
        echo "
  <h2>Ajouter un affficheur</h2>

  ";
        // line 14
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:AfficheurExistant/form.html.twig");
        echo "

  <p>
    Cet afficheur sera ajouté directement après validation du formulaire
  </p>

";
        
        $__internal_87165f2c48169f4c68568f7ff3b9042c449a27c369f80e18c0acb9d7056e02dc->leave($__internal_87165f2c48169f4c68568f7ff3b9042c449a27c369f80e18c0acb9d7056e02dc_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/AfficheurExistant/add.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/views/Default/AfficheurExistant/add.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*   Ajouter un afficheur  - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Ajouter un affficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:AfficheurExistant/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Cet afficheur sera ajouté directement après validation du formulaire*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
