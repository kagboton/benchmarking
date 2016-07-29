<?php

/* BenchmarkingBundle:Default/ComposantAffichage:delete.html.twig */
class __TwigTemplate_7bfd2ffa215c2760ae494ed4d0c78fb3470c60461591261be42ac87941c41733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/ComposantAffichage:delete.html.twig", 3);
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
        $__internal_4cdf61735209fff7724c8c404783a6f7fd9c53138e46e0716865f1d11d86c3df = $this->env->getExtension("native_profiler");
        $__internal_4cdf61735209fff7724c8c404783a6f7fd9c53138e46e0716865f1d11d86c3df->enter($__internal_4cdf61735209fff7724c8c404783a6f7fd9c53138e46e0716865f1d11d86c3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cdf61735209fff7724c8c404783a6f7fd9c53138e46e0716865f1d11d86c3df->leave($__internal_4cdf61735209fff7724c8c404783a6f7fd9c53138e46e0716865f1d11d86c3df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9020adc0e88ea76b8ccfbb09284db3e01dfe489c15106d4ddb584ae7de7f6fbd = $this->env->getExtension("native_profiler");
        $__internal_9020adc0e88ea76b8ccfbb09284db3e01dfe489c15106d4ddb584ae7de7f6fbd->enter($__internal_9020adc0e88ea76b8ccfbb09284db3e01dfe489c15106d4ddb584ae7de7f6fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9020adc0e88ea76b8ccfbb09284db3e01dfe489c15106d4ddb584ae7de7f6fbd->leave($__internal_9020adc0e88ea76b8ccfbb09284db3e01dfe489c15106d4ddb584ae7de7f6fbd_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_a10e4eaeb8922b454fb75b24dfa50c2d78fb00b6422c719b6044d12cf58918f3 = $this->env->getExtension("native_profiler");
        $__internal_a10e4eaeb8922b454fb75b24dfa50c2d78fb00b6422c719b6044d12cf58918f3->enter($__internal_a10e4eaeb8922b454fb75b24dfa50c2d78fb00b6422c719b6044d12cf58918f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer un composant d'affichage</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer le composant  \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_delete", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_view", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au composant
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
        
        $__internal_a10e4eaeb8922b454fb75b24dfa50c2d78fb00b6422c719b6044d12cf58918f3->leave($__internal_a10e4eaeb8922b454fb75b24dfa50c2d78fb00b6422c719b6044d12cf58918f3_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/ComposantAffichage:delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/ComposantAffichage/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un composant d'affichage - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer un composant d'affichage</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer le composant  "{{ composantAffichage.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('composantAffichage_delete', {'id': composantAffichage.id}) }}" method="post">*/
/*     <a href="{{ path('composantAffichage_view', {'id': composantAffichage.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au composant*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
