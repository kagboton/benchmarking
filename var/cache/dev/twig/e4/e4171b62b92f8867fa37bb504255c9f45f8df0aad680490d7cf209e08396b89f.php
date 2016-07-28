<?php

/* @Benchmarking/Default/Localisation/delete.html.twig */
class __TwigTemplate_3d67ce0709fc0b3b54c214906a83c67f6b635fbd0a951d112a6511a5ca7b520a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/Localisation/delete.html.twig", 3);
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
        $__internal_a2d4a2058199f30d1e402282b3478f8d23272caee30f450c3568b1c348524441 = $this->env->getExtension("native_profiler");
        $__internal_a2d4a2058199f30d1e402282b3478f8d23272caee30f450c3568b1c348524441->enter($__internal_a2d4a2058199f30d1e402282b3478f8d23272caee30f450c3568b1c348524441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Localisation/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d4a2058199f30d1e402282b3478f8d23272caee30f450c3568b1c348524441->leave($__internal_a2d4a2058199f30d1e402282b3478f8d23272caee30f450c3568b1c348524441_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94d027733053e0e7a6c54b668aecd7b3ff632b14d635b693a2cd45955f057ecc = $this->env->getExtension("native_profiler");
        $__internal_94d027733053e0e7a6c54b668aecd7b3ff632b14d635b693a2cd45955f057ecc->enter($__internal_94d027733053e0e7a6c54b668aecd7b3ff632b14d635b693a2cd45955f057ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_94d027733053e0e7a6c54b668aecd7b3ff632b14d635b693a2cd45955f057ecc->leave($__internal_94d027733053e0e7a6c54b668aecd7b3ff632b14d635b693a2cd45955f057ecc_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_f760e326fda02add8d2ca6ea2bdc1f3eb99b114f49563ff378bd24d2af3b7c6b = $this->env->getExtension("native_profiler");
        $__internal_f760e326fda02add8d2ca6ea2bdc1f3eb99b114f49563ff378bd24d2af3b7c6b->enter($__internal_f760e326fda02add8d2ca6ea2bdc1f3eb99b114f49563ff378bd24d2af3b7c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_f760e326fda02add8d2ca6ea2bdc1f3eb99b114f49563ff378bd24d2af3b7c6b->leave($__internal_f760e326fda02add8d2ca6ea2bdc1f3eb99b114f49563ff378bd24d2af3b7c6b_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Localisation/delete.html.twig";
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
