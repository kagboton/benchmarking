<?php

/* BenchmarkingBundle:Default/CommandePhysique:delete.html.twig */
class __TwigTemplate_4ce8db98e53d06bd8b27f7601ba95c9726950ab8d22d0ed120f57bc5c5d3e0e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/CommandePhysique:delete.html.twig", 3);
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
        $__internal_1aae432c0dd2f335ed9212f524ce13891b613f784c8e5ca9db112002830072fd = $this->env->getExtension("native_profiler");
        $__internal_1aae432c0dd2f335ed9212f524ce13891b613f784c8e5ca9db112002830072fd->enter($__internal_1aae432c0dd2f335ed9212f524ce13891b613f784c8e5ca9db112002830072fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/CommandePhysique:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aae432c0dd2f335ed9212f524ce13891b613f784c8e5ca9db112002830072fd->leave($__internal_1aae432c0dd2f335ed9212f524ce13891b613f784c8e5ca9db112002830072fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8add9dd04c5f03852f13681ee6c67fb3c448eb5057582b1f9bb23d49f4194cd7 = $this->env->getExtension("native_profiler");
        $__internal_8add9dd04c5f03852f13681ee6c67fb3c448eb5057582b1f9bb23d49f4194cd7->enter($__internal_8add9dd04c5f03852f13681ee6c67fb3c448eb5057582b1f9bb23d49f4194cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une commande physique - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8add9dd04c5f03852f13681ee6c67fb3c448eb5057582b1f9bb23d49f4194cd7->leave($__internal_8add9dd04c5f03852f13681ee6c67fb3c448eb5057582b1f9bb23d49f4194cd7_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_9239fdf84cbb4497263e9eda289d723368da385b7d7adca2b7b262f2c83525d1 = $this->env->getExtension("native_profiler");
        $__internal_9239fdf84cbb4497263e9eda289d723368da385b7d7adca2b7b262f2c83525d1->enter($__internal_9239fdf84cbb4497263e9eda289d723368da385b7d7adca2b7b262f2c83525d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_9239fdf84cbb4497263e9eda289d723368da385b7d7adca2b7b262f2c83525d1->leave($__internal_9239fdf84cbb4497263e9eda289d723368da385b7d7adca2b7b262f2c83525d1_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/CommandePhysique:delete.html.twig";
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
