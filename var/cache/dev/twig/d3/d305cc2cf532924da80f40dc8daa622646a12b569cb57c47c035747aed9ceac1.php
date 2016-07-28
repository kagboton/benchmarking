<?php

/* @Benchmarking/Default/TailleEcran/delete.html.twig */
class __TwigTemplate_94312f0ba4e52a4d3673cf210d1c0bdaa9b104690327032e39730acaace5d1df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TailleEcran/delete.html.twig", 3);
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
        $__internal_52a5bd3822aec814251b421f2fcf1aae80d966b607b84fcd7e11d4a900f22d31 = $this->env->getExtension("native_profiler");
        $__internal_52a5bd3822aec814251b421f2fcf1aae80d966b607b84fcd7e11d4a900f22d31->enter($__internal_52a5bd3822aec814251b421f2fcf1aae80d966b607b84fcd7e11d4a900f22d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a5bd3822aec814251b421f2fcf1aae80d966b607b84fcd7e11d4a900f22d31->leave($__internal_52a5bd3822aec814251b421f2fcf1aae80d966b607b84fcd7e11d4a900f22d31_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_adda27df1b049e667115771df2027f089bc3088b22eaffada82c3897095d8362 = $this->env->getExtension("native_profiler");
        $__internal_adda27df1b049e667115771df2027f089bc3088b22eaffada82c3897095d8362->enter($__internal_adda27df1b049e667115771df2027f089bc3088b22eaffada82c3897095d8362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_adda27df1b049e667115771df2027f089bc3088b22eaffada82c3897095d8362->leave($__internal_adda27df1b049e667115771df2027f089bc3088b22eaffada82c3897095d8362_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_6edb9b70d8180d74c692694a52843b713a3823988cc26af5b5e4019fa5c3832a = $this->env->getExtension("native_profiler");
        $__internal_6edb9b70d8180d74c692694a52843b713a3823988cc26af5b5e4019fa5c3832a->enter($__internal_6edb9b70d8180d74c692694a52843b713a3823988cc26af5b5e4019fa5c3832a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer une taille d'écran</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer la taille d'écran \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "taille", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_delete", array("id" => $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_view", array("id" => $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la taille d'écran
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
        
        $__internal_6edb9b70d8180d74c692694a52843b713a3823988cc26af5b5e4019fa5c3832a->leave($__internal_6edb9b70d8180d74c692694a52843b713a3823988cc26af5b5e4019fa5c3832a_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TailleEcran/delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TailleEcran/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une taille d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer une taille d'écran</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer la taille d'écran "{{ tailleEcran.taille }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('tailleEcran_delete', {'id': tailleEcran.id}) }}" method="post">*/
/*     <a href="{{ path('tailleEcran_view', {'id': tailleEcran.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la taille d'écran*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
