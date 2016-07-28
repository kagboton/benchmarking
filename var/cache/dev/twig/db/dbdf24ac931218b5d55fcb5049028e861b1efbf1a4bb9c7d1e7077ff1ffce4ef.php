<?php

/* BenchmarkingBundle:Default/Localisation:view.html.twig */
class __TwigTemplate_2ab2981f093f7213e558c2d6a743843f6292a1cfc3dc9128596735e321d79631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/Localisation:view.html.twig", 3);
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
        $__internal_8e0b618750e8b7390c40c382445ad84850e219b00085abfec8d6e938d48be9cd = $this->env->getExtension("native_profiler");
        $__internal_8e0b618750e8b7390c40c382445ad84850e219b00085abfec8d6e938d48be9cd->enter($__internal_8e0b618750e8b7390c40c382445ad84850e219b00085abfec8d6e938d48be9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Localisation:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e0b618750e8b7390c40c382445ad84850e219b00085abfec8d6e938d48be9cd->leave($__internal_8e0b618750e8b7390c40c382445ad84850e219b00085abfec8d6e938d48be9cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bd0d963c67076bd2ed4ffd4cd9044c05dace28869c14d5f14d7ec2325968b77 = $this->env->getExtension("native_profiler");
        $__internal_4bd0d963c67076bd2ed4ffd4cd9044c05dace28869c14d5f14d7ec2325968b77->enter($__internal_4bd0d963c67076bd2ed4ffd4cd9044c05dace28869c14d5f14d7ec2325968b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une localisation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4bd0d963c67076bd2ed4ffd4cd9044c05dace28869c14d5f14d7ec2325968b77->leave($__internal_4bd0d963c67076bd2ed4ffd4cd9044c05dace28869c14d5f14d7ec2325968b77_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_aaf61df1718cfef8b1995abeda2ab55063fa42e3caf3836934a82b58570ae55e = $this->env->getExtension("native_profiler");
        $__internal_aaf61df1718cfef8b1995abeda2ab55063fa42e3caf3836934a82b58570ae55e->enter($__internal_aaf61df1718cfef8b1995abeda2ab55063fa42e3caf3836934a82b58570ae55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "nom", array()), "html", null, true);
        echo "</h2>

    <p>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("localisations");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_edit", array("id" => $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier la localisation
        </a>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("localisation_delete", array("id" => $this->getAttribute((isset($context["localisation"]) ? $context["localisation"] : $this->getContext($context, "localisation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer la localisation
        </a>
    </p>


";
        
        $__internal_aaf61df1718cfef8b1995abeda2ab55063fa42e3caf3836934a82b58570ae55e->leave($__internal_aaf61df1718cfef8b1995abeda2ab55063fa42e3caf3836934a82b58570ae55e_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Localisation:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  94 => 26,  87 => 22,  81 => 19,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Localisation/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une localisation - {{ parent() }}*/
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
/*   <h2>{{ localisation.nom }}</h2>*/
/* */
/*     <p>*/
/*         <a href="{{ path('localisations') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('localisation_edit', {'id': localisation.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier la localisation*/
/*         </a>*/
/*         <a href="{{ path('localisation_delete', {'id': localisation.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer la localisation*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
