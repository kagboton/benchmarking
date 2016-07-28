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
        $__internal_27a14ec79fbae4df553a42119746d4990338fa4092a91c34e7fa3edf9e470bd7 = $this->env->getExtension("native_profiler");
        $__internal_27a14ec79fbae4df553a42119746d4990338fa4092a91c34e7fa3edf9e470bd7->enter($__internal_27a14ec79fbae4df553a42119746d4990338fa4092a91c34e7fa3edf9e470bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Marque:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a14ec79fbae4df553a42119746d4990338fa4092a91c34e7fa3edf9e470bd7->leave($__internal_27a14ec79fbae4df553a42119746d4990338fa4092a91c34e7fa3edf9e470bd7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_70f007f2c5924025c8de95b8cf967c8d1d2d085aac0f66cfae69a62621fe43da = $this->env->getExtension("native_profiler");
        $__internal_70f007f2c5924025c8de95b8cf967c8d1d2d085aac0f66cfae69a62621fe43da->enter($__internal_70f007f2c5924025c8de95b8cf967c8d1d2d085aac0f66cfae69a62621fe43da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_70f007f2c5924025c8de95b8cf967c8d1d2d085aac0f66cfae69a62621fe43da->leave($__internal_70f007f2c5924025c8de95b8cf967c8d1d2d085aac0f66cfae69a62621fe43da_prof);

    }

    // line 9
    public function block_admion_body($context, array $blocks = array())
    {
        $__internal_4c30bb7d29a6c778ee1d0f7f23ec988bd0834dcec0458ed4d916efca8a57bec6 = $this->env->getExtension("native_profiler");
        $__internal_4c30bb7d29a6c778ee1d0f7f23ec988bd0834dcec0458ed4d916efca8a57bec6->enter($__internal_4c30bb7d29a6c778ee1d0f7f23ec988bd0834dcec0458ed4d916efca8a57bec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admion_body"));

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
        
        $__internal_4c30bb7d29a6c778ee1d0f7f23ec988bd0834dcec0458ed4d916efca8a57bec6->leave($__internal_4c30bb7d29a6c778ee1d0f7f23ec988bd0834dcec0458ed4d916efca8a57bec6_prof);

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
