<?php

/* @Benchmarking/Default/TailleEcran/delete.html.twig */
class __TwigTemplate_94312f0ba4e52a4d3673cf210d1c0bdaa9b104690327032e39730acaace5d1df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TailleEcran/delete.html.twig", 3);
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
        $__internal_c666b40ec6dfb170d5fe8b25f1286dfe396a62c4d93f0134d7018d8b389d0c79 = $this->env->getExtension("native_profiler");
        $__internal_c666b40ec6dfb170d5fe8b25f1286dfe396a62c4d93f0134d7018d8b389d0c79->enter($__internal_c666b40ec6dfb170d5fe8b25f1286dfe396a62c4d93f0134d7018d8b389d0c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c666b40ec6dfb170d5fe8b25f1286dfe396a62c4d93f0134d7018d8b389d0c79->leave($__internal_c666b40ec6dfb170d5fe8b25f1286dfe396a62c4d93f0134d7018d8b389d0c79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f060566275ece718aa7ba0486b0a7bd9d392a865db42611c8c1467de499bbb6d = $this->env->getExtension("native_profiler");
        $__internal_f060566275ece718aa7ba0486b0a7bd9d392a865db42611c8c1467de499bbb6d->enter($__internal_f060566275ece718aa7ba0486b0a7bd9d392a865db42611c8c1467de499bbb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f060566275ece718aa7ba0486b0a7bd9d392a865db42611c8c1467de499bbb6d->leave($__internal_f060566275ece718aa7ba0486b0a7bd9d392a865db42611c8c1467de499bbb6d_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_caa6fa8fc5b190bd056c6dd3d0b11e6edb099e1202eac55f52d20423efd0292f = $this->env->getExtension("native_profiler");
        $__internal_caa6fa8fc5b190bd056c6dd3d0b11e6edb099e1202eac55f52d20423efd0292f->enter($__internal_caa6fa8fc5b190bd056c6dd3d0b11e6edb099e1202eac55f52d20423efd0292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer une taille d'écran</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer la taille d'écran \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "taille", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_delete", array("id" => $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_view", array("id" => $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la taille d'écran
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
        
        $__internal_caa6fa8fc5b190bd056c6dd3d0b11e6edb099e1202eac55f52d20423efd0292f->leave($__internal_caa6fa8fc5b190bd056c6dd3d0b11e6edb099e1202eac55f52d20423efd0292f_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TailleEcran/delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TailleEcran/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une taille d'écran - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer une taille d'écran</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer la taille d'écran "{{ tailleEcran.taille }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('tailleEcran_delete', {'id': tailleEcran.id}) }}" method="post">*/
/*     <a href="{{ path('tailleEcran_view', {'id': tailleEcran.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la taille d'écran*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
