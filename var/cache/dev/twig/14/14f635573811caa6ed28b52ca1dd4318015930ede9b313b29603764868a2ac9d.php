<?php

/* BenchmarkingBundle:Default/AfficheurExistant:add.html.twig */
class __TwigTemplate_c4423780c16a6239ab316a72ab03d282c50b30ca00c44b21feac607edbf05ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/AfficheurExistant:add.html.twig", 3);
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
        $__internal_2cbbf6e1b89ee7fd7b756de60bff92e5b254d1ed4af9b6ef8cdc43a3730f607f = $this->env->getExtension("native_profiler");
        $__internal_2cbbf6e1b89ee7fd7b756de60bff92e5b254d1ed4af9b6ef8cdc43a3730f607f->enter($__internal_2cbbf6e1b89ee7fd7b756de60bff92e5b254d1ed4af9b6ef8cdc43a3730f607f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/AfficheurExistant:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cbbf6e1b89ee7fd7b756de60bff92e5b254d1ed4af9b6ef8cdc43a3730f607f->leave($__internal_2cbbf6e1b89ee7fd7b756de60bff92e5b254d1ed4af9b6ef8cdc43a3730f607f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_55249bb9cfb3dee7611d482e535f430d0c61b2432145607eaf0f2c4fc8425c2c = $this->env->getExtension("native_profiler");
        $__internal_55249bb9cfb3dee7611d482e535f430d0c61b2432145607eaf0f2c4fc8425c2c->enter($__internal_55249bb9cfb3dee7611d482e535f430d0c61b2432145607eaf0f2c4fc8425c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Ajouter un afficheur  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_55249bb9cfb3dee7611d482e535f430d0c61b2432145607eaf0f2c4fc8425c2c->leave($__internal_55249bb9cfb3dee7611d482e535f430d0c61b2432145607eaf0f2c4fc8425c2c_prof);

    }

    // line 10
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_38c87ab16d7275349047d5075cf6f2bce45ea1df620d868348afd44138a852c1 = $this->env->getExtension("native_profiler");
        $__internal_38c87ab16d7275349047d5075cf6f2bce45ea1df620d868348afd44138a852c1->enter($__internal_38c87ab16d7275349047d5075cf6f2bce45ea1df620d868348afd44138a852c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_38c87ab16d7275349047d5075cf6f2bce45ea1df620d868348afd44138a852c1->leave($__internal_38c87ab16d7275349047d5075cf6f2bce45ea1df620d868348afd44138a852c1_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/AfficheurExistant:add.html.twig";
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
