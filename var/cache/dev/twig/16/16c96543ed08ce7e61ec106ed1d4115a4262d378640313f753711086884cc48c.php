<?php

/* BenchmarkingBundle:Default/Segment:index.html.twig */
class __TwigTemplate_5e53a083ea600c502942d09c3f98b15e1facb836295806236ad13911059aee8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default/Segment:index.html.twig", 3);
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
        $__internal_6271b0b22d4e360696ec4d6e4add205151ba6913184192411b7892ef59e5d468 = $this->env->getExtension("native_profiler");
        $__internal_6271b0b22d4e360696ec4d6e4add205151ba6913184192411b7892ef59e5d468->enter($__internal_6271b0b22d4e360696ec4d6e4add205151ba6913184192411b7892ef59e5d468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default/Segment:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6271b0b22d4e360696ec4d6e4add205151ba6913184192411b7892ef59e5d468->leave($__internal_6271b0b22d4e360696ec4d6e4add205151ba6913184192411b7892ef59e5d468_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbc6e40a78f1d8217d4bf2ba427104cb5b393572b19028b8bae928b16017d882 = $this->env->getExtension("native_profiler");
        $__internal_dbc6e40a78f1d8217d4bf2ba427104cb5b393572b19028b8bae928b16017d882->enter($__internal_dbc6e40a78f1d8217d4bf2ba427104cb5b393572b19028b8bae928b16017d882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Segment - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dbc6e40a78f1d8217d4bf2ba427104cb5b393572b19028b8bae928b16017d882->leave($__internal_dbc6e40a78f1d8217d4bf2ba427104cb5b393572b19028b8bae928b16017d882_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_4abda7d4fd8c3ccc2f7089e006a99b61209d413af27c3e9245d2a8129c1f03ea = $this->env->getExtension("native_profiler");
        $__internal_4abda7d4fd8c3ccc2f7089e006a99b61209d413af27c3e9245d2a8129c1f03ea->enter($__internal_4abda7d4fd8c3ccc2f7089e006a99b61209d413af27c3e9245d2a8129c1f03ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_4abda7d4fd8c3ccc2f7089e006a99b61209d413af27c3e9245d2a8129c1f03ea->leave($__internal_4abda7d4fd8c3ccc2f7089e006a99b61209d413af27c3e9245d2a8129c1f03ea_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default/Segment:index.html.twig";
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
