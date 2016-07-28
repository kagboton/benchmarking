<?php

/* BenchmarkingBundle:Default/TailleEcran:delete.html.twig */
class __TwigTemplate_54e351c2a90fa3da4f89035374949f303cb336664129b25291c77b92a625fa52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TailleEcran:delete.html.twig", 3);
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
        $__internal_bedda46c3157e161b457c1b0070902ee848940f507fc8a3d178a5b870fdb6c30 = $this->env->getExtension("native_profiler");
        $__internal_bedda46c3157e161b457c1b0070902ee848940f507fc8a3d178a5b870fdb6c30->enter($__internal_bedda46c3157e161b457c1b0070902ee848940f507fc8a3d178a5b870fdb6c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TailleEcran:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bedda46c3157e161b457c1b0070902ee848940f507fc8a3d178a5b870fdb6c30->leave($__internal_bedda46c3157e161b457c1b0070902ee848940f507fc8a3d178a5b870fdb6c30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7cc58498effc2b51a185b91a1d0288b3348860173ee636947e6c73257cbdac3 = $this->env->getExtension("native_profiler");
        $__internal_e7cc58498effc2b51a185b91a1d0288b3348860173ee636947e6c73257cbdac3->enter($__internal_e7cc58498effc2b51a185b91a1d0288b3348860173ee636947e6c73257cbdac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e7cc58498effc2b51a185b91a1d0288b3348860173ee636947e6c73257cbdac3->leave($__internal_e7cc58498effc2b51a185b91a1d0288b3348860173ee636947e6c73257cbdac3_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_58978a090acc651ad76d505630be21df626e10245e1c66417efdb1aefefe122e = $this->env->getExtension("native_profiler");
        $__internal_58978a090acc651ad76d505630be21df626e10245e1c66417efdb1aefefe122e->enter($__internal_58978a090acc651ad76d505630be21df626e10245e1c66417efdb1aefefe122e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_58978a090acc651ad76d505630be21df626e10245e1c66417efdb1aefefe122e->leave($__internal_58978a090acc651ad76d505630be21df626e10245e1c66417efdb1aefefe122e_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TailleEcran:delete.html.twig";
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
