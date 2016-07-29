<?php

/* @Benchmarking/Default/CommandePhysique/view.html.twig */
class __TwigTemplate_5c840d8eeeea4df7a02ece35bc7309866c4f02303021eb3fde90dc701950a3b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/CommandePhysique/view.html.twig", 3);
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
        $__internal_526988bdbec715cd51f0ef821e5baa00c4e87342d2ae5aed6d7ff66b45909dcd = $this->env->getExtension("native_profiler");
        $__internal_526988bdbec715cd51f0ef821e5baa00c4e87342d2ae5aed6d7ff66b45909dcd->enter($__internal_526988bdbec715cd51f0ef821e5baa00c4e87342d2ae5aed6d7ff66b45909dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/CommandePhysique/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_526988bdbec715cd51f0ef821e5baa00c4e87342d2ae5aed6d7ff66b45909dcd->leave($__internal_526988bdbec715cd51f0ef821e5baa00c4e87342d2ae5aed6d7ff66b45909dcd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b484bc6f5f3f67f7df068d7cc289c8a2533a4d853af6e4f4da5f54b9d53a48b5 = $this->env->getExtension("native_profiler");
        $__internal_b484bc6f5f3f67f7df068d7cc289c8a2533a4d853af6e4f4da5f54b9d53a48b5->enter($__internal_b484bc6f5f3f67f7df068d7cc289c8a2533a4d853af6e4f4da5f54b9d53a48b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une commande physique - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b484bc6f5f3f67f7df068d7cc289c8a2533a4d853af6e4f4da5f54b9d53a48b5->leave($__internal_b484bc6f5f3f67f7df068d7cc289c8a2533a4d853af6e4f4da5f54b9d53a48b5_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_18f8f4c75c75847463a69df669f0440abde0d19c98adfac84bae4604a37c3e90 = $this->env->getExtension("native_profiler");
        $__internal_18f8f4c75c75847463a69df669f0440abde0d19c98adfac84bae4604a37c3e90->enter($__internal_18f8f4c75c75847463a69df669f0440abde0d19c98adfac84bae4604a37c3e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "
        <p class=\"alert alert-info\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
  <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "nom", array()), "html", null, true);
        echo "</h2>



    <p>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("commandesPhysiques");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_edit", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier la commande
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commandePhysique_delete", array("id" => $this->getAttribute((isset($context["commandePhysique"]) ? $context["commandePhysique"] : $this->getContext($context, "commandePhysique")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer la commande
        </a>
    </p>


";
        
        $__internal_18f8f4c75c75847463a69df669f0440abde0d19c98adfac84bae4604a37c3e90->leave($__internal_18f8f4c75c75847463a69df669f0440abde0d19c98adfac84bae4604a37c3e90_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/CommandePhysique/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  96 => 28,  89 => 24,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/CommandePhysique/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une commande physique - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block benchmarking_body %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*         <p class="alert alert-info">*/
/*             {{ flashMessage }}*/
/*         </p>*/
/* */
/*     {% endfor %}*/
/* */
/*   <h2>{{ commandePhysique.nom }}</h2>*/
/* */
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('commandesPhysiques') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('commandePhysique_edit', {'id': commandePhysique.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier la commande*/
/*         </a>*/
/*         <a href="{{ path('commandePhysique_delete', {'id': commandePhysique.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer la commande*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
