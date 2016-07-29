<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:delete.html.twig */
class __TwigTemplate_fab84e884a10686925c86b06740d1572b9e45c3b65bf10eae17c980d4e3f687d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TechnologieAfficheur:delete.html.twig", 3);
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
        $__internal_b8ca38eabb116408a9f99cc554016e066e5804335486272bc9b7c3fd8fa1d70f = $this->env->getExtension("native_profiler");
        $__internal_b8ca38eabb116408a9f99cc554016e066e5804335486272bc9b7c3fd8fa1d70f->enter($__internal_b8ca38eabb116408a9f99cc554016e066e5804335486272bc9b7c3fd8fa1d70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ca38eabb116408a9f99cc554016e066e5804335486272bc9b7c3fd8fa1d70f->leave($__internal_b8ca38eabb116408a9f99cc554016e066e5804335486272bc9b7c3fd8fa1d70f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62245444527156e2a5039124fca6e0b427372738fe518a913821fe58e5e657ca = $this->env->getExtension("native_profiler");
        $__internal_62245444527156e2a5039124fca6e0b427372738fe518a913821fe58e5e657ca->enter($__internal_62245444527156e2a5039124fca6e0b427372738fe518a913821fe58e5e657ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_62245444527156e2a5039124fca6e0b427372738fe518a913821fe58e5e657ca->leave($__internal_62245444527156e2a5039124fca6e0b427372738fe518a913821fe58e5e657ca_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_0e05357e2d21123d5d5d55ae42ad6b697b424ab38e6008d4e1c69cc57ad0ff6f = $this->env->getExtension("native_profiler");
        $__internal_0e05357e2d21123d5d5d55ae42ad6b697b424ab38e6008d4e1c69cc57ad0ff6f->enter($__internal_0e05357e2d21123d5d5d55ae42ad6b697b424ab38e6008d4e1c69cc57ad0ff6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_0e05357e2d21123d5d5d55ae42ad6b697b424ab38e6008d4e1c69cc57ad0ff6f->leave($__internal_0e05357e2d21123d5d5d55ae42ad6b697b424ab38e6008d4e1c69cc57ad0ff6f_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:delete.html.twig";
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
