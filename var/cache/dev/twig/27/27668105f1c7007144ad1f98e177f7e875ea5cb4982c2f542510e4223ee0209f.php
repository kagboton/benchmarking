<?php

/* BenchmarkingBundle:Default/Famille:delete.html.twig */
class __TwigTemplate_f97bbe776161052af5183e60a7fe2bd5b68df0ed31207477d4e6135176b569c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Famille:delete.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01c2c80b342419acd760d83d24079803a821a4d187d3b7611da857950d497dd9 = $this->env->getExtension("native_profiler");
        $__internal_01c2c80b342419acd760d83d24079803a821a4d187d3b7611da857950d497dd9->enter($__internal_01c2c80b342419acd760d83d24079803a821a4d187d3b7611da857950d497dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Famille:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c2c80b342419acd760d83d24079803a821a4d187d3b7611da857950d497dd9->leave($__internal_01c2c80b342419acd760d83d24079803a821a4d187d3b7611da857950d497dd9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_404735246288c41dec4572c2db5e791eada1b662b246ba189c135a0bfe7ca6b1 = $this->env->getExtension("native_profiler");
        $__internal_404735246288c41dec4572c2db5e791eada1b662b246ba189c135a0bfe7ca6b1->enter($__internal_404735246288c41dec4572c2db5e791eada1b662b246ba189c135a0bfe7ca6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_404735246288c41dec4572c2db5e791eada1b662b246ba189c135a0bfe7ca6b1->leave($__internal_404735246288c41dec4572c2db5e791eada1b662b246ba189c135a0bfe7ca6b1_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_fb432562f57e9a4c5de169ee8c3b4a5f084da55d0677011c081a9f5100f6985b = $this->env->getExtension("native_profiler");
        $__internal_fb432562f57e9a4c5de169ee8c3b4a5f084da55d0677011c081a9f5100f6985b->enter($__internal_fb432562f57e9a4c5de169ee8c3b4a5f084da55d0677011c081a9f5100f6985b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "  <div class=\"panel-heading\">
   <h4 class=\"panel-title\">Supprimer une famille de fonctions</h4>
  </div>

  <div class=\"panel-body\">

    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer la famille \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "nom", array()), "html", null, true);
        echo "\" ?
      Toutes les fonctions associées à cette famille seront supprimées.
    </p>

    ";
        // line 22
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_delete", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_view", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la famille
      </a>
      ";
        // line 28
        echo "
      <input type=\"submit\"  value=\"Supprimer\" class=\"btn btn-danger\"  />
      ";
        // line 31
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

  </div>

";
        
        $__internal_fb432562f57e9a4c5de169ee8c3b4a5f084da55d0677011c081a9f5100f6985b->leave($__internal_fb432562f57e9a4c5de169ee8c3b4a5f084da55d0677011c081a9f5100f6985b_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Famille:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  85 => 28,  78 => 23,  73 => 22,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Famille/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une famille - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/*   <div class="panel-heading">*/
/*    <h4 class="panel-title">Supprimer une famille de fonctions</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/* */
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer la famille "{{ famille.nom }}" ?*/
/*       Toutes les fonctions associées à cette famille seront supprimées.*/
/*     </p>*/
/* */
/*     {# On met l'id dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('famille_delete', {'id': famille.id}) }}" method="post">*/
/*       <a href="{{ path('famille_view', {'id': famille.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la famille*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/* */
/*       <input type="submit"  value="Supprimer" class="btn btn-danger"  />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/* */
/*   </div>*/
/* */
/* {% endblock %}*/
