<?php

/* @Benchmarking/Default/Motorisation/delete.html.twig */
class __TwigTemplate_270b0406448bc6f89506b1906b5f3e37387226134240b6b47b2b35736f26a922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Motorisation/delete.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'benchmarking_body' => array($this, 'block_benchmarking_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34d4992b8ce95135905e1868aaba908b3a12f9388eee1dbf9ea6f9c049d2473d = $this->env->getExtension("native_profiler");
        $__internal_34d4992b8ce95135905e1868aaba908b3a12f9388eee1dbf9ea6f9c049d2473d->enter($__internal_34d4992b8ce95135905e1868aaba908b3a12f9388eee1dbf9ea6f9c049d2473d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Motorisation/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d4992b8ce95135905e1868aaba908b3a12f9388eee1dbf9ea6f9c049d2473d->leave($__internal_34d4992b8ce95135905e1868aaba908b3a12f9388eee1dbf9ea6f9c049d2473d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b939b4c03a8b8deeb8557192dd407ba314579d9343e6a212ef9f225c674d692 = $this->env->getExtension("native_profiler");
        $__internal_6b939b4c03a8b8deeb8557192dd407ba314579d9343e6a212ef9f225c674d692->enter($__internal_6b939b4c03a8b8deeb8557192dd407ba314579d9343e6a212ef9f225c674d692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une motorisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6b939b4c03a8b8deeb8557192dd407ba314579d9343e6a212ef9f225c674d692->leave($__internal_6b939b4c03a8b8deeb8557192dd407ba314579d9343e6a212ef9f225c674d692_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_199dc3c34d5c2bfff21b7f992c70099f1f2c52bedc9c9620293b071b3a9636f3 = $this->env->getExtension("native_profiler");
        $__internal_199dc3c34d5c2bfff21b7f992c70099f1f2c52bedc9c9620293b071b3a9636f3->enter($__internal_199dc3c34d5c2bfff21b7f992c70099f1f2c52bedc9c9620293b071b3a9636f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Supprimer une motorisation</h4>
  </div>

  <div class=\"panel-body\">
    <p class=\"alert alert-danger\">
      Etes-vous certain de vouloir supprimer la motorisation \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "nom", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 21
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motorisation_delete", array("id" => $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motorisation_view", array("id" => $this->getAttribute((isset($context["motorisation"]) ? $context["motorisation"] : $this->getContext($context, "motorisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la motorisation
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
        
        $__internal_199dc3c34d5c2bfff21b7f992c70099f1f2c52bedc9c9620293b071b3a9636f3->leave($__internal_199dc3c34d5c2bfff21b7f992c70099f1f2c52bedc9c9620293b071b3a9636f3_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Motorisation/delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Motorisation/delete.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une motorisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Supprimer une motorisation</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <p class="alert alert-danger">*/
/*       Etes-vous certain de vouloir supprimer la motorisation "{{ motorisation.nom }}" ?*/
/*     </p>*/
/* */
/*     {# On met l'id dans la route de l'action du formulaire #}*/
/*     <form action="{{ path('motorisation_delete', {'id': motorisation.id}) }}" method="post">*/
/*       <a href="{{ path('motorisation_view', {'id': motorisation.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à la motorisation*/
/*       </a>*/
/*       {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*       <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*       {# Ceci va générer le champ CSRF #}*/
/*       {{ form_rest(form) }}*/
/*     </form>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
