<?php

/* @Benchmarking/Default/BoiteVitesse/view.html.twig */
class __TwigTemplate_647b095c2aa1386b83d6aced8e274aa37fdabe6dca39343b35db0c213d4e751a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/BoiteVitesse/view.html.twig", 3);
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
        $__internal_516cc85dd2867224e93f4a598a843c23195071416b6e87f887846fc505570784 = $this->env->getExtension("native_profiler");
        $__internal_516cc85dd2867224e93f4a598a843c23195071416b6e87f887846fc505570784->enter($__internal_516cc85dd2867224e93f4a598a843c23195071416b6e87f887846fc505570784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/BoiteVitesse/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516cc85dd2867224e93f4a598a843c23195071416b6e87f887846fc505570784->leave($__internal_516cc85dd2867224e93f4a598a843c23195071416b6e87f887846fc505570784_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48b35308db1a3886c6b3b8dc088a54c81f0e91edc590d63515f84f3267fdfc0a = $this->env->getExtension("native_profiler");
        $__internal_48b35308db1a3886c6b3b8dc088a54c81f0e91edc590d63515f84f3267fdfc0a->enter($__internal_48b35308db1a3886c6b3b8dc088a54c81f0e91edc590d63515f84f3267fdfc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une boîte à vitesse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_48b35308db1a3886c6b3b8dc088a54c81f0e91edc590d63515f84f3267fdfc0a->leave($__internal_48b35308db1a3886c6b3b8dc088a54c81f0e91edc590d63515f84f3267fdfc0a_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_fa6c6f66b3374bacd8493eb8915ff72841669db75d81d79e8430e6b07d5232af = $this->env->getExtension("native_profiler");
        $__internal_fa6c6f66b3374bacd8493eb8915ff72841669db75d81d79e8430e6b07d5232af->enter($__internal_fa6c6f66b3374bacd8493eb8915ff72841669db75d81d79e8430e6b07d5232af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>


    <div class=\"panel-body\">
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "description", array()), "html", null, true);
        echo "

        <br><br>

        <p>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("boitesVitesse");
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_edit", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier la boîte à vitesse
            </a>
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boiteVitesse_delete", array("id" => $this->getAttribute((isset($context["boiteVitesse"]) ? $context["boiteVitesse"] : $this->getContext($context, "boiteVitesse")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer la boîte à vitesse
            </a>
        </p>
    </div>

";
        
        $__internal_fa6c6f66b3374bacd8493eb8915ff72841669db75d81d79e8430e6b07d5232af->leave($__internal_fa6c6f66b3374bacd8493eb8915ff72841669db75d81d79e8430e6b07d5232af_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/BoiteVitesse/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 34,  98 => 30,  90 => 25,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/BoiteVitesse/view.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une boîte à vitesse - {{ parent() }}*/
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
/*         <h4 class="panel-title">{{ boiteVitesse.nom }}</h4>*/
/*     </div>*/
/* */
/* */
/*     <div class="panel-body">*/
/*         {{ boiteVitesse.description }}*/
/* */
/*         <br><br>*/
/* */
/*         <p>*/
/*             <a href="{{ path('boitesVitesse') }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                 Retour à la liste*/
/*             </a>*/
/*             <a href="{{ path('boiteVitesse_edit', {'id': boiteVitesse.id}) }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-edit"></i>*/
/*                 Modifier la boîte à vitesse*/
/*             </a>*/
/*             <a href="{{ path('boiteVitesse_delete', {'id': boiteVitesse.id}) }}" class="btn btn-danger">*/
/*                 <i class="glyphicon glyphicon-trash"></i>*/
/*                 Supprimer la boîte à vitesse*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
