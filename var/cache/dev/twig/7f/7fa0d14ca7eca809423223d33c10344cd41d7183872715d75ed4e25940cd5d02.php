<?php

/* @Benchmarking/Default/Marque/delete.html.twig */
class __TwigTemplate_a9e7b6a1309b27b7fc232629b7da1f604066e8276d2f7420a0a8b9be1b0dba35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout/layout.html.twig", "@Benchmarking/Default/Marque/delete.html.twig", 3);
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
        $__internal_50b260a5c47527c0f7ff98ee22633a3bb609832bf0a0c0140680f9debfcb5bb7 = $this->env->getExtension("native_profiler");
        $__internal_50b260a5c47527c0f7ff98ee22633a3bb609832bf0a0c0140680f9debfcb5bb7->enter($__internal_50b260a5c47527c0f7ff98ee22633a3bb609832bf0a0c0140680f9debfcb5bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Marque/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b260a5c47527c0f7ff98ee22633a3bb609832bf0a0c0140680f9debfcb5bb7->leave($__internal_50b260a5c47527c0f7ff98ee22633a3bb609832bf0a0c0140680f9debfcb5bb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e958b5e5a0bedb5455396c835f6402c6419ede9736249bef075207352eb03d7e = $this->env->getExtension("native_profiler");
        $__internal_e958b5e5a0bedb5455396c835f6402c6419ede9736249bef075207352eb03d7e->enter($__internal_e958b5e5a0bedb5455396c835f6402c6419ede9736249bef075207352eb03d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une marque - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e958b5e5a0bedb5455396c835f6402c6419ede9736249bef075207352eb03d7e->leave($__internal_e958b5e5a0bedb5455396c835f6402c6419ede9736249bef075207352eb03d7e_prof);

    }

    // line 9
    public function block_admion_body($context, array $blocks = array())
    {
        $__internal_070a2d97bf29892f76caffa35ea0a4cea68a2e72cd785db8dbe050b50d701aec = $this->env->getExtension("native_profiler");
        $__internal_070a2d97bf29892f76caffa35ea0a4cea68a2e72cd785db8dbe050b50d701aec->enter($__internal_070a2d97bf29892f76caffa35ea0a4cea68a2e72cd785db8dbe050b50d701aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admion_body"));

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
        
        $__internal_070a2d97bf29892f76caffa35ea0a4cea68a2e72cd785db8dbe050b50d701aec->leave($__internal_070a2d97bf29892f76caffa35ea0a4cea68a2e72cd785db8dbe050b50d701aec_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Marque/delete.html.twig";
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
