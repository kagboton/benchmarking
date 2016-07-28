<?php

/* BenchmarkingBundle:Default/BoiteVitesse:delete.html.twig */
class __TwigTemplate_94d484b7d5f1d9a67c53cdd877e6ab8b557874258f676cd472747fdc2866cd9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/BoiteVitesse:delete.html.twig", 3);
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
        $__internal_294b485d744c3cb5623b33ed3112050b8db24135d0aa592a09d88ea95ee40be2 = $this->env->getExtension("native_profiler");
        $__internal_294b485d744c3cb5623b33ed3112050b8db24135d0aa592a09d88ea95ee40be2->enter($__internal_294b485d744c3cb5623b33ed3112050b8db24135d0aa592a09d88ea95ee40be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/BoiteVitesse:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_294b485d744c3cb5623b33ed3112050b8db24135d0aa592a09d88ea95ee40be2->leave($__internal_294b485d744c3cb5623b33ed3112050b8db24135d0aa592a09d88ea95ee40be2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0428caf846942c405842c48033f198beb52dc0e5f7596406f54c2cd0503ef84 = $this->env->getExtension("native_profiler");
        $__internal_c0428caf846942c405842c48033f198beb52dc0e5f7596406f54c2cd0503ef84->enter($__internal_c0428caf846942c405842c48033f198beb52dc0e5f7596406f54c2cd0503ef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c0428caf846942c405842c48033f198beb52dc0e5f7596406f54c2cd0503ef84->leave($__internal_c0428caf846942c405842c48033f198beb52dc0e5f7596406f54c2cd0503ef84_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_a9f7dad63a27c057b7224fa28710888e224f56a223f5ac20ecf082984cc40e70 = $this->env->getExtension("native_profiler");
        $__internal_a9f7dad63a27c057b7224fa28710888e224f56a223f5ac20ecf082984cc40e70->enter($__internal_a9f7dad63a27c057b7224fa28710888e224f56a223f5ac20ecf082984cc40e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Supprimer une boîte à vitesse</h4>
  </div>

  <div class=\"panel-body\">
    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer la boîte à vitesse \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "nom", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 21
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_delete", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_view", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la boîe à vitesse
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
        
        $__internal_a9f7dad63a27c057b7224fa28710888e224f56a223f5ac20ecf082984cc40e70->leave($__internal_a9f7dad63a27c057b7224fa28710888e224f56a223f5ac20ecf082984cc40e70_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/BoiteVitesse:delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/BoiteVitesse/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une boîte à vitesse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Supprimer une boîte à vitesse</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer la boîte à vitesse "{{ boiteVitesse.nom }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id  dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('boiteVitesse_delete', {'id': boiteVitesse.id}) }}" method="post">*/
/*       <a href="{{ path('boiteVitesse_view', {'id': boiteVitesse.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la boîe à vitesse*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*       <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/* */
/*   </div>*/
/* */
/* {% endblock %}*/
