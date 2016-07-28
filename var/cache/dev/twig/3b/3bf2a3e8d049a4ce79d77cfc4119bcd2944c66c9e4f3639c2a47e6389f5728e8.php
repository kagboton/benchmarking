<?php

/* @Benchmarking/Default/TailleEcran/view.html.twig */
class __TwigTemplate_d69d17541b0de92c186c77289196e18a17f264e8dedb46fddc703eaa4c303e62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TailleEcran/view.html.twig", 3);
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
        $__internal_4561b9bb122d476483fd107b2b944c3df1f8c500cff68ef04c26f945b17e299c = $this->env->getExtension("native_profiler");
        $__internal_4561b9bb122d476483fd107b2b944c3df1f8c500cff68ef04c26f945b17e299c->enter($__internal_4561b9bb122d476483fd107b2b944c3df1f8c500cff68ef04c26f945b17e299c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4561b9bb122d476483fd107b2b944c3df1f8c500cff68ef04c26f945b17e299c->leave($__internal_4561b9bb122d476483fd107b2b944c3df1f8c500cff68ef04c26f945b17e299c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c80226397e86a9661329b9192dac16bd686f1f742847457fbfb0bef1f21b152b = $this->env->getExtension("native_profiler");
        $__internal_c80226397e86a9661329b9192dac16bd686f1f742847457fbfb0bef1f21b152b->enter($__internal_c80226397e86a9661329b9192dac16bd686f1f742847457fbfb0bef1f21b152b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c80226397e86a9661329b9192dac16bd686f1f742847457fbfb0bef1f21b152b->leave($__internal_c80226397e86a9661329b9192dac16bd686f1f742847457fbfb0bef1f21b152b_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_eef719355b1ad23cd9a71513050db512464cd50e06a0844a7654ea1679d22a67 = $this->env->getExtension("native_profiler");
        $__internal_eef719355b1ad23cd9a71513050db512464cd50e06a0844a7654ea1679d22a67->enter($__internal_eef719355b1ad23cd9a71513050db512464cd50e06a0844a7654ea1679d22a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "taille", array()), "html", null, true);
        echo "\"</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("taillesEcran");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_edit", array("id" => $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier la taille d'écran
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tailleEcran_delete", array("id" => $this->getAttribute((isset($context["tailleEcran"]) ? $context["tailleEcran"] : $this->getContext($context, "tailleEcran")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer la taille d'écran
        </a>
    </p>


";
        
        $__internal_eef719355b1ad23cd9a71513050db512464cd50e06a0844a7654ea1679d22a67->leave($__internal_eef719355b1ad23cd9a71513050db512464cd50e06a0844a7654ea1679d22a67_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TailleEcran/view.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/TailleEcran/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une taille d'écran - {{ parent() }}*/
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
/*   <h2>{{ tailleEcran.taille }}"</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('taillesEcran') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('tailleEcran_edit', {'id': tailleEcran.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier la taille d'écran*/
/*         </a>*/
/*         <a href="{{ path('tailleEcran_delete', {'id': tailleEcran.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer la taille d'écran*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
