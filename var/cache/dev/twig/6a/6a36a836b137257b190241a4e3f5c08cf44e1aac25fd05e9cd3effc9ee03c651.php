<?php

/* BenchmarkingBundle:Default/ComposantAffichage:view.html.twig */
class __TwigTemplate_754c7d6576b243324cf7717364144e24faf85ba7730da8d3f9ac7f619f0fa559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "BenchmarkingBundle:Default/ComposantAffichage:view.html.twig", 3);
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
        $__internal_dc22f44c3cf10a6a4cd494377535e26c3000ea6b37abec04fcdd5fe4f7ba6b82 = $this->env->getExtension("native_profiler");
        $__internal_dc22f44c3cf10a6a4cd494377535e26c3000ea6b37abec04fcdd5fe4f7ba6b82->enter($__internal_dc22f44c3cf10a6a4cd494377535e26c3000ea6b37abec04fcdd5fe4f7ba6b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/ComposantAffichage:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc22f44c3cf10a6a4cd494377535e26c3000ea6b37abec04fcdd5fe4f7ba6b82->leave($__internal_dc22f44c3cf10a6a4cd494377535e26c3000ea6b37abec04fcdd5fe4f7ba6b82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f694029449fdc6ad3b1ef8d767612bcfcd4d5107562267a4bf184fd9ec07de6c = $this->env->getExtension("native_profiler");
        $__internal_f694029449fdc6ad3b1ef8d767612bcfcd4d5107562267a4bf184fd9ec07de6c->enter($__internal_f694029449fdc6ad3b1ef8d767612bcfcd4d5107562267a4bf184fd9ec07de6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un composant d'affichage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f694029449fdc6ad3b1ef8d767612bcfcd4d5107562267a4bf184fd9ec07de6c->leave($__internal_f694029449fdc6ad3b1ef8d767612bcfcd4d5107562267a4bf184fd9ec07de6c_prof);

    }

    // line 9
    public function block_benchmarking_body($context, array $blocks = array())
    {
        $__internal_960f1476cee8a0daf89a5a1923d8edacc643a377c61178445a616cbafbcb20ae = $this->env->getExtension("native_profiler");
        $__internal_960f1476cee8a0daf89a5a1923d8edacc643a377c61178445a616cbafbcb20ae->enter($__internal_960f1476cee8a0daf89a5a1923d8edacc643a377c61178445a616cbafbcb20ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "benchmarking_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "nom", array()), "html", null, true);
        echo "</h2>


    <p>
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("composantsAffichage");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_edit", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier le composant
        </a>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("composantAffichage_delete", array("id" => $this->getAttribute((isset($context["composantAffichage"]) ? $context["composantAffichage"] : $this->getContext($context, "composantAffichage")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer le composant
        </a>
    </p>


";
        
        $__internal_960f1476cee8a0daf89a5a1923d8edacc643a377c61178445a616cbafbcb20ae->leave($__internal_960f1476cee8a0daf89a5a1923d8edacc643a377c61178445a616cbafbcb20ae_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/ComposantAffichage:view.html.twig";
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
/* {# src/BenchmarkingBundle/Resources/view/Default/Fonction/view.html.twig #}*/
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un composant d'affichage - {{ parent() }}*/
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
/*   <h2>{{ composantAffichage.nom }}</h2>*/
/* */
/* */
/*     <p>*/
/*         <a href="{{ path('composantsAffichage') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('composantAffichage_edit', {'id': composantAffichage.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier le composant*/
/*         </a>*/
/*         <a href="{{ path('composantAffichage_delete', {'id': composantAffichage.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer le composant*/
/*         </a>*/
/*     </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
