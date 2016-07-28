<?php

/* @Benchmarking/Default/CommandePhysique/delete.html.twig */
class __TwigTemplate_86204694cd04ca23f3e4bea2bdf0eb72fe82a876815e7325c11ad0bfabe19c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/CommandePhysique/delete.html.twig", 3);
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
        $__internal_57554be850140f368c8d2cfa52e57919a366a5939cd9b6bf3adaa2eb2548e488 = $this->env->getExtension("native_profiler");
        $__internal_57554be850140f368c8d2cfa52e57919a366a5939cd9b6bf3adaa2eb2548e488->enter($__internal_57554be850140f368c8d2cfa52e57919a366a5939cd9b6bf3adaa2eb2548e488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57554be850140f368c8d2cfa52e57919a366a5939cd9b6bf3adaa2eb2548e488->leave($__internal_57554be850140f368c8d2cfa52e57919a366a5939cd9b6bf3adaa2eb2548e488_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af974fc8b4a15d8b4795e82d25885f3db8ee6cd3d88be37f431dbd35c5ccac54 = $this->env->getExtension("native_profiler");
        $__internal_af974fc8b4a15d8b4795e82d25885f3db8ee6cd3d88be37f431dbd35c5ccac54->enter($__internal_af974fc8b4a15d8b4795e82d25885f3db8ee6cd3d88be37f431dbd35c5ccac54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une commande physique - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_af974fc8b4a15d8b4795e82d25885f3db8ee6cd3d88be37f431dbd35c5ccac54->leave($__internal_af974fc8b4a15d8b4795e82d25885f3db8ee6cd3d88be37f431dbd35c5ccac54_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_0fd31437e4e218d20bab328663e9b71b31edb1c785f11de973372b1736e4fb07 = $this->env->getExtension("native_profiler");
        $__internal_0fd31437e4e218d20bab328663e9b71b31edb1c785f11de973372b1736e4fb07->enter($__internal_0fd31437e4e218d20bab328663e9b71b31edb1c785f11de973372b1736e4fb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer une commande physique</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer la commande \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_delete", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_view", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la commande
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_0fd31437e4e218d20bab328663e9b71b31edb1c785f11de973372b1736e4fb07->leave($__internal_0fd31437e4e218d20bab328663e9b71b31edb1c785f11de973372b1736e4fb07_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/CommandePhysique/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/CommandePhysique/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une commande physique - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer une commande physique</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer la commande "{{ commandePhysique.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('commandePhysique_delete', {'id': commandePhysique.id}) }}" method="post">*/
/*     <a href="{{ path('commandePhysique_view', {'id': commandePhysique.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la commande*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
