<?php

/* BenchmarkingBundle:Default/AfficheurExistant:edit.html.twig */
class __TwigTemplate_2f5a478f5d8ca115053a558d8db5001fadc11b10141ede527f25907381f0c4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/AfficheurExistant:edit.html.twig", 3);
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
        $__internal_86b5a4ff6b07ec5e009ce7b7521c8e2c140977e6dd39b854364e40a7a1686147 = $this->env->getExtension("native_profiler");
        $__internal_86b5a4ff6b07ec5e009ce7b7521c8e2c140977e6dd39b854364e40a7a1686147->enter($__internal_86b5a4ff6b07ec5e009ce7b7521c8e2c140977e6dd39b854364e40a7a1686147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/AfficheurExistant:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b5a4ff6b07ec5e009ce7b7521c8e2c140977e6dd39b854364e40a7a1686147->leave($__internal_86b5a4ff6b07ec5e009ce7b7521c8e2c140977e6dd39b854364e40a7a1686147_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e5b400bc0a33a0757e58ff99d6c28d37a23167dbff661ce46fabcafc622e5f4 = $this->env->getExtension("native_profiler");
        $__internal_4e5b400bc0a33a0757e58ff99d6c28d37a23167dbff661ce46fabcafc622e5f4->enter($__internal_4e5b400bc0a33a0757e58ff99d6c28d37a23167dbff661ce46fabcafc622e5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4e5b400bc0a33a0757e58ff99d6c28d37a23167dbff661ce46fabcafc622e5f4->leave($__internal_4e5b400bc0a33a0757e58ff99d6c28d37a23167dbff661ce46fabcafc622e5f4_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_dde80b8d1261e1a401949a9fc868ddf9d95a80a5b3ac89c4e0d192d73a3d17b8 = $this->env->getExtension("native_profiler");
        $__internal_dde80b8d1261e1a401949a9fc868ddf9d95a80a5b3ac89c4e0d192d73a3d17b8->enter($__internal_dde80b8d1261e1a401949a9fc868ddf9d95a80a5b3ac89c4e0d192d73a3d17b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Modifier un afficheur</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "BenchmarkingBundle:Default:AfficheurExistant/form.html.twig");
        echo "

  <p>
    Modification d'un afficheur déjà existant.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_view", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'afficheur
    </a>
  </p>

";
        
        $__internal_dde80b8d1261e1a401949a9fc868ddf9d95a80a5b3ac89c4e0d192d73a3d17b8->leave($__internal_dde80b8d1261e1a401949a9fc868ddf9d95a80a5b3ac89c4e0d192d73a3d17b8_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/AfficheurExistant:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/AfficheurExistant/edit.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Modifier un afficheur</h2>*/
/* */
/*   {{ include("BenchmarkingBundle:Default:AfficheurExistant/form.html.twig") }}*/
/* */
/*   <p>*/
/*     Modification d'un afficheur déjà existant.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('afficheur_view', {'id': afficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'afficheur*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
