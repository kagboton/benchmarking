<?php

/* @Benchmarking/Default/FormatEcran/delete.html.twig */
class __TwigTemplate_6dc26ea2a820b846a7ff15cb9ac6f63eaaf20937840ee4992819edf6082c0b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/FormatEcran/delete.html.twig", 3);
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
        $__internal_5330b47b07f726f1f550d8544537f1715c7c4322442270add13e2d5486e552ae = $this->env->getExtension("native_profiler");
        $__internal_5330b47b07f726f1f550d8544537f1715c7c4322442270add13e2d5486e552ae->enter($__internal_5330b47b07f726f1f550d8544537f1715c7c4322442270add13e2d5486e552ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/FormatEcran/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5330b47b07f726f1f550d8544537f1715c7c4322442270add13e2d5486e552ae->leave($__internal_5330b47b07f726f1f550d8544537f1715c7c4322442270add13e2d5486e552ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7d907ce469f97c112f4333a7aca7091b9d7fcc5e4b8ce28e14d203877af34bb = $this->env->getExtension("native_profiler");
        $__internal_b7d907ce469f97c112f4333a7aca7091b9d7fcc5e4b8ce28e14d203877af34bb->enter($__internal_b7d907ce469f97c112f4333a7aca7091b9d7fcc5e4b8ce28e14d203877af34bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un Format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7d907ce469f97c112f4333a7aca7091b9d7fcc5e4b8ce28e14d203877af34bb->leave($__internal_b7d907ce469f97c112f4333a7aca7091b9d7fcc5e4b8ce28e14d203877af34bb_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_3e8c69e477b6dd76aeaf991848ee014223b4f61898b46c779785419d66ff8f1d = $this->env->getExtension("native_profiler");
        $__internal_3e8c69e477b6dd76aeaf991848ee014223b4f61898b46c779785419d66ff8f1d->enter($__internal_3e8c69e477b6dd76aeaf991848ee014223b4f61898b46c779785419d66ff8f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer un Format d'écran</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer le Format d'écran \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formatEcran"]) ? $context["formatEcran"] : $this->getContext($context, "formatEcran")), "format", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formatEcran_delete", array("id" => $this->getAttribute((isset($context["formatEcran"]) ? $context["formatEcran"] : $this->getContext($context, "formatEcran")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formatEcran_view", array("id" => $this->getAttribute((isset($context["formatEcran"]) ? $context["formatEcran"] : $this->getContext($context, "formatEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au Format d'écran
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
        
        $__internal_3e8c69e477b6dd76aeaf991848ee014223b4f61898b46c779785419d66ff8f1d->leave($__internal_3e8c69e477b6dd76aeaf991848ee014223b4f61898b46c779785419d66ff8f1d_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/FormatEcran/delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/FormatEcran/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un Format d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer un Format d'écran</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer le Format d'écran "{{ formatEcran.format }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('formatEcran_delete', {'id': formatEcran.id}) }}" method="post">*/
/*     <a href="{{ path('formatEcran_view', {'id': formatEcran.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au Format d'écran*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
