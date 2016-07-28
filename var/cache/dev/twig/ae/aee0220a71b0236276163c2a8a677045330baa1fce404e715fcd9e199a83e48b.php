<?php

/* BenchmarkingBundle:Default/AfficheurExistant:view.html.twig */
class __TwigTemplate_9b837ac9043a8c2d8bf84bedf3063fda9f35b821a6510475ae3d39c0d6dcc809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/AfficheurExistant:view.html.twig", 3);
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
        $__internal_1fe23fc3da25a45f198315b03947bab1b37dda2efd7aeba8d74bdfd2bf0d1300 = $this->env->getExtension("native_profiler");
        $__internal_1fe23fc3da25a45f198315b03947bab1b37dda2efd7aeba8d74bdfd2bf0d1300->enter($__internal_1fe23fc3da25a45f198315b03947bab1b37dda2efd7aeba8d74bdfd2bf0d1300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/AfficheurExistant:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe23fc3da25a45f198315b03947bab1b37dda2efd7aeba8d74bdfd2bf0d1300->leave($__internal_1fe23fc3da25a45f198315b03947bab1b37dda2efd7aeba8d74bdfd2bf0d1300_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6f664d0f78b39e592078d470c795fa0b3fbdfa641355fdf8060b1450e160538 = $this->env->getExtension("native_profiler");
        $__internal_b6f664d0f78b39e592078d470c795fa0b3fbdfa641355fdf8060b1450e160538->enter($__internal_b6f664d0f78b39e592078d470c795fa0b3fbdfa641355fdf8060b1450e160538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un afficheur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b6f664d0f78b39e592078d470c795fa0b3fbdfa641355fdf8060b1450e160538->leave($__internal_b6f664d0f78b39e592078d470c795fa0b3fbdfa641355fdf8060b1450e160538_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_cf8b117057e8f32c4fcc048e508ad9aeb0e873c58053e9b4bf47d8028078ae94 = $this->env->getExtension("native_profiler");
        $__internal_cf8b117057e8f32c4fcc048e508ad9aeb0e873c58053e9b4bf47d8028078ae94->enter($__internal_cf8b117057e8f32c4fcc048e508ad9aeb0e873c58053e9b4bf47d8028078ae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "nom", array()), "html", null, true);
        echo "</h2>

    <div class=\"well\">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "description", array()), "html", null, true);
        echo "
    </div>



    <p>
        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("afficheurs");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_edit", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'afficheur
        </a>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("afficheur_delete", array("id" => $this->getAttribute((isset($context["afficheur"]) ? $context["afficheur"] : $this->getContext($context, "afficheur")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'afficheur
        </a>
    </p>


";
        
        $__internal_cf8b117057e8f32c4fcc048e508ad9aeb0e873c58053e9b4bf47d8028078ae94->leave($__internal_cf8b117057e8f32c4fcc048e508ad9aeb0e873c58053e9b4bf47d8028078ae94_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/AfficheurExistant:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  103 => 32,  96 => 28,  87 => 22,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/AfficheurExistant/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un afficheur - {{ parent() }}*/
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
/*   <h2>{{ afficheur.nom }}</h2>*/
/* */
/*     <div class="well">*/
/*         {{ afficheur.description }}*/
/*     </div>*/
/* */
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('afficheurs') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('afficheur_edit', {'id': afficheur.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier l'afficheur*/
/*         </a>*/
/*         <a href="{{ path('afficheur_delete', {'id': afficheur.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer l'afficheur*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
