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
        $__internal_1205c49109c8cbcc3097a93bd14d9b71733011444acb7ca3de950e59d8d8eaad = $this->env->getExtension("native_profiler");
        $__internal_1205c49109c8cbcc3097a93bd14d9b71733011444acb7ca3de950e59d8d8eaad->enter($__internal_1205c49109c8cbcc3097a93bd14d9b71733011444acb7ca3de950e59d8d8eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TechnologieAfficheur/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1205c49109c8cbcc3097a93bd14d9b71733011444acb7ca3de950e59d8d8eaad->leave($__internal_1205c49109c8cbcc3097a93bd14d9b71733011444acb7ca3de950e59d8d8eaad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2252710d9b26bf633ea44659bffce2f2345b4ce4fd5e5645816279f44bea354 = $this->env->getExtension("native_profiler");
        $__internal_f2252710d9b26bf633ea44659bffce2f2345b4ce4fd5e5645816279f44bea354->enter($__internal_f2252710d9b26bf633ea44659bffce2f2345b4ce4fd5e5645816279f44bea354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f2252710d9b26bf633ea44659bffce2f2345b4ce4fd5e5645816279f44bea354->leave($__internal_f2252710d9b26bf633ea44659bffce2f2345b4ce4fd5e5645816279f44bea354_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_d399c7e659095e7fba60f9b9f49a0f40a940a9d10c5a1c0d801062215884f1b9 = $this->env->getExtension("native_profiler");
        $__internal_d399c7e659095e7fba60f9b9f49a0f40a940a9d10c5a1c0d801062215884f1b9->enter($__internal_d399c7e659095e7fba60f9b9f49a0f40a940a9d10c5a1c0d801062215884f1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_d399c7e659095e7fba60f9b9f49a0f40a940a9d10c5a1c0d801062215884f1b9->leave($__internal_d399c7e659095e7fba60f9b9f49a0f40a940a9d10c5a1c0d801062215884f1b9_prof);

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
