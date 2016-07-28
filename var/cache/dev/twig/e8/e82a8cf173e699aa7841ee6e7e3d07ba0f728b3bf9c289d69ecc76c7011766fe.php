<?php

/* BenchmarkingBundle:Default/AfficheurExistant:delete.html.twig */
class __TwigTemplate_dd00ef4cefcb619fab58f6bf9981ca0fe40c5bb2d116d8322bdbc34f00396765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/AfficheurExistant:delete.html.twig", 3);
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
        $__internal_f73eca6b7b13cd330616e8ecf9a8768df84907e0a8729c5df5c752293a13f54a = $this->env->getExtension("native_profiler");
        $__internal_f73eca6b7b13cd330616e8ecf9a8768df84907e0a8729c5df5c752293a13f54a->enter($__internal_f73eca6b7b13cd330616e8ecf9a8768df84907e0a8729c5df5c752293a13f54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/AfficheurExistant:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73eca6b7b13cd330616e8ecf9a8768df84907e0a8729c5df5c752293a13f54a->leave($__internal_f73eca6b7b13cd330616e8ecf9a8768df84907e0a8729c5df5c752293a13f54a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_716275306d21e95c5ac0fe7cde0bc87f340bac7a0cdd147ec3af8e665eed60c4 = $this->env->getExtension("native_profiler");
        $__internal_716275306d21e95c5ac0fe7cde0bc87f340bac7a0cdd147ec3af8e665eed60c4->enter($__internal_716275306d21e95c5ac0fe7cde0bc87f340bac7a0cdd147ec3af8e665eed60c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_716275306d21e95c5ac0fe7cde0bc87f340bac7a0cdd147ec3af8e665eed60c4->leave($__internal_716275306d21e95c5ac0fe7cde0bc87f340bac7a0cdd147ec3af8e665eed60c4_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_44228280d7a8f16b2ef8d7707b1c4a2230fee9b4174022d46aaa6880ac25063d = $this->env->getExtension("native_profiler");
        $__internal_44228280d7a8f16b2ef8d7707b1c4a2230fee9b4174022d46aaa6880ac25063d->enter($__internal_44228280d7a8f16b2ef8d7707b1c4a2230fee9b4174022d46aaa6880ac25063d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer un afficheur</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer l'afficheur \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_delete", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_view", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'afficheur
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
        
        $__internal_44228280d7a8f16b2ef8d7707b1c4a2230fee9b4174022d46aaa6880ac25063d->leave($__internal_44228280d7a8f16b2ef8d7707b1c4a2230fee9b4174022d46aaa6880ac25063d_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/AfficheurExistant:delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/AfficheurExistant/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer un afficheur</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer l'afficheur "{{ afficheur.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('afficheur_delete', {'id': afficheur.id}) }}" method="post">*/
/*     <a href="{{ path('afficheur_view', {'id': afficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'afficheur*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
