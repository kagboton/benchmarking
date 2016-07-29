<?php

/* @Benchmarking/Default/TechnologieAfficheur/delete.html.twig */
class __TwigTemplate_0f2cae929a190618e9ef52a567a5be34001b269a1536b853c0d893cf1b1c0203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TechnologieAfficheur/delete.html.twig", 3);
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
        $__internal_8b06e6a054857ece94a181c72fe1e482bb5df98bb27569329ea297e6cf813aa6 = $this->env->getExtension("native_profiler");
        $__internal_8b06e6a054857ece94a181c72fe1e482bb5df98bb27569329ea297e6cf813aa6->enter($__internal_8b06e6a054857ece94a181c72fe1e482bb5df98bb27569329ea297e6cf813aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TechnologieAfficheur/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b06e6a054857ece94a181c72fe1e482bb5df98bb27569329ea297e6cf813aa6->leave($__internal_8b06e6a054857ece94a181c72fe1e482bb5df98bb27569329ea297e6cf813aa6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d190f77fdf86e87b12f6604f322e1c5a202dfff3f78dcd752d1f88b6ccaac59 = $this->env->getExtension("native_profiler");
        $__internal_0d190f77fdf86e87b12f6604f322e1c5a202dfff3f78dcd752d1f88b6ccaac59->enter($__internal_0d190f77fdf86e87b12f6604f322e1c5a202dfff3f78dcd752d1f88b6ccaac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0d190f77fdf86e87b12f6604f322e1c5a202dfff3f78dcd752d1f88b6ccaac59->leave($__internal_0d190f77fdf86e87b12f6604f322e1c5a202dfff3f78dcd752d1f88b6ccaac59_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_7c718c29712a111b39bf19084f139db705519d76803bfffdf9f0ca51437e70c1 = $this->env->getExtension("native_profiler");
        $__internal_7c718c29712a111b39bf19084f139db705519d76803bfffdf9f0ca51437e70c1->enter($__internal_7c718c29712a111b39bf19084f139db705519d76803bfffdf9f0ca51437e70c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer une technologie afficheur</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer la technologie afficheur \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_delete", array("id" => $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_view", array("id" => $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la technologie afficheur
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
        
        $__internal_7c718c29712a111b39bf19084f139db705519d76803bfffdf9f0ca51437e70c1->leave($__internal_7c718c29712a111b39bf19084f139db705519d76803bfffdf9f0ca51437e70c1_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TechnologieAfficheur/delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TechnologieAfficheur/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer une technologie afficheur</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer la technologie afficheur "{{ technologieAfficheur.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('technologieAfficheur_delete', {'id': technologieAfficheur.id}) }}" method="post">*/
/*     <a href="{{ path('technologieAfficheur_view', {'id': technologieAfficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la technologie afficheur*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
