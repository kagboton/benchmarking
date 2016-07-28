<?php

/* BenchmarkingBundle:Default/TechnologieAfficheur:delete.html.twig */
class __TwigTemplate_fab84e884a10686925c86b06740d1572b9e45c3b65bf10eae17c980d4e3f687d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/TechnologieAfficheur:delete.html.twig", 3);
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
        $__internal_aea1a2f8f3ad7c061d76588bd3f15237a7652ed48f4be8709d0f3bf628b117aa = $this->env->getExtension("native_profiler");
        $__internal_aea1a2f8f3ad7c061d76588bd3f15237a7652ed48f4be8709d0f3bf628b117aa->enter($__internal_aea1a2f8f3ad7c061d76588bd3f15237a7652ed48f4be8709d0f3bf628b117aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/TechnologieAfficheur:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aea1a2f8f3ad7c061d76588bd3f15237a7652ed48f4be8709d0f3bf628b117aa->leave($__internal_aea1a2f8f3ad7c061d76588bd3f15237a7652ed48f4be8709d0f3bf628b117aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe31a3b662e13600bb50ed92495970ea7179d530afea3b65d93019433a819979 = $this->env->getExtension("native_profiler");
        $__internal_fe31a3b662e13600bb50ed92495970ea7179d530afea3b65d93019433a819979->enter($__internal_fe31a3b662e13600bb50ed92495970ea7179d530afea3b65d93019433a819979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fe31a3b662e13600bb50ed92495970ea7179d530afea3b65d93019433a819979->leave($__internal_fe31a3b662e13600bb50ed92495970ea7179d530afea3b65d93019433a819979_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5469377b623100a36ee56512f4f03fe0c2f8cdd6aa2564b78610d7c73301f37d = $this->env->getExtension("native_profiler");
        $__internal_5469377b623100a36ee56512f4f03fe0c2f8cdd6aa2564b78610d7c73301f37d->enter($__internal_5469377b623100a36ee56512f4f03fe0c2f8cdd6aa2564b78610d7c73301f37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer une technologie afficheur</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer la technologie afficheur \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_delete", array("id" => $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("technologieAfficheur_view", array("id" => $this->getAttribute((isset($context["technologieAfficheur"]) ? $context["technologieAfficheur"] : $this->getContext($context, "technologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la technologie afficheur
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
        
        $__internal_5469377b623100a36ee56512f4f03fe0c2f8cdd6aa2564b78610d7c73301f37d->leave($__internal_5469377b623100a36ee56512f4f03fe0c2f8cdd6aa2564b78610d7c73301f37d_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/TechnologieAfficheur:delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TechnologieAfficheur/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une technologie afficheur - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer une technologie afficheur</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer la technologie afficheur "{{ technologieAfficheur.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('technologieAfficheur_delete', {'id': technologieAfficheur.id}) }}" method="post">*/
/*     <a href="{{ path('technologieAfficheur_view', {'id': technologieAfficheur.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la technologie afficheur*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
