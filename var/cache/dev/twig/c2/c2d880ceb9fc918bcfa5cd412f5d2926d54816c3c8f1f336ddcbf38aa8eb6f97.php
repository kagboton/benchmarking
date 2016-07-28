<?php

/* @Benchmarking/Default/Famille/view.html.twig */
class __TwigTemplate_9c340288371a2eef767ac5f967da56ae32a4db423db687dc3a400b4d2c00ba47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Famille/view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40a328e07181939f81d131f30b1a7f695689dd85e8ebf1a75257bfa84638a3a6 = $this->env->getExtension("native_profiler");
        $__internal_40a328e07181939f81d131f30b1a7f695689dd85e8ebf1a75257bfa84638a3a6->enter($__internal_40a328e07181939f81d131f30b1a7f695689dd85e8ebf1a75257bfa84638a3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Famille/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a328e07181939f81d131f30b1a7f695689dd85e8ebf1a75257bfa84638a3a6->leave($__internal_40a328e07181939f81d131f30b1a7f695689dd85e8ebf1a75257bfa84638a3a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ebeb44d20328e1526c2c709e66324a4d087ad4ac179f11f9cca5d4828795251 = $this->env->getExtension("native_profiler");
        $__internal_6ebeb44d20328e1526c2c709e66324a4d087ad4ac179f11f9cca5d4828795251->enter($__internal_6ebeb44d20328e1526c2c709e66324a4d087ad4ac179f11f9cca5d4828795251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ebeb44d20328e1526c2c709e66324a4d087ad4ac179f11f9cca5d4828795251->leave($__internal_6ebeb44d20328e1526c2c709e66324a4d087ad4ac179f11f9cca5d4828795251_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_30db62f3b68a790de5c97f5bea5d559a5de052d02bdfcfbafe5dcba7e7cd1069 = $this->env->getExtension("native_profiler");
        $__internal_30db62f3b68a790de5c97f5bea5d559a5de052d02bdfcfbafe5dcba7e7cd1069->enter($__internal_30db62f3b68a790de5c97f5bea5d559a5de052d02bdfcfbafe5dcba7e7cd1069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
      <h4>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>

    <div class=\"panel-body\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "description", array()), "html", null, true);
        echo "

        <br><br>

        <p>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("familles");
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_edit", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier la famille
            </a>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_delete", array("id" => $this->getAttribute((isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer la famille
            </a>
        </p>
    </div>


";
        
        $__internal_30db62f3b68a790de5c97f5bea5d559a5de052d02bdfcfbafe5dcba7e7cd1069->leave($__internal_30db62f3b68a790de5c97f5bea5d559a5de052d02bdfcfbafe5dcba7e7cd1069_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Famille/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  104 => 33,  97 => 29,  89 => 24,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Famille/view.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une famille - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
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
/*       <h4>{{ famille.nom }}</h4>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*         {{ famille.description }}*/
/* */
/*         <br><br>*/
/* */
/*         <p>*/
/*             <a href="{{ path('familles') }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                 Retour à la liste*/
/*             </a>*/
/*             <a href="{{ path('famille_edit', {'id': famille.id}) }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-edit"></i>*/
/*                 Modifier la famille*/
/*             </a>*/
/*             <a href="{{ path('famille_delete', {'id': famille.id}) }}" class="btn btn-danger">*/
/*                 <i class="glyphicon glyphicon-trash"></i>*/
/*                 Supprimer la famille*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
