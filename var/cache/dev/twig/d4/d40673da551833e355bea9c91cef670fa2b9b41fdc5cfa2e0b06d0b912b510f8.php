<?php

/* BenchmarkingBundle:Default/Marque:delete.html.twig */
class __TwigTemplate_11499dfaacabff6fbe0f337a80a45039c0dbac16c1623181d9bcb36af260efe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout/layout.html.twig", "BenchmarkingBundle:Default/Marque:delete.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admion_body' => array($this, 'block_admion_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93014856f6d94632d6b8a929508443a2e2c18a546869ba48a62e6a8bbafad2f3 = $this->env->getExtension("native_profiler");
        $__internal_93014856f6d94632d6b8a929508443a2e2c18a546869ba48a62e6a8bbafad2f3->enter($__internal_93014856f6d94632d6b8a929508443a2e2c18a546869ba48a62e6a8bbafad2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Marque:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93014856f6d94632d6b8a929508443a2e2c18a546869ba48a62e6a8bbafad2f3->leave($__internal_93014856f6d94632d6b8a929508443a2e2c18a546869ba48a62e6a8bbafad2f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_445a3313968d837115442b94bdbf4edd8638d10ae46bdf2a6683663629e104e4 = $this->env->getExtension("native_profiler");
        $__internal_445a3313968d837115442b94bdbf4edd8638d10ae46bdf2a6683663629e104e4->enter($__internal_445a3313968d837115442b94bdbf4edd8638d10ae46bdf2a6683663629e104e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_445a3313968d837115442b94bdbf4edd8638d10ae46bdf2a6683663629e104e4->leave($__internal_445a3313968d837115442b94bdbf4edd8638d10ae46bdf2a6683663629e104e4_prof);

    }

    // line 9
    public function block_admion_body($context, array $blocks = array())
    {
        $__internal_a55e46b9bcd61e513f23f807818d322043c762a32f7d98f5135206e459364d51 = $this->env->getExtension("native_profiler");
        $__internal_a55e46b9bcd61e513f23f807818d322043c762a32f7d98f5135206e459364d51->enter($__internal_a55e46b9bcd61e513f23f807818d322043c762a32f7d98f5135206e459364d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admion_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Supprimer une marque</h4>
  </div>

  <div class=\"panel-body\">
    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer la marque \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "nom", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 21
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_delete", array("id" => $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marque_view", array("id" => $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la marque
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
        
        $__internal_a55e46b9bcd61e513f23f807818d322043c762a32f7d98f5135206e459364d51->leave($__internal_a55e46b9bcd61e513f23f807818d322043c762a32f7d98f5135206e459364d51_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Marque:delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Marque/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une marque - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admion_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Supprimer une marque</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer la marque "{{ marque.nom }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('marque_delete', {'id': marque.id}) }}" method="post">*/
/*       <a href="{{ path('marque_view', {'id': marque.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la marque*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*       <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/*   </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
