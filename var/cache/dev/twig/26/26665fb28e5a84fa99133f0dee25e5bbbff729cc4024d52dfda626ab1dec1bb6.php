<?php

/* @Benchmarking/Default/Segment/index.html.twig */
class __TwigTemplate_5c580e816f7bcc53a4cbc63918ac7ca4f980deb2c224530938fa2be83ca5091d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "@Benchmarking/Default/Segment/index.html.twig", 3);
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
        $__internal_a3611e31997ba7225f919783741d29a7a72696c63dbc76454d717f862801f128 = $this->env->getExtension("native_profiler");
        $__internal_a3611e31997ba7225f919783741d29a7a72696c63dbc76454d717f862801f128->enter($__internal_a3611e31997ba7225f919783741d29a7a72696c63dbc76454d717f862801f128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Benchmarking/Default/Segment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3611e31997ba7225f919783741d29a7a72696c63dbc76454d717f862801f128->leave($__internal_a3611e31997ba7225f919783741d29a7a72696c63dbc76454d717f862801f128_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccd1b2d430cc0230fa99f4ea5bd5ebc985bf53733640a269221c8357317b430c = $this->env->getExtension("native_profiler");
        $__internal_ccd1b2d430cc0230fa99f4ea5bd5ebc985bf53733640a269221c8357317b430c->enter($__internal_ccd1b2d430cc0230fa99f4ea5bd5ebc985bf53733640a269221c8357317b430c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ccd1b2d430cc0230fa99f4ea5bd5ebc985bf53733640a269221c8357317b430c->leave($__internal_ccd1b2d430cc0230fa99f4ea5bd5ebc985bf53733640a269221c8357317b430c_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_183c61fa00c663fbcf9630b0494763668e606da63b08422d70a622b525ee2a3d = $this->env->getExtension("native_profiler");
        $__internal_183c61fa00c663fbcf9630b0494763668e606da63b08422d70a622b525ee2a3d->enter($__internal_183c61fa00c663fbcf9630b0494763668e606da63b08422d70a622b525ee2a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
    <h4 class=\"panel-title\">Liste des segments</h4>
  </div>

  <div class=\"panel-body\">
    <ul class=\"list-group\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSegments"]) ? $context["listSegments"] : $this->getContext($context, "listSegments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 26
            echo "
          <a class=\"list-group-item\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("segment_view", array("id" => $this->getAttribute($context["segment"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "nom", array()), "html", null, true);
            echo "
          </a>

      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <li>Pas (encore !) de segments</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
    <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("segment_add");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-plus\"></i>
      Ajouter un segment
    </a>
  </div>



";
        
        $__internal_183c61fa00c663fbcf9630b0494763668e606da63b08422d70a622b525ee2a3d->leave($__internal_183c61fa00c663fbcf9630b0494763668e606da63b08422d70a622b525ee2a3d_prof);

    }

    public function getTemplateName()
    {
        return "@Benchmarking/Default/Segment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  115 => 34,  108 => 32,  99 => 28,  95 => 27,  92 => 26,  87 => 25,  78 => 18,  68 => 14,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Marque/index.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Segment - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/* */
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/* */
/*   {% endfor %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Liste des segments</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <ul class="list-group">*/
/*       {% for segment in listSegments %}*/
/* */
/*           <a class="list-group-item" href="{{ path('segment_view', {'id': segment.id}) }}">*/
/*             {{ segment.nom }}*/
/*           </a>*/
/* */
/*       {% else %}*/
/*         <li>Pas (encore !) de segments</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     <a href="{{ path('segment_add') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-plus"></i>*/
/*       Ajouter un segment*/
/*     </a>*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
