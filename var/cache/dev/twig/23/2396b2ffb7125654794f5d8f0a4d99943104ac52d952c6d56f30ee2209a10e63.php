<?php

/* BenchmarkingBundle:Default/Localisation:delete.html.twig */
class __TwigTemplate_900ab75aa56629d111d49d427f3d373e88d02a21f5f5ece9ff28c397c2fe1a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/Localisation:delete.html.twig", 3);
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
        $__internal_3a477b10d0ebb1f18022cb4affdb71f080599fc44ac651c9c32c32cc0e4a7759 = $this->env->getExtension("native_profiler");
        $__internal_3a477b10d0ebb1f18022cb4affdb71f080599fc44ac651c9c32c32cc0e4a7759->enter($__internal_3a477b10d0ebb1f18022cb4affdb71f080599fc44ac651c9c32c32cc0e4a7759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Localisation:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a477b10d0ebb1f18022cb4affdb71f080599fc44ac651c9c32c32cc0e4a7759->leave($__internal_3a477b10d0ebb1f18022cb4affdb71f080599fc44ac651c9c32c32cc0e4a7759_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe1b07fe33d91b3b0cebb04b27165c648348fa7c729bc0d645c787d658161410 = $this->env->getExtension("native_profiler");
        $__internal_fe1b07fe33d91b3b0cebb04b27165c648348fa7c729bc0d645c787d658161410->enter($__internal_fe1b07fe33d91b3b0cebb04b27165c648348fa7c729bc0d645c787d658161410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fe1b07fe33d91b3b0cebb04b27165c648348fa7c729bc0d645c787d658161410->leave($__internal_fe1b07fe33d91b3b0cebb04b27165c648348fa7c729bc0d645c787d658161410_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_ed19a8eb69625ab1fdaef5262bbeff14e4c8a3e079e7b0d00fb4d17ff615b689 = $this->env->getExtension("native_profiler");
        $__internal_ed19a8eb69625ab1fdaef5262bbeff14e4c8a3e079e7b0d00fb4d17ff615b689->enter($__internal_ed19a8eb69625ab1fdaef5262bbeff14e4c8a3e079e7b0d00fb4d17ff615b689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer une localisation</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer la localisation \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_delete", array("id" => $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_view", array("id" => $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la localisation
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
        
        $__internal_ed19a8eb69625ab1fdaef5262bbeff14e4c8a3e079e7b0d00fb4d17ff615b689->leave($__internal_ed19a8eb69625ab1fdaef5262bbeff14e4c8a3e079e7b0d00fb4d17ff615b689_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Localisation:delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Localisation/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une localisation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer une localisation</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer la localisation "{{ localisation.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('localisation_delete', {'id': localisation.id}) }}" method="post">*/
/*     <a href="{{ path('localisation_view', {'id': localisation.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la localisation*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
