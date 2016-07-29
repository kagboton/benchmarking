<?php

/* @Benchmarking/Default/Segment/view.html.twig */
class __TwigTemplate_03d4a087f94bff8026f54cae2a842c87cc865bd1359997bff71e93d33aa7de9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Segment/view.html.twig", 3);
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
        $__internal_d8c54c36a774351294cedcb5ed23684a1dc7a4d0c641d95300a4ecab06ded9f0 = $this->env->getExtension("native_profiler");
        $__internal_d8c54c36a774351294cedcb5ed23684a1dc7a4d0c641d95300a4ecab06ded9f0->enter($__internal_d8c54c36a774351294cedcb5ed23684a1dc7a4d0c641d95300a4ecab06ded9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Segment/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c54c36a774351294cedcb5ed23684a1dc7a4d0c641d95300a4ecab06ded9f0->leave($__internal_d8c54c36a774351294cedcb5ed23684a1dc7a4d0c641d95300a4ecab06ded9f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e799e4ccf65056b712db9347c9c7376b801cb756583680b28b40d3b3c91141b9 = $this->env->getExtension("native_profiler");
        $__internal_e799e4ccf65056b712db9347c9c7376b801cb756583680b28b40d3b3c91141b9->enter($__internal_e799e4ccf65056b712db9347c9c7376b801cb756583680b28b40d3b3c91141b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e799e4ccf65056b712db9347c9c7376b801cb756583680b28b40d3b3c91141b9->leave($__internal_e799e4ccf65056b712db9347c9c7376b801cb756583680b28b40d3b3c91141b9_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_c47c64d8cc74a6e240b9bd59789550787f119f878a1bb6152d196743c5112857 = $this->env->getExtension("native_profiler");
        $__internal_c47c64d8cc74a6e240b9bd59789550787f119f878a1bb6152d196743c5112857->enter($__internal_c47c64d8cc74a6e240b9bd59789550787f119f878a1bb6152d196743c5112857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "nom", array()), "html", null, true);
        echo "</h4>
    </div>



    <div class=\"panel-body\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "description", array()), "html", null, true);
        echo "

        <br><br>

        <p>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("segments");
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("segment_edit", array("id" => $this->getAttribute((isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier le segment
            </a>
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("segment_delete", array("id" => $this->getAttribute((isset($context["segment"]) ? $context["segment"] : $this->getContext($context, "segment")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer le segment
            </a>
        </p>

    </div>




";
        
        $__internal_c47c64d8cc74a6e240b9bd59789550787f119f878a1bb6152d196743c5112857->leave($__internal_c47c64d8cc74a6e240b9bd59789550787f119f878a1bb6152d196743c5112857_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Segment/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  106 => 35,  99 => 31,  91 => 26,  82 => 20,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Segment/view.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un segment - {{ parent() }}*/
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
/*         <h4 class="panel-title">{{ segment.nom }}</h4>*/
/*     </div>*/
/* */
/* */
/* */
/*     <div class="panel-body">*/
/*         {{ segment.description }}*/
/* */
/*         <br><br>*/
/* */
/*         <p>*/
/*             <a href="{{ path('segments') }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-chevron-left"></i>*/
/*                 Retour à la liste*/
/*             </a>*/
/*             <a href="{{ path('segment_edit', {'id': segment.id}) }}" class="btn btn-default">*/
/*                 <i class="glyphicon glyphicon-edit"></i>*/
/*                 Modifier le segment*/
/*             </a>*/
/*             <a href="{{ path('segment_delete', {'id': segment.id}) }}" class="btn btn-danger">*/
/*                 <i class="glyphicon glyphicon-trash"></i>*/
/*                 Supprimer le segment*/
/*             </a>*/
/*         </p>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
