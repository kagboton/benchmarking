<?php

/* @Benchmarking/Default/TypeRetourActivation/view.html.twig */
class __TwigTemplate_97bde80f44ceeb7dc4d49e8133ce45077e5f354af92c2079bc3845da866476e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Benchmarking/Default/TypeRetourActivation/view.html.twig", 3);
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
        $__internal_fe66a13164d54ac55826643ba43981c6e6e5cd9cbe5cc73a5b2ce3a86cef7204 = $this->env->getExtension("native_profiler");
        $__internal_fe66a13164d54ac55826643ba43981c6e6e5cd9cbe5cc73a5b2ce3a86cef7204->enter($__internal_fe66a13164d54ac55826643ba43981c6e6e5cd9cbe5cc73a5b2ce3a86cef7204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/TypeRetourActivation/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe66a13164d54ac55826643ba43981c6e6e5cd9cbe5cc73a5b2ce3a86cef7204->leave($__internal_fe66a13164d54ac55826643ba43981c6e6e5cd9cbe5cc73a5b2ce3a86cef7204_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cc779dc207a673668cdad0c62c30aaa47e38edc37c56bccaa01d294e2884992 = $this->env->getExtension("native_profiler");
        $__internal_1cc779dc207a673668cdad0c62c30aaa47e38edc37c56bccaa01d294e2884992->enter($__internal_1cc779dc207a673668cdad0c62c30aaa47e38edc37c56bccaa01d294e2884992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un retour d'activation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1cc779dc207a673668cdad0c62c30aaa47e38edc37c56bccaa01d294e2884992->leave($__internal_1cc779dc207a673668cdad0c62c30aaa47e38edc37c56bccaa01d294e2884992_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_5aa0b4539584a09025f337a5f9861380cb4fa0e92a9d258022fbb250575d6a25 = $this->env->getExtension("native_profiler");
        $__internal_5aa0b4539584a09025f337a5f9861380cb4fa0e92a9d258022fbb250575d6a25->enter($__internal_5aa0b4539584a09025f337a5f9861380cb4fa0e92a9d258022fbb250575d6a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
    <div class=\"panel-heading\">
        <h4 class=\"panel-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>


    <div class=\"panel-body\">
        <p>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("retoursActivation");
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_edit", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier le retour d'activation
            </a>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retourActivation_delete", array("id" => $this->getAttribute((isset($context["retourActivation"]) ? $context["retourActivation"] : $this->getContext($context, "retourActivation")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer le retour d'activation
            </a>
        </p>

    </div>





";
        
        $__internal_5aa0b4539584a09025f337a5f9861380cb4fa0e92a9d258022fbb250575d6a25->leave($__internal_5aa0b4539584a09025f337a5f9861380cb4fa0e92a9d258022fbb250575d6a25_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/TypeRetourActivation/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  98 => 30,  91 => 26,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/TypeRetourActivation/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un retour d'activation - {{ parent() }}*/
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
/*     <div class="panel-heading">*/
/*         <h4 class="panel-title">{{ retourActivation.nom }}</h4>*/
/*     </div>*/
/* */
/* */
/*     <div class="panel-body">*/
/*         <p>*/
/*             <a href="{{ path('retoursActivation') }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                 Retour à la liste*/
/*             </a>*/
/*             <a href="{{ path('retourActivation_edit', {'id': retourActivation.id}) }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-edit"></i>*/
/*                 Modifier le retour d'activation*/
/*             </a>*/
/*             <a href="{{ path('retourActivation_delete', {'id': retourActivation.id}) }}" class="btn btn-danger">*/
/*                 <i class="glyphicon glyphicon-trash"></i>*/
/*                 Supprimer le retour d'activation*/
/*             </a>*/
/*         </p>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
