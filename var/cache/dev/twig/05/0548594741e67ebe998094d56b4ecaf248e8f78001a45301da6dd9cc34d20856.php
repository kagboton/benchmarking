<?php

/* BenchmarkingBundle:Default/TypeTdB:delete.html.twig */
class __TwigTemplate_164254866e5bb6582c49e76281f4c33a0c5e1d7c3b1fec9461de15ee66095aed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TypeTdB:delete.html.twig", 3);
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
        $__internal_4667ca54411aa6db1ca7970235d4fb5b997df0ab55ad9766831750e66b466fee = $this->env->getExtension("native_profiler");
        $__internal_4667ca54411aa6db1ca7970235d4fb5b997df0ab55ad9766831750e66b466fee->enter($__internal_4667ca54411aa6db1ca7970235d4fb5b997df0ab55ad9766831750e66b466fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TypeTdB:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4667ca54411aa6db1ca7970235d4fb5b997df0ab55ad9766831750e66b466fee->leave($__internal_4667ca54411aa6db1ca7970235d4fb5b997df0ab55ad9766831750e66b466fee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37e3b263afae81f3e7a39465dd631db939ffa7e44099ccb7fb375f587652fb79 = $this->env->getExtension("native_profiler");
        $__internal_37e3b263afae81f3e7a39465dd631db939ffa7e44099ccb7fb375f587652fb79->enter($__internal_37e3b263afae81f3e7a39465dd631db939ffa7e44099ccb7fb375f587652fb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un type de tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_37e3b263afae81f3e7a39465dd631db939ffa7e44099ccb7fb375f587652fb79->leave($__internal_37e3b263afae81f3e7a39465dd631db939ffa7e44099ccb7fb375f587652fb79_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_28825cd619cb1fd8b92beada141fde82aecccb6999a7e12ec6a637fc4ff5cb72 = $this->env->getExtension("native_profiler");
        $__internal_28825cd619cb1fd8b92beada141fde82aecccb6999a7e12ec6a637fc4ff5cb72->enter($__internal_28825cd619cb1fd8b92beada141fde82aecccb6999a7e12ec6a637fc4ff5cb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer un type de tableau de bord</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer le type de tableau de bord \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_delete", array("id" => $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("typeTdB_view", array("id" => $this->getAttribute((isset($context["typeTdB"]) ? $context["typeTdB"] : $this->getContext($context, "typeTdB")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au type de tableau de bord
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
        
        $__internal_28825cd619cb1fd8b92beada141fde82aecccb6999a7e12ec6a637fc4ff5cb72->leave($__internal_28825cd619cb1fd8b92beada141fde82aecccb6999a7e12ec6a637fc4ff5cb72_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TypeTdB:delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeTdB/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un type de tableau de bord - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer un type de tableau de bord</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer le type de tableau de bord "{{ typeTdB.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('typeTdB_delete', {'id': typeTdB.id}) }}" method="post">*/
/*     <a href="{{ path('typeTdB_view', {'id': typeTdB.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au type de tableau de bord*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
