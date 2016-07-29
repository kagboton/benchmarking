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
        $__internal_ddbe4b8805089b213c8bff6ff7406755764ca1ad2e899e4c286805eb1668658f = $this->env->getExtension("native_profiler");
        $__internal_ddbe4b8805089b213c8bff6ff7406755764ca1ad2e899e4c286805eb1668658f->enter($__internal_ddbe4b8805089b213c8bff6ff7406755764ca1ad2e899e4c286805eb1668658f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TailleEcran/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddbe4b8805089b213c8bff6ff7406755764ca1ad2e899e4c286805eb1668658f->leave($__internal_ddbe4b8805089b213c8bff6ff7406755764ca1ad2e899e4c286805eb1668658f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4eef48d63be3a0ffca920d90542076f08befe88d512314675bb13bd7849fd85d = $this->env->getExtension("native_profiler");
        $__internal_4eef48d63be3a0ffca920d90542076f08befe88d512314675bb13bd7849fd85d->enter($__internal_4eef48d63be3a0ffca920d90542076f08befe88d512314675bb13bd7849fd85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une taille d'écran - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4eef48d63be3a0ffca920d90542076f08befe88d512314675bb13bd7849fd85d->leave($__internal_4eef48d63be3a0ffca920d90542076f08befe88d512314675bb13bd7849fd85d_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_6d0ad9e32c3d3680ff4512c8964aab557ca21b57f4d9d2f7f0d250692f42c879 = $this->env->getExtension("native_profiler");
        $__internal_6d0ad9e32c3d3680ff4512c8964aab557ca21b57f4d9d2f7f0d250692f42c879->enter($__internal_6d0ad9e32c3d3680ff4512c8964aab557ca21b57f4d9d2f7f0d250692f42c879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        
        $__internal_6d0ad9e32c3d3680ff4512c8964aab557ca21b57f4d9d2f7f0d250692f42c879->leave($__internal_6d0ad9e32c3d3680ff4512c8964aab557ca21b57f4d9d2f7f0d250692f42c879_prof);

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
