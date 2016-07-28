<?php

/* @Benchmarking/Default/SousTechnologieAfficheur/view.html.twig */
class __TwigTemplate_02ab366c39ea762f939aa918ffc75c3058b77b4f7f690f43bcc62a584f707a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/SousTechnologieAfficheur/view.html.twig", 3);
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
        $__internal_e3a55914f9ca339271f6706e76131c6b6cc2353da7a17eb17afa80507321f410 = $this->env->getExtension("native_profiler");
        $__internal_e3a55914f9ca339271f6706e76131c6b6cc2353da7a17eb17afa80507321f410->enter($__internal_e3a55914f9ca339271f6706e76131c6b6cc2353da7a17eb17afa80507321f410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/SousTechnologieAfficheur/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3a55914f9ca339271f6706e76131c6b6cc2353da7a17eb17afa80507321f410->leave($__internal_e3a55914f9ca339271f6706e76131c6b6cc2353da7a17eb17afa80507321f410_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4b543a2e11624f5f96d8cf02f34f43d2af19f0880e9568e4ed78353c9e50332 = $this->env->getExtension("native_profiler");
        $__internal_a4b543a2e11624f5f96d8cf02f34f43d2af19f0880e9568e4ed78353c9e50332->enter($__internal_a4b543a2e11624f5f96d8cf02f34f43d2af19f0880e9568e4ed78353c9e50332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une sous technologie afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a4b543a2e11624f5f96d8cf02f34f43d2af19f0880e9568e4ed78353c9e50332->leave($__internal_a4b543a2e11624f5f96d8cf02f34f43d2af19f0880e9568e4ed78353c9e50332_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_cefd186e397163d73e422046650575f68ab7e859032fd34f370a00bc85c9cd63 = $this->env->getExtension("native_profiler");
        $__internal_cefd186e397163d73e422046650575f68ab7e859032fd34f370a00bc85c9cd63->enter($__internal_cefd186e397163d73e422046650575f68ab7e859032fd34f370a00bc85c9cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "nom", array()), "html", null, true);
        echo "</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sousTechnologiesAfficheur");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_edit", array("id" => $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier la sous technologie afficheur
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousTechnologieAfficheur_delete", array("id" => $this->getAttribute((isset($context["sousTechnologieAfficheur"]) ? $context["sousTechnologieAfficheur"] : $this->getContext($context, "sousTechnologieAfficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer la Sous  Technologie Afficheur
        </a>
    </p>


";
        
        $__internal_cefd186e397163d73e422046650575f68ab7e859032fd34f370a00bc85c9cd63->leave($__internal_cefd186e397163d73e422046650575f68ab7e859032fd34f370a00bc85c9cd63_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/SousTechnologieAfficheur/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  95 => 27,  88 => 23,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/SousTechnologieAfficheur/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une sous technologie afficheur - {{ parent() }}*/
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
/*   <h2>{{ sousTechnologieAfficheur.nom }}</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('sousTechnologiesAfficheur') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('sousTechnologieAfficheur_edit', {'id': sousTechnologieAfficheur.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier la sous technologie afficheur*/
/*         </a>*/
/*         <a href="{{ path('sousTechnologieAfficheur_delete', {'id': sousTechnologieAfficheur.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer la Sous  Technologie Afficheur*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
