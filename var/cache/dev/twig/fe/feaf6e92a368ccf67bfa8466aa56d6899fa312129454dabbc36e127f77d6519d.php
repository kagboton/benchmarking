<?php

/* BenchmarkingBundle:Default/FonctionExistante:delete.html.twig */
class __TwigTemplate_877f373d120bf4741ede3047cc83b82406de47a94ef574e075026cc9d68348d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/FonctionExistante:delete.html.twig", 3);
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
        $__internal_f15492357f7d2c9abce271691338b14cba55424c77140629d5179083b18d5c6f = $this->env->getExtension("native_profiler");
        $__internal_f15492357f7d2c9abce271691338b14cba55424c77140629d5179083b18d5c6f->enter($__internal_f15492357f7d2c9abce271691338b14cba55424c77140629d5179083b18d5c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FonctionExistante:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15492357f7d2c9abce271691338b14cba55424c77140629d5179083b18d5c6f->leave($__internal_f15492357f7d2c9abce271691338b14cba55424c77140629d5179083b18d5c6f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e39b5b12946554eafab692ca7d79bf0a9695344b875d1f59ca6b7175d9c2e016 = $this->env->getExtension("native_profiler");
        $__internal_e39b5b12946554eafab692ca7d79bf0a9695344b875d1f59ca6b7175d9c2e016->enter($__internal_e39b5b12946554eafab692ca7d79bf0a9695344b875d1f59ca6b7175d9c2e016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une fonction - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e39b5b12946554eafab692ca7d79bf0a9695344b875d1f59ca6b7175d9c2e016->leave($__internal_e39b5b12946554eafab692ca7d79bf0a9695344b875d1f59ca6b7175d9c2e016_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_70b98a0a56966d1cb272910ad4db1606f6189b9358650b98590e02b586389c01 = $this->env->getExtension("native_profiler");
        $__internal_70b98a0a56966d1cb272910ad4db1606f6189b9358650b98590e02b586389c01->enter($__internal_70b98a0a56966d1cb272910ad4db1606f6189b9358650b98590e02b586389c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Supprimer une fonction</h4>
  </div>

  <div class=\"panel-body\">
    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer la fonction \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "nom", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 21
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_delete", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fonction_view", array("id" => $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la fonction
      </a>
      ";
        // line 27
        echo "      <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
      ";
        // line 29
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

  </div>


";
        
        $__internal_70b98a0a56966d1cb272910ad4db1606f6189b9358650b98590e02b586389c01->leave($__internal_70b98a0a56966d1cb272910ad4db1606f6189b9358650b98590e02b586389c01_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FonctionExistante:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  84 => 27,  77 => 22,  72 => 21,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/FonctionExistante/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une fonction - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Supprimer une fonction</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer la fonction "{{ fonction.nom }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('fonction_delete', {'id': fonction.id}) }}" method="post">*/
/*       <a href="{{ path('fonction_view', {'id': fonction.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la fonction*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*       <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
