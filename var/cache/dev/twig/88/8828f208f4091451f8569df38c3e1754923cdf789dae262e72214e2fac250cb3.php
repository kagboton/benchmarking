<?php

/* @Benchmarking/Default/TypeRetourActivation/delete.html.twig */
class __TwigTemplate_fa1f18682f452501bf7cc0d8742d1635ca34a9ad791822760678727d17a82115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeRetourActivation/delete.html.twig", 3);
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
        $__internal_516b65cb128b3d282e4263ebb2a4c8f99739376e469582ad48398ff7b6bffa21 = $this->env->getExtension("native_profiler");
        $__internal_516b65cb128b3d282e4263ebb2a4c8f99739376e469582ad48398ff7b6bffa21->enter($__internal_516b65cb128b3d282e4263ebb2a4c8f99739376e469582ad48398ff7b6bffa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516b65cb128b3d282e4263ebb2a4c8f99739376e469582ad48398ff7b6bffa21->leave($__internal_516b65cb128b3d282e4263ebb2a4c8f99739376e469582ad48398ff7b6bffa21_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74db9832c60ccb45199828beae67176a1e75c9f0106b83134c616c2ba7dc1b54 = $this->env->getExtension("native_profiler");
        $__internal_74db9832c60ccb45199828beae67176a1e75c9f0106b83134c616c2ba7dc1b54->enter($__internal_74db9832c60ccb45199828beae67176a1e75c9f0106b83134c616c2ba7dc1b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74db9832c60ccb45199828beae67176a1e75c9f0106b83134c616c2ba7dc1b54->leave($__internal_74db9832c60ccb45199828beae67176a1e75c9f0106b83134c616c2ba7dc1b54_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_6a3b2f1134b44e002c14444b5fb939d781a55a038ee564f50b8cad5fd5de5c9b = $this->env->getExtension("native_profiler");
        $__internal_6a3b2f1134b44e002c14444b5fb939d781a55a038ee564f50b8cad5fd5de5c9b->enter($__internal_6a3b2f1134b44e002c14444b5fb939d781a55a038ee564f50b8cad5fd5de5c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
  <h2>Supprimer un retour d'activation</h2>

  <p class=\"alert alert-danger\">
    Etes-vous certain de vouloir supprimer le retour d'activation \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "nom", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_delete", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_view", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au retour d'activation
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
        
        $__internal_6a3b2f1134b44e002c14444b5fb939d781a55a038ee564f50b8cad5fd5de5c9b->leave($__internal_6a3b2f1134b44e002c14444b5fb939d781a55a038ee564f50b8cad5fd5de5c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeRetourActivation/delete.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeRetourActivation/delete.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un retour d'activation - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*   <h2>Supprimer un retour d'activation</h2>*/
/* */
/*   <p class="alert alert-danger">*/
/*     Etes-vous certain de vouloir supprimer le retour d'activation "{{ retourActivation.nom }}" ?*/
/*   </p>*/
/* */
/*   {# On met l'id dans la route de l'action du formulaire #}*/
/*   <form action="{{ path('retourActivation_delete', {'id': retourActivation.id}) }}" method="post">*/
/*     <a href="{{ path('retourActivation_view', {'id': retourActivation.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour au retour d'activation*/
/*     </a>*/
/*     {# Ici j'ai écrit le bouton de soumission à la main #}*/
/*     <input type="submit" value="Supprimer" class="btn btn-danger" />*/
/*     {# Ceci va générer le champ CSRF #}*/
/*     {{ form_rest(form) }}*/
/*   </form>*/
/* */
/* {% endblock %}*/
