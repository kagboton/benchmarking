<?php

/* BenchmarkingBundle:Default/FormatEcran:delete.html.twig */
class __TwigTemplate_6618b95d2c33703fe29bcebde6e42b750af208cc0740971c97e324ce5ca2e1b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/FormatEcran:delete.html.twig", 3);
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
        $__internal_400e6677144f55fdc00d8607b8459cc2aa2583da9417fc50a35cbfc095ed6b94 = $this->env->getExtension("native_profiler");
        $__internal_400e6677144f55fdc00d8607b8459cc2aa2583da9417fc50a35cbfc095ed6b94->enter($__internal_400e6677144f55fdc00d8607b8459cc2aa2583da9417fc50a35cbfc095ed6b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/FormatEcran:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_400e6677144f55fdc00d8607b8459cc2aa2583da9417fc50a35cbfc095ed6b94->leave($__internal_400e6677144f55fdc00d8607b8459cc2aa2583da9417fc50a35cbfc095ed6b94_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca5a095cae2bb4b53f90a495ab1fe277e36cc06e27d4ac2ff635df3c78711f4e = $this->env->getExtension("native_profiler");
        $__internal_ca5a095cae2bb4b53f90a495ab1fe277e36cc06e27d4ac2ff635df3c78711f4e->enter($__internal_ca5a095cae2bb4b53f90a495ab1fe277e36cc06e27d4ac2ff635df3c78711f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un Format d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ca5a095cae2bb4b53f90a495ab1fe277e36cc06e27d4ac2ff635df3c78711f4e->leave($__internal_ca5a095cae2bb4b53f90a495ab1fe277e36cc06e27d4ac2ff635df3c78711f4e_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_bf2ac82545b246108103c79cab6806458e886abf84f4922bbe669e0445c38c46 = $this->env->getExtension("native_profiler");
        $__internal_bf2ac82545b246108103c79cab6806458e886abf84f4922bbe669e0445c38c46->enter($__internal_bf2ac82545b246108103c79cab6806458e886abf84f4922bbe669e0445c38c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_bf2ac82545b246108103c79cab6806458e886abf84f4922bbe669e0445c38c46->leave($__internal_bf2ac82545b246108103c79cab6806458e886abf84f4922bbe669e0445c38c46_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/FormatEcran:delete.html.twig";
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
