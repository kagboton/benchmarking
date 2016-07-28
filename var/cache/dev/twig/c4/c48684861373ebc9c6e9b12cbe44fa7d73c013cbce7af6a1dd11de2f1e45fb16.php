<?php

/* BenchmarkingBundle:Default:Famille/index.html.twig */
class __TwigTemplate_79e4e23fb262c79c328c2c94b0d97964e0dd05caaa091985882898f1b31298fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "BenchmarkingBundle:Default:Famille/index.html.twig", 3);
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
        $__internal_1117bea85292d3c2d9c13f593b85420ec6b82fcf72bf08dd56e1ea57423180a1 = $this->env->getExtension("native_profiler");
        $__internal_1117bea85292d3c2d9c13f593b85420ec6b82fcf72bf08dd56e1ea57423180a1->enter($__internal_1117bea85292d3c2d9c13f593b85420ec6b82fcf72bf08dd56e1ea57423180a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BenchmarkingBundle:Default:Famille/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1117bea85292d3c2d9c13f593b85420ec6b82fcf72bf08dd56e1ea57423180a1->leave($__internal_1117bea85292d3c2d9c13f593b85420ec6b82fcf72bf08dd56e1ea57423180a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f8b0a5a41fe3d057ed1219ce72de7c46db4ebf13f68ca441b0779aaa922caa5 = $this->env->getExtension("native_profiler");
        $__internal_8f8b0a5a41fe3d057ed1219ce72de7c46db4ebf13f68ca441b0779aaa922caa5->enter($__internal_8f8b0a5a41fe3d057ed1219ce72de7c46db4ebf13f68ca441b0779aaa922caa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Famille - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8f8b0a5a41fe3d057ed1219ce72de7c46db4ebf13f68ca441b0779aaa922caa5->leave($__internal_8f8b0a5a41fe3d057ed1219ce72de7c46db4ebf13f68ca441b0779aaa922caa5_prof);

    }

    // line 9
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_c81f48458fc70c30ae819e4faf6e59811201778136e8daff2f1420de41ff9c05 = $this->env->getExtension("native_profiler");
        $__internal_c81f48458fc70c30ae819e4faf6e59811201778136e8daff2f1420de41ff9c05->enter($__internal_c81f48458fc70c30ae819e4faf6e59811201778136e8daff2f1420de41ff9c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 10
        echo "
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "    <p class=\"alert alert-info\">
      ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\">Liste des familles</h4>
  </div>

  <div class=\"panel-body\">
    <ul class=\"list-group\">
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listFamilles"]) ? $context["listFamilles"] : $this->getContext($context, "listFamilles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["famille"]) {
            // line 24
            echo "
          <a class=\"list-group-item\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_view", array("id" => $this->getAttribute($context["famille"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["famille"], "nom", array()), "html", null, true);
            echo "
          </a>

      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "        <li>Pas (encore !) de familles</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['famille'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>

    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("famille_add");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-plus\"></i>
      Ajouter une famille de fonction
    </a>

  </div>


";
        
        $__internal_c81f48458fc70c30ae819e4faf6e59811201778136e8daff2f1420de41ff9c05->leave($__internal_c81f48458fc70c30ae819e4faf6e59811201778136e8daff2f1420de41ff9c05_prof);

    }

    public function getTemplateName()
    {
        return "BenchmarkingBundle:Default:Famille/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  113 => 32,  106 => 30,  97 => 26,  93 => 25,  90 => 24,  85 => 23,  76 => 16,  67 => 13,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/BenchmarkingBundle/Resources/view/Default/Famille/index.html.twig #}*/
/* */
/* {% extends "AdminBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Famille - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block admin_body %}*/
/* */
/*   {% for flashMessage in app.session.flashbag.get('info') %}*/
/*     <p class="alert alert-info">*/
/*       {{ flashMessage }}*/
/*     </p>*/
/*   {% endfor %}*/
/* */
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title">Liste des familles</h4>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*     <ul class="list-group">*/
/*       {% for famille in listFamilles %}*/
/* */
/*           <a class="list-group-item" href="{{ path('famille_view', {'id': famille.id}) }}">*/
/*             {{ famille.nom }}*/
/*           </a>*/
/* */
/*       {% else %}*/
/*         <li>Pas (encore !) de familles</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/* */
/*     <a href="{{ path('famille_add') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-plus"></i>*/
/*       Ajouter une famille de fonction*/
/*     </a>*/
/* */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
